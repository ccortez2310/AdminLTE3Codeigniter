//Datepicker
$('.datepicker').datepicker({
	format: 'dd/mm/yyyy'
});

let datetime = null;
let dateday = null;
let datedays = null;
date = null;

const update = function () {
	const date = moment(new Date());
	dateday.html(date.format('dddd'));
	datedays.html(date.format('Do MMM'));
	datetime.html(date.format('h:mm A'));
};

moment.locale('es');

datetime = $('#datetime');
dateday = $('#dateday');
datedays = $('#datedays');
update();
setInterval(update, 1000);


/*=============================================
ACTIVAR SIDEBAR
=============================================*/

$(document).on("click", ".menu-item", function(){

	localStorage.setItem("botonera", $(this).children().attr("href"));


})

if(localStorage.getItem("botonera") == null) {

	$(".menu-item a").removeClass("active");

	$(".has-treeview").removeClass("menu-open");
	
} else {

	$(".has-treeview").removeClass("menu-open");

	$(".has-treeview a").removeClass("active");

	$(".menu-item a").removeClass("active");

	$("a[href='"+localStorage.getItem("botonera")+"']").addClass("active");

	$("a[href='"+localStorage.getItem("botonera")+"']").parent().parent().parent().addClass("menu-open"); 

	$("a[href='"+localStorage.getItem("botonera")+"']").parent().parent().parent().children("a").addClass("active"); 

}