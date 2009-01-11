public class HelloStruts {

    public static final String MESSAGE = "Struts is up and running ...";

    public String execute() throws Exception {
        setMessage(MESSAGE);
        return "success";
    }

    private String message;

    public void setMessage(String message){
        this.message = message;
    }

    public String getMessage() {
        return message;
    }
}