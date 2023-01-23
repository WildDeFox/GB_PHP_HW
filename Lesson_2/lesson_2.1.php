<?php
  // Задание 1.
  $isContinue = true;

  do {
    echo "В каком году произошло крещение Руси?
    Варианты ответа:
    - А) 988
    - Б) 990
    - С) 789 \n";

    $answer = readline("Введите букву с верным вариантом: ");

    if ($answer === 'А') {
      printf("Вы ответили правильно, поздравляю Вас!");
      $isContinue = false;
      break;
    } elseif ($answer === 'Б' || $answer === 'С') {
      printf("Вы ответили неверно.");
      $isContinue = false;
      break;
    };

  } while ($isContinue);
  
