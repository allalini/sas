<?php require_once('../../private/initialize.php'); ?>

<?php
  $salamanders = [
    ['id' => '1',  'salamanderName' => 'Red-Legged Salamander'],
    ['id' => '2',  'salamanderName' => 'Pigeon Mountain Salamander'],
    ['id' => '3',  'salamanderName' => 'ZigZag Salamander'],
    ['id' => '4',  'salamanderName' => 'Slimy Salamander'],
  ];
?>

<?php 

$page_title = 'Salamanders'; 
include(SHARED_PATH . '/salamander-header.php'); 

?>

<div id="content">
  <div class="pages listing">
    <h1>Salamanders</h1>

    <div class="actions">
      <a class="action" href="">Create Salamander</a>
    </div>

  	<table class="list">
  	  <tr>
        <th>ID</th>
  	    <th>Name</th>
  	    <th>&nbsp;</th>
  	    <th>&nbsp;</th>
        <th>&nbsp;</th>
  	  </tr>

      <?php foreach($salamanders as $salamander) { ?>
        <tr>
          <td><?= h($salamander['id']); ?></td>
    	    <td><?= h($salamander['salamanderName']); ?></td>
          <td><a class="action" href="<?= url_for('salamanders/show.php?id=' . h(u($salamander['id']))); ?>">View</a></td>
          <td><a class="action" href="">Edit</a></td>
          <td><a class="action" href="">Delete</a></td>
    	  </tr>
      <?php } ?>
  	</table>

  </div>

</div>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>
