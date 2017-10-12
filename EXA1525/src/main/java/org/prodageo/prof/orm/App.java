package org.prodageo.prof.orm;

// import com.j256.ormlite.field.DatabaseField;

import org.prodageo.prof.orm.User ;


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

		// http://ormlite.com/javadoc/ormlite-core/doc-files/ormlite_2.html#TableUtils
		TableUtils.createTableIfNotExists(connectionSource, User.class);

		Dao<User,Integer> userDao = DaoManager.createDao(connectionSource, User.class);		
		
		String username = "Tic TAC" ;
		String email = "tic@tac.com" ;
		
        User user = new User();
        user.setUsername(username);
        user.setEmail(email);
                
        userDao.create(user);


        user.setUsername(username + "2");
        user.setEmail(email + "2");
		
		userDao.update(user);
		
		
		
		/*
        stat.close();
        conn.close();
        System.out.println("Compacting...");
        compact("./data", "test", "sa", "");
		*/
		connectionSource.close();
        System.out.println("Done.");
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