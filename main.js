var popup = function() {
	$("#popup").hide();
	$("#thanks").hide();

	$("#close").click(function(){
		$("#popup").hide();
		$("#thanks").hide();
		$("#popshow").show();
	}); 

	$("#placeorder").click(function(event){
		event.preventDefault();
		$("#thanks").show();
	});

	$("#order").click(function(event){
		event.preventDefault();
		$("#popup").show();
		$("#popshow").hide();
	});

	$("#email").click(function(event){
		event.preventDefault();
		$("#popup").show();
		$("#popshow").hide();
	});

	$("#sendmsg").click(function(event){
		event.preventDefault();
		$("#thanks").show();
	});

	$("#find").click(function(event){
		event.preventDefault();
		$("#popup").show();
		$("#popshow").hide();
	});

	$("#search").click(function(event){
		event.preventDefault();
		$("#thanks").show();
	});
};

var ordercheck = function() {

};

var locationcheck = function() {

};

$(document).ready(function() {
	popup();
});

//make it when popup is opened, it makes the clicked text disappear, then when close is clicked it makes it reappear
//make the order form use a select to get the item to order and the number