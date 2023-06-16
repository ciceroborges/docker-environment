-- The script that is placed here will be executed by docker after the service is created. 
-- In this example docker will create a schema and add permission to the root user.

CREATE SCHEMA my_schema DEFAULT CHARACTER SET utf8mb4;

GRANT ALL ON my_schema.* TO 'root'@'%'; 