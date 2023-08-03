# Aplicação de Gerenciamento de Pessoas (Back-end)

## Descrição
Esta é uma API desenvolvida com Laravel para gerenciar uma lista de pessoas. Ela permite criar, ler, atualizar e excluir registros de pessoas.

## Requisitos
- PHP >= 7.3
- Laravel >= 8.0
- MySQL

## Instalação
1. Clone o repositório
2. Navegue até o diretório do projeto
3. Execute `composer install` para instalar as dependências
4. Renomeie `.env.example` para `.env` e configure as variáveis de ambiente para o banco de dados
5. Execute `php artisan migrate` para executar as migrações do banco de dados
6. Execute `php artisan serve` para iniciar o servidor

## Endpoints
- `GET /api/pessoas`: Retorna a lista de pessoas
- `POST /api/pessoas`: Cria uma nova pessoa
- `GET /api/pessoas/{id}`: Retorna os detalhes de uma pessoa
- `PUT /api/pessoas/{id}`: Atualiza os detalhes de uma pessoa
- `DELETE /api/pessoas/{id}`: Exclui uma pessoa

## Docker Setup

Essa aplicação pode ser facilmente dockerizada usando Docker e Docker Compose. As instruções a seguir assumem que você já instalou o Docker e o Docker Compose em seu ambiente local. Se você ainda não fez isso, pode encontrar as instruções para instalação em https://docs.docker.com/get-docker/ e https://docs.docker.com/compose/install/.
Backend

Dentro do diretório do projeto backend, você pode usar o seguinte comando para construir a imagem do Docker:

- docker build -t gestao-pessoas-api .

Para executar o container Docker:

- docker run -p 8000:8000 gestao-pessoas-api

A aplicação agora estará disponível em http://localhost:8000.
