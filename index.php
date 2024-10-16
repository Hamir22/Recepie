<?php
    include 'group.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe Sharing Website</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: "Roboto", sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

nav {
    display: flex;
    justify-content: space-between;
    background-color: white;
    padding: 20px;
}


.logo-img {
    width: 70px; /* Adjust the width of the logo image */
    margin-left: 40px;
}

.nav-links {
    list-style: none;
    display: flex;
}

.nav-links li {
    margin-right: 20px;
}

.nav-links a {
    
    color: black;
    text-decoration: none;
    font-size: 18px;
}
.nav-links a:hover{
    border-bottom: 3px solid #e8ff64;
}

/* Intro Section */
.intro {
    display: flex;
    justify-content: space-between;
    padding: 60px;
    background-color: #dff36f;
}

.intro-text {
    width: 50%;
}

.intro-text h1 {
    font-size: 36px;
    margin-bottom: 20px;
    margin-top: 50px;
}

.intro-text p {
    font-size: 14px;
    margin-bottom: 20px;
}
.intro-image{
    width: 50%;
    display: flex;
}
.intro-image img:nth-child(1){
    position:absolute;
    width: 20%;
    border-radius: 10px;
    margin-left: 135px;
    margin-top: 20px;
}
.intro-image img:nth-child(2){
    position:absolute ;
    width: 20%;
    border-radius: 10px;
    margin-left: 160px;
   
}
.intro-image img:hover{
    opacity:0.9;
   
}
.our-recipes {
    text-align: center;
    padding: 50px;
    background-color: #fff;
}

.our-recipes h2 {
    font-size: 32px;
    margin-bottom: 40px;
}
.our-recipes p {
     font-weight : 500;
   
}

.recipe-gallery {
    display: flex;
    justify-content: space-around;
}

.recipe-img {
    width: 200px;
    height: 300px;
    border-radius: 10px;
    transition: transform 0.3s ease;
}

.recipe-img:hover {
    transform: scale(1.1);
    opacity: 0.8;
}

/* Footer */
footer {
    background-color: #333;
    padding: 20px;
    text-align: center;
    color: white;
}

.social-icons {
    margin-bottom: 10px;
}

.social-icons img {
    width: 30px;
    margin: 0 10px;
}

.contact-info p {
    margin: 0;
}
.btn1{
    background-color:black;
    border:  none;
    color: white;
    padding: 8px;
    border-radius: 5px;


}
.btn1:hover{
    color:#e8ff64;
}

.description-container {
            max-width: 900px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .description-container h1 {
            text-align: center;
            font-size: 36px;
            color: #333;
            margin-bottom: 20px;
        }

        .description-container p {
            font-size: 18px;
            line-height: 1.6;
            color: #555;
            text-align: justify;
        }

        .description-container .highlight {
            font-weight: bold;
            color: #e67e22;
        }

        .description-container img {
            display: block;
            margin: 20px auto;
            width: 100%;
            max-width: 500px;
            border-radius: 10px;
        }

        @media (max-width: 600px) {
            .description-container {
                padding: 10px;
            }

            .description-container h1 {
                font-size: 28px;
            }

            .description-container p {
                font-size: 16px;
            }
        }

        .faq-section {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .faq-section h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
            font-size: 28px;
        }

        .faq-item {
            margin-bottom: 10px;
            border-bottom: 1px solid #ddd;
        }

        .faq-item h3 {
            font-size: 18px;
            margin: 0;
            padding: 15px;
            background-color: #f2f2f2;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .faq-item h3:hover {
            background-color: #e67e22;
            color: white;
        }

        .faq-item p {
            display: none;
            padding: 15px;
            margin: 0;
            background-color: #fafafa;
            opacity: 0;
            transition: opacity 0.5s ease-in;
            transition-delay: 2s; /* Delay of 1.5 seconds before showing the answer */
        }

        /* Show answer after hover with delay */
        .faq-item:hover p {
            display: block;
            opacity: 1;
        }
    </style>
    
</head>
<body>
    <!-- Navigation Bar -->
    <nav>
        <!-- Logo as an image -->
        <div class="logo">
            <img src="logo1.webp" alt="RecipeShare Logo" class="logo-img">
        </div>
        <ul class="nav-links">
            <li><a href="#faq"><b>FAQ</b></a></li>
            <li><a href="#about"><b>About Us</b></a></li>
            <li><a href="#recepies"><b>Recipies</b></a></li>
            <li><a href="#"><b>Services</b></a></li>
            <li><a href="#" ><b>Login</b></a></li>
            <li><a href="#" ><b>Signup</b></a></li>
        </ul>
    </nav>

    <!-- Intro Section -->
    <section class="intro" >
        <div class="intro-text">
            <h1>Delicious Recipes at Your Fingertips</h1>
            <p>Explore, share, and enjoy the best recipes from around the world.Recipe sharing is a wonderful way to connect people through food, allowing individuals to exchange culinary ideas, tips, and traditions.
            </p>
            <button class="btn1"><b>Get Started</b></button>
            
        </div>
        <div class="intro-image">
            <img src="pic10.jpg" alt="Delicious Recipe">
            <img src="pic9.jpg" alt="Delicious Recipe">
        </div>
    </section>

    
  

    <section id="about">
    <div class="description-container">
        <h1>Welcome to Our Recipe Sharing Website</h1>
        <img src="pic11.jpg" alt="Delicious Food">
        <p>
            Our <span class="highlight">Recipe Sharing Website</span> is a place where food lovers can come together to explore and share their favorite dishes. Whether you are an experienced chef or just starting out, you'll find a variety of delicious recipes to try. 
        </p>
        <p>
            Browse through different categories, from appetizers to desserts, and discover new recipes from all around the world. Our community of users adds new recipes daily, so there's always something new to cook. With step-by-step instructions and tips, you'll never feel lost in the kitchen!
        </p>
        <p>
            Join us today and share your own culinary creations. It's easy and fun. Together, we can build a rich collection of recipes that will inspire food lovers everywhere.
            <br>
            <!-- <br><br>
            <?php
            foreach ($groupMembers as $course) {
                echo "$course<br>";
            }
            ?>
         -->
            
        </p>
    </div>
    </section>

    <!-- Our Recipes Section -->
    <section class="our-recipes" id="recepies">
        <h2>Our Recipes</h2>
        <p>Click on the Images to see the Recepies</p>
        <div class="recipe-gallery">
            <a href=""><img src="pic4.jpg" alt="Recipe 1" class="recipe-img"></a>
            <a href=""><img src="pic8.jpg" alt="Recipe 2" class="recipe-img"></a>
            <a href=""><img src="pic1.jpg" alt="Recipe 3" class="recipe-img"></a>
            <a href=""><img src="pic7.jpg" alt="Recipe 4" class="recipe-img"></a>
            <a href=""><img src="pic2.jpg" alt="Recipe 5" class="recipe-img"></a>
        </div>
    </section>
    <!-- Footer -->
<section id="faq">
    <div class="faq-section">
        <h2>Frequently Asked Questions</h2>
    
        <div class="faq-item">
            <h3>* What is a Recipe Sharing Website?</h3>
            <p>A recipe sharing website is a platform where users can share, discover, and try out recipes from different cuisines. It connects people through a shared love for cooking.</p>
        </div>
    
        <div class="faq-item">
            <h3>* How can I share my own recipes?</h3>
            <p>You can share your recipes by signing up on our website and submitting your recipe along with step-by-step instructions and photos.</p>
        </div>
    
        <div class="faq-item">
            <h3>* Is it free to use the website?</h3>
            <p>Yes, our website is completely free to use for browsing, sharing, and trying out recipes.</p>
        </div>
    
        <div class="faq-item">
            <h3>* Can I save my favorite recipes?</h3>
            <p>Yes, once you're logged in, you can save your favorite recipes to your personal profile for easy access later.</p>
        </div>
    </div>
    
</section>


<?php
    echo "<h2 style='text-align: center;'>Group Members Name</h2>";
        foreach ($groupMembers as $course) {
            echo "<li style='margin-left:30px'>$course</li>"; 
           
        }
       
        ?>
    <footer>
        <div class="social-icons">
            <a href="https://www.tiktok.com"><img src="tiktok.webp" alt="TikTok"></a>
            <a href="https://www.instagram.com"><img src="insta.webp" alt="Instagram"></a>
            <a href="https://www.facebook.com"><img src="twittter.webp" alt="Facebook"></a>
            <a href="https://www.twitter.com"><img src="face.webp" alt="Twitter"></a>
        </div>
        <div class="contact-info">
            <p>Contact us: +123 456 789 | email@example.com</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
