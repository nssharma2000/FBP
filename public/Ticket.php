<!DOCTYPE HTML>
<HTML LANG="en">
<META NAME="VIEWPORT" CONTENT="WIDTH=DEVICE-WIDTH, INITIAL-SCALE=1.0">
<HEAD>
  <TITLE>QuickBook!</TITLE>
  <LINK REL="STYLESHEET" HREF="Ticket.css">


</HEAD>
<BODY BGCOLOR="#051D40">
  <DIV ID="TOP_BAR">
    <DIV ID="ABOUT">
    <A HREF="About.php">About Us</A>
    </DIV>
    <DIV ID="CONTACT">
    <A HREF="Contact.php">Contact Us</A>
    </DIV>
  </DIV>
  <BR>
  <SPAN ID="T">Your ticket has been booked!</SPAN>
  <DIV ID="MAIN">
    <DIV ID="TITLE">Ticket</DIV>
    <BR>
  <?PHP
  $con = mysqli_connect("localhost","root","nama1234","FLIGHT");
  $F_NO=$_POST['F_NO'];
  $ORIGIN=$_POST['FROM'];
  $DEST=$_POST['TO'];
  $DEP=$_POST['DEP'];
  $ARR=$_POST['ARR'];
  $FARE=$_POST['FARE'];


  $query="INSERT INTO BOOKING (F_NO, ORIGIN, DESTINATION, DEPARTURE, ARRIVAL, FARE) VALUES('$F_NO', '$ORIGIN', '$DEST', '$DEP', '$ARR', '$FARE');";
  $con->query($query);

  echo "Flight Number: ".$F_NO."<BR>".
       "From: ".$ORIGIN."<BR>".
       "To: ".$DEST."<BR>".
       "Departure Time: ".$DEP."<BR>".
       "Arrival Time: ".$ARR."<BR>".
       "Fare: ".$FARE;
?>

<SCRIPT SRC=""></SCRIPT>

</DIV>
</BODY>
</HTML>
