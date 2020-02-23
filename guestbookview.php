<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href = "style.css" type="text/css" rel="stylesheet"/>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" type="text/css"
          rel="stylesheet"/>

    <title>Guest Book</title>

</head>
<body>
<section class="px-2">
    <h1>Welcome to the Guest Book</h1>
    <form action="#"  method="post">
        <fieldset>
            <legend>Entry</legend>

            <div class="form-row mx-2">
                <div class="form-group col-md-6 mx-2">
                    <label for="title">Title:</label>
                    <?php

                    ?>
                    <input type="text" name="title" id="title" value="<?php  ?>" class="form-control"/>
                    <?php  ?>
                </div>
                <div class="form-group col-md-6 mx-2">
                    <label for="name">Date:</label>
                    <?php

                    ?>
                    <input type="text" id="date" name="date" value="<?php  ?>" class="form-control">
                    <?php  ?>
                </div>
                <div class="form-group col-md-6 mx-2">
                    <label for="content">Content:</label>
                    <?php

                    ?>
                    <input type="text" id="content" name="content" value="<?php ?>" class="form-control">
                    <?php  ?>
                </div>
                <div class="form-group col-md-6 mx-2">
                    <label for="name">Name:</label>
                    <?php

                    ?>
                    <input type="text" id="name" name="name" value="<?php  ?>" class="form-control">
                    <?php
                    ?>
                </div>
                <p>
                    <?php
                    //here perhaps read the json and display it on the page


/*                    $testentry = new Post();
                    $testentry->get_entries();
                    $testentry->arrayInArray();*/

                    //those two should move to guestbook
                    // listen to the post of the page and add it to all the posts in the guestbook
                    // then save to the json
                    if (!empty($_POST['title'])){
                        $newPost = new Post($_POST['title'], date("d/m/Y"), $_POST['content'], $_POST['name']);
                        $newPost->get_entries();
                        $newPost->showPost();


                    $entry = new GuestBook();
                    $entry->readData();
                    $entry->displayData();
                    $entry->writeData($newPost);
                    $entry-> getPosts();

                    }

                    ?></p>
                <button name = "send" type="submit" class="btn btn-primary mx-2">Add My Entry</button>
            </div>
        </fieldset>

<?php
