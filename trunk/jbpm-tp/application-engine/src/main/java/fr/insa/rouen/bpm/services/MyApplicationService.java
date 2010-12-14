package fr.insa.rouen.bpm.services;

import fr.insa.rouen.bpm.model.business.myApplication.MyApplicationCommand;
import fr.insa.rouen.bpm.model.business.myApplication.MyApplicationCommandAcknoledge;

/**
 * Main business service for MyApplication
 * @author olivier
 *
 */
public interface MyApplicationService {

	/**
	 * Lance le process !
	 * @param commande
	 * @param userId
	 * @return
	 */
	public MyApplicationCommandAcknoledge processCommand(MyApplicationCommand commande, Long userId);

	
}
