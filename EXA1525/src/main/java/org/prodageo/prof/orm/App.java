package org.prodageo.prof.orm;

// import com.j256.ormlite.field.DatabaseField;

import org.prodageo.prof.orm.User ;
import org.prodageo.prof.orm.Shoe ;

import java.util.*; // List

import com.j256.ormlite.db.DatabaseType;
import com.j256.ormlite.db.DatabaseTypeUtils;
import com.j256.ormlite.table.TableUtils;
import com.j256.ormlite.logger.Logger;
import com.j256.ormlite.logger.LoggerFactory;
import com.j256.ormlite.misc.IOUtils;
import com.j256.ormlite.support.BaseConnectionSource;
import com.j256.ormlite.support.ConnectionSource;
import com.j256.ormlite.support.DatabaseConnection;
import com.j256.ormlite.support.DatabaseConnectionProxyFactory;
import com.j256.ormlite.jdbc.JdbcConnectionSource;



import com.j256.ormlite.dao.DaoManager ;
import com.j256.ormlite.dao.Dao ;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;
import java.sql.Statement;

import org.h2.store.fs.FileUtils;
import org.h2.tools.Script;
import org.h2.tools.DeleteDbFiles;
import org.h2.tools.RunScript;



/**
 * Hello world!
 *
 */
// source : https://github.com/h2database/h2database/blob/master/h2/src/test/org/h2/samples/Compact.java
 public class App 
{

/*
    public static void main( String[] args )
    {
		Connection connexion = DriverManager.getConnection("jdbc:h2:mem:test", "sa",  "");
        System.out.println( "Hello World!" );
    }
*/

    /**
     * This method is called when executing this sample application from the
     * command line.
     *
     * @param args the command line parameters
     */
    public static void main(String... args) throws Exception {
        // DeleteDbFiles.execute("./data", "test", true);
        // Class.forName("org.h2.Driver");
		// String databaseUrl = "jdbc:h2:./data/test" ;
		String databaseUrl = "jdbc:h2:/tmp/data/test;AUTO_SERVER=TRUE" ;
		// String databaseUrl = "jdbc:h2:tcp://194.254.15.211:9092/test" ;
		// String databaseUrl = "jdbc:h2:tcp://localhost/test" ;  // OK
        
		// Connection conn = DriverManager.getConnection(databaseUrl, "sa", "");
        // Statement stat = conn.createStatement();
        //stat.execute("CREATE TABLE TEST(ID INT PRIMAR	Y KEY, NAME VARCHAR)");
		// stat.execute("CREATE TABLE USERS(id SERIAL PRIMARY KEY, username VARCHAR, email VARCHAR)");
        // stat.execute("INSERT INTO TEST VALUES(1, 'Hello'), (2, 'World');");
		


				
		ConnectionSource connectionSource = new JdbcConnectionSource(databaseUrl);
		((JdbcConnectionSource)connectionSource).setUsername("sa");
		((JdbcConnectionSource)connectionSource).setPassword("");

		// INITIALISATION DES TABLES DANS LA BASE
		// http://ormlite.com/javadoc/ormlite-core/doc-files/ormlite_2.html#TableUtils
		TableUtils.createTableIfNotExists(connectionSource, User.class);
		TableUtils.createTableIfNotExists(connectionSource, Shoe.class);		
		TableUtils.createTableIfNotExists(connectionSource, Shop.class);				
		// TableUtils.createTableIfNotExists(connectionSource, UserShop.class);	 // TODO : manyToMana					

/*
// TODO : çà marche sans DAO ??? 
		Dao<User,Integer> userDao = DaoManager.createDao(connectionSource, User.class);		
		Dao<Shoe,Integer> shoeDao = DaoManager.createDao(connectionSource, Shoe.class);				
		Dao<Shop,Integer> shopDao = DaoManager.createDao(connectionSource, Shop.class);						
*/
	    
		// MANY (Users) TO MANY (Shops)
		Shop myshop = new Shop();
		myshop.setShopname ( "Promod" ) ;
		// myshop.addFan ( user ) ;
		
		// shopDao.create(myshop);		// TODO : çà marche sans DAO ???    
	    
	    
		String username = "Tic TAC" ;
		String email = "tic@tac.com" ;
		
        User user = new User();
        user.setUsername(username);
        user.setEmail(email);
        user.setPreferredShop(myshop);
        // userDao.create(user); // TODO : çà marche sans DAO ??? 


        user.setUsername(username + "2");
        user.setEmail(email + "2");
		
		// userDao.update(user); // TODO : çà marche sans DAO ??? 
		
		// ONE (User) TO MANY (Shoes)
		Shoe myshoe = new Shoe();
		myshoe.setSize(36) ;
		myshoe.setModelName ( "Crocs" ) ;
		myshoe.setUser ( user ) ;
		
		// shoeDao.create(myshoe); // TODO : çà marche sans DAO ??? 
		
		String mystring = user.listShoes() ;
		
		/*
        stat.close();
        conn.close();
        System.out.println("Compacting...");
        compact("./data", "test", "sa", "");
		*/
		connectionSource.close();
		
		
        System.out.println( "Shoes list : " + mystring);
		
	
		// retrieve a user with shoes from database by using his name
		// query for all accounts that have that password
		String USERNAME_FIELD_NAME = "username";

// TODO : çà marche sans DAO ??? 	    
/*
		List<User> usersList = userDao.queryBuilder().where()
         .eq("username", "Tic TAC2").query();
	
		for ( User ticUser : usersList )
		{
			System.out.println( "1- " + ticUser.getUsername() + " :" + ticUser.listShoes() + "." ) ;
			Shoe myshoe2 = new Shoe();
			myshoe2.setSize(36) ;
			myshoe2.setModelName ( "Nouilles" ) ;
			myshoe2.setUser ( ticUser ) ;
			
			// the behaviour is correct if user.addShoe is called within Shoe.setUser
			System.out.println( "2- " + ticUser.getUsername() + " :" + ticUser.listShoes() + ".\r\n" ) ;
		}
*/		
	
		
		
    }

    /**
     * Utility method to compact a database.
     *
     * @param dir the directory
     * @param dbName the database name
     * @param user the user name
     * @param password the password
     */
    public static void compact(String dir, String dbName,
            String user, String password) throws SQLException {
        String url = "jdbc:h2:" + dir + "/" + dbName;
        String file = "data/test.sql";
        Script.process(url, user, password, file, "", "");
        DeleteDbFiles.execute(dir, dbName, true);
        RunScript.execute(url, user, password, file, null, false);
        FileUtils.delete(file);
    }
}
