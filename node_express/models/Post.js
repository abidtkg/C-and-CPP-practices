const mongoose = require("mongoose");
const PostSchema = mongoose.Schema({
  title: {
    type: String,
    require: true
  },
  description: {
    type: String,
    require: true
  }
});

// export the module
module.exports = mongoose.model("post", PostSchema);
