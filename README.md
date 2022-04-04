# laravel プロジェクト作成コマンド
`composer create-project --prefer-dist laravel/laravel ./`

# service provider作成コマンド
`php artisan make:provider xxx`

# ミドルウェア作成コマンド
`php artisan make:middleware xxx`

# permission変更
`chown -R www-data:www-data /var/www`

# サーバー起動コマンド
`php artisan serve`

# Laravel Mixインストールコマンド
`npm install`
`npm run watch`

# キャッシュクリア
`php artisan config:cache && php artisan route:cache && php artisan view:cache`

# Laravel経由でMySQLにテーブルを作成する。（マイグレーション）
`php artisan migrate`

# マイグレーションファイル作成
`php artisan make:migration`

# シーダーファイル作成
`php artisan make:seeder`

# シーディング処理
`php artisan db:seed`

# コントローラー作成
`php artisan make:controller`

# モデル作成
`php artisan make:model`

# .envコピー
`cp .env.example .env`
## encryption keyの設定
- `php artisan key:generate`

# コンテナに入るコマンド
`docker-compose exec php bash`

# オートローダー最適化
'composer install --optimize-autoloader --no-dev'

# npm起動
`npm run development`