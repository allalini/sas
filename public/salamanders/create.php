<?php

require_once('../../private/initialize.php');

if(is_post_request()) {

// Handle form values sent by new.php

$salamander_name = $_POST['salamander_name'] ?? '';
$salamander_habitat = $_POST['salamander_habitat'] ?? '';
$salamander_description = $_POST['salamander_description'] ?? '';

$result = insert_salamander($salamander_name, $salamander_habitat, $salamander_description);
$new_id = mysqli_insert_id($db);
redirect_to(url_for('salamanders/show.php?id=' . $new_id));

} elseif(is_get_request()) {
  redirect_to(url_for('salamanders/new.php'));
}
?>
