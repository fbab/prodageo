package fr.insarouen;

import java.util.Iterator;
import java.util.List;

import org.hibernate.Session;
import org.hibernate.SessionFactory;
import org.hibernate.cfg.Configuration;

import fr.insarouen.Book;

public class ListBooks {
  public static void main(String[] args)
  {
    SessionFactory factory =
      new Configuration().configure().buildSessionFactory();
    Session session = factory.openSession();

    List books = session.createQuery("from Book").list();
    System.out.println("Found " + books.size() + " books(s):");

    Iterator i = books.iterator();
    while(i.hasNext()) {
      Book book = (Book)i.next();
      System.out.println(book.getTitle());
    }

    session.close();
  }
}

