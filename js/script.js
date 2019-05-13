function addSection() {
  var div = document.createElement("label");
  div.setAttribute("name","section");
  div.innerHTML="Section";
  var par = document.getElementById("section");
  var inserted = document.getElementById("section");
  inserted = par.appendChild(div,div);
  console.log("Shoem");
}
function addChapter() {
  console.log("KJ");
}
