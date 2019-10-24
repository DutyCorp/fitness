<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
	<script type="text/javascript" src="{{ asset('js/homescript.js') }}"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="container" >
		<h1 class="animate">Welcome to Doofit!</h1>
		
		<div id="divFitnessList" class="animate">
				
		</div>
		<div id="buttonfooter">
			<button onclick="window.location.href='/login'" class="btn animate" id="btnLogout">Logout</button>
			<button onclick="window.location.href='/user'" class="btn animate" id="btnUserList">User List</button>
		</div>
	</div>
</body>
</html>