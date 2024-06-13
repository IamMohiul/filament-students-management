# Student Management System

This is a Student Management System built with Laravel 11 and Filament. It allows administrators to create classes, sections, and add students to them. The system can also generate PDFs and QR codes for student details.

## Features

- **Class Management**: Create and manage classes.
- **Section Management**: Create and manage sections within classes.
- **Student Management**: Add and manage student details.
- **PDF Generation**: Generate PDFs containing student details.
- **QR Code Generation**: Generate QR codes for student details.

## Installation

### Prerequisites

- PHP 8.1 or higher
- Composer
- Node.js & npm
- A web server (e.g., Apache, Nginx)

### Steps

1. **Clone the repository:**
    ```sh
    git clone https://github.com/your-username/student-management-system.git
    cd student-management-system
    ```

2. **Install dependencies:**
    ```sh
    composer install
    npm install
    ```

3. **Copy the .env.example file to .env:**
    ```sh
    cp .env.example .env
    ```

4. **Generate an application key:**
    ```sh
    php artisan key:generate
    ```

5. **Set up your database configuration in the `.env` file.**

6. **Run migrations:**
    ```sh
    php artisan migrate
    ```

7. **Serve the application:**
    ```sh
    php artisan serve
    ```

8. **Compile assets:**
    ```sh
    npm run dev
    ```

## Usage

- **Access the application**: Open your web browser and navigate to `http://localhost:8000`.
- **Admin Login**: Use the default admin credentials to log in (you may need to set these up in the seeder or directly in the database).
- **Manage Classes and Sections**: Use the Filament admin panel to create and manage classes and sections.
- **Add Students**: Add student details and assign them to classes and sections.
- **Generate PDFs and QR Codes**: Use the relevant buttons to generate PDFs and QR codes for student details.

## File Structure

- **app/Http/Controllers**: Contains the controllers for handling requests.
- **app/Models**: Contains the Eloquent models.
- **database/migrations**: Contains the database migration files.
- **resources/views**: Contains the Blade templates.
- **routes/web.php**: Contains the web routes.
- **config/filament.php**: Configuration file for Filament.

## Contributing

Contributions are welcome! Please submit a pull request or open an issue to discuss changes.

## Acknowledgements

- [Laravel](https://laravel.com/)
- [Filament](https://filamentadmin.com/)
- [laravel-invoices ](https://github.com/LaravelDaily/laravel-invoices) for PDF generation
- [Simple QrCode](https://github.com/SimpleSoftwareIO/simple-qrcode) for QR code generation
