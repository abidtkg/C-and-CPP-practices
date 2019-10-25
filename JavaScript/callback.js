let log = data => console.log(data);
let sum = (a, b) => a + b;
let multiply = (a, b) => a * b;
let devide = (a, b) => a / b;

let math = (a, b, callback) => callback(a, b);
log(math(10, 10, multiply));
