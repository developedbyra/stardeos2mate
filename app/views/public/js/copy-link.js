function myFunction() {
    var copyText = document.getElementById("myAnchor").title;
    document.addEventListener('copy', function(event) {
      event.clipboardData.setData('text/plain', copyText);
      event.preventDefault();
      document.removeEventListener('copy', true);
    }, true);
    document.execCommand('copy');
    alert("Copied: " + copyText);
}

document.getElementById('myAnchor').addEventListener('click', myFunction);
