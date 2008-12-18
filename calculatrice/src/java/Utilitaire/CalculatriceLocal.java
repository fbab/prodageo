/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

package Utilitaire;

import javax.ejb.Local;

/**
 *
 * @author root
 */
@Local
public interface CalculatriceLocal {

    int additionner(int a, int b);
    
}
