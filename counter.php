<?php
  $count = file_get_contents("counter.txt"); // Считываем значение счётчика
  $count++; // Увеличиваем на 1
  file_put_contents("counter.txt", $count); // Обновляем значение счётчика
  $len = strlen($count); // Вычисляем длину значения
  $offset = ($len - 1) * 8; // Смещение числа на картинке (чем больше цифр в числе, тем сильнее смещение)
  $i = imageCreate(100, 50); // Создаём дескриптор изображения
  $color = imageColorAllocate($i, 255, 255, 0); // Создаём жёлтый цвет
  imageFilledRectangle($i, 0, 0, 100, 50, $color); // Закрашиваем счётчик
  $color = imageColorAllocate($i, 255, 0, 0); // Создаём красный цвет
  imageTtfText($i, 25, 0, 43 - $offset, 36, $color, "times.ttf", $count); // Выводим значение счётчика
  header("Content-type: image/jpeg"); // Отправляем заголовок
  imageJpeg($i); // Выводим изображение
  imageDestroy($i); // Удаляем дескриптор
?>