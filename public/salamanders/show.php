<?php require_once('../../private/initialize.php'); ?>

<?php
// $id = isset($_GET['id']) ? $_GET['id'] : '1';
$id = $_GET['id'] ?? '1'; // PHP > 7.0
?>

<?php 

$page_title = 'Salamander Details';
include(SHARED_PATH . '/salamander-header.php'); 

?>


<h2>Salamander Details</h2>
<p> Page ID: <?= h($id); ?></p>
<p><a class="back-link" href="<?php echo url_for('/salamanders/index.php'); ?>">&laquo; Back to List</a></p>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>
