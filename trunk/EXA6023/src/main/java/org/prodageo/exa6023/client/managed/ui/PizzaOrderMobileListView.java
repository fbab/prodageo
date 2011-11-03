package org.prodageo.exa6023.client.managed.ui;

import com.google.gwt.i18n.client.DateTimeFormat;
import com.google.gwt.i18n.client.NumberFormat;
import com.google.gwt.safehtml.shared.SafeHtml;
import com.google.gwt.safehtml.shared.SafeHtmlBuilder;
import com.google.gwt.safehtml.shared.SafeHtmlUtils;
import com.google.gwt.text.client.DateTimeFormatRenderer;
import com.google.gwt.text.shared.AbstractRenderer;
import com.google.gwt.text.shared.AbstractSafeHtmlRenderer;
import com.google.gwt.text.shared.Renderer;
import java.util.Date;
import java.util.HashSet;
import java.util.Set;
import org.prodageo.exa6023.client.managed.request.PizzaOrderProxy;
import org.prodageo.exa6023.client.managed.request.PizzaProxy;
import org.prodageo.exa6023.client.scaffold.ScaffoldMobileApp;
import org.prodageo.exa6023.client.scaffold.ui.MobileProxyListView;
import org.prodageo.exa6023.shared.PaymentType;

public class PizzaOrderMobileListView extends PizzaOrderMobileListView_Roo_Gwt {

    private static org.prodageo.exa6023.client.managed.ui.PizzaOrderMobileListView instance;

    public PizzaOrderMobileListView() {
        super("New PizzaOrder", new CellRenderer());
        init();
    }

    public static org.prodageo.exa6023.client.managed.ui.PizzaOrderMobileListView instance() {
        if (instance == null) {
            instance = new PizzaOrderMobileListView();
        }
        return instance;
    }

    public String[] getPaths() {
        return paths.toArray(new String[paths.size()]);
    }

    private static class CellRenderer extends AbstractSafeHtmlRenderer<PizzaOrderProxy> {

        private final String dateStyle = ScaffoldMobileApp.getMobileListResources().cellListStyle().dateProp();

        private final String secondaryStyle = ScaffoldMobileApp.getMobileListResources().cellListStyle().secondaryProp();

        private final Renderer<String> primaryRenderer = new AbstractRenderer<String>() {

            public String render(java.lang.String obj) {
                return obj == null ? "" : String.valueOf(obj);
            }
        };

        private final Renderer<String> secondaryRenderer = new AbstractRenderer<String>() {

            public String render(java.lang.String obj) {
                return obj == null ? "" : String.valueOf(obj);
            }
        };

        private final Renderer<Date> dateRenderer = new DateTimeFormatRenderer(DateTimeFormat.getFormat(DateTimeFormat.PredefinedFormat.DATE_MEDIUM));

        @Override
        public SafeHtml render(PizzaOrderProxy value) {
            if (value == null) {
                return SafeHtmlUtils.EMPTY_SAFE_HTML;
            }
            SafeHtmlBuilder sb = new SafeHtmlBuilder();
            if (value.getName() != null) {
                sb.appendEscaped(primaryRenderer.render(value.getName()));
            }
            sb.appendHtmlConstant("<div style=\"position:relative;\">");
            sb.appendHtmlConstant("<div class=\"" + secondaryStyle + "\">");
            if (value.getAddress() != null) {
                sb.appendEscaped(secondaryRenderer.render(value.getAddress()));
            }
            sb.appendHtmlConstant("</div>");
            sb.appendHtmlConstant("<div class=\"" + dateStyle + "\">");
            if (value.getDeliveryDate() != null) {
                sb.appendEscaped(dateRenderer.render(value.getDeliveryDate()));
            }
            sb.appendHtmlConstant("</div>");
            sb.appendHtmlConstant("</div>");
            return sb.toSafeHtml();
        }
    }
}
