package org.prodageo.prof.orm;


import com.j256.ormlite.field.DatabaseField;
import com.j256.ormlite.table.DatabaseTable;

 
@DatabaseTable(tableName = "users")
public class User {
    
    @DatabaseField(generatedId = true)
    private int id;
    
    @DatabaseField
    private String username;
    
    @DatabaseField
    private String email;
    
    public User() {
        // ORMLite needs a no-arg constructor 
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
    
    public String getEmail() {
        return email;
    }
    
    public void setEmail(String email) {
        this.email = email;
    }
}