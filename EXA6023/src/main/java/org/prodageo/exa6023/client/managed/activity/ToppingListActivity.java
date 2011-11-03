package org.prodageo.exa6023.client.managed.activity;

import com.google.gwt.place.shared.Place;
import com.google.gwt.place.shared.PlaceController;
import com.google.gwt.requestfactory.shared.Receiver;
import com.google.gwt.requestfactory.shared.Request;
import com.google.gwt.view.client.Range;
import java.util.List;
import org.prodageo.exa6023.client.managed.request.ApplicationRequestFactory;
import org.prodageo.exa6023.client.managed.request.ToppingProxy;
import org.prodageo.exa6023.client.scaffold.ScaffoldMobileApp;
import org.prodageo.exa6023.client.scaffold.activity.IsScaffoldMobileActivity;
import org.prodageo.exa6023.client.scaffold.place.AbstractProxyListActivity;
import org.prodageo.exa6023.client.scaffold.place.ProxyListView;

public class ToppingListActivity extends AbstractProxyListActivity<ToppingProxy> implements IsScaffoldMobileActivity {

    private final ApplicationRequestFactory requests;

    public ToppingListActivity(ApplicationRequestFactory requests, ProxyListView<org.prodageo.exa6023.client.managed.request.ToppingProxy> view, PlaceController placeController) {
        super(placeController, view, ToppingProxy.class);
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
        return "Toppings";
    }

    public boolean hasEditButton() {
        return false;
    }

    protected Request<java.util.List<org.prodageo.exa6023.client.managed.request.ToppingProxy>> createRangeRequest(Range range) {
        return requests.toppingRequest().findToppingEntries(range.getStart(), range.getLength());
    }

    protected void fireCountRequest(Receiver<Long> callback) {
        requests.toppingRequest().countToppings().fire(callback);
    }
}
