window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("navmain").style.padding = "0px";
  } else {
    document.getElementById("navmain").style.padding = "6px";
    // document.getElementById("navmain").style.padding = "6px";
    // document.getElementById("navmain").style.backgroundColor = "red";
  }
}