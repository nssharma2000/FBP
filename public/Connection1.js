const express = require("express");
const app = express();
app.use(express.static("public"));

app.get('/', (req, res) => {
  res.sendFile('Booking.html', {root: __dirname});
});

app.use(express.static('D:\A\Flight Booking Project\public'));

app.listen(1080, function() {
  console.log("Running on port 3000.")
});
