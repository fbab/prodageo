package fr.insarouen.prof.server;

import fr.insarouen.prof.server.DbFacade;

public class Departement {

	String nom ;
	Integer codePostal ;
	
	public Departement(Integer codePostal) {
		// super();
		DbFacade db = new DbFacade() ;
		this.codePostal = codePostal;
		this.nom = db.retrieve_dept_by_code ( codePostal ) ;
	}
	public String getNom() {
		return nom;
	}
	public Integer getCodePostal() {
		return codePostal;
	}
	public void setCodePostal(Integer codePostal) {
		this.codePostal = codePostal;
	}
	
	public void setNom(String nom) {
		this.nom = nom;
	}
	
}
