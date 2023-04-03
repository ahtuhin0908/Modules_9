<!DOCTYPE html>
<html>
<head>
    <style>

div {
  position: absolute;
  left: 40px;
  top: 40px;
  width: 100px;
  height: 100px;
  background-color: lightgray;
}

.rotate {
  background-color: transparent;
  outline: 2px dashed;
  transform: rotate(45deg);
}

.rotate-translate {
  background-color: pink;
  transform: rotate(45deg) translateX(180px);
}

.translate-rotate {
  background-color: gold;
  transform: translateX(180px) rotate(45deg);
}
    
    </style>

</head>
<body>

    <div>Normal</div>
    <div class="rotate">Rotated</div>
    <div class="rotate-translate">Rotated + Translated</div>
    <div class="translate-rotate">Translated + Rotated</div>
</body>
</html>