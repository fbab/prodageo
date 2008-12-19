/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

package src.consumer;

import javax.jms.*;

/**
 *
 * @author root
 */
public class HelloConsumer {

    
    public HelloConsumer() {
        try {
            // creating a connection factory
            // we are cheating here by not using jdni
            ConnectionFactory cf= new com.sun.messaging.ConnectionFactory();

            // create a connection
            Connection connection = cf.createConnection();
           
            // create a session
            Session session = connection.createSession( 
                     false /* not transacted */, Session.AUTO_ACKNOWLEDGE);

            // create destination HelloWorld
            Destination destination = session.createQueue("HelloWorld");

            // create a consumer
            MessageConsumer consumer = session.createConsumer(destination);

            // now that everything is ready to go, start the connection
            connection.start();

            // receive our message
            TextMessage m = (TextMessage)consumer.receive();

            System.out.println(m.getText());

            // close everything
            consumer.close();
            session.close();
            connection.close();

            
        } catch (JMSException ex) {
            System.out.println("Error running program");
            ex.printStackTrace();
        }
    }    
    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        new HelloConsumer();        
    }

}
