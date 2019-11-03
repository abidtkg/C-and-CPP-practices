const db = require("./db");
for (phone of db.phones) {
  console.log(phone.version);
}
