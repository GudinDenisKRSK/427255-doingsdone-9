<?php
date_default_timezone_set('Asia/Krasnoyarsk');
require_once ('functions.php');
require_once ('data.php');
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