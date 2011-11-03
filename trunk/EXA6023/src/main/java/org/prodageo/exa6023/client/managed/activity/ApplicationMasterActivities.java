package org.prodageo.exa6023.client.managed.activity;

import com.google.gwt.activity.shared.Activity;
import com.google.gwt.activity.shared.ActivityMapper;
import com.google.gwt.place.shared.Place;
import com.google.gwt.place.shared.PlaceController;
import com.google.inject.Inject;
import org.prodageo.exa6023.client.managed.request.ApplicationEntityTypesProcessor;
import org.prodageo.exa6023.client.managed.request.ApplicationRequestFactory;
import org.prodageo.exa6023.client.managed.request.ToppingProxy;
import org.prodageo.exa6023.client.managed.ui.ToppingListView;
import org.prodageo.exa6023.client.managed.ui.ToppingMobileListView;
import org.prodageo.exa6023.client.scaffold.ScaffoldApp;
import org.prodageo.exa6023.client.scaffold.place.ProxyListPlace;

public final class ApplicationMasterActivities extends ApplicationMasterActivities_Roo_Gwt {

    @Inject
    public ApplicationMasterActivities(ApplicationRequestFactory requests, PlaceController placeController) {
        this.requests = requests;
        this.placeController = placeController;
    }
}
