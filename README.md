# Boilerplate Adianti Framework

Esse é um boilerplate para iniciar um novo projeto com o Adianti Framework, 
onde já está configurado o `phinx` para gerenciar migrations e seeds.

Foi ajustado para trabalhar com bcryp na criptografia das senhas, 
dando mais segurança para as definições de senhas e validação no login.

## Pontos de atenção

Devido a customização feita nesse boilerplate, também foi removida a possibilidade de 
trabalhar com diferentes bases de dados para entidades diferentes, ele foi pensado em
desenvolvimento multi entidades mas com separação dos dados apenas.

Sendo assim é necessário nas migrações que forem feitas, sempre considerar ter o campo `unit_id`
para implementar a diferença entre os registros das entidades.

## Executando

Para rodar o projeto, basta clonar esse repositório, definir as configurações no arquivo `app/config/database.ini` e executar os comandos abaixo:

```shell
composer install
make migrate
make seed

make serve
```

O projeto agora está rodando no endereço `http://localhost:8080`, e você pode usar os dois usuários padrões para teste:

Administrador:

```
usuário: admin
senha: admin
```
Usuário:

```
usuário: user
senha: user
```
## Requisitos

Para executar o projeto é necessário ter:

* PHP 7.4
* Composer