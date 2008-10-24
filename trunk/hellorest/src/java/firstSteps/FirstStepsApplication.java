/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

package firstSteps;

/**
 *
 * @author fbaucher
 */

import org.restlet.Application;
import org.restlet.Context;
import org.restlet.Restlet;
import org.restlet.Router;
import org.restlet.data.Request;
import org.restlet.data.Response;

public class FirstStepsApplication extends Application {

   public FirstStepsApplication(Context parentContext) {
      super(parentContext);
   }

   /**
    * Creates a root Restlet that will receive all incoming calls.
    */
   @Override
   public synchronized Restlet createRoot() {
      // Create a router Restlet that routes each call to a
      // new instance of HelloWorldResource.

      // si je mets un handle ici, pourrais-je avoir un handle sur une ressource ?
       
      Router router = new Router(getContext());
      
      // Defines a specific route      
      router.attach("/hello/{user}", HelloKitty.class);

      // Defines the default route            
      router.attachDefault(HelloWorldResource.class);

      return router;
   }

   /*
   @Override
   public void handle (Request request, Response response)
   {
        
   }
    */
}
