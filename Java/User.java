class User extends Account{
    public User( String name, String document){
        super(name, document);
    }

    void dataCar(){
        System.out.println("Document: " + document + " name: " + name);
    }

}
