
////////////////////contactform///////////////////


function IsEmail(strEmail){
	if (strEmail.indexOf("@")>0 && strEmail.indexOf(".")>0){
		
		return true;
		
	}else{

       return false;
	}

}

 

function Validation(theNewContact){

 	if (theNewContact.name.value == ""){
			
			var el=document.getElementById("alerta");
			var se;
			se="Please fill all the fields!";
			el.innerHTML=se;
			theNewContact.name.focus();
		    return (false);
			
			
	}else if (theNewContact.email.value == ""){
			
			var el=document.getElementById("alerta");
			var se;
			se="Please fill all the fields!";
			el.innerHTML=se;
			theNewContact.email.focus();
		    return (false);
			
	} else if (IsEmail(theNewContact.email.value)==0){

     		var el=document.getElementById("alerta");
			var se;
			se="Invalid email!";
			el.innerHTML=se;
			theNewContact.email.focus();
			return (false);
    } else {
	 var contenidos='?name='+theNewContact.name.value+'&email='+theNewContact.email.value+'&comments='+theNewContact.comments.value;
	 makeRequest('sendmail.php', contenidos, 'contactform');
	 return (false);
	}

 } 


var http_request = false;
      function makeRequest(url, parameters, aidi, donde, numero) {
         http_request = false;
         if (window.XMLHttpRequest) { // Mozilla, Safari,...
         http_request = new XMLHttpRequest();
            if (http_request.overrideMimeType) {
         	// set type accordingly to anticipated content type
            //http_request.overrideMimeType('text/xml');
            http_request.overrideMimeType('text/html');
            }
         } else if (window.ActiveXObject) { // IE
            try {
            http_request = new ActiveXObject("Msxml2.XMLHTTP");
            } catch (e) {
               try {
               http_request = new ActiveXObject("Microsoft.XMLHTTP");
               } catch (e) {}
            }
         }
		 
		 
         if (!http_request) {
         alert('Cannot create XMLHTTP instance');
         return false;
         }
         http_request.onreadystatechange = alertContents;
         http_request.open('GET', url + parameters, true);
         http_request.send(null);
		 idx=aidi;
		 diver=donde;
		 numeraxo=numero;
		 
      }
	  
	  function alertContents() {
         if (http_request.readyState == 4) {
            if (http_request.status == 200) {
            //alert(http_request.responseText);
            result = http_request.responseText;
            //document.getElementById('myspan').innerHTML = result; 
			if (diver==2){
			document.getElementById(idx).src=result;
			}else {
			document.getElementById(idx).innerHTML=result;
			}
			
			
			if (diver == 1){
			diverser(numeraxo);
			} else {
			galeria();
			califica();
			carga();
			}
			
			
            } else {
            alert('There was a problem with the request.');
            }
         }
      }
