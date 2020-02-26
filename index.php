<?php
require_once ("../crud/component.php");
require_once ("../crud/db.php");

Createdb();
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/1b3f5a09b7.js" crossorigin="anonymous"></script>
    <!-- custom stylesheet link -->
    <link rel="stylesheet" href="styles/styles.css">
    <title>BOOK STORE</title>
</head>
<body>
<main>
    <div class="container text-center">
        <h1 class="py-4 bg-dark text-light rounded"><i class="fas fa-swatchbook"> BOOK STORE</i></h1>

        <div class="d-flex justify-content-center">
            <form action="" method="post" class="w-50">
               <div class="pt-2">
                   <?php inputElement("<i class=\"fas fa-portrait\"></i>","ID","book_ID","")?>
               </div>
                <div class="pt-2">
                    <?php inputElement("<i class='fas fa-book'></i>","Book name","book_name","")?>
                </div>
                <div class="row pt-2">
                    <div class="col"><?php inputElement("<i class='fas fa-people-carry'></i>","Publisher","book_publisher","")?></div>
                    <div class="col"><?php inputElement("<i class='fas fa-dollar-sign'></i>","Price","book_price","")?></div>
                </div>
                <div class="d-flex justify-content-center">
                   <?php buttonElement("btn_create","btn btn-success","<i class=\"fas fa-plus\"></i>","create","data-toggle='tooltip' data-placement='bottom' title='Create'")?>
                   <?php buttonElement("btn_read","btn btn-primary","<i class=\"fas fa-sync\"></i>","read","data-toggle='tooltip' data-placement='bottom' title='Read'")?>
                   <?php buttonElement("btn_update","btn btn-light border","<i class=\"fas fa-pen-alt\"></i>","update","data-toggle='tooltip' data-placement='bottom' title='Update'")?>
                   <?php buttonElement("btn_delete","btn btn-danger","<i class=\"fas fa-trash-alt\"></i>", "Delete","data-toggle='tooltip' data-placement='bottom' title='Delete'")?>
                </div

            </form>
        </div>
        <!--Bootsrap table-->
        <div class="d-flex table-data">
            <table class="table table-stripped table-dark">
                <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Book Name</th>
                    <th>Publisher</th>
                    <th>Book Price</th>
                    <th>Edit</th>
                </tr>
                </thead>
                <tbody id="tbody">
                    <tr>
                        <td>1</td>
                        <td>Book Name</td>
                        <td>Daily Tuition</td>
                        <td>44.99</td>
                        <td><i class="fas fa-edit btnedit"></i></td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</main>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>