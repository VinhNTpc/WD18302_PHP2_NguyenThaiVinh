<?php
echo "PC03157 - Lab 1.1 <br>";

$courses =[
    's1' => 'lập trình php1',
    's2' => 'lập trình php2',
    's3' => 'lập trình php3',
];

/**
 * 
 *Hàm này dùng để lấy ra
 * @return array
 */
function get_courses(){
    global $courses;

    return array_values($courses);
}
var_dump(get_courses());

/**
 * Undocumented function
 *
 * Hàm này kiểm tra khóa học
 * 
 * @return string
 */
function find_by_block($s1){
    global $courses;

    return array_key_exists($s1, $courses)? $courses[$s1]: "Invalid Course";
}
$list_of_courses = get_courses();

$s1 = (!empty($_GET['s1'])) ? $_GET['s1']:'';

$courses_name = find_by_block($s1);

// Khởi tạo kết nối đến cơ sở dữ liệu
$dbConnection = new PDO('mysql:host=localhost;dbname=lab1_php2', 'username', 'password');

// Tạo đối tượng UserModel và UserController
$userModel = new UserModel($dbConnection);
$userController = new UserController($userModel);

// Xử lý yêu cầu để lấy danh sách người dùng
$userController->getUsers();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 1.1</title>
</head>
<body>
<h1> <?= $courses_name?></h1>

    <form action="">
       
        <select name="s1" id="">
           <?php foreach($courses as $key => $value):  ?>
                <option value="<?= $key?>"><?= $value ?></option>
            <?php endforeach; ?>
        </select>

        <button type="submit">Tìm khóa học</button>
    </form>
</body>
</html>

