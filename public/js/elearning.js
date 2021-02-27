/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
for (let i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function() {
        this.classList.toggle("active");
        let dropdownContent = this.nextElementSibling;
        if (dropdownContent.innerHTML.includes("href")) {
            if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
                this.children[0].classList.remove('fa-minus');
                this.children[0].classList.add('fa-plus');
            } else {
                dropdownContent.style.display = "block";
                this.children[0].classList.remove('fa-plus');
                this.children[0].classList.add('fa-minus');
            }
        }
    });
}

for (let index in dropdown) {
    let child = dropdown[index].nextElementSibling;
    let title = (document.getElementById("learning-title") != null) ? document.getElementById("learning-title").innerHTML : "";
    if (child != undefined) {
        let childNodes = child.childNodes;
        for (let jIndex in childNodes) {
            if (typeof(childNodes[jIndex].innerHTML) != "undefined" && title != "") {
                if (childNodes[jIndex].innerHTML.includes(title)) {
                    dropdown[index].click();
                    childNodes[jIndex].classList.add("active");
                    childNodes[jIndex].scrollIntoView();
                    break;
                }
            }
        }
    }
}

$(document).ready(function() {
    $(window).scroll(function() {
        if ($(this).scrollTop() > 50) {
            $('#back-to-top').fadeIn();
        } else {
            $('#back-to-top').fadeOut();
        }
    });
    // scroll body to 0px on click
    $('#back-to-top').click(function() {
        $('body,html').animate({
            scrollTop: 0
        }, 400);
        return false;
    });
});