<?php
include('header.php');
?>
<style>
    .kotak4 {
        font-family: Arial, Helvetica, sans-serif;
        cursor: pointer;
        background-color: white;
        background: rgba(255, 255, 255, 0.6);
        transition: 0.5s ease-in-out;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
    }

    .Jumbotron {
        font-family: 'black han sans';
        color: whitesmoke;
        transition: all 1s ease;
        cursor: pointer;
    }

    .Jumbotron:hover {
        color: red;
        transition: all 1s ease;
    }

    .small_text {
        font-size: 15px;
    }

    .small_text a {
        font-size: 15px;
    }
</style>
<div class="container-fluid-xxl justify-content-center d-flex m-auto container-login">
    <!-- <form action="" class="kotak bg-info p-4 rounded-3" method="post" style="transition: all 1s ease; margin-top:225px;">
        <h1 class="fw-blod text-center Jumbotron">ADA KODENYA YA KAKAK</h1>
        <div class="form-floating pb-2 movement">
            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
            <label for="">Kode</label>
        

        <button class="btn btn-primary form-control" name="login" type="button" id="submit" value="Login" onclick="login()">GAS MASUK!</button>
    </form> -->
    <form action="" class="kotak4 p-4 rounded-3" method="post" style="transition: all 1s ease; margin-top:225px;">
        <h1 class="fw-blod text-center Jumbotron">ADA KODENYA YA KAKAK</h1>
        <div class="form-floating pb-2 movement">
            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
            <label for="">Kode</label>
        </div>
        <input type="button" value="Yuk Masuk" id="submit" class="btn btn-primary form-control" onclick="login()" />
    </form>

</div>