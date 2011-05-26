package org.prodageo.prof.gwtz.main.client;

import com.google.gwt.core.client.GWT;
import com.google.gwt.user.client.rpc.RemoteService;
import com.google.gwt.user.client.rpc.RemoteServiceRelativePath;

@RemoteServiceRelativePath("Controller")
public interface Controller extends RemoteService {
	
	/**
	 * Utility class for simplifying access to the instance of async service.
	 */
	
	String getLabel() ;
	
	public static class Util {
		private static ControllerAsync instance;
		public static ControllerAsync getInstance(){
			if (instance == null) {
				instance = GWT.create(Controller.class);
			}
			return instance;
		}
	}
}
	