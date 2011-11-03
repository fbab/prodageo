package org.prodageo.exa6023.client.managed.activity;

import com.google.gwt.activity.shared.Activity;
import com.google.gwt.event.shared.EventBus;
import com.google.gwt.place.shared.Place;
import com.google.gwt.requestfactory.shared.EntityProxyId;
import com.google.gwt.requestfactory.shared.Receiver;
import com.google.gwt.user.client.ui.AcceptsOneWidget;
import java.util.ArrayList;
import java.util.Arrays;
import java.util.Collection;
import java.util.Collections;
import java.util.List;
import java.util.Set;
import org.prodageo.exa6023.client.managed.activity.PizzaEditActivityWrapper.View;
import org.prodageo.exa6023.client.managed.request.ApplicationRequestFactory;
import org.prodageo.exa6023.client.managed.request.BaseProxy;
import org.prodageo.exa6023.client.managed.request.PizzaProxy;
import org.prodageo.exa6023.client.managed.request.ToppingProxy;
import org.prodageo.exa6023.client.managed.ui.ToppingSetEditor;
import org.prodageo.exa6023.client.scaffold.activity.IsScaffoldMobileActivity;
import org.prodageo.exa6023.client.scaffold.place.ProxyEditView;
import org.prodageo.exa6023.client.scaffold.place.ProxyListPlace;
import org.prodageo.exa6023.client.scaffold.place.ProxyPlace;

public class PizzaEditActivityWrapper extends PizzaEditActivityWrapper_Roo_Gwt {

    private final EntityProxyId<PizzaProxy> proxyId;

    public PizzaEditActivityWrapper(ApplicationRequestFactory requests, View<?> view, Activity activity, EntityProxyId<org.prodageo.exa6023.client.managed.request.PizzaProxy> proxyId) {
        this.requests = requests;
        this.view = view;
        this.wrapped = activity;
        this.proxyId = proxyId;
    }

    public Place getBackButtonPlace() {
        return (proxyId == null) ? new ProxyListPlace(PizzaProxy.class) : new ProxyPlace(proxyId, ProxyPlace.Operation.DETAILS);
    }

    public String getBackButtonText() {
        return "Cancel";
    }

    public Place getEditButtonPlace() {
        return null;
    }

    public String getTitleText() {
        return (proxyId == null) ? "New Pizza" : "Edit Pizza";
    }

    public boolean hasEditButton() {
        return false;
    }

    @Override
    public String mayStop() {
        return wrapped.mayStop();
    }

    @Override
    public void onCancel() {
        wrapped.onCancel();
    }

    @Override
    public void onStop() {
        wrapped.onStop();
    }

    public interface View<V extends org.prodageo.exa6023.client.scaffold.place.ProxyEditView<org.prodageo.exa6023.client.managed.request.PizzaProxy, V>> extends View_Roo_Gwt<V> {
    }
}
