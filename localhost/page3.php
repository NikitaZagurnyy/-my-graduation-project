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
            -webkit-text-stroke: 1px black;
            font-size: 50px;
            text-shadow: 2px 2px 4px #000;
        }
        .reviews-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
            padding: 40px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }
        .reviews-container h2 {
            grid-column: 1 / -1;
            text-align: center;
            margin-bottom: 20px;
        }
        .review {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .review img {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
            border-radius: 10px;
        }
        .review p {
            font-size: 16px;
            color: #333;
        }
        .upload-form {
            text-align: center;
            margin-top: 20px;
        }
        .upload-form input[type="file"] {
            margin-bottom: 10px;
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
            <h1>Добро пожаловать в нашу галерею отзывов</h1>
        </div>

        <div class="reviews-container" id="reviewsContainer">
            <h2>Отзывы клиентов</h2>
            <!-- Здесь будут добавляться отзывы -->
        </div>

        <div class="upload-form">
            <h2>Загрузите ваше фото и оставьте отзыв</h2>
            <input type="file" id="imageInput" accept="image/*">
            <textarea id="reviewText" rows="4" cols="50" placeholder="Введите ваш отзыв"></textarea>
            <button onclick="uploadReview()">Загрузить</button>
        </div>

        <div class="footer">
            <p>© 2024 фотостудия "PHOTOLAB". Все права защищены.</p>
        </div>
    </div>

    <script>
        function uploadReview() {
            const imageInput = document.getElementById('imageInput');
            const reviewText = document.getElementById('reviewText').value;

            const formData = new FormData();
            formData.append('photo', imageInput.files[0]);
            formData.append('review', reviewText);

            fetch('upload_review.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Если отзыв успешно загружен, обновляем список отзывов
                    loadReviews();
                } else {
                    alert('Ошибка: ' + data.message);
                }
            })
            .catch(error => {
                console.error('Ошибка:', error);
            });
        }

        function loadReviews() {
            fetch('get_reviews.php')
                .then(response => response.json())
                .then(data => {
                    const reviewsContainer = document.getElementById('reviewsContainer');
                    reviewsContainer.innerHTML = '<h2>Отзывы клиентов</h2>';
                    data.forEach(review => {
                        const reviewDiv = document.createElement('div');
                        reviewDiv.classList.add('review');

                        const img = document.createElement('img');
                        img.src = review.photo;
                        reviewDiv.appendChild(img);

                        const p = document.createElement('p');
                        p.textContent = review.review;
                        reviewDiv.appendChild(p);

                        reviewsContainer.appendChild(reviewDiv);
                    });
                });
        }

        document.addEventListener('DOMContentLoaded', loadReviews);
    </script>
</body>
</html>