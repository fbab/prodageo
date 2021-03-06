// WARNING: DO NOT EDIT THIS FILE. THIS FILE IS MANAGED BY SPRING ROO.

package org.prodageo.exa6023.client.managed.request;

import com.google.gwt.requestfactory.shared.InstanceRequest;
import com.google.gwt.requestfactory.shared.Request;
import com.google.gwt.requestfactory.shared.RequestContext;
import com.google.gwt.requestfactory.shared.ServiceName;
import org.springframework.roo.addon.gwt.RooGwtMirroredFrom;

@RooGwtMirroredFrom("org.prodageo.exa6023.server.domain.Topping")
@ServiceName("org.prodageo.exa6023.server.domain.Topping")
public interface ToppingRequest extends RequestContext {

    abstract InstanceRequest<org.prodageo.exa6023.client.managed.request.ToppingProxy, java.lang.Void> persist();

    abstract InstanceRequest<org.prodageo.exa6023.client.managed.request.ToppingProxy, java.lang.Void> remove();

    abstract Request<java.lang.Long> countToppings();

    abstract Request<org.prodageo.exa6023.client.managed.request.ToppingProxy> findTopping(Long id);

    abstract Request<java.util.List<org.prodageo.exa6023.client.managed.request.ToppingProxy>> findAllToppings();

    abstract Request<java.util.List<org.prodageo.exa6023.client.managed.request.ToppingProxy>> findToppingEntries(int firstResult, int maxResults);
}
