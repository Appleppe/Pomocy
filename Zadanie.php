<! DOCTYPE html > 
<html>
<head>
<meta charset="utf-8">
    <meta name="HANIA TENEROWICZ" content="width=device-width, initial-scale=1, shrink-to-fit=no">



        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">

                <form>

                        <p>Pingwiny z Madagaskaru</p>

                        <?php

                                if ($_GET) {
                                        $error_message = "";
                                        if (!$_GET["ID"]) {
                                        $error_message = $error_message. 'brak identyfikatora';
                                }
                                if (!$_GET["Person"]) {
                                        $error_message = $error_message. 'brak głosu';
                                }
                                if ($error_message) {
                                echo '<div class="alert alert-danger" role="alert">Głos nie przesłany!</div>';
                                }
                                else {
                                echo '<div class="alert alert-success" role="alert">Głos przesłany!</div>';
                                }
                        }

                        ?>
                        <div class="form-group">
                                <input type="name" name="ID" class="form-control" placeholder="Podaj numer ID...">
                        </div>

                        <div class="form-check">
                                <input class="form-check-input" type="radio" name="Person" id="Person1" value="Kowalski" checked>
                                <label class="form-check-label" for="Person1">
                                Kowalski
                                </label>
                        </div>

                        <div class="form-check">
                                <input class="form-check-input" type="radio" name="Person" id="Person2" value="Szeregowy" checked>
                                <label class="form-check-label" for="Person2">
                                Szeregowy
                                </label>
                        </div>

                        <div class="form-check">
                                <input class="form-check-input" type="radio" name="Person" id="Person3" value="Skiper" checked>
                                <label class="form-check-label" for="Person3">
                                Skiper
                                </label>
                        </div>

                        <div class="form-check">
                                <input class="form-check-input" type="radio" name="Person" id="Person4" value="Rico" checked>
                                <label class="form-check-label" for="Person4">
                                Rico
                                </label>
                        </div>

                        <div class="form-check">
                                <input class="form-check-input" type="radio" name="Person" id="Person5" value="Lemury" checked>
                                <label class="form-check-label" for="Person5">
                                Lemury
                                </label>
                        </div>

                        <div>
                        <button type="submit" class="btn btn-primary">Zagłosuj</button>
                        </div>

                </form>

                <!-- <div class="alert alert-success" role="alert">
                        A simple success alert with  Give it a click if you like.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                        </button>
                </div>

                <div class="alert alert-danger" role="alert">
                        A simple success alert with  Give it a click if you like.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                        </button>
                </div> -->



        </div>
</body>
</html>