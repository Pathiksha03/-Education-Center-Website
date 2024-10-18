<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../css/index.css">
    <!-- Include Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
</head>
<body>
    <?php include('../php/navbar.php'); ?>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Welcome to Education Center</h1>
            <p>Your journey to knowledge starts here. Explore our wide range of courses and elevate your skills.</p>
            <a href="../php/courses.php" class="cta-btn">Explore Courses</a>
        </div>
    </section>

    <!-- Slideshow/Carousel Section -->
    <section class="slideshow">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="../images/wd1.jpeg" alt="Course 1">
                    <div class="slide-content">
                        <h2>Featured Course 1</h2>
                        <p>Learn the basics of programming with hands-on projects.</p>
                        <br><br>
                        <a href="../php/courses.php" class="cta-btn">Learn More</a>
                        <br><br>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="../images/img1.jpg" alt="Course 2">
                    <div class="slide-content">
                        <h2>Featured Course 2</h2>
                        <p>Deep dive into data science with advanced techniques and tools.</p>
                        <br><br>
                        <a href="../php/courses.php" class="cta-btn">Learn More</a>
                        <br><br>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="../images/wd1.jpeg" alt="Course 3">
                    <div class="slide-content">
                        <h2>Featured Course 3</h2>
                        <p>Become a web developer with our comprehensive bootcamp.</p>
                        <br><br>
                        <a href="../php/courses.php" class="cta-btn">Learn More</a>
                        <br><br>
                    </div>
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Navigation -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

    <!-- Featured Courses Section -->
    <section class="featured-courses">
        <div class="container">
            <h2>Featured Courses</h2>
            <div class="course-grid">
                <div class="course-card">
                    <img src="../images/slideshow1.jpg" alt="Course 1">
                    <div class="course-info">
                        <h3>Introduction to Programming</h3>
                        <a href="../php/courses.php" class="cta-btn">Explore</a>
                    </div>
                </div>
                <div class="course-card">
                    <img src="../images/slideshow2.jpg" alt="Course 2">
                    <div class="course-info">
                        <h3>Advanced Data Science</h3>
                        <a href="../php/courses.php" class="cta-btn">Explore</a>
                    </div>
                </div>
                <div class="course-card">
                    <img src="../images/slideshow3.jpg" alt="Course 3">
                    <div class="course-info">
                        <h3>Web Development Bootcamp</h3>
                        <a href="../php/courses.php" class="cta-btn">Explore</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials">
        <div class="container">
            <h2>What Our Students Say</h2>
            <div class="testimonial-card">
                <p>"The courses offered by Education Center are top-notch. The instructors are knowledgeable and the content is very well-structured."</p>
                <h4>John Doe</h4>
                <p>Software Engineer</p>
            </div>
            <div class="testimonial-card">
                <p>"I learned so much from the data science course. It was challenging but very rewarding. Highly recommend it to anyone looking to advance their career."</p>
                <h4>Jane Smith</h4>
                <p>Data Scientist</p>
            </div>
        </div>
    </section>

    <!-- Newsletter Signup Section -->
    <section class="newsletter">
        <div class="container">
            <h2>Stay Updated</h2>
            <p>Subscribe to our newsletter for the latest updates on courses, promotions, and more.</p>
            <form action="php/subscribe.php" method="post">
                <input type="email" name="email" placeholder="Enter your email" required>
                <button type="submit" class="cta-btn">Subscribe</button>
            </form>
        </div>
    </section>

    <?php include('../php/footer.php'); ?>

    <!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true, // Enable looping
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        autoplay: {
            delay: 2000,
            disableOnInteraction: false, // Continue autoplay after interactions
        },
    });
</script>

</body>
</html>
