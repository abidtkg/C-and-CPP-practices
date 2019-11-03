const express = require("express");
const app = express();
const mongoose = require("mongoose");
const bodyParser = require("body-parser");
require("dotenv/config");

// Middleware for parsing json data
app.use(bodyParser.json());

// Router
const rootRoute = require("./routes/root");
const userRoute = require("./routes/user");
const postRoute = require("./routes/posts");
// Use Middleware for router
app.use("/", rootRoute);
app.use("/user", userRoute);
app.use("/post", postRoute);

// mongoDB connection
mongoose.connect(process.env.DB_CONNECTION, { useNewUrlParser: true }, err =>
  console.log("Connected To MongoDB")
);
//listen to port
app.listen(3000);
