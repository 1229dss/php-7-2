## 概要
就活をする人をターゲットにしたアプリ。

自⾝に似た境遇（前職の職種・業種が同じ　高卒や中卒など）の人が書いたものを見ることができる。

## 使い方
### 【非ユーザー】
履歴書、職務経歴のPDF出力が可能。

### 【ユーザー】
履歴書、職務経歴書の作成、保存、PDF出力が可能。

他ユーザーの学歴、前職、志望動機、自己PR、希望する業種、職種の閲覧が可能。

### 【Githubユーザー(API連携)】
他ユーザーの学歴、前職、志望動機、自己PR、希望する業種、職種の閲覧が可能。

履歴書、職務経歴書の作成、保存、PDF出力がは不可。

## 環境
XAMP/MySQL/PHP

## データベース
データベース名：rets

テーブル
お使いのphpMyAdmin上のデータベースを作り、rets(12).sqlをインポートしていただければと思います。

## 補足
個人情報保護のためGithubからのログイン、パスワードリセット時のメールの送信ができません。
　

(Githubユーザーでのログイン(API連携))

　GITHUB_CLIENT_ID (GithubのID)

　GITHUB_CLIENT_SECRET (GithubのClient secrets)

(パスワードリセット時のメールの送信)

　MAIL_USERNAME (メールアドレス)

　MAIL_PASSWORD (アプリパスワードを取得して入力)

　MAIL_FROM_ADDRESS (MAIL_USERNAMEと同じものを入力)
　

.env(57~68行)の上記の項目に任意の値を入れて確認をお願いします。

今回私は、パスワードリセット時のメールの送信にはGmailを使用しました。
