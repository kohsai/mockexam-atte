【　サービス名：Atte（アット）　】


![スクリーンショット 2024-09-20 164513](https://github.com/user-attachments/assets/be883b52-a7a2-44fa-95a3-bee9b89b2ffe)



【　概要　】：ある企業の勤怠管理システム

【　目的　】：人事評価のため

【　機能一覧　】：

/           勤怠打刻ページ

/register	  会員登録ページ

/login	    ログインページ

/attendance	日付別勤怠ページ


【　環境構築　】

Dockerビルド

git@github.com:kohsai/mockexam-atte.git

DockerDesktopアプリを立ち上げる

docker-compose up -d --build

【　Laravel環境構築　】

docker-compose exec php bash
composer install

.envに以下の環境変数を追加

DB_CONNECTION=mysql

DB_HOST=mysql

DB_PORT=3306

DB_DATABASE=laravel_db

DB_USERNAME=laravel_user

DB_PASSWORD=laravel_pass


【　アプリケーションキーの作成　】
php artisan key:generate


【　マイグレーションの実行　】
php artisan migrate


【　使用技術(実行環境)　】

- PHP7.4.9-fpm

- Laravel Framework 8.83.27

- MySQL8.0.26

【　ER図　】

![image](https://github.com/user-attachments/assets/3ce1b152-f54a-4634-8096-660f7eac6f63)

/home/kohsai/coachtech/laravel/mockexam-atte/mockexam.drawio.svg

【　URL　】
- 開発環境：http://localhost/
- phpMyAdmin:：http://localhost:8080/





