package org.prodageo.prof.orm;

import org.prodageo.prof.orm.Shoe ;
import com.j256.ormlite.field.DatabaseField;
import com.j256.ormlite.table.DatabaseTable;
import com.j256.ormlite.field.ForeignCollectionField;
import java.util.*; // ArrayList
 
@DatabaseTable(tableName = "users")
public class User {
    
    @DatabaseField(generatedId = true)
    private int id;
    
    @DatabaseField
    private String username;
    
    @DatabaseField
    private String email;
	
	@ForeignCollectionField(eager = false)
	/* si j'utilise ForeignCollection<Shoe>, le code metier -ie User.java dépend du framework 
	   => je préfére Collection<T> */
	/* pourquoi accepte-t-on les annotations ? car elles peuvent être retirées du code si on le décide */
	Collection<Shoe> shoes ;

	// @ForeignCollectionField(eager = false) : DO NOT WORK : many-to-many is not implemented in ormlite
	@DatabaseField (canBeNull = false, foreign = true)
        private Shop preferredShop ;
    
	// Constraints : ORMLite needs a no-arg constructor !!!
    public User() {
		// initialiaze the collection
		shoes = new ArrayList<Shoe>() ;
		// it is not the job of the constructor to populate the fields and namely the collections.
		// it is up to the "factory" (the piece of code that calls that construct) to do so.
		
    }
    
    public int getId() {
        return this.id;
    }
    
    public String getUsername() {    
        return this.username;
    }
    
    public void setUsername(String username) {
        this.username = username;
    }
	
    public Shop getPreferredShop() {    
        return this.preferredShop;
    }
    
    public void setPreferredShop(Shop preferredShop) {
        this.preferredShop = preferredShop;
    }
    
    public String getEmail() {
        return email;
    }
    
    public void setEmail(String email) {
        this.email = email;
    }
	
	public void addShoe(Shoe shoe) {
		// TO BE DONE : check that the user associated to this is this !
		
		// this operation has no effect on the database since the id is stored on the shoes table side !
        shoes.add ( shoe ) ;
    }
	
	public String listShoes() {
		String namesList = "" ;
		
		// TO BE DONE : comment s'assurer que cette liste est synchro avec la base au moment de la generation de namesList ?
		
		for ( Shoe aShoe : shoes )
		{ namesList = namesList + "," + aShoe.getModelName() ; }
		return namesList ;
	}

	
}
