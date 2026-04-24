# 🦷 Dental Hub - ERP Odontológico Sênior

![PHP Version](https://img.shields.io/badge/php-8.4-777bb4.svg?style=flat-square&logo=php)
![Laravel Version](https://img.shields.io/badge/laravel-13.x-ff2d20.svg?style=flat-square&logo=laravel)
![Filament Version](https://img.shields.io/badge/filament-v5-ffca28.svg?style=flat-square&logo=clojure)
![PostgreSQL](https://img.shields.io/badge/postgresql-16-4169e1.svg?style=flat-square&logo=postgresql)
![Docker](https://img.shields.io/badge/docker-ready-2496ed.svg?style=flat-square&logo=docker)

O **Dental Hub** é uma plataforma SaaS (Software as a Service) de gestão de clínicas odontológicas de alta performance. O projeto foi desenvolvido sob os princípios de **Domain-Driven Design (DDD)** e **Arquitetura Limpa**, garantindo escalabilidade, isolamento de dados (Multi-tenancy) e fácil manutenção.

## 🚀 Diferenciais Técnicos (Stack de Vanguarda)

- **PHP 8.4:** Utilização de *Property Hooks*, *Readonly Classes* e tipagem estrita.
- **Laravel 13:** Otimização de performance e o estado da arte do ecossistema Laravel.
- **Filament v5:** Interface administrativa de próxima geração para uma UX fluida.
- **Multi-tenancy:** Isolamento completo de dados por clínica (SaaS).
- **Arquitetura Limpa (Core/):** Camada de domínio independente de frameworks, facilitando testes e evolução.
- **Infraestrutura Imutável:** Ambiente totalmente Dockerizado (Nginx, PHP 8.4, PostgreSQL 16, Redis).

## 📂 Estrutura do Projeto

Para demonstrar senioridade técnica, o projeto separa a lógica de negócio da infraestrutura do framework:

    ├── app/                # Camada de Infraestrutura (Laravel/Filament)
    ├── src/                # O Coração do Sistema (Core)
    │   ├── Domain/         # Entidades, Regras de Negócio e Agregados
    │   ├── Application/    # Casos de Uso (Use Cases) e DTOs
    │   └── Infrastructure/ # Implementações de Repositórios e Gateways
    ├── docker/             # Configurações de ambiente isolado
    └── database/           # Migrations e Seeders

## 🛠️ Como Rodar o Projeto

### Pré-requisitos
- Docker e Docker Compose instalados.

### Passo a Passo

1. **Clonar o repositório:**
    ```bash
    git clone git@github.com-mncjdev:MarcondesJuniorDev/dental-hub.git
    cd dental-hub
    ```

2. **Configurar o ambiente:**
    ```bash
    cp .env.example .env
    # Ajuste as variáveis do banco conforme o docker-compose.yml
    ```

3. **Subir os containers:**
    ```bash
    docker compose up -d --build
    ```

4. **Instalar dependências e migrar:**
    ```bash
    docker compose exec app composer install
    docker compose exec app php artisan key:generate
    docker compose exec app php artisan migrate
    ```

5. **Criar acesso ao painel:**
    ```bash
    docker compose exec app php artisan make:filament-user
    ```

Acesse em: `http://localhost:8000/admin`

## 📅 Roadmap de Desenvolvimento

- [x] Infraestrutura Docker (PHP 8.4, PgSQL, Redis)
- [x] Setup Laravel 13 e Filament v5
- [ ] Implementação de Multi-tenancy (Clinics)
- [ ] Módulo de Pacientes e Prontuários
- [ ] Agenda Inteligente com Validação de Domínio (Overlap Prevention)
- [ ] Odontograma Visual Dinâmico
- [ ] Fluxo Financeiro e Orçamentos

## ⚖️ Licença

Este projeto é para fins de portfólio e segue a licença MIT.

---
Desenvolvido com ☕ e foco em engenharia de software por **Marcondes Junior**.
