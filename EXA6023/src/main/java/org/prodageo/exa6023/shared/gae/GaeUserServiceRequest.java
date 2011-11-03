package org.prodageo.exa6023.shared.gae;

import org.prodageo.exa6023.server.gae.UserServiceLocator;
import org.prodageo.exa6023.server.gae.UserServiceWrapper;
import com.google.gwt.requestfactory.shared.Request;
import com.google.gwt.requestfactory.shared.RequestContext;
import com.google.gwt.requestfactory.shared.Service;

/**
 * Makes requests of the Google AppEngine UserService.
 */
@Service(value = UserServiceWrapper.class, locator = UserServiceLocator.class)
public interface GaeUserServiceRequest extends RequestContext {
	
	Request<String> createLoginURL(String destinationURL);

	Request<String> createLogoutURL(String destinationURL);

	Request<GaeUser> getCurrentUser();
}
