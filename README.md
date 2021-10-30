Testing docker JSON logmessages, processed with loki and grafana.

First install docker loki log-driver:

`docker plugin install grafana/loki-docker-driver:latest --alias loki --grant-all-permissions`

Start with logging stack with:

`docker-compose up -d`

Grafana running at http://localhost:3000, login with `admin/admin`

Go to "Explore" select Loki input and issue queries

```
{source="stdout"}|json|my_date=~"01:40:3.*"
{source="stdout"}|json|my_date=~"01:40:3.*"|argv_0=~"/app.*"
```