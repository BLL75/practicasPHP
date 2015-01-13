/*
Selector de provincias y localidades Ajax - non intrusive - Cross browser 
Copyright (C)Iñaki Gorostiza Esquerdeiro
http://www.hellogoogle.com
webmaster@hellogoogle.com 
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

var XmlHttpObj;


var Utf8 = {

    //Convierte de UTF-8 a ISO
    decode : function (utftext) {
        var string = "";
        var i = 0;
        var c = c1 = c2 = 0;

        while ( i < utftext.length ) {

            c = utftext.charCodeAt(i);

            if (c < 128) {
                string += String.fromCharCode(c);
                i++;
            }
            else if((c > 191) && (c < 224)) {
                c2 = utftext.charCodeAt(i+1);
                string += String.fromCharCode(((c & 31) << 6) | (c2 & 63));
                i += 2;
            }
            else {
                c2 = utftext.charCodeAt(i+1);
                c3 = utftext.charCodeAt(i+2);
                string += String.fromCharCode(((c & 15) << 12) | ((c2 & 63) << 6) | (c3 & 63));
                i += 3;
            }

        }

        return string;
    }

}

function CreateXmlHttpObj()
{
	try
	{
		XmlHttpObj = new ActiveXObject("Msxml2.XMLHTTP");
	
	}
	catch(e)
	{
		try
		{
			XmlHttpObj = new ActiveXObject("Microsoft.XMLHTTP");
		} 
		catch(oc)
		{
			XmlHttpObj = null;
		}
	}
		if(!XmlHttpObj && typeof XMLHttpRequest != "undefined") 
	{
		XmlHttpObj = new XMLHttpRequest();
	}
}

function provinciaListOnChange() {
var to=document.getElementById("advice");
to.innerHTML="<img src='img/loading.gif' align='absmiddle'>";
    var provinciaList = document.getElementById("provinciaList");
 
    var selectedprovincia = provinciaList.options[provinciaList.selectedIndex].value;
    var requestUrl;

     requestUrl = "xml_data_provider.php" + "?filter=" + encodeURIComponent(selectedprovincia);
    
	CreateXmlHttpObj();
	
	if(XmlHttpObj)
	{
	
		XmlHttpObj.onreadystatechange = StateChangeHandler;
		XmlHttpObj.open( "POST", requestUrl, true );
		XmlHttpObj.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		XmlHttpObj.send('');		
	}
}


function StateChangeHandler()
{
	if(XmlHttpObj.readyState == 4)
	{
		if(XmlHttpObj.status == 200)
		{			
			PopulatelocalidadList(XmlHttpObj.responseXML.documentElement);
		}
		else
		{
			alert("Código de error: "  + XmlHttpObj.status);
		}
	}
}

function PopulatelocalidadList(localidadNode)
{	
    var localidadList = document.getElementById("localidadList");
	for (var count = localidadList.options.length-1; count >-1; count--)
	{
		localidadList.options[count] = null;
	}

	var localidadNodes = localidadNode.getElementsByTagName('localidad');
	var textValue; 
	var optionItem;
	for (var count = 0; count < localidadNodes.length; count++)
	{ 
   		textValue = Utf8.decode(GetInnerText(localidadNodes[count]));
		idValue=count;		
		optionItem = new Option( textValue, textValue,  false, false);
		localidadList.options[localidadList.length] = optionItem;
	}
var to=document.getElementById("advice");
to.innerHTML="";
}

function GetInnerText (node)
{
	 return (node.textContent || node.innerText || node.text) ;
}









