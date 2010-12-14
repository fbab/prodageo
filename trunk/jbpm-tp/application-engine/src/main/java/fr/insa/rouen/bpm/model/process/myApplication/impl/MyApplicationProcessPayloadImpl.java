package fr.insa.rouen.bpm.model.process.myApplication.impl;

import java.io.Serializable;
import java.util.LinkedHashMap;
import java.util.Map;

import org.apache.commons.lang.StringUtils;

import fr.insa.rouen.bpm.model.process.ProcessPayLoad;
import fr.insa.rouen.bpm.model.process.myApplication.EMyApplicationVariables;

public class MyApplicationProcessPayloadImpl implements ProcessPayLoad<EMyApplicationVariables> {


	/**
	 * 
	 */
	private static final long serialVersionUID = -4596391005780330467L;

	private String pVname;
	
	private String pVproduct1;
	
	private String pVproduct2;
	
	private String pVemail;
	
	private String pVaddress;
	
	private String pVpaymentMeans;
	
	private Boolean pVOk;

	public String getpVname() {
		return pVname;
	}

	public void setpVname(String pVname) {
		this.pVname = pVname;
	}

	public String getpVproduct1() {
		return pVproduct1;
	}

	public void setpVproduct1(String pVproduct1) {
		this.pVproduct1 = pVproduct1;
	}

	public String getpVproduct2() {
		return pVproduct2;
	}

	public void setpVproduct2(String pVproduct2) {
		this.pVproduct2 = pVproduct2;
	}

	public String getpVemail() {
		return pVemail;
	}

	public void setpVemail(String pVemail) {
		this.pVemail = pVemail;
	}

	public String getpVaddress() {
		return pVaddress;
	}

	public void setpVaddress(String pVaddress) {
		this.pVaddress = pVaddress;
	}

	public String getpVpaymentMeans() {
		return pVpaymentMeans;
	}

	public void setpVpaymentMeans(String pVpaymentMeans) {
		this.pVpaymentMeans = pVpaymentMeans;
	}

	public Boolean getpVOk() {
		return pVOk;
	}

	public void setpVOk(Boolean pVOk) {
		this.pVOk = pVOk;
	}

	public String getProcessInfo() {
		// TODO Auto-generated method stub
		return null;
	}

	public String getProcessVariableInfo() {
		StringBuilder stringBuilder = new StringBuilder("Process Variables Info : \n");
		stringBuilder.append("name : ")
		.append(pVname)
		.append("\nemail : ")
		.append(pVemail)
		.append("\naddress : ")
		.append(pVaddress)
		.append("\nPaiement Method : ")
		.append(pVpaymentMeans)
		.append("\nProduit 1 : ")
		.append(pVproduct1);
		
		if(pVproduct2!=null){
			stringBuilder.append("\nProduit 2 : ")
			.append(pVproduct2);
		}
		
		if(pVOk!=null){
			stringBuilder.append("\nis process OK : ")
			.append(pVOk);
		}
		
		return stringBuilder.toString();
	}

	public Map<String, Serializable> getInitProcessVariables() {
		Map<String, Serializable> result = new LinkedHashMap<String, Serializable>();
		
		result.put(EMyApplicationVariables.PRODUCT1.getProcessVariableName(), pVproduct1);
		
		//produit2 n'est pas obligatoire
		if(StringUtils.isNotBlank(pVproduct2))
			result.put(EMyApplicationVariables.PRODUCT2.getProcessVariableName(), pVproduct2);
		
		result.put(EMyApplicationVariables.MAIL.getProcessVariableName(), pVemail);
		result.put(EMyApplicationVariables.CUSTOMER_NAME.getProcessVariableName(), pVname);
		result.put(EMyApplicationVariables.CUSTOMER_ADDRESS.getProcessVariableName(), pVaddress);
		result.put(EMyApplicationVariables.PAIEMENT_METHOD.getProcessVariableName(), pVpaymentMeans);
		
		return result;
	}
	
	public Map<EMyApplicationVariables, Serializable> getProcessVariables() {
		// FIXME Vraiment null car les variables de process sont différentes des variables business.
		//TODO voir si l'utilisation de la réflexion peut simplifier !
		
		return null;
	}

	@Override
	public String toString() {
		StringBuilder stringBuilder = new StringBuilder();
		//FIXME append all pertinent component fields of the process variables
		return stringBuilder.toString();
	}
	
}
