package fr.insarouen ;

public class Book {
  private int id;
  private String title;

  public Book(String title) {
    this.title = title;
  }

  Book() {
  }

  public int getId() {
    return this.id;
  }

  public void setId(int id) {
    this.id = id;
  }

 public String getTitle() {
    return this.title;
  }

  public void setTitle(String title) {
    this.title = title;
  }
}

