package com.theserverlabs.test;

import junit.framework.Test;
import junit.framework.TestCase;
import junit.framework.TestSuite;
import org.codehaus.jettison.json.JSONArray;
import org.codehaus.jettison.json.JSONObject;
import com.sun.jersey.api.client.Client;
import com.sun.jersey.api.client.WebResource;
import com.sun.jersey.api.client.config.ClientConfig;
import com.sun.jersey.api.client.config.DefaultClientConfig;

/**
 * Unit test for simple App.
 */
public class AppTest 
    extends TestCase
{
    /**
     * Create the test case
     *
     * @param testName name of the test case
     */
    public AppTest( String testName )
    {
        super( testName );
    }

    /**
     * @return the suite of tests being tested
     */
    public static Test suite()
    {
        return new TestSuite( AppTest.class );
    }

    /**
     * Rigourous Test :-)
     */
    public void testApp() throws Exception 
    {
            String UrlBase = "http://localhost:9080/test/";

            ClientConfig cc = new DefaultClientConfig();
            Client c = Client.create(cc);

            WebResource wr = c.resource(UrlBase);

            // get the initial representation

            System.out.println("Getting list of cars:");
            String users = wr.path("cars/").accept("application/json").get(String.class);
            System.out.println(String.format("List of cars found:\n%s", users.toString()));
            System.out.println("-----");

            // add a new user

            System.out.println("Creating test car:");
            JSONObject user = new JSONObject();
            user.put("make", "test").put("model", "blah").put("price", "20000");
            wr.path("users/30").type("application/json").put(user);
            System.out.println("-----");
    }
}
