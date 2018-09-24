$(document).ready(function(){
	$("#btnChangeColor").click(function(){
		var color = $("#divBackground").val();
		$("#div1").css("background-color", color);
	})

	$("#btnClickMe").click(function(){
		alert("Clicked!");
	})

	$("#btnFadeChange").click(function(){
		$("#div3").fadeToggle("slow")
	})
});