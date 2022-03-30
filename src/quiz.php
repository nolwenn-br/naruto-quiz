<!DOCTYPE html>
<head>
	<meta charset="UTF-8" lang="FR">
	
	<title>Naruto Quiz</title>

    <!-- BOOTSTRAP CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- CUSTOM CSS -->
	<link rel="stylesheet" type="text/css" href="public/style.css" />
</head>

<body>
	<div>
		<h1>Naruto Quiz : testez vos connaissances du lore !</h1>		
		<form action="results.php" method="post" id="quiz">		
            <ol>    
                <li>          
                    <h3>Lequel de ces personnages ne fait pas partie de l'Akatsuki ?</h3> 
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                        <label for="question-1-answers-A">A - Uchiha Itachi </label>
                    </div>
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B">B - Deidara</label>
                    </div>
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C">C - Tobi</label>
                    </div>
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D">D - Uchiha Sasuke</label>
                    </div>
                </li>
                
                <li>
                    <h3>De quel village est originaire Zabuza ?</h3>   
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                        <label for="question-2-answers-A">A - Konoha no Kuni</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B">B - Ame no Kuni</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                        <label for="question-2-answers-C">C - Kiri no Kuni</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                        <label for="question-2-answers-D">D - Aucune de ces réponses</label>
                    </div>
                </li>
                
                <li>
                    <h3>A quelle équipe appartenait Akimichi Chôji ?</h3>
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                        <label for="question-3-answers-A">A - 6</label>
                    </div>
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B">B - 2</label>
                    </div>
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                        <label for="question-3-answers-C">C - 10</label>
                    </div>
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                        <label for="question-3-answers-D">D - Autre</label>
                    </div>
                </li>
                
                <li>
                    <h3>Quel personnage utilise la technique appelée "les paumes jumelles des lions agiles" ?</h3>
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                        <label for="question-4-answers-A">A - Rock Lee</label>
                    </div>
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B">B - Inuzuka Kiba</label>
                    </div>
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                        <label for="question-4-answers-C">C - Hyuga Hinata</label>
                    </div>
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                        <label for="question-4-answers-D">D - Maito Gai</label>
                    </div>
                </li>
    
                <li>
                    <h3>Quel est le nom des techniques utilisant l'élément du Bois ?</h3>
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                        <label for="question-5-answers-A">A - Raiton</label>
                    </div>
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                        <label for="question-5-answers-B">B - Doton</label>
                    </div>
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                        <label for="question-5-answers-C">C - Suiton</label>
                    </div>
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                        <label for="question-5-answers-D">D - Mokuton</label>
                    </div>
                </li>
            </ol>
            <input type="submit" value="submit" class="submitbtn" />
		</form>
	</div>


</body>

</html>