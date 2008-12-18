/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

package Utilitaire;

import junit.framework.TestCase;

import javax.naming.InitialContext;
import javax.naming.NamingException;
import javax.rmi.PortableRemoteObject;
/**
 *
 * @author root
 */
public class CalculatriceRemoteTest extends TestCase {
    
    public CalculatriceRemoteTest(String testName) {
        super(testName);
    }            

    @Override
    protected void setUp() throws Exception {
        super.setUp();
    }

    @Override
    protected void tearDown() throws Exception {
        super.tearDown();
    }

    /**
     * Test of additionner method, of class CalculatriceRemote.
     */
    public void testAdditionner()
    {

        /* A NE PAS OUBLIER
         * déployer l'EJB (clic-droit sur le projet calculatrice et commande Undeploy and Deploy)
         * ajouter les librairies appserv-rt.jar et javaee.jar dans le répertoire Glassfish
         */
        System.out.println("additionner");
        int expResult = 0 ;
        int a = 0;
        int b = 0;

        int result ;
        
        /* 
        CalculatriceRemote instance = new CalculatriceRemote();
        int expResult = 0;
        int result = instance.additionner(a, b);
        assertEquals(expResult, result);
         */
        
        InitialContext ctx;
        try {
            ctx = new InitialContext();
            Object ref = ctx.lookup(CalculatriceRemote.class.getName());
            System.out.println(CalculatriceRemote.class.getName());
            CalculatriceRemote calc = (CalculatriceRemote)PortableRemoteObject.narrow(ref,CalculatriceRemote.class);
            result = calc.additionner(a,b) ;
            assertEquals(expResult, result);           
        } catch (NamingException ex) {
            fail(ex.getMessage());
        }
    }

}
