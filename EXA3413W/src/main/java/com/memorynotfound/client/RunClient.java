package com.memorynotfound.client;

import org.springframework.context.annotation.AnnotationConfigApplicationContext;
import java.net.URISyntaxException;

public class RunClient {

    public static void main(String[] args) throws URISyntaxException {
        AnnotationConfigApplicationContext context = new AnnotationConfigApplicationContext(SoapClientConfig.class);
        BeerClient client = context.getBean(BeerClient.class);
        
        System.out.println("args[0] = ");
        System.out.println(args[0]);
        int number = Integer.parseInt(args[0]);
        
        client.sendGetBeerRequest(number);
    }

}
