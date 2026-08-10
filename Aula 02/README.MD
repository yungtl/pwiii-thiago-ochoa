# Laravel com Herd


[![Laravel](https://img.shields.io/badge/Laravel-Framework-FF2D20?style=flat&logo=laravel&logoColor=white)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.x-777BB4?style=flat&logo=php&logoColor=white)](https://php.net)
[![Herd](https://img.shields.io/badge/Ambiente-Laravel_Herd-FF2D20?style=flat&logo=laravel&logoColor=white)](https://herd.laravel.com)

---

## 📌 Sobre

Repositório da disciplina **Programação Web III**, com projetos e exercícios desenvolvidos em **Laravel** utilizando o **Laravel Herd** como ambiente de desenvolvimento local.

---

## 🐘 O que é o Laravel Herd?

O **Laravel Herd** é um ambiente de desenvolvimento nativo e extremamente rápido para projetos **Laravel e PHP**. Diferente de soluções como XAMPP ou Docker, o Herd roda diretamente no sistema operacional — sem máquinas virtuais, sem containers, sem configuração manual.

> Mais de **50.000 desenvolvedores** usam o Herd diariamente para criar aplicações web.

---

## ✅ Por que usar o Laravel Herd?

| Benefício | Descrição |
|---|---|
| ⚡ **Zero configuração** | Após instalar, você já está pronto para desenvolver. Sem editar arquivos de configuração manualmente. |
| 🚀 **Alta performance** | Usa binários estáticos para PHP e Nginx — resulta em até **35% mais velocidade nos testes** e **100% mais velocidade nas requisições web** em comparação ao XAMPP. |
| 🔄 **Troca de versão PHP** | Suporta PHP 7.4 até 8.5. Você pode alternar versões em segundos, ou fixar uma versão por projeto. |
| 🔒 **HTTPS local nativo** | SSL integrado para rodar suas aplicações locais com `https://` sem configuração extra. |
| 📦 **Tudo incluso** | Já vem com PHP, Nginx, Node.js, Composer, Laravel Installer e Expose — disponíveis direto no terminal. |
| 🌐 **Domínios `.test` automáticos** | Todo projeto na pasta `~/Herd` ganha automaticamente um domínio `nomedoprojeto.test` no navegador. |
| 📧 **Serviço de e-mail local** | Captura todos os e-mails enviados pela aplicação em caixas de entrada separadas por projeto — ideal para testes. |
| 🖥️ **Windows e macOS** | Disponível nativamente para ambos os sistemas operacionais. |

---

## 🆓 Herd Free vs Herd Pro

| Recurso | Free | Pro |
|---|---|---|
| PHP, Nginx, Node.js | ✅ | ✅ |
| Composer + Laravel Installer | ✅ | ✅ |
| Domínios `.test` automáticos | ✅ | ✅ |
| HTTPS local | ✅ | ✅ |
| Troca de versão PHP | ✅ | ✅ |
| Bancos de dados (MySQL, PostgreSQL, Redis, etc.) | ❌ | ✅ |
| Debugging com Xdebug | ❌ | ✅ |
| Gerenciamento de serviços (filas, cache) | ❌ | ✅ |
| Integração com Laravel Forge (deploy 1 clique) | ❌ | ✅ |

> Para os projetos desta disciplina, a versão **gratuita** é suficiente.

---

## 📋 Pré-requisitos

- Windows 10/11 ou macOS 12+
- [Laravel Herd](https://herd.laravel.com) instalado

> O Herd já inclui PHP, Composer, Nginx e o Laravel Installer. Não é necessário instalar nada separadamente.

---

## 🚀 Como criar um projeto Laravel com o Herd

> 💡 **Uma das grandes vantagens do Herd é que você não precisa usar o terminal para nada.** Criar projetos, gerenciar sites e trocar versões do PHP são feitos direto pela interface gráfica do aplicativo.

### 1. Instale o Laravel Herd

Acesse [herd.laravel.com](https://herd.laravel.com), baixe o instalador para o seu sistema e siga as etapas de instalação.

### 2. Crie um novo projeto pela interface do Herd

1. Clique no **ícone do Herd** na barra de tarefas (Windows) ou barra de menu (macOS)
2. Vá em **"Sites"** → **"Create new Site"** (ou **"New Laravel Project"**)
3. Dê um nome ao projeto
4. Escolha a **versão do PHP** desejada
5. Clique em **"Create"**

O Herd cria o projeto automaticamente dentro da pasta `~/Herd` e já configura tudo — sem nenhum comando no terminal. ✅

### 3. Acesse o projeto no navegador

Após criar, o projeto já estará disponível automaticamente em:

```
http://nome-do-projeto.test
```

O Herd gerencia o servidor Nginx internamente — não é necessário rodar `php artisan serve` nem iniciar nenhum serviço manualmente.

### 4. Gerencie seus projetos pela interface

Ainda pelo painel do Herd você pode, para cada projeto:

- 🌐 **Abrir no navegador** com um clique
- 📁 **Abrir a pasta** do projeto no explorador de arquivos
- 💻 **Abrir o terminal** já posicionado na pasta correta (quando necessário)
- 🔄 **Trocar a versão do PHP** usada pelo projeto
- 🔒 **Ativar HTTPS** local com um clique

### 5. Estrutura do projeto criado

```
nome-do-projeto/
├── app/
│   ├── Http/
│   │   └── Controllers/   # Controladores da aplicação
│   └── Models/            # Modelos Eloquent
├── database/
│   └── migrations/        # Migrations do banco de dados
├── resources/
│   └── views/             # Views Blade (HTML + PHP)
├── routes/
│   └── web.php            # Definição das rotas web
├── public/                # Ponto de entrada público (index.php)
├── .env                   # Configurações de ambiente (banco, app, etc.)
└── artisan                # CLI do Laravel
```

### 6. Comandos úteis do Artisan

```bash
# Rodar as migrations (criar tabelas no banco)
php artisan migrate

# Criar um Controller
php artisan make:controller NomeController

# Criar um Model
php artisan make:model NomeModel

# Criar uma Migration
php artisan make:migration create_tabela_table

# Listar todas as rotas registradas
php artisan route:list

# Limpar cache da aplicação
php artisan cache:clear
php artisan config:clear
```

---

## 👩‍💻 Autora

Desenvolvido por **Sara Coni**  
Etec Professor Camargo Aranha — São Paulo, 2026