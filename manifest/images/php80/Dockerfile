FROM --platform=$TARGETOS/$TARGETARCH docker.io/library/almalinux:9-minimal

LABEL maintainer="Cameron Carney <ccarney@zyphi.co>"

# Allows the end user to customize what php modules and packages they want on buildtime
ENV PHP_VERSION=8.0
ENV PHP_MODULES=bcmath,cli,common,fpm,gd,gmp,intl,json,mbstring,mysqlnd,opcache,pdo,pecl-zip,process,soap,sodium,xml,zstd
ENV EXTRA_PACKAGES=""

# Create the Caddy group and user with ID 500
RUN microdnf install -y shadow-utils tzdata && \
    groupadd -r -g 500 caddy && \
    useradd -r -g caddy -u 500 -d /var/lib/caddy -s /sbin/nologin -c 'Caddy web server' caddy && \
    install -d -m 0750 -o caddy -g caddy /var/lib/caddy

# Install any required dependencies for the container to operate
RUN rpm --install https://dl.fedoraproject.org/pub/epel/epel-release-latest-9.noarch.rpm && \
    rpm --install https://rpms.remirepo.net/enterprise/remi-release-9.rpm && \
    curl -Lo /etc/yum.repos.d/caddy.repo https://copr.fedorainfracloud.org/coprs/g/caddy/caddy/repo/epel-9/group_caddy-caddy-epel-9.repo && \
    microdnf module enable -y php:remi-${PHP_VERSION} && \
    eval microdnf install -y ca-certificates caddy php-{$PHP_MODULES} \
        python3 python3-pip tini ${EXTRA_PACKAGES} && \
    pip3 install yacron && \
    microdnf clean all && \
    pip3 cache purge

# Copy configuration to containers
COPY ./../common/entrypoint.sh /entrypoint.sh
COPY ./../common/etc /etc
COPY ./../common/var /var

# Export a persistent volume for caddy to store persistent data
VOLUME /var/lib/caddy

WORKDIR /var/www/html

# Let tini execute /entrypoint. This allows proper reaping of processes
USER caddy
ENTRYPOINT [ "/usr/bin/tini", "--", "/entrypoint.sh" ]
CMD [ "start-web" ]