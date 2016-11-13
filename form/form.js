var message = "  Door Step Service";
var position = 0;
var msgLength = message.length;
function scrollTitle(){
	document.title = message.substring(position, msgLength) + message.substring(0, position);
	position++;
	if(position > msgLength){
		position = 0;
	}
	window.setTimeout("scrollTitle()", 300);
}
scrollTitle();

