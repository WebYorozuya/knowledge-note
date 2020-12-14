# Docker 使用するコマンド

## 概要
このプロジェクトで使用頻度が高そうなコマンドの一覧です。

## コマンド

### コンテナ関連

- コンテナの立ち上げ ( ルートディレクトリ )
```shell
$ docker-compose up -d
```
全てのコンテナが立ち上がった( done )のを確認してから、`localhost:8080` にアクセスすると、Laravelのウェルカムページが表示される。

- 起動中のコンテナを確認する
```shell
$ docker-compose ps
```

- コンテナを終了する
```shell
$ docker-compose down
```

### appサーバー関連
- appサーバーの中に入る
```shell
$ docker-compose exec app bash
```

```shell
root@xxxxxxxxxxxx:/#
```
となったらappサーバーの中に入ることができている
> 今の状態だと、root権限でなんでもできてしまうので、ユーザー権限を与えるのが望ましいらしい

```shell
root@xxxxxxxxxxxx:/# exit
```
でappサーバーから出る


### db関連

- dbサーバーの中に入る
```shell
$ docker-compose exec db bash
```


```shell
root@xxxxxxxxxxxx:/#
```
となったらdbサーバーの中に入ることができている

dbサーバーに入った状態で
```
# mysql -u 自分で決めたデータベースのユーザー名 -p -D 自分で決めたデータベースの名前
```
とすると、パスワードが聞かれるので`自分で決めたデータベースのパスワード`を入力( 打ち込んでも表示されない。正確に入力 )すると
```shell
Welcome to the MySQL monitor.  Commands end with ; or \g.
Your MySQL connection id is 10
Server version: 8.0.22 MySQL Community Server - GPL

Copyright (c) 2000, 2020, Oracle and/or its affiliates. All rights reserved.

Oracle is a registered trademark of Oracle Corporation and/or its
affiliates. Other names may be trademarks of their respective
owners.

Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

mysql> 
```

MySQLが起動する。
```shell
mysql> select * from users;
ERROR 1146 (42S02): Table '自分で決めたデータベースの名前.users' doesn't exist
```
SQL文を打ってみる
```shell
mysql> exit
```
でMySQLから抜け出す
```shell
root@xxxxxxxxxxxx:/# exit
```
でdbサーバーから抜け出す
