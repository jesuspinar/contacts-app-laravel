# Contacts App

## Requirements

- Xampp: Local server environment
- Node.js: JavaScript runtime
- Composer: PHP dependency manager

## Local Setup Guide

1. Clone the repository:
   ```
   git clone https://github.com/your-username/contacts-app-laravel.git
   cd contacts-app-laravel
   ```

2. Install PHP dependencies:
   ```
   composer install
   ```

3. Create a copy of the .env file:
   ```
   cp .env.example .env
   ```

4. Generate an application key:
   ```
   php artisan key:generate
   ```

5. Configure your database in the .env file:
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database_name
   DB_USERNAME=your_database_username
   DB_PASSWORD=your_database_password
   ```

6. Run database migrations:
   ```
   php artisan migrate
   ```

7. Install Node.js dependencies:
   ```
   npm install
   ```

8. Compile assets:
   ```
   npm run dev
   ```

9. Start the development server:
   ```
   php artisan serve
   ```

10. Visit `http://localhost:8000` in your browser to view the application.

## Development Commands

| Command | Description |
|---------|-------------|
| `composer create-project laravel/laravel=9.1.10 contacts-app-laravel` | Create a new Laravel project (version 9.1.10) |
| `composer require laravel/ui=^3.4` | Add Laravel UI package |
| `php artisan ui react` | Generate React scaffolding |
| `npm install` | Install Node.js dependencies |
| `npm run dev` | Compile assets |
| `php artisan serve` | Start Laravel development server |
| `php artisan route:list` | List all routes |
| `npm run watch` | Watch for asset changes |
| `php artisan make:controller -m Contact ContactController` | Generate controller with model |
| `php artisan migrate` | Run migrations |
| `php artisan make:migration create_contacts_table` | Create migration for contacts table |
| `php artisan make:model Contact` | Create Contact model |
| `php artisan tinker` | Start Tinker (interactive console) |
| `php artisan make:component Alert` | Create Alert component |
| `php artisan make:migration add_contact_picture_to_contacts_table` | Create migration for adding contact picture |
| `php artisan storage:link` | Create symbolic link for storage |

## Contributing

Please read [CONTRIBUTING.md](CONTRIBUTING.md) for details on our code of conduct and the process for submitting pull requests.

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details.
