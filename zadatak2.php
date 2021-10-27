<!DOCTYPE HTML>
<html>
	<head>
		<title>Programiranje web aplikacija</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="Matija Hanžeković">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
		<link rel="stylesheet" href="style.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	</head>
    <body>
        <main class="container">
			<h1 class="mt-4 mb-4">Izračunaj prosjek ocjena kolokvija:</h1>
            <form action="" method="POST">
                <div class="form-group row mt-4 mb-2">
                    <label for="mark1" class="col-sm-2 col-form-label">Ocjena 1.kolokvija <span style="color: red;">*</span></label>
                    <div class="col-sm-4">
                      <input type="number" class="form-control" id="mark1" min="0" max="5" name="mark1" required>
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="mark2" class="col-sm-2 col-form-label">Ocjena 2.kolokvija <span style="color: red;">*</span></label>
                    <div class="col-sm-4">
                      <input type="number" class="form-control" id="mark2" min="0" max="5" name="mark2" required>
                    </div>
                </div>
                <div class="form-group row mb-2">
                  <div class="col-sm-4">
                    <button type="submit" class="btn btn-primary">Calculate</button>
                  </div>
                </div>
              </form>

              <?php
                  $a = !empty($_POST["mark1"]) ? $_POST["mark1"] : 0;
                  $b = !empty($_POST["mark2"]) ? $_POST["mark2"] : 0;

                  if (!empty($a) && !empty($b)) {
                    if ($a == 1 || $b == 1) {
                        $result = 1;
                    } else {
                        $result = round(($a + $b) / 2);
                    }
                  } else {
                    $result = 0;
                  }

              ?>
              <p>
                  Ocjena iz predmeta je: <?php print $result ?>
              </p>
        </main>       
    </body>    
</html>    