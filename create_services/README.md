#### Description
This microservice allows adding services to a database in Always Data, to access this microservice a role-based access was created, which in this case must be entered with a Veterinarian credential.
Only users who log in with veterinarian credentials have permissions to perform this operation. 
The microservice is developed in PHP programming language and follows a RESTful architecture.

#### Requirements
PHP: >= 7.4
Composer: PHP dependency manager.
Web server: Apache, Nginx or other PHP compatible.
Database: PostgreSQL
Authentication: JWT

#### Installation:
Clone repository
https://github.com/Karen020701/Microservices-VetServices.git
cd Microservices_VClinic
cd create_services

Install dependencies
composer install

Authentication
URL 
Method: POST
Description: This endpoint allows users to authenticate and obtain a JWT token.

Add Medications
URL
Method: POST
Authentication: Requires JWT token from a user with vet role
Description: This endpoint allows adding a new service to the database.

#### Security
This microservice uses JSON Web Tokens (JWT) for authentication.
Access to the add service endpoints is restricted to users with vet role only.
The authentication and role middleware verifies the token and role before allowing access to the protected paths.