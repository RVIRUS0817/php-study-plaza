# php-study-plaza

![php-illustration](https://user-images.githubusercontent.com/5633085/59142183-0bd4d080-89f5-11e9-93b5-997fd06f46f8.png)

https://github.com/shirasud/php-starter-kit/issues/4

## ゴール

基礎ができればあとは慣れ

PHPのCLI開発や、Cake等のフレームワークでアプリケーションが作れるようになる。
PHPが読めて、調べればわかるような状態をつくる。

学ぶは真似ぶ。

基礎をちゃちゃっとやって、読める・書けるようになれば大丈夫

## スキルセット

- PHP
- JS
- CSS
- HTML
- データストア
    - MySQL
    - Redis

## 目次

- PHPの言語仕様軽く
- CLIとWeb
- 先にCLIで基礎を学ぶ
    - 基礎
    - コーディングルール
    - 定数、変数
    - 配列、連想配列、JSONを扱えるようになる
    - 演算子
    - 型
    - ループ
    - 条件分岐
    - 関数をつくる
    - クラス、オブジェクト
        - 手続き型
        - オブジェクト指向型
            - クラスは作るだけでは使えない
            - 生成（インスタンス化）
            - スコープ
    - 別ファイルを呼び出す
        - include
        - require
- Webサーバをたてて出力してみる
    - nginx, php-fpm, MySQLのdocker-compose
        - ハードル高ければMAMPでもいい
        - https://github.com/koni/docker-php-nginx-mysql-memcached
        - こんな感じで作っちゃおう
    - フレームワークに頼らずDB連携する簡単なものを作ってみる
        - HTML, CSS, Javascriptの簡単な説明
        - どうやって作っていくか
            - 静的ルーティングと動的ルーティング
            - 出力してみる
            - DBからデータを出力する
            - フォームをつくる
                - 入力
                - 確認
                - データ保存
            - セッション/クッキー
                - ファイル/KVS
- MVCフレームワークに慣れる（Cake）
    - Model
        - schema
        - ORMの概念を知る
    - View
        - HTML
        - CTP
            - Helper
        - CSS
        - JS
    - Controller
        - Component
    - 実際どうやって作っていくか
        - composerで依存管理をする
        -
- 番外編（順不同）
    - 正規表現
    - MVC以外のパターン
    - デザインパターン
    - SDKを使ってみる
    - APIをつくる
    - テスト
        - PHP Unit
        - テストタブルなコード
    - コード整形
        - php-cs-fixer
        - php-bcf
    - 開発に便利なエディターの設定
    - デバッグ方法・プロファイリング
        - プリントデバッグ
        - ブレークポイント
        - PHPのエラーログみる
        - Cakeで使えるDebug KiT
    - アセットコンパイル
        - JS,TypeScript,SASSなど

