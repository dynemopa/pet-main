<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial;
  margin: 0;
}

* {
  box-sizing: border-box;
}

img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}
</style>

<body style="background-color: black">
  
    @foreach ($title as $value)
    @php 
        $str1  = str_replace("[","",$value->file->filenames);
        $str2  = str_replace("]","",$str1);
        $str3  = str_replace('"','',$str2);
        $str = explode(",",$str3);

    @endphp




<div class="container">
 
    @for ($x = 0; $x < count($str); $x++)
        <div class="mySlides">
           
            <div style="    padding-right: 100px;padding-left: 100px;">
                <img src="{{asset('uploads/students/'.$str[$x])}}" width="100%" height="400px"/>
            </div>
        </div>
    @endfor
    <a class="prev" onclick="plusSlides(-1)">???</a>
    <a class="next" onclick="plusSlides(1)">???</a>

    <div class="caption-container">
        <p id="caption"></p>
    </div>

  <div class="row">

    @for ($x = 0; $x < count($str); $x++)

    <div class="column">
      <img class="demo cursor"  src="{{asset('uploads/students/'.$str[$x])}}" style="width:100%;height:100px" onclick="currentSlide(<?php echo $x+1 ?>)" >
    </div>
    @endfor
   
    
  </div>
</div>
@endforeach
<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("demo");
  let captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
    
</body>
</html>
