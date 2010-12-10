package com.webserviceapp.ws;

import javax.jws.WebService;

@WebService( serviceName="HelloService")
public class HelloServiceImpl {

	public String sayHello()
	{
		return "Hello World";
	}
}
