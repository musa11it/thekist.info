<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>
    <style>
        /* CSS styles for the page */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
        }
        .faq-item {
            margin-bottom: 20px;
        }
        .question {
            font-weight: bold;
            cursor: pointer;
        }
        .answer {
            display: none;
            padding-left: 20px;
        }
        .answer p {
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Frequently Asked Questions</h1>
        <div class="faq-item">
            <div class="question">What is thekist.info?</div>
            <div class="answer">
                <p>thekist.info provides guidance for students applying for scholarships in Rwanda and abroad, shares opportunity news, and sponsors children from poor families to access quality education.</p>
            </div>
        </div>
        <div class="faq-item">
            <div class="question">Why do we use it?</div>
            <div class="answer">
                <p>We use Thekist.info to simplify scholarship applications, stay informed about opportunities, and support underprivileged children in accessing education, helping students achieve their academic and career goals effectively.</p>
            </div>
        </div>
        <div class="faq-item">
            <div class="question">Where does it located?</div>
            <div class="answer">
                <p>Kigali-nyarugenge</p>
            </div>
        </div>
        <div class="faq-item">
            <div class="question">How can I get help?</div>
            <div class="answer">
                <p>You can get help from Thekist.info by visiting the platform, exploring available scholarships, accessing guidance for applications, staying updated on opportunities, or applying for sponsorships if eligible.</p>
            </div>
        </div>
    </div>

    <script>
        // JavaScript for toggling answer visibility
        const questions = document.querySelectorAll('.question');
        questions.forEach(question => {
            question.addEventListener('click', () => {
                const answer = question.nextElementSibling;
                answer.style.display = answer.style.display === 'block' ? 'none' : 'block';
            });
        });
    </script>
</body>
</html>
