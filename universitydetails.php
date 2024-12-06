<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scholarship Eligibility Criteria</title>
    <style>
    
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
        }
        .criteria {
            margin-bottom: 20px;
            line-height: 1.5;
        }
        .criteria p {
            margin-bottom: 10px;
        }
        .contact-button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            display: block;
            margin: 0 auto;
            text-decoration: none;

        }
        .contact-button:hover{
            background-color: gray;
            color: green;
        }
    </style>
</head>
<body>
    <form action="universitydetailslogic.php" method="POST">
    <div class="container">
        <h1> <input type="text" name="title">Scholarship Eligibility Criteria</h1>
        <div class="criteria">
            <h2> <input type="text" name="title1"> Eligibility Criteria</h2>
            Required:<textarea rows="3" name="required"></textarea><!---- <p>Academic requirements: GPA of 3.5 or higher</p>
            <p>Financial need: Must demonstrate financial need</p>
            <p>Deadline: May 1st, 2024</p>-->
        </div>
        <div class="criteria">
            <h2><input type="text" name="title2"> ALU Scholarship </h2>
            Benefits:<textarea rows="3" name="details"></textarea>
           <!---- <p>Academic requirements: GPA of 3.0 or higher</p>
            <p>Extracurricular activities: Active involvement in community service</p>
            <p>Deadline: June 15th, 2024</p>---->
        </div>
        <input type="submit" name="submit">
    </div>
    </form>
</body>
</html>
