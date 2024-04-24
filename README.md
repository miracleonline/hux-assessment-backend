# hux-assessment-backend
Contacts App
Contacts App is a simple web application that allows users to manage their contact information. It provides a RESTful API backend implemented in PHP with the Slim framework and a MySQL database, as well as a basic frontend that consumes the API.

Features
- User registration and authentication
- CRUD operations for managing contacts
- Secure API endpoints with JWT authentication
- Unit tests for API endpoints

Technologies Used
- PHP
- Slim Framework
- MySQL
- Composer (for dependency management)
- PHPUnit (for unit testing)

Setup
- Clone the repository
  git clone https://github.com/your-username/contacts-app.git
- Install dependencies
  composer install

Database setup
- Create a MySQL database named contacts_app.
- Import the database schema from schema.sql.

Configuration
- Rename config/database.sample.php to config/database.php and update the database connection settings as needed.

Start the serverYou can use PHP's built-in web server to run the application:
  php -S localhost:8000 -t public
  Access the application at http://localhost:8000.

API Endpoints
- POST /auth/register: Register a new user
- POST /auth/login: User login
- POST /contacts: Create a new contact
- GET /contacts: Get all contacts
- GET /contacts/{id}: Get a single contact by ID
- PUT /contacts/{id}: Update a contact
- DELETE /contacts/{id}: Delete a contact

Testing
To run unit tests, use the following command:
  composer test

