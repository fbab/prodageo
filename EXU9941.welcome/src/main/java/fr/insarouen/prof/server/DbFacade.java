package fr.insarouen.prof.server;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;

public class DbFacade {

		// boolean is_bouchon = true ;
		boolean is_bouchon = false ;

/*
		DbFacade()
		{
			// vérifier si la base de données est présente
			// is_bouchon = false ;
		}
*/
		String retrieve_dept_by_code ( Integer codePostal )
		{
			if ( is_bouchon )
			{
				return retrieve_dept_by_code_bouchon ( codePostal );
			}
			else
			{
				return retrieve_dept_by_code_mysql ( codePostal ) ;
			}
					
		}

		String retrieve_dept_by_code_bouchon ( Integer codePostal )
		{
			return "AIN" ;
		}
		
		String retrieve_dept_by_code_mysql ( Integer codePostal )
		{
			// on met quelques valeurs juste pour rendre crÃ©dible quelques tests
	        // librement inspire de
	        // http://www.roseindia.net/servlets/databaseconnectionservlet.shtml
	        String the_result = "vide" ;
	        String the_error = "" ;
	
	          // connecting to database
	          Connection con = null;
	          Statement stmt = null;
	          ResultSet rs = null;
	          try {
	                  Class.forName("com.mysql.jdbc.Driver");
	                  con =DriverManager.getConnection
	                          ("jdbc:mysql://localhost:3306/monagenda","prof","cavapasnon") ;
	                  stmt = con.createStatement();
	                  rs = stmt.executeQuery("SELECT * FROM departement where code = " + codePostal);
	                  // displaying records
	                  while(rs.next())
	                  {
	                        the_result = rs.getObject(1).toString();
	                        the_result = rs.getObject(2).toString();
	                  }
	
	          }
	          catch (SQLException e)
	          {
	
	                 // throw new ServletException("Servlet Could not display records.", e);
	                 the_error = "E001 : probleme en retour de JDBC (cas fréquents : nom de base et/ou identifiant et/ou mot de passe erronés)";
	
	                 // Dans le cas d'une exécution locale (sur machine de dév)
	                 // avec la commande en ligne suivante :
	                 // > mvn gwt:run
	                 // (à exécuter dans le répertoire racine contenant le pom.xml du projet)
	                 // l'exception SQLException sera levée.
	                 // On peut donc mettre un ''bouchon'' dans cette section
	                 // en simulant un retour comme s'il venait de la base de données.
	
	          }
	          catch (ClassNotFoundException e)
	          {
	                // throw new ServletException("JDBC Driver not found.", e);
	                  the_error = "E002 : pilote JDBC non trouvé (ajouter le jar mysql-connector-java dans votre projet)" ;
	          }
	          finally
	          {
	                try
	                {
	                  if(rs != null) {
	                          rs.close();
	                          rs = null;
	                  }
	                  if(stmt != null) {
	                          stmt.close();
	                          stmt = null;
	                  }
	                  if(con != null) {
	                          con.close();
	                          con = null;
	                  }
	                }
	                catch (SQLException e)
	                {                 
	                  the_error = "E003 : erreur à la fermeture de la connection JDBC." ;
	                }
	          }
	
	          return the_result + the_error ;
	
	  }
}

