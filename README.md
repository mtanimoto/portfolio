# portfolio

ポートフォリオサイトを作成しました。

## 構成
- トップページ
- プロフィール
- スキル
- ブログ

ブログに関してログインユーザーのみ以下の操作が行なえます。
- 書く
- 直す
- 消す

## 起動方法
1. databaseディレクトリ配下に`database.sqlite`を作成する
```bash
touch /database/database.sqlite
```
2. テーブルを作成する
```bash
php artisan migrate:refresh --seed
```
3. ローカルサーバーを立ち上げる
```bash
php artisan serve
```
4. `http://localhost:8000/`にアクセス
