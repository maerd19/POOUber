public class Main {
    public static void main(String[] args) {
        System.out.println("Hola Mundo");
        Car uberX = new UberX("FAA123", new Account("Faustina Angeles", "INE"), "Chevrolter", "Sonic");
        uberX.setPassenger(4);
        uberX.printDataCar();

        UberVan uberVan = new UberVan("FJG998", new Account("Alejandra Torres", "ATA665"));
        uberVan.setPassenger(6);
        uberVan.printDataCar();

        // Car car2 = new Car("RHA123", new Account("Rafael Hernandez", "INE"));
        // car2.passenger = 3;
        // car2.printDataCar();
    }
}