<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'post';
$con = mysqli_connect($hostname, $username, $password, $dbname);
function AddPost($title, $addpost)
{
    //$con = mysqli_connect('localhost', 'root', '', 'post');
    $query = "INSERT INTO `posts`(`title`, `post`) VALUES ('$title','$addpost')";
    mysqli_query($GLOBALS['con'], $query);
}
function showPost()
{
    $con = mysqli_connect('localhost', 'root', '', 'post');
    $query = "SELECT * FROM `posts`";
    return mysqli_query($GLOBALS['con'], $query);
}
