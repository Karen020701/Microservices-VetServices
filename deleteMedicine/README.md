#### Description
This microservice allows the delete medicines from the database, with role-based access restrictions. Only users with vet credentials can perform this operation. The microservice is developed in Java and follows a RESTful architecture.

#### Requirements
Java: JDK 11 or higher
Maven: For dependency management
Database: Always Data - PostgreSQL
Spring Boot: Framework used for building the microservice
JWT: For token-based authentication.

#### Installation:
Clone repository
https://github.com/Karen020701/Microservices-VetServices.git
cd Microservices_VClinic

Enter the microservice folders src -> main -> java, right click on the .java file and select Run Java to run the services.

#### Security
This microservice uses JSON Web Tokens (JWT) for authentication.
Access to the delete medicine endpoint is restricted to users with a vet role.
A security filter is responsible for verifying the user's token and role before allowing access to the protected paths.
