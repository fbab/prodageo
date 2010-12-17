package com.wstest;

import org.springframework.ws.soap.axiom.AxiomSoapMessageFactory;

/**
 * A sub-class of AxiomSoapMessageFactory that removes the features that are not
 * compatible with the Google App Engine.
 */
public class GAEAxiomSoapMessageFactory extends AxiomSoapMessageFactory {

    public void afterPropertiesSet() throws Exception {
     // Do nothing. Google App Engine does not support writing to files.
    }
}
