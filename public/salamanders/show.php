<?php require_once('../../private/initialize.php'); 

$id = $_GET['id'] ?? '1';
$page_title = 'Salamander Details';
include(SHARED_PATH . '/salamander-header.php'); 

$salamander = find_salamander_by_id($id);
?>

<div class="attributes">
  <dl>
    <dt>Name</dt>
    <dd><?php echo h($salamander['name']); ?></dd>
  </dl>
  <dl>
    <dt>Habitat</dt>
    <dd><?php echo h($subject['habitat']); ?></dd>
  </dl>
  <dl>
    <dt>Description</dt>
    <dd><?php echo h($subject['description']); ?></dd>
  </dl>
</div>


<h2>Salamander Details</h2>

<p>Page ID: <?=h($id)?></p>
<p><a class="action" href="<?= url_for('salamanders/index.php')?>">&laquo; Back to Salamander List</a></p>
<?php include(SHARED_PATH . '/salamander-footer.php'); ?>
