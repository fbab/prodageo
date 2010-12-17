package org.prodageo ;

import java.io.File;
import java.util.*;

import java.io.IOException;
import java.util.logging.Level;
import java.util.logging.Logger;

import javax.xml.bind.*;
// import javax.xml.bind.JAXBContext;
// import javax.xml.bind.Marshaller;
// import sun.jdbc.odbc.ee.ObjectFactory;
// import generated.PurchaseOrderType ;
// import generated.* ;
import org.prodageo.purchaseorder.* ;


public class Client {

	/**
	 * @param args
	 */
	public static void main(String[] args)
	{
		try {
			
			
			JAXBContext jcout = JAXBContext.newInstance("org.prodageo.purchaseorder");
			
			// création d'un nouveau fichier XML
			ObjectFactory factory = new ObjectFactory();
			PurchaseOrder type = factory.createPurchaseOrder();
			Items items = factory.createItems();
			Items.Item o = factory.createItemsItem();
			o.setPartNum("test");
			o.setProductName("productname");
			o.setQuantity(2);

			items.getItem().add(o);
			type.setItems(items);


			Marshaller m = jcout.createMarshaller();
			m.setProperty(Marshaller.JAXB_FORMATTED_OUTPUT, Boolean.TRUE);
			m.marshal(type, System.out);
			
			JAXBContext jcin = JAXBContext.newInstance("org.prodageo.purchaseorder");

			
			Unmarshaller unmarshaller = jcin.createUnmarshaller();
			
			PurchaseOrder root = (PurchaseOrder) unmarshaller.unmarshal(new File("C:\\prodageo\\EXA2974\\sample.xml") );
			Items items2 = root.getItems();
			
			Iterator it = items2.getItem().iterator() ;
			String pn = ( (Items.Item) it.next()).getPartNum();
			System.out.println("PartNum :" + pn );
			
			
		}
		catch (Exception e)
		{
			e.printStackTrace();
		}
	}
}

