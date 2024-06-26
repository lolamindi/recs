<?php

use Controller\BooksController;

require_once __DIR__ . "../../../vendor/autoload.php";

$singleBook = new BooksController();

$bookId = $_GET['id'];
$bookController = new BooksController();
$book = $bookController->getBookDetails($bookId);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Recs. </title>
    <link rel="stylesheet" href="../../resources/styles.css">
    <link rel="icon" type="image/png" href="../../resources/img/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    body {
      background-color: #FFFFFF;
    }
    </style>
  
</head>
  <body class="custom-bd">
  <header class="my-3 mx-5 d-flex justify-content-between align-items-center">
        <a href="../../index.php">
        </a>
        <div class="form-inline mb-3 d-flex justify-content-around align-items-center">
            <a href="../../index.php" class="btn btn-primary ml-2 secondary-button me-2">Back ➜</a>
        </div>
    </header>
    <main class="container">
      <article class="d-flex justify-content-center align-items-center flex-column">
        <img src="data:image/jpeg;base64,<?=base64_encode($book['image']) ?>" alt="Book cover image" class="img-fluid w-20 h-40 m-4">
        <h3 class="custom-blue-text mt-4"><?= $book["title"];?></h3>
        <h4 class="custom-blue-text mt-3"><?= $book["author"];?></h4>
        <p class="paragraph-text mt-3 text-center" style="width: 50%;"><?= $book["description"];?></p>
      </article>
    </main>
  
    <?php
    ?>



