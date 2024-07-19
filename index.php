<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Final Web</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <div class="menu container">
            <a href="" class="logo">Logo</a>
            <input type="checkbox" id="menu">
            <label for="menu">
                <img src="images/menu.png" class="menu-icon" alt="menu">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Company</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
        </div>

        <div class="header-content container">
            <div class="header-txt">
                <h1>Medical center</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque natus ipsa tempore provident vel dignissimos cupiditate consectetur enim aspernatur quos iste dolores, necessitatibus at tenetur earum laudantium suscipit illo veniam. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rerum reprehenderit itaque porro voluptate? Minima quos architecto, asperiores modi voluptatum quas aperiam rerum delectus nobis cupiditate explicabo? Minus dicta eum unde.</p>
                <a href="#" class="btn-1">More information</a>
            </div>
            <div class="header-img">
                <img src="images/left.png" alt="">
            </div>
        </div>
    </header>

    <section class="about container">
        <div class="about-img">
            <img src="images/about.png" alt="">
        </div>
        <div class="about-txt">
            <h2>Our Company</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio maxime fugiat iste quia aliquam maiores alias molestiae dolorum. Neque quisquam deserunt odit praesentium aliquam cum delectus cumque nihil tempore.</p>
            <br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio maxime fugiat iste quia aliquam maiores alias molestiae dolorum. Neque quisquam deserunt odit praesentium aliquam cum delectus cumque nihil tempore.</p>
            <br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio maxime fugiat iste quia aliquam maiores alias molestiae dolorum. Neque quisquam deserunt odit praesentium aliquam cum delectus cumque nihil tempore.</p>
        </div>
    </section>

    <main class="servicios">
        <h2>Servicios</h2>
        <div class="servicios-content container">
            <div class="servicio-1">
                <i class="fa-sharp fa-solid fa-hospital-user"></i>
                <h3>Pediatria</h3>
            </div>
            <div class="servicio-1">
                <i class="fa-sharp fa-solid fa-stethoscope"></i>
                <h3>Ginecología</h3>
            </div>
            <div class="servicio-1">
                <i class="fa-solid fa-bed-pulse"></i>
                <h3>Dermatología</h3>
            </div>
            <div class="servicio-1">
                <i class="fa-solid fa-hospital"></i>
                <h3>Cardiología</h3>
            </div>
        </div>
    </main>

    <section class="formulario container">
        <form method="post" autocomplete="off">
            <h2>Agenda Consulta</h2>
            <div class="input-group">
                <div class="input-container">
                    <input type="text" name="name" placeholder="Nombre y Apellido">
                    <i class="fa-solid fa-user"></i>
                </div>
                <div class="input-container">
                    <input type="tel" name="phone" placeholder="Teléfono">
                    <i class="fa-solid fa-phone"></i>
                </div>
                <div class="input-container">
                    <textarea name="message" placeholder="Mensaje"></textarea>
                </div>
                <input type="submit" name="send" class="btn" onclick="myfunction()">
            </div>
        </form>
    </section>

    <footer class="footer">
        <div class="footer-content container">
            <div class="link">
                <a href="#" class="logo">Logo</a>
            </div>
            <div class="link">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Company</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <?php
    include("send.php");
    ?>

    <script>
        function myfunction() {
            window.location.href = "";
        }
    </script>
</body>
</html>
