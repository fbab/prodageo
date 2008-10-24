/*
 * Fichier issu de l'exemple
 * http://www.restlet.org/documentation/1.0/firstSteps
 * Il a été amendé :
 * le recours aux Variant a été retiré
 * pour ne pas polluer le débat à ce stade du développement
 */

package firstSteps;

import org.restlet.Context;
import org.restlet.data.MediaType;
import org.restlet.data.Request;
import org.restlet.data.Response;
import org.restlet.resource.Representation;
import org.restlet.resource.Resource;
import org.restlet.resource.StringRepresentation;
// import org.restlet.resource.Variant;

/**
 *
 * @author fbaucher
 */

/**
 * Resource which has only one representation.
 *
 */
public class HelloWorldResource extends Resource {

   public HelloWorldResource(Context context, Request request,
         Response response) {
      super(context, request, response);
   }

   
   @Override
   public void handleGet ( ) 
   {
      Representation representation = new StringRepresentation(
            "Accueil general" , MediaType.TEXT_PLAIN);
         getResponse().setEntity(representation);
         super.handleGet();
   }

}
