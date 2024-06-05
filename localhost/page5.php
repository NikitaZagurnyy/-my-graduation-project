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
            color: #fff;
            font-size: 50px;
            text-shadow: 2px 2px 4px #000;
        }
        .services {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            padding: 40px;
        }
        .service {
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            padding: 20px;
            text-align: center;
        }
        .service img {
            width: 100px;
            height: 100px;
            margin-bottom: 10px;
        }
        .service h3 {
            font-size: 24px;
            margin-bottom: 10px;
        }
        .service p {
            font-size: 18px;
            color: #666;
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
        .contact-info {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 40px;
        }
        .contact-item {
            text-align: center;
        }
        .contact-item img {
            width: 50px;
            height: 50px;
            margin-bottom: 10px;
        }
        .contact-item p {
            font-size: 16px;
            color: #666;
        }
        .contact-form {
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            padding: 20px;
            margin-bottom: 40px;
        }
        .contact-form h3 {
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
        }
        .contact-form p {
            font-size: 16px;
            color: #666;
            margin-bottom: 20px;
        }
        .contact-form form {
            display: grid;
            grid-template-columns: 1fr;
            gap: 20px;
        }
        .contact-form label {
            font-size: 16px;
            color: #333;
        }
        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .contact-form button {
            width: 100%;
            padding: 10px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        .contact-form button:hover {
            background-color: #f00;
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
        <div class="contacts">
    <h2>Наши контакты</h2>
    <p>Если у вас есть вопросы, пожелания или предложения, вы можете связаться с нами любым удобным для вас способом. Мы всегда рады общению с нашими клиентами и партнерами.</p>
    <div class="contact-info">
        <div class="contact-item">
            <img src="img\phones.png" alt="Телефон">
            <p>Телефон: <a href="tel:+79991234567">+7 (996) 395-48-55</a></p>
        </div>
        <div class="img\contact-item">
            <img src="email.png" alt="Email">
            <p>Email: <a href="mailto:info@activiti.com">photo4lab@yandex.ru</a></p>
        </div>
        <div class="contact-item">
            <img src="img\address.png" alt="Адрес">
            <p>Адрес: г. Омск, ул. проспект Комарова, 6/1</p>
        </div>
        <div class="contact-item">
            <img src="img\social.png" alt="Социальные сети">
            <p>Социальные сети:<a href="https://vk.com/fotolab55">ВКонтакте</a></p>
        </div>
    </div>
    <div class="contact-form">
                <h3>Напишите нам</h3>
                <p>Вы также можете отправить нам сообщение, заполнив форму ниже. Мы постараемся ответить вам в течение 24 часов.</p>
                <form id="contactForm" method="post">
                    <label for="name">Ваше имя:</label>
                    <input type="text" id="name" name="name" placeholder="Введите ваше имя" required>
                    <label for="email">Ваш email:</label>
                    <input type="email" id="email" name="email" placeholder="Введите ваш email" required>
                    <label for="subject">Тема сообщения:</label>
                    <input type="text" id="subject" name="subject" placeholder="Введите тему сообщения" required>
                    <label for="message">Ваше сообщение:</label>
                    <textarea id="message" name="message" placeholder="Введите ваше сообщение" required></textarea>
                    <button type="submit">Отправить</button>
                </form>
            </div>
        </div>
        <div class="footer">
            <p>© 2024 фотостудия "PHOTOLAB". Все права защищены.</p>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#contactForm').submit(function(e){
                e.preventDefault(); // Предотвращаем стандартное поведение отправки формы

                $.ajax({
                    type: 'POST',
                    url: 'process_form.php',
                    data: $(this).serialize(),
                    success: function(response){
                        alert("Сообщение успешно отправлено");
                        $('#contactForm')[0].reset();
                    },
                    error: function(xhr, status, error){
                        alert("Произошла ошибка при отправке сообщения");
                        console.error(xhr.responseText);
                    }
                });
            });
        });
    </script>
</body>
</html>