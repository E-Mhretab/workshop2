<?php
global $db;
include_once "modules/database.php";

  ?>
<?php
$stmt = $db->prepare("SELECT * FROM smartphone");
$stmt->execute();
$smartphones = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
    <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>File upload</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

  <div class="container r">
      <div class="row">
          <?php
          foreach ($smartphones as $smartphone){
          ?>
          <div class="col-3">
<div class="card" style="width: 18rem;">
  <img src="<?php echo  'uploads/'. $smartphone['image']?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $smartphone['name']?></h5>
    <a href="#" class="btn bg-warning">Update</a>  <a href="#" class="btn bg-danger text-light">Delete</a>
  </div>
</div>
</div>
          <?php
          }
          ?>
</div>
</div>
  <a class="bg-primary btn" href="insert.php">Insert</a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>