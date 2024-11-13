var url = $("#url_ambiente").val();
// Função para escrever a frase com uma quebra de linha
function writeSentence(sentence, index, element) {
    if (index < sentence.length) {

        const targetElement = document.getElementById(element);

       
        targetElement.innerHTML += sentence[index] === '\n' ? '<br>' : sentence[index];

        // Incrementa o índice e define um atraso de 70 milissegundos
        setTimeout(() => writeSentence(sentence, index + 1, element), 70);
    }
}


writeSentence("Olá <?php echo $saudacao; ?>\n <?php echo $primeiro_nome;?>", 0, "texto-digitado");

//botão de ver mais
document.getElementById("ver-mais-menos").addEventListener("click", function() {
    var projetosRestantes = document.getElementById("projetos-restantes");
    var botao = document.getElementById("ver-mais-menos");

    if (projetosRestantes.classList.contains("d-none")) {
        projetosRestantes.classList.remove("d-none");
        botao.textContent = "Ver Menos";
    } else {
        projetosRestantes.classList.add("d-none");
        botao.textContent = "Ver Mais";
    }
});