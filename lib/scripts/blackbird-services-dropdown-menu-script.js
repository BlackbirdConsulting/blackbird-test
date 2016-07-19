/* When the user clicks on the button, 
 * toggle between hiding and showing the dropdown content 
 * @link http://www.w3schools.com/howto/howto_js_dropdown.asp*/
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("services-show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('services-show')) {
        openDropdown.classList.remove('services-show');
      }
    }
  }
}


