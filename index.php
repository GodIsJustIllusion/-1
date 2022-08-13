<?php
$array = [
    [
        'Name product' => 'Автомобиль',
        'Img product' => 'volvo-xc60.jpg',
        'Description' => 'Описание автомобиля',
        'Price' => '3 500',
        'Currency' => '$',
        'Button' => 'Добавить в избранное'
    ],
    [
        'Name product' => 'Квартира',
        'Img product' => 'studiya.jpg',
        'Description' => 'Описание квартиры',
        'Price' => '2 400',
        'Currency' => '€',
        'Button' => 'Добавить в избранное'
    ],
    [
        'Name product' => 'Телефон',
        'Img product' => 'samsung.jpg',
        'Description' => 'Описание телефона',
        'Price' => '1 900',
        'Currency' => '$',
        'Button' => 'Добавить в избранное'
    ],
    [
        'Name product' => 'Одежда',
        'Img product' => 'original.jpeg',
        'Description' => 'Описание одежды',
        'Price' => '5 800',
        'Currency' => '€',
        'Button' => 'Добавить в избранное'
    ],
    [
        'Name product' => 'Диван',
        'Img product' => 'divan.jpg',
        'Description' => 'Описание дивана',
        'Price' => '600',
        'Currency' => '₽',
        'Button' => 'Добавить в избранное'
    ],
];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Это мой первый вэб-сайт</title>
</head>

<body>
    <header>
        <img class="header__logo" src="images/logo.svg" alt="" srcset="">
        <nav>
            <ul class="menu">
                <li><a href="">Главная</a></li>
                <li><a href="">Магазин</a></li>
                <li><a href="">О нас</a></li>
                <li><a href="">Карта</a></li>
                <li><a href="">Контакты</a></li>
            </ul>
        </nav>
    </header>

   
    <div class="wrapper">
        <div class="cardbox">
            <?php foreach ($array as $key => $value): ?>
                <div class="card">
                    <div class="card-block">
                            <img class="card__image" src="images/<?= $value['Img product']?>" alt="">
                            <div class="card__image-back"></div>
                    </div>

                    <h3 class="card__title"><?= $value['Name product']?></h3>
                    <p><?= $value['Description']?></p>

                    <p><?= $value['Currency']?><span><?= $value['Price']?></span></p>                                

                    <button class='btn'><?= $value['Button']?></button>

                    
                </div>
            <?php endforeach; ?>

        </div>

           

    <!-- <div class="wrapper__flex">
        <div class="cardbox__flex">
            <div class="card">
                <div class="card-block">
                    <img class="card__image" src="images/32132.jpeg" alt="">
                    <div class="card__image-back"></div>
                </div>

                <p class="card__title">название название название название название название название название</p>
                
                <button class='btn'>
                    Добавить в избранное
                </button>
            </div>

            <div class="card">
                <div class="card-block">
                    <img class="card__image" src="images/32132.jpeg" alt="">
                    <div class="card__image-back"></div>
                </div>
                
                <p class="card__title">название название название название название название название название</p>
                
                <button class='btn'>
                    Добавить в избранное
                </button>
            </div>

            <div class="card">
                <div class="card-block">
                    <img class="card__image" src="images/32132.jpeg" alt="">
                    <div class="card__image-back"></div>
                </div>
                
                <p class="card__title">название название название название название название название название</p>
                
                <button class='btn'>
                    Добавить в избранное
                </button>
            </div>

            <div class="card">
                <div class="card-block">
                    <img class="card__image" src="images/32132.jpeg" alt="">
                    <div class="card__image-back"></div>
                </div>
                
                <p class="card__title">название название название название название название название название</p>
                
                <button class='btn'>
                    Добавить в избранное
                </button>
            </div>

            <div class="card">
                <div class="card-block">
                    <img class="card__image" src="images/32132.jpeg" alt="">
                    <div class="card__image-back"></div>
                </div>
                
                <p class="card__title">название название название название название название название название</p>
                
                <button class='btn'>
                    Добавить в избранное
                </button>
            </div>
        </div>
    </div> -->

    <!-- <button class='btn'>
        Добавить в избранное
    </button>

    <button class='myBtn'>
        Добавить в избранное
    </button> -->

    <footer>
        
    </footer>

</body>

</html>