<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    body{
        background-color:#ddeeff;
    }
</style>
</head>
<body>
<nav>
        <div class="name">
            <h1>Задачи</h1>
            <p>Решу ЕГЭ</p>
        </div>
        <div class="sign">
            Вы вошли как гость
            <button>Войти</button>
            <button>Зарегистрироваться</button>
        </div>
    </nav>
    <a href="index.php">Домой</a>
    <h1 id="timer">200</h1>


<?php
$var1 = 0;
$var2 = 0;
$var3 = 0;
$var4 = 0;
$var5 = 0;
$var6 = 0;

function random($min,$max){
    return mt_rand($min,$max);
};

function number($line){
    $str=" ";
    for($i=0; $i<$line; $i++){
        if($i==0) $str.=1;
        else $str.=random(0,1);
    }
    return $str;
}

$answer=[];
for($i=0; $i<4; $i++){
    switch($_GET['task']){


        // задача 1
        case 0:
            $var1 = number(random(2,5));
            $answer[$i]=base_convert($var1, 2, 10);
            echo "<p>Необходимо перевести значение <i id=quest$i>$var1</i> из 2сс в 10сс. В качество ответа указать число</p>";
            echo "<label>Ответ:</label><input type='number' id='answer$i' <input type='submit'>  <br><hr>";
            break; 


            // задача 2
            
            case 1:
                $numbers = [128, 256, 16];
                $numColors = $numbers[array_rand($numbers)];
                $var2 = rand(100, 200); // Размер изображения по горизонтали
                $var3 = rand(100, 200); // Размер изображения по вертикали
            echo "<p>Какой минимальный объём памяти (в Кбайт) нужно зарезервировать, чтобы можно было сохранить любое растровое изображение размером $var2 × $var3 пикселей при условии, что в изображении могут использоваться $numColors различных цветов? В ответе запишите только целое число, единицу измерения писать не нужно.</p>";
           echo "<label>Ответ:</label><input type='number'> <input type='submit'>  <br><hr>";

                break;


    // задача 3
            case 2:
                // Создаем массив с русскими буквами
                $alphabet = array('а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я');

                // Выбираем рандомную букву
                $bigText ="Я вас любил: любовь еще, быть может,
                В душе моей угасла не совсем;
                Но пусть она вас больше не тревожит;
                Я не хочу печалить вас ничем.
                Я вас любил безмолвно, безнадежно,
                То робостью, то ревностью томим;
                Я вас любил так искренно, так нежно,
                Как дай вам Бог любимой быть другим.
                
                Сижу за решеткой в темнице сырой.
                Вскормленный в неволе орел молодой,
                Мой грустный товарищ, махая крылом,
                Кровавую пищу клюет под окном,
                Клюет, и бросает, и смотрит в окно,
                Как будто со мною задумал одно.
                Зовет меня взглядом и криком своим
                И вымолвить хочет: «Давай улетим!
                Мы вольные птицы; пора, брат, пора!
                Туда, где за тучей белеет гора,
                Туда, где синеют морские края,
                Туда, где гуляем лишь ветер… да я!..»
                
                Уж небо осенью дышало,
                Уж реже солнышко блистало,
                Короче становился день,
                Лесов таинственная сень
                С печальным шумом обнажалась,
                Ложился на поля туман,
                Гусей крикливых караван
                Тянулся к югу: приближалась
                Довольно скучная пора;
                Стоял ноябрь уж у двора.
                
                В тот год осенняя погода
                Стояла долго на дворе,
                Зимы ждала, ждала природа.
                Снег выпал только в январе
                На третье в ночь. Проснувшись рано,
                В окно увидела Татьяна
                Поутру побелевший двор,
                Куртины, кровли и забор,
                На стеклах легкие узоры,
                Деревья в зимнем серебре,
                Сорок веселых на дворе
                И мягко устланные горы
                Зимы блистательным ковром.
                Все ярко, все бело кругом.
                ";
                
                $alphabet = array('а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я');
                $lines = explode("\n", $bigText);// Разбиваем текст на массив строк
                // Выбираем случайные строки
                $randomLines = array_rand($lines, 7); // Выберем 3 случайные строки
                $var6 = "";
                foreach($randomLines as $lineIndex) {
                    $var6 .= $lines[$lineIndex] . "\n";
                }
                $var5 = $alphabet[rand(0, count($alphabet) - 1)];
                echo "<p>Напишите количество вхождений символа <b>$var5</b> в тексте: $var6. В ответ записать число вхождений.</p>";
                echo "<label>Ответ:</label><input type='number'><input type='submit'>  <br> <hr>";
                break;
    
            default:
                echo "Неправильный номер задачи";
        }
}
echo  "<input type='submit'onclick='example()'>"; 

 ?>

<script>
   function example() {
  var area = document.getElementById("areaforanswer");
  var answer0 = document.getElementById("answer0").value;
  var answer1 = document.getElementById("answer1").value;
  var answer2 = document.getElementById("answer2").value;
  var answer3 = document.getElementById("answer3").value;

  var quest0 = document.getElementById("quest0").textContent;
  var quest1 = document.getElementById("quest1").textContent;
  var quest2 = document.getElementById("quest2").textContent;
  var quest3 = document.getElementById("quest3").textContent;
  area.innerHTML = `<label> Ваш ответ: ${answer0} ${
    convertToBinary1(answer0) == quest0 ? "верно" : "Неверно"
  }  <label> 
  <br>
   <label>  ${
     convertToBinary1(answer1) == quest1 ? "верно" : "Неверно"
   }  <label>
  <br>
 <label>  ${convertToBinary1(answer2) == quest2 ? "верно" : "Неверно"}  <label>
  <br>
 <label>  ${convertToBinary1(answer3) == quest3 ? "верно" : "Неверно"}  <label>
  <br>
  `;
  function convertToBinary1(number) {
    let num = number;
    let binary = (num % 2).toString();
    for (; num > 1; ) {
     
      num = parseInt(num / 2);
      binary = (num % 2) + binary;
    }
    return binary;
  }
}

      // Устанавливаем начальное значение времени в секундах
      var timeLeft = 50;

// Получаем элемент с id "timer", чтобы обновлять его значение
var timerElement = document.getElementById("timer");

// Функция для обновления значения таймера каждую секунду
function updateTimer() {
    // Уменьшаем значение времени на 1 секунду
    timeLeft -= 1;

    // Обновляем текст элемента таймера
    timerElement.textContent = timeLeft;

    // Если время истекло, останавливаем таймер
    if (timeLeft <= 0) {
        clearInterval(timerInterval);
        timerElement.textContent = "Время истекло!";
    }
}
// Запускаем функцию updateTimer каждую секунду
var timerInterval = setInterval(updateTimer, 1000);
</script>
<div id="areaforanswer">
</body>
</html>