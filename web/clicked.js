function clicked() {
	alert("Clicked!");
}

function changeColor() {
	var textbox = document.getElementById("divbackground");

	document.getElementById("div1").style.background-color = textbox.value;
}