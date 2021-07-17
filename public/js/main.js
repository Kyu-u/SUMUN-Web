var header = document.getElementById("navitems");
var btns = header.getElementsByClassName("link");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    console.log(current);
  current[0].className = current[0].className.replace(" active", "");
      this.className += " active";
      console.log(this.className);
  });
}


