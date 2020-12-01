@extends('layouts.default')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">

    <div class="sidenav">
        <a class="dropdown-btn" href="#about">About</a>
        <a class="dropdown-btn" href="#services">Services</a>
        <a class="dropdown-btn" href="#clients">Clients<i class="fa fa-caret-down"></i></a>
            <div class="dropdown-container">
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
                <a href="#">Link 3</a>
            </div>
        <a class="dropdown-btn" href="#contact">Contact<i class="fa fa-caret-down"></i></a>
            <div class="dropdown-container">
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
                <a href="#">Link 3</a>
            </div>
        <a class="dropdown-btn" href="#contact">Search</a>
    </div>

<div class="main">
  <h2>Sidebar Dropdown</h2>
  <p>Click on the dropdown button to open the dropdown menu inside the side navigation.</p>
  <p>This sidebar is of full height (100%) and always shown.</p>
  <p>Some random text..</p>
</div>

<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");

for (var i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  
  var dropdownContent = this.nextElementSibling;
  if(dropdownContent.innerHTML.includes("href"))
  {
    if (dropdownContent.style.display === "block") 
    {
      dropdownContent.style.display = "none";
      this.children[0].classList.remove('fa-caret-up'); 
      this.children[0].classList.add('fa-caret-down'); 
    } 
    else
    {
      dropdownContent.style.display = "block";
      this.children[0].classList.remove('fa-caret-down'); 
      this.children[0].classList.add('fa-caret-up'); 
    }
  }
  });
}

</script>

@stop