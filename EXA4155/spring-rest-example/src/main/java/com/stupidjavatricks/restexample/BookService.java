package com.stupidjavatricks.restexample;

import java.util.List;

import com.stupidjavatricks.books.Author;
import com.stupidjavatricks.books.Book;

public interface BookService {
	public Book getBookByIsbn(String isbn);
	public List<Book> getBooksByAuthor(String authorId);
	public List<Book> getAllBooks();
	public List<Author> getAllAuthors();
	public Author getAuthorById(String authorId);
}
