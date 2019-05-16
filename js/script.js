function addSection() {
  var sec = document.createElement("div");
  sec.setAttribute("class","section");
  var str = "<label>Section</label><br />"+"<input type='text' class='form-control form-control-lg' name='section-title[]' placeholder='side heading'/>"+
  "<br /><textarea name='text[]' placeholder='text' class='form-control form-control-lg' rows='4'></textarea>";
  sec.innerHTML=str;
  var ref = document.getElementById("ref");
  ref.appendChild(sec);
}
function createTextArea() {
  var sec = document.createElement("div");
  sec.setAttribute("class","text");
  var str = "<br /><textarea name='text[]' class='form-control form-control-lg' rows='4' placeholder='Text'></textarea>";
  sec.innerHTML=str;
  var ref = document.getElementById("ref");
  ref.appendChild(sec); 
}
function createLabel() {
}
function addChapter() {
  var sec = document.createElement("div");
  sec.setAttribute("class","chapter");
  var str = "<label>Chapter</label><br />"+
            "<input type='text' name='chapter[]' class='form-control form-control-lg' placeholder='Chapter Name' /> <br />"+
            "<input type='text' name='section-title[]' class='form-control form-control-lg' placeholder='side heading'/>"+
            "<br /><textarea name='text[]' class='form-control form-control-lg' rows='4'  placeholder='text'></textarea>";
  sec.innerHTML=str;
  var ref = document.getElementById("ref");
  ref.appendChild(sec);
}
function ondelete() { 
  var ref = document.getElementById("ref");
  ref.removeChild(ref.lastChild);
}