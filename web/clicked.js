function clicked() {
	alert("Clicked!");
}

function changeColor() {
	var textbox = document.getElementById("divbackground");

	document.getElementById("div1").style.backgroundColor = textbox.value;
}