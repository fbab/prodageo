package fr.insa.rouen.bpm.services.business.myApplication.impl;

import fr.insa.rouen.bpm.model.business.myApplication.MyApplicationCommand;
import fr.insa.rouen.bpm.model.business.myApplication.MyApplicationCommandAcknoledge;
import fr.insa.rouen.bpm.model.business.myApplication.impl.MyApplicationCommandImpl;
import fr.insa.rouen.bpm.services.business.myApplication.WebserviceBusinessTranslaterService;
import fr.insa.rouen.bpm.webservices.payload.WebserviceCommandAcknoledge;
import fr.insa.rouen.bpm.webservices.payload.WebserviceCommandPayload;

public class WebServiceBusinessTranslaterServiceImpl implements WebserviceBusinessTranslaterService{

	public MyApplicationCommand webserviceCommandToBusiness(WebserviceCommandPayload webserviceCommand){
		MyApplicationCommand businessCommand = new MyApplicationCommandImpl();
		
		businessCommand.setEmail(webserviceCommand.getEmail());
		businessCommand.setAddress(webserviceCommand.getAddress());
		businessCommand.setName(webserviceCommand.getName());
		businessCommand.setPaymentMeans(webserviceCommand.getPaymentMeans());
		businessCommand.setProduct1(webserviceCommand.getProduct1());
		if(businessCommand.getProduct2()!=null)
			businessCommand.setProduct2(businessCommand.getProduct2());
		
		return businessCommand;
	}
	
	public WebserviceCommandAcknoledge businessAcknoledgeToWS(MyApplicationCommandAcknoledge acknoledge){
		WebserviceCommandAcknoledge wsAcknoledge = new WebserviceCommandAcknoledge();
		wsAcknoledge.setUserId(acknoledge.getUserId());
		wsAcknoledge.setOk(acknoledge.isOk());
		
		if(acknoledge.isOk()){
			wsAcknoledge.setProcessId(acknoledge.getProcessId());
		}else{
			wsAcknoledge.setErrorCause(acknoledge.getErrorCause());
		}
		
		return wsAcknoledge;
	} 
	
}
