// function loadXMLDoc(dname)
// { 
// code for IE
var xmlDoc;
if (window.XMLHttpRequest)
	xmlhttp = new XMLHttpRequest();	
else
	xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");

// code for Mozilla, Firefox, Opera, etc.
	xmlhttp.open("GET", "myfriend.xml", false);
	xmlhttp.send();

	xmlDoc = xmlhttp.responseXML;


// var xhttp = new XMLHttpRequest();
// xhttp.onreadystatechange = function() {
//     if (this.readyState == 4 && this.status == 200) {
//         myFunction(this);
//     }
// };
// xhttp.open("GET", "myfriend.xml", true);
// xhttp.send();

// xmlDoc = xhttp.responseXML;

// }