<?php

/**
 * Подключает шаблон, передает туда данные и возвращает итоговый HTML контент
 * @param string $name Путь к файлу шаблона относительно папки templates
 * @param array $data Ассоциативный массив с данными для шаблона
 * @return string Итоговый HTML
 */
function include_template($name, array $data = []) {
    $name = 'templates/' . $name;
    $result = '';

    if (!is_readable($name)) {
        return $result;
    }

    ob_start();
    extract($data);
    require $name;

    $result = ob_get_clean();

    return $result;
}

// Считает количество задач в проекте
function getTasksCountByProjectName (array $tasks,string $projectName): int {
    $count = 0;
    foreach ($tasks as $val){
        if ($val['categories'] === $projectName){
            $count++;
        }
    }
    return $count;
}

// Вычисляет количество часов до конца срока выполнения задачи проекта  
function getTimeofDeadLineTaskProject (string $date_comp):int {
   
    $result ='';
    $date_now = time();
    $date_end = strtotime($date_comp);
    if ((bool)$date_end == false) {
        return $result;
    }
    $date_diff = floor(($date_end - $date_now)/3600);
    return $date_diff;
}

// Добавляет классы в переменную $classes , при выполнении условий,если задача выполнена или до времени ёё выполнения остается меньше 24 часов
function getTaskClasses(array $task): string
{
    $classes = '';
    if ($task["success"] === 'Да') {
        $classes .= 'task--completed ';
    }

    if ((getTimeofDeadLineTaskProject($task["date_complite"])) <= 24) {
        $classes .= 'task--important';
    }

    return $classes;
} 

?>