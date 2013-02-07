var popup = function() {
	$("#popup").hide();

	$("#close").click(function(){
		$("#popup").hide();
	}); 

	$("#order").click(function(event){
		event.preventDefault();
		$("#popup").show();
	});

	$("#email").click(function(event){
		event.preventDefault();
		$("#popup").show();
	});

	$("#sendmsg").click(function(event){
		event.preventDefault();
		$("#popup").hide();
	});

	$("#find").click(function(event){
		event.preventDefault();
		$("#popup").show();
	});

	$("#search").click(function(event){
		event.preventDefault();
		$("#popup").hide();
	});
};

$(document).ready(function() {
	popup();
});

//make it when popup is opened, it makes the clicked text disappear, then when close is clicked it makes it reappear
//make the bullets on the ul disappear
//make the text input characters to 5
//add pizza image to left of logo, add pasta image to the right of logo
//make the order form use a select to get the item to order and the number