<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/style.css" />
    <title>Welcome to Quiz</title>
</head>

<body>

    <div class="quiz-container" id="quiz">
        <?php
        session_start();
        if (isset($_SESSION['User'])) {
            echo "<h1>Hello " . $_SESSION['User']['uname'] . "</h1>";
        } else {
            header('location:signin.php');
        }
        ?>
        <a href="logout.php">Logout</a>
        <div class="quiz-header">
            <h2 id="question">Question text</h2>
            <ul>
                <li>
                    <input type="radio" name="answer" id="a" class="answer">
                    <label for="a" id="a_text">Question</label>
                </li>

                <li>
                    <input type="radio" name="answer" id="b" class="answer">
                    <label for="b" id="b_text">Question</label>
                </li>

                <li>
                    <input type="radio" name="answer" id="c" class="answer">
                    <label for="c" id="c_text">Question</label>
                </li>

                <li>
                    <input type="radio" name="answer" id="d" class="answer">
                    <label for="d" id="d_text">Question</label>
                </li>
            </ul>
        </div>
        <button id="submit">Submit</button>
    </div>
    <script src="public/script.js"></script>
</body>

</html>