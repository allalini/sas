<?php require_once('../../private/initialize.php'); ?>

<?php
$id = $_GET['id'] ?? '1';
$page_title = 'Salamander Details';
include(SHARED_PATH . '/salamander-header.php');

$salamander = find_salamander_by_id($id);
?>

<h1>Salamander Details</h1>

  <p><strong>ID: </strong><?php echo h($salamander['id']); ?></p>
  <p><strong>Name: </strong><?php echo h($salamander['name']); ?></p>
  <p><strong>Habitat: </strong><?php echo h($salamander['habitat']); ?></p>
  <p><strong>Description: </strong><?php echo h($salamander['description']); ?></p>

<p>Page ID: <?= h($id) ?></p>
<p><a class="action" href="<?= url_for('salamanders/index.php') ?>">&laquo; Back to Salamander List</a></p>
<?php include(SHARED_PATH . '/salamander-footer.php'); ?>