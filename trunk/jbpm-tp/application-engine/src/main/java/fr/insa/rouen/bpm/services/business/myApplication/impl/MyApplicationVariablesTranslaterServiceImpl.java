package fr.insa.rouen.bpm.services.business.myApplication.impl;

import org.apache.commons.lang.StringUtils;

import fr.insa.rouen.bpm.model.business.myApplication.MyApplicationCommand;
import fr.insa.rouen.bpm.model.process.ProcessPayLoad;
import fr.insa.rouen.bpm.model.process.myApplication.EMyApplicationVariables;
import fr.insa.rouen.bpm.model.process.myApplication.impl.MyApplicationProcessPayloadImpl;
import fr.insa.rouen.bpm.services.business.myApplication.MyApplicationVariablesTranslaterService;

public class MyApplicationVariablesTranslaterServiceImpl implements MyApplicationVariablesTranslaterService {

	public ProcessPayLoad<EMyApplicationVariables> getProcessPayLoadFromCommand(MyApplicationCommand myApplicationCommand){
		MyApplicationProcessPayloadImpl result = new MyApplicationProcessPayloadImpl();
		
		result.setpVemail(myApplicationCommand.getEmail());
		result.setpVaddress(myApplicationCommand.getAddress());
		result.setpVname(myApplicationCommand.getName());
		result.setpVpaymentMeans(myApplicationCommand.getPaymentMeans());
		result.setpVproduct1(myApplicationCommand.getProduct1());
		
		//Produit 2 n'est pas obligatoire
		if(StringUtils.isNotBlank(myApplicationCommand.getProduct2()))
				result.setpVproduct2(myApplicationCommand.getProduct2());
		
		return result;
	}
	
}
