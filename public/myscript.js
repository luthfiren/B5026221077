function tambah(){
    var bill1 = document.getElementById("bill1");
    var bill2 = document.getElementById("bill2");
    var hasil = document.getElementById("hasil");

    hasil.innerHTML = parseInt(bill1.value) + parseInt(bill2.value);
}

function kali(){
    var bill1 = document.getElementById("bill1");
    var bill2 = document.getElementById("bill2");
    var hasil = document.getElementById("hasil");

    hasil.innerHTML = bill1.value * bill2.value;
}