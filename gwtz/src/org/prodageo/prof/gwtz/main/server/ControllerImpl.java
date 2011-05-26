package org.prodageo.prof.gwtz.main.server;

import org.prodageo.prof.gwtz.main.client.Controller;
import com.google.gwt.user.server.rpc.RemoteServiceServlet;

public class ControllerImpl extends RemoteServiceServlet implements Controller {
	
	public String getLabel()
	{
		return "Le serveur parle" ;
	}
}
