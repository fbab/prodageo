// to execute this application, you need :
// A GAE application identifier (ie xxx) : https://xxx.appspot.com/ 
// the log : https://appengine.google.com/logs 
// the front-end for the database : https://code.google.com/apis/console

// synopsis :
// each time you call this method, a record is added in a table of the database.

package org.prodageo;

import org.prodageo.EXU9941dbWrapper;

import java.io.IOException;
import javax.servlet.http.*;

import java.io.PrintWriter;
import java.util.logging.Logger;



@SuppressWarnings("serial")
public class EXU9941sql1Servlet extends HttpServlet
{
	// initial idea available at
	// http://code.google.com/p/cloudsql/source/browse/trunk/CloudSQLSample1/src/com/chandana/test/GuestbookServlet.java
/*
	public void doGet(HttpServletRequest req, HttpServletResponse resp)
			throws IOException {
		resp.setContentType("text/plain");
		resp.getWriter().println("Chandana Napagoda");
	}

	@Override
	public void doPost(HttpServletRequest req, HttpServletResponse resp)
*/
	public void doGet(HttpServletRequest req, HttpServletResponse resp)
			throws IOException {
		final Logger log = Logger.getLogger(EXU9941sql1Servlet.class.getName());


		log.info("Entering the EXU9941sql1Servlet.doGet V1.1");
		
		EXU9941dbWrapper dbw = new EXU9941dbWrapper() ;
		int id[] = new int[10];
		String[] nom =  new String[10] ;
		String[] prenom = new String[10] ;
		int nb = 0 ;
		
		nb = dbw.select_personnage(id, nom, prenom) ;

		PrintWriter out = resp.getWriter();
		
		if (nb > 0) {
			out.println("<html><head></head><body>Success!" + nom[0] + "</body></html>");
		} else
		{
			out.println("<html><head></head><body>Failure!</body></html>");
		}
		log.info("Exit servlet");
	}

}
