# Projeto 1 - Programação Web (UNIPÊ)
**Aluno:** [Seu Nome Completo Aqui]

## 1. Tema do Novo CRUD
[cite_start]O tema escolhido para o segundo módulo de CRUD (conforme o requisito) [cite: 8] foi **"Discografia"** (ou "Álbuns de Música").

---

## 2. Instruções para Execução do Projeto
Para rodar este projeto, por favor, siga os passos:

1.  **Arquivos:**
    * Clone este repositório (ou baixe o .zip) e coloque a pasta do projeto dentro do `htdocs` do seu XAMPP.

2.  **Banco de Dados (Essencial):**
    * Abra o phpMyAdmin.
    * Crie um novo banco de dados vazio (ex: `projeto1`).
    * Selecione este novo banco e use a aba "Importar".
    * [cite_start]Importe o arquivo **`projeto1.sql`** (que está neste repositório)[cite: 19]. Isso criará todas as 4 tabelas (`clientes`, `albuns`, `contatos`, `paginas`).

3.  **Acesso:**
    * **Site Público:** `http://localhost/[caminho-do-projeto]/index.php`
    * **Painel Admin:** `http://localhost/[caminho-do-projeto]/admin/admin.php`

---

## 3. Desafios Implementados e Bônus
O projeto cumpre todos os requisitos, incluindo:

* [cite_start]**CRUD de Clientes:** O módulo base do professor[cite: 9].
* [cite_start]**CRUD de Álbuns (Novo):** Um módulo completo de "Discografia" (C, R, U, D)[cite: 12].
* **Segurança (Bônus):** Todos os módulos (incluindo o de Clientes) foram refatorados para usar **Prepared Statements (mysqli_prepare)** para prevenir 100% de Injeção de SQL.
* **Módulos Extras (Bônus):**
    * **Gestão de Páginas:** Um CRUD completo para gerenciar o conteúdo de páginas como "Quem Somos" dinamicamente.
    * **Leitor de Contatos:** Uma tela no admin para ler as mensagens enviadas pelo "Fale Conosco".
    * **Homepage Dinâmica:** O carrossel da `index.php` é alimentado dinamicamente pelos álbuns cadastrados.