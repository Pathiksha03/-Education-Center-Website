<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore Courses</title>
    <link rel="stylesheet" href="../css/courses.css">
</head>
<body>
    <?php include('navbar.php'); ?>

    <!-- Courses Section -->
    <section class="courses">
        <div class="container">
            <h2>Our Courses</h2>
            <div class="course-grid">
                <!-- Course 1 -->
                <div class="course-card" onclick="showDetails('course1')">
                    <img src="../images/coding.jpg" alt="Course 1">
                    <h3>Introduction to Programming</h3>
                    <p class="short-description">Learn the basics of programming with hands-on projects.</p>
                    <div class="course-info">
                        <span class="price">RS. 6000</span>
                        <button class="cta-btn">Read More</button>
                    </div>
                </div>
                <!-- Course 2 -->
                <div class="course-card" onclick="showDetails('course2')">
                    <img src="../images/ds.jpg" alt="Course 2">
                    <h3>Advanced Data Science</h3>
                    <p class="short-description">Deep dive into data science with advanced techniques and tools.</p>
                    <div class="course-info">
                        <span class="price">RS. 5000</span>
                        <button class="cta-btn">Read More</button>
                    </div>
                </div>
                <!-- Course 3 -->
                <div class="course-card" onclick="showDetails('course3')">
                    <img src="../images/wd.jpg" alt="Course 3">
                    <h3>Web Development Bootcamp</h3>
                    <p class="short-description">Become a web developer with our comprehensive bootcamp.</p>
                    <div class="course-info">
                        <span class="price">RS. 5000</span>
                        <button class="cta-btn">Read More</button>
                    </div>
                </div>
            </div>
            <!-- Course Details Section -->
            <div id="course-details" class="course-details">
                <!-- Details will be loaded here -->
            </div>
        </div>
    </section>

    <?php include('footer.php'); ?>

    <!-- JavaScript -->
    <script>
        function showDetails(courseId) {
            const courseDetails = {
                course1: {
                    title: "Introduction to Programming",
                    description: "Learn the basics of programming with hands-on projects. This course covers fundamental programming concepts and practical applications.",
                    price: "RS. 6000",
                    image: "../images/slideshow1.jpg",
                },
                course2: {
                    title: "Advanced Data Science",
                    description: "Deep dive into data science with advanced techniques and tools. This course explores machine learning, data analysis, and more.",
                    price: "RS. 5000",
                    image: "../images/slideshow2.jpg",
                },
                course3: {
                    title: "Web Development Bootcamp",
                    description: "Become a web developer with our comprehensive bootcamp. Learn HTML, CSS, JavaScript, and more in an immersive learning experience.",
                    price: "RS. 5000",
                    image: "../images/slideshow3.jpg",
                }
            };

            const details = courseDetails[courseId];
            const detailsContainer = document.getElementById('course-details');
            detailsContainer.innerHTML = `
                <h3>${details.title}</h3>
                <img src="${details.image}" alt="${details.title}" class="course-image">
                <p>${details.description}</p>
                <span class="price">${details.price}</span>
                <a href="register.php?course=${encodeURIComponent(details.title)}" class="cta-btn">Register Now</a>
            `;
            detailsContainer.classList.add('active');
        }

        // Close the details section when clicking outside
        document.addEventListener('click', function(event) {
            const detailsContainer = document.getElementById('course-details');
            const isClickInside = detailsContainer.contains(event.target);
            const isClickOnCard = event.target.closest('.course-card');

            if (!isClickInside && !isClickOnCard) {
                detailsContainer.classList.remove('active');
            }
        });
    </script>
</body>
</html>
