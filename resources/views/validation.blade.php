<html>
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

    <script >
     function validateForm (){
    var nrp = document.getElementById("nrp");
    var msg = document.getElementById("msg");

    if (nrp.value == "" ) {
                nrp.focus() ;
                nrp.placeholder = "contoh : 5026221078"
                alert("NRP harus diisi!");
                return false ;
            }

            if (isNaN(nrp.value) == true ) {
                // alert("NRP harus berupa angka");
                msg.innerHTML = "gacor";
                return false ;

             }
            if (nrp.value.length != 10 ) {
                alert("NRP harus 10 digit anda memasukkan !" + nrp.value.length + "digit");
                return false ;
            }



     }
    </script>
</head>
<body>
 <div class="container">
    <div class="jumbotron"> form validation adalah mencegah pengirman data ke server jika ada yang invalid tidak sesuai constraint database</div>

    <form action="https://google.com" method="get" onsubmit="return validateForm();">
        <div class="form-group">
            <label for="nrp">NRP</label>
            <input type="text" class="form-control" id="nrp">
            <div class="text-danger" id="msg"></div>
          </div>

          <input type="submit" value="DAFTAR" class="btn btn-primary">
          <input type="reset" value="ULANGI" class="btn btn-warning">
    </form>
 </div>
</body>
</html>
