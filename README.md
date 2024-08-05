# Social Assistance Management System

## Justification

The project aims to enhance the management of social assistance entities of the Secretary of Assistance and Social Development of Guarapuava. Using the PHP Laravel framework and modern technologies such as Docker, Blade, and Tailwind, the system provides robustness, scalability, and a modern interface.

## Developers

- Guilherme Bittencourt da Silva

## Technologies Used

- **Laravel:** PHP framework for web application development.
- **Docker:** Platform for creating, deploying, and running applications in containers.
- **Blade:** Laravel's template engine for rendering views.
- **Tailwind CSS:** CSS framework for responsive and modern design.

## Installation and Setup

### Requirements

- Docker (includes Docker Compose)
- PHP (if not using Docker)
- Composer (if not using Docker)

### Steps to Start the Project

1. **Clone the Repository**

    ```bash
    git clone https://github.com/guibitt7/Projeto-Assistencia-Social.git
    cd repository
    ```

2. **Docker Setup**

    Ensure that Docker and Docker Compose are installed and running.

3. **Start the Containers**

    ```bash
    docker-compose up -d
    ```

4. **Install Dependencies**

    Access the Laravel container and install the dependencies:

    ```bash
    docker-compose exec app composer install
    ```

5. **Configure the Environment**

    Copy the `.env.example` file to create the `.env` file:

    ```bash
    docker-compose exec app cp .env.example .env
    ```

6. **Run Migrations**

    ```bash
    docker-compose exec app php artisan migrate
    ```

## Site Hosting

The site was initially hosted in the cloud but was removed due to the elections in Guarapuava. The Secretary of Assistance and Social Development requested the temporary removal of the site until the elections are over. The site will be reactivated after the end of the electoral period.

## System Features

### Homepage

- **Neighborhood Selection Interface:** The homepage offers an intuitive and easy-to-use interface, allowing users to quickly select the desired neighborhood. Navigation is optimized to ensure a pleasant and efficient experience.

### Entity Details

- **Detailed Information:** Provides a comprehensive view of each social assistance entity, including a complete description, address, contact information, and services offered.
- **Related Events:** Displays all scheduled events for the entity, with detailed information such as date, time, and description, keeping users well-informed about the activities.

### Events

- **Event Viewing:** Allows viewing all registered events in an organized manner.
- **Event Details:** Each event has a dedicated page with detailed information such as location, time, and description, allowing users a complete view of the events.

### Administrative Area

- **Restricted Access:** Area accessible exclusively to administrators, ensuring that only authorized users can make changes and manage content.
- **Entity Management:** Functionality to add, edit, and delete information about social assistance entities, ensuring that the database is always up-to-date.
- **User Management:** Allows administration of user profiles, assigning permissions, and managing access, maintaining security and organization.

### Event Management

- **Event Creation:** Robust tools for creating new events, defining details such as date, time, location, and description efficiently.
- **Event Editing:** Allows updating existing event information, ensuring that all details are correct and up-to-date.
- **Event Deletion:** Provides the ability to remove unnecessary or canceled events, keeping the system clean and relevant.

These features are designed to provide effective and simplified management of social assistance entities and their events, promoting efficient organization and clear communication with users and administrators.

## General Objective

Develop an integrated management system for the Secretary of Assistance and Social Development, facilitating the organization, dissemination, and management of social assistance entities and their events.

## Results and Social Impact

- **Directly Beneficiaries:** Approximately 2,000 people.
- **Indirect Impact:** About 3,000 people.

## Impacted External Institutions

- Associação de Pais e Amigos dos Excepcionais (APAE)
- Centro de Referência da Assistência Social (CRAS)
- Associação dos Deficientes Físicos de Guarapuava (ADFG)
- Centro de Integração Empresa - Escola (CIEE)
- Instituto Assistencial Dom Bosco
