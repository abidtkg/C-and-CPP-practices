using System;
namespace app{
	public class approot{
		public static void Main(string[] args){
			//vouwel detector by using switch case
			Console.WriteLine("Welcome to vouel detector app. make with <3 by #abidHasan");
			Console.WriteLine("");
			Console.WriteLine("");
			Console.WriteLine("Please Enter any word that you want to test");
			char ch;
			ch = Convert.ToChar(Console.ReadLine());
			switch(Char.ToLower(ch)){
				case 'a':
					Console.WriteLine("This is a vouel word");
				break;
				case 'e':
					Console.WriteLine("This is a vouel word");
				break;
				case 'i':
					Console.WriteLine("This is a vouel word");
				break;
				case 'o':
					Console.WriteLine("This is a vouel word");
				break;
				case 'u':
					Console.WriteLine("This is a vouel word");
				break;
			}
			
		}
	}
}
