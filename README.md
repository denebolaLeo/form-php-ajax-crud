
### ✅ `README.md`

````markdown
# 📋 CRUD com AJAX, PHP e MySQL

Este projeto é um sistema simples de **CRUD (Create, Read, Update, Delete)** utilizando **AJAX com JavaScript**, **PHP**, **MySQL** e estilizado com **HTML/CSS**.  
Tudo é feito em uma única página (SPA - Single Page Application) com carregamento dinâmico via AJAX.

## 🐧 Requisitos para rodar no Linux Mint

- PHP (instalado com XAMPP ou nativamente)
- MySQL (com phpMyAdmin)
- Navegador moderno (Firefox, Chrome, etc.)
- Editor de código (Visual Studio Code recomendado)

---

## ⚙️ Instalação no Linux Mint

### 1. Instale o XAMPP (se ainda não tiver)
```bash
sudo apt update
sudo apt install xampp
````

> Ou baixe direto do site oficial: [https://www.apachefriends.org/pt\_br/index.html](https://www.apachefriends.org/pt_br/index.html)

### 2. Inicie o XAMPP

```bash
sudo /opt/lampp/lampp start
```

* O Apache e o MySQL precisam estar ativos.
* Acesse `http://localhost/phpmyadmin` no navegador.

---

## 💾 Configuração do Banco de Dados

### 1. Crie o banco de dados no phpMyAdmin

* Acesse: `http://localhost/phpmyadmin`
* Crie um banco chamado: `crud_jogos`
* Crie a tabela `usuarios` com os seguintes campos:

| Campo | Tipo         | Extra                        |
| ----- | ------------ | ---------------------------- |
| id    | INT          | PRIMARY KEY, AUTO\_INCREMENT |
| nome  | VARCHAR(100) | NOT NULL                     |
| jogo  | VARCHAR(100) | NOT NULL                     |
| idade | INT          | NOT NULL                     |

---

## 🗂 Estrutura de Arquivos

```
📁 crud-jogos/
├── index.html
├── ajax.js
├── conexao.php
├── inserir.php
├── listar.php
├── deletar.php
├── atualizar.php
└── princesa.png (imagem opcional)
```

---

## 🚀 Como usar

1. Coloque todos os arquivos na pasta:

```bash
/opt/lampp/htdocs/crud-jogos/
```

2. Acesse no navegador:

```
http://localhost/crud-jogos/index.html
```

3. Use o formulário para:

   * Cadastrar um novo usuário
   * Editar dados já cadastrados
   * Excluir registros
   * Ver todos os usuários em tempo real (sem recarregar a página)

---

## 🧠 Tecnologias Utilizadas

* **HTML5/CSS3** — Interface responsiva e bonita
* **PHP** — Processamento no servidor
* **MySQL** — Banco de dados relacional
* **AJAX/Fetch API** — Comunicação assíncrona com o backend
* **JavaScript Puro** — Nada de frameworks

---

## ✍️ Autor

Projeto desenvolvido por Ana Clara como prática de desenvolvimento web com AJAX.

---

## 📝 Licença

Este projeto está sob a licença MIT.
Sinta-se livre para usar, estudar e modificar!

```


Me avise se quiser alguma dessas melhorias!
```
