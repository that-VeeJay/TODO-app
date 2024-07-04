<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Javascript -->
    <script src="js/script.js" defer></script>
    <title><?= getPageTitle(); ?></title>
</head>

<?php
// Sets title based on file name
function getPageTitle()
{
    $uri = $_SERVER["REQUEST_URI"];
    $uri = ltrim($uri, '/');
    $uri = str_replace('.php', '', $uri);
    $uri = ucfirst($uri);
    return $uri ?: 'Home';
}
?>