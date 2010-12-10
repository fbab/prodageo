package fr.insa.rouen.bpm.webservices;

import javax.jws.WebMethod;
import javax.jws.WebParam;
import javax.jws.WebResult;
import javax.jws.WebService;

import fr.insa.rouen.bpm.webservices.payload.WebserviceCommandAcknoledge;
import fr.insa.rouen.bpm.webservices.payload.WebserviceCommandPayload;

/**
 * Interface webservice qui expose les pincipales fonctionnalités de MyApplication
 * @author olivier
 *
 */
@WebService
public interface MyApplicationWebServices {

	@WebMethod(operationName = "sendMyApplicationCommand")
	public @WebResult(name="acknoledge")WebserviceCommandAcknoledge sendMyApplicationCommand(@WebParam(name="commande")WebserviceCommandPayload wsCommande);
}
