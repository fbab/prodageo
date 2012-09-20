package org.prodageo.equipe.test ;

import org.prodageo.equipe.CalculatriceRemote;

import java.util.logging.* ;
import java.util.Timer;
import static org.junit.Assert.assertEquals;
import static org.junit.Assert.assertNotNull;
 
import java.util.List;
 
import javax.ejb.embeddable.EJBContainer;
import javax.naming.Context;
import javax.naming.NamingException;
import javax.naming.InitialContext;
import javax.rmi.PortableRemoteObject;
 
import org.junit.AfterClass;
import org.junit.BeforeClass;
import org.junit.Test;
 
public class CalculatriceJetableTest {
 private static EJBContainer    ejbContainer;
 private static Context        ctx;
 
 @BeforeClass
 // construction d'un serveur embbeded
 public static void setUp() {
 ejbContainer = EJBContainer.createEJBContainer();
 ctx = ejbContainer.getContext();
 }
 
 @AfterClass
 public static void tearDown() {
 ejbContainer.close();
 }
 
 @Test
 public void testFindAll()
 {
 try
 {

        Logger logger = Logger.getLogger(CalculatriceJetableTest.class.getName());

    CalculatriceRemote calc1 = (CalculatriceRemote) ctx.lookup("java:global/classes/CalculatriceJetableBean!org.prodageo.equipe.CalculatriceRemote");
    // Object ref = ctx.lookup("java:global/classes/CalculatriceJetableBean!org.prodageo.equipe.CalculatriceRemote");
    // CalculatriceRemote calc1 = (CalculatriceRemote) PortableRemoteObject.narrow(ref,CalculatriceRemote.class);
    assertNotNull(calc1);




        int expResult = calc1.additionner ( 1, 2 ) ;

        assertEquals(3, expResult );


            logger.log(Level.INFO, "EXA1415 - client - calc1 : AA = ");        
            logger.log(Level.INFO, "EXA1415 - client - calc1 : " + expResult ) ;
            // System.out.print("calc1 : " + calc1 ); // print ( ref ) doit éire l'id d'une ref.

            expResult = calc1.additionner(6,17) ;
            logger.log(Level.INFO, "EXA1415 - client - calc1 : AB = ");        
            logger.log(Level.INFO, "EXA1415 - client - calc1 : " + expResult ) ;

            CalculatriceRemote calc2 = (CalculatriceRemote) ctx.lookup("java:global/classes/CalculatriceJetableBean!org.prodageo.equipe.CalculatriceRemote");
            // CalculatriceRemote calc2 = (CalculatriceRemote)PortableRemoteObject.narrow(ref,CalculatriceRemote.class);            
            expResult = calc2.additionner(4,7) ;
            logger.log(Level.INFO, "EXA1415 - client - calc1 : B = ");        
            logger.log(Level.INFO, "EXA1415 - client - calc1 : " + expResult ) ;

            expResult = calc1.additionner(3,8) ;
            logger.log(Level.INFO, "EXA1415 - client - calc1 : C = ");        
            logger.log(Level.INFO, "EXA1415 - client - calc1 : " + expResult ) ;
            
            
            // dereference calc1
            calc1 = (CalculatriceRemote) ctx.lookup("java:global/classes/CalculatriceJetableBean!org.prodageo.equipe.CalculatriceRemote");
            // calc1 = (CalculatriceRemote)PortableRemoteObject.narrow(ref,CalculatriceRemote.class);            
            expResult = calc1.additionner(5,2) ;
            logger.log(Level.INFO, "EXA1415 - client - calc1 : D = ");        
            logger.log(Level.INFO, "EXA1415 - client - calc1 : " + expResult ) ;


	    try {            
              calc1 = null ;
              calc2 = null ;
              //timer for 10 seconds
              Thread.sleep(30000) ;
            }
            catch (InterruptedException ex)
            {
              System.out.println("echec timer");                           
              // System.out.println(ex.getExplanation());
            }

            CalculatriceRemote calc3 = (CalculatriceRemote) ctx.lookup("java:global/classes/CalculatriceJetableBean!org.prodageo.equipe.CalculatriceRemote");
            // CalculatriceRemote calc3 = (CalculatriceRemote)PortableRemoteObject.narrow(ref,CalculatriceRemote.class);
            expResult = calc3.additionner(7,13) ;
            logger.log(Level.INFO, "EXA1415 - client - calc1 : E = ");        
            logger.log(Level.INFO, "EXA1415 - client - calc1 : " + expResult ) ;

            CalculatriceRemote calc4 = (CalculatriceRemote) ctx.lookup("java:global/classes/CalculatriceJetableBean!org.prodageo.equipe.CalculatriceRemote");
            // CalculatriceRemote calc4 = (CalculatriceRemote)PortableRemoteObject.narrow(ref,CalculatriceRemote.class);
            expResult = calc4.additionner(1,13) ;
            logger.log(Level.INFO, "EXA1415 - client - calc1 : F = ");        
            logger.log(Level.INFO, "EXA1415 - client - calc1 : " + expResult ) ;
            
 }
 catch (NamingException e)
 {
   throw new AssertionError(e);
 }
 }
}
