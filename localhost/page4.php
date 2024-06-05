<!DOCTYPE html>
<html>
<head>
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
        .coaches {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            padding: 40px;
        }
        .coach {
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            padding: 20px;
            text-align: center;
        }
        .coach img {
            width: 70%;
            height: auto;
            margin-bottom: 10px;
        }
        .coach h3 {
            font-size: 24px;
            margin-bottom: 10px;
        }
        .coach p {
            font-size: 18px;
            color: #666;
        }
        .coach button {
            font-size: 18px;
            background-color: #f00;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .coach button:hover {
            background-color: #800000;
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
        /* Стили для модального окна */
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
        <div class="coaches">
            <div class="coach">
                <img src="img\anasta.jpg" alt="Анастасия">
                <h3>Анастасия</h3>
                    <p>
                    Имя: Анастасия Иванова
                    <br>
                    Опыт: 5 лет
                    <br>
                    Специализация: Портретная и свадебная фотография
                    <br>
                    Оборудование: Canon EOS 5D Mark IV, объективы Canon 50mm f/1.2, 24-70mm f/2.8
                    <br>
                    Примеры работ: Ведение портфолио в Instagram и на личном сайте
                    <br>
                    Цена за час работы: 3000 рублей 
                    </p>
                <button onclick="openForm()">Записаться</button>
            </div>
            <div class="coach">
                <img src="img\igor.jpg" alt="Игорь">
                <h3>Игорь</h3>
                    <p>
                    Имя: Игорь Смирнов
                    <br>
                    Опыт: 8 лет
                    <br>
                    Специализация: Свадебная и семейная фотография
                    <br>
                    Оборудование: Nikon D850, объективы Nikon 85mm f/1.4, 24-70mm f/2.8
                    <br>
                    Примеры работ: Публикации в журналах и на свадебных порталах
                    <br>
                    Цена за час работы: 4000 рублей
                    </p>
                <button onclick="openForm()">Записаться</button>
            </div>
            <div class="coach">
                <img src="img\olgas.jpg" alt="Ольга">
                <h3>Ольга</h3>
                    <p>
                    Имя: Ольга Петрова
                    <br>
                    Опыт: 6 лет
                    <br>
                    Специализация: Детская и новорожденная фотография, выпускные вечера
                    <br>
                    Оборудование: Sony A7 III, объективы Sony 35mm f/1.8, 85mm f/1.8
                    <br>
                    Примеры работ: Портфолио на личном сайте и социальных сетях
                    <br>
                    Цена за час работы: 3500 рублей
                    </p>
                <button onclick="openForm()">Записаться</button>
            </div>
        </div>
        <div class="footer">
            <p>© 2024 фотостудия "PHOTOLAB". Все права защищены.</p>
        </div>
    </div>

    <!-- Модальное окно -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeForm()">&times;</span>
            <form id="coachForm" onsubmit="submitForm(event)">
                <input type="text" name="name" placeholder="Имя">
                <input type="text" name="phoneNumber" placeholder="Номер телефона">
                <input type="text" name="gender" placeholder="Пол">
                <button type="submit">Отправить</button>
            </form>
        </div>
    </div>

    <script>
        function openForm() {
            document.getElementById("myModal").style.display = "block";
        }

        function closeForm() {
            document.getElementById("myModal").style.display = "none";
        }

        function submitForm(event) {
            event.preventDefault();
            var form = document.getElementById("coachForm");
            var formData = new FormData(form);

            fetch("add_coach.php", {
                method: "POST",
                body: formData
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error("Network response was not ok");
                }
                document.getElementById("myModal").style.display = "none";
            })
            .catch(error => console.error("Error:", error));
        }
    </script>
</body>
</html>
