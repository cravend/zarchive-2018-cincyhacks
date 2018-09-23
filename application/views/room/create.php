<div class="container">
  <h2 id="first">
    Create Room
  </h2>

  <form action="#" method="post">
    <div class="row">
      <div class="twelve columns">
        <label for="address">Address</label>
        <input class="u-full-width" type="text" placeholder="Address" id="address" name="address">
      </div>
    </div>
    <div class="row">
      <div class="four columns">
        <label for="city">City</label>
        <input class="u-full-width" type="text" placeholder="Mason" id="city" name="city">
      </div>
      <div class="four columns">
        <label for="state">State</label>
        <input class="u-full-width" type="text" placeholder="Ohio" id="state" name="state">
      </div>
      <div class="four columns">
        <label for="zip">Zip code</label>
        <input class="u-full-width" type="text" placeholder="45040" id="zip" name="zip">
      </div>
    </div>
    <div class="row">
      <div class="four columns">
        <label for="size">Number of Beds</label>
        <input class="u-full-width" type="text" placeholder="1" id="size" name="size">
      </div>
      <div class="four columns">
        <label for="pets">Pets Allowed?</label>
        <select class="u-full-width" id="pets" name="pets"> 
        <option value="1">Yes</option>
        <option value="0">No</option>
      </select>
      </div>
      <div class="four columns">
        <label for="time">Timeframe</label>
        <select class="u-full-width" id="time" name="time"> 
        <option value="0">One day</option>
        <option value="1">Short-term</option>
        <option value="2">Long-term</option>
      </select>
      </div>
    </div>
    <div class="row">
      <div class="twelve columns">
        <label for="image">Link to picture</label>
        <input type="text" name="image" id="image" class="u-full-width">
      </div>
    </div>
    <input class="button-primary" type="submit" value="Create Room">
  </form>
</div>
`
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$sql = "INSERT INTO room_info (id, ownerid, address, city, state, zip, beds, available, image, pets, length, timestamp) VALUES (".
  "NULL, ".
  $this->db->escape($_SESSION["user_id"]).", ".
  $this->db->escape($_POST['address']).", ".
  $this->db->escape($_POST['city']).", ".
  $this->db->escape($_POST['state']).", ".
  $this->db->escape($_POST['zip']).", ".
  $this->db->escape($_POST['size']).", ".
  "1,".
  $this->db->escape($_POST['image']).", ".
  $this->db->escape($_POST['pets']).", ".
  $this->db->escape($_POST['time']).", ".
  "NULL)";
$this->db->query($sql);
echo $this->db->affected_rows();
  echo "<script>window.location.href='/profile/'</script>";
}

?>