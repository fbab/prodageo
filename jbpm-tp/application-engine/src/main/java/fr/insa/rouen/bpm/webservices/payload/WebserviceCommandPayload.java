package fr.insa.rouen.bpm.webservices.payload;

import java.io.Serializable;

public class WebserviceCommandPayload implements Serializable {

	/**
	 * 
	 */
	private static final long serialVersionUID = -4596391005780330467L;

	private String name;
	
	private String product1;
	
	private String product2;
	
	private String email;
	
	private String address;
	
	private String paymentMeans;
	
	
	public String getName() {
		return name;
	}

	public void setName(String name) {
		this.name = name;
	}

	public String getProduct1() {
		return product1;
	}

	public void setProduct1(String product1) {
		this.product1 = product1;
	}

	public String getProduct2() {
		return product2;
	}

	public void setProduct2(String product2) {
		this.product2 = product2;
	}

	public String getEmail() {
		return email;
	}

	public void setEmail(String email) {
		this.email = email;
	}

	public String getAddress() {
		return address;
	}

	public void setAddress(String address) {
		this.address = address;
	}

	public String getPaymentMeans() {
		return paymentMeans;
	}

	public void setPaymentMeans(String paymentMeans) {
		this.paymentMeans = paymentMeans;
	}

	@Override
	public String toString() {
		StringBuilder stringBuilder = new StringBuilder();
		
		stringBuilder.append("name : ")
		.append(name)
		.append("\nemail : ")
		.append(email)
		.append("\naddress : ")
		.append(address)
		.append("\nPaiement Method : ")
		.append(paymentMeans)
		.append("\nProduit 1 : ")
		.append(product1);
		
		if(product2!=null){
			stringBuilder.append("\nProduit 2 : ")
			.append(product2);
		}
		
		return stringBuilder.toString();
	}
	
}
