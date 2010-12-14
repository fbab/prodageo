package fr.insa.rouen.bpm.services.business.myApplication;

import fr.insa.rouen.bpm.model.business.myApplication.MyApplicationCommand;
import fr.insa.rouen.bpm.model.business.myApplication.MyApplicationCommandAcknoledge;
import fr.insa.rouen.bpm.webservices.payload.WebserviceCommandAcknoledge;
import fr.insa.rouen.bpm.webservices.payload.WebserviceCommandPayload;

public interface WebserviceBusinessTranslaterService {

	public MyApplicationCommand webserviceCommandToBusiness(WebserviceCommandPayload webserviceCommand);
	
	public WebserviceCommandAcknoledge businessAcknoledgeToWS(MyApplicationCommandAcknoledge acknoledge);
		
}
