<!DOCTYPE html>
<html lang="en">
<html lang="en">

<head>
  <title>tutor javvascrip</title>
  <link rel="stylesheet" href="LayoutWeb.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;500;600;800&display=swap" rel="stylesheet">
  <script src="myscript.js"></script>

  </script>
</head>

<body>
  <div class="container-fluid">
    <div class="form-group">
      <label for="bill1">bilangan 1</label>
      <input type="number" class="form-control" id="bill1">
    </div>
    <div class="form-group">
      <label for="bill2">bilangan 2</label>
      <input type="number" class="form-control" id="bill2">
    </div>
    <h1>hasil Operasi: <div id="hasil"></div>
    </h1>
    <input type="button" name="penjumlahan" class="btn btn-success" value="penjumlahan" onclick="tambah();">
    <input type="button" name="perkalian" class="btn btn-warning" value="perkalian" onclick="kali();">
  </div>



</body>

</html>
