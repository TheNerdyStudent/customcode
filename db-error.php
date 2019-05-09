<?php
 
  header('HTTP/1.1 503 Service Temporarily Unavailable');
  header('Status: 503 Service Temporarily Unavailable');
  header('Retry-After: 600'); // 1 hour = 3600 seconds
 
?>
 
<!-- custom db error page -->
<!DOCTYPE html>
<html>
	<head>
		<title>Something went wrong - The Nerdy Student</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="robots" content="noindex,nofollow"/>
		<link rel="icon" href="https://i0.wp.com/www.thenerdystudent.com/wp-content/uploads/2019/03/cropped-favicon.png"/>
		<style>
			body {
				margin: 8px;
			}
			p {
				font-family: Verdana, Geneva, sans-serif;
				font-size: 14px;
				line-height: 21px;
			}
			h1 {
				font-family: Verdana, Geneva, sans-serif;
				font-size: 32px;
				line-height: 40px;
				margin-top: 33px;
				margin-bottom: 23px;
			}
			h2 {
				font-family: Verdana, Geneva, sans-serif;
				font-size: 20px;
			}
			a { 
				color: #5ba545;
			}
			.center {
				text-align: center;
			}
			.headerimg {
				max-width: 1100px;
				width: 100%;
			}
			hr {
				border: 0;
				height: 2px;
				background: #5ba545;
				max-width: 1000px;
				width: 90%;
			}
			::selection {
				color: white;
				background-color: #5ba545;
			}
			button {
				color: white !important;
				background-color: #5ba545;
				border: none;
				border-radius: 4px;
				padding: 10px 10px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				cursor: pointer;
			}
		</style>
	</head>
	<body>
		<div class="center">
		<a href="https://www.thenerdystudent.com"><img src="https://i1.wp.com/www.thenerdystudent.com/wp-content/uploads/2019/04/tnscomp.png" class="headerimg"></a>
			<h1>Error establishing database connection.</h1>
			<hr />
			<p>
				<h2>If you came from a search, simply refreshing the page will fix this error. Sorry about that!</h2>
				Something went wrong - we couldn't connect to the database. Please return to the homepage and try again.
				<br /><br />
				<button onclick="window.location.href='https://www.thenerdystudent.com';">Go to The Nerdy Student homepage</button>
				<br /><br />
				Please contact me at <a href="mailto:thenerdystudent@gmail.com" target="_blank">thenerdystudent@gmail.com</a> and report the error, along with the referring page (if you can remember it). This will help me fix it quicker. Thanks!
			</p>
		</div>
	</body>
</html>
