// inspiré de Suresh Srinivas
// http://www.geocities.com/advanced_java/AJavaC8.ppt.

import java.io.*;
import java.net.*;
import java.nio.*;
import java.nio.channels.*;
import java.util.*;

public class NioServer {
   private static int port = 9999;
   public static void main(String args[]) 
     throws Exception {
     Selector selector = Selector.open();

     NioServerSocketChannel channel = 
       NioServerSocketChannel.open();
     channel.configureBlocking(false);
     InetSocketAddress isa = new InetSocketAddress(port);
     channel.socket().bind(isa);

     // Register interest in when connection
     channel.register(selector, SelectionKey.OP_ACCEPT);

     // Wait for something of interest to happen
     while (selector.select() > 0) {
       // Get set of ready objects
       Set readyKeys = selector.selectedKeys();
       Iterator readyItor = readyKeys.iterator();

       // Walk through set
       while (readyItor.hasNext()) {

         // Get key from set
         SelectionKey key = 
           (SelectionKey)readyItor.next();

         // Remove current entry
         readyItor.remove();

         if (key.isAcceptable()) {
           // Get channel
           NioServerSocketChannel keyChannel =
             (NioServerSocketChannel)key.channel();

           // Get NioServer socket
           NioServerSocket NioServerSocket = keyChannel.socket();

           // Accept request
           Socket socket = NioServerSocket.accept();

           // Return canned message
           PrintWriter out = new PrintWriter
             (socket.getOutputStream(), true);
           out.println("HTTP/1.x 200 OK");
	   out.println("Hello, NIO");
           out.close();
         } else {
           System.err.println("Ooops");
         }

       }
     }
     // Never ends
   }
}
