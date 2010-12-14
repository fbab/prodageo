package fr.insa.rouen.bpm.services.business.myApplication;

import fr.insa.rouen.bpm.model.business.myApplication.MyApplicationCommand;
import fr.insa.rouen.bpm.model.process.ProcessPayLoad;
import fr.insa.rouen.bpm.model.process.myApplication.EMyApplicationVariables;

/**
 * Assure le mapping métier -> process et process -> métier
 * @author olivier
 *
 */
public interface MyApplicationVariablesTranslaterService {

	public ProcessPayLoad<EMyApplicationVariables> getProcessPayLoadFromCommand(MyApplicationCommand myApplicationCommand);
	
}
