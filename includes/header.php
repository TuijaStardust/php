<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$pagetitle; ?></title>
</head>
<body>

    <header>
        <h1><?= $pagetitle; ?></h1>
    </header>

<p class="date"><?= $creation_date; ?> / Notes by Tuija Stardust</p>

<?php
if ($edit_date !== null) {
    echo "<p class=\"date\">Last edited ".$edit_date."</p>";
}?>

<hr>

    </main>