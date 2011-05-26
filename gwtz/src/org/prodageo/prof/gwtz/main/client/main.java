package org.prodageo.prof.gwtz.main.client;

import com.google.gwt.core.client.EntryPoint;
import com.google.gwt.event.dom.client.ClickEvent;
import com.google.gwt.event.dom.client.ClickHandler;
import com.google.gwt.user.client.Window;
import com.google.gwt.user.client.rpc.AsyncCallback;
import com.google.gwt.user.client.ui.Button;
import com.google.gwt.user.client.ui.RootPanel;

/**
 * Entry point classes define <code>onModuleLoad()</code>.
 */
public class main implements EntryPoint {
	private Button clickMeButton;
	private String Label = "default" ;
	
	
	public void onModuleLoad() {
		RootPanel rootPanel = RootPanel.get();
		getLabel() ;
		
		clickMeButton = new Button();
		rootPanel.add(clickMeButton);
		clickMeButton.setText("Click me!");
		clickMeButton.addClickHandler(new ClickHandler(){
			public void onClick(ClickEvent event) {
				Window.alert("Hello : " + Label);
			}
		});
	}
	
	@SuppressWarnings("unused")
	private void getLabel()
	{
		Controller.Util.getInstance().getLabel
		(
				new AsyncCallback<String>()
				{
					@Override
					public void onFailure(final Throwable caught) {
						// TODO Auto-generated method stub
						
					}

					@Override
					public void onSuccess(final String result) {
						// TODO Auto-generated method stub
						Label = result ;
					}
				}
		);
	}
}
