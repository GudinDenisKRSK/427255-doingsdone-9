<?php
$show_complete_tasks = rand(0, 1);
$projectNames = ["Входящие", "Учеба", "Работа", "Домашние дела", "Авто"];
$tasks = [
    [
        'task' => 'Собеседование в IT компании',
        'date_complite' => '01.12.2018',
        'categories' => 'Работа',
        'success' => 'Нет'
    ],
    [
        'task' => 'Выполнить тестовое задание',
        'date_complite' => '25.12.2018',
        'categories' => 'Работа',
        'success' => 'Нет'
    ],
    [
        'task' => 'Сделать задание первого раздела',
        'date_complite' => '21.12.2018',
        'categories' => 'Учеба',
        'success' => 'Да'
    ],
    [
        'task' => 'Встреча с другом',
        'date_complite' => '22.12.2018',
        'categories' => 'Входящие',
        'success' => 'Нет'
    ],
    [
        'task' => 'Купить корм для кота',
        'date_complite' => 'Нет',
        'categories' => 'Домашние дела',
        'success' => 'Нет'
    ],
    [
        'task' => 'Заказать пиццу',
        'date_complite' => 'Нет',
        'categories' => 'Домашние дела',
        'success' => 'Нет'
    ]
];
?>