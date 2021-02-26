<?php
include 'functions/functions.php';
$booklist  = read();
// echo "<pre>";
// print_r($booklist);
// echo "</pre>";
?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div class="container">
            <table class="table mt-5 table-bordered">
                <thead>
                    <tr>
                        <th>Book ID</th>
                        <th>Book Name</th>
                        <th>Book Genre</th>
                        <th>Book Author</th>
                        <th>Date Added</th>
                        <th colspan="3">Options</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($booklist as $row){ 
                        $primaryKey = $row['book_id'];
                        ?>
                        <tr>
                            <td><?php echo $row['book_id'] ?></td>
                            <td><?php echo $row['book_name'] ?></td>
                            <td><?php echo $row['book_genre'] ?></td>
                            <td><?php echo $row['book_author'] ?></td>
                            <td><?php echo $row['date_added'] ?></td>
                            <td><a href="update.php?book_id=<?php echo $primaryKey ?>" class="btn btn-outline-info">Update book</a></td>
                            <td><a href="delete.php?book_id=<?php echo $primaryKey ?>" class="btn btn-outline-danger">Delete book</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <br>
            <a href="create.php">Add Books Here</a>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>