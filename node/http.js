const http = require("http");
const server = http.createServer((req, res) => {
  res.write(`Hello, Sever is started \n 
  Requested URL : ${req.url} \n
  Method Rquested : ${req.method} \n
  ========================= \n `);
  if (req.url == "/") {
    res.write("Root Page");
  } else if (req.url == "/server") {
    res.write("This a node.js server running in port: 3000");
  }
  res.end();
});

server.listen(3000, () => console.log("Server Start"));
