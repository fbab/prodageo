package org.prodageo.prof.gwtz.main.client;

import com.google.gwt.user.client.rpc.AsyncCallback;

public interface ControllerAsync {

	void getLabel(AsyncCallback<String> callback);
}
