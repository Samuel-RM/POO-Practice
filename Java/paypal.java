public class paypal extends Payments{
    String email;

    public paypal(Integer id, String email){
        super(id);
        this.email = email;
    }
}
