package com.stupidjavatricks.restexample;

import java.io.BufferedReader;
import java.io.File;
import java.io.FileNotFoundException;
import java.io.FileReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.net.MalformedURLException;
import java.net.URL;
import java.util.List;
import java.util.Map;

import org.springframework.oxm.xstream.XStreamMarshaller;
import org.springframework.stereotype.Service;

import com.google.common.collect.ArrayListMultimap;
import com.google.common.collect.Lists;
import com.google.common.collect.Maps;
import com.stupidjavatricks.books.Address;
import com.stupidjavatricks.books.Author;
import com.stupidjavatricks.books.Book;
import com.stupidjavatricks.books.Publisher;
import com.thoughtworks.xstream.XStream;


@Service
public class MockBookServiceImpl implements BookService {

	private static Map<String,Book> bookMap = Maps.newHashMap();
	private static ArrayListMultimap<String,Book> authorIdToBook = ArrayListMultimap.create();
	private static Map<String, Author> authorMap = Maps.newHashMap();
	private static String fakeData = "<books><book><isbn>0596009208</isbn><title>Head First Java</title><edition>2</edition><pages>688</pages><published>May 11, 2009</published><authors><author><authorId>1</authorId><name>Kathy Sierra</name><email>ksierra@somedomain.com</email></author><author><authorId>2</authorId><name>Bert Bates</name><email>bbates@somedomain.com</email></author></authors><publisher><name>O'Reilly Media</name><address><address>1005 Gravenstein Highway North</address><city>Sebastopol</city><state>CA</state><zip>95472</zip></address></publisher></book><book><isbn>0321349601</isbn><title>Java Concurrency in Practice</title><edition>1</edition><pages>384</pages><published>May 19, 2006</published><authors><author><authorId>3</authorId><name>Brian Goetz</name><email>bgoetz@anotherdomain.com</email></author><author><authorId>4</authorId><name>Joshua Bloch</name><email>jbloch@anotherdomain.com</email></author></authors><publisher><name>Addison-Wesley Professional</name><address><address>1234 Main St</address><city>Boston</city><state>MA</state><zip>02103</zip></address></publisher></book><book><isbn>0321356683</isbn><title>Effective Java</title><edition>2</edition><pages>384</pages><published>May 28, 2008</published><authors><author><authorId>4</authorId><name>Joshua Bloch</name><email>jbloch@anotherdomain.com</email></author></authors><publisher><name>Prentice Hall PTR</name><address><address>P.O. Box 2500</address><city>Lebanon</city><state>IN</state><zip>46052</zip></address></publisher></book></books>";

	static {
		XStream xs = new XStream();
		xs.processAnnotations(Book.class);
		xs.processAnnotations(Author.class);
		xs.processAnnotations(Publisher.class);
		xs.processAnnotations(Address.class);
		xs.alias("books", List.class);
		
		List<Book> books = (List<Book>)xs.fromXML(fakeData);
		
		for(Book book : books) {
			bookMap.put(book.getIsbn(), book);
			for(Author a : book.getAuthors()) {
				authorIdToBook.put(a.getAuthorId(), book);
				authorMap.put(a.getAuthorId(), a);
			}
		}
	}
	
	@Override
	public Book getBookByIsbn(String isbn) {
		return bookMap.get(isbn);
	}

	@Override
	public List<Book> getBooksByAuthor(String authorId) {
		return Lists.newArrayList(authorIdToBook.get(authorId));
	}

	@Override
	public List<Author> getAllAuthors() {
		return Lists.newArrayList(authorMap.values());
	}

	@Override
	public List<Book> getAllBooks() {
		return Lists.newArrayList(bookMap.values());
	}

	@Override
	public Author getAuthorById(String authorId) {
		return authorMap.get(authorId);
	}
}
