APP=laravel_app

up:
	docker compose up -d

down:
	docker compose down

build:
	docker compose up -d --build

bash:
	docker exec -it $(APP) bash

migrate:
	docker exec -it $(APP) php artisan migrate

fresh:
	docker exec -it $(APP) php artisan migrate:fresh

seed:
	docker exec -it $(APP) php artisan migrate:fresh --seed

status:
	docker exec -it $(APP) php artisan migrate:status

clear:
	docker exec -it $(APP) php artisan optimize:clear
chat-init:
	docker exec -it $(APP) php artisan make:model Message -m
	docker exec -it $(APP) php artisan make:controller ChatController
	@echo "Chat files created. Now edit migration + controller."

inertia:
	docker exec -it $(APP) php artisan inertia:middleware
npm:
	docker exec -it $(APP) npm install

dev:
	docker exec -it $(APP) npm run dev
middleware:
	docker exec -it $(APP) php artisan make:middleware CheckPermission
