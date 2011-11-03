package org.prodageo.exa6023.client.scaffold.ioc;

import org.prodageo.exa6023.client.scaffold.ScaffoldApp;
import com.google.gwt.inject.client.Ginjector;

public interface ScaffoldInjector extends Ginjector {

	ScaffoldApp getScaffoldApp();
}
