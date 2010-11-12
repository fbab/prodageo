package com.stupidjavatricks.books;

import com.google.common.base.Objects;
import com.thoughtworks.xstream.annotations.XStreamAlias;

@XStreamAlias("author")
public class Author {
	
	private String authorId;
	private String name;
	private String email;
	
	public String getName() {
		return name;
	}
	public void setName(String name) {
		this.name = name;
	}
	public String getEmail() {
		return email;
	}
	public void setEmail(String email) {
		this.email = email;
	}
	public void setAuthorId(String authorId) {
		this.authorId = authorId;
	}
	public String getAuthorId() {
		return authorId;
	}
	
	@Override
	public boolean equals(Object o) {
		if(o instanceof Author) {
			Author a = (Author)o;
			return Objects.equal(this.authorId, a.authorId) &&
				   Objects.equal(this.email, a.email) &&
				   Objects.equal(this.name, a.name);
		}
		return false;
	}
	
	@Override
	public int hashCode() {
		return Objects.hashCode(this.authorId, this.email, this.name);
	}
}
