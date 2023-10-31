document.getElementById("verificarDisponibilidade").addEventListener("click", function() {
    const dataSelecionada = document.getElementById("data").value;
    const resultadoElement = document.getElementById("resultado");

    // Verifique se a data selecionada está no formato YYYY-MM-DD
    if (!/^\d{4}-\d{2}-\d{2}$/.test(dataSelecionada)) {
        resultadoElement.textContent = "Por favor, insira uma data válida (YYYY-MM-DD).";
        return;
    }

    // Aqui, você deve fazer uma solicitação ao servidor para verificar a disponibilidade no banco de dados.
    // Suponha que você esteja usando uma API REST para essa finalidade.

    // Exemplo de uma solicitação Ajax fictícia usando JavaScript puro (você deve substituir por uma chamada real ao servidor):
    const url = `/verificar_disponibilidade?data=${dataSelecionada}`;

    fetch(url)
        .then(response => response.json())
        .then(data => {
            if (data.disponivel) {
                resultadoElement.textContent = "Data disponível.";
                resultadoElement.style.color = "green";
            } else {
                resultadoElement.textContent = "Data não disponível.";
                resultadoElement.style.color = "red";
            }
        })
        .catch(error => {
            resultadoElement.textContent = "Ocorreu um erro ao verificar a disponibilidade.";
            resultadoElement.style.color = "black";
            console.error(error);
        });
});
