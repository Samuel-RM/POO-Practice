public class Driver extends Account{
    public Driver(String name, String document){
        super(name, document);
    }

    void dataCar(){
        System.out.println("Document: " + document + " name: " + name);
    }
    
}
