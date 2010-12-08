package org.prodageo ;

import org.springframework.stereotype.Component;

@Component("adder")
public class Adder {
    public int add(int a, int b){
        return a + b;
    }
}