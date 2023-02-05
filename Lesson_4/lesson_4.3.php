<?php
$box = [
   [
       0 => 'Тетрадь',
       1 => 'Книга',
       2 => 'Настольная игра',
       3 => [
           'Настольная игра',
           'Настольная игра',
       ],
       4 => [
           [
               'Ноутбук',
               'Зарядное устройство'
           ],
           [
               'Компьютерная мышь',
               'Набор проводов',
               [
                   'Фотография',
                   'Картина'
               ]
           ],
           [
               'Инструкция',
               [
                   'Ключ'
               ]
           ]
       ]
   ],
   [
       0 => 'Пакет кошачьего корма',
       1 => [
           'Музыкальный плеер',
           'Книга'
       ]
   ]
];

$txt = (string)readline("Введите название предмета: ");

function search(string $searchElem, array $searchArr): bool {
  foreach($searchArr as $value) {
    if (is_array($value)) {
      if (search($searchElem, $value)) {
        return true;
      }
    } else {
      if ($searchElem === $value) {
        return true;
      }
    }
  }
  return false;
};

echo search($txt, $box) ? 'true' : 'false';