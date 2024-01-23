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
    <h1 id="seconds">200</h1>
    

    <?php


    function random($min, $max)
    {
        return mt_rand($min, $max);
    }



    function get2SS($len)
    {
        $str = "";
        for ($i = 0; $i < $len; $i++) {
            if ($i == 0)
                $str .= 1;
            else
                $str .= random(0, 1);
        }
        return $str;
    }

    function imgSize($len1)
    {
        for ($i = 1; $i <= 2; $i++) {
            if ($i == 1)
                return $len1;
            else
                return $len1;
        }
    }

    $var1 = 0;
    $var2 = 0;
    $var3 = 0;
    $var4 = 0;
    $var5 = 0;
    $var6 = 0;


    $tasks = [
        "Необходимо перевести значение $var1 из 2СС в 10СС. В качестве ответа указать число.",
        "Какой минимальный объем памяти нужно зарезервировать, чтобы можно было сохранить любое растроое
             изображение размером $var2 x $var3 пикселей при условии, что в изображении могут использоваться $var4 различных цветов?",
        "Напишите количество вхождений символа $var5 в следующем тексте <pre>
            Я вас любил: любовь еще, быть может,
            В душе моей угасла не совсем;
            Но пусть она вас больше не тревожит;
            Я не хочу печалить вас ничем.
            Я вас любил безмолвно, безнадежно,
            То робостью, то ревностью томим;
            Я вас любил так искренно, так нежно,
            Как дай вам Бог любимой быть другим.
            </pre>. Записать число вхождений '$var6'"
    ];

    // $colors = ['16', '128', '256'];
    // $key = array_rand($colors);
    
    // $randomElement= $colors[$key]
    
    //         $myArray = ['16', '128', '256'];
    
    // $randomElementKey = array_rand($myArray);
// $randomElement = $myArray[$randomElementKey];
    
    // echo "элемент: " . $randomElement;
    
    $randomElementsArray = array('16', '128', '256');

    function randColor($randomElementsArray)
    {
        return $randomElementsArray[array_rand($randomElementsArray)];
    }
    ;



    $alphabet = array('а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я');

    function randLetter($alphabet)
    {
        return $alphabet[array_rand($alphabet)];
    }

    $poems = [
        '<pre>
        Пусть бегут неуклюже
        Пешеходы по лужам,
        А вода по асфальту рекой.
        И неясно прохожим
        В этот день непогожий,
        Почему я веселый такой?</pre>',

        '<pre>
        А я играю на гармошке
        У прохожих на виду.
        К сожаленью, день рожденья
        Только раз в году.</pre>',

        '<pre>
        Прилетит вдруг волшебник
        В голубом вертолете
        И бесплатно покажет кино.
        С днем рожденья поздравит
        И, наверно, оставит
        Мне в подарок пятьсот эскимо.</pre>'
    ];

    function randPoem($poems)
    {
        return $poems[array_rand($poems)];
    }

    function logNum($var2, $var3, $var4)
    {

        $logI = log($var4, 2);
        $bit = $var2 * $var3 * $logI;
        return $kbite = floor($bit / (8 * 1024));

    }
    ;

    function letterInPoem($var5, $var6)
    {
        $randomLetter = mb_strtolower(strval($var5));
        $lettersArray = mb_str_split(mb_strtolower($var6));
        $count = 0;

        foreach ($lettersArray as $letter) {
            if ($letter === $randomLetter) {
                $count++;
            }
        }

        
        return $count;
    }

    ?>
    <form method="get">
        <?php



        for ($i = 0; $i < 4; $i++) {
            switch ($_GET['task']) {

                case 0:
                    $var1 = get2SS(random(2, 5));
                    echo "<p>Необходимо перевести значение $var1 из 2СС в 10СС. В качестве ответа указать число.</p>";
                    $result = base_convert(strval($var1), 2, 10);
                
                    echo "<label>Ответ:</label><input type='number' id='ans_user$i' name='ans_user$i'> <br>";
                    echo "<input type='hidden' id='ans$i' value='$result'>";
                    echo "<p id='val$i'></p>";
                    break;

                case 1:
                    $var2 = imgSize(random(128, 256));
                    $var3 = imgSize(random(128, 256));
                    $var4 = randColor($randomElementsArray);

                    echo "<p>Какой минимальный объем памяти нужно зарезервировать, чтобы можно было сохранить любое растроое изображение размером $var2 x $var3 пикселей при условии, что в изображении могут использоваться $var4 различных цветов?</p>";
                    echo "<label>Ответ:</label><input type='number' id='ans_user$i' name='ans_user$i'> <br>";
                    echo "<input type='hidden' id='ans$i' value= '" . logNum($var2, $var3, $var4) . "'>";

                    echo "<p id='val$i'></p>";

                    break;


                case 2:
                    $var5 = randletter($alphabet);
                    $var6 = randPoem($poems);
                    echo "<p>Напишите колличество вхождений символа $var5 в следующем тексте <pre> 
                            $var6 
                            </pre> Записать число вхождений $var5</p>";
                    echo "<label>Ответ:</label><input type='number' id='ans_user$i' name='ans_user$i'>   <br>";
                    echo "<input type='hidden' id='ans$i' value= '" . letterInPoem($var5, $var6) . "'>";
                    echo "<p id='val$i'></p>";
                    break;
            }
        }

        
        echo "<input type='button' value='Отправить' id='btn'> ";
        ?>

    </form>




    <script>

        var seconds = 60;
        var intervalId = setInterval(function () {
            document.getElementById("seconds").innerHTML = seconds;
            if (seconds == 0) {
                clearInterval(intervalId);
                alert("время вышло");
            } else {
                seconds--;
            }
        }, 1000);


        let btn = document.getElementById("btn");

        btn.addEventListener("click", () => {
            clearInterval(intervalId);

            for (let i = 0; i < 4; i++) {
                let ans = document.getElementById(`ans${i}`).value;
                let ans_user = document.getElementById(`ans_user${i}`).value;
                console.log(ans);
                console.log(ans_user);
                document.getElementById(`val${i}`).innerText = `Правильный ответ: ${ans}`;

                if (ans == ans_user) {
                    document.getElementById(`ans_user${i}`).style.color = 'green';
                }
                else {
                    document.getElementById(`ans_user${i}`).style.color = 'red';
                }
            }
        })


    </script>




    




   

</body>

</html>