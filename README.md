# knowledge-note - ディレクトリ、ファイルの役割

| 名称 | ディレクトリorファイル | 説明 | 補足 |
| ---- | ---- | ---- | ---- |
| nginx | ディレクトリ | nginxの設定ファイル( default.conf )が置いてある | |
| php | ディレクトリ | php(APサーバー)定義のDockerファイルとphpの設定ファイル(php.ini) が置いてある | APサーバーはdocker-compose.ymlではなくDockerfileで定義する必要がある |
| source | ディレクトリ | 実際にコードを書いていくところ Laravelプロジェクト | 
| docker-compose.yml | ファイル | 各サーバーの定義が書かれたファイル | |
| Docker_Commands.md | ファイル | 最低限のDockerコマンドをまとめたファイル | |
| Laravel_Naming_Convention.md | ファイル | Laravelの命名規則とコーディング規約をまとめたファイル | |
| .gitignore | ファイル | バージョン管理をしないファイルやディレクトリを定義 | .envファイルをバージョン管理しない様にしてある |
| README.md | ファイル | このファイル | |

## 準備運動

1. プロジェクトのクローン
    ```shell
    $ git clone https://github.com/KouheiYamamoto777/knowledge-note.git
    ```

1. .envの作成 (docker-compose.ymlが使う環境変数。`knowledge-note配下`)
    ```shell
    $ touch .env
    ```

1. .envの定義 
    ```
    NGINX_VERSION="latest"
    MYSQL_VERSION="8.0"
    DATABASE_NAME="自分で決めたデータベースの名前"
    DATABASE_ROOT_PASS="自分で決めたデータベースの管理者用パスワード"
    DATABASE_USER="自分で決めたデータベースのユーザー名"
    DATABASE_PASS="自分で決めたデータベースのパスワード"
    REDIS_VERSION="latest"
    ```
    - バージョン指定はDockerイメージのハッシュ値ではないことに注意してください。  

1. Dockerコンテナの立ち上げ
    ```shell
    $ docker-compose up -d --build
    ```

1. appコンテナの中に入る
    ```shell
    $ docker-compose exec app bash
    ```

1. 作業ディレクトリに移動する
    ```shell
    # cd source
    ```

1. composerで依存関係を解決する
    ```shell
    # composer install
    ```

1. .envを作成 ( `source配下` )
    ```shell
    # cp .env.example .env
    ```

1. .envの定義
    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=laravel
    DB_USERNAME=root
    DB_PASSWORD=

    を

    DB_CONNECTION=mysql
    DB_HOST=db
    DB_PORT=3306
    DB_DATABASE=3番で決めたデータベースの名前
    DB_USERNAME=3番で決めたデータベースのユーザー名
    DB_PASSWORD=3番で決めたデータベースのパスワード
    ```

1. APP_KEYの作成
    ```
    # php artisan key:generate
    ```

1. キャッシュのクリア
    ```
    # php artisan config:cache
    ```

1. コンテナから脱出
    ```
    # exit
    ```

1. Dockerコンテナの再起動
    ```shell
    $ docker-compose restart
    ```

1. localhost:8080にアクセス
