<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Heirloom Library add product</title>

</head>

<?php
    $book_isbn = $title = $book_price = $copywrite = $inv_date = NULL;

    // only allows you to add a product depending on your login cridentials
    if (ISSET($_SESSION['login_status']))
    {
        echo "<br>";
        echo "<form action='' method='POST'>";

        echo "<br> Enter the book ISBN";
        echo "&nbsp";
        echo "<input style='margin-left:5px' type='number' name='ISBN' value='$book_isbn'>";

        echo "<br> Enter the book Title";
        echo "<input style='margin-left:5px' type='text' name='Title' value='$title'>";

        echo "<br> Enter the book Price";
        echo "<input type='number' name='Price' value='$book_price'>";

        echo "<br> Select the book condition <select name='Condition'>";
        echo " <option value='Unused'> Unused </option>";
        echo " <option value='Excellent'> Excellent </option";
        echo " <option value='Good'> Good </option>";
        echo " <option value='Okay'> Okay </option>";
        echo " <option value='Poor'> Poor </option>";

        echo "<br> Enter the book's Copywrite";
        echo "<input type='text' name='Copywrite' value='$copywrite'>";

        echo "<br> Enter the inventory Date";
        echo "<input type='date' name='inventory date' value='$inv_date'>";

        echo "<br> Select the seller status <select name='Status'>";
        echo " <option value='Active'> Active </option>";
        echo " <option value='Deactive'> Deactive </option";

        echo "<br><br> <input type='submit' value='Submit!'>";
        echo "</form>";

    }
    echo "<br><br><br><br>";
?>