package org.prodageo.exa6023.client.managed.activity;

import com.google.gwt.activity.shared.Activity;
import com.google.gwt.place.shared.PlaceController;
import com.google.gwt.requestfactory.shared.EntityProxyId;
import com.google.gwt.requestfactory.shared.RequestContext;
import java.util.Set;
import org.prodageo.exa6023.client.managed.request.ApplicationRequestFactory;
import org.prodageo.exa6023.client.managed.request.BaseProxy;
import org.prodageo.exa6023.client.managed.request.PizzaProxy;
import org.prodageo.exa6023.client.managed.request.PizzaRequest;
import org.prodageo.exa6023.client.managed.request.ToppingProxy;
import org.prodageo.exa6023.client.managed.ui.PizzaDetailsView;
import org.prodageo.exa6023.client.managed.ui.PizzaEditView;
import org.prodageo.exa6023.client.managed.ui.PizzaListView;
import org.prodageo.exa6023.client.managed.ui.PizzaMobileDetailsView;
import org.prodageo.exa6023.client.managed.ui.PizzaMobileEditView;
import org.prodageo.exa6023.client.managed.ui.ToppingSetEditor;
import org.prodageo.exa6023.client.scaffold.ScaffoldApp;
import org.prodageo.exa6023.client.scaffold.place.CreateAndEditProxy;
import org.prodageo.exa6023.client.scaffold.place.FindAndEditProxy;
import org.prodageo.exa6023.client.scaffold.place.ProxyPlace;

public class PizzaActivitiesMapper {

    private final ApplicationRequestFactory requests;

    private final PlaceController placeController;

    public PizzaActivitiesMapper(ApplicationRequestFactory requests, PlaceController placeController) {
        this.requests = requests;
        this.placeController = placeController;
    }

    public Activity getActivity(ProxyPlace place) {
        switch(place.getOperation()) {
            case DETAILS:
                return new PizzaDetailsActivity((EntityProxyId<PizzaProxy>) place.getProxyId(), requests, placeController, ScaffoldApp.isMobile() ? PizzaMobileDetailsView.instance() : PizzaDetailsView.instance());
            case EDIT:
                return makeEditActivity(place);
            case CREATE:
                return makeCreateActivity();
        }
        throw new IllegalArgumentException("Unknown operation " + place.getOperation());
    }

    @SuppressWarnings("unchecked")
    private EntityProxyId<org.prodageo.exa6023.client.managed.request.PizzaProxy> coerceId(ProxyPlace place) {
        return (EntityProxyId<PizzaProxy>) place.getProxyId();
    }

    private Activity makeCreateActivity() {
        PizzaEditView.instance().setCreating(true);
        final PizzaRequest request = requests.pizzaRequest();
        Activity activity = new CreateAndEditProxy<PizzaProxy>(PizzaProxy.class, request, ScaffoldApp.isMobile() ? PizzaMobileEditView.instance() : PizzaEditView.instance(), placeController) {

            @Override
            protected RequestContext createSaveRequest(PizzaProxy proxy) {
                request.persist().using(proxy);
                return request;
            }
        };
        return new PizzaEditActivityWrapper(requests, ScaffoldApp.isMobile() ? PizzaMobileEditView.instance() : PizzaEditView.instance(), activity, null);
    }

    private Activity makeEditActivity(ProxyPlace place) {
        PizzaEditView.instance().setCreating(false);
        EntityProxyId<PizzaProxy> proxyId = coerceId(place);
        Activity activity = new FindAndEditProxy<PizzaProxy>(proxyId, requests, ScaffoldApp.isMobile() ? PizzaMobileEditView.instance() : PizzaEditView.instance(), placeController) {

            @Override
            protected RequestContext createSaveRequest(PizzaProxy proxy) {
                PizzaRequest request = requests.pizzaRequest();
                request.persist().using(proxy);
                return request;
            }
        };
        return new PizzaEditActivityWrapper(requests, ScaffoldApp.isMobile() ? PizzaMobileEditView.instance() : PizzaEditView.instance(), activity, proxyId);
    }
}
