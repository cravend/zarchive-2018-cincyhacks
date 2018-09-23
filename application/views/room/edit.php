<div id="first" class="container">
  <h2>
    Edit Room
  </h2>
  <?php echo form_open("room/editComplete/$id", "id='roomEdit'") ?>
  <div class="row">
    <div class="twelve columns">
      <label for="address">Address</label>
      <input class="u-full-width" type="text" placeholder="Address" id="address" name="address" value="<?php echo $address; ?>">
    </div>
  </div>
  <div class="row">
    <div class="four columns">
      <label for="city">City</label>
      <input class="u-full-width" type="text" placeholder="Mason" id="city" name="city" value="<?php echo $city; ?>">
    </div>
    <div class="four columns">
      <label for="state">State</label>
      <input class="u-full-width" type="text" placeholder="Ohio" id="state" name="state" value="<?php echo $state; ?>">
    </div>
    <div class="four columns">
      <label for="zip">Zip code</label>
      <input class="u-full-width" type="text" placeholder="45040" id="zip" name="zip" value="<?php echo $zip; ?>">
    </div>
  </div>
  <div class="row">
    <div class="four columns">
      <label for="size">Number of Beds</label>
      <input class="u-full-width" type="text" placeholder="1" id="size" name="size" value="<?php echo $beds; ?>">
    </div>
    <div class="four columns">
      <label for="pets">Pets Allowed?</label>
      <select class="u-full-width" id="pets" name="pets"> 
        <option value="1" <?php if($pets == 1) { echo "selected"; } ?>>Yes</option>
        <option value="0" <?php if($pets == 0) { echo "selected"; } ?>>No</option>
      </select>
    </div>
    <div class="four columns">
      <label for="time">Timeframe</label>
      <select class="u-full-width" id="time" name="time"> 
        <option value="0" <?php if($length == 0) { echo "selected"; } ?>>One day</option>
        <option value="1" <?php if($length == 1) { echo "selected"; } ?>>Short-term</option>
        <option value="2" <?php if($length == 2) { echo "selected"; } ?>>Long-term</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="twelve columns">
      <label for="image">Link to picture</label>
      <input type="text" name="image" id="image" class="u-full-width" value="<?php echo $image; ?>">
    </div>
  </div>
  <input class="button-primary" type="submit" value="Update Room">
  </form>
</div>