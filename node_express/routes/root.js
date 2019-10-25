const express = require("express");
const router = express.Router();

// routing method
router.get("/", (req, res) => {
  res.send("This is root page");
});

module.exports = router;
