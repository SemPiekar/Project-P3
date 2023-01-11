var i = 0;
text = ".periode 3 : team project";

function typewriter() {
  if (i < text.length) {
    document.getElementById("typingContainer").innerHTML += text.charAt(i);
    i++;
    setTimeout(typewriter, 100);
  }
}
typewriter();
