# EscrevaBem - Sistema de Avaliação da Escrita de Alunos do Ensino Fundamental

**:: SISTEMA EM DESENVOLVIMENTO ::**

Este é o repositório do sistema de avaliação da escrita de alunos do ensino fundamental, que utiliza a teoria da psicogênese da língua escrita, desenvolvida por Emília Ferreiro e Ana Teberosky. O objetivo principal do sistema é identificar e diagnosticar o estágio de nível da escrita dos alunos por meio de uma avaliação gameficada.

Este sistema é corpo de um estudo ecadêmico.

## Características do Sistema

- O sistema utiliza a teoria da psicogênese da língua escrita de Emília Ferreiro e Ana Teberosky para avaliar e identificar o estágio de nível da escrita dos alunos do ensino fundamental.
- Os estágios de escrita detectados pelo sistema são os seguintes: pré-silábico, silábico, silábico-alfabético e alfabético.
- A avaliação gameficada captura a escrita dos alunos em diferentes situações, como escrita de letras, palavras, frases e pequenos textos, permitindo uma avaliação abrangente do desenvolvimento da escrita.

## Tecnologias Utilizadas
- **Back-end:** Laravel v9.52.10 (PHP v8.0.12)
- **Front-end:** Vue 3.34
- **SGBD:** MySQL 8

## Funcionalidades do Sistema
O sistema possui as seguintes funcionalidades:

1. Cadastro de Alunos: Permite o cadastro dos alunos do ensino fundamental para que possam participar da avaliação.
2. Avaliação Gameficada: O sistema apresenta atividades interativas para os alunos escreverem letras, palavras, frases e pequenos textos. Com base nas respostas, o sistema identifica o estágio de nível da escrita de cada aluno.
3. Diagnóstico Individual: Após a avaliação, o sistema fornece um diagnóstico individual para cada aluno, indicando em qual estágio de escrita ele se encontra e quais habilidades podem ser aprimoradas.
4. Relatórios Estatísticos: O sistema gera relatórios estatísticos com os resultados da avaliação, permitindo uma visão geral do desempenho dos alunos em cada estágio de escrita.

## Instalação
Para executar o sistema localmente, siga os passos abaixo:

1. Certifique-se de ter o ambiente Laravel 9 configurado em sua máquina.
2. Clone este repositório para o seu ambiente local.
3. Configure o banco de dados MySQL no arquivo .env com as credenciais apropriadas.
4. Instale as dependências do backend executando o seguinte comando na raiz do projeto:

```bash
composer install
```

5. Instale as dependências do frontend executando o seguinte comando na pasta do frontend:

```bash
npm install
```

6. Execute as migrações para criar as tabelas do banco de dados:

```bash
php artisan migrate
```

7. Inicie o servidor de desenvolvimento:

```bash
php artisan serve
```

8. Acesse o sistema em seu navegador através do endereço: http://localhost:8000

## Contribuição

Se você quiser contribuir para o desenvolvimento deste sistema, fique à vontade para enviar pull requests. Todas as contribuições são bem-vindas!

## Licença
Este projeto está licenciado sob a licença MIT - veja o arquivo LICENSE para mais detalhes.

## Contato
Se tiver alguma dúvida ou sugestão, entre em contato conosco através do email: petersondmb@gmail.com

Agradecemos seu interesse em contribuir para a melhoria da educação e do aprendizado dos alunos do ensino fundamental!
