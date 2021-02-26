<?php
include 'functions/functions.php';
$book_id = $_GET['book_id'];

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
            <div class="card mt-5 w-50 mx-auto">
                <div class="card-header bg-info text-light">
                    <p class="lead text-center">
                       Update a book
                    </p>
                </div>
                <div class="card-body">
                        <form action="" method="post">
                            <input type="text" name="b_name" class="form-control mt-3" id="" placeholder="ADD BOOK NAME">
                            <br>
                            <input type="text" name="b_genre" class="form-control mt-3" id="" placeholder="ADD BOOK GENRE">
                            <br>
                            <input type="text" name="b_author" class="form-control mt-3" id="" placeholder="ADD BOOK AUTHOR">
                            <br>
                            <input type="date" name="b_added_date" class="form-control mt-3" id="">
                            <br>
                            <button type="submit" class="btn btn-info mt-3" name="update_book">Save Book</button>
                        </form>
                        <?php
                            if(isset($_POST['update_book'])){
                                $b_name = $_POST['b_name'];
                                $b_genre = $_POST['b_genre'];
                                $b_author = $_POST['b_author'];
                                $b_added_date = $_POST['b_added_date'];

                                update($book_id,$b_name,$b_genre,$b_author,$b_added_date);
                            }

                        ?>
                </div>
                <div class="card-footer">
                    <a href="read.php" class="card-link">Display Book</a>
                </div>
            </div>
        </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>