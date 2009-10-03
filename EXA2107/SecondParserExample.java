
import java.io.File;
import java.io.IOException;
import java.util.ArrayList;
import java.util.Iterator;
import java.util.List;
import java.net.*;

import javax.xml.parsers.ParserConfigurationException;
import javax.xml.parsers.SAXParser;
import javax.xml.parsers.SAXParserFactory;

import org.xml.sax.Attributes;
import org.xml.sax.SAXException;

import org.xml.sax.helpers.DefaultHandler;

public class SecondParserExample extends DefaultHandler{

	List myEmpls;
	
	private String tempVal;
	
	//to maintain context
	private Employee tempEmp;
	
	
	public SecondParserExample(){
		myEmpls = new ArrayList();
	}
	
	public void runExample() {
		parseDocument();
		printData();
	}

	// quincaillerie pour gerer le cas d'un fichier local
   static String createURL(String fileName)
   {
      URL url = null;
      String path = null ;
      try 
      {
         url = new URL(fileName);
      } 
      catch (MalformedURLException ex) 
      {
         File f = new File(fileName);
         try 
         {
            path = f.getAbsolutePath();
            String fs = System.getProperty("file.separator");
            if (fs.length() == 1)
            {
               char sep = fs.charAt(0);
               if (sep != '/')
                  path = path.replace(sep, '/');
               if (path.charAt(0) != '/')
                  path = '/' + path;
            }
            path = "file://" + path;
            url = new URL(path);
         } 
         catch (MalformedURLException e) 
         {
            System.out.println("Cannot create url for: " + fileName);
            System.exit(0);
         }
      }
      // return url;
      return path ;
   }


	private void parseDocument() {
		
		//get a factory
		SAXParserFactory spf = SAXParserFactory.newInstance();
		try {
		
			//get a new instance of parser
			SAXParser sp = spf.newSAXParser();
			

			
			//parse the file and also register this class for call backs
			// OK sp.parse("file:///D:/home/fbab/googlecode/EXA2107/employees.xml", this);
			// KO sp.parse("file:///employees.xml", this);
			// KO sp.parse("file://employees.xml", this);
			sp.parse(createURL("employees.xml") , this);
			
		}catch(SAXException se) {
			se.printStackTrace();
		}catch(ParserConfigurationException pce) {
			pce.printStackTrace();
		}catch (IOException ie) {
			ie.printStackTrace();
		}
	}

	/**
	 * Iterate through the list and print
	 * the contents
	 */
	private void printData(){
		
		System.out.println("No of Employees '" + myEmpls.size() + "'.");
		
		Iterator it = myEmpls.iterator();
		while(it.hasNext()) {
			System.out.println(it.next().toString());
		}
	}
	

	//Event Handlers
	public void startElement(String uri, String localName, String qName, Attributes attributes) throws SAXException {
		//reset
		tempVal = "";
		if(qName.equalsIgnoreCase("Employee")) {
			//create a new instance of employee
			tempEmp = new Employee();
			tempEmp.setType(attributes.getValue("type"));
		}
	}
	

	public void characters(char[] ch, int start, int length) throws SAXException {
		tempVal = new String(ch,start,length);
	}
	
	public void endElement(String uri, String localName, String qName) throws SAXException {

		if(qName.equalsIgnoreCase("Employee")) {
		}else if (qName.equalsIgnoreCase("Name")) {
			myEmpls.add(tempVal);
		}else if (qName.equalsIgnoreCase("Id")) {
		}else if (qName.equalsIgnoreCase("Age")) {
		}
		
	}
	
	public static void main(String[] args){
    // System.out.println("Debut : " + PerfTime.now());
    long startTime = System.currentTimeMillis();

		SecondParserExample spe = new SecondParserExample();
		spe.runExample();
    // System.out.println("Fin : " + PerfTime.now());
    
    long stopTime = System.currentTimeMillis();
		long runTime = stopTime - startTime;
		System.out.println("Run time: " + runTime);
	
	}
	
}




