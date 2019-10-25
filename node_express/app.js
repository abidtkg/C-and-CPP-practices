const express = require("express");
const app = express();

// Router
const rootRoute = require("./routes/root");
const postRoutes = require("./routes/posts");

// Use Middleware for router
app.use("/", rootRoute);
app.use("/posts", postRoutes);

// mongoDB connection

const MongoClient = require("mongodb").MongoClient;
const uri =
  "mongodb+srv://root:abcd1234@users-iream.gcp.mongodb.net/test?retryWrites=true&w=majority";
const client = new MongoClient(uri, { useUnifiedTopology: true });
client.connect(err => {
  const collection = client.db("test").collection("devices");
  // perform actions on the collection object
  console.log("Connected with mongoServer");

  client.close();
});

//listen to port
app.listen(3000);
