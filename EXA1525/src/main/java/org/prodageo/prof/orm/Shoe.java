package org.prodageo.prof.orm;

import org.prodageo.prof.orm.User ;

import com.j256.ormlite.field.DatabaseField;
import com.j256.ormlite.table.DatabaseTable;

 
@DatabaseTable(tableName = "shoes")
public class Shoe {
    
    @DatabaseField(generatedId = true)
    private int id;
    
    @DatabaseField
    private String modelname;
    
    @DatabaseField
    private int size;

    @DatabaseField (canBeNull = false, foreign = true)
    private User user ;
    
    public Shoe() {
        // ORMLite needs a no-arg constructor 
    }
    
    public int getId() {
        return this.id;
    }
    
    public String getModelName() {    
        return this.modelname;
    }
    
    public void setModelName(String modelname) {
        this.modelname = modelname;
    }
    
    public int getSize() {
        return size;
    }
    
    public void setSize(int size) {
        this.size = size;
    }
	
    public User getUser() {
        return user;
    }
    
    public void setUser(User user) {
        this.user = user;
		
		// if the addShoe is not done, any shoe added will not appear (in User.listShoes for instance) until reloaded from database !
		user.addShoe ( this ) ;
    }
}