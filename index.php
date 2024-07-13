<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Website</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <?php require "blocks/header.php"; ?>
  <main class="container p-5">
    <h2 class="mb-5">Our latests posts</h2>
    <div class="d-flex flex-wrap posts-cards">
    <?php for ($i = 0; $i < 5; $i++): ?>
    <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h3 class="my-0 fw-normal">Article</h3>
          </div>
          <div class="card-body">
            <img src="img/img_<?php echo $i; ?>.jpg" alt="" class="img-thumbnail mb-3">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint modi, aspernatur minima, eligendi rerum facilis quos provident quibusdam magnam labore, vitae inventore odio blanditiis? Ex doloribus earum temporibus quos veniam?
            </p>
            <button type="button" class="w-100 btn btn-lg btn-warning">Read more</button>
          </div>
        </div>
    <?php endfor; ?>
    </div>
  </main>
  <?php require "blocks/footer.php"; ?>
</body>
</html>