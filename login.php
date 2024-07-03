<?php

session_start();

?>

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

<link href="bootstrap.min.css" rel="stylesheet">

<body class="bg-dark">


    <div class="module-border-wrap2">
        <div class="module">
            <div class="container">
                <h1 class="text-center">Login</h1>
                <form method="post">

                    <div class="form-floating mb-3">
                        <input name="email" type="number" class="form-control" id="floatingInput">
                        <label for="floatingInput">Username</label>
                    </div>
                    <div class="form-floating">
                        <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>

                    <div class="d-grid mx-auto">
                        <button class="btn btn-danger mt-2" type="submit">Kirim</button>
                    </div>

                </form>
            </div>
        </div>
    </div>


    <?php

    class login7
    {

        public $email;
        public $password;


        public function __construct($email, $password)
        {
            $this->email = $email;
            $this->password = $password;
        }

        public function proses_login465453()
        {
            $arrayEmail = array(2213010465 => "a", 2213010453 => "b");
            $arrayPassword = array(2213010465 => "a", 2213010453 => "b");

            if ($this->email == array_search("a", $arrayEmail) && $this->password == array_search("a", $arrayPassword)) {

                // Nama, NIM, dan Foto Mahasiswa
                $_SESSION["nama"] = "Andrea Ramadhan Cahya Aryana";
                $_SESSION["nim"] = "2213010465";
                $_SESSION["gambar"] = "../Andrea/profil1.jpg";
                header("Location: ./Andrea/tiketKonser465.php");
            } elseif ($this->email == array_search("b", $arrayEmail) && $this->password == array_search("b", $arrayPassword)) {

                // Nama, NIM, dan Foto Mahasiswa
                $_SESSION["nama"] = "Ilham";
                $_SESSION["nim"] = "2213010453";
                $_SESSION["gambar"] = "../ilham/profil1.jpg";
                header("Location: ./ilham/tukar_voucher453.php");
            }
        }
    }

    if ($_POST) {


        $email = $_POST['email'];
        $password = $_POST['password'];

        $hasil_nilai = new login7($email, $password);

        echo $hasil_nilai->proses_login465453();
    }

    ?>

</body>