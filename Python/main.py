from car import Car
from account import Account

if __name__ == "__main__":
    print("Hola Mundo")
    
    car = Car("AHT234", Account("Adrian Hernandez", "ASD095"))
    print(vars(car))
    print(vars(car.driver))