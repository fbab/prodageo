package fr.insa.rouen.bpm.dao.impl;

import org.springframework.beans.factory.annotation.Required;
import org.springframework.orm.hibernate3.HibernateTemplate;

public class MyApplicationBusinessDaoImpl {

	private HibernateTemplate businessDaoTemplate;
	
	@Required
	public void setBusinessDaoTemplate(HibernateTemplate businessDaoTemplate) {
		this.businessDaoTemplate = businessDaoTemplate;
	}
	
}
