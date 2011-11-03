package org.prodageo.exa6023.client.managed.activity;

import com.google.gwt.activity.shared.Activity;
import com.google.gwt.place.shared.PlaceController;
import com.google.gwt.requestfactory.shared.EntityProxyId;
import com.google.gwt.requestfactory.shared.RequestContext;
import org.prodageo.exa6023.client.managed.request.ApplicationRequestFactory;
import org.prodageo.exa6023.client.managed.request.BaseProxy;
import org.prodageo.exa6023.client.managed.request.BaseRequest;
import org.prodageo.exa6023.client.managed.ui.BaseDetailsView;
import org.prodageo.exa6023.client.managed.ui.BaseEditView;
import org.prodageo.exa6023.client.managed.ui.BaseListView;
import org.prodageo.exa6023.client.managed.ui.BaseMobileDetailsView;
import org.prodageo.exa6023.client.managed.ui.BaseMobileEditView;
import org.prodageo.exa6023.client.scaffold.ScaffoldApp;
import org.prodageo.exa6023.client.scaffold.place.CreateAndEditProxy;
import org.prodageo.exa6023.client.scaffold.place.FindAndEditProxy;
import org.prodageo.exa6023.client.scaffold.place.ProxyPlace;

public class BaseActivitiesMapper {

    private final ApplicationRequestFactory requests;

    private final PlaceController placeController;

    public BaseActivitiesMapper(ApplicationRequestFactory requests, PlaceController placeController) {
        this.requests = requests;
        this.placeController = placeController;
    }

    public Activity getActivity(ProxyPlace place) {
        switch(place.getOperation()) {
            case DETAILS:
                return new BaseDetailsActivity((EntityProxyId<BaseProxy>) place.getProxyId(), requests, placeController, ScaffoldApp.isMobile() ? BaseMobileDetailsView.instance() : BaseDetailsView.instance());
            case EDIT:
                return makeEditActivity(place);
            case CREATE:
                return makeCreateActivity();
        }
        throw new IllegalArgumentException("Unknown operation " + place.getOperation());
    }

    @SuppressWarnings("unchecked")
    private EntityProxyId<org.prodageo.exa6023.client.managed.request.BaseProxy> coerceId(ProxyPlace place) {
        return (EntityProxyId<BaseProxy>) place.getProxyId();
    }

    private Activity makeCreateActivity() {
        BaseEditView.instance().setCreating(true);
        final BaseRequest request = requests.baseRequest();
        Activity activity = new CreateAndEditProxy<BaseProxy>(BaseProxy.class, request, ScaffoldApp.isMobile() ? BaseMobileEditView.instance() : BaseEditView.instance(), placeController) {

            @Override
            protected RequestContext createSaveRequest(BaseProxy proxy) {
                request.persist().using(proxy);
                return request;
            }
        };
        return new BaseEditActivityWrapper(requests, ScaffoldApp.isMobile() ? BaseMobileEditView.instance() : BaseEditView.instance(), activity, null);
    }

    private Activity makeEditActivity(ProxyPlace place) {
        BaseEditView.instance().setCreating(false);
        EntityProxyId<BaseProxy> proxyId = coerceId(place);
        Activity activity = new FindAndEditProxy<BaseProxy>(proxyId, requests, ScaffoldApp.isMobile() ? BaseMobileEditView.instance() : BaseEditView.instance(), placeController) {

            @Override
            protected RequestContext createSaveRequest(BaseProxy proxy) {
                BaseRequest request = requests.baseRequest();
                request.persist().using(proxy);
                return request;
            }
        };
        return new BaseEditActivityWrapper(requests, ScaffoldApp.isMobile() ? BaseMobileEditView.instance() : BaseEditView.instance(), activity, proxyId);
    }
}
