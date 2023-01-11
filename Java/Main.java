class Main {
    public static void main(String[] args) {
        System.out.println("Hola mundo");
        UberX UberX = new UberX("AMD123", new Account("Andres Herrera", "AFGEW334"), "Chevrolet", "Sony");
        UberX.setPassenger(4); 
        UberX.A();
    
        // Car car2 = new Car("AMD456", new Account("Andrez Herrear", "AFGH45456"));
        // car2.passenger = 3;
        // car2.A();

        UberVan UberVan = new  UberVan("AMD456", new Account("Jose", "QIOP44"));
        UberVan.setPassenger(6);
        UberVan.A();
     
    }
} 