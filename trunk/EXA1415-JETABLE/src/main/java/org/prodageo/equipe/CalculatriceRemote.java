package org.prodageo.equipe ;

import javax.ejb.*;

@Remote
public interface CalculatriceRemote
{
        public int additionner(int x, int y);
        public int getId();
}
