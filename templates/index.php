<main class="content__main">
                <h2 class="content__main-heading">Список задач</h2>

                <form class="search-form" action="index.php" method="post" autocomplete="off">
                    <input class="search-form__input" type="text" name="" value="" placeholder="Поиск по задачам">

                    <input class="search-form__submit" type="submit" name="" value="Искать">
                </form>

                <div class="tasks-controls">
                    <nav class="tasks-switch">
                        <a href="/" class="tasks-switch__item tasks-switch__item--active">Все задачи</a>
                        <a href="/" class="tasks-switch__item">Повестка дня</a>
                        <a href="/" class="tasks-switch__item">Завтра</a>
                        <a href="/" class="tasks-switch__item">Просроченные</a>
                    </nav>

                    <label class="checkbox">
                        
                        
                        <input class="checkbox__input visually-hidden show_completed" type="checkbox" <?php if ($show_complete_tasks === 1): echo "checked"; endif;?> >
                        <span class="checkbox__text">Показывать выполненные</span>
                    </label>
                </div>

                <table class="tasks">
                    <?php foreach ($tasks as $task): ?>
                    <?php if ($task["success"] === 'Нет' ||  $show_complete_tasks === 1): ?>
                    <tr class="tasks__item task <?php print getTaskClasses($task);?>">
                        <td class="task__select">
                            <label class="checkbox task__checkbox">
                                <input class="checkbox__input visually-hidden" type="checkbox" 
                                <?php if ($task["success"] === 'Да'): ?> checked >
                                <?php endif ?>
                                <span class="checkbox__text"><?=htmlspecialchars($task["task"]); ?></span>
                            </label>
                        </td>
                      
                        <td class="task__date"> <?=htmlspecialchars($task["date_complite"]); ?> </td>
                        <td class="task__date"> <?=htmlspecialchars($task["categories"]); ?></td>
                        <td class="task__controls"><a class="download-link" href="#">Home.psd</a> </td>
                        
                    </tr>
                    <?php endif ?>
                    <?php endforeach ?>
</table>
            </main>