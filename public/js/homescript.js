window.onload = function(){
	refreshFitness();
};

function refreshFitness(){
	document.getElementById('divFitnessList').innerHTML = '<div class="spinner"></div>';
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function(){
		document.getElementById('divFitnessList').innerHTML = xhr.responseText;
	}
	xhr.open('GET', '/doRefreshFitness');
	xhr.send();
}
