Vieille security config :

	<!-- security:authentication-provider>
		<security:jdbc-user-service data-source-ref="businessDataSource" users-by-username-query="SELECT U.USERNAME, U.PASSWORD, U.ENABLED FROM T_USERS U WHERE U.USERNAME = ?" authorities-by-username-query="SELECT auth.USERNAME, ref.AUTHORITY_LABEL FROM AUTHORITIES auth, REF_AUTHORITIES ref WHERE auth.AUTHORITY = ref.ID_AUTHORITY AND auth.USERNAME = ?" />
	</security:authentication-provider-->	
	
	


	<!--
		Define local authentication provider, a real app would use an external provider (JDBC, LDAP, CAS, etc)
		
		usernames/passwords are:
			catalogueAdmin/melbourne
			focUser/rochester
			selfUser/rochester
	-->
	
	<!-- security:authentication-provider>
		<security:password-encoder hash="md5" />
		<security:user-service>
			<security:user name="gorracUser" password="417c7382b16c395bc25b5da1398cf076" authorities="ROLE_USER, ROLE_SELF_USER, ROLE_SUPERVISOR" />
			<security:user name="focUser" password="942f2339bf50796de535a384f0d1af3e" authorities="ROLE_USER" />
			<security:user name="selfUser" password="942f2339bf50796de535a384f0d1af3e" authorities="ROLE_SELF_USER" />
		</security:user-service>
	</security:authentication-provider-->