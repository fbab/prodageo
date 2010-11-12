package com.stupidjavatricks.books;

import java.util.Date;
import java.util.LinkedList;
import java.util.List;

import com.google.common.base.Objects;
import com.thoughtworks.xstream.annotations.XStreamAlias;

@XStreamAlias("book")
public class Book {
	
	private String isbn;
	private String title;
	private int edition;
	private int pages;
	private String published;
	private List<Author> authors;
	private Publisher publisher;
	
	public String getIsbn() {
		return isbn;
	}
	public void setIsbn(String isbn) {
		this.isbn = isbn;
	}
	public String getTitle() {
		return title;
	}
	public void setTitle(String title) {
		this.title = title;
	}
	public int getPages() {
		return pages;
	}
	public void setPages(int pages) {
		this.pages = pages;
	}
	public String getPublished() {
		return published;
	}
	public void setPublished(String published) {
		this.published = published;
	}
	public Publisher getPublisher() {
		return publisher;
	}
	public void setPublisher(Publisher publisher) {
		this.publisher = publisher;
	}
	public void setAuthors(List<Author> authors) {
		this.authors = new LinkedList<Author>(authors);
	}
	public List<Author> getAuthors() {
		return new LinkedList<Author>(authors);
	}
	public void setEdition(int edition) {
		this.edition = edition;
	}
	public int getEdition() {
		return edition;
	}
}
