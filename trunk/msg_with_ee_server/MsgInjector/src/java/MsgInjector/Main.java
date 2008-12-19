/*
 * Pour reutiliser ce projet, creer un projet avec des fichiers existants
 * (categorie Enterprise - Projects : 
 */

package MsgInjector;

import javax.annotation.Resource;
import javax.jms.*;

/**
 *
 * @author root
 */
public class Main {

    /**
     * @param args the command line arguments
     */

    @Resource(mappedName="cfhello2")
    private static QueueConnectionFactory queueCF;

    @Resource(mappedName="hello2")
    private static Queue mdbQueue;


    public static void main(String args[]) {

        try {

    
            QueueConnection queueCon = queueCF.createQueueConnection();

            QueueSession queueSession = queueCon.createQueueSession
                (false, Session.AUTO_ACKNOWLEDGE);

            QueueSender queueSender = queueSession.createSender(null);

            TextMessage msg = queueSession.createTextMessage("hello");

            queueSender.send(mdbQueue, msg);

            System.out.println("Sent message to MDB 1");
           
            msg = queueSession.createTextMessage("hello2");

            queueSender.send(mdbQueue, msg);

            System.out.println("Sent message to MDB 2");

            queueSender.send(mdbQueue, msg);

            System.out.println("Sent message to MDB 3");
            
            queueCon.close();

        } catch(Exception e) {
            e.printStackTrace();
        }

       
        // TODO code application logic here
    }

}
