<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Занятие 5</title>
</head>
<body>
    <div class="container">
        <h2>Самостоятельные задачи</h2>
        <div class="task">
            <h3>Слава КПСС.</h3>
            <?php
                $enter_text = 'Живая шляпа — маленький веселый рассказ Николая Носова с загадочным сюжетом. ';
                $k = 3;
                for ($i=0; $i<$k; $i++) {
                    echo $enter_text, '<br/>';
                }
            ?>
        </div>
        <div class="task">
            <h3>Абзац.</h3>
            <?php
                $k = 3;
                for ($i=1; $i<=$k; $i++) {
                    echo "<p> Абзац $i</p>";
                }
            ?>
        </div>
        <div class="task">
            <h3>Половина.</h3>
            <?php
                $A = 120;
                $B = 30;
                $amount_days = 0;
                while ($A > $B) {
                    $A /= 2;
                    $amount_days++;
                }
                echo "Через $amount_days дней призовая сумма розыгрыша будет меньше $B";
            ?>
        </div>
        <div class="task">
            <h3>Кто есть кто.</h3>
            <?php
                $users = ['Вася' => 37, 'Коля' => 12, 'Вика' => 40, 'Катя' => 0];
                echo '<table><tr><th>Имя</th><th>Рейтинг</th></tr>';
                foreach ($users as $user=>$value) {
                    echo "<tr><td>$user</td><td>$value</td></tr>";
                }
                echo '</table>';
            ?>
        </div>
        <div class="task">
            <h3>Весь рейтинг.</h3>
            <?php
                $users = ['Вася' => 37, 'Коля' => 12, 'Вика' => 40, 'Катя' => 0];
                $sum_rating = 0;
                foreach ($users as $user=>$value) {
                    $sum_rating += $value;
                }
                echo "Сумма всех рейтингов пользователей - $sum_rating";
            ?>
        </div>
        <div class="task">
            <h3>Средняя по больнице.</h3>
            <?php
                $users = ['Вася' => 37, 'Коля' => 12, 'Вика' => 40, 'Катя' => 0];
                $sum_rating = 0;
                $number_users = 0;
                foreach ($users as $user=>$value) {
                    if ($value > 0) {
                        $sum_rating += $value;
                        $number_users++;
                    }
                }
                $average_rating = $sum_rating/$number_users;
                echo "Средний рейтинг всех пользователей - $average_rating";
            ?>
        </div>
        <div class="task">
            <h3>Выше крыши 2.</h3>
            <?php
                $users = ['Вася' => 37, 'Коля' => 12, 'Вика' => 40, 'Катя' => -15, 'Дима' => 145];
                foreach ($users as $user=>$value) {
                    if ($value > 100) {
                        $value = 100;
                    }
                    echo "$user - $value ";
                }
            ?>
        </div>
        <div class="task">
            <h3>Второе дно.</h3>
            <?php
                $users = ['Вася' => 37, 'Коля' => 12, 'Вика' => 40, 'Катя' => -15, 'Дима' => 145];
                foreach ($users as $user=>$value) {
                    if ($value < 0) {
                        $value = 0;
                    }
                    echo "$user - $value ";
                }
            ?>
        </div>
        <div class="task">
            <h3>Экватор.</h3>
            <?php
                $rate = ['Вася' => 37, 'Даша' => 56, 'Катя' => 12, 'Коля' => -15, 'Вика' => 66, 'Дима' => 145];
                foreach ($rate as $user=>$value) {
                    if ($value > 50) {
                        echo "$user - $value ";
                    }
                }
            ?>
        </div>
        <div class="task">
            <h3>Данила Мастер 2.</h3>
            <?php
                $rate = ['Вася' => 37, 'Даша' => 56, 'Катя' => 12, 'Коля' => -15, 'Вика' => 66, 'Дима' => 145];
                foreach ($rate as $user=>$value) {
                    if ($value <= 30) {
                        echo "$user - $value, статус новичок.<br/>";
                    } elseif ($value > 30 && $value <= 60) {
                        echo "$user - $value, статус мастер.<br/>";
                    } else {
                        echo "$user - $value, статус грандмастер.<br/>";
                    }
                }
            ?>
        </div>
        <div class="task">
            <h3>Выйди вон.</h3>
            <?php
                $users_1 = ['Вася', 'Даша', 'Катя', 'Коля', 'Вика', 'Дима'];
                $users_2 = ['Даша', 'Коля', 'Дима'];
                foreach ($users_1 as $user_1=>$value_1) {
                    foreach ($users_2 as $user_2=>$value_2) {
                        if ($value_1 === $value_2) {
                            unset($users_1[$user_1]);
                        }
                    }
                }
                print_r($users_1);
            ?>
        </div>
        <h2>Дополнительные задачи</h2>
        <div class="task">
            <h3>Зебра.</h3>
            <?php
                $row_count = 4;
                echo "<table>";
                for ($i=1; $i<=$row_count; $i++) {
                    if ($i % 2 == 0) {
                        echo "<tr><td style='background-color: black; color: white; width: 20px; height: 30px'>$i</td></tr>";
                    } else {
                        echo "<tr><td style='background-color: grey; width: 20px; height: 30px'>$i</td></tr>";
                    }
                }
                echo "</table>";
            ?>
        </div>
        <div class="task">
            <h3>Меню.</h3>
            <?php
                $pages = ['О нас'=>'about.html', 'Главная'=>'main.html', 'Контакты'=>'contacts.html', 'Загрузки'=>'downloads.html'];
                foreach ($pages as $pag=>$title_page) {
                    echo "Страница '$pag' имеет ссылку - https://$title_page.<br/>";
                }
            ?>
        </div>
        <div class="task">
            <h3>Меню 2.</h3>
            <?php
                $pages = ['О нас'=>'about.html', 'Главная'=>'main.html', 'Контакты'=>'contacts.html', 'Загрузки'=>'downloads.html'];
                $page = 'Главная';
                foreach ($pages as $pag=>$title_page) {
                    if ($pag == $page) {
                        echo "<strong>Страница '$pag' имеет ссылку - https://$title_page.<br/></strong>";
                    }
                    echo "Страница '$pag' имеет ссылку - https://$title_page.<br/>";
                }
            ?>
        </div>
        <div class="task">
            <h3>Итог.</h3>
            <?php
                $cart = [
                    13 => ['name'=>'Кеды', 'count'=>2, 'price'=>123],
                    28 => ['name'=>'Самолет', 'count'=>1, 'price'=>400],
                    33 => ['name'=>'Мяч', 'count'=>5, 'price'=>150],
                ];         
                echo "<table><tr><th>Название</th><th>Кол-во</th><th>Цена</th></tr>";   
                $cost = 0;   
                foreach ($cart as $key=>$info) {
                    echo "<tr>";
                    foreach ($info as $title=>$value) {
                        echo "<td>$value</td>";
                        if ($title == 'price') {
                            $cost += ($value * $info['count']);
                        }
                    }
                    echo "</tr>";
                }
                echo "<tr><th>Итоговая стоимость: </th><td>$cost</td></tr></table>";
            ?>
        </div>
        <div class="task">
            <h3>Шах.</h3>
            <?php 
                echo "<table style='border: 1px solid black'>";
                for ($i=1; $i <= 8; $i++) {
                    echo "<tr>";
                    for ($j=1; $j <= 8; $j++) {
                        if (($i + $j) % 2 == 0) {
                            echo "<td style='background-color: black; width: 20px; height: 20px;'></td>";
                        } else {
                            echo "<td style='width: 20px; height: 20px;'></td>";
                        }
                    }
                    echo "</tr>";
                }
                echo "</table>";
            ?>
        </div>
    </div>
</body>
</html>