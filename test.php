<!DOCTYPE html>
<html>
<head>
<style> 
#myDIV {
  margin: auto;
  border: 1px solid black;
  width: 200px;
  height: 100px;
  background-color: coral;
  color: white;
  animation: mymove 5s infinite;
}

@keyframes mymove {
  50% {transform: rotate(360deg);}
}
</style>
</head>
<body>

<h1>keyframe Animation</h1>

<p>Gradually rotate the DIV element 360 degrees, and back:<p>

<div id="myDIV">
  <h1>Akter</h1>
</div>

</body>
</html>