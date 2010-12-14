package fr.insa.rouen.bpm.model.persistant.business.impl;

import java.io.Serializable;

import javax.persistence.Column;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.Table;

import org.hibernate.annotations.Entity;

@Entity
@Table(name="PRODUCT")
public class MyApplicationPersistantProduct implements Serializable {

	/**
	 * 
	 */
	private static final long serialVersionUID = 279869275929279578L;

	@Id
	@GeneratedValue(strategy=GenerationType.AUTO)
    @Column(name = "ID_PRODUIT")
	private Long id;
	
	@Column(name="CODE_PRODUIT")
	private String codeProduit;
	
	@Column(name="LABEL")
	private String label;
	
	@Column(name="DESCRIPTION")
	private String description;
	
	@Column(name="LIBELLE")
	private String libelle;
	
	@Column(name="PRIX")
	private Double prix;

	public Long getId() {
		return id;
	}

	public void setId(Long id) {
		this.id = id;
	}

	public String getCodeProduit() {
		return codeProduit;
	}

	public void setCodeProduit(String codeProduit) {
		this.codeProduit = codeProduit;
	}

	public String getLabel() {
		return label;
	}

	public void setLabel(String label) {
		this.label = label;
	}

	public String getDescription() {
		return description;
	}

	public void setDescription(String description) {
		this.description = description;
	}

	public String getLibelle() {
		return libelle;
	}

	public void setLibelle(String libelle) {
		this.libelle = libelle;
	}

	public Double getPrix() {
		return prix;
	}

	public void setPrix(Double prix) {
		this.prix = prix;
	}
	
	
	
}
