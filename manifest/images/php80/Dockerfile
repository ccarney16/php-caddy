FROM --platform=$TARGETOS/$TARGETARCH docker.io/library/almalinux:9-minimal

LABEL maintainer="Cameron Carney <ccarney@zyphi.co>"

# Allows the end user to customize what php modules and packages they want on buildtime.
ENV PHP_VERSION=8.0
ENV PHP_MODULES=bcmath,cli,common,fpm,gd,gmp,intl,json,mbstring,mysqlnd,opcache,pdo,pecl-zip,process,soap,sodium,xml,zstd
ENV EXTRA_PACKAGES=""

# Install any required dependencies for the container to operate
RUN rpm --install https://dl.fedoraproject.org/pub/epel/epel-release-latest-9.noarch.rpm && \
    rpm --install https://rpms.remirepo.net/enterprise/remi-release-9.rpm && \
    microdnf module enable -y php:remi-${PHP_VERSION} && \
    eval microdnf install -y ca-certificates caddy php-{$PHP_MODULES} \
        python3 python3-pip tini tzdata ${EXTRA_PACKAGES} && \
    pip3 install yacron && \
    microdnf clean all && \
    pip3 cache purge

# Copy configuration to containers
COPY ./../common/entrypoint.sh /entrypoint.sh
COPY ./../common/etc /etc
COPY ./../common/html /var/www/html

# Export a persistent volume for caddy to store persistent data
VOLUME /var/lib/caddy

WORKDIR /var/www/html

# Let tini execute /entrypoint. This allows proper reaping of processes.
USER caddy
ENTRYPOINT [ "/usr/bin/tini", "--", "/entrypoint.sh" ]
CMD [ "start-web" ]