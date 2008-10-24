/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

package firstSteps;

import org.restlet.Context;
import org.restlet.data.MediaType;
import org.restlet.data.Request;
import org.restlet.data.Response;
import org.restlet.resource.Representation;
import org.restlet.resource.Resource;
import org.restlet.resource.StringRepresentation;
import org.restlet.resource.Variant;


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

   /**
    * Returns a full representation for a given variant.
    */
   
   
   @Override
   public void handleGet ( ) 
   {
      Representation representation = new StringRepresentation(
            "Accueil general" , MediaType.TEXT_PLAIN);
         getResponse().setEntity(representation);
         super.handleGet();
   }

}
