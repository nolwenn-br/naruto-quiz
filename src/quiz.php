<!DOCTYPE html>
<head>
	<meta charset="UTF-8" lang="FR">
	<!-- HTML code inspired by WebDevTricks.com -->
	<title>Naruto Quiz</title>

    <!-- BOOTSTRAP CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="px-5 mx-2">
	<div class="container-fluid">
		<h1 class="text-center m-1 p-3">Naruto Quiz : testez vos connaissances du lore !</h1>		
		<form action="results.php" method="post" id="naruto-quiz">		
            <ul class="list-group">    
                <li class="list-group-item">          
                    <h3>Lequel de ces personnages ne fait pas partie de l'Akatsuki ?</h3> 
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="question-1-answers" id="question-1-answers-A" value="A" checked>
                        <label class="form-check-label" for="question-1-answers-A">A - Uchiha Itachi </label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="question-1-answers" id="question-1-answers-B" value="B">
                        <label class="form-check-label" for="question-1-answers-B">B - Deidara</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="question-1-answers" id="question-1-answers-C" value="C">
                        <label class="form-check-label" for="question-1-answers-C">C - Tobi</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="question-1-answers" id="question-1-answers-D" value="D">
                        <label class="form-check-label" for="question-1-answers-D">D - Uchiha Sasuke</label>
                    </div>
                </li>
                
                <li class="list-group-item">
                    <h3>De quel village est originaire Zabuza ?</h3>   
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="question-2-answers" id="question-2-answers-A" value="A" checked>
                        <label class="form-check-label" for="question-2-answers-A">A - Konoha no Kuni</label>
                    </div>
                    
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="question-2-answers" id="question-2-answers-B" value="B">
                        <label class="form-check-label" for="question-2-answers-B">B - Ame no Kuni</label>
                    </div>
                    
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="question-2-answers" id="question-2-answers-C" value="C">
                        <label class="form-check-label" for="question-2-answers-C">C - Kiri no Kuni</label>
                    </div>
                    
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="question-2-answers" id="question-2-answers-D" value="D">
                        <label class="form-check-label" for="question-2-answers-D">D - Aucune de ces réponses</label>
                    </div>
                </li>
                
                <li class="list-group-item">
                    <h3>A quelle équipe appartenait Akimichi Chôji ?</h3>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="question-3-answers" id="question-3-answers-A" value="A" checked>
                        <label class="form-check-label" for="question-3-answers-A">A - 7</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="question-3-answers" id="question-3-answers-B" value="B">
                        <label class="form-check-label" for="question-3-answers-B">B - 8</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="question-3-answers" id="question-3-answers-C" value="C">
                        <label class="form-check-label" for="question-3-answers-C">C - 10</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="question-3-answers" id="question-3-answers-D" value="D">
                        <label class="form-check-label" for="question-3-answers-D">D - Autre</label>
                    </div>
                </li>
                
                <li class="list-group-item">
                    <h3>Quel personnage utilise la technique appelée "les paumes jumelles des lions agiles" ?</h3>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="question-4-answers" id="question-4-answers-A" value="A" checked>
                        <label class="form-check-label" for="question-4-answers-A">A - Rock Lee</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="question-4-answers" id="question-4-answers-B" value="B">
                        <label class="form-check-label" for="question-4-answers-B">B - Hyuga Hinata</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="question-4-answers" id="question-4-answers-C" value="C">
                        <label class="form-check-label" for="question-4-answers-C">C - Inuzuka Kiba</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="question-4-answers" id="question-4-answers-D" value="D">
                        <label class="form-check-label" for="question-4-answers-D">D - Maito Gai</label>
                    </div>
                </li>
    
                <li class="list-group-item">
                    <h3>Quel est le nom des techniques utilisant l'élément du Bois ?</h3>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="question-5-answers" id="question-5-answers-A" value="A" checked>
                        <label class="form-check-label" for="question-5-answers-A">A - Raiton</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="question-5-answers" id="question-5-answers-B" value="B">
                        <label class="form-check-label" for="question-5-answers-B">B - Doton</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="question-5-answers" id="question-5-answers-C" value="C">
                        <label class="form-check-label" for="question-5-answers-C">C - Suiton</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="question-5-answers" id="question-5-answers-D" value="D">
                        <label class="form-check-label" for="question-5-answers-D">D - Mokuton</label>
                    </div>
                </li>
            </ul>
            <input type="submit" value="Envoyer" class="list-group-item mx-auto my-3">
		</form>
	</div>


</body>

</html>