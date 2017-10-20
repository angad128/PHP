    
    var cxhro = createXmlHttpRequestObject();

	function createXmlHttpRequestObject()
	{
		var cxhro;
		//testing if user is runing internet exploser browser
		if (window.ActiveXObject) {
			try{
				cxhro = new ActiveXObject("Microsoft.XMLHTTP");
			}catch(e){
				cxhro = false;
			}
		}else{
			try{
				cxhro = new XmlHttpRequest();
			}catch(e){
				cxhro = false;
			}
		}

		if (!cxhro) {
			alert("cannot create that object");
		}else{
			return cxhro;
		}
	}


	function process()
	{	
		//@readyState==0  obeject start its communication && @readyState==4 object finish commnucating.
		if (cxhro.readyState==0 || cxhro.readyState==4) {
			food = encodeURIComponent(document.getElemebtById("userInput").value);
			cxhro.open("GET", "foodstore.php?food="+food,true);
			cxhro.onreadystatechange = handleServerResponse;
			cxhro.send(null);
		}else{
			setTimeout('process()',1000);
		}
	}

    function handleServerResponse(){
    	if (cxhro.readyState==4) {
    		if (xhro.readyState==200) {
    			xmResponse = cxhro.reponseXML;
    			xmlDocumnetElement = xmlResponse.documentElement;
    			message = xmlDocumnetElement.firstChild.data;
    			document.getElemebtById("underInput").innerHTML ='<span style="color:blue;">' + message + '</span>';
    			setTimeout('process()',1000);
    		}		
    	}else{
    		alert('Something went wrong!!');
    	}
    }
