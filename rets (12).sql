-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2023-03-09 14:55:08
-- サーバのバージョン： 10.4.27-MariaDB
-- PHP のバージョン: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `rets`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `educational_backgrounds`
--

CREATE TABLE `educational_backgrounds` (
  `id` int(11) NOT NULL COMMENT 'システムID',
  `name` varchar(50) NOT NULL COMMENT '学歴'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `educational_backgrounds`
--

INSERT INTO `educational_backgrounds` (`id`, `name`) VALUES
(1, '中卒'),
(2, '高卒'),
(3, '専門卒'),
(4, '高専卒'),
(5, '短大卒'),
(6, '大卒'),
(7, '院卒');

-- --------------------------------------------------------

--
-- テーブルの構造 `experiences`
--

CREATE TABLE `experiences` (
  `id` int(11) NOT NULL COMMENT 'システムID',
  `user_id` int(11) NOT NULL COMMENT 'ユーザー名',
  `title` varchar(50) NOT NULL COMMENT 'タイトル',
  `date` varchar(50) NOT NULL COMMENT '日付',
  `name` varchar(50) NOT NULL COMMENT '氏名',
  `career` varchar(300) NOT NULL COMMENT '経歴要約',
  `skill` varchar(500) DEFAULT NULL COMMENT 'スキル・知識',
  `licence` varchar(500) DEFAULT NULL COMMENT '免許・資格',
  `summary` varchar(500) NOT NULL COMMENT '自己PR',
  `desirable_industry_id` int(11) NOT NULL COMMENT '希望の業種',
  `desirable_occupation_id` int(11) NOT NULL COMMENT '希望の職種',
  `created_at` datetime NOT NULL DEFAULT current_timestamp() COMMENT '作成日時',
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() COMMENT '更新日時'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `experiences`
--

INSERT INTO `experiences` (`id`, `user_id`, `title`, `date`, `name`, `career`, `skill`, `licence`, `summary`, `desirable_industry_id`, `desirable_occupation_id`, `created_at`, `updated_at`) VALUES
(9, 3, '作業用', '2022年2月24日', '福岡一郎', 'ああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ。\r\nああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ。', '■PCスキル\r\n・wordf\r\n・Excel', '・日商簿記2級(2021年4月)\r\n・普通自動車第一種免許(2021年4月)', '私の強みは苦手なことにも挑戦する「チャレンジ精神」です。\r\n\r\n私は高校時代からずっと英語が苦手でした。大学では、交換留学で来日している生徒もいるなかで、英語が話せず、彼らとコミュニケーションが取れなかったことに悔しい思いをしました。そこで、英語を克服し、自分も留学をしようと積極的に英語の授業を履修し、英会話教室にも通いました。その結果、大学3年でついに留学を経験し、国籍を問わない幅広い交友関係を築くことができました。\r\n\r\n私が御社に入社した際には、自ら高い目標を立て、それを達成できるよう積極的にチャレンジしていきたいと考えています。', 12, 2, '2023-03-01 14:54:55', '2023-03-08 17:55:31'),
(13, 3, '職務経歴書', '2022年2月24日', 'ユーザー', 'ｓｓｓｓｓｓｓｓｓｓｓｓｓｓｓｓｓｓｓｓｓｓｓｓｓｓｓｓｓｓｓｓｓｓｓｓｓｓｓ\r\nｓｓｓｓｓｓｓｓｓｓｓｓｓｓｓｓｓｓｓｓｓｓｓｓｓｓｓｓｓｓｓｓｓｓｓｓｓｓｓｓｓ', '■PCスキル\r\n・word', '・日商簿記2級(2021年4月)', 'ｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄ\r\nｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄ', 11, 8, '2023-03-01 16:01:03', '2023-03-01 16:01:03'),
(14, 3, 'h', 'h', 'h', 'hh', 'h', 'h', 'h', 1, 1, '2023-03-01 16:54:33', '2023-03-01 16:54:33'),
(15, 3, 'dp', 'p', 's', 'p', 'p', NULL, 's', 12, 1, '2023-03-01 16:55:06', '2023-03-01 16:55:06'),
(22, 12, 'k', 'k', 'k', 'k', 'k', 'k', '私は負けず嫌いであり、それが強みだと思っています。大学ではラグビー部に所属していましたが、体格に恵まれず、試合に出ても結果を残すことができませんでした。それをくつがえそうと、スピードとテクニックをより磨くことに注力しました。\r\n\r\n体力作りなど基礎磨きも疎かにせず、練習も2倍の量に増やしました。その結果、ウィングポジションでスタメン入りし、チームを勝利に導くことができました。御社でも、自分が置かれた環境に負けることなく、目標に向かって、できる限りの努力をしていきたいと考えています。', 2, 2, '2023-03-03 10:05:03', '2023-03-03 15:42:32'),
(23, 15, 'syoku', 'k', 'k', 'k', 'l', 'l', '私はリーダーシップを発揮できる人材です。学生時代にサークル長として運営に携わった際に、リーダーシップを養うことができました。\r\nサークル長を務めていたフットサルサークルでは、練習場所や時間が取れないことや、連携が取りきれていないことが問題でした。そこで、大学側に掛け合い週に二回の練習場所を確保し、時間を決め活動するようにメンバーに声かけを行いました。\r\nさらに、週末明けに今週の活動の詳細をメンバーにメールで配信することで連携強化に努めた結果、サークル加入率を前年度の３倍まで伸ばすことができました。\r\n問題にしっかりと焦点を当て、迅速に対応していき、周りを良い意味で巻き込んでいくリーダーシップを御社でも活かしてきたいと考えております。', 9, 1, '2023-03-03 15:35:13', '2023-03-03 15:35:13'),
(24, 14, 'kｋk', 'k', 'k', 'k', 'k', 'k', '私の強みは実行力があることです。\r\n\r\n私の所属するテニス部では、毎年怪我人が多く発生する問題がありました。私は、その原因としてメンバーの認識の低さを問題視し、怪我に対する注意喚起や、コート整備と備品整備、整理整頓を徹底するよう、自ら積極的に実行しながら、周りにも声かけを行いました。その結果、メンバー全員の意識改革ができ、怪我人も半数以上減らすことができました。\r\n\r\n御社に入社したあとも、問題に直面したときにはその解決のための計画を立案し、自ら積極的に実行していきたいと考えています。', 12, 4, '2023-03-03 15:45:12', '2023-03-03 15:45:12'),
(25, 13, 'k', 'k', 'k', 'k', NULL, NULL, '私の強みは「探究心」があることです。生花店でのアルバイトで、花言葉で相手に気持ちを伝えることに魅力を感じ、それによって人に癒しを与え、花がよりポピュラーになるよう働きかけようと決心しました。\r\n\r\n店頭のポップやSNSを利用して花言葉を示し、人に興味をもってもらえるよう働きかけました。本やインターネットから冠婚葬祭などのイベントで花が伝えるメッセージなどの研究も重ねました。その結果、SNSのフォロワーが増え、花の売り上げも徐々に上昇しました。\r\n\r\n御社に入社後も持ち前の探究心を生かし、現状に満足することなく、常に学び続ける姿勢をもって働いていけたらと考えております。', 12, 3, '2023-03-03 15:46:20', '2023-03-03 15:46:20'),
(29, 3, 'l', 'l', 'l', 'l', 'll', 'l', 'l', 1, 1, '2023-03-04 23:35:07', '2023-03-04 23:35:07');

-- --------------------------------------------------------

--
-- テーブルの構造 `experiences_work_history`
--

CREATE TABLE `experiences_work_history` (
  `id` int(11) NOT NULL COMMENT 'システムID',
  `experience_id` int(11) NOT NULL COMMENT '職務経歴書ID',
  `user_id` int(11) NOT NULL COMMENT 'ユーザーID',
  `work_history_company1` varchar(50) NOT NULL COMMENT '職務経歴(会社名)',
  `work_history_period1` varchar(50) NOT NULL COMMENT '職務経歴(在籍期間)',
  `work_history_content1` varchar(50) NOT NULL COMMENT '職務経歴(事業内容)',
  `work_history_capital1` varchar(50) NOT NULL COMMENT '職務経歴(資本金)',
  `work_history_employees1` varchar(50) NOT NULL COMMENT '職務経歴(従業員数)',
  `work_history_business1` varchar(50) NOT NULL COMMENT '職務経歴(業務名)',
  `work_history_business_period1` varchar(50) NOT NULL COMMENT '職務経歴(業務期間)',
  `work_history_body1` varchar(500) NOT NULL COMMENT '職務経歴(内容)',
  `work_history_company2` varchar(50) DEFAULT NULL COMMENT '職務経歴(会社名)',
  `work_history_period2` varchar(50) DEFAULT NULL COMMENT '職務経歴(在籍期間)',
  `work_history_content2` varchar(50) DEFAULT NULL COMMENT '職務経歴(事業内容)',
  `work_history_capital2` varchar(50) DEFAULT NULL COMMENT '職務経歴(資本金)',
  `work_history_employees2` varchar(50) DEFAULT NULL COMMENT '職務経歴(従業員数)',
  `work_history_business2` varchar(50) DEFAULT NULL COMMENT '職務経歴(業務名)',
  `work_history_business_period2` varchar(50) DEFAULT NULL COMMENT '職務経歴(業務期間)',
  `work_history_body2` varchar(500) DEFAULT NULL COMMENT '職務経歴(内容)',
  `work_history_company3` varchar(50) DEFAULT NULL COMMENT '職務経歴(会社名)',
  `work_history_period3` varchar(50) DEFAULT NULL COMMENT '職務経歴(在籍期間)',
  `work_history_content3` varchar(50) DEFAULT NULL COMMENT '職務経歴(事業内容)',
  `work_history_capital3` varchar(50) DEFAULT NULL COMMENT '職務経歴(資本金)',
  `work_history_employees3` varchar(50) DEFAULT NULL COMMENT '職務経歴(従業員数)',
  `work_history_business3` varchar(50) DEFAULT NULL COMMENT '職務経歴(業務名)',
  `work_history_business_period3` varchar(50) DEFAULT NULL COMMENT '職務経歴(業務期間)',
  `work_history_body3` varchar(500) DEFAULT NULL COMMENT '職務経歴(内容)',
  `work_history_company4` varchar(50) DEFAULT NULL COMMENT '職務経歴(会社名)',
  `work_history_period4` varchar(50) DEFAULT NULL COMMENT '職務経歴(在籍期間)',
  `work_history_content4` varchar(50) DEFAULT NULL COMMENT '職務経歴(事業内容)',
  `work_history_capital4` varchar(50) DEFAULT NULL COMMENT '職務経歴(資本金)',
  `work_history_employees4` varchar(50) DEFAULT NULL COMMENT '職務経歴(従業員数)',
  `work_history_business4` varchar(50) DEFAULT NULL COMMENT '職務経歴(業務名)',
  `work_history_business_period4` varchar(50) DEFAULT NULL COMMENT '職務経歴(業務期間)',
  `work_history_body4` varchar(500) DEFAULT NULL COMMENT '職務経歴(内容)',
  `work_history_company5` varchar(50) DEFAULT NULL COMMENT '職務経歴(会社名)',
  `work_history_period5` varchar(50) DEFAULT NULL COMMENT '職務経歴(在籍期間)',
  `work_history_content5` varchar(50) DEFAULT NULL COMMENT '職務経歴(事業内容)',
  `work_history_capital5` varchar(50) DEFAULT NULL COMMENT '職務経歴(資本金)',
  `work_history_employees5` varchar(50) DEFAULT NULL COMMENT '職務経歴(従業員数)',
  `work_history_business5` varchar(50) DEFAULT NULL COMMENT '職務経歴(業務名)',
  `work_history_business_period5` varchar(50) DEFAULT NULL COMMENT '職務経歴(業務期間)',
  `work_history_body5` varchar(500) DEFAULT NULL COMMENT '職務経歴(内容)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `experiences_work_history`
--

INSERT INTO `experiences_work_history` (`id`, `experience_id`, `user_id`, `work_history_company1`, `work_history_period1`, `work_history_content1`, `work_history_capital1`, `work_history_employees1`, `work_history_business1`, `work_history_business_period1`, `work_history_body1`, `work_history_company2`, `work_history_period2`, `work_history_content2`, `work_history_capital2`, `work_history_employees2`, `work_history_business2`, `work_history_business_period2`, `work_history_body2`, `work_history_company3`, `work_history_period3`, `work_history_content3`, `work_history_capital3`, `work_history_employees3`, `work_history_business3`, `work_history_business_period3`, `work_history_body3`, `work_history_company4`, `work_history_period4`, `work_history_content4`, `work_history_capital4`, `work_history_employees4`, `work_history_business4`, `work_history_business_period4`, `work_history_body4`, `work_history_company5`, `work_history_period5`, `work_history_content5`, `work_history_capital5`, `work_history_employees5`, `work_history_business5`, `work_history_business_period5`, `work_history_body5`) VALUES
(8, 9, 3, '日本株式会社', '2020年1月～2021年12月', '製造業', '500万', '25000', 'プロジェクト名', '2020年1月～2021年12月', 'ああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ。\r\nああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ。\r\nああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ。\r\nああああああああああああああああああああああああああああああああああああああああああああああああああああ。', '日本株式会社', '22020年1月～2021年12月', '製造業', '500万', '25000', 'プロジェクト名', '2020年1月～2021年12月', 'ああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ。\r\nああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ。\r\nああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ。\r\nああああああああああああああああああああああああああああああああああああああああああああああああああああ。', '日本株式会社', '22020年1月～2021年12月', '500万', '500万', '500万', '22020年1月～2021年12月', '22020年1月～2021年12月', 'ああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ。\r\nああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ。\r\nああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ。\r\nああああああああああああああああああああああああああああああああああああああああああああああああああああ。', '日本株式会社', '22020年1月～2021年12月', '500万', '500万', '500万', '22020年1月～2021年12月', '422020年1月～2021年12月', '4', '日本株式会社', '522020年1月～2021年12月', '5500万', '500万', '500万', '5f更新', '522020年1月～2021年12月', 'ああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ。\r\nああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ。\r\nああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ。\r\nああああああああああああああああああああああああああああああああああああああああああああああああああああ。'),
(9, 13, 3, 'f', 'f', 'f', 'f', 'a', 'f', 'f', 'f', '2', '2', '2', '2', '2', '2', '2', '2', '3', '3', '3', '3', '3', '3', '3', '3', '4', '4', '4', '4', '4', '4', '4', '4', '5', '5', '5', '5', '5', '5', '5', '5'),
(10, 14, 3, 'h', 'h', 'h', 'h', 'h', 'd', 'h', 'h', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 15, 3, 'ps', 'p', 'p', 's', 'p', 'p', 'p', 'p', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 22, 12, 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 23, 15, 'k', 'kk', 'k', 'k', 'k', 'k', 'k', 'k', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 24, 14, 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 25, 13, 'k', 'l', 'k', 'k', 'k', 'k', 'k', 'k', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 29, 3, 'll', 'l', 'l', 'l', 'l', 'l', 'l', 'l', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- テーブルの構造 `industrys`
--

CREATE TABLE `industrys` (
  `id` int(11) NOT NULL COMMENT 'システムID',
  `name` varchar(50) NOT NULL COMMENT '業種名'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `industrys`
--

INSERT INTO `industrys` (`id`, `name`) VALUES
(1, '農林・水産'),
(2, '林業'),
(3, '漁業'),
(4, '鉱業'),
(5, '建設業'),
(6, '製造業'),
(7, '電気・ガス'),
(8, '運輸・通信業'),
(9, '卸売・小売・飲食業'),
(10, '金融・保険業'),
(11, '不動産業'),
(12, 'サービス業');

-- --------------------------------------------------------

--
-- テーブルの構造 `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL COMMENT 'システムID',
  `user_id` int(11) NOT NULL COMMENT 'ユーザーID',
  `list_id` int(11) NOT NULL COMMENT 'リストID'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `likes`
--

INSERT INTO `likes` (`id`, `user_id`, `list_id`) VALUES
(16, 3, 5),
(72, 15, 1),
(111, 14, 3),
(118, 14, 5),
(162, 3, 4);

-- --------------------------------------------------------

--
-- テーブルの構造 `lists`
--

CREATE TABLE `lists` (
  `id` int(11) NOT NULL COMMENT 'システムID',
  `user_id` int(11) NOT NULL COMMENT 'ユーザーID',
  `resume_id` int(11) DEFAULT NULL COMMENT '履歴書ID',
  `experience_id` int(11) DEFAULT NULL COMMENT '職種経歴書ID'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `lists`
--

INSERT INTO `lists` (`id`, `user_id`, `resume_id`, `experience_id`) VALUES
(1, 3, 67, 9),
(2, 12, 54, 22),
(3, 13, 57, 25),
(4, 14, 58, 24),
(5, 15, 59, 23),
(6, 25, 63, NULL);

-- --------------------------------------------------------

--
-- テーブルの構造 `occupations`
--

CREATE TABLE `occupations` (
  `id` int(11) NOT NULL COMMENT 'システムID',
  `name` varchar(50) NOT NULL COMMENT '職種名'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `occupations`
--

INSERT INTO `occupations` (`id`, `name`) VALUES
(1, '事務・管理系'),
(2, '営業系'),
(3, '企画系'),
(4, '販売・サービス系'),
(5, 'クリエイティブ系'),
(6, 'IT・エンジニア系'),
(7, '医療・介護系'),
(8, '教育系'),
(9, '技術系'),
(10, '研究・開発系'),
(11, '金融系'),
(12, 'その他');

-- --------------------------------------------------------

--
-- テーブルの構造 `password_resets`
--

CREATE TABLE `password_resets` (
  `id` int(11) NOT NULL COMMENT 'ID',
  `email` varchar(100) NOT NULL COMMENT 'トークン有効期限',
  `token` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp() COMMENT '作成日時',
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() COMMENT '更新日時'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- テーブルの構造 `resumes`
--

CREATE TABLE `resumes` (
  `id` int(11) NOT NULL COMMENT 'システムID',
  `user_id` int(11) NOT NULL COMMENT 'ユーザーID',
  `title` varchar(50) NOT NULL COMMENT 'タイトル',
  `date` varchar(50) NOT NULL COMMENT '日付',
  `name` varchar(50) NOT NULL COMMENT '氏名',
  `kana_name` varchar(50) NOT NULL COMMENT 'フリガナ(氏名)',
  `birth` varchar(50) NOT NULL COMMENT '生年月日',
  `sex` int(11) DEFAULT NULL COMMENT '性別\r\nnull:未記載, 0:男, 1:女',
  `post_code` varchar(8) NOT NULL COMMENT '郵便番号',
  `address` varchar(100) NOT NULL COMMENT '現住所',
  `kana_address` varchar(100) NOT NULL COMMENT 'フリガナ(現住所)',
  `tel` varchar(13) NOT NULL COMMENT '電話番号',
  `email` varchar(100) NOT NULL COMMENT 'メールアドレス',
  `post_code_spare` varchar(8) DEFAULT NULL COMMENT '郵便番号(予備)',
  `address_spare` varchar(100) DEFAULT NULL COMMENT '現住所(予備)',
  `kana_address_spare` varchar(100) DEFAULT NULL COMMENT 'フリガナ(現住所)(予備)',
  `tel_spare` varchar(13) DEFAULT NULL COMMENT '電話番号(予備)',
  `email_spare` varchar(100) DEFAULT NULL COMMENT 'メールアドレス(予備)',
  `motivation` varchar(500) NOT NULL COMMENT '志望動機',
  `remarks` varchar(500) DEFAULT NULL COMMENT '本人希望記入欄',
  `desirable_industry_id` int(11) NOT NULL COMMENT '希望の業種',
  `desirable_occupation_id` int(11) NOT NULL COMMENT '希望の職種',
  `created_at` datetime NOT NULL DEFAULT current_timestamp() COMMENT '作成日時',
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() COMMENT '更新日時'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `resumes`
--

INSERT INTO `resumes` (`id`, `user_id`, `title`, `date`, `name`, `kana_name`, `birth`, `sex`, `post_code`, `address`, `kana_address`, `tel`, `email`, `post_code_spare`, `address_spare`, `kana_address_spare`, `tel_spare`, `email_spare`, `motivation`, `remarks`, `desirable_industry_id`, `desirable_occupation_id`, `created_at`, `updated_at`) VALUES
(23, 3, '作業用', '2024年2月24日現在', '福岡一郎', 'フクオカイチロウ', '2001-11-08', NULL, '000-0000', '東京都東京市東京00', 'トウキョウトトウキョウシトウキョウ', '000-1111-1111', 'test@gmail.com', '000-0000', '東京都東京市東京00', 'トウキョウトトウキョウシトウキョウ00', '111-1111-1111', 'test@gmail.com', 'グローバルな視点から、ベトナムを中心としたアジアに力を入れ事業展開を行われている戦略にとても魅力を感じています。\r\n前職とは業界が違いますが、20代から30代女性をターゲットにした点は共通しているので、御社でも新規顧客拡大につなげることができると思います。また、私は職務を通じてマーケティングの経験も積んで参りましたので、その点についても十分に活用し、即戦力として、御社の売り上げに貢献したいと思っています。', '貴社規定に従います。', 6, 6, '2023-03-01 14:49:09', '2023-03-08 22:46:46'),
(34, 3, '更新sita', 'g', 'g', 'g', 'g', 0, 'g', 'g', 'g', 'g', 'test@gmail.com', NULL, NULL, NULL, NULL, NULL, 'x', '更新ddd', 11, 11, '2023-03-01 14:49:09', '2023-03-08 14:58:43'),
(35, 3, 'FWFWFW', 'h', 'h', 'h', 'h', 1, 'g', 'g', 'g', 'g', 'test@gmail.com', NULL, NULL, NULL, NULL, NULL, 'g', 'g', 11, 11, '2023-03-01 14:49:09', '2023-03-01 10:34:22'),
(38, 3, '履歴書　完全版', 'h', 'h', 'h', 'h', NULL, 'h', 'h', 'h', 'h', 'test@gmail.com', NULL, NULL, NULL, NULL, NULL, 'グローバルな視点から、ベトナムを中心としたアジアに力を入れ事業展開を行われている戦略にとても魅力を感じています。\r\n前職とは業界が違いますが、20代から30代女性をターゲットにした点は共通しているので、御社でも新規顧客拡大につなげることができると思います。また、私は職務を通じてマーケティングの経験も積んで参りましたので、その点についても十分に活用し、即戦力として、御社の売り上げに貢献したいと思っています。', 'h', 8, 2, '2023-03-01 14:49:09', '2023-03-08 13:13:17'),
(53, 12, 'k', 'j', 'k', 'k', 'k', NULL, 'k', 'k', 'k', 'k', 'test@gmail.com', NULL, NULL, NULL, NULL, NULL, 'l', 'l', 1, 1, '2023-03-03 10:03:45', '2023-03-03 10:03:45'),
(54, 12, '履歴書', 'j', 'k', 'k', 'k', NULL, 'k', 'k', 'k', 'k', 'test@gmail.com', NULL, NULL, NULL, NULL, NULL, '御社のブランドコンセプト、一人ひとりのお客さまを大切にする販売方針にとても共感しています。前職でも、お客さまの求めているものを把握するために、あらゆるニュースや雑誌に目を通し、お客さまとの会話に役立ててきました。その結果、接客スキルが評価され、店舗内のトレーナーに抜擢されました。今回は店長として、スタッフ育成だけでなく、店舗全体の管理ができる点に魅力を感じています。店長のサポート業務も行ってきましたので、経験・スキルを生かして貢献していきたいと思います。', 'l', 12, 4, '2023-03-03 10:04:23', '2023-03-03 15:23:36'),
(55, 12, 'k', 'k', 'kk', 'k', 'k', NULL, 'k', 'k', 'k', 'k', 'test@gmail.comss', NULL, NULL, NULL, NULL, NULL, 'j', 'j', 1, 1, '2023-03-03 10:04:53', '2023-03-03 10:04:53'),
(56, 3, 'k', 'k', 'k', 'k', 'k', NULL, 'k', 'k', 'k', 'k', 'test@gmail.com', NULL, NULL, NULL, NULL, NULL, 'ｓ', NULL, 11, 11, '2023-03-03 14:08:00', '2023-03-03 14:08:00'),
(57, 13, '履歴書', 'j', 'j', 'j', 'j', NULL, 'j', 'j', 'j', 'j', 'user@gmail.com', NULL, NULL, NULL, NULL, NULL, 'キャリアを積むことによって、クラス担任から、主任、園長というキャリアパスが導入されており、実績を積むことでチャンスが広がる社風に魅力を感じています。保育士の仕事は、1年ブランクがありますが、0～5歳の保育全般業務に5年間の経験があります。保育士同士はもちろん、職員同士のチームワークを大切にして、クラス運営や保護者へ対応経験を生かして、貢献していきたいと思います。', 'x', 12, 8, '2023-03-03 15:27:49', '2023-03-03 15:27:49'),
(58, 14, '工場', 'h', 'h', 'h', 'h', NULL, 'h', 'h', 'h', 'h', 'aaa@gmail.com', NULL, NULL, NULL, NULL, NULL, '御社の取扱商品の多様さと、商品の選定やブランドの開拓など幅広い業務内容にとても魅力を感じて、志望しました。前職でもECサイトでファッション小物を扱っていましたが、お客さまのニーズを把握するよう努め、売り上げ予算を達成してきました。扱う商品は異なりますが、これまでの経験から取引先への交渉や販売促進などの点で役に立てると思います。今後は正社員としてよりスキルを高め、長期的に御社に貢献していきたいと考えています。', 'd', 12, 4, '2023-03-03 15:30:15', '2023-03-03 15:43:56'),
(59, 15, '営業', 'h', 'h', 'h', 'h', NULL, 'h', 'h', 'h', 'h', 'test@gmail.com', NULL, NULL, NULL, NULL, NULL, '中食業界のパイオニアで、毎日○万食以上もの商品を製造・出荷している御社だからこそ経験できる、大規模製造のコスト管理や工程管理に携わりたく志望しました。この数年は予算から生産管理業務にも携わってきました。今後は製造現場の経験を生かしながらコストや工程の管理に併せ、スタッフの気持ちに寄り添い、労務管理や指導、問題点の改善などの業務にも携わりたいと考えています。', NULL, 9, 1, '2023-03-03 15:33:48', '2023-03-03 15:33:48'),
(60, 3, 'k', 'k', 'k', 'k', 'k', NULL, 'k', 'k', 'k', 'k', 'test@gmail.com', NULL, NULL, NULL, NULL, NULL, 'k', 'k', 2, 2, '2023-03-04 23:36:00', '2023-03-04 23:36:00'),
(62, 3, 'kk', 'kk', 'kk', 'kk', 'kk', NULL, 'kk', 'k', 'k', 'k', 'test@gmail.com', NULL, NULL, NULL, NULL, NULL, 'k', NULL, 5, 3, '2023-03-07 14:58:58', '2023-03-07 14:58:58'),
(65, 3, 'じ', 'ｋkｋkｋ', 'j', 'j', 'j', NULL, 'j', 'j', 'j', 'j', 'test@gmail.com', NULL, NULL, NULL, NULL, NULL, 'l', NULL, 3, 3, '2023-03-08 11:07:22', '2023-03-08 11:07:22'),
(67, 3, 'jsjs', 'j', 'j', 'j', 'j', NULL, 'j', 'j', 'j', 'z', 'test@gmail.com', NULL, NULL, NULL, NULL, NULL, 'k', 'k', 2, 2, '2023-03-08 11:58:15', '2023-03-08 11:58:15'),
(68, 3, 'jjjj', 'jjj', 'jjj', 'jj', 'jj', NULL, 'jj', 'jj', 'jjj', 'jj', 'test@gmail.com', NULL, NULL, NULL, NULL, NULL, 'kk', NULL, 2, 2, '2023-03-08 14:59:34', '2023-03-08 14:59:34');

-- --------------------------------------------------------

--
-- テーブルの構造 `resumes_educational_background`
--

CREATE TABLE `resumes_educational_background` (
  `id` int(11) NOT NULL COMMENT 'システムID',
  `resume_id` int(11) NOT NULL COMMENT '履歴書ID',
  `user_id` int(11) NOT NULL COMMENT 'ユーザーID',
  `educational_background_year1` varchar(4) NOT NULL COMMENT '学歴(年)',
  `educational_background_month1` varchar(2) NOT NULL COMMENT '学歴(月)',
  `educational_background_body1` varchar(50) NOT NULL COMMENT '学歴',
  `educational_background_year2` varchar(4) NOT NULL COMMENT '学歴(年)',
  `educational_background_month2` varchar(2) NOT NULL COMMENT '学歴(月)',
  `educational_background_body2` varchar(50) NOT NULL COMMENT '学歴',
  `educational_background_year3` varchar(4) DEFAULT NULL COMMENT '学歴(年)',
  `educational_background_month3` varchar(2) DEFAULT NULL COMMENT '学歴(月)',
  `educational_background_body3` varchar(50) DEFAULT NULL COMMENT '学歴',
  `educational_background_year4` varchar(4) DEFAULT NULL COMMENT '学歴(年)',
  `educational_background_month4` varchar(2) DEFAULT NULL COMMENT '学歴(月)',
  `educational_background_body4` varchar(50) DEFAULT NULL COMMENT '学歴',
  `educational_background_year5` varchar(4) DEFAULT NULL COMMENT '学歴(年)',
  `educational_background_month5` varchar(2) DEFAULT NULL COMMENT '学歴(月)',
  `educational_background_body5` varchar(50) DEFAULT NULL COMMENT '学歴',
  `educational_background_year6` varchar(4) DEFAULT NULL COMMENT '学歴(年)',
  `educational_background_month6` varchar(2) DEFAULT NULL COMMENT '学歴(月)',
  `educational_background_body6` varchar(50) DEFAULT NULL COMMENT '学歴',
  `educational_background_year7` varchar(4) DEFAULT NULL COMMENT '学歴(年)',
  `educational_background_month7` varchar(2) DEFAULT NULL COMMENT '学歴(月)',
  `educational_background_body7` varchar(50) DEFAULT NULL COMMENT '学歴',
  `educational_background_year8` varchar(4) DEFAULT NULL COMMENT '学歴(年)',
  `educational_background_month8` varchar(2) DEFAULT NULL COMMENT '学歴(月)',
  `educational_background_body8` varchar(50) DEFAULT NULL COMMENT '学歴'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `resumes_educational_background`
--

INSERT INTO `resumes_educational_background` (`id`, `resume_id`, `user_id`, `educational_background_year1`, `educational_background_month1`, `educational_background_body1`, `educational_background_year2`, `educational_background_month2`, `educational_background_body2`, `educational_background_year3`, `educational_background_month3`, `educational_background_body3`, `educational_background_year4`, `educational_background_month4`, `educational_background_body4`, `educational_background_year5`, `educational_background_month5`, `educational_background_body5`, `educational_background_year6`, `educational_background_month6`, `educational_background_body6`, `educational_background_year7`, `educational_background_month7`, `educational_background_body7`, `educational_background_year8`, `educational_background_month8`, `educational_background_body8`) VALUES
(12, 23, 3, '2023', '12', '東京学校　入学', '2023', '2', '東京学校　卒業', '1', '2', '東京学校　入学', '1', '2', '東京学校　入学', '1', '1', '東京学校　入学', '1', '1', '東京学校　入学', '1', '1', '東京学校　入学', '1', '1', '東京学校　入学'),
(23, 34, 3, 'h', 'h', '東京学校　入学', 'h', 'h', 'h', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 35, 3, 'g', 'g', 'g', 'g', 'g', 'g', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 38, 3, '2', '2', 'h', 'h', 'h', 'h', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(41, 53, 12, 'l', 'l', 'l', 'l', 'l', 'l', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, 54, 12, 'l', 'l', 'l', 'l', 'l', 'l', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(43, 55, 12, 'j', 'j', 'j', 'j', 'j', 'j', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(44, 56, 3, 'k', 'k', 'k', 'k', 'k', 'k', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(45, 57, 13, 'k', 'k', 'k', 'k', 'k', 'k', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(46, 58, 14, 'k', 'k', 'k', 'k', 'k', 'k', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(47, 59, 15, 'j', 'j', 'j', 'j', 'j', 'j', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(48, 60, 3, 'k', 'k', 'k', 'k', 'k', 'kk', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(50, 62, 3, 'kk', 'kk', 'kk', 'kk', 'kk', 'k', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(53, 65, 3, 'k', 'k', 'k', 'k', 'k', 'k', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(55, 67, 3, 'k', 'k', 'k', 'k', 'k', 'k', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(56, 68, 3, 'kkk', 'kk', 'kk', 'k', 'kk', 'kk', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- テーブルの構造 `resumes_licence`
--

CREATE TABLE `resumes_licence` (
  `id` int(11) NOT NULL COMMENT 'システムID',
  `resume_id` int(11) NOT NULL COMMENT '履歴書ID',
  `user_id` int(11) NOT NULL COMMENT 'ユーザーID',
  `licence_year1` varchar(4) DEFAULT NULL COMMENT '免許・資格(年)',
  `licence_month1` varchar(2) DEFAULT NULL COMMENT '免許・資格(月)',
  `licence_body1` varchar(50) DEFAULT NULL COMMENT '免許・資格',
  `licence_year2` varchar(4) DEFAULT NULL COMMENT '免許・資格(年)',
  `licence_month2` varchar(2) DEFAULT NULL COMMENT '免許・資格(月)',
  `licence_body2` varchar(50) DEFAULT NULL COMMENT '免許・資格',
  `licence_year3` varchar(4) DEFAULT NULL COMMENT '免許・資格(年)',
  `licence_month3` varchar(2) DEFAULT NULL COMMENT '免許・資格(月)',
  `licence_body3` varchar(50) DEFAULT NULL COMMENT '免許・資格',
  `licence_year4` varchar(4) DEFAULT NULL COMMENT '免許・資格(年)',
  `licence_month4` varchar(2) DEFAULT NULL COMMENT '免許・資格(月)',
  `licence_body4` varchar(50) DEFAULT NULL COMMENT '免許・資格',
  `licence_year5` varchar(4) DEFAULT NULL COMMENT '免許・資格(年)',
  `licence_month5` varchar(2) DEFAULT NULL COMMENT '免許・資格(月)',
  `licence_body5` varchar(50) DEFAULT NULL COMMENT '免許・資格',
  `licence_year6` varchar(4) DEFAULT NULL COMMENT '免許・資格(年)',
  `licence_month6` varchar(2) DEFAULT NULL COMMENT '免許・資格(月)',
  `licence_body6` varchar(50) DEFAULT NULL COMMENT '免許・資格'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `resumes_licence`
--

INSERT INTO `resumes_licence` (`id`, `resume_id`, `user_id`, `licence_year1`, `licence_month1`, `licence_body1`, `licence_year2`, `licence_month2`, `licence_body2`, `licence_year3`, `licence_month3`, `licence_body3`, `licence_year4`, `licence_month4`, `licence_body4`, `licence_year5`, `licence_month5`, `licence_body5`, `licence_year6`, `licence_month6`, `licence_body6`) VALUES
(12, 23, 3, '2022', '2', '普通自動車第一種免許　取得', '2023', '12', '普通自動車第一種免許　取得', '2', '2', '普通自動車第一種免許　取得', '2', '2', '普通自動車第一種免許　取得', '2', '2', '普通自動車第一種免許　取得', '2025', '2', '更新'),
(23, 34, 3, NULL, NULL, '普通自動車第一種免許　取得', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 35, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 38, 3, '2', '2', '+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(41, 53, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, 54, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(43, 55, 12, 'j', 'j', 'j', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(44, 56, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(45, 57, 13, 'k', 'k', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(46, 58, 14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(47, 59, 15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(48, 60, 3, 'k', 'k', 'k', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(50, 62, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(53, 65, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(55, 67, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(56, 68, 3, 'kk', 'kk', 'k', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- テーブルの構造 `resumes_work_history`
--

CREATE TABLE `resumes_work_history` (
  `id` int(11) NOT NULL COMMENT 'システムID',
  `resume_id` int(11) NOT NULL COMMENT '履歴書ID',
  `user_id` int(11) NOT NULL COMMENT 'ユーザーID',
  `work_history_year1` varchar(4) DEFAULT NULL COMMENT '職歴(年)',
  `work_history_month1` varchar(2) DEFAULT NULL COMMENT '職歴(月)',
  `work_history_body1` varchar(50) DEFAULT NULL COMMENT '職歴',
  `work_history_year2` varchar(4) DEFAULT NULL COMMENT '職歴(年)',
  `work_history_month2` varchar(2) DEFAULT NULL COMMENT '職歴(月)',
  `work_history_body2` varchar(50) DEFAULT NULL COMMENT '職歴',
  `work_history_year3` varchar(4) DEFAULT NULL COMMENT '職歴(年)',
  `work_history_month3` varchar(2) DEFAULT NULL COMMENT '職歴(月)',
  `work_history_body3` varchar(50) DEFAULT NULL COMMENT '職歴',
  `work_history_year4` varchar(4) DEFAULT NULL COMMENT '職歴(年)',
  `work_history_month4` varchar(2) DEFAULT NULL COMMENT '職歴(月)',
  `work_history_body4` varchar(50) DEFAULT NULL COMMENT '職歴',
  `work_history_year5` varchar(4) DEFAULT NULL COMMENT '職歴(年)',
  `work_history_month5` varchar(2) DEFAULT NULL COMMENT '職歴(月)',
  `work_history_body5` varchar(50) DEFAULT NULL COMMENT '職歴',
  `work_history_year6` varchar(4) DEFAULT NULL COMMENT '職歴(年)',
  `work_history_month6` varchar(2) DEFAULT NULL COMMENT '職歴(月)',
  `work_history_body6` varchar(50) DEFAULT NULL COMMENT '職歴',
  `work_history_year7` varchar(4) DEFAULT NULL COMMENT '職歴(年)',
  `work_history_month7` varchar(2) DEFAULT NULL COMMENT '職歴(月)',
  `work_history_body7` varchar(50) DEFAULT NULL COMMENT '職歴',
  `work_history_year8` varchar(4) DEFAULT NULL COMMENT '職歴(年)',
  `work_history_month8` varchar(2) DEFAULT NULL COMMENT '職歴(月)',
  `work_history_body8` varchar(50) DEFAULT NULL COMMENT '職歴',
  `work_history_year9` varchar(4) DEFAULT NULL COMMENT '職歴(年)',
  `work_history_month9` varchar(2) DEFAULT NULL COMMENT '職歴(月)',
  `work_history_body9` varchar(50) DEFAULT NULL COMMENT '職歴',
  `work_history_year10` varchar(4) DEFAULT NULL COMMENT '職歴(年)',
  `work_history_month10` varchar(2) DEFAULT NULL COMMENT '職歴(月)',
  `work_history_body10` varchar(50) DEFAULT NULL COMMENT '職歴'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `resumes_work_history`
--

INSERT INTO `resumes_work_history` (`id`, `resume_id`, `user_id`, `work_history_year1`, `work_history_month1`, `work_history_body1`, `work_history_year2`, `work_history_month2`, `work_history_body2`, `work_history_year3`, `work_history_month3`, `work_history_body3`, `work_history_year4`, `work_history_month4`, `work_history_body4`, `work_history_year5`, `work_history_month5`, `work_history_body5`, `work_history_year6`, `work_history_month6`, `work_history_body6`, `work_history_year7`, `work_history_month7`, `work_history_body7`, `work_history_year8`, `work_history_month8`, `work_history_body8`, `work_history_year9`, `work_history_month9`, `work_history_body9`, `work_history_year10`, `work_history_month10`, `work_history_body10`) VALUES
(12, 23, 3, '2022', '12', '東京株式会社　入社', '1', '1', '東京株式会社　入社', '2', '2', '東京株式会社　入社', '2', '2', '東京株式会社　入社2', '2', '2s', '東京株式会社　入社', '2', '2s', '東京株式会社　入社', '2', '2s', '東京株式会社　入社', '2', '2', '東京株式会社　入社', '2', '2', '東京株式会社　入社', '2', '2', '東京株式会社　入社'),
(23, 34, 3, NULL, NULL, '東京株式会社　入社', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 35, 3, 'g', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 38, 3, 'h', 'h', 'h', '2', 'h', 'h', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(41, 53, 12, 'l', 'l', 'l', 'l', 'l', 'l', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, 54, 12, 'l', 'l', 'l', 'l', 'l', 'l', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(43, 55, 12, 'j', 'j', 'j', 'j', 'j', 'j', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(44, 56, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(45, 57, 13, 'k', 'k', 'k', 'kk', 'k', 'k', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(46, 58, 14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(47, 59, 15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(48, 60, 3, 'k', 'k', 'kk', 'k', 'k', 'k', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(50, 62, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(53, 65, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(55, 67, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(56, 68, 3, 'kk', 'kk', 'kk', 'k', 'kk', 'kk', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- テーブルの構造 `social_accounts`
--

CREATE TABLE `social_accounts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `provider_name` varchar(100) NOT NULL,
  `provider_id` int(11) NOT NULL,
  `provider_token` varchar(100) NOT NULL,
  `provider_refresh_token` varchar(100) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL COMMENT 'システムID',
  `user_name` varchar(50) DEFAULT NULL COMMENT 'ユーザー名',
  `email` varchar(100) NOT NULL COMMENT 'メールアドレス',
  `password` varchar(100) NOT NULL COMMENT 'パスワード',
  `educational_background_id` int(11) DEFAULT NULL COMMENT '最終学歴',
  `previous_industry_id` int(11) DEFAULT NULL COMMENT '前職の業種',
  `previous_occupation_id` int(11) DEFAULT NULL COMMENT '前職の職種',
  `created_at` datetime NOT NULL DEFAULT current_timestamp() COMMENT '作成日時'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `users`
--

INSERT INTO `users` (`id`, `user_name`, `email`, `password`, `educational_background_id`, `previous_industry_id`, `previous_occupation_id`, `created_at`) VALUES
(3, 'テストユーザー@@@', 'test@gmail.com', '$2y$10$vWrqoVjTvB3QS6ZSpat4DOqP1F/6oQlE8fsAi9lx5333hChvNB4Qe', 6, 8, 2, '2023-02-24 15:03:27'),
(6, 'e', 'test@gmail.comss', '$2y$10$i2H.M1Lssk5oUEbP.WRrYeLmktLtDJPUwReS4sSpvCEBI1OM8D8bK', 3, NULL, NULL, '2023-03-01 18:01:31'),
(12, 'ユーザー', 'sss@gmail.com', '$2y$10$2wS6IJT3cPh/CE...6AKquuNolKb4vC7geuvklJgnRmp/k.4/2c4K', 6, 12, 1, '2023-03-03 10:01:10'),
(13, 'user', 'user@gmail.com', '$2y$10$JYDplHoYmm9.dJ8MQoDqN.M6RDF9CWYDI1fweSWgzSJgHFLz9pbo6', 3, 12, 8, '2023-03-03 15:26:54'),
(14, 'アカウント', 'eeee@gmail.com', '$2y$10$6r5XNPj1SwlwpNzkODlKZ.nwRHXQIEaTzloiFjUjJt5E0lS3gQ0Bu', 2, 12, 4, '2023-03-03 15:29:31'),
(15, 'ああ', 'qqq@gmail.com', '$2y$10$mSq1qGleBslxfdguf1vKYuAPhU51M4023gX0o/WRB7JoqE4Z7/ND2', 6, 5, 2, '2023-03-03 15:32:19'),
(24, 'ddd', 'ddd@gamil.com', '$2y$10$qat6.nO7cn7VfiR7m3DyjuY.tP.uWGfWsnYcOh4CsbYXEV30hpXze', 2, 9, 8, '2023-03-07 14:25:39');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `educational_backgrounds`
--
ALTER TABLE `educational_backgrounds`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `experiences_work_history`
--
ALTER TABLE `experiences_work_history`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `industrys`
--
ALTER TABLE `industrys`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `lists`
--
ALTER TABLE `lists`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- テーブルのインデックス `occupations`
--
ALTER TABLE `occupations`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `resumes`
--
ALTER TABLE `resumes`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `resumes_educational_background`
--
ALTER TABLE `resumes_educational_background`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `resumes_licence`
--
ALTER TABLE `resumes_licence`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `resumes_work_history`
--
ALTER TABLE `resumes_work_history`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `social_accounts`
--
ALTER TABLE `social_accounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD UNIQUE KEY `provider_name` (`provider_name`);

--
-- テーブルのインデックス `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`user_name`),
  ADD UNIQUE KEY `email` (`email`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `educational_backgrounds`
--
ALTER TABLE `educational_backgrounds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'システムID', AUTO_INCREMENT=8;

--
-- テーブルの AUTO_INCREMENT `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'システムID', AUTO_INCREMENT=33;

--
-- テーブルの AUTO_INCREMENT `experiences_work_history`
--
ALTER TABLE `experiences_work_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'システムID', AUTO_INCREMENT=29;

--
-- テーブルの AUTO_INCREMENT `industrys`
--
ALTER TABLE `industrys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'システムID', AUTO_INCREMENT=13;

--
-- テーブルの AUTO_INCREMENT `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'システムID', AUTO_INCREMENT=163;

--
-- テーブルの AUTO_INCREMENT `lists`
--
ALTER TABLE `lists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'システムID', AUTO_INCREMENT=7;

--
-- テーブルの AUTO_INCREMENT `occupations`
--
ALTER TABLE `occupations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'システムID', AUTO_INCREMENT=13;

--
-- テーブルの AUTO_INCREMENT `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID', AUTO_INCREMENT=18;

--
-- テーブルの AUTO_INCREMENT `resumes`
--
ALTER TABLE `resumes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'システムID', AUTO_INCREMENT=69;

--
-- テーブルの AUTO_INCREMENT `resumes_educational_background`
--
ALTER TABLE `resumes_educational_background`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'システムID', AUTO_INCREMENT=57;

--
-- テーブルの AUTO_INCREMENT `resumes_licence`
--
ALTER TABLE `resumes_licence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'システムID', AUTO_INCREMENT=57;

--
-- テーブルの AUTO_INCREMENT `resumes_work_history`
--
ALTER TABLE `resumes_work_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'システムID', AUTO_INCREMENT=57;

--
-- テーブルの AUTO_INCREMENT `social_accounts`
--
ALTER TABLE `social_accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- テーブルの AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'システムID', AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
