package org.apache.jsp.WEB_002dINF.views;

import javax.servlet.*;
import javax.servlet.http.*;
import javax.servlet.jsp.*;

public final class home_jsp extends org.apache.jasper.runtime.HttpJspBase
    implements org.apache.jasper.runtime.JspSourceDependent {

  private static final JspFactory _jspxFactory = JspFactory.getDefaultFactory();

  private static java.util.List<String> _jspx_dependants;

  private org.glassfish.jsp.api.ResourceInjector _jspx_resourceInjector;

  public java.util.List<String> getDependants() {
    return _jspx_dependants;
  }

  public void _jspService(HttpServletRequest request, HttpServletResponse response)
        throws java.io.IOException, ServletException {

    PageContext pageContext = null;
    ServletContext application = null;
    ServletConfig config = null;
    JspWriter out = null;
    Object page = this;
    JspWriter _jspx_out = null;
    PageContext _jspx_page_context = null;

    try {
      response.setContentType("text/html");
      pageContext = _jspxFactory.getPageContext(this, request, response,
      			null, false, 8192, true);
      _jspx_page_context = pageContext;
      application = pageContext.getServletContext();
      config = pageContext.getServletConfig();
      out = pageContext.getOut();
      _jspx_out = out;
      _jspx_resourceInjector = (org.glassfish.jsp.api.ResourceInjector) application.getAttribute("com.sun.appserv.jsp.resource.injector");

      out.write("\n");
      out.write("\n");
      out.write("<html>\n");
      out.write("<head>\n");
      out.write("\t<title>Home</title>\n");
      out.write("\t<style>\n");
      out.write("\t.box { \n");
      out.write("\tfont-family:arial;\n");
      out.write("    margin-left:auto;\n");
      out.write("    margin-right:auto;\n");
      out.write("    margin-top:80px;\n");
      out.write("    border: 1px solid #ddd; \n");
      out.write("    padding: 30px 40px 20px 40px; \n");
      out.write("    width: 715px;\n");
      out.write("    background: #fff;\n");
      out.write("    \n");
      out.write("    -webkit-border-radius: 10px;\n");
      out.write("\t-moz-border-radius: 10px;\n");
      out.write("\tborder-radius: 10px;\n");
      out.write("\t\n");
      out.write("\t-webkit-box-shadow: 0px 0 50px #ccc;\n");
      out.write("\t-moz-box-shadow: 0px 0 50px #ccc;\n");
      out.write("\tbox-shadow: 0px 0 50px #ccc;\n");
      out.write("\t}\n");
      out.write("\t\n");
      out.write("\t</style>\n");
      out.write("</head>\n");
      out.write("<body>\n");
      out.write("<div class=\"box\">\n");
      out.write("  <h1>Hello Spring World!</h1>\n");
      out.write("   The time on the server is ");
      out.write((java.lang.String) org.apache.jasper.runtime.PageContextImpl.evaluateExpression("${serverTime}", java.lang.String.class, (PageContext)_jspx_page_context, null));
      out.write(".\n");
      out.write("   <h2>Wishing you a very Good ");
      out.write((java.lang.String) org.apache.jasper.runtime.PageContextImpl.evaluateExpression("${serverGreeting}", java.lang.String.class, (PageContext)_jspx_page_context, null));
      out.write(" !</h2>\n");
      out.write("</div>\n");
      out.write("</body>\n");
      out.write("</html>\n");
    } catch (Throwable t) {
      if (!(t instanceof SkipPageException)){
        out = _jspx_out;
        if (out != null && out.getBufferSize() != 0)
          out.clearBuffer();
        if (_jspx_page_context != null) _jspx_page_context.handlePageException(t);
        else throw new ServletException(t);
      }
    } finally {
      _jspxFactory.releasePageContext(_jspx_page_context);
    }
  }
}
