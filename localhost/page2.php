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
            background-color: #fff; 
            padding: 5px;
            text-align: center;
            border-radius: 10px; 
            color: #333; 
        }
        .service img {
            width: 319px; 
            height: 205px; 
            margin-bottom: 10px;
        }
        .service h3 {
            font-size: 24px;
            margin-bottom: 10px;
        }
        .service p {
            font-size: 18px;
            color: #333; 
        }
        .signup-btn {
            width: 100%; 
            padding: 10px;
            font-size: 20px;
            background-color: #333; 
            color: #fff; 
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .signup-btn:hover {
            background-color: #f00; 
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
    <!-- Navigation Bar -->
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
    <!-- Services Section -->
    <div class="services">
    <h2 style="text-align: center;">Наши услуги</h2>
    <p style="text-align: center;">В фотостудии "Photolab" вы можете выбрать любую услугу, которая соответствует вашим пожеланиям и потребностям. Мы предлагаем широкий спектр услуг для создания прекрасных фотографий и запечатления важных моментов вашей жизни. Наши фотографы имеют высокую квалификацию и опыт работы с клиентами разного уровня подготовки. Вы можете записаться на любую услугу онлайн или по телефону.</p>
        <br>
        <!-- Service Cards -->
        <div class="service">
        <img src="img\profile.png" alt="Портретная съемка">
                <h3>Портретная съемка</h3>
                <p>Идеальные фотографии для личного пользования и бизнеса.</p>
            <button class="signup-btn">Записаться</button>
        </div>
        <div class="service">
        <img src="img\famale.png" alt="Семейная фотосессия">
                <h3>Семейная фотосессия</h3>
                <p>Сохраняем тепло семейных уз на ваших снимках.</p>
            <button class="signup-btn">Записаться</button>
        </div>
        <div class="service">
        <img src="img\monye.png" alt="Коммерческая фотосъемка">
                <h3>Коммерческая фотосъемка</h3>
                <p>Профессиональные фотографии для вашего бизнеса.</p>
            <button class="signup-btn">Записаться</button>
        </div>
    </div>
    <!-- Modal -->
    <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <p>Введите ваш номер телефона, чтобы узнать больше о записи на услугу.</p>
            <form id="phoneForm">
                <input type="text" id="phoneNumber" name="phone_number" placeholder="Введите ваш номер телефона">
                <button type="button" id="submitBtn">Отправить</button>
            </form>
        </div>
    </div>
    <!-- Footer -->
    <div class="footer">
        <p>© 2024 фотостудия "PHOTOLAB". Все права защищены.</p>
    </div>
</div>
<!-- JavaScript -->
<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get all buttons with class "signup-btn"
    var buttons = document.querySelectorAll(".signup-btn");

    // Get the close button inside the modal
    var closeBtn = document.querySelector(".close");

    // Loop through the buttons and add event listeners
    buttons.forEach(function(button) {
        button.addEventListener("click", function() {
            modal.style.display = "block";
        });
    });

    // Close the modal when clicking on the close button
    closeBtn.addEventListener("click", function() {
        modal.style.display = "none";
    });

    // Close the modal when clicking outside the modal content
    window.addEventListener("click", function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    });

    // Function to handle form submission
    function submitForm() {
        // Get the phone number from the input field
        var phoneNumber = document.getElementById("phoneNumber").value;

        // Make an AJAX request to submit_phone.php
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "submit_phone.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                // Handle the response from the server (if needed)
                console.log(xhr.responseText);
            }
        };
        xhr.send("phone_number=" + encodeURIComponent(phoneNumber));

        // Close the modal after submission
        modal.style.display = "none";
    }

    // Add event listener to the "Submit" button
    document.getElementById("submitBtn").addEventListener("click", submitForm);
</script>
</body>
</html>
