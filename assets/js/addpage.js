
// create header
function add_header(name) {
  // div
  var div = document.createElement("div");
  div.className = "form-group";
	div.setAttribute("name", name)

  // label
  var label = document.createElement("label");
  label.for = "exampleFormControlInput1";
  label.innerHTML = name + " Header";

  // input
  var i = document.createElement("input");
  i.className = "form-control";
  i.placeholder = name+"-header";
  i.required = true;

  div.appendChild(label);
  div.appendChild(i);

  document.getElementsByTagName('form')[0].appendChild(div); //pure javascript
  //console.log(document.getElementsByTagName('form')[0]);

}

// remove div & corresponding attributes within
function remove_div(name) {
  var bot_s1_header = document.getElementsByName(name);
	var len = bot_s1_header.length;
	if (len!=0) { bot_s1_header[len-1].remove(); }

}

// add text
function add_text() {
  // div
  var div = document.createElement("div");
  div.className = "input-group";
	div.setAttribute("name", "text")

  // div2
	var div2 = document.createElement("div");
	div2.className = "input-group-prepend";

  // span
	var span = document.createElement("span");
	span.className = "input-group-text";
	span.innerHTML = "text";

  // text
  var text = document.createElement("textarea");
  text.className = "form-control";
  text.placeholder = "text";
  text.required = true;
	text.setAttribute("arialabel", "text")


  div2.appendChild(span);
  div.appendChild(div2);
	div.appendChild(text)


  document.getElementsByTagName('form')[0].appendChild(div); //pure javascript
  //console.log(document.getElementsByTagName('form')[0]);

}

// publish site button
function add_submit() {
	remove_submits();
  // div creation
  var div = document.createElement("div");
  div.className = "form-group";
  div.setAttribute("name", "submit")


  var button = document.createElement("button");
  button.className = "btn btn-primary";
  button.innerHTML = "Publish Site"


  div.appendChild(button);

  // add to html
  document.getElementsByTagName('form')[0].appendChild(div); //pure javascript
}

// remove all submit buttons from form
function remove_submits() {
  var submit_length;
  submit_length = () => { return document.getElementsByName("submit").length; }
  var submits = document.getElementsByName("submit");
  var len = submit_length();
  var i = 0;
  while (i < len) {
    submits[0].remove();
    i++;
  }
}
