let user = {};
user.name = "Abid Hasan";
user.age = 18;
user.creadit= 180;
user.cart = {
	"product": [
	{
		"name":  "C++ Programming Book",
		"author": "Abid Hasan",
		"price": 250,
		"stock": 12,
		"quantity": 7 
	},
	{
		"name": "English book",
		"author": "Abid Hasan",
		"price": 254,
		"stock": 18,
		"quantity": 14
	},
	{
		"name": "Java Programming",
		"author": "Subeen",
		"price": 400,
		"stock": 0,
		"quantity": 10
	}
	]
}
console.log("In your cart have " + user.cart.product.length + " items");
console.log("-------------");
for(ls of user.cart.product){
	if(ls.stock == 0){
		console.log("(" +ls.name + " )#Not Avilable In Stock!");
	}else{
	console.log("(" + ls.name + ") orders = " + ls.quantity +" price = "+ ls.price + " & subtotal " + ls.price*ls.quantity +" TK");
	}
	//counting total amount	
}
