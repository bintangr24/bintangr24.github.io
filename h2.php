<?php
include('header.php');

if (isset($_POST['next'])) {
    header("location:h3.php");
}
if (isset($_POST['back'])) {
    header("location:h1.php");
}
?>

<div class="container d-flex flex-wrap">
    <div class="container d-flex justify-content-center">
        <img src="img/moment.png" class="boks-bulan" alt="">
    </div>
    <div class="container-fluid d-flex justify-content-center align-middle">
        <div class="kotak1 text-center rounded-5" style="font-family: black han sans;">
            <h3 class="mb-2">
                Bukan moment sih, jatohnya aib aja AHAHAHAHA
            </h3>
        </div>
    </div>
</div>
<div class="container-fluid d-flex justify-content-around flex-wrap align-middle mb-2 mt-3">
    <div class="kotak-chat boks text-center rounded-5 mb-3" style="font-family: black han sans;">
        <img src="img/moment1.jpg" alt="" class="chat mt-2">
        <div class="mt-1">
            <h4 class="align-middle">
                pelikca gigi aku dong doktel
            </h4>
        </div>
    </div>
    <div class="kotak-chat boks text-center rounded-5 mb-3" style="font-family: black han sans;">
        <img src="img/moment2.jpg" alt="" class="chat mt-2">
        <div class="mt-1">
            <h4 class="align-middle">
                hidugnnya besar, matanya kecil, kalau mengaum...
            </h4>
        </div>
    </div>
    <div class="kotak-chat boks text-center rounded-5 mb-3" style="font-family: black han sans;">
        <img src="img/moment3.jpg" alt="" class="chat mt-2">
        <div class="mt-1">
            <h4 class="align-middle">
                cebelapa imut ci aku
            </h4>
        </div>
    </div>
</div>
</div>





<div class="d-flex justify-content-between mb-3">
    <button class="ms-3 d-flex justify-content-center pt-3 btn btn-info next" onclick="h1()" name="back">
        <p class="">&laquo; Kembali </p>
    </button>
    <button class="me-3 d-flex justify-content-center pt-3 btn btn-info next" onclick="h3()" name="next">
        <p class="">Lanjut &raquo;</p>
    </button>
</div>


<!-- <iframe src="audio.mp3" width="0" frameborder="0"></iframe> -->
</body>

</html>