$(document).ready(function(){
	$("#btnChangeColor").click(function(){
		var color = $("#divBackground").text();
		alert(color);
		$("#div1").css("background-color", color);
	})

	$("#btnClickMe").click(function(){
		alert("Clicked!");
	})
});