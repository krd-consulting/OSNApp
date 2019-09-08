<!DOCTYPE html>
<html lang="en">
  <head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

		<link rel="icon" href="<%= BASE_URL %>favicon.ico">

		<title>OSNApp</title>

  </head>
  <body>
		<noscript>
		  <strong>We're sorry but network-proto2 doesn't work properly without JavaScript enabled. Please enable it to continue.</strong>
		</noscript>
		<div id="app"></div>

		<script src="{{ asset('js/main.js') }}" defer></script>
  </body>
</html>
