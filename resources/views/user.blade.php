<!DOCTYPE html>
<html>
<head>
	<title>User List</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
	<script type="text/javascript" src="{{ asset('js/userscript.js') }}"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="container" >
		<h1 class="animate">User List</h1>
		
		<div id="divUserList" class="animate">
				
		</div>
		<div id="buttonfooter">
			<button onclick="window.location.href='/'" class="btn animate" id="btnHome">Home</button>
		</div>
	</div>
</body>
</html>