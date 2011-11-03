package org.prodageo.exa6023.client.managed.ui;

import com.google.gwt.requestfactory.ui.client.ProxyRenderer;
import org.prodageo.exa6023.client.managed.request.ToppingProxy;

public class ToppingProxyRenderer extends ProxyRenderer<ToppingProxy> {

    private static org.prodageo.exa6023.client.managed.ui.ToppingProxyRenderer INSTANCE;

    protected ToppingProxyRenderer() {
        super(new String[] { "name" });
    }

    public static org.prodageo.exa6023.client.managed.ui.ToppingProxyRenderer instance() {
        if (INSTANCE == null) {
            INSTANCE = new ToppingProxyRenderer();
        }
        return INSTANCE;
    }

    public String render(ToppingProxy object) {
        if (object == null) {
            return "";
        }
        return object.getName() + " (" + object.getId() + ")";
    }
}
