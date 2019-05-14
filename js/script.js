function addSection() {
  var sec = document.createElement("div");
  sec.innerHTML="<label>Section</label><br />"+"<input type='text'/>"+"<br /><textarea></textarea>";
  var ref = document.getElementById("ref");
  ref.appendChild(sec);

}
function createTextArea() {
  var div = document.createElement("textarea");
  div.setAttribute("name","section");
  div.innerHTML="Section";
  console.log("Create TextArea");
  return div;
}
function createLabel() {
  var div = document.createElement("label");
  div.setAttribute("name","section");
  div.innerHTML="Section";2
  console.log("Create Label");
  return div;
}
function createInput() {
  var div = document.createElement("input");
  div.setAttribute("type","text");
  div.setAttribute("name","text");
  console.log("Create Input")
  return div;
}
function addChapter() {
  console.log("KJ");
}
