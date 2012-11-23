<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
	pageEncoding="ISO-8859-1"%>
	<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core"%>
<%@ taglib prefix="form" uri="http://www.springframework.org/tags/form"%>
<%@ page session="false" %>

<html>
<head>
<%@ page isELIgnored="false" %>
<title>Square Webservice 2 Client</title>
</head>
<body>
	<form:form commandName="squareServiceRequest" method="post">
		<table>
			<tr>
				<td>Enter Number:</td>
				<td><form:input path="input"/></td>
				<td><font color="red"><form:errors path="input"/></font></td>
			</tr>
		</table>
		<input name="submit" type="submit" value="Get it's square!"  />
	</form:form>
</body>
</html>