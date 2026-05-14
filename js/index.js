// Seleciona todos os links dentro do nav
const links = document.querySelectorAll("nav a");

// Pega o nome do arquivo atual da URL (ex: index.php)
let paginaAtual = window.location.pathname.split("/").pop();

// Se o caminho estiver vazio (raiz do site), define como index.php
if (paginaAtual === "" || paginaAtual === "/") {
    paginaAtual = "index.php";
}

links.forEach(link => {
    // Pega o valor do atributo href do link
    const href = link.getAttribute("href");

    // Remove a classe 'ativo' caso ela já esteja lá (limpeza)
    link.classList.remove("ativo");

    // Verifica se o href do link é exatamente igual à página atual
    if (href === paginaAtual) {
        link.classList.add("ativo");
    }
});