<?php include './inc/header.php' ?>

<?php
  $feedback = [
    [
      'id' => '1',
      'name' => 'John Canty',
      'email' => 'johncanty87@icloud.com',
      'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
      molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
      numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
      optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
      obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam
      nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,
      tenetur error, harum nesciunt ipsum debitis quas aliquid.'
    ],[
      'id' => '2',
      'name' => 'Marissa Vargas',
      'email' => 'mvargas234@outlook.com',
      'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
      molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
      numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
      optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
      obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam
      nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,
      tenetur error, harum nesciunt ipsum debitis quas aliquid.'
    ],[
      'id' => '3',
      'name' => 'Tim Curton',
      'email' => 'timmyc20@hotmail.com',
      'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
      molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
      numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
      optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
      obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam
      nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,
      tenetur error, harum nesciunt ipsum debitis quas aliquid.'
    ]
  ]
?>

<h2>Feedback</h2>

<?php if (empty($feedback)): ?>
  <p class="lead mt-3">No feedback left behind.</p>
<?php endif; ?>

<?php foreach($feedback as $item): ?>
<div class="card my-3">
  <div class="card-body">
    <?php echo $item['body'] ?>
  </div>
</div>
<?php endforeach; ?>

<?php include './inc/footer.php'; ?>