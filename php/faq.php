<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>
    <link rel="stylesheet" href="../css/faq.css">
</head>
<body>
    <?php include('navbar.php'); ?>

    <!-- FAQ Section -->
    <section class="faq">
        <div class="container">
            <h2>Frequently Asked Questions</h2>
            <div class="faq-item">
                <button class="faq-question" onclick="toggleAnswer('answer1')">What courses do you offer?</button>
                <div id="answer1" class="faq-answer">
                    <p>We offer a variety of courses including programming, data science, web development, and more. Check our courses page for a full list.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question" onclick="toggleAnswer('answer2')">How do I enroll in a course?</button>
                <div id="answer2" class="faq-answer">
                    <p>You can enroll in a course by clicking the "Enroll Now" button on the course page and completing the registration process.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question" onclick="toggleAnswer('answer3')">What payment methods do you accept?</button>
                <div id="answer3" class="faq-answer">
                    <p>We accept various payment methods including credit/debit cards, PayPal, and bank transfers.</p>
                </div>
            </div>
            <!-- Add more FAQ items as needed -->
        </div>
    </section>

    <?php include('footer.php'); ?>

    <script>
        function toggleAnswer(id) {
            const answer = document.getElementById(id);
            answer.classList.toggle('active');
        }
    </script>
</body>
</html>
