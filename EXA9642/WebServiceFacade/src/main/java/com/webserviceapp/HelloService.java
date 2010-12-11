package com.webserviceapp;

import com.webserviceapp.client.HelloClientImpl;

/**
 * Hello world!
 *
 */
public class HelloService 
{
    public String sayHello()
    {
        HelloClientImpl vWsClient = new HelloClientImpl();
        String vReturnStr = null;
        vReturnStr =  vWsClient.sayHello();
        System.out.println(vReturnStr);
        return vReturnStr;
    }
}
