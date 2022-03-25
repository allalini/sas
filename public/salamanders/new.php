<?php 

require_once('../../private/initialize.php');

$test = $_GET['test'] ?? '';

if ($test == '404') {
  error_404();
} elseif ($test == '500') {
  error_500();
} elseif($test == 'redirect') {
  redirect_to(url_for('salamanders/index.php'));
}
?>

<?php $page_title = 'Create Salamander'; ?>
<?php include(SHARED_PATH . '../salamander-header.php'); ?>

  <a class="back-link" href="<?php echo url_for('/salamanders/index.php'); ?>">&laquo; Back to List</a>
    <h1>Create Salamander</h1>

    <form action="<?php echo url_for('/salamanders/create.php'); ?>" method="post">
      <dl>
        <dt>Salamander Name</dt>
        <dd><input type="text" name="salamander_name" value=""></dd>
      </dl>
        <input type="submit" value="Create Salamander">
    </form>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>