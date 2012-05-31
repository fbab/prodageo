package org.prodageo;

import java.io.IOException;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;

import com.google.appengine.api.rdbms.AppEngineDriver;
import java.util.logging.Logger;


public class EXU9941dbWrapper {

    String dbms_instance = "datacoeurdewiki:datacoeurdewiki" ;
    String database = "guestbook" ;
    // String table = "annuaire";

	String jdbcUrl = "jdbc:google:rdbms://" + dbms_instance + "/" + database ;
	
	
    public int inserer_personnage (String nom , String prenom )
    throws IOException {
    	final Logger log = Logger.getLogger(EXU9941dbWrapper.class.getName());
		
		
		log.info("Entering inserer_personnage");
		
		Connection c = null;
		try {
		    log.info("Entering the try");
		    
		    DriverManager.registerDriver(new AppEngineDriver());
		    c = DriverManager
	        				.getConnection(jdbcUrl);	    
		                    // .getConnection("jdbc:google:rdbms://datacoeurdewiki:datacoeurdewiki/guestbook");
		    // String nom = req.getParameter("nom");
		    // String prenom = req.getParameter("prenom");
		    // You will check your database for a new record "Mickey, The Mouse"
		    // https://code.google.com/apis/console 
		
		    if (nom == "" || prenom == "") {
		            return 1 ; // 1 : empty data
		    } else {
		            String statement = "INSERT INTO annuaire (nom, prenom) VALUES( ? , ? )";
		            PreparedStatement stmt = c.prepareStatement(statement);
		            stmt.setString(1, nom);
		            stmt.setString(2, prenom);
		            int success = 2;
		            success = stmt.executeUpdate();
		            if (success == 1) {
		                    return 0 ; // 0 : success
		            } else if (success == 0) {
		                    return 2 ; // 2 : executeUpdate failed
		            }
		            log.info("Exiting the try");
		    }
		} catch (SQLException e) {
		    log.info("SQLException try");
		    // this log instruction allows to see the SQLexception details
		    // in the GAE log available at : https://appengine.google.com/logs
		    log.info(e.toString());   
		    e.printStackTrace();
			return 3;
		} finally {
		    if (c != null)
		            try {
		                    c.close();
		            } catch (SQLException ignore) {
		            }
		    log.info("Traitement de finally");
		}
		log.info("Exit");
		return 0;
	}	

    // returns the number of records
    public int select_personnage (int[] id, String[] nom , String[] prenom )
    throws IOException
    {
    	final Logger log = Logger.getLogger(EXU9941dbWrapper.class.getName());
		log.info("Entering select_personnage");
		
    	int nb_of_record = 0 ; 
    	Connection c = null;
    	
    	try {    	

	    	c = DriverManager.getConnection(jdbcUrl);
	    	ResultSet rs = c.createStatement().executeQuery("SELECT id, nom, prenom FROM annuaire"); 
	    	
	    	int i = 0 ;
	    	while (rs.next()){
	    		log.info("record = " + i);	    		
	    	    id[i] = rs.getInt("id");
	    		log.info("id = " + id[i]);
	    	    nom[i] = rs.getString("nom");
	    		log.info("id = " + nom[i]);	    	    
	    	    prenom[i] = rs.getString("prenom");
	    		log.info("id = " + prenom[i]);	    	    
	    	    i = i + 1 ;
	    	}
	    	nb_of_record = i ;

		} catch (SQLException e) {
		    log.info("SQLException try");
		    // this log instruction allows to see the SQLexception details
		    // in the GAE log available at : https://appengine.google.com/logs
		    log.info(e.toString());   
		    e.printStackTrace();
		} finally {
		    if (c != null)
		            try
		    		{
		                    c.close();
		            } catch (SQLException ignore) {
		            }
		    log.info("Traitement de finally");
		}    	
    	return nb_of_record ;
    }
}
