<div class="container" id="first">

  <h2 style="text-align: center;">
    Your Profile
  </h2>

  <?php echo form_open("profile/update", "id='profileUpdate'") ?>
  <div class="row">
    <div class="six columns">
      <label for="exampleEmailInput">Your email</label>
      <input class="u-full-width" type="email" id="emailInput" name="email" required value="<?php echo $email; ?>">
    </div>
    <div class="six columns">
      <label for="exampleRecipientInput">Password</label>
      <input class="u-full-width" type="password" id="passwordInput" name="password" required value="<?php echo $password; ?>">
    </div>
  </div>
  <div class="row">
    <div class="six columns">
      <label for="exampleEmailInput">First Name</label>
      <input class="u-full-width" type="text" id="firstNameInput" name="firstName" required value="<?php echo $first_name; ?>">
    </div>
    <div class="six columns">
      <label for="exampleRecipientInput">Last Name</label>
      <input class="u-full-width" type="text" id="lastNameInput" name="lastName" required value="<?php echo $last_name; ?>">
    </div>
  </div>
  <div class="row">
    <div class="six columns">
      <label for="exampleEmailInput">Birthday</label>
      <input class="u-full-width" type="date" id="birthdayInput" name="birthday" required value="<?php echo $birthday; ?>">
    </div>
    <div class="six columns">
      <label for="type">Type</label>
      <select class="u-full-width" id="typeInput" name="type" required>
          <option value="" disabled>Select Below</option>
          <option value="host" <?php if($type == "host") { echo "selected"; } ?>>Host</option>
          <option value="guest" <?php if($type == "guest") { echo "selected"; } ?>>Guest</option>
        </select>
    </div>
  </div>
  <div class="row">
    <div class="twelve columns">
      <label for="exampleEmailInput">Profile Picture URL</label>
      <input class="u-full-width" type="text" id="imageInput" name="image" required value="<?php echo $image; ?>">
    </div>
  </div>
  <div class="row">
    <div class="twelve columns">
      <label for="exampleEmailInput">Bio</label>
      <textarea class="u-full-width" type="text" id="bioInput" name="bio" required style="resize: vertical;"><?php echo $bio; ?></textarea>
    </div>
  </div>
  <input class="button-primary" type="submit" value="Update Profile">
  <a href="/profile/logout" class="button">Log Out</a>
  </form>
  <div>
    <?php if($type == "host"): ?>
    <h2 style="display: inline;">Your Listed Rooms</h2>
    <a href="/room/create" class="button button-primary" style="margin-top: 1em; float: right;">Create Room</a>
    <?php endif ?>

    <?php if($type == "guest"): ?>
    <h2 style="display: inline;">Your Booked Rooms</h2>
    <?php endif ?>
  </div>
  <?php
  if($type == "host")
  {
    $this->db->where("ownerid", $id);
  }
  else
  {
    $this->db->where("guestid", $id);
  }
  $query = $this->db->get("room_info");
  echo '<div class="row">';
  $icount = 1;
  foreach ($query->result() as $row)
  {
    ?>
    <div class="four columns">
        <div class="card" id="<?php echo $row->id; ?>">
          <img src="<?php echo $row->image; ?>" onclick="roomView(this);"/>
          <div class="card-container">
            <h4 onclick="roomView(this);"><?php echo $row->address; ?></h4>
            <p onclick="roomView(this);"><?php echo $row->beds; ?> Beds</p>
            <?php if($type == "host"): ?>
            <button class="button-primary" onclick="roomEdit(this);">Edit</button>
            <button class="button" onclick="roomDelete(this);">Delete</button>
            <?php endif ?>
            
            <?php if($type == "guest"): ?>
            <button class="button-primary" onclick="roomView(this);">View</button>
            <?php endif ?>
          </div>
        </div>
    </div>
    <?php
    if (($icount % 3) == 0) {
      echo '</div><div class="row">';
    }
    $icount++;
  }
    echo '</div>'
  ?>

  <style>
    .card:hover {
      cursor: pointer;
    }
  </style>
      <script>
        function roomEdit(e) {
          var id = e.parentElement.parentElement.id;
            window.location.href = "/room/edit/" + id;
        }

        function roomDelete(e) {
          var address = e.parentElement.children[0].innerHTML;
          var id = e.parentElement.parentElement.id;
          var c = confirm("Are you sure you want to delete " + address + "?");
          if (c == true) {
            window.location.href = "/room/delete/" + id;
          }
        }

        function roomView(e) {
          var id = e.parentElement;
          if (id.className == "card-container") {
            id = id.parentElement;
          }
          id = id.id;

            window.location.href = "/room/view/" + id;
        }
      </script>
</div>