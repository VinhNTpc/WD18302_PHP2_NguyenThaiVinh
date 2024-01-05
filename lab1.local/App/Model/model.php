<?php

// model
function get_courses(){
    include'data.php';
    return array_values($courses);
}
function get_by_semester($semester){
    include 'data.php';
    return (array_key_exists($semester, $courses) ? $courses[$semester] : 'Invalid courses');
}
?>