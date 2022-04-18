<?php 

require_once('../../private/initialize.php');

?>

<?php $page_title = 'Create Salamander'; ?>
<?php include(SHARED_PATH . '/salamander-header.php'); ?>

  <a class="back-link" href="<?php echo url_for('/salamanders/index.php'); ?>">&laquo; Back to Salamanders</a>
    <h1>Create Salamander</h1>

    <form action="<?php echo url_for('/salamanders/create.php'); ?>" method="post">
      
        <label>Name:</label><br>
        <input type="text" name="name" value=""><br><br>
        <label for="habitat">Habitat:</label><br>
        <textarea name="habitat" id="habitat" value="" rows="4" cols="50"></textarea><br><br>
        <label for="description">Description:</label><br>
        <textarea name="description" id="description" value="" rows="4" cols="50"></textarea><br><br>
      
        <input type="submit" value="Create Salamander">
    </form>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>