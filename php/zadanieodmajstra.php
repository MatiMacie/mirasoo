<!--radio button
film
muzyka
sport
  submit
  po kliku przeniesienie na strone zaznaczeie.php -->
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Hobbi</title>
  </head>
  <body>
    <form method="post">
        <input type="radio" name="hobby" value="f">film<br>
        <input type="radio" name="hobby" value="m">muzyka<br>
        <input type="radio" name="hobby" value="s">sport<br>
        <input type="submit" name="guzik" value="Wyślij"><hr>
    </form>
    <?php
      if (isset($_POST['przycisk'])) {
        $hobby = $_POST['hobby'];
        switch ($hobby) {
          case 'f':
              header("Location: ./5/film.php");
            break;

          case 'm':
              header("Location: muzyka.php");
            break;

          case 's':
              header("Location: sport.php");
                break;
        }
      }

    ?>
  </body>
</html>
