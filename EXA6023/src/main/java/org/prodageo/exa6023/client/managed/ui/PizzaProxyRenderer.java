package org.prodageo.exa6023.client.managed.ui;

import com.google.gwt.requestfactory.ui.client.ProxyRenderer;
import java.util.Set;
import org.prodageo.exa6023.client.managed.request.BaseProxy;
import org.prodageo.exa6023.client.managed.request.PizzaProxy;
import org.prodageo.exa6023.client.managed.request.ToppingProxy;

public class PizzaProxyRenderer extends ProxyRenderer<PizzaProxy> {

    private static org.prodageo.exa6023.client.managed.ui.PizzaProxyRenderer INSTANCE;

    protected PizzaProxyRenderer() {
        super(new String[] { "name" });
    }

    public static org.prodageo.exa6023.client.managed.ui.PizzaProxyRenderer instance() {
        if (INSTANCE == null) {
            INSTANCE = new PizzaProxyRenderer();
        }
        return INSTANCE;
    }

    public String render(PizzaProxy object) {
        if (object == null) {
            return "";
        }
        return object.getName() + " (" + object.getId() + ")";
    }
}
