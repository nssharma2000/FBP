<!DOCTYPE HTML>
<HTML LANG="en">
<META NAME="VIEWPORT" CONTENT="WIDTH=DEVICE-WIDTH, INITIAL-SCALE=1.0">
<HEAD>
  <TITLE>QuickBook!</TITLE>
  <LINK REL="STYLESHEET" HREF="Booking.css">


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
<DIV ID="BG">
  <DIV ID="MAIN">
    <TABLE ID="FL_TABLE">
     <?PHP
  $con = mysqli_connect("localhost","root","nama1234","FLIGHT");
  $FROM=$_POST['FROM'];
  $TO=$_POST['TO'];
  $NP=$_POST['NP'];

  if(isset($_POST['RT_OR_NOT']))
  {
    $_POST['RT_OR_NOT']=2;
  }
  else
  {
    $_POST['RT_OR_NOT']=1;
  }

  $RT=$_POST['RT_OR_NOT'];

  $query="SELECT * FROM FLIGHTS WHERE ORIGIN='$FROM' AND DESTINATION='$TO'";
  $a=$con->query($query);
  if ($a->num_rows > 0) {
    echo "<TR>
     <TH>Flight Number</TH>
     <TH>Origin</TH>
     <TH>Destination</TH>
     <TH>Departure</TH>
     <TH>Arrival</TH>
     <TH>Plane</TH>
     <TH>Fare</TH>
     <TH>Book</TH>
   </TR>";
    while($row = $a->fetch_assoc()) {
      echo "<FORM METHOD=POST ID='B_FORM' ACTION='Ticket.php'><TR CLASS='ROW'>"."<TD>".$row["F_NO"]."<INPUT TYPE='HIDDEN' ID='F_NO' NAME='F_NO'></TD>"."<TD>"
      .$row["ORIGIN"]."<INPUT TYPE='HIDDEN' ID='FROM' NAME='FROM'></TD>"."<TD>".$row["DESTINATION"]."<INPUT TYPE='HIDDEN' ID='TO' NAME='TO'></TD>"."<TD>".$row["DEPARTURE"]."<INPUT TYPE='HIDDEN' ID='DEP' NAME='DEP'></TD>"."<TD>".$row["ARRIVAL"].
      "<INPUT TYPE='HIDDEN' ID='ARR' NAME='ARR'></TD>"."<TD>".$row["PLANE"]."</TD>"."<TD>".($row["FARE"]*(int)"$NP"*(int)"$RT")."<INPUT TYPE='HIDDEN' ID='FARE' NAME='FARE'></TD><TD><INPUT TYPE='SUBMIT' CLASS='BOOK_BUTTON' VALUE='Book' ONCLICK='BOOK(this)'></TD></TR></FORM>";
    }
  }
  else {
    echo "<DIV CLASS='N'>No flights found.</DIV>";
  }


  ?>
    </TABLE>
  </DIV>
</DIV>

<SCRIPT SRC="Booking.js"></SCRIPT>

</DIV>
</BODY>
</HTML>
