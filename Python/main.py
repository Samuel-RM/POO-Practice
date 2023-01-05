from car import Car
from account import Account

if __name__== "__main__":
    print('Hola Mundo')    
    
    car = Car("AKDA234", Account("Ana Fifueroa" ,"ASRAA"))
    print(vars(car))
    print(vars(car.driver))
    
    car2 = Car("AMD345", Account("Marta", "ANDA2131324214"))
    print(vars(car2))
    print(vars(car2.driver))