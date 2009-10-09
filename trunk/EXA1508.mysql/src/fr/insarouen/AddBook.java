package fr.insarouen ;

import org.hibernate.Session;
import org.hibernate.SessionFactory;
import org.hibernate.cfg.Configuration;

import fr.insarouen.Book;

public class AddBook {
  public static void main(String[] args) {

    String title = "A Book";

    SessionFactory factory =
      new Configuration().configure().buildSessionFactory();
    Session session = factory.openSession();
    session.beginTransaction();

    Book book = new Book(title);

    session.save(book);
    session.getTransaction().commit();
    session.close();
  }
}

