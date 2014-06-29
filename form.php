<html>
<head>
  <title>Testing Forms</title>
  <link type="text/css" rel="stylesheet" href="/assets/css/main.css" />
</head>
  <body>
    <?php
    if (array_key_exists('content', $_POST)) {
      echo "You wrote:<pre>\n";
      echo htmlspecialchars($_POST['content']);
      echo "\n</pre>";
    }
    ?>
    <form action="/form" method="post">
      <div><textarea name="content" rows="3" cols="60"></textarea></div>
      <div><input type="submit" value="Sign Guestbook"></div>
    </form>
  </body>
</html>