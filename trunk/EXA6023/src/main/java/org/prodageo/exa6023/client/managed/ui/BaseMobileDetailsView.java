package org.prodageo.exa6023.client.managed.ui;

import com.google.gwt.core.client.GWT;
import com.google.gwt.dom.client.Element;
import com.google.gwt.event.dom.client.ClickEvent;
import com.google.gwt.event.dom.client.HasClickHandlers;
import com.google.gwt.i18n.client.DateTimeFormat;
import com.google.gwt.i18n.client.NumberFormat;
import com.google.gwt.uibinder.client.UiBinder;
import com.google.gwt.uibinder.client.UiField;
import com.google.gwt.uibinder.client.UiHandler;
import com.google.gwt.user.client.Window;
import com.google.gwt.user.client.ui.Composite;
import com.google.gwt.user.client.ui.HTMLPanel;
import com.google.gwt.user.client.ui.Widget;
import org.prodageo.exa6023.client.managed.request.BaseProxy;
import org.prodageo.exa6023.client.managed.ui.BaseMobileDetailsView.Binder;
import org.prodageo.exa6023.client.scaffold.place.ProxyDetailsView;

public class BaseMobileDetailsView extends BaseMobileDetailsView_Roo_Gwt {

    private static final Binder BINDER = GWT.create(Binder.class);

    private static org.prodageo.exa6023.client.managed.ui.BaseMobileDetailsView instance;

    @UiField
    HasClickHandlers delete;

    private Delegate delegate;

    public BaseMobileDetailsView() {
        initWidget(BINDER.createAndBindUi(this));
    }

    public static org.prodageo.exa6023.client.managed.ui.BaseMobileDetailsView instance() {
        if (instance == null) {
            instance = new BaseMobileDetailsView();
        }
        return instance;
    }

    public Widget asWidget() {
        return this;
    }

    public boolean confirm(String msg) {
        return Window.confirm(msg);
    }

    public BaseProxy getValue() {
        return proxy;
    }

    @UiHandler("delete")
    public void onDeleteClicked(ClickEvent e) {
        delegate.deleteClicked();
    }

    public void setDelegate(Delegate delegate) {
        this.delegate = delegate;
    }

    interface Binder extends UiBinder<HTMLPanel, BaseMobileDetailsView> {
    }
}
