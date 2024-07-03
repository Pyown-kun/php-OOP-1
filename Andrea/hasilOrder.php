<link rel="stylesheet" href="../bootstrap.min.css">

<style>
    .module-border-wrap {
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

<body class="bg-dark">



    <div class="m-5 module-border-wrap">
        <div class="module">
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
            }


            $nama = $_POST["nama"];
            $email = $_POST["email"];
            $notel = $_POST["notelp"];
            $ig = $_POST["ig"];
            $x = $_POST["x"];

            $panggil = new proses($nama, $email, $notel, $ig, $x);
            echo $panggil->proses();

            ?>
        </div>
    </div>

</body>