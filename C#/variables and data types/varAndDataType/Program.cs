using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace varAndDataType
{
    class Program
    {
        static void Main(string[] args)
        {
            //input user's name and hello the user
            Console.Write("Please Enter Your Name: ");
            string uName = Console.ReadLine();
            Console.WriteLine("Hello, "+ uName +" {This app created by @abidHasan}");
            Console.WriteLine(" How are you? Hope you are fine today!");

            //ask the user to start our application
            Console.WriteLine("================================================"); //for spacing 
            Console.Write("Will you want to show today's update? (y/n): ");
            string conf = Console.ReadLine();

            //response the user input
            if(conf.ToLower() == "y")
            {
                userInputY();
            }
            else if (conf.ToLower() == "n")
            {
                Console.WriteLine("  >>>No data enterd please restart the program");
                Console.Read();
            }
            else if (conf.ToLower() == "")
            {
                Console.WriteLine("  >>>No data enterd please restart the program");
                Console.Read();
            }
            else
            {
                Console.WriteLine("Please insert correct data");
                userInput();
                Console.Read();
            }
        }



        //Global function are declered here
        public static void userInput()
        {
            Console.WriteLine("================================================"); //for spacing 
            Console.Write("Will you want to show today's update? (y/n): ");
            string conf = Console.ReadLine();
        }
        public static void userInputY()
        {
            //for creating a string
            string strValue = "Hey I'm a string value :P";
            Console.WriteLine("1. string example is>");
            Console.WriteLine(strValue);

            //for creating a integer number
            int intValue = 13;
            Console.WriteLine("Hey i'm integer value:>");
            Console.WriteLine(intValue);

            //for creating a float number
            double doubleVal = 23.3;
            Console.WriteLine("Hey i'm double value:>");
            Console.WriteLine(doubleVal);

            //for creating float value
            float floatVal = 9 / 2;
            Console.WriteLine("The 9/2 ans float ");
            Console.WriteLine(floatVal);
            Console.Read();
        }
    }
}
