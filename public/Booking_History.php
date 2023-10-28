<!DOCTYPE HTML>
<HTML LANG="en">
<META NAME="VIEWPORT" CONTENT="WIDTH=DEVICE-WIDTH, INITIAL-SCALE=1.0">
<HEAD>
  <TITLE>QuickBook!</TITLE>
  <LINK REL="STYLESHEET" HREF="Booking_History.css">
  <SCRIPT SRC="jquery-3.7.1.js"></SCRIPT>
</HEAD>
<BODY BGCOLOR="#051D40">
  <DIV ID="TOP_BAR">
    <DIV ID="ABOUT">
    <A HREF="About.php">About Us</A>
    </DIV>
    <DIV ID="CONTACT">
    <A HREF="Contact.php">Contact Us</A>
    </DIV>
  <DIV ID="MENU_DIV">
    <IMG SRC="Menu.svg">
  </DIV>
  <DIV ID="MENU_COVER">
  </DIV>
  <DIV ID="MENU">
    <A HREF="Home.php"><DIV CLASS="M_ITEM_I">Home</DIV></A>
    <A HREF="Booking_History.php"><DIV CLASS="M_ITEM_A">Booking History</DIV></A>
  </DIV>
</DIV>
<BR>
  <?PHP
  $con = mysqli_connect("localhost","root","nama1234","FLIGHT");
  $query="SELECT * FROM BOOKING;";
  $a=$con->query($query);
  if($a->num_rows > 0)
  {
    while($row=$a->fetch_assoc())
    {
    echo "<DIV CLASS='TICKET'><DIV CLASS='TICKET_TITLE'>Ticket ".$row["TICKET_NO"]."</DIV><BR>".
         "Flight Number: ".$row["F_NO"]."<BR>".
         "From: ".$row["ORIGIN"]."<BR>".
         "To: ".$row["DESTINATION"]."<BR>".
         "Departure Time: ".$row["DEPARTURE"]."<BR>".
         "Arrival Time: ".$row["ARRIVAL"]."<BR>".
         "Fare: ".$row["FARE"].
         "</DIV><BR>";
    }
  }
  else
  {
    echo "<DIV ID='N'>No tickets found.</DIV>";
  }


?>





























<SCRIPT SRC="Booking_History.js"></SCRIPT>



</DIV>
</BODY>
</HTML>
