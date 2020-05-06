function setItem() {
  var subscriberCount = localStorage.getItem('subscriber');
  var currentFont = localStorage.getItem('font');
  var currentImage = localStorage.getItem('image');

  document.getElementById('bgcolor').value = currentColor;
  document.getElementById('font').value = currentFont;
  document.getElementById('image').value = currentImage;

  htmlElem.style.backgroundColor = '#' + currentColor;
  pElem.style.fontFamily = currentFont;
  imgElem.setAttribute('src', currentImage);
}

//when user clicks submit button
localStorage.setitem("subscribed,"thispersonhassubbed");

// verifies if user has subscribed
const subscribed = localStorage.getItem("subscribed");

if (subscribed){
    window.location.href = 'http://localhost:3000/package-pricing'
    console.log("This person has subscribed!");
} else {
    window.location.href = 'http://localhost:3000/pricing'
    console.log("Uh-oh, looks like you haven't subscribed");
}
