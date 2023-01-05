public class targeta extends Payments{
    Integer cvv;
    Integer numberCArd;
    Integer dateCard;

    public targeta(Integer id,Integer cvv, Integer numberCArd, Integer dateCard) {
        super(id);
        this.cvv = cvv;
        this.dateCard = dateCard;
        this.numberCArd = numberCArd;
    }
}
