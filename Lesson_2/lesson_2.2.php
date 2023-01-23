<?php
  // Задание 2.
  // Доработайте задание с прошлого занятия с использованием условных 
  // операторов и циклических конструкций. 
  // Реализуйте скрипт, запрашивающий у пользователя количество задач, 
  // запланированных на день. После получения корректного числа, 
  // программа должна спросить определённое количество раз, 
  // какая задача запланирована и сколько примерно времени займёт её выполнение. 
  // По завершению циклического опроса необходимо вывести итог запланированного 
  // пользователем дня, содержащий весь перечень задач с оценкой времени, 
  // а также суммарное количество часов.

  $task_counter = readline("Сколько задач у вас запланированно? ");
  $sum_time = 0;
  $sum_string = '';

  for ($counter = $task_counter; $counter > 0; $counter--) {
    $task = readline("Какая задача стоит перед вами? ");
    $time = readline("Сколько времени эта задача? ");
    $sum_time += $time;
    $sum_string .=  "- $task ($time ч) \n";
  };

  echo "Сегодня у вас запланировано $task_counter задач: 
$sum_string 
Примерное время выполнения плана = $sum_time ч.";