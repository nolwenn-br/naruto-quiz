<!DOCTYPE html>
<head>
	<meta charset="UTF-8" lang="FR">
	
	<title>Naruto Quiz - Vos résultats</title>

    <!-- BOOTSTRAP CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="px-5 mx-2">
	<div class="container-fluid">
		<h1 class="text-center m-1 p-3">Résultats du quiz</h1>
        <?php
        // I'm initializing necessary variables
            // Final result
            $result = 0;

            // Correct answers
            $goodAnswer1 = "D";
            $goodAnswer2 = "C";
            $goodAnswer3 = "C";
            $goodAnswer4 = "B";
            $goodAnswer5 = "D";

                // If $_POST exists and not empty, the following scripts will be executed
                if (isset($_POST) && empty($_POST == false)) {
                    $answer1 = $_POST['question-1-answers'];
                    $answer2 = $_POST['question-2-answers'];
                    $answer3 = $_POST['question-3-answers'];
                    $answer4 = $_POST['question-4-answers'];
                    $answer5 = $_POST['question-5-answers'];

                // Comparing answers with correct answers stored upstream
                if ($answer1 == $goodAnswer1) {
                    $result++;
                }
                if ($answer2 == $goodAnswer2) {
                    $result++;
                }
                if ($answer3 == $goodAnswer3) {
                    $result++;
                }
                if ($answer4 == $goodAnswer4) {
                    $result++;
                }
                if ($answer5 == $goodAnswer5) {
                    $result++;
                }
                ?>
                <!-- RESULT -->
                <div class="text-center">
                    <h4 class="text-center"><?= $result; ?> sur 5</h4>
                <?php 

                // Personalized sentences according to the user's final result
                if ($result === 0 || $result === 1) { echo "<h4>On peut pas dire que Naruto soit ta grande passion...</h4>"; }
                if ($result === 2 || $result === 3) { echo "<h4>Peut mieux faire...</h4>"; }
                if ($result === 4 || $result === 5) { echo "<h4>Joli !</h4>"; }
                ?>

                <a href="quiz.php" class="d-block">Refaire le Quiz</a> 

                </div>

                <?php 
                }
                ?>
	</div>


</body>

</html>