<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>photolab</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }
        .logo {
            width: 200px;
            height: 200px;
        }
        .nav {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px;
        }
        .nav ul {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
        }
        .nav ul li {
            margin: 0 10px;
        }
        .nav ul li a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }
        .nav ul li a:hover {
            color: #f00;
        }
        .banner {
            height: 500px;
            background-image: url("banner.jpg");
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .banner h1 {
            color: white;
    -webkit-text-stroke: 1px black; /* Черная обводка */;
            font-size: 50px;
            text-shadow: 2px 2px 4px #000;
        }
        .services {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); 
            gap: 20px;
            padding: 40px;
            background-color: rgba(255, 255, 255, 0.1); 
            backdrop-filter: blur(10px); 
            border-radius: 10px; 
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); 
            z-index: 1; 
        }
        .service {
            background-color: #fff; /* Цвет фона как в прошлом коде */
            padding: 5px;
            text-align: center;
            border-radius: 10px; 
            color: #333; /* Цвет текста как в прошлом коде */
        }
        .service img {
            width: 319px; /* Уменьшаем изображения на 30% */
            height: 205px; /* Уменьшаем изображения на 30% */
            margin-bottom: 10px;
        }
        .service h3 {
            font-size: 24px;
            margin-bottom: 10px;
        }
        .service p {
            font-size: 18px;
            color: #333; /* Цвет текста как в прошлом коде */
        }
        .signup-btn {
            width: 100%; /* Увеличиваем кнопки на 40% */
            padding: 10px;
            font-size: 20px;
            background-color: #333; /* Цвет кнопок как в прошлом коде */
            color: #fff; /* Цвет текста кнопок как в прошлом коде */
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .signup-btn:hover {
            background-color: #f00; /* Цвет при наведении как в прошлом коде */
        }
        .footer {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        .footer p {
            margin: 0;
        }
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.4);
        }
        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
       <div class="container">
        <div class="nav">
            <img src="img\logon.png" alt="Логотип" class="logo">
            <ul>
                <li><a href="/index.php">Главная</a></li>
                <li><a href="/page2.php">Услуги</a></li>
                <li><a href="/page3.php">Отзывы</a></li>
                <li><a href="/page4.php">Фотографы</a></li>
                <li><a href="/page5.php">Контакты</a></li>
            </ul>
        </div>
        <div class="banner">
            <h1>Добро пожаловать в фотостудию "PHOTOLAB"
            Создаем воспоминания на всю жизнь
            </h1>
        </div>
        <div class="services">
            <div class="service">
                <img src="img\profile.png" alt="Портретная съемка">
                <h3>Портретная съемка</h3>
                <p>Идеальные фотографии для личного пользования и бизнеса.</p>
            </div>
            <div class="service">
                <img src="img\famale.png" alt="Семейная фотосессия">
                <h3>Семейная фотосессия</h3>
                <p>Сохраняем тепло семейных уз на ваших снимках.</p>
            </div>
            <div class="service">
                <img src="img\monye.png" alt="Коммерческая фотосъемка">
                <h3>Коммерческая фотосъемка</h3>
                <p>Профессиональные фотографии для вашего бизнеса.</p>
            </div>
        </div>
        <div class="footer">
            <p>© 2024 фотостудия "PHOTOLAB". Все права защищены.</p>
        </div>
    </div>
</body>
</html>
