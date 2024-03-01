<?php
    // Obtém a hora atual
    $hora_atual = date('G') . date('m');

    // Define a saudação com base na hora atual
    if ($hora_atual >= 0 && $hora_atual < 12) {
        $saudacao = "Bom dia";
    } elseif ($hora_atual >= 12 && $hora_atual < 18) {
        $saudacao = "Boa tarde";
    } else {
        $saudacao = "Boa noite";
    }
    ?>
<?php include("header.php") ?>

<main class="main">
    <section class="home">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 id="texto-digitado">Olá <?php echo $saudacao; ?>, sou Albert Desenvolvedor front end</h1>   
                </div>
            </div>
        </div>
    </section>
</main>
    
<?php include("footer.php") ?>

