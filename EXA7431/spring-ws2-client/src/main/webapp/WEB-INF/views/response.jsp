<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
	pageEncoding="ISO-8859-1"%>

<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core"%>
<%@ taglib prefix="form" uri="http://www.springframework.org/tags/form"%>
<html>
<head>
<%@ page isELIgnored="false" %>
<title>Square Webservice 2 Client</title>
</head>
<body>
	The square of the entered number is: <b><font color="red" size="3">${squareServiceResponse.output}</font></b>
	<br />
	<br /> This is brought to you by <i>Spring Webservices 2</i> and <font color="blue" size="4.5"><b>Ankeet Maini</b></font>  :)
</body>
</html>