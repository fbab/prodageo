/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

package producer;

import javax.jms.*;

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
