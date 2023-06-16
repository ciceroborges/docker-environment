## Docker Environment - Configuration

1 - Create an .env file with the contents of the .env.example file into it;

2 - Install docker and docker compose on your OS;

3 - Shut down all services running on your machine that use the default php/nginx/mysql ports (9000, 80, 3306, etc...);

4 - Run the command below to compile the "app" service image (php | composer);

```sh
docker compose build app
```

5 - Execute the command below to raise and start the containers in the background;

```sh
docker compose up -d
```

6 - Run the command below to install the project dependencies;

```sh
docker compose exec app composer install
```

7 - All done, access localhost or 127.0.0.1 to use the application.

## Docker Environment - Commands

```sh
> Builds, (re)creates, starts, and attaches to containers for a service. 
> -d = Detached mode: Run containers in the background.
docker compose up -d

> Stop and remove containers, networks.
docker compose down

> Starts existing containers for a service.
docker compose start

> Stops running containers without removing them.
docker compose stop
```