# crewflix

---

## Installation

The application is containerised in docker. To run the application locally:

1. download docker desktop. This will include docker compose.
2. in the project directory run:

- `docker compose build`
- `docker compose up -d` (the flag `-d` will run it in detached mode)

---

## Seed databases

The mysql container has a volume mapped to DB. This means your database will be persistant even if shut down the containers.

After standing up the containers you will need to create the database, tables and seed them with data for the application to use.

1. from the project directoty exec into the mysql container

   `docker container exec -it crewflix_mysql_1 sh`

2. once in the container access MySQL

   `mysql -root -p`
   `password`

3. create the database

   `CREATE DATABASE crewflix;`

4. create the users table

   ```CREATE TABLE users (
       id int NOT NULL AUTO_INCREMENT,
       firstName VARCHAR(25),
       lastName VARCHAR(25),
       username VARCHAR(50),
       email VARCHAR(100),
       pword VARCHAR(255),
       signUpDate DATETIME DEFAULT CURRENT_TIMESTAMP,
       isSubscribed TINYINT(1) DEFAULT 0,
       PRIMARY KEY (id)
   );```

   ````

5. download _crewflix/imports/categories.sql_ copy the contents of the file into the MySQL shell and press enter to create the categories tables

6. download _crewflix/imports/entities.sql_ copy the contents of the file into the MySQL shell and press enter to create the enities tables

7. download _crewflix/imports/videos.sql_ copy the contents of the file into the MySQL shell and press enter to create the videos tables

8. exit MySQL and the shell

`exit;`
`exit`

---

## Shut down

To shut down the application you can run:

`docker compose down`
