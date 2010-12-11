package org.prodageo;

import com.webserviceapp.client.HelloClientImpl;

/**
 * Hello world!
 *
 */
public class HelloMain 
{
    public static void main (String[] args)
    {
        HelloClientImpl vWsClient = new HelloClientImpl();
        String vReturnStr = null;
        vReturnStr =  vWsClient.sayHello();
        System.out.println("Resultat renvoye par la facade qui interroge le Web Service : " + vReturnStr);
    }
}
