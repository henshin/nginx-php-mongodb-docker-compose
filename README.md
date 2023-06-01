# How to Develop a Simple Web Application Using Docker, Nginx, PHP and MongoDB 

The repository contains files for preparing the environment and running a simple PHP script. 

The application runs with Nginx + PHP-fpm 8.2 + MongoDB 6, the environment is run with Docker compose. It also uses Composer to include the required MongoDB packages. 

The application gets access data from environment variables, connects to the database and writes 1000 documents to the database. 

That's it! However, it's a good starting point to do something more.

## Installation

1. Clone the repository and navigate to the project folder.

2. Run docker-compose

```
docker-compose up -d
```

3. Open localhost in your browser

4. Enjoy modifying the index.php script and checking the result by simply reloading the localhost page in your browser

5. Stop docker-compose after experimenting

```
docker-compose down
```
