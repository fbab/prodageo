package org.prodageo.exa6023.client.managed.activity;

import com.google.gwt.place.shared.Place;
import com.google.gwt.place.shared.PlaceController;
import com.google.gwt.requestfactory.shared.Receiver;
import com.google.gwt.requestfactory.shared.Request;
import com.google.gwt.view.client.Range;
import java.util.List;
import java.util.Set;
import org.prodageo.exa6023.client.managed.request.ApplicationRequestFactory;
import org.prodageo.exa6023.client.managed.request.BaseProxy;
import org.prodageo.exa6023.client.managed.request.PizzaProxy;
import org.prodageo.exa6023.client.managed.request.ToppingProxy;
import org.prodageo.exa6023.client.managed.ui.ToppingSetEditor;
import org.prodageo.exa6023.client.scaffold.ScaffoldMobileApp;
import org.prodageo.exa6023.client.scaffold.activity.IsScaffoldMobileActivity;
import org.prodageo.exa6023.client.scaffold.place.AbstractProxyListActivity;
import org.prodageo.exa6023.client.scaffold.place.ProxyListView;

public class PizzaListActivity extends AbstractProxyListActivity<PizzaProxy> implements IsScaffoldMobileActivity {

    private final ApplicationRequestFactory requests;

    public PizzaListActivity(ApplicationRequestFactory requests, ProxyListView<org.prodageo.exa6023.client.managed.request.PizzaProxy> view, PlaceController placeController) {
        super(placeController, view, PizzaProxy.class);
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
        return "Pizzas";
    }

    public boolean hasEditButton() {
        return false;
    }

    protected Request<java.util.List<org.prodageo.exa6023.client.managed.request.PizzaProxy>> createRangeRequest(Range range) {
        return requests.pizzaRequest().findPizzaEntries(range.getStart(), range.getLength());
    }

    protected void fireCountRequest(Receiver<Long> callback) {
        requests.pizzaRequest().countPizzas().fire(callback);
    }
}
