package com.webserviceapp.ws;

/**
 * @author Hyacinthe MENIET
 * Created on 21 juil. 07
 */

import javax.xml.bind.annotation.XmlElement;

/**
 * Contains the data relating to a Department
 */
public class Department {
	
	/**
	 * Department's code.
	 */
	private int code;
	/**
	 * Department's population number.
	 */
	private int population;
	/**
	 * Department's surface in km2.
	 */
	private float surface;
	/**
	 * A comment on the urbanization's level.
	 */
	private String urbanization;
	/**
	 * @return the code
	 */
	@XmlElement(name="code")
	public int getCode() {
		return code;
	}
	/**
	 * @param code the code to set
	 */
	public void setCode(int code) {
		this.code = code;
	}
	/**
	 * @return the population
	 */
	@XmlElement(name="population")
	public int getPopulation() {
		return population;
	}
	/**
	 * @param population the population to set
	 */
	public void setPopulation(int population) {
		this.population = population;
	}
	/**
	 * @return the surface
	 */
	@XmlElement(name="surface")
	public float getSurface() {
		return surface;
	}
	/**
	 * @param surface the surface to set
	 */
	public void setSurface(float surface) {
		this.surface = surface;
	}
	/**
	 * @return the urbanization
	 */
	@XmlElement(name="urbanization")
	public String getUrbanization() {
		return urbanization;
	}
	/**
	 * @param urbanization the urbanization to set
	 */
	public void setUrbanization(String urbanization) {
		this.urbanization = urbanization;
	}
}