<?php
  $roomAddress = "3746 Drake Ave";
  $roomCity = "Cincinnati";
  $roomState = "OH";
  $roomZip = "45209";
  $bedsAvailable = 1;
  $pets = false;
  $stayLength = "Long";
  $roomOwner = "Richard Ealy";
  $roomDescription = "Richard Ealy is a retired plant manager from Mercy hospital. He enjoys helping local youth and is kind enough to donate his extra room to people who have been displaced from their homes.";
?>
</div>
<html>
<head>
  <style>
    .roomTitle {
      
    }
    .roomLocation {
      
    }
    .ownerImage {
      border-radius: 0%;
    }
    .u-full-width {
      width: 100%;
      box-sizing: border-box; }
    .u-max-full-width {
      max-width: 100%;
      box-sizing: border-box; }
    .u-pull-right {
      float: right; }
    .u-pull-left {
      float: left; }
  </style>
</head>
<body>
  <img id="roomImage" class="roomImage image-full-width" src="/assets/images/room1_cropped.jpg" />
  <div class="container">
    <div class="row">
      <div class="twelve columns" style="text-align: center;">
        <h2 class="roomTitle" style="margin-bottom: 0">
          <?php echo $roomAddress; ?>
        </h2>
        <h3 class="roomLocation">
          <?php echo $roomCity; echo ", "; echo $roomState; echo " "; echo $roomZip; echo " • "; echo $roomOwner?>
        </h3>
      </div>
    </div>
    <div class="row">
      <div class="four columns">
        <p style="margin-bottom: 0;">
          <b>Beds available: </b> <?php echo $bedsAvailable;?>
        </p>
        <p style="margin-bottom: 0;">
          <b>Pets:</b>
        </p>
        <p>
          <b>Time available: </b> <?php echo $stayLength; ?>
        </p>
        <button value="Book now"class="button-primary" <?php if($bedsAvailable == 0){?> disabled <?php }?>>
        </button>
      </div>
      <div class="eight columns">
        <img class="owner-image" src="/assets/images/owners/richard.jpg" />
        <?php echo $roomDescription;?>
        <button class="button-primary">
          Contact
        </button>
      </div>
    </div>
  </div>
</body>
</html>