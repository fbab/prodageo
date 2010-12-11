package com.webserviceapp.client;

import javax.xml.ws.BindingProvider;
import javax.xml.ws.soap.SOAPFaultException;

public class HelloClientImpl implements HelloService {

	HelloService mHelloService;

	public HelloClientImpl() {
		HelloService_Service vHelloServiceImpl = new HelloService_Service();
		mHelloService = vHelloServiceImpl.getHelloServiceImplPort();

		((BindingProvider) mHelloService).getRequestContext().put(
				BindingProvider.ENDPOINT_ADDRESS_PROPERTY,
				"http://localhost:8080/WebServiceFournisseur/HelloService");
		// To set Basic Authentification
		// ((BindingProvider)
		// mHelloService).getRequestContext().put(BindingProvider.USERNAME_PROPERTY,
		// vUser);
		// ((BindingProvider)
		// mHelloService).getRequestContext().put(BindingProvider.PASSWORD_PROPERTY,
		// vPassword);
	}

	public String sayHello() {
		String vReturn = null;
		try {
			vReturn = mHelloService.sayHello();
		} catch (SOAPFaultException vExcep) {
			System.out.println("Erreur lors de l'appel");
		}
		return vReturn;
	}
}
