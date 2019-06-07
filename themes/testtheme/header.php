<?php
    if(!session_id())
        session_start();
?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
        <title>Test login site</title>

        <?php wp_head(); ?>
    </head>

    <body>
        <header>
            <div>
                <p>This is a header for the page</p>
            </div>
        </header>