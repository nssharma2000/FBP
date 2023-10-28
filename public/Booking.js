function BOOK(e)
{
  document.getElementById("F_NO").value=e.parentElement.parentElement.children[0].innerText;
  document.getElementById("DEP").value=e.parentElement.parentElement.children[3].innerText;
  document.getElementById("ARR").value=e.parentElement.parentElement.children[4].innerText;
  document.getElementById("FARE").value=e.parentElement.parentElement.children[6].innerText;
  document.getElementById("FROM").value=e.parentElement.parentElement.children[1].innerText;
  document.getElementById("TO").value=e.parentElement.parentElement.children[2].innerText;
}
