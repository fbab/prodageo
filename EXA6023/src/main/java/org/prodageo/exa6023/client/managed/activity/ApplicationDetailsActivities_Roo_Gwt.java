// WARNING: DO NOT EDIT THIS FILE. THIS FILE IS MANAGED BY SPRING ROO.

package org.prodageo.exa6023.client.managed.activity;

import com.google.gwt.activity.shared.Activity;
import com.google.gwt.activity.shared.ActivityMapper;
import com.google.gwt.place.shared.Place;
import com.google.gwt.place.shared.PlaceController;
import com.google.inject.Inject;
import org.prodageo.exa6023.client.managed.request.ApplicationEntityTypesProcessor;
import org.prodageo.exa6023.client.managed.request.ApplicationRequestFactory;
import org.prodageo.exa6023.client.managed.request.BaseProxy;
import org.prodageo.exa6023.client.managed.request.PizzaOrderProxy;
import org.prodageo.exa6023.client.managed.request.PizzaProxy;
import org.prodageo.exa6023.client.managed.request.ToppingProxy;
import org.prodageo.exa6023.client.scaffold.place.ProxyPlace;

public abstract class ApplicationDetailsActivities_Roo_Gwt implements ActivityMapper {

    protected ApplicationRequestFactory requests;

    protected PlaceController placeController;

    public Activity getActivity(Place place) {
        if (!(place instanceof ProxyPlace)) {
            return null;
        }
        final ProxyPlace proxyPlace = (ProxyPlace) place;
        return new ApplicationEntityTypesProcessor<Activity>() {

            @Override
            public void handleTopping(ToppingProxy proxy) {
                setResult(new ToppingActivitiesMapper(requests, placeController).getActivity(proxyPlace));
            }

            @Override
            public void handlePizza(PizzaProxy proxy) {
                setResult(new PizzaActivitiesMapper(requests, placeController).getActivity(proxyPlace));
            }

            @Override
            public void handlePizzaOrder(PizzaOrderProxy proxy) {
                setResult(new PizzaOrderActivitiesMapper(requests, placeController).getActivity(proxyPlace));
            }

            @Override
            public void handleBase(BaseProxy proxy) {
                setResult(new BaseActivitiesMapper(requests, placeController).getActivity(proxyPlace));
            }
        }.process(proxyPlace.getProxyClass());
    }
}
