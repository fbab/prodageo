package org.prodageo.exa6023.client.managed.ui;

import com.google.gwt.requestfactory.ui.client.ProxyRenderer;
import java.util.Set;
import org.prodageo.exa6023.client.managed.request.PizzaOrderProxy;
import org.prodageo.exa6023.client.managed.request.PizzaProxy;
import org.prodageo.exa6023.shared.PaymentType;

public class PizzaOrderProxyRenderer extends ProxyRenderer<PizzaOrderProxy> {

    private static org.prodageo.exa6023.client.managed.ui.PizzaOrderProxyRenderer INSTANCE;

    protected PizzaOrderProxyRenderer() {
        super(new String[] { "name" });
    }

    public static org.prodageo.exa6023.client.managed.ui.PizzaOrderProxyRenderer instance() {
        if (INSTANCE == null) {
            INSTANCE = new PizzaOrderProxyRenderer();
        }
        return INSTANCE;
    }

    public String render(PizzaOrderProxy object) {
        if (object == null) {
            return "";
        }
        return object.getName() + " (" + object.getId() + ")";
    }
}
