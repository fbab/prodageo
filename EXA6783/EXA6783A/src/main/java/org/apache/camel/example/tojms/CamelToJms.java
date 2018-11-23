/**
 * Licensed to the Apache Software Foundation (ASF) under one or more
 * contributor license agreements.  See the NOTICE file distributed with
 * this work for additional information regarding copyright ownership.
 * The ASF licenses this file to You under the Apache License, Version 2.0
 * (the "License"); you may not use this file except in compliance with
 * the License.  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
package org.apache.camel.example.tojms;

import javax.jms.ConnectionFactory;

import org.apache.activemq.ActiveMQConnectionFactory;
import org.apache.camel.CamelContext;
import org.apache.camel.ProducerTemplate;
import org.apache.camel.builder.RouteBuilder;
import org.apache.camel.component.jms.JmsComponent;
import org.apache.camel.impl.DefaultCamelContext;

/**
 * An example class for demonstrating some of the basics behind Camel. This
 * example sends some text messages on to a JMS Queue, consumes them and
 * persists them to disk
 */
public final class CamelToJms {

    private CamelToJms() {        
    }
    
    public static void main(String args[]) throws Exception {

        CamelContext context = new DefaultCamelContext();

	// cas d'un broker JMS embarque dans l'application
        // ConnectionFactory connectionFactory = new ActiveMQConnectionFactory("vm://localhost?broker.persistent=false");

	// to understand vm:, tcp:, cf http://activemq.apache.org/configuring-transports.html
        ConnectionFactory connectionFactory = new ActiveMQConnectionFactory("tcp://localhost:61616") ;
        // Note we can explicit name the component
        // context.addComponent("proxy-jms-broker", JmsComponent.jmsComponentAutoAcknowledge(connectionFactory));a

	// cnx2jms is a local name (an alias) of the broker that is listening on "tcp://localhost:61616"
	// the name on the server is amq-broker by default for broker started by ActiveMQ in ServiceMix
	    context.addComponent("cnx4jms", JmsComponent.jmsComponentAutoAcknowledge(connectionFactory));
        
// Camel template - a handy class for kicking off exchanges
        ProducerTemplate template = context.createProducerTemplate();
        // Now everything is set up - lets start the context
        context.start();
        // Now send some test text to a component - for this case a JMS Queue
        // The text get converted to JMS messages - and sent to the Queue
        for (int i = 0; i < 10; i++) {
            // template.sendBody("proxy-jms-broker:queue:equipe", "Test Message de mon equipe : " + i);
	    // queue
            template.sendBody("cnx4jms:queue:equipe2queue", "Test Queue Message de mon equipe : " + i);
	    // topic
            template.sendBody("cnx4jms:topic:equipe2topic", "Test Topic Message de mon equipe : " + i);
        }
        // wait a bit and then stop
        Thread.sleep(1000);
        context.stop();
    }
}
