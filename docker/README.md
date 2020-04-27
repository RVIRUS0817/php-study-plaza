## Setup

```
$ pwd
~/git/shirasud/php-starter-kit/docker

$ touch .env
```

.env

```
DATABASE=vote
USER_NAME=php_user
USER_PASSWORD=php_pw
ROOT_PASSWORD=password

```

## config check

```

docker-compose config

```

## run dev

```

docker-compose up

```

## run background

```

docker-compose up -d

```

## prune & run background

```

docker-compose pull && docker image prune -f && docker-compose up -d

```

## URL

hosts

```
127.0.0.1 vote.me
```

http://vote.me:10080/vote_raw/test.php
