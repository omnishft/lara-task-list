# Laravel+Docker Setup

- [ ] Rename container appropriately
- [ ] Configure ports
- [ ] Make a source folder for the source code
    - [ ] mkdir -p /src
- [ ] Build and run docker compose file
    - [ ] docker compose up -d --build web
- [ ] Create laravel project in source folder
    - [ ] docker compose run --rm composer create-project --prefer-dist laravel/laravel .
- [ ] Set proper permissions and ownership
    - [ ] Enter the container
        - [ ] docker compose exec app bash --when entering a container remember to always use the service name and not the container name
        - [ ] Give read and write permissions
            - [ ] chmod -R a+rw .
- [ ] Ensure proper db connection
    - [ ] 

