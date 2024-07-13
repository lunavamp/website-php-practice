<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts | PHP Website</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <?php require "blocks/header.php"; ?>
  <main class="container p-5">
    <h2 class="mb-5">Contact Us</h2>
    <form action="check.php" method="post">
        <input type="email" name="email" placeholder="Email" class="form-control">
        <br>
        <textarea name="message" class="form-control" placeholder="Your message" rows="7"></textarea>
        <br>
        <button type="submit" name="send" class="btn btn-success">Send</button>
    </form>
  </main>
  <?php require "blocks/footer.php"; ?>
</body>
</html>