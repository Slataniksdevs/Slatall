public class Main {



    public static void main(String[] args) {
    //comentarios
    /*
    comentario extendido
    */
    System.out.println("Hola Java, Aqui vamos de nuevo!");
    //Tipos de datos
    String newString = "esto es un string cadena de texto: Mogh";
    newString = "ahora le doy un nuevo valor: Miquella";
        System.out.println(newString);

    Integer newInt = 7;
    newInt = newInt + 4;
        System.out.println(newInt);
        System.out.println(newInt - 1);

    Double newDouble = 6.5;
        System.out.println(newDouble);

    Float newFloat = 6.5f;
        System.out.println(newFloat);

        System.out.println(newFloat + " " + newDouble + " " + newInt + " " + newString);

        Boolean  newBoolean = true;
        newBoolean = false;
        System.out.println(newBoolean);

       newFloat= null;
       if(newFloat != null) {
           System.out.println(newFloat + 10);
           System.out.println("newfloat es distinto de nulo");
       } else {
           System.out.println("newfloat es  nulo");
       }
    }
}