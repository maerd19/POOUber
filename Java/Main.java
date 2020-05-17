public class Main {
    public static void main(String[] args) {
        System.out.println("Hola Mundo");
        Car car = new Car("FAA123", new Account("Faustina Angeles", "INE"));
        car.passenger = 4;
        car.printDataCar();

        Car car2 = new Car("RHA123", new Account("Rafael Hernandez", "INE"));
        car2.passenger = 3;
        car2.printDataCar();
    }
}