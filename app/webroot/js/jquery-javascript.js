// JavaScript Document

//Menu navegación

$(document).ready(function(){

	$(".nav").children("li").each(function() {

    var current = "nav current-" + ($(this).attr("class"));

    var parentClass = $(".nav").attr("class");

    if (parentClass != current) {

        $(this).children("a").css({backgroundImage:"none"});

    }

	

	$('.slideshow').cycle({



		fx: 'scrollDown', // choose your transition type, ex: fade, scrollUp, shuffle, etc...



		/*before:  onBefore,*/ 



        after:   onAfter



	});

});



attachNavEvents(".nav", "home");



attachNavEvents(".nav", "design");



attachNavEvents(".nav", "positionweb");



attachNavEvents(".nav", "ourcompany");



attachNavEvents(".nav", "otherservices");



attachNavEvents(".nav", "contactmenu");





function attachNavEvents(parent, myClass) {

 $(parent + " ." + myClass).mouseover(function() {

    $(this).append('<div class="nav-'+myClass+'"></div>');

    $("div.nav-" + myClass).css({display:"none"}).fadeIn(200);

 }).mouseout(function() {

    $("div.nav-" + myClass).fadeOut(200, function() {



    $(this).remove();



 });



 }).mousedown(function() {



    $("div.nav-" + myClass).attr("class", "nav-" + myClass + "-click");



 }).mouseup(function() {



    $("div.nav-" + myClass + "-click").attr("class", "nav-" + myClass);



 });



} 







});



/*function onBefore() { 



    $('#output').html("Scrolling image: <br /> "+ this.src); 



} */



//Función de enlaces en los nombres de proyectos

function onAfter() {	
    $('#output').html("").append('<h3 class="project_name">'+$(this).attr("alt")+'</h3>'); 

}