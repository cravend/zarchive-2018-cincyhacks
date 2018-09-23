<?php
  $roomName = "ROOM"; 
  $roomLocation = "Cincinnati";
?>
<html>
<head>
  <style>
    #button {
      background-color: #f03c3c;
      border-radius: 20%;
      border-width: 0;
      color: white;
      padding: 10;
      display: inline;
    }
    #roomTitle {
      margin-bottom: 0;
      display: inline;
    }
    #roomLocation {
      margin-top:0;
    }
  </style>
</head>
<body>
  <h1 id="roomTitle">
    <?php echo $roomName; ?>
  </h1>
  <h4 id="roomLocation">
    <?php echo $roomLocation; ?>
  </h2>
  <button id="button">
    Book now
  </button>
</body>
</html>