const fs = require("fs");
let i = 0;
let data = "";
while (i < 10) {
  data += `Hello : ${i} \n`;
  i++;
}

// write a file
fs.writeFile("message.txt", data, function(err) {
  if (err) throw err;
  console.log("File Has Been Written");
});

// read a file to console
fs.readFile("./message.txt", "utf8", (err,data) =>{
    if(err) throw err;
    console.log(data);
    
});