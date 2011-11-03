package org.prodageo.exa6023.client.managed.activity;

import com.google.gwt.activity.shared.Activity;
import com.google.gwt.place.shared.PlaceController;
import com.google.gwt.requestfactory.shared.EntityProxyId;
import com.google.gwt.requestfactory.shared.RequestContext;
import java.util.Set;
import org.prodageo.exa6023.client.managed.request.ApplicationRequestFactory;
import org.prodageo.exa6023.client.managed.request.PizzaOrderProxy;
import org.prodageo.exa6023.client.managed.request.PizzaOrderRequest;
import org.prodageo.exa6023.client.managed.request.PizzaProxy;
import org.prodageo.exa6023.client.managed.ui.PizzaOrderDetailsView;
import org.prodageo.exa6023.client.managed.ui.PizzaOrderEditView;
import org.prodageo.exa6023.client.managed.ui.PizzaOrderListView;
import org.prodageo.exa6023.client.managed.ui.PizzaOrderMobileDetailsView;
import org.prodageo.exa6023.client.managed.ui.PizzaOrderMobileEditView;
import org.prodageo.exa6023.client.managed.ui.PizzaSetEditor;
import org.prodageo.exa6023.client.scaffold.ScaffoldApp;
import org.prodageo.exa6023.client.scaffold.place.CreateAndEditProxy;
import org.prodageo.exa6023.client.scaffold.place.FindAndEditProxy;
import org.prodageo.exa6023.client.scaffold.place.ProxyPlace;
import org.prodageo.exa6023.shared.PaymentType;

public class PizzaOrderActivitiesMapper {

    private final ApplicationRequestFactory requests;

    private final PlaceController placeController;

    public PizzaOrderActivitiesMapper(ApplicationRequestFactory requests, PlaceController placeController) {
        this.requests = requests;
        this.placeController = placeController;
    }

    public Activity getActivity(ProxyPlace place) {
        switch(place.getOperation()) {
            case DETAILS:
                return new PizzaOrderDetailsActivity((EntityProxyId<PizzaOrderProxy>) place.getProxyId(), requests, placeController, ScaffoldApp.isMobile() ? PizzaOrderMobileDetailsView.instance() : PizzaOrderDetailsView.instance());
            case EDIT:
                return makeEditActivity(place);
            case CREATE:
                return makeCreateActivity();
        }
        throw new IllegalArgumentException("Unknown operation " + place.getOperation());
    }

    @SuppressWarnings("unchecked")
    private EntityProxyId<org.prodageo.exa6023.client.managed.request.PizzaOrderProxy> coerceId(ProxyPlace place) {
        return (EntityProxyId<PizzaOrderProxy>) place.getProxyId();
    }

    private Activity makeCreateActivity() {
        PizzaOrderEditView.instance().setCreating(true);
        final PizzaOrderRequest request = requests.pizzaOrderRequest();
        Activity activity = new CreateAndEditProxy<PizzaOrderProxy>(PizzaOrderProxy.class, request, ScaffoldApp.isMobile() ? PizzaOrderMobileEditView.instance() : PizzaOrderEditView.instance(), placeController) {

            @Override
            protected RequestContext createSaveRequest(PizzaOrderProxy proxy) {
                request.persist().using(proxy);
                return request;
            }
        };
        return new PizzaOrderEditActivityWrapper(requests, ScaffoldApp.isMobile() ? PizzaOrderMobileEditView.instance() : PizzaOrderEditView.instance(), activity, null);
    }

    private Activity makeEditActivity(ProxyPlace place) {
        PizzaOrderEditView.instance().setCreating(false);
        EntityProxyId<PizzaOrderProxy> proxyId = coerceId(place);
        Activity activity = new FindAndEditProxy<PizzaOrderProxy>(proxyId, requests, ScaffoldApp.isMobile() ? PizzaOrderMobileEditView.instance() : PizzaOrderEditView.instance(), placeController) {

            @Override
            protected RequestContext createSaveRequest(PizzaOrderProxy proxy) {
                PizzaOrderRequest request = requests.pizzaOrderRequest();
                request.persist().using(proxy);
                return request;
            }
        };
        return new PizzaOrderEditActivityWrapper(requests, ScaffoldApp.isMobile() ? PizzaOrderMobileEditView.instance() : PizzaOrderEditView.instance(), activity, proxyId);
    }
}
