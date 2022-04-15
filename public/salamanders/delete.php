<?php
require_once('../../private/initialize.php');

$page_title = 'Delete Salamander';
include(SHARED_PATH . '../salamander-header.php');

if (!isset($_GET['id'])) {
  redirect_to(url_for('salamanders/index.php'));
}
$id = $_GET['id'];

if (is_post_request()) {
  delete_subject($id);
  redirect_to(url_for('salamanders/index.php'));
}

else {
  $salamanders = find_salamander_by_id($id);
}
?>

<?php $page_title = 'Delete Salamander'; ?>
<a class="back-link" href="<?php echo url_for('salamanders/index.php'); ?>">&laquo; Back to Salamanders</a>

<h1>Delete Salamander</h1>
<p>Are you sure you want to delete this salamander?</p>
<p class="item"><?php echo h($salamanders['name']); ?></p>

<form action="<?php echo url_for('salamanders/delete.php?id=' . h(u($salamanders['id']))); ?>" method="post">
  <input type="submit" value="Delete Salamander">
</form>

<?php include(SHARED_PATH . '../salamander-footer.php'); ?>