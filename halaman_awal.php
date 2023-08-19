<?php
include('header.php');

if (isset($_POST['nexth2'])) {
    header("location:h2.php");
}
?>

<div class="container d-flex flex-wrap">
    <div class="container d-flex justify-content-center">
        <img src="img/PYh.gif" class="gambar" alt="">
    </div>
    <div class="container-fluid d-flex justify-content-center align-middle">
        <div class="kotak1 boks text-center rounded-5" style="font-family: black han sans;">
            <h3 class="mb-2">
                Halo Bunga! <br> Udah ga kerasa ya kita dah satu tahun aja jalanin bareng-bareng. Kamu yang kuat ya, Love u banyak-banyak. <br> Muachh ❤️
            </h3>
        </div>
    </div>
</div>


<div class="d-flex justify-content-center mt-5 mb-3">
    <button class="d-flex justify-content-center pt-3 btn btn-info next" onclick="h1()" name="nexth2">
        <p class="">Nextttt &raquo;</p>
    </button>
</div>



<!-- <iframe src="audio.mp3" width="0" frameborder="0"></iframe> -->
</body>

</html>