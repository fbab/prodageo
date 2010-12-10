package com.webserviceapp;

import junit.framework.Assert;
import junit.framework.TestCase;

public class HelloServiceTest extends TestCase {

	protected void setUp() throws Exception {

	}

	
	public void testSayHello()
	{
		HelloService vHelloService = new HelloService();
		String vHelloStr = vHelloService.sayHello();
		Assert.assertNotNull(vHelloStr);
	}
}
