<%@ taglib prefix="form" uri="http://www.springframework.org/tags/form" %>
<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>
<%@page import="org.springframework.security.AuthenticationException"%>
<%@page import="org.springframework.security.ui.AbstractProcessingFilter"%>

<form name="f" action="<c:url value="/myLoginForm/loginProcess" />" method="post" class="" > 
    		<c:if test="${not empty param.login_error}">
				<div class="errors">
					Your login attempt was not successful, try again.<br /><br />
					Reason: <%= ((AuthenticationException) session.getAttribute(AbstractProcessingFilter.SPRING_SECURITY_LAST_EXCEPTION_KEY)).getMessage() %>
				</div>
			</c:if>
    		<br />
    		<br />
    		 	<div class="signupText">
						<p><label><strong>login (ldcg) :</strong></label> <input type="text" name="j_username" id="j_username" class="dec2"/> </p><br/>
						
						<p><label><strong>mot de passe :</strong></label> <input type="password" name="j_password" id="j_password" class="dec2" /></p><br/>
					
							
						<p class="buttons">
							<input name="submit" id="submit" type="submit" value="Login" />
						</p>
						<br />
						<br />
						<i>Pas de compte</i>
						
				</div>
		</form>
    
    
