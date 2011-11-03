package org.prodageo.exa6023.client.managed.activity;

import com.google.gwt.activity.shared.AbstractActivity;
import com.google.gwt.event.shared.EventBus;
import com.google.gwt.place.shared.Place;
import com.google.gwt.place.shared.PlaceController;
import com.google.gwt.requestfactory.shared.EntityProxy;
import com.google.gwt.requestfactory.shared.EntityProxyId;
import com.google.gwt.requestfactory.shared.Receiver;
import com.google.gwt.requestfactory.shared.Request;
import com.google.gwt.user.client.ui.AcceptsOneWidget;
import java.util.Set;
import org.prodageo.exa6023.client.managed.request.ApplicationRequestFactory;
import org.prodageo.exa6023.client.managed.request.PizzaOrderProxy;
import org.prodageo.exa6023.client.managed.request.PizzaProxy;
import org.prodageo.exa6023.client.managed.ui.PizzaSetEditor;
import org.prodageo.exa6023.client.scaffold.activity.IsScaffoldMobileActivity;
import org.prodageo.exa6023.client.scaffold.place.ProxyDetailsView;
import org.prodageo.exa6023.client.scaffold.place.ProxyListPlace;
import org.prodageo.exa6023.client.scaffold.place.ProxyPlace;
import org.prodageo.exa6023.client.scaffold.place.ProxyPlace.Operation;
import org.prodageo.exa6023.shared.PaymentType;

public class PizzaOrderDetailsActivity extends PizzaOrderDetailsActivity_Roo_Gwt {

    private final PlaceController placeController;

    private final ProxyDetailsView<PizzaOrderProxy> view;

    private AcceptsOneWidget display;

    public PizzaOrderDetailsActivity(EntityProxyId<org.prodageo.exa6023.client.managed.request.PizzaOrderProxy> proxyId, ApplicationRequestFactory requests, PlaceController placeController, ProxyDetailsView<org.prodageo.exa6023.client.managed.request.PizzaOrderProxy> view) {
        this.placeController = placeController;
        this.proxyId = proxyId;
        this.requests = requests;
        view.setDelegate(this);
        this.view = view;
    }

    public void deleteClicked() {
        if (!view.confirm("Really delete this entry? You cannot undo this change.")) {
            return;
        }
        requests.pizzaOrderRequest().remove().using(view.getValue()).fire(new Receiver<Void>() {

            public void onSuccess(Void ignore) {
                if (display == null) {
                    return;
                }
                placeController.goTo(getBackButtonPlace());
            }
        });
    }

    public void editClicked() {
        placeController.goTo(getEditButtonPlace());
    }

    public Place getBackButtonPlace() {
        return new ProxyListPlace(PizzaOrderProxy.class);
    }

    public String getBackButtonText() {
        return "Back";
    }

    public Place getEditButtonPlace() {
        return new ProxyPlace(view.getValue().stableId(), Operation.EDIT);
    }

    public String getTitleText() {
        return "View PizzaOrder";
    }

    public boolean hasEditButton() {
        return true;
    }

    public void onCancel() {
        onStop();
    }

    public void onStop() {
        display = null;
    }

    public void start(AcceptsOneWidget displayIn, EventBus eventBus) {
        this.display = displayIn;
        Receiver<EntityProxy> callback = new Receiver<EntityProxy>() {

            public void onSuccess(EntityProxy proxy) {
                if (proxy == null) {
                    placeController.goTo(getBackButtonPlace());
                    return;
                }
                if (display == null) {
                    return;
                }
                view.setValue((PizzaOrderProxy) proxy);
                display.setWidget(view);
            }
        };
        find(callback);
    }
}
