</body>
</html>
<script rel="stylesheet" href="assets/js/bootstrap.bundle.min.js"></script>
<script rel="stylesheet" href="assets/js/bootstrap.esm.min.js"></script>
<script rel="stylesheet" href="assets/js/bootstrap.min.js"></script>
<script rel="stylesheet" href="assets/js/custom.js"></script>
<script rel="stylesheet" href="assets/js/holder.min.js"></script>
<script rel="stylesheet" href="assets/js/jquery-3.2.1.slim.min.js"></script>
<script rel="stylesheet" href="assets/js/popper.min.js"></script>
<script rel="stylesheet" defer href="assets/js/app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Saudação e texto que será digitado
    var saudacao = "<?php echo $saudacao; ?>";
    var texto = "Olá " + saudacao + ", sou Albert Desenvolvedor front end";

    // Função para simular digitação
    function simularDigitar(texto, elemento) {
        elemento.textContent = ''; // Limpa o conteúdo do elemento antes de começar a simulação
        var i = 0;
        var intervalo = setInterval(function() {
            elemento.textContent += texto.charAt(i);
            i++;
            if (i >= texto.length) {
                clearInterval(intervalo);
            }
        }, 100); // Tempo de espera entre cada caractere (em milissegundos)
    }

    // Elemento onde o texto será digitado
    var elementoDigitado = document.getElementById("texto-digitado");

    // Chamar a função para iniciar a animação de digitação
    simularDigitar(texto, elementoDigitado);
</script>
