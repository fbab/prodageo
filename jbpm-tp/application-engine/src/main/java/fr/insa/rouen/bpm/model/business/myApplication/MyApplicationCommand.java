package fr.insa.rouen.bpm.model.business.myApplication;

import java.io.Serializable;

import org.jbpm.graph.exe.ProcessInstance;

/**
 * Business representation of the MyApplication command witch generates the {@link ProcessInstance}
 * 
 * @author olivier
 * 
 * @version 1.0
 * @since 1.0
 *
 */
public interface MyApplicationCommand extends Serializable {

	public String getName();

	public void setName(String name);

	public String getProduct1();

	public void setProduct1(String product1);

	public String getProduct2();

	public void setProduct2(String product2);

	public String getEmail();

	public void setEmail(String email);

	public String getAddress();

	public void setAddress(String address);

	public String getPaymentMeans();

	public void setPaymentMeans(String paymentMeans);
	
}
