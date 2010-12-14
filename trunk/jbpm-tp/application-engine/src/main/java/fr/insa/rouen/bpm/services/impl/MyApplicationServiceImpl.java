package fr.insa.rouen.bpm.services.impl;

import org.apache.log4j.Logger;
import org.springframework.beans.factory.annotation.Required;

import fr.insa.rouen.bpm.model.business.myApplication.MyApplicationCommand;
import fr.insa.rouen.bpm.model.business.myApplication.MyApplicationCommandAcknoledge;
import fr.insa.rouen.bpm.model.business.myApplication.impl.MyApplicationCommandAcknoledgeImpl;
import fr.insa.rouen.bpm.model.process.ProcessPayLoad;
import fr.insa.rouen.bpm.services.MyApplicationService;
import fr.insa.rouen.bpm.services.business.myApplication.MyApplicationVariablesTranslaterService;
import fr.insa.rouen.bpm.services.process.ProcessManagerService;

public class MyApplicationServiceImpl implements MyApplicationService{

	private ProcessManagerService processManagerService;
	
	private MyApplicationVariablesTranslaterService variablesTranslaterService;
	
	private String processName;
	
	private static final Logger logger = Logger.getLogger(MyApplicationServiceImpl.class);
	
	public MyApplicationCommandAcknoledge processCommand(MyApplicationCommand commande, Long userId){
		MyApplicationCommandAcknoledge acknoledge = new MyApplicationCommandAcknoledgeImpl();
		acknoledge.setUserId(userId);
		
		ProcessPayLoad payLoad = variablesTranslaterService.getProcessPayLoadFromCommand(commande);
		Long processId = null;
		
		try{
			processId = processManagerService.startProcessWithTask(payLoad, processName, userId);
			acknoledge.setProcessId(processId);
			acknoledge.setOk(true);
		}catch (Exception e) {
			acknoledge.setOk(false);
			acknoledge.setErrorCause(e.getMessage());
			logger.warn("Problème lors du lancement du process.",e);
		}
		
		return acknoledge;
	}
	
	@Required
	public void setProcessManagerService(ProcessManagerService processManagerService) {
		this.processManagerService = processManagerService;
	}
	
	@Required
	public void setVariablesTranslaterService(MyApplicationVariablesTranslaterService variablesTranslaterService) {
		this.variablesTranslaterService = variablesTranslaterService;
	}
	
	@Required
	public void setProcessName(String processName) {
		this.processName = processName;
	}
}
