/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

package Mdb;

import javax.ejb.ActivationConfigProperty;
import javax.ejb.MessageDriven;
import javax.jms.Message;
import javax.jms.MessageListener;

/**
 *
 * @author root
 */
@MessageDriven(mappedName = "hello2", activationConfig =  {
        @ActivationConfigProperty(propertyName = "acknowledgeMode", propertyValue = "Auto-acknowledge"),
        @ActivationConfigProperty(propertyName = "destinationType", propertyValue = "javax.jms.Queue")
    })
public class MsgDispatchBean implements MessageListener {
    
    public MsgDispatchBean() {
    }

    public void onMessage(Message message) {
        System.out.println("recu !");
    }
    
}
