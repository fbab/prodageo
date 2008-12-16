/*
 * ThreadServer.java
 * Inspiré de Seshadri Prasanna
 * http://www.prasannatech.net/search/label/Socket Programming 
*/

import java.io.*;
import java.net.*;
import java.util.*;

public class ThreadServer extends Thread {
	
	static final String HTML_START = 
			"<html>" +
			"<title>HTTP POST Server in java</title>" +
			"<body>";
			
    static final String HTML_END = 	
			"</body>" +
			"</html>";
			
	Socket connectedClient = null;	
	BufferedReader inFromClient = null;
	DataOutputStream outToClient = null;
	
			
	public ThreadServer(Socket client) {
		connectedClient = client;
	}			
			
	public void run() {
		
	  String currentLine = null, postBoundary = null, contentength = null, filename = null, contentLength = null;
	  PrintWriter fout = null;
		
	  try {
            
        inFromClient = new BufferedReader(new InputStreamReader (connectedClient.getInputStream()));                  
        outToClient = new DataOutputStream(connectedClient.getOutputStream());
        
	currentLine = inFromClient.readLine();
        String headerLine = currentLine;            	
	String httpMethod = "" ; 
	String httpQueryString = "" ;
        if ( headerLine != null ) 
	{
		StringTokenizer tokenizer = new StringTokenizer(headerLine);
		httpMethod = tokenizer.nextToken();
		httpQueryString = tokenizer.nextToken();
		System.out.println(currentLine);
        }
        	System.out.println("GET request");    	
   				  // The default home page
   				  String responseString = ThreadServer.HTML_START + 
  				  ThreadServer.HTML_END;
				  sendResponse(200, responseString , false);				  			  
	  } catch (Exception e) {
			e.printStackTrace();
	  }	
	}
	
	public void sendResponse (int statusCode, String responseString, boolean isFile) throws Exception
	{
		
		String statusLine = null;
		String serverdetails = "Server: Java HTTPServer";
		String contentLengthLine = null;
		String fileName = null;		
		String contentTypeLine = "Content-Type: text/html" + "\r\n";
		
		if (statusCode == 200)
			statusLine = "HTTP/1.1 200 OK" + "\r\n";
		else
			statusLine = "HTTP/1.1 404 Not Found" + "\r\n";	
			
		outToClient.writeBytes(statusLine);
		outToClient.writeBytes(serverdetails);
		outToClient.writeBytes(contentTypeLine);
		outToClient.writeBytes(contentLengthLine);
		outToClient.writeBytes("Connection: close\r\n");
		outToClient.writeBytes("\r\n");		
		outToClient.close();
	}
	
	public static void main (String args[]) throws Exception
	{
		
		ServerSocket Server = new ServerSocket (5000, 10, InetAddress.getByName("127.0.0.1"));         
		System.out.println ("HTTP Server Waiting for client on port 5000");
								
		while(true)
		{	                	   	      	
			Socket connected = Server.accept();
	            (new ThreadServer(connected)).start();
        	}      
	}
}
