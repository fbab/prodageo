package org.prodageo.exa6023.client.managed.activity;

import com.google.gwt.place.shared.Place;
import com.google.gwt.place.shared.PlaceController;
import com.google.gwt.requestfactory.shared.Receiver;
import com.google.gwt.requestfactory.shared.Request;
import com.google.gwt.view.client.Range;
import java.util.List;
import org.prodageo.exa6023.client.managed.request.ApplicationRequestFactory;
import org.prodageo.exa6023.client.managed.request.BaseProxy;
import org.prodageo.exa6023.client.scaffold.ScaffoldMobileApp;
import org.prodageo.exa6023.client.scaffold.activity.IsScaffoldMobileActivity;
import org.prodageo.exa6023.client.scaffold.place.AbstractProxyListActivity;
import org.prodageo.exa6023.client.scaffold.place.ProxyListView;

public class BaseListActivity extends AbstractProxyListActivity<BaseProxy> implements IsScaffoldMobileActivity {

    private final ApplicationRequestFactory requests;

    public BaseListActivity(ApplicationRequestFactory requests, ProxyListView<org.prodageo.exa6023.client.managed.request.BaseProxy> view, PlaceController placeController) {
        super(placeController, view, BaseProxy.class);
        this.requests = requests;
    }

    public Place getBackButtonPlace() {
        return ScaffoldMobileApp.ROOT_PLACE;
    }

    public String getBackButtonText() {
        return "Entities";
    }

    public Place getEditButtonPlace() {
        return null;
    }

    public String getTitleText() {
        return "Bases";
    }

    public boolean hasEditButton() {
        return false;
    }

    protected Request<java.util.List<org.prodageo.exa6023.client.managed.request.BaseProxy>> createRangeRequest(Range range) {
        return requests.baseRequest().findBaseEntries(range.getStart(), range.getLength());
    }

    protected void fireCountRequest(Receiver<Long> callback) {
        requests.baseRequest().countBases().fire(callback);
    }
}
