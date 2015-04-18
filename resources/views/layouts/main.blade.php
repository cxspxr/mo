<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<link rel="stylesheet" href="css/style.css">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300&subset=cyrillic,latin' rel='stylesheet' type='text/css'>

		@yield("head")
	</head>
	<body>

		<div class="outer">

			@include("layouts.inc.header")

			<div class="content">
				@yield('left')
				
				@yield('right')
			</div>

			@include("layouts.inc.footer")

		</div>

		@yield('footer')
		
	</body>
</html>