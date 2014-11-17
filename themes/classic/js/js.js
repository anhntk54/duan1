$("document").ready(function(){
	$('textarea').autoResize();
});
function setHeightSidebar(){
	$("#sidebar-left-gluck").css("height", $("#main-gluck").height()+'px');
}