<?php
    $hour = date('H');

    // Determine the appropriate greeting based on the time of day
    if ($hour < 12) {
        $saudacao = ' um bom dia';
    } elseif ($hour < 18) {
        $saudacao = ' uma boa tarde';
    } else {
        $saudacao = ' uma boa noite';
    }
    

    ?>
        <?php include("header.php") 
    ?>

<main class="main home ">
    <section class=" my-5 " id="home">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12 py-5">
                    <div class="card bg-white shadow ">
                        <div class="card-body">
                            <h1 class="card-title fst-italic" id="texto-digitado"></h1>   
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                </div>
                <div class="text-end">
                    <div class="col-md-12 col-12">
                        <img src="assets/imagens/ahn.jpg" class="img-fluid foto-perfil mx-5" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="#sobremim">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="text-start mx-5">
                        <div class="card bg-white shadow">
                            <div class="card-body">
                                <h1 class="card-title fst-italic">Sobre minha pessoa:</h1>
                                <p class="fs-4 text-secondary">Meu nome é Albert tenho 21 anos sou desenvolvedor web atuo na área front-end </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>

                </div>
            </div>
        </div>
    </section>
</main>
    
<?php include("footer.php") ?>

