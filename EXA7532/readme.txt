Ce tuto est issu de :
* http://static.springsource.org/spring-ws/sites/1.5/reference/html/tutorial.html
** tutoriel standard de SpringWS
* http://blog.cloudwhiz.com/search/label/Google%20App%20Engine
** l'idée original du hack
* http://manuel-palacio.blogspot.com/
** l'auteur du hack

Quelques aménagements par rapport à la version initiale
* bien entendu modifier le nom de l'appli GAE dans appengine-web.xml
** <application>prodageo</application>
* mettre l'URL absolue dans spring-ws-servlet.xml
** <property name="locationUri" value="http://prodageo.appspot.com/holidayservice/"/>

Comment générer
* mvn compile
* mvn package => génére C:\prodageo\EXA7532\target\holidayService.war
* dézipper holidayService.war dans C:\prodageo\EXA7532\target\holidayService\
* charger sur GAE avec la commande
** C:\APPS\GAE\BIN\appcfg.cmd update C:\prodageo\EXA7532\target\holidayService

* récupérer le WSDL sur l'URL
** http://prodageo.appspot.com/holidayservice/holiday.wsdl
* copier coller dans SoapUI et interroger
