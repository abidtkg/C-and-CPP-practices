let food = ["zero", "apple", "banana", "burger"];

console.log("loop the array using forEach");
food.forEach((value, index) => console.log(value));

console.log("Loop the array using for loop only");
for (let i = 0; i < food.length; i++) {
  console.log(food[i]);
}
