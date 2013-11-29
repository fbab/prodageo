<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c" %>
<%@ page session="false" %>
<html>
<head>
	<title>Home</title>
	<style>
	.box { 
	font-family:arial;
    margin-left:auto;
    margin-right:auto;
    margin-top:80px;
    border: 1px solid #ddd; 
    padding: 30px 40px 20px 40px; 
    width: 715px;
    background: #fff;
    
    -webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	border-radius: 10px;
	
	-webkit-box-shadow: 0px 0 50px #ccc;
	-moz-box-shadow: 0px 0 50px #ccc;
	box-shadow: 0px 0 50px #ccc;
	}
	
	</style>
</head>
<body>
<div class="box">
  <h1>Hello Spring World!</h1>
   The time on the server is ${serverTime}.
   <h2>Wishing you a very Good ${serverGreeting} !</h2>
</div>
</body>
</html>
