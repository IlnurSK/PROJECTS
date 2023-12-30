# Работа с DOCKER
## > Работа с образами
`docker images` или `docker image ls` — посмотреть список образов [ссылка](https://docs.docker.com/engine/reference/commandline/images/), [ссылка](https://docs.docker.com/engine/reference/commandline/image_ls/)

`docker rmi <образ> [образ...]` или `docker image rm <образ> [образ...]` — удалить образ(ы) [ссылка](https://docs.docker.com/engine/reference/commandline/rmi/), [ссылка](https://docs.docker.com/engine/reference/commandline/image_rm/)

### Работа с контейнерами
`docker run <образ>` — поднять контейнер на основе образа [ссылка](https://docs.docker.com/engine/reference/commandline/run/)

docker run `--name <имя>` <образ> — при поднятии присвоить имя контейнеру [ссылка](https://docs.docker.com/engine/reference/run/#name---name)

docker run `--rm` <образ> — удалять контейнер после завершения его работы [ссылка](https://docs.docker.com/engine/reference/run/#clean-up---rm)

docker run `-it` <образ> — позволяет «войти» в контейнер во время его создания [ссылка](https://docs.docker.com/engine/reference/commandline/run/#assign-name-and-allocate-pseudo-tty---name--it), [ссылка](https://docs.docker.com/engine/reference/run/#foreground)

docker run `-d` <образ> — поднять контейнер в фоновом режиме [ссылка](https://docs.docker.com/engine/reference/run/#detached--d)

`docker ps` — список активных (работающих) контейнеров [ссылка](https://docs.docker.com/engine/reference/commandline/ps/)

docker ps `-a` — список всех контейнеров [ссылка](https://docs.docker.com/engine/reference/commandline/ps/#show-both-running-and-stopped-containers)

`docker stop <контейнер> [контейнер...]` — остановить работающий(ие) контейнер(ы) [ссылка](https://docs.docker.com/engine/reference/commandline/stop/)

`docker start <контейнер> [контейнер...]` — запустить остановленный(ые) контейнер(ы) [ссылка](https://docs.docker.com/engine/reference/commandline/start/)

`docker rm <контейнер> [контейнер...]` — удалить контейнер(ы) [ссылка](https://docs.docker.com/engine/reference/commandline/rm/)

`docker container prune` - удалить все остановленные контейнеры

`docker exec <контейнер> команда` — запустить команду в работающем контейнер [ссылка](https://docs.docker.com/engine/reference/commandline/exec/)

docker exec `-it` <контейнер> `bash` — запустить bash процесс и «войти» в контейнер [ссылка](https://docs.docker.com/engine/reference/commandline/exec/#run-docker-exec-on-a-running-container)
## > Инструкции Dockerfile'а
### В этом уроке мы рассмотрим лишь часть инструкций, достаточную для создания собственных образов.

`FROM` — задаем базовый образ, на основе которого собираем новый [ссылка](https://docs.docker.com/engine/reference/builder/#from)

`COPY` — копируем файл с нашей файловой системы в файловую систему контейнеров [ссылка](https://docs.docker.com/engine/reference/builder/#copy)

`ADD` — добавляем файл или ссылку с нашей файловой системы в образ [ссылка](https://docs.docker.com/engine/reference/builder/#add)

`RUN` — выполняем команду [ссылка](https://docs.docker.com/engine/reference/builder/#run)

`WORKDIR` — устанавливаем рабочую директорию [ссылка](https://docs.docker.com/engine/reference/builder/#workdir)

`ENTRYPOINT` — задаем точку входа для запуска контейнера [ссылка](https://docs.docker.com/engine/reference/builder/#entrypoint)

`CMD` — задаем точку входа для запуска контейнера [ссылка](https://docs.docker.com/engine/reference/builder/#cmd)

В 4-м уроке узнаем про существование инструкции `VOLUME`.

В 5-м уроке мы познакомимся с инструкциями `EXPOSE` и `ENV`.

В 7-м уроке узнаем еще про одно применение инструкции `COPY`.

За рамками курса останется еще одна интересная инструкция — `HEALTHCHECK`. Однако примерно это мы увидим в 9-м уроке, когда прикоснемся к docker-compose.

Со списком инструкций можно ознакомиться в документации [ссылка](https://docs.docker.com/engine/reference/builder/).
## > Разница в использовании ENTRYPOINT и CMD
Несмотря на то, что и `ENTRYPOINT`, и `CMD` отвечают за запуск программы в контейнере, они используются в разных ситуациях. Особенно это касается случая, когда в одном докерфайле используются обе инструкции одновременно.  

Предлагаем ознакомиться с этим абзацем из документации — [ссылка](https://docs.docker.com/engine/reference/builder/#understand-how-cmd-and-entrypoint-interact).

Также полезно будет заглянуть [сюда](https://stackoverflow.com/questions/21553353/what-is-the-difference-between-cmd-and-entrypoint-in-a-dockerfile).
## > Разница в использовании ADD и COPY
Полезно будет заглянуть [сюда](https://www.geeksforgeeks.org/difference-between-the-copy-and-add-commands-in-a-dockerfile/) и [сюда](https://stackoverflow.com/questions/24958140/what-is-the-difference-between-the-copy-and-add-commands-in-a-dockerfile).

Ну и, безусловно, в документацию ([COPY](https://docs.docker.com/engine/reference/builder/#copy), [ADD](https://docs.docker.com/engine/reference/builder/#add)).
## > Команда для сборки 
`docker build <путь, где лежит Dockerfile>` — создать образ на основе Dockerfile [ссылка](https://docs.docker.com/engine/reference/commandline/build/#usage)

**docker build** `-t <имя_образа:тег>` **<путь>** — создать образ с именем и тегом [ссылка](https://docs.docker.com/engine/reference/commandline/build/#tag-an-image--t)
## > Команды для работы с файлами
### Ссылки:

[Volume](https://docs.docker.com/storage/volumes/)

[Bind mount](https://docs.docker.com/storage/bind-mounts/)

`docker volume ls` — вывести список вольюмов ([ссылка](https://docs.docker.com/engine/reference/commandline/volume_ls/))

`docker volume create <название>` — создать вольюм ([ссылка](https://docs.docker.com/engine/reference/commandline/volume_create/))

`docker volume rm <название>` — удалить вольюм ([ссылка](https://docs.docker.com/engine/reference/commandline/volume_rm/))

`docker volume prune` — удалить вольюмы, которые не используются контейнерами ([ссылка](https://docs.docker.com/engine/reference/commandline/volume_prune/))

### Bind mount:
docker run -`v <полный_путь_на_хосте>:<полный_путь_в_контейнере>` <образ>

### Volume:
docker run `-v <название_вольюма>:<полный_путь_в_контейнере>` <образ>

### Readonly режим
docker run -v <полный_путь_на_хосте>:<полный_путь_в_контейнере>`:ro` <образ>

## > Команды (Переменные окружения)
`ENV` — инструкция в Dockerfile, которая позволяет задавать переменные окружения в контейнерах ([ссылка](https://docs.docker.com/engine/reference/builder/#env)).

      * Не задавайте через эту инструкцию секретные данные

docker run `-e <НАЗВАНИЕ_ПЕРЕМЕННОЙ>=<значение>` <образ> — позволяет задать переменную окружения в конкретном контейнере ([ссылка](https://docs.docker.com/engine/reference/commandline/run/#set-environment-variables--e---env---env-file)).

## > Команды (Логи)
`docker logs <контейнер>` — позволяет вытащить логи из контейнера ([ссылка](https://docs.docker.com/engine/reference/commandline/logs/))

docker logs `-f` <контейнер> — не отключаемся от контейнера

docker logs `-t` <контейнер> — добавляем время к логам

Еще можно заглянуть [сюда](https://docs.docker.com/config/containers/logging/).

## > Команды (Порты)
`EXPOSE` — инструкция в Dockerfile, которая позволяет сообщить пользователю, какой(ие) порт(ы) слушает приложение внутри контейнера. Не прокидывает порты на хост ([ссылка](https://docs.docker.com/engine/reference/builder/#expose))

docker run `-p <порт_на_хосте>:<порт_в_контейнере>` <образ> — связывает порт внутри контейнера с портом на хосте ([ссылка](https://docs.docker.com/engine/reference/commandline/run/#publish-or-expose-port--p---expose)).

docker run -p `<IP_адрес_на_хосте>:`<порт_на_хосте>:<порт_в_контейнере> <образ> — по умолчанию адрес на хосте задается 0.0.0.0 (про него узнаем в следующем уроке). При поднятии можно изменить этот адрес.

Например: `docker run -p 127.0.0.1:80:80 nginx`

Чтобы посмотреть какие порты слушают приложения внутри контейнера можно использовать команду в терминале `netstat -tuplen`

## > Команды (Сети)
`docker network ls` — список сетей ([ссылка](https://docs.docker.com/engine/reference/commandline/network_ls/))

`docker network create` — создать сеть ([ссылка](https://docs.docker.com/engine/reference/commandline/network_create/))

`docker network rm` — удалить сеть ([ссылка](https://docs.docker.com/engine/reference/commandline/network_rm/))

docker run `--net=<название_сети>` <образ> — подключаем контейнер к сети ([ссылка](https://docs.docker.com/engine/reference/commandline/run/#connect-a-container-to-a-network---network), [ссылка](https://docs.docker.com/engine/reference/run/#network-settings))

`docker inspect <название_или_ID_объекта>` — получить информацию об объектах докера (контейнер, образ, вольюм, сеть) ([ссылка](https://docs.docker.com/engine/reference/commandline/inspect/))

Следует заглянуть еще [сюда](https://docs.docker.com/network/) и вот [сюда](https://www.youtube.com/watch?v=bKFMS5C4CG0).

Дополнительно можете посмотреть еще вот [это](https://habr.com/ru/post/333874/).

## > Многоэтапная сборка
Зайдите вот [сюда](https://docs.docker.com/build/building/multi-stage/).

Этапы задаются при помощи нескольких инструкций `FROM`.

Из одного этапа сборки в другой можно копировать артефакты при помощи `COPY --from=`.

```
FROM <образ> AS builder
. . .


FROM <образ> 
. . .
COPY --from=builder <путь_в_сборке_builder> <путь_в_текущей_сборке>
. . .
```

## > Команды docker-compose и YAML
`docker-compose ps` — список контейнеров ([ссылка](https://docs.docker.com/engine/reference/commandline/compose_ps/))

`docker-compose up` — поднять приложение ([ссылка](https://docs.docker.com/engine/reference/commandline/compose_up/))

docker-compose up `<сервис>` — поднять конкретный контейнер

docker-compose run `<сервис>` — поднять конкретный контейнер

docker-compose up `-d` — поднять контейнеры в фоновом режиме

docker-compose run `-d` — поднять контейнеры в фоновом режиме

docker-compose  `-f docker-compose.dev.yml` up — указать `docker-compose.yaml` файл ([ссылка](https://docs.docker.com/compose/reference/#use--f-to-specify-name-and-path-of-one-or-more-compose-files))

`docker-compose stop` — остановить поднятые контейнеры ([ссылка](https://docs.docker.com/engine/reference/commandline/compose_stop/))

`docker-compose start` — запустить остановленные контейнеры ([ссылка](https://docs.docker.com/engine/reference/commandline/compose_start/))

## > Инструкции docker-compose.yaml 
Загляните вот [сюда](https://docs.docker.com/compose/compose-file/)

`build` — собираем образ, на основе которого поднимем сервис ([ссылка](https://docs.docker.com/compose/compose-file/#build))

`image` — образ, на основе которого поднимем сервис ([ссылка](https://docs.docker.com/compose/compose-file/#image))

`container_name` — название контейнера в сервисе ([ссылка](https://docs.docker.com/compose/compose-file/#container_name))

`volumes` — список вольюмов для сервиса ([ссылка](https://docs.docker.com/compose/compose-file/#volumes))

`environment` — переменные окружения в сервисе ([ссылка](https://docs.docker.com/compose/compose-file/#environment))

`networks` — список сетей, к которым нужно подуключить сервис ([ссылка](https://docs.docker.com/compose/compose-file/#networks))

`ports` — список портов, которые нужно прокинуть у сервиса ([ссылка](https://docs.docker.com/compose/compose-file/#ports))

`restart` — указываем поведение сервиса при падении ([ссылка](https://docs.docker.com/compose/compose-file/#restart))

`deploy`/`replicas` — указываем количество контейнеров у сервиса ([ссылка](https://docs.docker.com/compose/compose-file/#deploy), [ссылка](https://docs.docker.com/compose/compose-file/deploy/#replicas))

`depends_on` — определяем зависимость между сервисами ([ссылка](https://docs.docker.com/compose/compose-file/#depends_on))

`healthcheck` — задаем проверку для сервиса ([ссылка](https://docs.docker.com/compose/compose-file/#healthcheck))

`docker-compose down` — остановить и удалить контейнеры и сеть  ([ссылка](https://docs.docker.com/engine/reference/commandline/compose_down/))
