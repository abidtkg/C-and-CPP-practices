using System;
namespace the{
	public class thelopp{
		public static void Main(string[] args){
			int num;
			Console.Write("input between 1-100");
			num = int.Parse(Console.ReadLine());
			Console.WriteLine(num);
			if(num <= 100){
				for(int i = 1; i<num; i++){
					Console.WriteLine("The addition number" + num);
					i +=i;
				}
			}
		}
	}
}
