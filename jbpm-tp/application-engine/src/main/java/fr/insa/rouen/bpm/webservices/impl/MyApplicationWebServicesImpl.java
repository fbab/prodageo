package fr.insa.rouen.bpm.webservices.impl;

import javax.jws.WebService;

import org.apache.log4j.Logger;
import org.springframework.beans.factory.annotation.Required;

import fr.insa.rouen.bpm.model.business.myApplication.MyApplicationCommand;
import fr.insa.rouen.bpm.model.business.myApplication.MyApplicationCommandAcknoledge;
import fr.insa.rouen.bpm.services.MyApplicationService;
import fr.insa.rouen.bpm.services.business.myApplication.WebserviceBusinessTranslaterService;
import fr.insa.rouen.bpm.webservices.MyApplicationWebServices;
import fr.insa.rouen.bpm.webservices.payload.WebserviceCommandAcknoledge;
import fr.insa.rouen.bpm.webservices.payload.WebserviceCommandPayload;

@WebService(endpointInterface="fr.insa.rouen.bpm.webservices.MyApplicationWebServices" )
public class MyApplicationWebServicesImpl implements MyApplicationWebServices {

	private MyApplicationService myApplicationService;
	
	private WebserviceBusinessTranslaterService webserviceBusinessTranslaterService;
	
	private static final Logger logger = Logger.getLogger(MyApplicationWebServicesImpl.class);
	
	public WebserviceCommandAcknoledge sendMyApplicationCommand(WebserviceCommandPayload wsCommande){
		
		MyApplicationCommand commande = webserviceBusinessTranslaterService.webserviceCommandToBusiness(wsCommande);
		
		MyApplicationCommandAcknoledge acknoledge = myApplicationService.processCommand(commande, 5L);
		
		return webserviceBusinessTranslaterService.businessAcknoledgeToWS(acknoledge);
	}
	
	@Required
	public void setMyApplicationService(MyApplicationService myApplicationService) {
		this.myApplicationService = myApplicationService;
	}
	
	@Required
	public void setWebserviceBusinessTranslaterService(WebserviceBusinessTranslaterService webserviceBusinessTranslaterService) {
		this.webserviceBusinessTranslaterService = webserviceBusinessTranslaterService;
	}
}
