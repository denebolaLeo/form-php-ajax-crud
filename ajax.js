document.addEventListener("DOMContentLoaded", () => {
    carregarDados();
    configurarFormulario("form-create", "inserir.php", "resultado", true);
    configurarFormulario("form-update", "atualizar.php", "resultado-update", true);
});

function carregarDados() {
    fetch("listar.php")
        .then(res => res.text())
        .then(html => {
            document.getElementById("tabela-dados").innerHTML = html;
        });
}

function configurarFormulario(formId, url, resultadoId, recarregar = false) {
    const form = document.getElementById(formId);
    if (!form) return;

    form.addEventListener("submit", (e) => {
        e.preventDefault();
        const formData = new FormData(form);

        fetch(url, {
            method: "POST",
            body: formData
        })
        .then(res => res.text())
        .then(data => {
            document.getElementById(resultadoId).innerHTML = data;
            if (recarregar) {
                carregarDados();
                form.reset();
                if (formId === "form-update") form.style.display = "none";
            }
        });
    });
}

function excluirUsuario(id) {
    if (!confirm("Tem certeza que deseja excluir?")) return;

    const formData = new FormData();
    formData.append("id", id);

    fetch("deletar.php", {
        method: "POST",
        body: formData
    })
    .then(res => res.text())
    .then(data => {
        document.getElementById("resultado").innerHTML = data;
        carregarDados();
    });
}

function editarUsuario(id, nome, jogo, idade) {
    document.getElementById("form-update").style.display = "block";
    document.getElementById("update-id").value = id;
    document.getElementById("update-nome").value = nome;
    document.getElementById("update-jogo").value = jogo;
    document.getElementById("update-idade").value = idade;
}