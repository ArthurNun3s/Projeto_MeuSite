# Projeto 1 - Site Institucional (UNIPÊ)
**Aluno:** Arthur Nunes Campos Rodrigues

## Resumo do Projeto
Este projeto é um site institucional dinâmico criado para a disciplina de Programação Web.

Ele utiliza PHP e MySQL (MySQLi) e conta com um painel de administração (`/admin`) para gerenciar o conteúdo do site. O sistema é composto por dois módulos de CRUD (Create, Read, Update, Delete) principais, conforme solicitado:
1.  **CRUD de Clientes** (Módulo base)
2.  **CRUD de Discografia** (Novo módulo implementado)

---

## Instruções de Execução
Para rodar este projeto em um ambiente local (XAMPP):

1.  **Banco de Dados:**
    * No phpMyAdmin, crie um novo banco de dados vazio (ex: `projeto1`).
    * Selecione este banco e use a aba "Importar".
    * Importe o arquivo **`projeto1_tabelas.sql`** (incluso neste repositório) para criar todas as tabelas.

2.  **Arquivos:**
    * Coloque esta pasta do projeto dentro do diretório `htdocs` do seu XAMPP.

3.  **Acesso:**
    * **Site Público:** `http://localhost/[nome-da-pasta-do-projeto]/index.php`
    * **Painel Admin:** `http://localhost/[nome-da-pasta-do-projeto]/admin/admin.php`