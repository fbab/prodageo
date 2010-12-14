<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core"%>
<%@ taglib prefix="form" uri="http://www.springframework.org/tags/form"%>
<%@ taglib uri="http://java.sun.com/jsp/jstl/functions" prefix="fn" %>

			<div id="corpsPage" >
			
				<h2 class="rubrique">Liste des t&#226;ches en cours</h2>
	
					<div class="help cadre">
						Cette page pr&#233;sente, la liste des t&#226;ches en cours selon votre profil.<br/>
						Ces t&#226;ches peuvent &#234;tre soit personnelles soit collectives.<br/>
						Pour lancer une t&#226;che, il suffit de cliquer sur cette derni&#232;re.
					</div>
			
			
				<c:forEach var="task" items="${tasks}">
					<form:form>
						<a href="<c:url value='/myApplication/afficheTache?taskId=${task.taskId}'/>">${task.taskName} [${task.id}]</a><br/>
					</form:form>
				</c:forEach>		
					
						
			</div>
			
			
