class Main {
    public static void main(String[] args) {
        System.out.println("Hola mundo");
        Car car = new Car("AMD123", new Account("Andres Herrera", "AFGEW334"));
        car.passenger = 4 ; 
        car.A();
    
        Car car2 = new Car("AMD456", new Account("Andrez Herrear", "AFGH45456"));
        car2.passenger = 3;
        car2.A();
     
    }
}