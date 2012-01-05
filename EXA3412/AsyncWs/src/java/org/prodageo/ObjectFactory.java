
package org.prodageo;

import javax.xml.bind.JAXBElement;
import javax.xml.bind.annotation.XmlElementDecl;
import javax.xml.bind.annotation.XmlRegistry;
import javax.xml.namespace.QName;


/**
 * This object contains factory methods for each 
 * Java content interface and Java element interface 
 * generated in the org.prodageo package. 
 * <p>An ObjectFactory allows you to programatically 
 * construct new instances of the Java representation 
 * for XML content. The Java representation of XML 
 * content can consist of schema derived interfaces 
 * and classes representing the binding of schema 
 * type definitions, element declarations and model 
 * groups.  Factory methods for each of these are 
 * provided in this class.
 * 
 */
@XmlRegistry
public class ObjectFactory {

    private final static QName _ResponseResponse_QNAME = new QName("http://prodageo.org/", "responseResponse");
    private final static QName _Response_QNAME = new QName("http://prodageo.org/", "response");

    /**
     * Create a new ObjectFactory that can be used to create new instances of schema derived classes for package: org.prodageo
     * 
     */
    public ObjectFactory() {
    }

    /**
     * Create an instance of {@link Response }
     * 
     */
    public Response createResponse() {
        return new Response();
    }

    /**
     * Create an instance of {@link ResponseResponse }
     * 
     */
    public ResponseResponse createResponseResponse() {
        return new ResponseResponse();
    }

    /**
     * Create an instance of {@link JAXBElement }{@code <}{@link ResponseResponse }{@code >}}
     * 
     */
    @XmlElementDecl(namespace = "http://prodageo.org/", name = "responseResponse")
    public JAXBElement<ResponseResponse> createResponseResponse(ResponseResponse value) {
        return new JAXBElement<ResponseResponse>(_ResponseResponse_QNAME, ResponseResponse.class, null, value);
    }

    /**
     * Create an instance of {@link JAXBElement }{@code <}{@link Response }{@code >}}
     * 
     */
    @XmlElementDecl(namespace = "http://prodageo.org/", name = "response")
    public JAXBElement<Response> createResponse(Response value) {
        return new JAXBElement<Response>(_Response_QNAME, Response.class, null, value);
    }

}
