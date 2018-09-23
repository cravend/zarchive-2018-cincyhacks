<?php
  $query = $this->db->query('SELECT * FROM room_info WHERE id=' . $id . ' LIMIT 1');
  $row = $query->row();
  
  $id = $row->id;
  $owner = $row->ownerid;
  $address =  $row->address;
  $city = $row->city;
  $state =  $row->state;
  $zip =  $row->zip;
  $beds =  $row->beds;
  $available = $row->available;
  $image = $row->image;
  $pets = $row->pets;
  $stay_length = $row->length;

  $query = $this->db->query('SELECT email, first_name, last_name, image, bio FROM users WHERE id=' . $owner . ' LIMIT 1');
  $host = $query->row();
  $host_name = $host->first_name . " " . $host->last_name;
  $host_email = $host->email;
  $host_image = $host->image;
  $host_bio = $host->bio;

?>
  <div id="first" class="row">
    <div class="offset-by-three six columns">
      <img class="u-full-width" src="<?php echo $image;?>">
    </div>
  </div>
  <div class="color">
    <div class="container">
      <div class="row">
        <div class="twelve columns">
          <h1>
            <?php echo $address; ?>
          </h1>
          <h3>
            <?php echo $city . ", " . $state . " " . $zip . "&nbsp;&bull;&nbsp;" . $host_name ?>
          </h3>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="offset-by-one three columns">
        <?php 
            if($available !== 0)
            {
              echo "<button class='button-primary u-full-width' onclick='booked();'>Book now</button>";
            }
            else
            {
              echo "<button class='button u-full-width' style='color: #888;' disabled id='bookButton'>Book now</button>";
              echo "<style>#bookButton:hover {border-color: #bbb;}</style>";
            }
          ?>
        <p>
          <b>Beds available: </b>
          <?php echo $beds;?>
        </p>
        <p>
          <b>Pets allowed: </b>
          <?php echo ($pets ? "yes" : "no"); ?>
        </p>
        <p>
          <b>Length of stay: </b>
          <?php 
              if ($stay_length == 0) {
                echo "One day";
              } elseif ($stay_length == 1) {
                echo "Short-term";
              } else {
                echo "Long-term";
              }            
            ?>
        </p>
      </div>
      <div class="three columns" style="text-align: center">
        <img class="owner-image" src="<?php echo $host_image; ?>" />
        <h4>
          <?php echo $host_name; ?>
        </h4>
      </div>
      <div class="five columns">
        <a class="button button-primary u-full-width" href="mailto:<?php echo $host_email; ?>">Email</a>
        <p>
          <?php echo $host_bio; ?>
        </p>
      </div>
    </div>

    <div class="row">
    </div>
  </div>

  <script>
    function booked() {
      window.location.href = "http://carebnb-20dalton00282476.codeanyapp.com/room/book/<?php echo $id; ?>";
    }
  </script>
