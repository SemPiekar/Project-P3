var i = 0,
text = ".periode 3 : team project scroll down to begin exploring";

function typewriter() {
  if (i < text.length) {
    document.getElementById("typingContainer").innerHTML += text.charAt(i);
    i++;
    setTimeout(typewriter, 150);
  }
}
typewriter();
