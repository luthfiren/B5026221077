<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Laravel #4 : Passing Data Controller Ke View Laravel - www.malasngoding.com</title>
</head>
<body>

	<h1>Tutorial Laravel</h1>
	<a href="https://www.malasngoding.com/category/laravel">www.malasngoding.com</a>
    <p>nama : {( $nama )}</p>
    <p>alamat : {( $alamat )}</p>
    <p>umur {( $umur )}</p>
    public function biodata(){
    	$nama = "Diki Alfarabi Hadi";
        $alamat = "surabaya";
        $umur= 18 ;
    	return view('biodata',['nama' => $nama , 'alamat' => $alamat,'umur' => $umur]);
    }
</body>
</html>
