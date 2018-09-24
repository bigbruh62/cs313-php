$(document).ready(function(){
	$("#btnChangeColor").click(function(){
		var color = $("#divBackground").val();
		alert(color);
		$("#div1").css("background-color", color);
	})

	$("#btnClickMe").click(function(){
		alert("Clicked!");
	})
});