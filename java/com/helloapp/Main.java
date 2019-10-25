package com.helloapp;

/* here exist 2 kind of typing method
  1 -> PascaleNamingConvetion
  2 -> camelNamingConvention
*/
public class Main {

    public static void main(String[] args) {
        // finding the biggest number
        int numberOne = 1000;
        int numberTwo = 3;
        int numberThree = 200;
        if (numberOne > numberTwo & numberOne > numberThree) {
            System.out.println("The big number is");
            System.out.println(numberOne);
        } else if (numberTwo > numberThree) {
            System.out.println("The smallest number is");
            System.out.println(numberTwo);
        } else {
            System.out.println("The smallest number is");
            System.out.println(numberThree);
        }
    }
}
