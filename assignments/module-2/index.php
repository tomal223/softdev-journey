<?php 

// Commission Calculator using ternery operator

$tutionFee = 3000;

$tutionCommission = (20000 < $tutionFee) ? 25 / 100 * $tutionFee : ((20000 > $tutionFee && 10000 < $tutionFee) ? 20 / 100 * $tutionFee : ((10000 > $tutionFee && 7000 < $tutionFee) ? 15 / 100 * $tutionFee : ((7000 > $tutionFee) ? "Invalid" : "Insert a Valid Info")));
 
if($tutionCommission != "Invalid"){ 
    echo "The Commission is: $".$tutionCommission;
} else {
    echo $tutionCommission;
} 


echo "<br/>";
$x = 5;
echo $x;
echo "\n";
echo "<br/>";
echo  ++$x    ;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #slider {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 400px;
}

#image {
  height: 80%;
  object-fit: cover;
}

button {
  background-color: rgba(255, 255, 255, 0.7);
  border: none;
  border-radius: 5px;
  color: #333;
  cursor: pointer;
  font-size: 1.2rem;
  padding: 10px 20px;
  transition: all 0.2s ease-in-out;
}

button:hover {
  background-color: #333;
  color: #fff;
}

    </style>
</head>
<body>

<div id="slider">
  <img src="image1.jpg" id="image">
  <button id="prevBtn">Previous</button>
  <button id="nextBtn">Next</button>
</div>

<script>
const images = ["image1.jpg", "image2.jpg", "image3.jpg", "image4.jpg"];
let currentImageIndex = 0;
const image = document.querySelector("#image");
const prevBtn = document.querySelector("#prevBtn");
const nextBtn = document.querySelector("#nextBtn");

prevBtn.addEventListener("click", function() {
  currentImageIndex--;
  if (currentImageIndex < 0) {
    currentImageIndex = images.length - 1;
  }
  image.src = images[currentImageIndex];
});

nextBtn.addEventListener("click", function() {
  currentImageIndex++;
  if (currentImageIndex >= images.length) {
    currentImageIndex = 0;
  }
  image.src = images[currentImageIndex];
});
</script>

    
</body>
</html>