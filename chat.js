function validateScreenname()
{
	var screenname = document.getElementById("screenname").value;
	if (screenname == "")
	{
		alert("Screenname cannot be left blank");
		return false;
	}
}


//jquery fadein from onextrapixel.com
$(document).ready(function(){
	//fade in from http://www.onextrapixel.com/2010/02/23/how-to-use-jquery-to-make-slick-page-transitions/
	$("body").css("display", "none");
	$("body").fadeIn(500);
});
