<b>Измения от тех.задания:</b>
 - возможность смотреть задачи на месяц вперед
 - добавлена подсветка выбранной сортировки (сегодня|неделя|месяц)
 - добавлена подсветка проекта в случае если он содержит задание время выполнения которого истекло
 - добавлена сортировка (сегодня|неделя|месяц) отдельного проекта
 - если войти в проект, то при сортировке (сегодня|неделя|месяц) выбор проекта не теряется
 - так же если отсортировать задачи по дате, то не теряеется сортировка при выборе проекта
 - добавлена возможность выйти с авторизации
 - проекты сортируются следующим образом: сначала по <b>количеству просроченных задач</b>, потом по <b>количеству не выполннных задач</b>, потом по <b>общему количестве задач</b>, и уже потом <b>от новых проектов к старым</b>
 - возможность просматривать выполненные задачи как отдельных проектов так и общего списка
 - нельзя изменять уже выполненную задачу
 - выводится информация кто добавил задачу и когда она должна быть закончена
 - при добавлении задачи нельзя отметить её как выполненна
 - счетчик активных задач в проекте

<b>Требования:</b>
 - PHP7.0 и выше
 - Драйвер PDO
 - поддержка .htaccess
 - поддержка rewrite

<b>Установка:</b>
1. Прописать данные от БД в System/config/db.php
