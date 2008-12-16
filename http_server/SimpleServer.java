// inspiré de Joonbok Lee - KAIST
// perleybrook.umfk.maine.edu/slides/spring 202004/cos420/

import java.io.*; 
import java.net.*;
import java.util.*; 
class SimpleServer{ 

    public static void main(String argv[]) throws Exception
    {
          String requestMessageLine;      String fileName; 
          ServerSocket listenSocket = new ServerSocket(6789);
	  Socket connectionSocket = listenSocket.accept(); 

          BufferedReader inFromClient = new BufferedReader(new InputStreamReader(connectionSocket.getInputStream()));
	  DataOutputStream outToClient = new DataOutputStream(connectionSocket.getOutputStream()); 
       
	requestMessageLine = inFromClient.readLine(); 
          
	StringTokenizer tokenizedLine = new StringTokenizer(requestMessageLine); 
     
	if (tokenizedLine.nextToken().equals("GET"))
	{ 
          fileName = tokenizedLine.nextToken(); 
          if (fileName.startsWith("/") == true ) {
	  fileName  = fileName.substring(1); 
          
		File file = new File(fileName);
		int numOfBytes = (int) file.length(); 
		FileInputStream inFile  = new FileInputStream (fileName); 
		byte[] fileInBytes = new byte[numOfBytes];
		inFile.read(fileInBytes); 
		outToClient.writeBytes("HTTP/1.0 200 Document Follows\r\n");
		if (fileName.endsWith(".jpg")) outToClient.writeBytes("Content-Type: image/jpeg\r\n");
		if (fileName.endsWith(".gif")) outToClient.writeBytes("Content-Type: image/gif\r\n");
          
	outToClient.writeBytes("Content-Length: " + numOfBytes + "\r\n");
	outToClient.writeBytes("\r\n"); 
	outToClient.write(fileInBytes, 0, numOfBytes); 
	connectionSocket.close(); 
   } 
    else System.out.println("Bad Request Message");
  } 
} 
