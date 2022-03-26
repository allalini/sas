<?php

require_once('../../private/initialize.php');

$page_title = 'Edit Salamander';
include(SHARED_PATH . '/salamander-header.php');
?>

  <a class="back-link" href="<?php echo url_for('/salamanders/index.php'); ?>">&laquo; Back to List</a>

  <h1>Edit Salamander</h1>

  <form action="" method="post">
    <dl>
      <dt>Salamander Name</dt>
      <dd><input type="text" name="salamander_name" value=""></dd>
    </dl>
    <dl>
      <dt>Position</dt>
      <dd>
        <select name="position">
          <option value="1">1</option>
        </select>
      </dd>
    </dl>
    <dl>
      <dt>Visible</dt>
      <dd>
        <input type="hidden" name="visible" value="0">
        <input type="checkbox" name="visible" value="1">
      </dd>
    </dl>
    <div id="operations">
      <input type="submit" value="Edit Salamander">
    </div>
  </form>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>