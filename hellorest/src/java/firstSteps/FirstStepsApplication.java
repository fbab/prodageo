/*
 * Fichier issu de l'exemple
 * http://www.restlet.org/documentation/1.0/firstSteps
 * Assure le routage de la requete vers la ressource
 * associé à l'URL
 * Dans ce fork de l'exemple a été ajouté une ressource (HelloKitty)
 * chargée de saluer le nom qui sera sur l'URL derrière Hello
 * http://localhost/hellorest/hello/{kitty}
 * Toutes les autres URL sont routées
 * vers la ressource HelloWorldResource
 * (route par défaut)
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

}
