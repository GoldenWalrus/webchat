function validateScreenname()
{
	var screenname = document.getElementById("screenname").value;
	if (screenname == "")
	{
		alert("Screenname cannot be left blank");
		return false;
	}
}
