<?php
require_once "../config/connection.php";

if (isset($_POST['add'])) {
    addStudent($_POST['name'], $_POST['course'], $_POST['year_level']);
    header("Location: ../view/index.php");
    exit();
}

if (isset($_POST['update'])) {
    updateStudent($_POST['id'], $_POST['name'], $_POST['course'], $_POST['year_level']);
    header("Location: ../view/index.php");
    exit();
}

if (isset($_GET['delete'])) {
    deleteStudent($_GET['delete']);
    header("Location: ../view/index.php");
    exit();
}
?>