<div class="container" id="first">
  <h1>Room Listings</h1>
<?php
$query = $this->db->query('SELECT id, address, beds, available, image FROM room_info WHERE available = "1"');
echo '<div class="row">';
$icount = 1;
foreach ($query->result() as $row)
{
  ?>
  <div class="four columns">
    <a href="/room/view/<?php echo $row->id; ?>">
      <div class="card" id="<?php echo $row->id; ?>">
        <img src="<?php echo $row->image; ?>" />
        <div class="card-container">
          <h4><?php echo $row->address; ?></h4>
          <p><?php echo $row->beds; ?> Beds</p>
          <button class="button-primary">View</button>
        </div>
      </div>
    </a>  
  </div>
<?php
  if (($icount % 3) == 0) {
    echo '</div><div class="row">';
  }
  $icount++;
}
?>
</div>
</div>