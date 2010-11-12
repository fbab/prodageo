package com.stupidjavatricks.books;

import com.thoughtworks.xstream.annotations.XStreamAlias;

@XStreamAlias("publisher")
public class Publisher {
	
	private String name;
	private Address address;
	
	public String getName() {
		return name;
	}
	public void setName(String name) {
		this.name = name;
	}
	public Address getAddress() {
		return address;
	}
	public void setAddress(Address address) {
		this.address = address;
	}
}
