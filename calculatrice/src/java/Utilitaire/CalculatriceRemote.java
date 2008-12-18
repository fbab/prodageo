/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

package Utilitaire;

import javax.ejb.Remote;

/**
 *
 * @author root
 */
@Remote
public interface CalculatriceRemote {

    int additionner(int a, int b);
    
}
