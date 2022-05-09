<?php
//données non envoyées
$post = false;

//données envoyées
//$post = true;
//aucune erreur
$errors =[];
//une erreur dans le champ test
$errors = [
    'test'=>"Le champ n'est pas correctement rempli.",
];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form post</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>form post</h1>
                    <form action="/form-validate.php" method="post">
                        <div class="mb-3">
                            <label for="test" class="form-label">Test</label>
                            <input id="test" class="form-control 
                            <?php if($post && empty($errors['test'])):?> 
                                is-valid 
                            <?php endif ?>
                            <?php if($post && !empty($errors['test'])):?> 
                                is-invalid 
                            <?php endif ?>
                            " type="text" type="text" name="test" value="" placeholder="foo bar baz">
                            <div class="form-text">Texte d'aide pour remplir le champ</div>
                            <?php if($post && empty($errors['test'])):?>
                                <div class="valid-feedback">Le champ est correctement rempli</div>
                            <?php endif ?>
                            <?php if($post && !empty($errors['test'])):?>
                                <div class="invalid-feedback"><?= $errors['test']?> </div>
                            <?php endif ?>

                            <div class="mb-3">
                                <input class='form-control' type='text' name ='login' id='login' 
                                placeholder="votre login" required>
                            </div>
                                <!-- version formulaire vierge -->
                                <div class="mb-3">
                            <label for="test" class="form-label">Test</label>
                            <input id="test" class="form-control  
                            
                            " type="text" type="text" name="test" value="" placeholder="foo bar baz">
                            <div class="form-text">Texte d'aide pour remplir le champ</div>
                            
                                <div class="valid-feedback">Le champ est correctement rempli</div>
                            
                            
                                <div class="invalid-feedback"> </div>
                            

                            <div class="mb-3">
                                <input class='form-control' type='text' name ='login' id='login' 
                                placeholder="votre login" required>
                            </div>
                                <!-- formulaire correct -->
                                <div class="mb-3">
                            <label for="test" class="form-label">Test</label>
                            <input id="test" class="form-control is-valid" type="text" type="text" name="test" value="" placeholder="foo bar baz">
                            <div class="form-text">Texte d'aide pour remplir le champ</div>
                            <div class="valid-feedback">Le champ est correctement rempli</div>

                            <div class="mb-3">
                                <input class='form-control' type='text' name ='login' id='login' 
                                placeholder="votre login" required>
                            </div>
                                <!-- formulaire erreur -->
                            <div class="mb-3">
                            <label for="test" class="form-label">Test</label>
                            <input id="test" class="form-control is-invalid" type="text" type="text" name="test" value="" placeholder="foo bar baz">
                            <div class="form-text">Texte d'aide pour remplir le champ</div>
                            
                            <div class="invalid-feedback"> Le champ n'est pas correctement rempli. </div>
                            <!-- retour à la normale -->
                            <div class="mb-3">
                            <input class='form-control' type='text' name ='login' id='login' 
                            placeholder="votre login" required>
                            </div>
                            <div class="mb-3">
                            <input class='form-control' type='password' name ='password' id='password' 
                            placeholder="votre password" required>
                            </div>
                            <div class="mb-3">
                                <p> Votre fruit préféré </p>
                                <div class="form-check">
                                <input type="radio" name="fruits" id="fruit_1" value="Ananas">
                                <label for="fruit_1">Ananas </label>
                                </div>
                                <div class="form-check">
                                <input type="radio" name="fruits" id="fruit_2" value="Banane">
                                <label for="fruit_2">Banane </label>
                                </div>
                                <div class="form-check">
                                <input type="radio" name="fruits" id="fruit_3" value="Cerise">
                                <label for="fruit_3">Cerise </label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <p>Votre plat préféré</p>
                                <div class="form-check">
                                <input  class="form-check-input" type="checkbox" name="plat[]"
                                id="plat_1" value="Lasagne">
                                <label class="form-check-label" for="plat_1">LASAGNE </label>
                                </div>
                                <div class="form-check">
                                <input  class="form-check-input" type="checkbox" name="plat[]"
                                id="plat_2" value="Ramen">
                                <label class="form-check-label" for="plat_2">RAMEN </label>
                                </div>
                                <div class="form-check">
                                <input  class="form-check-input" type="checkbox" name="plat[]"
                                id="plat_3" value="Entrecote">
                                <label class="form-check-label" for="plat_3">ENTRECOTE </label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <p>Votre film préféré</p>
                                <select name="film" id="film" >
                                    <option value="interstellar">interstellar</option>
                                    <option value="fight club">Fight club</option>
                                    <option value="shining">shining</option>
                                </select>
                            </div>
                        <div class="mb-3">
                            <p>Vos chanteurs préférés :</p>
                            <select name="singers[]" id="singers" multiple>
                                <option id="singers_1" value="Celine Dion">Celine Dion</option>
                                <option id="singer_2" value="linkin park">Linkin Park</option>
                                <option id="singer_3" value="jean-jacques goldman">Jean-Jacques Goldman</option>
                            </select>
                        </div>

                        <div class="mb-3">
                                <p>Votre plat préféré</p>
                                <div class="custom-checkbox">
                                <div class="form-check">
                                <input  class="form-check-input" type="checkbox" name="plat_alt[]"
                                id="plat_alt_1" value="Lasagne">
                                <label class="form-check-label" for="plat_alt_1">LASAGNE </label>
                                </div>
                                <div class="form-check">
                                <input  class="form-check-input" type="checkbox" name="plat_alt[]"
                                id="plat_alt_2" value="Ramen">
                                <label class="form-check-label" for="plat_alt_2">RAMEN </label>
                                </div>
                                <div class="form-check">
                                <input  class="form-check-input" type="checkbox" name="plat_alt[]"
                                id="plat_alt_3" value="Entrecote">
                                <label class="form-check-label" for="plat_alt_3">ENTRECOTE </label>
                                </div>
                                </div>
                            </div>
                        <div class="mb-3">
                        <button class="btn btn-primary" type="submit">Valider</button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</body>
</html>