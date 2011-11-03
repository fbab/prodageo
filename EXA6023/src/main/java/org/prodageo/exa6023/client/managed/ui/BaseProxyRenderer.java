package org.prodageo.exa6023.client.managed.ui;

import com.google.gwt.requestfactory.ui.client.ProxyRenderer;
import org.prodageo.exa6023.client.managed.request.BaseProxy;

public class BaseProxyRenderer extends ProxyRenderer<BaseProxy> {

    private static org.prodageo.exa6023.client.managed.ui.BaseProxyRenderer INSTANCE;

    protected BaseProxyRenderer() {
        super(new String[] { "id" });
    }

    public static org.prodageo.exa6023.client.managed.ui.BaseProxyRenderer instance() {
        if (INSTANCE == null) {
            INSTANCE = new BaseProxyRenderer();
        }
        return INSTANCE;
    }

    public String render(BaseProxy object) {
        if (object == null) {
            return "";
        }
        return object.getId() + " (" + object.getId() + ")";
    }
}
