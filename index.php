<?php
require "inc/init.php";
$conn = require('inc/db.php');

$books = Book::getAllBooks($conn);
// print_r($books);

require "inc/header.php";
?>

<div class="content">
  <table>
    <thead>
      <tr>
        <th>No.</th>
        <th>Title</th>
        <th>Description</th>
        <th>Author</th>
        <th>Image</th>
      </tr>
    </thead>

    <tbody>
      <?php static $i = 1; ?>
      <?php foreach ($books as $book) : ?>
        <tr>
          <td><?php echo $i++ ?></td>
          <td><?php echo $book->title ?></td>
          <td><?php echo $book->description ?></td>
          <td><?php echo $book->author ?></td>
          <td><?php echo $book->imagefile ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>

    <tfoot>
      <tr>
        <th colspan="3">Totals</th>
        <th colspan="2"><?php echo count($books) ?></th>
      </tr>
    </tfoot>
  </table>
</div>

<?php require "inc/footer.php"; ?>