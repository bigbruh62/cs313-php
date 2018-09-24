$(document).ready(function(){
	$('#btnChangeColor').click(function(){
		$('#div1').css("background-color", $('#divbackground').value)
	})

	$("#btnClickMe").click(function(){
		alert("Clicked!");
	})
});