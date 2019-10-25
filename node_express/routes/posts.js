const express = require("express");
const router = express.Router();

//routing table
router.get("/updates", (req, res) => {
  res.send("You are on post page");
});

module.exports = router;
