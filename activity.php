<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Recent Activity</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            box-sizing: border-box;
        }

        .container {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 80%;
            max-width: 900px;
            text-align: center;
            margin-top: 20px;
        }

        h1 {
            color: #007BFF;
            font-size: 2.5em;
            margin-top: 0;
            margin-bottom: 15px;
        }

        p {
            color: #555;
            font-size: 1.1em;
            line-height: 1.6;
            margin-bottom: 30px;
        }

        .recent-activity {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 20px;
            margin-bottom: 30px;
        }

        .activity-card {
            background-color: #4CAF50;
            color: white;
            padding: 20px;
            border-radius: 10px;
            width: 200px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            transition: transform 0.3s;
        }

        .activity-card:hover {
            transform: scale(1.05);
        }

        .activity-card h3 {
            margin-bottom: 15px;
            font-size: 1.5em;
        }

        .activity-card p {
            font-size: 1.1em;
        }

        .cta-button {
            background-color: #ff9800;
            color: white;
            padding: 15px 30px;
            border-radius: 25px;
            font-size: 1.3em;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .cta-button:hover {
            background-color: #e68900;
        }

        @media (max-width: 768px) {
            body {
                padding: 20px;
            }

            .container {
                padding: 20px;
                margin-top: 0;
            }

            .recent-activity {
                flex-direction: column;
                align-items: center;
            }

            .activity-card {
                width: 100%;
                max-width: 300px;
                margin: 10px 0;
            }

            h1 {
                margin-top: 0;
                font-size: 2em;
            }

            p {
                font-size: 1em;
                margin-bottom: 20px;
            }

            .cta-button {
                font-size: 1.1em;
                padding: 12px 25px;
            }
        }

    </style>
</head>
<body>

<div class="container">
    <h1>Track Your Journey Towards Impact</h1>
    <p>You've been making amazing moves! Take a look at some of the ways you're actively engaging with opportunities. Every action, big or small, brings you closer to positive change.</p>

    <div class="recent-activity">
        <div class="activity-card">
            <h3>Explore New Opportunities</h3>
            <p>You've started exploring different paths. Keep an eye out for new opportunities to advance your goals!</p>
        </div>

        <div class="activity-card">
            <h3>Consider Making a Difference</h3>
            <p>Every moment is a chance to make an impact. Think about how you can further contribute to a cause you care about!</p>
        </div>

        <div class="activity-card">
            <h3>Track Your Progress</h3>
            <p>Stay on top of your progress! Check out the activities you've engaged with and discover new ways to grow.</p>
        </div>
    </div>

    <p>You're on the right track! Keep up the momentum and explore more ways to make a difference.</p>

    <a href="dashboard.php" class="cta-button">Continue Your Journey</a>
</div>

</body>
</html>
