package fr.insarouen.prof.client;

	import com.google.gwt.core.client.EntryPoint;
	import com.google.gwt.core.client.GWT;
	import com.google.gwt.event.dom.client.ClickEvent;
	import com.google.gwt.event.dom.client.ClickHandler;
	import com.google.gwt.event.dom.client.KeyCodes;
	import com.google.gwt.event.dom.client.KeyUpEvent;
	import com.google.gwt.event.dom.client.KeyUpHandler;
	import com.google.gwt.user.client.Window;
	import com.google.gwt.user.client.rpc.AsyncCallback;
	import com.google.gwt.user.client.ui.Button;
	import com.google.gwt.user.client.ui.DialogBox;
	import com.google.gwt.user.client.ui.Grid;
	import com.google.gwt.user.client.ui.HTML;
	import com.google.gwt.user.client.ui.Label;
	import com.google.gwt.user.client.ui.RootPanel;
	import com.google.gwt.user.client.ui.TextBox;
	import com.google.gwt.user.client.ui.VerticalPanel;
	import com.google.gwt.user.client.ui.ListBox;

	/**
	 * Entry point classes define <code>onModuleLoad()</code>.
	 */
public class Welcome implements EntryPoint {
	  /**
	   * The message displayed to the user when the server cannot be reached or
	   * returns an error.
	   */
	  private static final String SERVER_ERROR = "An error occurred while "
	      + "attempting to contact the server. Please check your network "
	      + "connection and try again.";

	  /**
	   * Create a remote service proxy to talk to the server-side Greeting service.
	   */
	  private final GreetingServiceAsync greetingService = GWT.create(GreetingService.class);

	  private final Messages messages = GWT.create(Messages.class);

	  /**
	   * This is the entry point method.
	   */
	  public void onModuleLoad() {
		  // quelques constantes utilisées dans les widgets
		  String[] listeRegions = { "PICARDIE", "CENTRE", "MIDI-PYRENNEES" } ;
		  
		  
		// déclaration des widgets
		  
		// le libellé du bouton est renvoyé par la fonction sendButton()
		// cette dernière est compilée automatiquement à partir du fichier de message : Messages.properties
		// Cette pré-compilation produit un fichier Messages.java
		// Ne pas éditer Messages.java (qui est généré prendant la compilation) mais sa source Messages.properties 
	    final Button sendButton = new Button( messages.sendButton() );
	    final TextBox nameField = new TextBox();
	    nameField.setText( messages.nameField() );
	    final Label errorLabel = new Label();
	    final Button clickMeButton = new Button(messages.clickMeButtonMessage());

	    // autres widgets donnés pour l'exemple
	    
	    final ListBox myListBox = new ListBox();
	    myListBox.setVisibleItemCount(listeRegions.length);
	    for (int i = 0; i < listeRegions.length; i++) {
	    	myListBox.addItem(listeRegions[i]);
	      }
	    
	    final ListBox myComboBox = new ListBox();
	    // ajouter des éléments dans la combo box
	    for (int i = 0; i < listeRegions.length; i++) {
	    	myComboBox.addItem(listeRegions[i]);
	      }
	       
	    // tableau non éditable
	    Grid myGrid = new Grid(4, 4);    
	    int numColumns = myGrid.getColumnCount();
	    myGrid.setBorderWidth(2);
	    int numRows = myGrid.getRowCount();
	    for (int row = 0; row < numRows; row++) {
	      for (int col = 0; col < numColumns; col++) {
	    	  myGrid.setText(row, col, "Cellule " + row + " " + col );
	        // myGrid.setWidget(row, col, new Image );
	      }
	    }
	    
	    
	    // We can add style names to widgets
	    sendButton.addStyleName("sendButton");

	    // Add the nameField and sendButton to the RootPanel
	    // Use RootPanel.get() to get the entire body element
	    RootPanel rootPanel = RootPanel.get("nameFieldContainer");
	    rootPanel.add(nameField);
	    RootPanel.get("sendButtonContainer").add(sendButton);
	    RootPanel.get("errorLabelContainer").add(errorLabel);
	    
	    // on met le widget à tester dans cette cellule du tableau HTML qui structure la page
	    // Liste des widgets testables : myListBox, myComboBox, myGrid
	    // par défaut : clickMeButton
	    RootPanel.get("newAreaForMyWidget").add(clickMeButton);
	    
	    
	    // Focus the cursor on the name field when the app loads
	    nameField.setFocus(true);
	    nameField.selectAll();

	    // Create the popup dialog box
	    final DialogBox dialogBox = new DialogBox();
	    dialogBox.setText("Remote Procedure Call");
	    dialogBox.setAnimationEnabled(true);
	    final Button closeButton = new Button("Close");
	    // We can set the id of a widget by accessing its Element
	    closeButton.getElement().setId("closeButton");
	    final Label textToServerLabel = new Label();
	    final HTML serverResponseLabel = new HTML();
	    VerticalPanel dialogVPanel = new VerticalPanel();
	    dialogVPanel.addStyleName("dialogVPanel");
	    dialogVPanel.add(new HTML("<b>Code postal envoyÃ© au serveur:</b>"));
	    dialogVPanel.add(textToServerLabel);
	    dialogVPanel.add(new HTML("<br><b>DÃ©partement retournÃ© par le serveur:</b>"));
	    dialogVPanel.add(serverResponseLabel);
	    dialogVPanel.setHorizontalAlignment(VerticalPanel.ALIGN_RIGHT);
	    dialogVPanel.add(closeButton);
	    dialogBox.setWidget(dialogVPanel);

	    // Add a handler to close the DialogBox
	    closeButton.addClickHandler(new ClickHandler() {
	      public void onClick(ClickEvent event) {
	        dialogBox.hide();
	        sendButton.setEnabled(true);
	        sendButton.setFocus(true);
	      }
	    });

	    
	 // Create a handler for clickMeButton button
	    class ClickMeClass implements ClickHandler {
	        public void onClick(ClickEvent event)
	       	{ Window.alert("Hello, GWT World!"); }
	    }
	    
	    // Create a handler for the sendButton and nameField
	    class MyHandler implements ClickHandler, KeyUpHandler {
	      /**
	       * Fired when the user clicks on the sendButton.
	       */
	      public void onClick(ClickEvent event) {
	        sendNameToServer();
	      }

	      /**
	       * Fired when the user types in the nameField.
	       */
	      public void onKeyUp(KeyUpEvent event) {
	        if (event.getNativeKeyCode() == KeyCodes.KEY_ENTER) {
	          sendNameToServer();
	        }
	      }

	      /**
	       * Send the name from the nameField to the server and wait for a response.
	       */
	      private void sendNameToServer() {
	        // First, we validate the input.
	        errorLabel.setText("");
	        
	        String codePostalString = nameField.getText();
	        /*
	        // on n'effectue plus de controle
	         * 
	        String textToServer = nameField.getText();
	        if (!FieldVerifier.isValidName(textToServer)) {
	          errorLabel.setText("Please enter at least four characters");
	          return;
	        }
	        */

	        // Then, we send the input to the server.
	        sendButton.setEnabled(false);
	        textToServerLabel.setText(codePostalString);
	        serverResponseLabel.setText("");

	        Integer codePostalInt = Integer.parseInt(codePostalString);
	        
	        /*
	         le parametre de la fonction fr.insarouen.prof.server.getVille est un Integer
	        	=> parametre 1 de  greetingService.getVille est un Integer
	          le retour de la fonction fr.insarouen.prof.server.getVille est une String
	            => parametre 2 de  greetingService.getVille est un AsyncCallback<String>
	        */
	          
	        greetingService.getDepartement(codePostalInt, new AsyncCallback<String>() {
	            public void onFailure(Throwable caught) {
	              // Show the RPC error message to the user
	              dialogBox.setText("Remote Procedure Call - Failure");
	              serverResponseLabel.addStyleName("serverResponseLabelError");
	              serverResponseLabel.setHTML(SERVER_ERROR);
	              dialogBox.center();
	              closeButton.setFocus(true);
	            }

	            public void onSuccess(String result) {
	              dialogBox.setText("Remote Procedure Call");
	              serverResponseLabel.removeStyleName("serverResponseLabelError");
	              serverResponseLabel.setHTML(result);
	              dialogBox.center();
	              closeButton.setFocus(true);
	            }        
	        
	        /* Code initialement généré par maven */
	        /*
	        greetingService.greetServer(textToServer, new AsyncCallback<String>() {
	          public void onFailure(Throwable caught) {
	            // Show the RPC error message to the user
	            dialogBox.setText("Remote Procedure Call - Failure");
	            serverResponseLabel.addStyleName("serverResponseLabelError");
	            serverResponseLabel.setHTML(SERVER_ERROR);
	            dialogBox.center();
	            closeButton.setFocus(true);
	          }

	          public void onSuccess(String result) {
	            dialogBox.setText("Remote Procedure Call");
	            serverResponseLabel.removeStyleName("serverResponseLabelError");
	            serverResponseLabel.setHTML(result);
	            dialogBox.center();
	            closeButton.setFocus(true);
	          }
	          */
	        });
	      }
	    }

	    // Add a handler to send the name to the server
	    MyHandler handler = new MyHandler();
	    ClickMeClass  myClickHandler = new ClickMeClass() ; 
	    
	    sendButton.addClickHandler(handler);
	    clickMeButton.addClickHandler(myClickHandler);
	    nameField.addKeyUpHandler(handler);
	  }
	}
