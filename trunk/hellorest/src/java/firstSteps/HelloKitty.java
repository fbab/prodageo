/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
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
import org.restlet.resource.Variant;



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
