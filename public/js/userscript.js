window.onload = function(){
	refreshUserList();
};

function refreshUserList(){
	document.getElementById('divUserList').innerHTML = '<div class="spinner"></div>';
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function(){
		document.getElementById('divUserList').innerHTML = xhr.responseText;
	}
	xhr.open('GET', '/doRefreshUserList');
	xhr.send();
}