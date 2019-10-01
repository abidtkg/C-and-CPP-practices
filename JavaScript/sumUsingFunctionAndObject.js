// sum with fucntion and array
function sum_in_array(array_numbers){
	let summed = 0;
	for(number of array_numbers){
		summed += number;
	}
	return summed;
}
// let calcuate the 3 book prices
// ex as: 120, 130, 140
bookPrice = [120, 130, 140];
console.log(sum_in_array(bookPrice) + " Tk");
let cart = {};
cart = {
	user: "Abid Hasan",
	book: [
	{
		name: "Programming Book",
		price: 120
	},
	{
		name: "English Book",
		price: 290
	},
	{
		name: "Java Book",
		price: 530
	}
	]
}
// let calculate the total cart price

/* frist of all we need to create this object data to array data then we will pass this arry to the function */
//create a empty array of book cart for book prices
cartBookPrice = [];
// create a for loop and push all prices into the emty array
for(ls of cart.book){
	cartBookPrice.push(ls.price);
}
// log the data
console.log("Cart Object Data Calculated: ");
console.log(sum_in_array(cartBookPrice)+" tk");
