/**
 * 
 */
package ankeet.spring.ws2.controller;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.ws.client.core.WebServiceTemplate;

import com.wordpress.ankeetmaini.spring_ws2_square.ObjectFactory;
import com.wordpress.ankeetmaini.spring_ws2_square.SquareServiceRequest;
import com.wordpress.ankeetmaini.spring_ws2_square.SquareServiceResponse;

/**
 * @author Ankeet Maini
 *
 */
@Controller
@RequestMapping("/")
public class ClientController {
	@Autowired
	private WebServiceTemplate webServiceTemplate;
	
	/**
	 * This is the default handler. When application goes live
	 * the control comes to this, and it fires a JSP,
	 * asking the input.
	 */
	@RequestMapping(method = RequestMethod.GET)
	public String getRequest(Model model) {
		model.addAttribute("squareServiceRequest", new ObjectFactory().createSquareServiceRequest());
		//Show request.jsp
		return "request";
	}
	
	/**
	 * This is the handler, which takes in the input number, and calculates 
	 * the square by taking it from the webservice, via WebServiceTemplate, and then finally 
	 * sets as a ModelAttribute, which in turn is shown by "response.jsp"
	 */
	@RequestMapping(method = RequestMethod.POST)
	public String showResponse(@ModelAttribute SquareServiceRequest squareServiceRequest, Model model) {
		//Creating the SquareServiceResponse object.
		SquareServiceResponse squareServiceResponse = new ObjectFactory().createSquareServiceResponse();
		//Sending the request object via WebServiceTemplate and getting back the response from WebService :)
		squareServiceResponse = (SquareServiceResponse) webServiceTemplate.marshalSendAndReceive(squareServiceRequest);
		//This was supposed to be a hard part. Piece of cake :)
		model.addAttribute("squareServiceResponse", squareServiceResponse);
		//Show response.jsp
		return "response";
	}

}
