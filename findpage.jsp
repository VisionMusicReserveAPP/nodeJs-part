
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>예약화면 찾기</title>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.0.0.min.js"/>
<script type="text/javascript">

function createRequest(){
	var request;
	try {
		request = new XMLHttpRequest();
		
	} catch(exception){
		try{
			request = new ActiveXObject('Msxml2.XMLHTTP');
		}
		catch(innerException){
			request = new ActiveXObject('Microsoft.XMLHTTP');
		}
	}
	return request;
}

function findpage(){
	var request = new createRequest();
	request.open('GET','http://localhost:8080/hello/NewFile.jsp',false);
	
	var showpage = request.responseText;
	alert(showpage);
	
}

$(document).ready(function(){
	findpage();

});


</script>
</head>
<body>

</body>
</html>
