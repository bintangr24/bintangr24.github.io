<?php
include('header.php');

if (isset($_POST['next'])) {
    header("location:h5.php");
}
if (isset($_POST['back'])) {
    header("location:h3.php");
}
?>

<div class="container d-flex flex-wrap">
    <div class="container d-flex justify-content-center">
        <img src="img/forever.png" class="gambar" alt="" style="width: 50%">
    </div>
    <div class="container-fluid d-flex justify-content-center align-middle">
        <div class="kotak1 text-center rounded-5" style="font-family: black han sans;">
            <h3 class="mb-2">
                Udah ini halaman terakhir <br> Aku cuma mau bilang makasih buat semuanya yang udah kamu kasih, aku juga mau minta maaf buat salah sama kurangnya aku bunga. <br> Terus bareng-bareng yaa. Sekali lagi selamat buat kita udah 365 hari ini bareng-bareng terus <br> Love u❤️
            </h3>
        </div>
    </div>
</div>
</div>




<div class="d-flex justify-content-center mb-3">
    <button class="mt-5 d-flex justify-content-center pt-3 btn btn-info next" onclick="h3()" name="back">
        <p class="">&laquo; Kembali </p>
    </button>
</div>

<!-- <iframe src="audio.mp3" width="0" frameborder="0"></iframe> -->
</body>

</html>