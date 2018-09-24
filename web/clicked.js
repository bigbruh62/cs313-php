$(document).ready(function(){
	$("#btnChangeColor").click(function(){
		var color = $("#divbackground").value;
		$("#div1").css("background-color", color);
	})

	$("#btnClickMe").click(function(){
		alert("Clicked!");
	})
});