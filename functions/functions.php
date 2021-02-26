<?php 
include 'database.php'; // combine database.php to functions.php
// in this file we wills start CRUD

function create($bname,$bgenre,$bauthor,$bdate){ // will add data to the database
    $conn = connection();
    $sql = "INSERT INTO books(book_name,book_genre,book_author,date_added)VALUES('$bname','$bgenre','$bauthor','$bdate')";
    $result  = $conn->query($sql); // query() executes/runs the sql code.

    if($result == TRUE ){
        echo "<div class = 'alert alert-success mt-3'>Book added successfully</div>";
    }else{
        die('ERRROR '.$conn->error);
    }

} 

function read(){ // will get data from the database
    $conn = connection();
    $sql = "SELECT * FROM books";
    $result = $conn->query($sql);

    if($result->num_rows > 0){ // checking how many data inside the database. if more than 0: execute/run the code inside if statement :データベース内のデータ数を確認します。 0より大きい場合：ifステートメント内のコードを実行/実行します
        $container = array(); //this will be the container of the data from the database : これは、データベースからのデータのコンテナになります
        while($row = $result->fetch_assoc()){ //$result->fetch_assoc() gets data from the database: and since its inside the while loop. fetch_assoc will repeat for a couple times depeding on the data from the database: データベースからデータを取得します。whileループ内にあるためです。 fetch_assocは、データベースからのデータに応じて数回繰り返されます
            $container[] = $row;
        }
        return $container;

    }else{ //if no data: display error
        die('ERROR: '.$conn->error);
    }

}

    function delete_book($id){
        $conn = connection();
        $sql = "DELETE FROM books WHERE book_id = '$id'";
        $result = $conn->query($sql);

        if($result == TRUE){
            header('location:read.php');
        }else{  
            echo die('ERROR: '.$conn->error);
        }
    }

    function update($id,$bname,$bgenre,$bauthor,$bdate){ // this is the update functionality
        $conn = connection();
        $sql ="UPDATE books SET book_name = '$bname',book_genre = '$bgenre',book_author='$bauthor',date_added = '$bdate' WHERE book_id = '$id'";

        $result = $conn->query($sql);

        if($result == TRUE){
            header('location:read.php');
        }else{  
            echo die('ERROR: '.$conn->error);
        }

    }


    




















?>