# Sistema de Gestão de Entidades de Assistência Social

## Justificativa

O projeto visa aprimorar a gestão das entidades de assistência social da Secretaria de Assistência e Desenvolvimento Social de Guarapuava. Utilizando o framework PHP Laravel e tecnologias modernas como Docker, Blade e Tailwind, o sistema proporciona robustez, escalabilidade e uma interface moderna.

## Desenvolvedores

- Guilherme Bittencourt da Silva


## Tecnologias Utilizadas

- **Laravel:** Framework PHP para desenvolvimento de aplicações web.
- **Docker:** Plataforma para criar, implantar e executar aplicativos em contêineres.
- **Blade:** Motor de templates do Laravel para renderização de views.
- **Tailwind CSS:** Framework CSS para design responsivo e moderno.

## Instalação e Configuração

### Requisitos

- Docker (inclui Docker Compose)
- PHP (se não estiver usando o Docker)
- Composer (se não estiver usando o Docker)

### Passos para Iniciar o Projeto

1. **Clone o Repositório**

    ```bash
    git clone https://github.com/guibitt7/Projeto-Assistencia-Social.git
    cd repositorio
    ```

2. **Configuração do Docker**

    Certifique-se de que o Docker e o Docker Compose estão instalados e em execução.

3. **Suba os Contêineres**

    ```bash
    docker-compose up -d
    ```

4. **Instale as Dependências**

    Acesse o contêiner do Laravel e instale as dependências:

    ```bash
    docker-compose exec app composer install
    ```

5. **Configure o Ambiente**

    Copie o arquivo `.env.example` para criar o arquivo `.env`:

    ```bash
    docker-compose exec app cp .env.example .env
    ```

6. **Execute as Migrações**

    ```bash
    docker-compose exec app php artisan migrate
    ```

## Host do Site

O site foi inicialmente hospedado na nuvem, mas foi retirado devido às eleições em Guarapuava. A Secretaria de Assistência e Desenvolvimento Social solicitou a remoção temporária do site até o término das eleições. O site será reativado após o fim do período eleitoral.

## Funcionalidades do Sistema

### Página Inicial

- **Interface de Seleção de Bairro:** A página inicial oferece uma interface intuitiva e fácil de usar, permitindo aos usuários selecionar o bairro desejado de forma rápida. A navegação é otimizada para garantir uma experiência agradável e eficiente.

### Detalhes das Entidades

- **Informações Detalhadas:** Fornece uma visão abrangente sobre cada entidade de assistência social, incluindo descrição completa, endereço, contato e serviços oferecidos.
- **Eventos Relacionados:** Exibe todos os eventos programados para a entidade, com informações detalhadas como data, hora e descrição, mantendo os usuários bem informados sobre as atividades.

### Eventos

- **Visualização de Eventos:** Permite a visualização de todos os eventos cadastrados no sistema de maneira organizada.
- **Detalhes dos Eventos:** Cada evento possui uma página dedicada com informações detalhadas, como localização, horário e descrição, permitindo aos usuários uma visão completa dos eventos.

### Área Administrativa

- **Acesso Restrito:** Área acessível exclusivamente para administradores, garantindo que apenas usuários autorizados possam fazer alterações e gerenciar o conteúdo.
- **Gestão de Entidades:** Funcionalidade para adicionar, editar e excluir informações sobre entidades de assistência social, assegurando que o banco de dados esteja sempre atualizado.
- **Gestão de Usuários:** Permite a administração dos perfis de usuários, atribuição de permissões e gerenciamento de acessos, mantendo a segurança e a organização.

### Gerenciamento de Eventos

- **Criação de Eventos:** Ferramentas robustas para criar novos eventos, definindo detalhes como data, horário, local e descrição de forma eficiente.
- **Edição de Eventos:** Permite atualizar informações de eventos existentes, garantindo que todos os detalhes estejam corretos e atualizados.
- **Exclusão de Eventos:** Oferece a possibilidade de remover eventos desnecessários ou cancelados, mantendo o sistema limpo e relevante.

Essas funcionalidades são projetadas para proporcionar uma gestão eficaz e simplificada das entidades de assistência social e seus eventos, promovendo uma organização eficiente e uma comunicação clara com os usuários e administradores.


## Objetivo Geral

Desenvolver um sistema de gestão integrado para a Secretaria de Assistência e Desenvolvimento Social, facilitando a organização, divulgação e gerenciamento das entidades de assistência social e seus eventos.

## Resultados e Impacto Social

- **Diretamente Beneficiadas:** Aproximadamente 2.000 pessoas.
- **Impacto Indireto:** Cerca de 3.000 pessoas.

## Instituições Externas Impactadas

- Associação de Pais e Amigos dos Excepcionais (APAE)
- Centro de Referência da Assistência Social (CRAS)
- Associação dos Deficientes Físicos de Guarapuava (ADFG)
- Centro de Integração Empresa - Escola (CIEE)
- Instituto Assistencial Dom Bosco


