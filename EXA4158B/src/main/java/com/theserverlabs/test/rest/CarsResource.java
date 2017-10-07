package com.theserverlabs.test.rest;


import com.theserverlabs.test.db.CarDb;
import com.theserverlabs.namespaces.cars.Car;
import com.theserverlabs.namespaces.cars.Cars;
import java.net.URI;
import javax.ws.rs.Consumes;
import javax.ws.rs.GET;
import javax.ws.rs.POST;
import javax.ws.rs.Path;
import javax.ws.rs.PathParam;
import javax.ws.rs.Produces;
import javax.ws.rs.core.Context;
import javax.ws.rs.core.Response;
import javax.ws.rs.core.UriInfo;
import javax.xml.bind.JAXBElement;

// CarsResource is a root resource
// For more information on root resources, cf http://prodageo.insa-rouen.fr/wiki/pmwiki.php?n=CASI.EXA4158rootsub
@Path("cars")
public class CarsResource {

    @Context private UriInfo uriInfo;

    /**
     * Get a list of the cars registered in the system.
     *
     * @return a list of Cars
     */
	@GET
    @Produces({"application/xml","application/json"})
    public Cars getAll() {
        Cars cars = new Cars();
        cars.getCars().addAll(CarDb.getInstance().getCars());
    	return cars;
    }

    /**
     * Create a new Car in the system. This is a POST request since it is not
     * idempotent. We return the URL to the car that was created.
     *
     * @param car the car to create
     * @return a response that contains the URL of the car created. 
     */
    @POST
    @Consumes({"application/xml","application/json"})
    public Response createNewCar(JAXBElement<Car> car) {
        CarDb.getInstance().addCar(car.getValue());
        URI carUri = uriInfo.getAbsolutePathBuilder().
                path(car.getValue().getId().toString()).
                build();
        return Response.created(carUri).build();
    }


    /**
     * Do something with a car that exists in the system. We expect the ID
     * to be supplied on the path. Delegate processing to the CarResource object.
     * 
     * @param carid the ID of the Car
     * @return a CarResource object that processes the request
     */
    @Path("{carid}/")
    public CarResource getCar(@PathParam("carid") String carid) {
        System.out.println("getting here");
        return new CarResource(carid);
    }
}
