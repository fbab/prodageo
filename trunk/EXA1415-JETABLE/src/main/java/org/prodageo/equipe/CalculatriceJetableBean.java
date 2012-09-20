package org.prodageo.equipe;

import java.util.logging.* ;
import javax.ejb.*; 
import java.util.Random;
import javax.annotation.PostConstruct;
import javax.annotation.PreDestroy;


@Stateless
public class CalculatriceJetableBean implements CalculatriceRemote {

    private int  z ; // memoire
    private int id ;        

    @PostConstruct
    public void initBean()
    {
        Random randomGenerator = new Random();
        id = randomGenerator.nextInt(10000);
        Logger logger = Logger.getLogger(CalculatriceJetableBean.class.getName());
        logger.log(Level.INFO, "EXA1415 - Initialisation instance : " + id ) ;
        // comment obtenir un identifiant d'une instance
        // http://openejb.apache.org/3.0/lookup-of-other-ejbs-example.html
    }

    public int getId()
    {
       return id ;
    }

    public int additionner(int x, int y)
    {
  	z = z + x + y ;
        return z ;
    }

    @PreDestroy
    public void Detruire() {
        Logger logger = Logger.getLogger(CalculatriceJetableBean.class.getName());
        logger.log(Level.INFO, "EXA1415 - destruction instance : " + id ) ;
    }

}
