const links = document.querySelectorAll("nav a");
const pathname = window.location.pathname;
const paginaAtual = pathname.split("/").pop() || "index.php";

links.forEach(link => {
    link.classList.remove("ativo");
    const href = link.getAttribute("href");
    // Compara o final da URL com o href
    if (paginaAtual === href || (paginaAtual === "" && href === "index.php")) {
        link.classList.add("ativo");
    }
});