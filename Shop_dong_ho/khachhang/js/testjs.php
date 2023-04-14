<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
Quantity : <input type="text" id="qty"/>
<br/>
Item : <select id="item" onClick="checkPrice()"><option value="apple">Apple</option><option value="orange">Orange</option></select> //added onClick
<br/>
Price : <input type="text" id="price"/>
</body>
<script type="text/javascript">
function checkPrice()
{
var a = document.getElementById("item").value;
var b = document.getElementById("qty").value;
if(a = "apple"){
price = 5
document.getElementById("price").value=b*price
}else if(a = "orange"){
price = 4
document.getElementById("price").value=b*price
}
}
</script>
</html>