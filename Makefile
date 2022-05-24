all:
	mkdir -p /home/pkari/data/wp
	mkdir -p /home/pkari/data/db
	docker-compose -f ./srcs/docker-compose.yml up -d

clean:
	docker-compose -f ./srcs/docker-compose.yml down

fclean: 
		sudo rm -rf /home/pkari/data/wp
		sudo rm -rf /home/pkari/data/db
		docker stop $$(docker ps -qa)
		docker rm $$(docker ps -qa)
		docker rmi -f $$(docker images -qa)
		docker volume rm $$(docker volume ls -q)
		docker network rm $$(docker network ls -q)

.PHONY: all clean fclean