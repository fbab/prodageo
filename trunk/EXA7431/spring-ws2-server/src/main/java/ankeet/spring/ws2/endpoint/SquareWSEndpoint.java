/**
 * 
 */
package ankeet.spring.ws2.endpoint;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.ws.server.endpoint.annotation.Endpoint;
import org.springframework.ws.server.endpoint.annotation.PayloadRoot;
import org.springframework.ws.server.endpoint.annotation.RequestPayload;
import org.springframework.ws.server.endpoint.annotation.ResponsePayload;

import ankeet.spring.ws2.generated.*;
import ankeet.spring.ws2.generated.SquareServiceResponse;
import ankeet.spring.ws2.service.SquareService;


/**
 * @author Ankeet Maini
 *
 */
@Endpoint
public class SquareWSEndpoint {
	//To calculate square of the input.
	@Autowired
	private SquareService squareService;
	//This is like @RequestMapping of Spring MVC	
	@PayloadRoot(localPart="SquareServiceRequest", namespace="http://ankeetmaini.wordpress.com/spring-ws2-square")
	@ResponsePayload
	public SquareServiceResponse getSquare(@RequestPayload SquareServiceRequest request) {
		SquareServiceResponse response = new ObjectFactory().createSquareServiceResponse();
		response.setOutput(squareService.square(request.getInput()));
		return response;
	}
}
