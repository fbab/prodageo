/*
 * sur une idee de 
 * http://blogs.sun.com/openmessagequeue/entry/jms_101
 */

package producer;

import javax.jms.*;
import com.sun.messaging.ConnectionConfiguration;

/**
 *
 * @author root
 */
public class HelloProducer {

    /**
     * @param args the command line arguments
     */
    


/**
 * simple hello world consumer
 */

/**
     * simple consumer
     */
    public HelloProducer() {
        try {
  
                    
            ConnectionFactory cf= new com.sun.messaging.ConnectionFactory ( ) ;
            
            // astuce pour une connection sur un message broker distant
	    // Le code ci-dessous suppose que le broker est sur 10.5.1.167 sur le port 7676 
/*
		com.sun.messaging.ConnectionFactory scf = (com.sun.messaging.ConnectionFactory) cf ;
            
            // valeur par defaut de la machine
            scf.setProperty( ConnectionConfiguration.imqBrokerHostName , "10.5.1.167" ) ;  // OK          
            
            // valeur par defaut du port
            scf.setProperty( ConnectionConfiguration.imqBrokerHostPort , "7676" ) ;                       
 
*/
            
            // autre parametres de connection
            // cf.createConnection(username, password)
             /*
             public Connection createConnection(String userName, String password) throws JMSException
              Creates a connection with the specified user identity. The connection is created in stopped mode. 
              No messages will be delivered until the Connection.start method is explicitly called.
*/
            
            // create a connection
            Connection connection = cf.createConnection();
           
            // create a session
            Session session = connection.createSession( 
                     false /* not transacted */, Session.AUTO_ACKNOWLEDGE);

            // create destination HelloWorld
            Destination destination = session.createQueue("HelloWorld");

            // create a producer
            MessageProducer producer = session.createProducer(destination);

            // now that everything is ready to go, start the connection
            connection.start();

            // create our message to send
            TextMessage message = session.createTextMessage();
            message.setText("Hello World");

            // send the message to Queue HelloWorld
            System.out.println("Sending Hello World");
            producer.send(message);

            // close everything
            producer.close();
            session.close();
            connection.close();

            
        } catch (JMSException ex) {
            System.out.println("Error running program");
            ex.printStackTrace();
        }
    }


    /**
     * main method
     */
    public static void main(String args[]) {
        new HelloProducer();
    }


}
