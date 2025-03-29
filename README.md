# 🐳 Microsserviços com Docker, PHP, MySQL e Nginx

Projeto desenvolvido como parte do desafio da [Digital Innovation One (DIO)](https://web.dio.me/), com base no repositório do expert [Denilson Bonatti](https://github.com/denilsonbonatti/toshiro-shibakita).

Este projeto demonstra, de forma prática, como utilizar **Docker** no cenário de **microsserviços**, com aplicação em PHP, banco de dados MySQL, balanceamento de carga com Nginx e orquestração via Docker Compose.

---

## 🧰 Tecnologias e Ferramentas

- Docker
- Docker Compose
- PHP
- MySQL
- Nginx
- Linux
- Chart.js

---

## 📂 Estrutura do Projeto

```
docker-microservice/
├── app/
│   ├── index.php        # Insere dados no banco
│   ├── visualizar.php   # Exibe os dados em tabela
│   ├── dashboard.php    # Gráfico com Chart.js
│   └── Dockerfile       # PHP com mysqli habilitado
├── db/
│   └── banco.sql        # Script do banco
├── nginx/
│   ├── nginx.conf
│   └── Dockerfile
├── .env
├── .gitignore
├── docker-compose.yml
└── README.md
```

---

## 🚀 Executando Localmente

### 1. Configure o ambiente

Crie o arquivo `.env` na raiz com:

```env
MYSQL_ROOT_PASSWORD=Senha123
MYSQL_DATABASE=meubanco
MYSQL_USER=root
MYSQL_PASSWORD=Senha123
```

> ⚠️ O `.env` está listado no `.gitignore` e **não deve ser versionado** no GitHub.

### 2. Construa e inicie os containers

```bash
docker-compose up --build
```

### 3. Acesse a aplicação

- Inserir registros: [http://localhost:4500](http://localhost:4500)
- Ver registros: [http://localhost:4500/visualizar.php](http://localhost:4500/visualizar.php)
- Ver gráfico: [http://localhost:4500/dashboard.php](http://localhost:4500/dashboard.php)

---

## 🔍 Funcionalidades

- Inserção automática de dados aleatórios no banco
- Visualização em tabela (`visualizar.php`)
- Dashboard com gráfico de registros por Host (`dashboard.php`)
- Load balancing via Nginx
- Logs de aplicação

---

## 📚 Aprendizados

- Arquitetura de microsserviços com Docker
- Comunicação entre containers
- Uso de variáveis de ambiente com `.env`
- Load balancing com Nginx
- Visualização de dados com PHP + Chart.js
- Logs com `docker logs` e `error_log()`

---

## 🧱 Projeto Base

Fork de: [denilsonbonatti/toshiro-shibakita](https://github.com/denilsonbonatti/toshiro-shibakita)

---

## 🔧 Melhorias Implementadas

- Estrutura modularizada
- Instalação da extensão `mysqli` no container PHP
- Utilização de `.env` e `.gitignore`
- Visualização de registros via PHP
- Dashboard com gráfico usando Chart.js
- Logs salvos em arquivo acessível

---

### 👨‍💻 Eduardo O. Lentz
💻 Portfolio | 🔗 LinkedIn | 📂 GitHub | 📝 Medium | 📸 Instagram
