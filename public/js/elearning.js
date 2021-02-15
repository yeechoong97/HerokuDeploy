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
    let title = document.getElementById("learning-title").innerHTML;
    let childNodes = child.childNodes;
    for (let jIndex in childNodes) {
        if (typeof(childNodes[jIndex].innerHTML) != "undefined") {
            if (childNodes[jIndex].innerHTML.includes(title)) {
                dropdown[index].click();
                childNodes[jIndex].classList.add("active");
                break;
            }
        }
    }
}