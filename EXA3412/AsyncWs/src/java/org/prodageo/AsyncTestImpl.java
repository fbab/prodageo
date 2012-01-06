/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

package org.prodageo;

/**
 *
 * @author fbaucher
 */
import java.net.URL;
import javax.annotation.Resource;
import javax.jws.WebService;
import javax.ejb.Stateless;
import javax.servlet.ServletContext;
import javax.xml.namespace.QName;
import javax.xml.ws.WebServiceContext;

import com.sun.xml.ws.api.message.Header;
import com.sun.xml.ws.api.message.HeaderList;
import com.sun.xml.ws.api.message.Headers;

// internal
import com.sun.xml.ws.developer.JAXWSProperties;
import com.sun.xml.ws.developer.WSBindingProvider;
import javax.xml.stream.XMLStreamConstants;
import javax.xml.stream.XMLStreamException;
import javax.xml.stream.XMLStreamReader;
import javax.xml.ws.handler.MessageContext;


@Stateless
@WebService()
@javax.xml.ws.soap.Addressing
public class AsyncTestImpl implements AsyncTest {

    /** namespace : addressing 2003. */
    private static final String NS_ADDRESSING_2003 =
"http://schemas.xmlsoap.org/ws/2003/03/addressing";
    /** header : reply to. */
    private static final String HEADER_REPLYTO = "ReplyTo";
    /** header : address. */
    private static final String HEADER_ADDRESS = "Address";
    /** header : message id. */
    private static final String HEADER_MESSAGEID = "MessageID";
    /** header : relates to. */
    private static final String HEADER_RELATESTO = "RelatesTo";

    @Resource
    WebServiceContext context;

    public void sayHello(String name) {

        System.out.println("Got message");

        // gets the addressing informations in the SOAP header
        HeaderList hl =
        (HeaderList) context.getMessageContext().get(
        JAXWSProperties.INBOUND_HEADER_LIST_PROPERTY);

        if ( hl == null )
        {
            System.out.println("hl est null");
        }
        else
        {
            System.out.println("hl non null");
        }
        
        String address = null;
        try {
            Header replyTo = hl.get(NS_ADDRESSING_2003, HEADER_REPLYTO, false);
            if (replyTo == null  )
            {
               System.out.println("replyTo null");
        }
            
            XMLStreamReader replyToReader = replyTo.readHeader();
            while (
(address == null) &&
(replyToReader.getEventType() != XMLStreamConstants.END_DOCUMENT)
) {
                if (replyToReader.next() == XMLStreamConstants.START_ELEMENT) {
                    if (replyToReader.getLocalName().equals(HEADER_ADDRESS)) {
                        replyToReader.next();
                        address = replyToReader.getText();
                        System.out.println(address);
                    }
                }
            }
            } catch (XMLStreamException xe) {
            xe.printStackTrace();
            System.out.println("exception avec ReplyTo");
            return;
        }
        String messageId =
        hl.get(NS_ADDRESSING_2003, HEADER_MESSAGEID, false).getStringContent();

       if ( messageId != null)  { System.out.println(messageId); }
 else { System.out.println("messageId null"); }
        AsyncTestResponseImplService srv = new AsyncTestResponseImplService();
        AsyncTestResponseImpl portType = srv.getAsyncTestResponseImplPort();
        WSBindingProvider bp = (WSBindingProvider) portType;

        if ( bp == null)  { System.out.println("bp null"); }
        bp.setAddress(address);
        bp.setOutboundHeaders(Headers.create(
        new QName(NS_ADDRESSING_2003,
        HEADER_RELATESTO),
        messageId));

        portType.response( "hello you ["+address+"]");

        System.out.println("Response sent");
    }
} 