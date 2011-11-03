package org.prodageo.exa6023.client.managed.activity;

import com.google.gwt.place.shared.Place;
import com.google.gwt.place.shared.PlaceController;
import com.google.gwt.requestfactory.shared.Receiver;
import com.google.gwt.requestfactory.shared.Request;
import com.google.gwt.view.client.Range;
import java.util.List;
import java.util.Set;
import org.prodageo.exa6023.client.managed.request.ApplicationRequestFactory;
import org.prodageo.exa6023.client.managed.request.PizzaOrderProxy;
import org.prodageo.exa6023.client.managed.request.PizzaProxy;
import org.prodageo.exa6023.client.managed.ui.PizzaSetEditor;
import org.prodageo.exa6023.client.scaffold.ScaffoldMobileApp;
import org.prodageo.exa6023.client.scaffold.activity.IsScaffoldMobileActivity;
import org.prodageo.exa6023.client.scaffold.place.AbstractProxyListActivity;
import org.prodageo.exa6023.client.scaffold.place.ProxyListView;
import org.prodageo.exa6023.shared.PaymentType;

public class PizzaOrderListActivity extends AbstractProxyListActivity<PizzaOrderProxy> implements IsScaffoldMobileActivity {

    private final ApplicationRequestFactory requests;

    public PizzaOrderListActivity(ApplicationRequestFactory requests, ProxyListView<org.prodageo.exa6023.client.managed.request.PizzaOrderProxy> view, PlaceController placeController) {
        super(placeController, view, PizzaOrderProxy.class);
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
        return "PizzaOrders";
    }

    public boolean hasEditButton() {
        return false;
    }

    protected Request<java.util.List<org.prodageo.exa6023.client.managed.request.PizzaOrderProxy>> createRangeRequest(Range range) {
        return requests.pizzaOrderRequest().findPizzaOrderEntries(range.getStart(), range.getLength());
    }

    protected void fireCountRequest(Receiver<Long> callback) {
        requests.pizzaOrderRequest().countPizzaOrders().fire(callback);
    }
}
