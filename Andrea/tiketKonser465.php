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


<div class="m-5 module-border-wrap">
    <div class="module">

        <h1 class="text-center text-light mb-2">Pemesanan Tiket</h1>

        <form action="" method="post">
            <div class=" p-3 m-3">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="nama" required>
                    <label for="floatingInput">Nama</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" name="email" required>
                    <label for="floatingInput">Email</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="floatingInput" name="notelp" required>
                    <label for="floatingInput">No Telephone</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="ig" required>
                    <label for="floatingInput">Instagram</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="x" required>
                    <label for="floatingInput">X</label>
                </div>
            </div>
            <div class=" d-flex justify-content-center">
                <button class="btn btn-danger" type="submit">Kirim</button>
            </div>
        </form>

        <?php

        class isian465
        {
            protected $nama465;
            protected $email465;
            protected $notel465;
            protected $ig465;
            protected $x465;


            public function __construct($nama, $email, $notel, $ig, $x)
            {
                $this->nama465 = $nama;
                $this->email465 = $email;
                $this->notel465 = $notel;
                $this->ig465 = $ig;
                $this->x465 = $x;
            }

            protected function data()
            {
                return
                    "Nama : " . $this->nama465 . "<br>" .
                    "Email : " . $this->email465 . "<br>" .
                    "No Telephone : " . $this->notel465 . "<br>" .
                    "Instagram : " . $this->ig465 . "<br>" .
                    "X : " . $this->x465;
            }
        }
        class proses extends isian465
        {
            public function gacort_kang()
            {
                $gacor = rand(0, 1);

                if ($gacor < 0.5) {
        ?>
                    <h1 class="text-center bg-danger text-light p-2 m-2">
                        <?php
                        echo "Mohon Maaf Anda Kurang Beruntung" . "<br>";
                        ?>
                    </h1>
                <?php   } else {
                ?>
                    <h1 class="text-center bg-success text-light p-2 m-2">
                        <?php
                        echo "Selamat Anda Mendapat Tiket Nonton" . "<br>";
                        ?>
                    </h1>
        <?php
                }
            }

            public function proses()
            {
                $emailarray = array("ilham@gmail.com", "andrea@gmail.com", "zuramaru@gmail.com");

                if (in_array($this->email465, $emailarray)) {
                    echo "Data Sudah Ada";
                } else {
                    return $this->data() . $this->gacort_kang();
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
            $nama = $_POST["nama"];
            $email = $_POST["email"];
            $notel = $_POST["notelp"];
            $ig = $_POST["ig"];
            $x = $_POST["x"];

            $panggil = new proses($nama, $email, $notel, $ig, $x);
            echo $panggil->proses();

            $panggil->alamat = "Solo";

            if ($email == "ilham@gmail.com") {
                echo "<br>" . $panggil->alamat . " Adalah Domisil Email ini";
            } else {
                echo "<br>" . $panggil->alamat . " Bukan Domisil Email ini";
            }
        }

        ?>
    </div>
</div>