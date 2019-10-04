let user = [
{
	name: "Abid Hasan",
	product: [
	{
		name: "Pyhton Book",
		price: 490
	},
	{
		name: "JavaScript Book",
		price: 600
	}
	]
},
{
	name: "Hasan",
	product: [
	{
		name: "JavaBook",
		price: 200
	},
	{
		name: "C Sharp Book",
		price: 321
		}
	]
}
]
for(users of user){
	console.log("##"+users.name+"##");
	let cartPrice = [];
	for(cart of users.product){
		console.log("Item : "+cart.name);
		console.log("$ "+cart.price);
		cartPrice.push(cart.price);
	}
	let totalCartPrice = 0;
	for(itemPrice of cartPrice){
		totalCartPrice += itemPrice;
	}
	console.log(" > TOTAL : "+totalCartPrice+"$");
	console.log("______________");
}
