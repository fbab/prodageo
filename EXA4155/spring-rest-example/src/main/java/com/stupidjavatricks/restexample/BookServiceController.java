package com.stupidjavatricks.restexample;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.validation.BindingResult;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.servlet.ModelAndView;

import com.stupidjavatricks.books.Author;
import com.stupidjavatricks.books.Book;

@Controller
public class BookServiceController {
 
	@Autowired
	BookService bookService;
 
	@RequestMapping(value = "/books/")
	public ModelAndView getAllBooks() {
		List<Book> books = bookService.getAllBooks();
		ModelAndView mav = 
			new ModelAndView("bookXmlView", BindingResult.MODEL_KEY_PREFIX + "books", books);
		return mav;
	}
 
	@RequestMapping(value = "/books/{isbn}")
	public ModelAndView getBookByIsbn(@PathVariable String isbn) {
		Book book = bookService.getBookByIsbn(isbn);
		ModelAndView mav = 
			new ModelAndView("bookXmlView", BindingResult.MODEL_KEY_PREFIX + "book", book);
		return mav;
	}
 
	@RequestMapping(value = "/authors/")
	public ModelAndView getAllAuthors() {
		List<Author> authors = bookService.getAllAuthors();
		ModelAndView mav = 
			new ModelAndView("bookXmlView", BindingResult.MODEL_KEY_PREFIX + "authors", authors);
		return mav;
	}
 
	@RequestMapping(value = "/authors/{authorId}")
	public ModelAndView getAuthorById(@PathVariable String authorId) {
		Author author = bookService.getAuthorById(authorId);
		ModelAndView mav = 
			new ModelAndView("bookXmlView", BindingResult.MODEL_KEY_PREFIX + "author", author);
		return mav;
	}
 
	@RequestMapping(value = "/authors/{authorId}/books")
	public ModelAndView getBooksByAuthor(@PathVariable String authorId) {
		List<Book> books = bookService.getBooksByAuthor(authorId);
		ModelAndView mav = 
			new ModelAndView("bookXmlView", BindingResult.MODEL_KEY_PREFIX + "books", books);
		return mav;
	}
}