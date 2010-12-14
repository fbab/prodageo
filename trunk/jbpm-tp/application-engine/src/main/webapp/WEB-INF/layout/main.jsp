<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<%@ taglib uri="http://tiles.apache.org/tags-tiles" prefix="tiles" %>
<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr" >
	<head>
		<title>Exemple de vue</title>	
		<script type="text/javascript" src="<c:url value="/resources/dojo/dojo.js" />"> </script>
		<script type="text/javascript" src="<c:url value="/resources/spring/Spring.js" />"> </script>
		<script type="text/javascript" src="<c:url value="/resources/spring/Spring-Dojo.js" />"> </script>
		
		<!-- inclusion des Css -->
		<link rel="stylesheet" type="text/css" href="<c:url value="/static/css/decorations.css" />" />
		
		
	</head>
	<body>
		<!-- Header de la page web. -->
		<div id="bandeau" class="cadre">
			<tiles:insertAttribute name="header" />
		</div>
		<div id="menu">
			<tiles:insertAttribute name="menu"/>
		</div>
		<div id="contenu">
			<div class="right">
			<!-- TODO Ajouter quand l'authentification sera dispo 
					<c:if test="${pageContext.request.userPrincipal != null}">
						Welcome, ${pageContext.request.userPrincipal.name} | <a href="<c:url value="/goracc/logout" />">Logout</a>
					</c:if>
			-->		
			</div>
			<tiles:insertAttribute name="corpsPage" />
		</div>
		<div id="pied_page" class="cadre">
			<tiles:insertAttribute name="footer" />
		</div>
		
	</body>

</html>