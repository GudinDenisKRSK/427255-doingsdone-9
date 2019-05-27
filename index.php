<?php
require_once ('functions.php');
require_once ('data.php');
$show_complete_tasks = rand(0, 1);
date_default_timezone_set('Asia/Krasnoyarsk');
error_reporting(E_ALL);
ini_set('display_errors', 1);
//Connecting to database
$connect = mysqli_connect('localhost','root','','427255—doingsdone—9');
mysqli_set_charset($connect, 'utf8');
if (!$connect){
    print('ошибка подключения: '.mysqlli_connect_error());
}
else {
    $sql_get_list_project = "Select * from project where user_id = " . 1;
    $result = mysqli_query($connect,$sql_get_list_project);
    if (!$result) {
        die('MySQL Error:' . mysqli_connect_error());
    } else {
        $projectNames = mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
    $sql_get_list_tasks =  "SELECT project.project_name AS project, task.task_name,status,done_at FROM task JOIN project ON task.project_id = project.id WHERE task.user_id = " . 1;
    $result = mysqli_query($connect, $sql_get_list_tasks);
    if (!$result) {
        die("MySQL Error:" . mysqli_connect_error());
    } else {
        $tasks = mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
}
$page_content = include_template('index.php',[
        'tasks' => $tasks,
        'show_complete_tasks' => $show_complete_tasks
    ]);
$layout_content = include_template ('layout.php', [
        'content' => $page_content,
        'projectNames' => $projectNames,
        'tasks' => $tasks,
        'title_page' => 'Дела в порядке'
]);
print($layout_content);
?>