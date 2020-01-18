<!DOCTYPE html>
<html>
<head>
	<title>Right_click_disabled</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
<img src="https://cdn.pixabay.com/photo/2020/01/14/11/00/nubian-ibex-4764738__340.jpg">

<script>
	$('img').bind('contextmenu',function(){
		return false;
	})
</script>
</body>
</html>