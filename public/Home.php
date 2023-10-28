<!DOCTYPE HTML>
<HTML LANG="en">
<META NAME="VIEWPORT" CONTENT="WIDTH=DEVICE-WIDTH, INITIAL-SCALE=1.0">
<HEAD>
  <TITLE>QuickBook!</TITLE>
  <LINK REL="STYLESHEET" HREF="Home.css">
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
    <A HREF="Home.php"><DIV CLASS="M_ITEM_A">Home</DIV></A>
    <A HREF="Booking_History.php"><DIV CLASS="M_ITEM_I">Booking History</DIV></A>
  </DIV>
</DIV>
<DIV ID="BG">
  <DIV ID="LOGO_DIV">
  <IMG SRC="QuickBook.png">
  </DIV>
</DIV>
<DIV ID="PLANE_BG">
<DIV ID="MAIN_B">
  <DIV ID="B_TEXT">
    Book your Flight!
  </DIV>
  <FORM NAME="F" ID="F" METHOD="POST" ACTION="Booking.php">
  <DIV ID="B1">
    <DIV ID="B1-1">
      <LABEL>From </LABEL>
        <INPUT TYPE="TEXT" ID="FROM" NAME="FROM" VALUE PLACEHOLDER="Select City" ONCLICK="FROM_DD()" ONKEYUP="FROM_Search()">
        <BR>
        <DIV ID="DD_MENU_FROM">
          <DIV CLASS="MENU_FROM_ITEM" ONCLICK="FROM_VAL(this)">Delhi</DIV>
          <DIV CLASS="MENU_FROM_ITEM" ONCLICK="FROM_VAL(this)">Mumbai</DIV>
          <DIV CLASS="MENU_FROM_ITEM" ONCLICK="FROM_VAL(this)">Kolkata</DIV>
          <DIV CLASS="MENU_FROM_ITEM" ONCLICK="FROM_VAL(this)">Bengaluru</DIV>
          <DIV CLASS="MENU_FROM_ITEM" ONCLICK="FROM_VAL(this)">Los Angeles</DIV>
          <DIV CLASS="MENU_FROM_ITEM" ONCLICK="FROM_VAL(this)">San Francisco</DIV>
          <DIV CLASS="MENU_FROM_ITEM" ONCLICK="FROM_VAL(this)">Frankfurt</DIV>
          <DIV CLASS="MENU_FROM_ITEM" ONCLICK="FROM_VAL(this)">New York</DIV>
          <DIV CLASS="MENU_FROM_ITEM" ONCLICK="FROM_VAL(this)">Chicago</DIV>
          <DIV CLASS="MENU_FROM_ITEM" ONCLICK="FROM_VAL(this)">Vancouver</DIV>
          <DIV CLASS="MENU_FROM_ITEM" ONCLICK="FROM_VAL(this)">Paris</DIV>
          <DIV CLASS="MENU_FROM_ITEM" ONCLICK="FROM_VAL(this)">Rome</DIV>
          <DIV CLASS="MENU_FROM_ITEM" ONCLICK="FROM_VAL(this)">Chennai</DIV>
          <DIV CLASS="MENU_FROM_ITEM" ONCLICK="FROM_VAL(this)">Hyderabad</DIV>
          <DIV CLASS="MENU_FROM_ITEM" ONCLICK="FROM_VAL(this)">Sydney</DIV>
        </DIV>
    </DIV>
    <DIV ID="B1-2">
        <LABEL>To </LABEL>
          <INPUT TYPE="TEXT" ID="TO" NAME="TO" VALUE PLACEHOLDER="Select City" ONCLICK="TO_DD()">
          <DIV ID="DD_MENU_TO">
            <DIV CLASS="MENU_TO_ITEM" ONCLICK="TO_VAL(this)">Delhi</DIV>
            <DIV CLASS="MENU_TO_ITEM" ONCLICK="TO_VAL(this)">Mumbai</DIV>
            <DIV CLASS="MENU_TO_ITEM" ONCLICK="TO_VAL(this)">Kolkata</DIV>
            <DIV CLASS="MENU_TO_ITEM" ONCLICK="TO_VAL(this)">Bengaluru</DIV>
            <DIV CLASS="MENU_TO_ITEM" ONCLICK="TO_VAL(this)">Los Angeles</DIV>
            <DIV CLASS="MENU_TO_ITEM" ONCLICK="TO_VAL(this)">San Francisco</DIV>
            <DIV CLASS="MENU_TO_ITEM" ONCLICK="TO_VAL(this)">Frankfurt</DIV>
            <DIV CLASS="MENU_TO_ITEM" ONCLICK="TO_VAL(this)">New York</DIV>
            <DIV CLASS="MENU_TO_ITEM" ONCLICK="TO_VAL(this)">Chicago</DIV>
            <DIV CLASS="MENU_TO_ITEM" ONCLICK="TO_VAL(this)">Vancouver</DIV>
            <DIV CLASS="MENU_TO_ITEM" ONCLICK="TO_VAL(this)">Paris</DIV>
            <DIV CLASS="MENU_TO_ITEM" ONCLICK="TO_VAL(this)">Rome</DIV>
            <DIV CLASS="MENU_TO_ITEM" ONCLICK="TO_VAL(this)">Chennai</DIV>
            <DIV CLASS="MENU_TO_ITEM" ONCLICK="TO_VAL(this)">Hyderabad</DIV>
            <DIV CLASS="MENU_TO_ITEM" ONCLICK="TO_VAL(this)">Sydney</DIV>
          </DIV>
      </DIV>
  </DIV>
  <DIV ID="B2">
    <DIV ID="B2-1">
      <LABEL>Departure Date</LABEL>
      <INPUT TYPE="DATE" ID="DEP_DATE" NAME="DEP_DATE" ONCHANGE="SET_DATE()">
    </DIV>
    <DIV ID="B2-2">
      <LABEL>Return Date</LABEL>
      <INPUT TYPE="DATE" ID="RET_DATE" NAME="RET_DATE" ONCHANGE="SET_DATE()">
    </DIV>
  </DIV>
  <DIV ID="B3">
    <DIV ID="B3-1">
      <LABEL>Return Trip</LABEL>
      <INPUT TYPE="CHECKBOX" ID="RT_OR_NOT" NAME="RT_OR_NOT" VALUE="IS_RET_TRIP" ONCLICK="RETURN_OR_NOT()">
    </DIV>
    <DIV ID="B3-2">
      <LABEL>Number of Passengers</LABEL>
      <SELECT NAME="NP" ID="NP" FORM="F">
        <OPTION VALUE=1>1</OPTION>
        <OPTION VALUE=2>2</OPTION>
        <OPTION VALUE=3>3</OPTION>
        <OPTION VALUE=4>4</OPTION>
      </SELECT>
    </DIV>
  </DIV>
  <DIV ID="B4">
    <INPUT ID="SUBMIT_B" TYPE="SUBMIT" NAME="SUBMIT" VALUE="Search Flights" ONCLICK="S()">
  </DIV>
</FORM>
</DIV>
</DIV>
<?PHP

if(isset($_POST['RT_OR_NOT']))
{
  $_POST['RT_OR_NOT']=2;
}

if (isset($_SESSION['A'])) {
  echo $_SESSION['A'];
}
?>



<SCRIPT SRC="Home.js"></SCRIPT>



</DIV>
</BODY>
</HTML>
