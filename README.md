### To run the project you need docker and docker-compose.

### 1. Setup docker containers:
docker-compose up --build -d

### 2. Copy .env.example to .env
cd Task4LaravelApp

cp .env.example .env

### 3. Run commands to setup the project
cd Task4LaravelApp

./artisan optimize:clear
./artisan optimize
./artisan migrate --seed

### In the **Task4LaravelApp** directory there are two helpers for docker
#### In order to run artisan or composer, use these helpers
art

composer

### Open the web app
http://localhost/

### Api
http://localhost/api/appointments

### Future development
-
