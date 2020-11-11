# Play

cd play

export UID
export GID
docker-compose \
-f docker/all.yml \
-p yosmy_ding_recharge \
up -d \
--remove-orphans --force-recreate

docker exec -it yosmy_ding_recharge_php sh

php test/bin/app.php /audit-transfers