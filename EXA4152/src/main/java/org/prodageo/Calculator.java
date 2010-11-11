package org.prodageo ;

import org.springframework.stereotype.Component;
import org.springframework.beans.factory.annotation.Autowired;

@Component("calculator")
public class Calculator {
    private Adder adder;

    @Autowired
    public void setAdder(Adder adder) {
        this.adder = adder;
    }

    public void makeAnOperation(){
        int r1 = adder.add(1,2);
        System.out.println("r1 = " + r1);   
    }
}