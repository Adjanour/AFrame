<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>3D Array Visualization</title>
  <script src="./script/aframe.js"></script>
</head>
<body>
  <a-scene>
    <a-camera position="0 5 5" look-controls></a-camera>

    <script>
      const arr = [[[2, 2, 2], [4, 5, 6]],
      [[1, 2, 3], [4, 5, 6]],
      [[1, 2, 3], [4, 5, 6]],
      [[1, 2, 3], [4, 5, 6]],
      [[1, 2, 3], [4, 5, 6]]
    ]; // Example data

      for (let i = 0; i < arr.length; i++) {
        for (let j = 0; j < arr[i].length; j++) {
          for (let k = 0; k < arr[i][j].length; k++) {
            // Create a box at each coordinate
            const box = document.createElement('a-box');
            box.setAttribute('position', `${i - 1.5} ${j - 0.5} ${k - 1.5}`); // Center boxes
            box.setAttribute('width', 0.3);
            box.setAttribute('height', 0.3);
            box.setAttribute('depth', 0.3);
            box.setAttribute('color', `hsl(${arr[i][j][k]}, 100%, 50%)`); // Color based on value
            document.querySelector('a-scene').appendChild(box);
          }
        }
      }
    </script>

    <a-sky color="#ECECEC"></a-sky>
    <a-light type="ambient" intensity="0.4"></a-light>
  </a-scene>
</body>
</html>
