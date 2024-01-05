<?php

include 'model.php';

//controller
$list_of_courses = get_courses();
$semester = (!empty($_GET['semester']) ? $_GET['semester']:'');
$courses_name = find_by_semesters($semester);
$page_content = $courses_name;

include 'view.php'
?>