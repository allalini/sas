<?php

require_once('../../private/initialize.php');

if (is_post_request()) {

  $salamander['name'] = $_POST['name'] ?? '';
  $salamander['habitat'] = $_POST['habitat'] ?? '';
  $salamander['description'] = $_POST['description'] ?? '';

  $result = insert_salamander($salamander);
  if ($result === true) {
    $new_id = mysqli_insert_id($db);
    redirect_to(url_for('salamanders/show.php?id=' . $new_id));
  } else {
    $errors = $result;
  }
}
?>

<?php $page_title = 'Create Salamander'; ?>
<?php include(SHARED_PATH . '/salamander-header.php'); ?>

<a class="back-link" href="<?php echo url_for('/salamanders/index.php'); ?>">&laquo; Back to Salamanders</a>
<h1>Create Salamander</h1>

<?php echo display_errors($errors); ?>
<form action="<?php echo url_for('/salamanders/new.php'); ?>" method="post">

  <label>Name:</label><br>
  <input type="text" name="name" value=""><br><br>
  <label for="habitat">Habitat:</label><br>
  <textarea name="habitat" id="habitat" value="" rows="4" cols="50"></textarea><br><br>
  <label for="description">Description:</label><br>
  <textarea name="description" id="description" value="" rows="4" cols="50"></textarea><br><br>

  <input type="submit" value="Create Salamander">
</form>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>