package org.prodageo.prof.orm;

import org.prodageo.prof.orm.Shoe ;
import com.j256.ormlite.field.DatabaseField;
import com.j256.ormlite.table.DatabaseTable;
import com.j256.ormlite.field.ForeignCollectionField;
import java.util.*; // ArrayList
 
@DatabaseTable(tableName = "shops")
public class Shop {

    @DatabaseField(generatedId = true)
    private int id;
    
    @DatabaseField
    private String shopname;
    
	@ForeignCollectionField(eager = false)
	Collection<User> fans ; // fan is a user which has this shop as preferred
	

	public int getId() { return this.id; }
	
	public void setShopname ( String shopname ) { this.shopname = shopname; }

	public String getShopname() { return this.shopname; }

	public void addFan(User fan)
	{
		fans.add ( fan ) ;
	}

	// public Collection<User> getFans() { return this.fans; }
	
}