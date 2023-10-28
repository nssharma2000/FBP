function FROM_DD()
{
document.getElementById("FROM").addEventListener("click", FROM_CLICK());
}

function FROM_CLICK()  //When 'FROM' is clicked (inside the box)
{
  a=document.getElementById("TO").value;
  document.getElementById("DD_MENU_FROM").style.display="inline-block";
  org_items=document.getElementsByClassName("MENU_FROM_ITEM");
  for(let i=0; i<org_items.length; i++) //To make sure 'FROM' and 'TO' have different values
  {
    if(org_items[i].innerHTML===a)
    {
      org_items[i].style.display="none";
    }
  }
}

function FROM_VAL(a)     //When an option is selected for 'FROM'
{
  e=document.getElementById("FROM");
  e.value=a.innerHTML;
  document.getElementById("TO").disabled=false;
  let items=document.getElementsByClassName("MENU_FROM_ITEM");
  for(let i=0; i<items.length; i++)
  {
    items[i].style.borderBottom="none";
  }
    a.style.borderRadius="0";
  a.style.borderBottom="5px solid blue";
  document.getElementById("DD_MENU_FROM").style.display="none";
  from=document.getElementById("FROM").value;
  to=document.getElementById("TO").value;
  dep_date=document.getElementById("DEP_DATE").value;
  ret_date=document.getElementById("RET_DATE").value;
  np=document.getElementById("NP").value;
  if(document.getElementById("RET_DATE").disabled==false)
  {
  if(from!=="" && to!=="" && dep_date!=="" && ret_date!=="" && np!=="")
  {
    document.getElementById("SUBMIT_B").disabled=false;
    document.getElementById("SUBMIT_B").style.background="linear-gradient(#FF6600, #FF9102)";
  }
  else
  {
    submit=document.getElementById("SUBMIT_B");
    submit.disabled=true;
    submit.style.background="grey";
  }
}
  else
  {
  if(from!=="" && to!=="" && dep_date!=="" && np!=="")
  {
  document.getElementById("SUBMIT_B").disabled=false;
  document.getElementById("SUBMIT_B").style.background="linear-gradient(#FF6600, #FF9102)";
  }
  else
  {
    submit=document.getElementById("SUBMIT_B");
    submit.disabled=true;
    submit.style.background="grey";
  }
}
}
//(Below) To hide DIV when the user clicks outside it
document.addEventListener("mouseup", function(e)
{
  a=document.getElementById("DD_MENU_FROM");
  if(!a.contains(e.target))
  {
    a.style.display="none";
  }
});

function FROM_Search()
{
ob=document.getElementById("FROM").value;
console.log(ob);
const org_items=document.getElementsByClassName("MENU_FROM_ITEM");
for(let i=0; i<org_items.length; i++)
{
  console.log("A")
  txtValue = org_items[i].textContent || org_items[i].innerText;
  console.log(txtValue);
  if(txtValue.toUpperCase().indexOf(ob.toUpperCase()) > -1)
  {
    org_items[i].style.display="";
  }
  else
  {
    org_items[i].style.display="none";
  }
}
}

function org_name()
{
  a=document.getElementById("FROM").value;
  return a;
}

function TO_DD()
{
document.getElementById("TO").addEventListener("click", TO_CLICK());
}

function TO_CLICK()
{
  document.getElementById("DD_MENU_TO").style.display="inline-block";
  a=document.getElementById("FROM").value;
  dest_items=document.getElementsByClassName("MENU_TO_ITEM");
  for(let i=0; i<dest_items.length; i++)
  {
    if(dest_items[i].innerHTML===a)
    {
      dest_items[i].style.display="none";
    }
  }

}

function TO_VAL(a)
{
  e=document.getElementById("TO");
  e.value=a.innerHTML;
  let items=document.getElementsByClassName("MENU_TO_ITEM");
  for(let i=0; i<items.length; i++)
  {
    items[i].style.borderBottom="none";
  }
  a.style.borderRadius="0";
  a.style.borderBottom="5px solid blue";
  document.getElementById("DD_MENU_TO").style.display="none";
  from=document.getElementById("FROM").value;
  to=document.getElementById("TO").value;
  dep_date=document.getElementById("DEP_DATE").value;
  ret_date=document.getElementById("RET_DATE").value;
  np=document.getElementById("NP").value;
  if(document.getElementById("RET_DATE").disabled==false)
  {
  if(from!=="" && to!=="" && dep_date!=="" && ret_date!=="" && np!=="")
  {
    document.getElementById("SUBMIT_B").disabled=false;
    document.getElementById("SUBMIT_B").style.background="linear-gradient(#FF6600, #FF9102)";
  }
  else
  {
    submit=document.getElementById("SUBMIT_B");
    submit.disabled=true;
    submit.style.background="grey";
  }
}
  else
  {
  if(from!=="" && to!=="" && dep_date!=="" && np!=="")
  {
    document.getElementById("SUBMIT_B").disabled=false;
    document.getElementById("SUBMIT_B").style.background="linear-gradient(#FF6600, #FF9102)";
  }
  else
  {
    submit=document.getElementById("SUBMIT_B");
    submit.disabled=true;
    submit.style.background="grey";
  }
}

  document.addEventListener("mouseup", function(e)
  {
    a=document.getElementById("DD_MENU_TO");
    if(!a.contains(e.target))
    {
      a.style.display="none";
    }
  });
}

function TO_Search()
{
dest_b=document.getElementById("TO").value;
console.log(db);
const dest_items=document.getElementsByClassName("MENU_TO_ITEM");
for(let i=0; i<dest_items.length; i++)
{
  console.log("A")
  txtValue = dest_items[i].textContent || dest_items[i].innerText;
  console.log(txtValue);
  if(txtValue.toUpperCase().indexOf(dest_b.toUpperCase()) > -1 && (org_name()!==dest_b))
  {
    dest_items[i].style.display="";
  }
  else
  {
    dest_items[i].style.display="none";
  }

}
}



function RETURN_OR_NOT()
{
  a=document.getElementById("RET_DATE");

  if(document.getElementById("RT_OR_NOT").checked)
  {
    a.disabled=false;
    if(from!=="" && to!=="" && dep_date!=="" && ret_date!=="" && np!=="")
    {
      document.getElementById("SUBMIT_B").disabled=false;
      document.getElementById("SUBMIT_B").style.background="linear-gradient(#FF6600, #FF9102)";
    }
    else
    {
      submit=document.getElementById("SUBMIT_B");
      submit.disabled=true;
      submit.style.background="grey";
    }
  }
    else
    {
    a.disabled=true;
    if(from!=="" && to!=="" && dep_date!=="" && np!=="")
    {
      document.getElementById("SUBMIT_B").disabled=false;
      document.getElementById("SUBMIT_B").style.background="linear-gradient(#FF6600, #FF9102)";
    }
    else
    {
      submit=document.getElementById("SUBMIT_B");
      submit.disabled=true;
      submit.style.background="grey";
    }
  }
}

function SET_MAX_DATE(c_day, c_month, c_year)
{
max_year=c_year+(c_month>=6 ? 1 : 0);
max_month=(c_month+6)%12;
max_day=c_day;

if(max_day<10)
{
  max_day='0'+max_day;
}
if(max_month<10)
{
  max_month='0'+max_month;
}
max_whole=max_year+'-'+max_month+'-'+max_day;
return max_whole;
}

function SET_DATE()
{
  dep=document.getElementById("DEP_DATE").value;
  document.getElementById("RET_DATE").min=dep;
  n_dep=new Date(dep);
  day=n_dep.getDate();
  month=n_dep.getMonth()+1;
  year=n_dep.getFullYear();
  document.getElementById("RET_DATE").max=SET_MAX_DATE(day, month, year);
  from=document.getElementById("FROM").value;
  to=document.getElementById("TO").value;
  dep_date=document.getElementById("DEP_DATE").value;
  ret_date=document.getElementById("RET_DATE").value;
  np=document.getElementById("NP").value;
  if(document.getElementById("RET_DATE").disabled==false)
  {
    console.log("This");
  if(from!=="" && to!=="" && dep_date!=="" && ret_date!=="" && np!=="")
  {
    document.getElementById("SUBMIT_B").disabled=false;
    document.getElementById("SUBMIT_B").style.background="linear-gradient(#FF6600, #FF9102)";
  }
  else
  {
    submit=document.getElementById("SUBMIT_B");
    submit.disabled=true;
    submit.style.background="grey";
  }
  }
  else
  {
  console.log("is");
  if(from!=="" && to!=="" && dep_date!=="" && np!=="")
  {
    document.getElementById("SUBMIT_B").disabled=false;
    document.getElementById("SUBMIT_B").style.background="linear-gradient(#FF6600, #FF9102)";

  }
  else
  {
    submit=document.getElementById("SUBMIT_B");
    submit.disabled=true;
    submit.style.background="grey";
  }
}
}


document.getElementById("TO").disabled=true;


if(document.getElementById("RT_OR_NOT").checked===false)
document.getElementById("RET_DATE").disabled=true;
else
document.getElementById("RET_DATE").disabled=false;

let today=new Date();
c_month=today.getMonth()+1;
c_day=today.getDate();
c_year=today.getFullYear();
if(c_month<10)
{
  c_month='0'+c_month;
}
if(c_day<10)
{
  c_day='0'+c_day;
}

c_whole=c_year+'-'+c_month+'-'+c_day;

max_whole=SET_MAX_DATE(c_day, c_month, c_year);


document.getElementById("DEP_DATE").min=c_whole;
document.getElementById("DEP_DATE").max=max_whole;


function S()
{
a=0;
from=document.getElementById("FROM").value;
to=document.getElementById("TO").value;
dep_date=document.getElementById("DEP_DATE").value;
ret_date=document.getElementById("RET_DATE").value;

if(from==="" || to==="")
{
  alert("Please enter both origin and destination.")
}
else
{
  a++;
}

if(dep_date==="")
{
  alert("Please enter departure date.")
}
else
{
  a++;
}

if(document.getElementById("RET_DATE").disabled==false && ret_date==="")
{
  alert("Please enter return date.")
}
else
{
  a++;
}
np=document.getElementById("NP").value;
if(a%3===0)
{
  document.getElementById("SUBMIT_B").disabled=false;
  document.getElementById("SUBMIT_B").style.background="linear-gradient(#FF6600, #FF9102);";
}
}


$("#MENU_DIV").click(function(){
  a=$("#MENU");
  if($(window).width()>480)
  {
    $(a).animate({marginRight: "80.5vw"}, 700);
  }
  else
  {
    $(a).animate({marginRight: "82vw"}, 700);
  }
  $("#MENU_COVER").show();
});

$("#MENU_COVER").click(function()
{
  $(this).hide();
  $("#MENU").animate({marginRight: "1920px"});
});

submit=document.getElementById("SUBMIT_B");
submit.disabled=true;
submit.style.background="grey";

$(document).ready(function() {
  $("#MENU_COVER").hide();
});
