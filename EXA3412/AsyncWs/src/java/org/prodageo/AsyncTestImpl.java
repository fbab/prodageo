/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

package org.prodageo;

/**
 *
 * @author fbaucher
 */
import javax.ejb.Stateless;
import javax.jws.WebService;

@WebService()
@javax.xml.ws.soap.Addressing
public class AsyncTestImpl implements AsyncTest {

    public void sayHello(String msg )
    {
    }
}
