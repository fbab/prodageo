package org.prodageo.exa6023.client.managed.activity;

import com.google.gwt.activity.shared.Activity;
import com.google.gwt.place.shared.PlaceController;
import com.google.gwt.requestfactory.shared.EntityProxyId;
import com.google.gwt.requestfactory.shared.RequestContext;
import org.prodageo.exa6023.client.managed.request.ApplicationRequestFactory;
import org.prodageo.exa6023.client.managed.request.ToppingProxy;
import org.prodageo.exa6023.client.managed.request.ToppingRequest;
import org.prodageo.exa6023.client.managed.ui.ToppingDetailsView;
import org.prodageo.exa6023.client.managed.ui.ToppingEditView;
import org.prodageo.exa6023.client.managed.ui.ToppingListView;
import org.prodageo.exa6023.client.managed.ui.ToppingMobileDetailsView;
import org.prodageo.exa6023.client.managed.ui.ToppingMobileEditView;
import org.prodageo.exa6023.client.scaffold.ScaffoldApp;
import org.prodageo.exa6023.client.scaffold.place.CreateAndEditProxy;
import org.prodageo.exa6023.client.scaffold.place.FindAndEditProxy;
import org.prodageo.exa6023.client.scaffold.place.ProxyPlace;

public class ToppingActivitiesMapper {

    private final ApplicationRequestFactory requests;

    private final PlaceController placeController;

    public ToppingActivitiesMapper(ApplicationRequestFactory requests, PlaceController placeController) {
        this.requests = requests;
        this.placeController = placeController;
    }

    public Activity getActivity(ProxyPlace place) {
        switch(place.getOperation()) {
            case DETAILS:
                return new ToppingDetailsActivity((EntityProxyId<ToppingProxy>) place.getProxyId(), requests, placeController, ScaffoldApp.isMobile() ? ToppingMobileDetailsView.instance() : ToppingDetailsView.instance());
            case EDIT:
                return makeEditActivity(place);
            case CREATE:
                return makeCreateActivity();
        }
        throw new IllegalArgumentException("Unknown operation " + place.getOperation());
    }

    @SuppressWarnings("unchecked")
    private EntityProxyId<org.prodageo.exa6023.client.managed.request.ToppingProxy> coerceId(ProxyPlace place) {
        return (EntityProxyId<ToppingProxy>) place.getProxyId();
    }

    private Activity makeCreateActivity() {
        ToppingEditView.instance().setCreating(true);
        final ToppingRequest request = requests.toppingRequest();
        Activity activity = new CreateAndEditProxy<ToppingProxy>(ToppingProxy.class, request, ScaffoldApp.isMobile() ? ToppingMobileEditView.instance() : ToppingEditView.instance(), placeController) {

            @Override
            protected RequestContext createSaveRequest(ToppingProxy proxy) {
                request.persist().using(proxy);
                return request;
            }
        };
        return new ToppingEditActivityWrapper(requests, ScaffoldApp.isMobile() ? ToppingMobileEditView.instance() : ToppingEditView.instance(), activity, null);
    }

    private Activity makeEditActivity(ProxyPlace place) {
        ToppingEditView.instance().setCreating(false);
        EntityProxyId<ToppingProxy> proxyId = coerceId(place);
        Activity activity = new FindAndEditProxy<ToppingProxy>(proxyId, requests, ScaffoldApp.isMobile() ? ToppingMobileEditView.instance() : ToppingEditView.instance(), placeController) {

            @Override
            protected RequestContext createSaveRequest(ToppingProxy proxy) {
                ToppingRequest request = requests.toppingRequest();
                request.persist().using(proxy);
                return request;
            }
        };
        return new ToppingEditActivityWrapper(requests, ScaffoldApp.isMobile() ? ToppingMobileEditView.instance() : ToppingEditView.instance(), activity, proxyId);
    }
}
