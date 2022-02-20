let test = document.getElementById("about");
test.addEventListener("mouseover", function( event ) {
  event.target.style.color = "grey";
  setTimeout(function() {
    event.target.style.color = "";
  }, 500);
}, false);
