# knowledge-note - ディレクトリ、ファイルの役割

| 名称 | ディレクトリorファイル | 説明 | 補足 |
| ---- | ---- | ---- | ---- |
| mysql | ディレクトリ | MySQLデータvolume MySQLのデータが保管される | |
| nginx | ディレクトリ | nginxの設定ファイル( default.conf )が置いてある | |
| php | ディレクトリ | php(APサーバー)定義のDockerファイルとphpの設定ファイル(php.ini) が置いてある | APサーバーはdocker-compose.ymlではなくDockerfileで定義する必要がある |
| knowledge-note | ディレクトリ | 実際にコードを書いていくところ Laravelプロジェクト | 
| docker-compose.yml | ファイル | 各サーバーの定義が書かれたファイル | |
| Docker_Commands.md | ファイル | 最低限のDockerコマンドをまとめたファイル | |
| Laravel_Naming_Convention.md | ファイル | Laravelの命名規則とコーディング規約をまとめたファイル | |
| .env | ファイル | 環境変数のファイル | データベースのパスワードなどを環境変数にしてある | |
| .gitignore | ファイル | バージョン管理をしないファイルやディレクトリを定義 | .envファイルをバージョン指定しない様にしてある |
| README.md | ファイル | このファイル | |

## 準備運動

### .envファイル作成
1. ルートディレクトリに`.env`というファイルを作成

1. 中身に下記の形式で記述する
```conf
NGINX_VERSION="latest"
MYSQL_VERSION="8.0"
DATABASE_NAME="master"
DATABASE_ROOT_PASS="project-admin"
DATABASE_USER="person"
DATABASE_PASS="password"
REDIS_VERSION="latest"
```

1. /knowledge-note/knowledge-note/.env.example を .env にコピー
```shell
$ cd knowledge-note
$ pwd
    /knowledge-note/knowledge-note
$ cp .env.example .env
```

1. Laravelプロジェクトの中に新規作成された.envの
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```
を
```
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=master
DB_USERNAME=person
DB_PASSWORD=password
```
に変更する

```shell
$ php artisan config:cache
```

でデータベースコンテナへ接続する準備が完了
