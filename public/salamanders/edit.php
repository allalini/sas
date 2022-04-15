<?php

require_once('../../private/initialize.php');
$id = $_GET['id'];

$page_title = 'Edit Salamander';
include(SHARED_PATH . '/salamander-header.php');

if (is_post_request()) {
  $salamander = [];
  $salamander['id'] = $id;
  $salamander['name'] = $_POST['name'] ?? '';
  $salamander['habitat'] = $_POST['habitat'] ?? '';
  $salamander['description'] = $_POST['description'] ?? '';

  $result = update_salamander($salamander);
  redirect_to(url_for('salamanders/show.php?id=' . $id));

} else {
  $salamander = find_salamander_by_id($id);
}

?>

<a class="back-link" href="<?php echo url_for('salamanders/index.php'); ?>">&laquo; Back to List</a>

<h1>Edit Salamander</h1>

<form action="<?php echo url_for('salamanders/edit.php?id=' . h(u($id))); ?>" method="post">
  <label>Name:</label><br>
  <input type="text" name="name" value="<?= h($salamander['name']); ?>"><br><br>

  <label for="habitat">Habitat:</label><br>
  <textarea name="habitat" id="habitat" rows="4" cols="50"><?= h($salamander['habitat']); ?></textarea><br><br>

  <label for="description">Description:</label><br>
  <textarea name="description" id="description" rows="4" cols="50"><?= h($salamander['description']); ?></textarea><br><br>

  <input type="submit" value="Edit Salamander">
</form>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>