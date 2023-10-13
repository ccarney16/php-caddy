<!DOCTYPE html>
<html>
	<head>
		<title>Welcome to caddy!</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="icon" href="data:,">
		<style>
			* {
				box-sizing: border-box;
				padding: 0;
				margin: 0;
			}

			body {
				background: #f1f4f5;
				font-family: sans-serif;
				font-size: 20px;
				-webkit-font-smoothing: antialiased;
			}

			a {
				color: #2f79ff;
				text-decoration: none;
			}

			a:hover {
				text-decoration: underline;
			}

			.stack {
				width: 70%;
				max-width: 1150px;
				margin: 25px 0 150px 25px;
				display: flex;
				align-content: flex-start;
			}

			.paper {
				position: relative;
				flex-shrink: 0;
				width: 100%;

				background: white;
				border-radius: 3px;
				box-shadow: 1px 2px 4px 1px rgba(0, 0, 0, .15);
				padding: 100px;
			}

			#paper1 {
                top: 35px;
                transform: rotate(6deg);
                left: 13%;
                max-height: 2500px;
			}

			#paper2 {
                top: 20px;
                transform: rotate(3deg);
                left: -93%;
                max-height: 3100px;
			}

			#paper3 {
                top: 30px;
                left: -200%;
			}

			#caddy {
				max-width: 175px;
			}

			#caddy .caddy-color {
				fill: #005e7e;
			}

            #page-header {
                margin-bottom: 75px;
            }

			h1 {
				font-size: 20px;
				margin-bottom: 50px;
			}

			h1 .emoji {
				font-size: 150%;
				vertical-align: middle;
			}

			h1 .lang {
				margin-right: 1.5em;
			}

			h2 {
				font-size: 28px;
				margin-top: 1.5em;
			}

			p,
			ol,
			ul {
				color: #333;
				line-height: 1.5em;
			}

			p {
				margin: 1.5em 0;
			}

			ol,
			ul {
				margin: .5em 0 .5em 2em;
			}

			ol li,
			ul li {
				margin-left: 1em;
				margin-bottom: .5em;
			}

			li ol {
				list-style-type: lower-alpha;
			}

			code {
				color: #000;
				font-family: Menlo, monospace;
				background: #f0f0f0;
				border-radius: 2px;
				padding: 4px 8px;
				font-size: 90%;
			}

			.warn {
				color: #dd0000;
			}

			footer {
				color: #777;
				font-size: 16px;
				text-align: center;
				max-width: 600px;
				margin: 0 auto 50px;
			}

			#disclaimer {
				font-size: 14px;
				margin-top: 20px;
				display: inline-block;
				border-top: 1px solid #ccc;
				padding: 20px;
			}

			@media (max-width: 1100px) {
				.stack {
					width: 85%;
				}
			}

			@media (max-width: 800px) {
				.stack {
					margin: 0 0 50px 0;
					width: 100%;
				}

				.paper {
					padding: 50px;
				}

				#paper1,
				#paper2 {
					display: none;
				}

				#paper3 {
					left: 0;
					transform: none;
					top: 0;
				}

				#caddy {
					margin-bottom: 25px;
				}
			}

            #phpinfo {}
            #phpinfo pre {margin: 0; font-family: monospace;}
            #phpinfo a:link {color: #009; text-decoration: none; background-color: #fff;}
            #phpinfo a:hover {text-decoration: underline;}
            #phpinfo table {border-collapse: collapse; border: 0; width: 934px; box-shadow: 1px 2px 3px #ccc;}
            #phpinfo .center {text-align: center;}
            #phpinfo .center table {margin: 1em auto; text-align: left;}
            #phpinfo .center th {text-align: center !important;}
            #phpinfo td, th {border: 1px solid #666; font-size: 75%; vertical-align: baseline; padding: 4px 5px;}
            #phpinfo h1 {font-size: 150%;}
            #phpinfo h2 {font-size: 125%;}
            #phpinfo .p {text-align: left;}
            #phpinfo .e {background-color: #ccf; width: 300px; font-weight: bold;}
            #phpinfo .h {background-color: #99c; font-weight: bold;}
            #phpinfo .v {background-color: #ddd; max-width: 300px; overflow-x: auto; word-wrap: break-word;}
            #phpinfo .v i {color: #999;}
            #phpinfo img {float: right; border: 0;}
            #phpinfo hr {width: 934px; background-color: #ccc; border: 0; height: 1px;}
		</style>
	</head>
	<body>
		<div class="stack">
			<div class="paper" id="paper1"></div>
			<div class="paper" id="paper2"></div>
			<div class="paper" id="paper3">
				<p id="page-header"><a href="https://caddyserver.com/" title="Caddy Web Server">
                    <svg id="caddy" viewBox="0 0 302 93" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"><g><path d="M299.377,2.595c1.557,1.556 2.335,3.429 2.335,5.617c0,2.188 -0.775,4.064 -2.324,5.628c-1.549,1.564 -3.432,2.346 -5.65,2.346c-2.217,0 -4.093,-0.775 -5.628,-2.324c-1.534,-1.55 -2.302,-3.418 -2.302,-5.606c0,-2.188 0.775,-4.068 2.324,-5.639c1.55,-1.571 3.426,-2.357 5.628,-2.357c2.203,0 4.075,0.778 5.617,2.335Zm-1.057,10c1.175,-1.219 1.762,-2.687 1.762,-4.405c0,-1.718 -0.617,-3.194 -1.85,-4.428c-1.234,-1.233 -2.721,-1.85 -4.461,-1.85c-1.74,0 -3.23,0.624 -4.471,1.872c-1.241,1.249 -1.862,2.739 -1.862,4.472c0,1.733 0.61,3.216 1.829,4.449c1.219,1.234 2.716,1.851 4.493,1.851c1.777,0 3.282,-0.639 4.516,-1.917l-2.555,0l-1.917,-2.753l-0.969,0l0,2.753l-2.423,0l0,-8.943l3.546,0c1.41,0 2.416,0.243 3.018,0.727c0.602,0.485 0.903,1.263 0.903,2.335c0,1.307 -0.594,2.217 -1.784,2.731l2.225,3.106Zm-4.318,-4.692c0.573,0 0.962,-0.091 1.168,-0.275c0.206,-0.184 0.308,-0.477 0.308,-0.881c0,-0.404 -0.106,-0.683 -0.319,-0.837c-0.213,-0.154 -0.584,-0.231 -1.112,-0.231l-1.212,0l0,2.224l1.167,0Z" class="caddy-color"  style="fill-rule:nonzero;"/><path d="M34.502,73.491c-6.519,0 -12.408,-1.515 -17.666,-4.544c-5.258,-3.03 -9.379,-7.216 -12.362,-12.558c-2.983,-5.343 -4.474,-11.369 -4.474,-18.08c0,-6.71 1.507,-12.737 4.52,-18.079c3.014,-5.343 7.15,-9.529 12.408,-12.558c5.259,-3.03 11.147,-4.545 17.667,-4.545c5.289,0 10.117,0.978 14.483,2.932c4.367,1.955 8.057,4.789 11.07,8.502l-7.749,7.721c-4.674,-5.343 -10.424,-8.014 -17.251,-8.014c-4.428,0 -8.395,1.026 -11.9,3.079c-3.506,2.052 -6.243,4.902 -8.211,8.551c-1.968,3.648 -2.952,7.785 -2.952,12.411c0,4.626 0.984,8.763 2.952,12.412c1.968,3.648 4.705,6.498 8.211,8.551c3.505,2.052 7.472,3.078 11.9,3.078c6.827,0 12.577,-2.704 17.251,-8.111l7.749,7.818c-3.013,3.714 -6.719,6.548 -11.116,8.502c-4.397,1.955 -9.241,2.932 -14.53,2.932Z" class="caddy-color" style="fill-rule:nonzero;"/><path d="M84.78,19.741c7.257,0 12.807,1.84 16.651,5.522c3.844,3.681 5.766,9.235 5.766,16.662l0,30.589l-10.886,0l0,-6.353c-1.414,2.281 -3.428,4.024 -6.042,5.229c-2.614,1.205 -5.766,1.808 -9.456,1.808c-3.69,0 -6.919,-0.668 -9.687,-2.004c-2.767,-1.335 -4.904,-3.192 -6.411,-5.57c-1.507,-2.378 -2.26,-5.066 -2.26,-8.063c0,-4.69 1.645,-8.453 4.935,-11.287c3.291,-2.834 8.472,-4.251 15.545,-4.251l12.731,0l0,-0.782c0,-3.649 -1.031,-6.45 -3.091,-8.405c-2.06,-1.954 -5.12,-2.931 -9.179,-2.931c-2.768,0 -5.489,0.456 -8.164,1.368c-2.676,0.912 -4.936,2.182 -6.781,3.811l-4.52,-8.893c2.583,-2.085 5.689,-3.681 9.317,-4.789c3.629,-1.107 7.473,-1.661 11.532,-1.661Zm-1.568,44.564c2.89,0 5.458,-0.701 7.703,-2.102c2.244,-1.4 3.828,-3.404 4.751,-6.01l0,-6.059l-11.901,0c-6.642,0 -9.963,2.313 -9.963,6.939c0,2.215 0.83,3.974 2.491,5.277c1.66,1.303 3.966,1.955 6.919,1.955Z" class="caddy-color" style="fill-rule:nonzero;"/><path d="M165.593,0l0,72.514l-11.071,0l0,-6.743c-1.906,2.475 -4.258,4.332 -7.057,5.57c-2.798,1.238 -5.889,1.857 -9.271,1.857c-4.736,0 -8.995,-1.108 -12.777,-3.323c-3.782,-2.215 -6.75,-5.359 -8.902,-9.431c-2.153,-4.072 -3.229,-8.746 -3.229,-14.023c0,-5.278 1.076,-9.936 3.229,-13.976c2.152,-4.039 5.12,-7.166 8.902,-9.381c3.782,-2.215 8.041,-3.323 12.777,-3.323c3.259,0 6.242,0.586 8.948,1.759c2.706,1.173 5.013,2.932 6.919,5.277l0,-26.777l11.532,0Zm-26.015,62.741c2.767,0 5.258,-0.668 7.472,-2.003c2.214,-1.336 3.967,-3.242 5.258,-5.717c1.292,-2.476 1.938,-5.343 1.938,-8.6c0,-3.258 -0.646,-6.125 -1.938,-8.6c-1.291,-2.476 -3.044,-4.382 -5.258,-5.718c-2.214,-1.335 -4.705,-2.003 -7.472,-2.003c-2.768,0 -5.259,0.668 -7.473,2.003c-2.214,1.336 -3.967,3.242 -5.258,5.718c-1.292,2.475 -1.937,5.342 -1.937,8.6c0,3.257 0.645,6.124 1.937,8.6c1.291,2.475 3.044,4.381 5.258,5.717c2.214,1.335 4.705,2.003 7.473,2.003Z" class="caddy-color" style="fill-rule:nonzero;"/><path d="M224.357,0l0,72.514l-11.07,0l0,-6.743c-1.906,2.475 -4.259,4.332 -7.057,5.57c-2.798,1.238 -5.889,1.857 -9.271,1.857c-4.736,0 -8.995,-1.108 -12.777,-3.323c-3.783,-2.215 -6.75,-5.359 -8.903,-9.431c-2.152,-4.072 -3.229,-8.746 -3.229,-14.023c0,-5.278 1.077,-9.936 3.229,-13.976c2.153,-4.039 5.12,-7.166 8.903,-9.381c3.782,-2.215 8.041,-3.323 12.777,-3.323c3.259,0 6.242,0.586 8.948,1.759c2.706,1.173 5.012,2.932 6.919,5.277l0,-26.777l11.531,0Zm-26.015,62.741c2.768,0 5.259,-0.668 7.473,-2.003c2.214,-1.336 3.967,-3.242 5.258,-5.717c1.292,-2.476 1.937,-5.343 1.937,-8.6c0,-3.258 -0.645,-6.125 -1.937,-8.6c-1.291,-2.476 -3.044,-4.382 -5.258,-5.718c-2.214,-1.335 -4.705,-2.003 -7.473,-2.003c-2.767,0 -5.258,0.668 -7.472,2.003c-2.214,1.336 -3.967,3.242 -5.259,5.718c-1.291,2.475 -1.937,5.342 -1.937,8.6c0,3.257 0.646,6.124 1.937,8.6c1.292,2.475 3.045,4.381 5.259,5.717c2.214,1.335 4.705,2.003 7.472,2.003Z" class="caddy-color" style="fill-rule:nonzero;"/><path d="M281,20.327l-23.063,56.389c-2.152,5.668 -4.766,9.659 -7.841,11.972c-3.075,2.313 -6.796,3.469 -11.163,3.469c-2.46,0 -4.889,-0.424 -7.288,-1.271c-2.398,-0.846 -4.366,-2.019 -5.904,-3.518l4.613,-8.991c1.107,1.108 2.414,1.988 3.921,2.639c1.506,0.652 3.028,0.977 4.566,0.977c2.03,0 3.705,-0.553 5.028,-1.661c1.322,-1.108 2.537,-2.964 3.644,-5.571l0.83,-2.052l-21.495,-52.382l11.993,0l15.498,38.603l15.591,-38.603l11.07,0Z" class="caddy-color" style="fill-rule:nonzero;"/></g>
                    </svg>
                </a>
                <span style="font-size: 32px">&nbsp;&nbsp;&&nbsp;&nbsp;</span>
                <a href="http://www.php.net/">
                    <img border="0" src="data:image/png;base64,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" alt="PHP logo">
                </a>
				<h1>
					<!-- English --> <span class="lang">Congratulations!</span>
					<!-- Japanese --> <span class="lang">おめでとう!</span>
					<!-- Spanish --> <span class="lang">Felicidades!</span>
					<!-- Chinese --> <span class="lang">恭喜!</span>
					<!-- Hindi --> <span class="lang">बधाई हो!</span>
					<!-- Russian --> <span class="lang">Поздравляю!</span>
					<span class="emoji">🎊</span>
				</h1>
				<p>
					Your web server is working. Now make it work for you. 💪
				</p>
                <div id="phpinfo">
                    <?php

                        ob_start () ;
                        phpinfo () ;
                        $pinfo = ob_get_contents () ;
                        ob_end_clean () ;

                        // the name attribute "module_Zend Optimizer" of an anker-tag is not xhtml valide, so replace it with "module_Zend_Optimizer"
                        echo ( str_replace ( "module_Zend Optimizer", "module_Zend_Optimizer", preg_replace ( '%^.*<body>(.*)</body>.*$%ms', '$1', $pinfo ) ) ) ;
                    ?>
                </div>                
			</div>
		</div>

		<footer>
			Caddy Logo - Copyright &copy; 2019 The Caddy Authors.
            <br/>
            PHP text, PHP logo - Copyright &copy; 2001-2023 The PHP Group
			<br/>
            <br/>
			Caddy<sup>&reg;</sup> is a registered trademark of Light Code Labs, LLC.
			<div id="disclaimer">The Caddy project, The PHP Group, and container image maintainer are not responsible for the content, disposition, or behavior of this Web property, which is independently owned and maintained. For inquiries, please contact the site owner or hosting provider.</div>
		</footer>

	</body>
</html>
