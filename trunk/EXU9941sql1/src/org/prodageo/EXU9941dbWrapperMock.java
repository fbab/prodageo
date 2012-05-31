package org.prodageo;

public class EXU9941dbWrapperMock {

    public int inserer_personnage (String nom , String prenom )
    {
    	return 0 ;
    }
    
    public int select_personnage (int[] id, String[] nom , String[] prenom )    
    {
		int i = 0 ;
    	if ( id[0] == 0 )
    	{
    		// return all the records
    		i = 0 ;
	    	id[i] = 1 ;
		    nom[i] = "Mickey" ;
		    prenom[i] = "Mouse" ;
		    
		    i = i + 1 ;
	    	id[i] = 2 ;
		    nom[i] = "Bugs" ;
		    prenom[i] = "Bunny" ;
		    
		    return 2 ;
    	}
    	else if ( id[0] == 1 )
    	{
    		// return one record
    		i = 0 ;
	    	id[i] = 1 ;
		    nom[i] = "Mickey" ;
		    prenom[i] = "Mouse" ;
		    return 1 ;		    
    	}
    	else
    	{
		    i = i + 1 ;
	    	id[i] = 2 ;
		    nom[i] = "Bugs" ;
		    prenom[i] = "Bunny" ;
		    return 1 ;		    
    	}
	}
}
