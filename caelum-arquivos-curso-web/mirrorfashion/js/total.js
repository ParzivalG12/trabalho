const $inputQuantidade = document.querySelector("#qt");
const $outputTotal = document.querySelector("#total");

$inputQuantidade.addEventListener('input', () => {
    let preco = document.querySelector("#preco").textContent.trim().replace("R$", "").replace(",", ".");
    preco = parseFloat(preco);

    const quantidade = parseInt($inputQuantidade.value, 10) || 0; // Garante que a quantidade seja um número inteiro
    const total = quantidade * preco;
    
    $outputTotal.value = `R$ ${total.toFixed(2).replace(".", ",")}`;
});
