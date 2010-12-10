package fr.insa.rouen.bpm.model.process.myApplication;

/**
 * Lien entre les variables métier et les variables de process pour MyApplication
 * @author olivier
 *
 * @version 1.0
 * @since 1.0
 */
public enum EMyApplicationVariables {
	//TODO ajouter un boolean pour préciser si la variable fait partie de l'init 
	PRODUCT1("premier produit","produit1","product1"),
    PRODUCT2("deuxieme produit","produit2","product2"), 
    MAIL("mail","customer-email","email"),
    CUSTOMER_NAME("nom client","customer-name","name"),
    CUSTOMER_ADDRESS("adresse client","customer-adress","address"),
    PAIEMENT_METHOD("moyen de paiement","paiement-method","paymentMeans");
	
	/**
	 * Constructs a {@link EMyApplicationVariables} with the description, the processVariable name and the business name associated
	 * @param description
	 * @param processVariableName
	 * @param businessName
	 */
	private EMyApplicationVariables(String description, String processVariableName, String businessName) {
		this.processVariableName = processVariableName;
		this.description = description;
		this.businessName = businessName;
	}
	
	private String description;
	
	private String processVariableName;
	
	private String businessName;
	
	public String getDescription() {
		return description;
	}
	
	public String getProcessVariableName() {
		return processVariableName;
	}
	
	public String getBusinessName() {
		return businessName;
	}
	
	//TODO ajouter getProcessVariable List
}
