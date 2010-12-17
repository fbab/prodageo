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

			// JAXBElement<PurchaseOrder> element = factory.createPurchaseOrder(type);
			Marshaller m = jcout.createMarshaller();
			m.setProperty(Marshaller.JAXB_FORMATTED_OUTPUT, Boolean.TRUE);
			m.marshal(type, System.out);
			
			// exploitation d'un fichier XML existant
			// JAXBContext jcin = JAXBContext.newInstance("generated.PurchaseOrderType"); <-- KO
			// JAXBContext jcin = JAXBContext.newInstance("generated.PurchaseOrderType.class"); KO
			// JAXBContext jcin = JAXBContext.newInstance(PurchaseOrder.class);
			// JAXBContext jcin = JAXBContext.newInstance("import"); KO
			JAXBContext jcin = JAXBContext.newInstance("org.prodageo.purchaseorder");
			// JAXBContext jcin = JAXBContext.newInstance();
			
			Unmarshaller unmarshaller = jcin.createUnmarshaller();
			
			// le fichier est bien vu mais il provoque une exception
			// generated.PurchaseOrder root = (generated.PurchaseOrder) unmarshaller.unmarshal(new File("H:\\home\\fbab\\ide\\eclipse\\jaxb\\sample.xml") );
			PurchaseOrder root = (PurchaseOrder) unmarshaller.unmarshal(new File("H:\\home\\fbab\\ide\\eclipse\\jaxb\\sample.xml") );
			// JAXBElement<generated.PurchaseOrder> root = JAXBElement<generated.PurchaseOrder> unmarshaller.unmarshal(new File("H:\\home\\fbab\\ide\\eclipse\\jaxb\\sample.xml") , generated.PurchaseOrder.class ); KO
			//PurchaseOrder root = (PurchaseOrder) unmarshaller.unmarshal(new File("H:\\home\\fbab\\ide\\eclipse\\jaxb\\sample.xml"));
			
			// PurchaseOrderType root = (PurchaseOrderType) unmarshaller.unmarshal(new File("pouf.xml"));
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

