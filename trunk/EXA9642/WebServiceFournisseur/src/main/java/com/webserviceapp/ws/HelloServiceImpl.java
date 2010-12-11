package com.webserviceapp.ws;

import javax.jws.WebService;
import javax.jws.WebParam;
import javax.jws.WebMethod;
import javax.jws.WebResult;

import java.util.Random;

@WebService( serviceName="HelloService" )
public class HelloServiceImpl {


	public String sayHello()
	{
		return "Hello World";
	}
	
	
}
