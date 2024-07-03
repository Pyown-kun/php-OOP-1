<?php

session_start()

?>

<link rel="stylesheet" href="../bootstrap.min.css">

<style>
    .module-border-wrap {
        max-width: auto;
        padding: 1rem;
        position: relative;
        background: linear-gradient(to right, red, purple);
        padding: 3px;
    }

    .module-border-wrap2 {
        width: 100%;
        max-width: auto;
        padding: 1rem;
        position: relative;
        background: linear-gradient(to right, red, purple);
        padding: 3px;
    }

    .module {
        background: #222;
        color: white;
        padding: 2rem;
    }
</style>

<div class="m-5 module-border-wrap">
    <div class="module">
        <div class="container mt-2">
            <?php


            if (!empty($_SESSION["nama"]) && !empty($_SESSION["nim"]) && !empty($_SESSION["gambar"])) {
                echo "Nama : " . $_SESSION["nama"] . "<br>" .
                    "NIM : " . $_SESSION["nim"] . "<br>"

            ?>

                <img src='<?php echo $_SESSION["gambar"] ?>' alt="" style="height : 200px">
            <?php
            } elseif (empty($_SESSION["nama"]) && empty($_SESSION["nim"]) && empty($_SESSION["gambar"])) {
                header("Location: ../login.php");
            }

            ?>

            <form action="" method="get">
                <input class="btn btn-danger mt-2" type="submit" name="logout" value="logout"></input>
            </form>

            <?php
            if ($_GET) {
                if ($_GET["logout"]) {
                    session_destroy();
                }
            }
            ?>
        </div>
    </div>
</div>

<div>
    <div class="module-border-wrap2">
        <div class="module">

            <h1 class="text-center text-light mb-2">Tukar Voucher</h1>

            <form action="" method="post">
                <div class="form-floating mb-3">

                    <input class="form-control" type="text" name="nama453" required>
                    <label for="">nama</label>
                </div>
                <div class="form-floating mb-3">

                    <input class="form-control" type="text" name="email453" required>
                    <label for="">email</label>
                </div>
                <div class="form-floating mb-3">

                    <input class="form-control" type="text" name="voucher_hadiah453" required>
                    <label for="">voucher hadiah</label>
                </div>
                <div class="form-floating mb-3">

                    <input class="form-control" type="number" name="nomor_telpon453" required>
                    <label for="">nomor telpon</label>
                </div>
                <div class="form-floating mb-3">

                    <input class="form-control" type="text" name="alamat453" required>
                    <label for="">alamat</label>
                </div>
                <div class="form-floating mb-3">

                    <select name="produk453" class="form-control">
                        <option value="" disabled selected>pilih produk</option>
                        <option value="jaket">jaket</option>
                        <option value="baju">baju</option>
                        <option value="topi">topi</option>
                        <option value="kipas">kipas</option>
                    </select>
                    <label for="">produk</label>
                </div>

                <div class=" d-flex justify-content-center">
                    <button class="btn btn-danger" type="submit">Tukar Voucher</button>
                </div>

            </form>
        </div>
    </div>
</div>


<div class="module-border-wrap2">
    <div class="module">
        <div class="text-light">


            <?php
            class ilham453
            {
                protected $nama453;
                protected $email453;
                protected $voucher_hadiah453;
                protected $nomor_telpon453;
                protected $alamat453;
                protected $produk453;

                public function __construct($nama453, $email453, $voucher_hadiah453, $nomor_telpon453, $alamat453, $produk453)
                {
                    $this->nama453 = $nama453;
                    $this->email453 = $email453;
                    $this->voucher_hadiah453 = $voucher_hadiah453;
                    $this->nomor_telpon453 = $nomor_telpon453;
                    $this->alamat453 = $alamat453;
                    $this->produk453 = $produk453;
                }
                protected function data_email()
                {
                    return "<br>" .
                        "Nama : " . $this->nama453 . "<br>" .
                        "Email : " . $this->email453 . "<br>" .
                        "No Telephone : " . $this->nomor_telpon453 .  "<br>" .
                        "Alama : " . $this->alamat453 . "<br>" .
                        "Peoduk : " . $this->produk453;
                }
            }
            class pro extends ilham453
            {
                public function voucher()
                {
                    $arrayvoucher = array("HTS123", "ILjK1", "abg1");

                    if (in_array($this->voucher_hadiah453, $arrayvoucher)) {
            ?>
                        <h1 class="text-center">
                            <?php
                            echo "Voucher Sudah Pernah Terpakai";
                            ?>
                        </h1>
                    <?php
                    } else {
                        array_push($arrayvoucher, $this->voucher_hadiah453);
                    ?>
                        <h1 class="text-center">
                            <?php
                            echo "Voucher Berhail Terkirim";
                            ?>
                        </h1>
            <?php
                        return $this->data_email();
                    }
                }

                public function __get($property)
                {
                    return $this->{$property};
                }

                public function __set($property, $value)
                {
                    $this->{$property} = $value;
                }
            }

            if ($_POST) {

                $nama453 = $_POST["nama453"];
                $email453 = $_POST["email453"];
                $voucher_hadiah453 = $_POST["voucher_hadiah453"];
                $nomor_telpon453 = $_POST["nomor_telpon453"];
                $alamat453 = $_POST["alamat453"];
                $produk453 = $_POST["produk453"];

                $panggil = new pro($nama453, $email453, $voucher_hadiah453, $nomor_telpon453, $alamat453, $produk453);
                echo $panggil->voucher();

                $panggil->spesial = "Spesial";

                if ($voucher_hadiah453 == "IlhamGentang") {
                    echo "<br> Merupakan Voucher " . $panggil->spesial;
                } else {
                    echo "<br> Bukan Merupakan Voucher " . $panggil->spesial;
                }
            }

            ?>

        </div>
    </div>
</div>