package org.prodageo.exa6023.client.managed.ui;

import com.google.gwt.core.client.GWT;
import com.google.gwt.dom.client.SpanElement;
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
import org.prodageo.exa6023.client.managed.ui.BaseDetailsView.Binder;
import org.prodageo.exa6023.client.scaffold.place.ProxyDetailsView;
import org.prodageo.exa6023.client.scaffold.place.ProxyListView;

public class BaseDetailsView extends BaseDetailsView_Roo_Gwt {

    private static final Binder BINDER = GWT.create(Binder.class);

    private static org.prodageo.exa6023.client.managed.ui.BaseDetailsView instance;

    @UiField
    HasClickHandlers edit;

    @UiField
    HasClickHandlers delete;

    private Delegate delegate;

    public BaseDetailsView() {
        initWidget(BINDER.createAndBindUi(this));
    }

    public static org.prodageo.exa6023.client.managed.ui.BaseDetailsView instance() {
        if (instance == null) {
            instance = new BaseDetailsView();
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

    @UiHandler("edit")
    public void onEditClicked(ClickEvent e) {
        delegate.editClicked();
    }

    public void setDelegate(Delegate delegate) {
        this.delegate = delegate;
    }

    interface Binder extends UiBinder<HTMLPanel, BaseDetailsView> {
    }
}
