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
        <?php
            $cars = array("Citroen", "Peugot", "Bmw", "Audi", "Mercedes");

            print "Prvi način ispisa: <br>";
            print "Cars: <ol><li>" . $cars[0] . "</li>" . 
                 "<li>" . $cars[1] . "</li>" . 
                 "<li>" . $cars[2] . "</li>" . 
                 "<li>" . $cars[3] . "</li>" . 
                 "<li>" . $cars[4] . "</li></ol>";

            print "Drugi način ispisa: <br>";
            print "Cars: <ol>";
            foreach ($cars as $car) {
                print "<li>" . $car . "</li>";
            }
            print "</ol>";
        ?>
    </body>    

</html>    