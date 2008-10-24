/*
 * Ce fichier est nouveau par rapport a l'exemple
 * http://www.restlet.org/documentation/1.0/firstSteps
 * Il s'agit d'une nouvelle ressource qui est derrière les
 * URL du type : http://localhost/hellorest/hello/{kitty}
 * La représentation renvoyée sera Hello {kitty}
 */

package firstSteps;

/**
 *
 * @author fbaucher
 */

import org.restlet.Context;
import org.restlet.data.MediaType;
import org.restlet.data.Request;
import org.restlet.data.Response;
import org.restlet.resource.Representation;
import org.restlet.resource.Resource;
import org.restlet.resource.StringRepresentation;




public class HelloKitty extends Resource {


/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 *
 * @author fbaucher
 */

/**
 * Resource which has only one representation.
 *
 */

   public HelloKitty(Context context, Request request,
         Response response) {
      super(context, request, response);
   }


   @Override
   public void handleGet ( ) 
   {
      String part = getRequest().getResourceRef().getLastSegment() ;
      Representation representation = new StringRepresentation(
            "Bonjour " + part , MediaType.TEXT_PLAIN);
         getResponse().setEntity(representation);
         super.handleGet();
   }

}
