function addSection() {
  var sec = document.createElement("div");
  sec.setAttribute("class","section");
  var str = "<label>Section</label><br />"+"<input type='text' class='form-control form-control-lg' name='section-title[]' placeholder='side heading'/>"+
  "<br /><textarea name='text[]' placeholder='text' class='form-control form-control-lg' rows='4'></textarea>";
  sec.innerHTML=str;
  var ref = document.getElementById("ref");
  ref.appendChild(sec);
  labelUpdate("section");
}
function createTextArea() {
  var sec = document.createElement("div");
  sec.setAttribute("class","text");
  var str = "<br /><textarea name='text[]' class='form-control form-control-lg' rows='4' placeholder='Text'></textarea>";
  sec.innerHTML=str;
  var ref = document.getElementById("ref");
  ref.appendChild(sec); 
  labelUpdate("text");
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
  labelUpdate("chapter");
}
function ondelete() { 
  var ref = document.getElementById("ref");
  ref.removeChild(ref.lastChild);
}
function labelUpdate(args) {
  /*var section=1;
  var chapter=1;
  var text=1;
  var ref = document.getElementById("ref");
  for(var i=0;i<ref.childElementCount;i++)
  {
    console.log(ref.children[i].className);
    switch(ref.children[i].className) {
      case 'section':
      section++;
      break;
      case 'chapter':
      chapter++;
      break;
    }
  }
  console.log(section);
  console.log(chapter);*/
  var doctree = document.getElementById("tree");
  var item = document.createElement("li");
  item.setAttribute("id","list");
  item.setAttribute("name","list");
  item.innerText=args;
  doctree.appendChild(item);
}