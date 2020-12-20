# knowledge-noteへようこそ

私たちのコミュニティのメンターである [おさないさん](https://www.youtube.com/channel/UCHxqQ8bUg5F2GW79D_DvSjQ/featured) へのプレゼントとして立ち上げられたプロジェクトです 🎁

おさないさんのチャンネルメンバーに使ってもらえるナレッジ蓄積ツールを開発中です 🎉👍🏿

---

## knowledge-note - ディレクトリ、ファイルの役割

| 名称 | ディレクトリorファイル | 説明 | 補足 |
| ---- | ---- | ---- | ---- |
| mysql | ディレクトリ | MySQLの設定ファイル( my.cnf )が置いてある | MySQLの日本語化 |
| nginx | ディレクトリ | nginxの設定ファイル( default.conf )が置いてある | |
| php | ディレクトリ | php(APサーバー)定義のDockerファイルとphpの設定ファイル(php.ini) が置いてある | APサーバーはdocker-compose.ymlではなくDockerfileで定義する必要がある |
| source | ディレクトリ | 実際にコードを書いていくところ Laravelプロジェクト | 
| docker-compose.yml | ファイル | 各サーバーの定義が書かれたファイル | |
| Docker_Commands.md | ファイル | 最低限のDockerコマンドをまとめたファイル | |
| Laravel_Naming_Convention.md | ファイル | Laravelの命名規則とコーディング規約をまとめたファイル | |
| .gitignore | ファイル | バージョン管理をしないファイルやディレクトリを定義 | .envファイルをバージョン管理しないため作成 |
| README.md | ファイル | このファイル | |

## 参加しよう！

1. Dockerのインストール
    このプロジェクトでは、開発環境にDockerを使用します。  
    なので、まずは[Dockerをインストール](https://docs.docker.jp/get-docker.html)しましょう！

1. プロジェクトのクローン
    ```shell
    $ git clone https://github.com/KouheiYamamoto777/knowledge-note.git
    ```

1. knowledge-noteへ移動
    ```shell
    $ cd knowledge-note
    ```

1. .envの作成 (docker-compose.ymlが使う環境変数。)
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
    PHPMYADMIN_VERSION="latest"
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
    DB_DATABASE=手順3で決めたデータベースの名前
    DB_USERNAME=手順3で決めたデータベースのユーザー名
    DB_PASSWORD=手順3で決めたデータベースのパスワード
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
    - Laravelのウェルカムページが表示されるのを確認する

1. localhost:7070にアクセス
    - phpMyAdminのログインページが表示されるのを確認する

1. Docker_Commands.mdを読んで一通りやってみる
    - このリポジトリのDocker_Commands.mdを読んでみる
    - コンテナを立ち上げたり終了したり、コンテナに入ったり出たり、MySQLを起動したりしてみる

1. localhost:7070にアクセス
    - phpMyAdminにログインできることを確認する

1. MySQLとphpMyAdminの連携を確認する
    - phpMyAdminでテーブルを作成し、INSERT文でデータを挿入する
    - dbコンテナでMySQLを起動し、SELECT文でテーブルを選択し、データを見てみる
    - dbコンテナとphpMyAdminコンテナが連携しているのを確認する

1. コンテナを再起動してもデータベースの値が保持されているのを確認する
    - 全てのコンテナを終了する
    ```shell
    $ docker-compose down
    ```
    - localhost:8080にアクセスし、Laravelのページが表示されなくなったのを確認する
    - localhost:7070にアクセスし、phpMyAdminのページが表示されなくなったのを確認する
    - もう一度コンテナを立ち上げる
    ```shell
    $ docker-compose up -d
    ```
    - localhost:7070でphpMyAdminにログインする
    - コンテナを再度立ち上げても、前回作成したテーブルと挿入したデータが残っているのを確認する

## エラー

Q. MySQLが日本語化されない！  
A. MySQL8.0では、Windowsをお使いの方は特別な設定を行う必要があるようです。[詳しくはこちら](https://qiita.com/rabbitbeef/items/14433a2c0a6f85c3b476)
