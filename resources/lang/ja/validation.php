<?php

return [

    /*
    |--------------------------------------------------------------------------
    | バリデーション言語行
    |--------------------------------------------------------------------------
    |
    | 以下の言語行はバリデタークラスにより使用されるデフォルトのエラー
    | メッセージです。サイズルールのようにいくつかのバリデーションを
    | 持っているものもあります。メッセージはご自由に調整してください。
    |
    */

    'accepted'             => ':attributeを承認してください。',
    'accepted_if' => ':otherが:valueの場合、:attributeを承認してください。',
    'active_url'           => ':attributeが有効なURLではありません。',
    'after'                => ':attributeには、:dateより後の日付を指定してください。',
    'after_or_equal'       => ':attributeには、:date以降の日付を指定してください。',
    'alpha'                => ':attributeはアルファベットのみがご利用できます。',
    'alpha_dash'           => ':attributeはアルファベットとダッシュ(-)及び下線(_)がご利用できます。',
    'alpha_num'            => ':attributeはアルファベット数字がご利用できます。',
    'array'                => ':attributeは配列でなくてはなりません。',
    'before'               => ':attributeには、:dateより前の日付をご利用ください。',
    'before_or_equal'      => ':attributeには、:date以前の日付をご利用ください。',
    'between'              => [
        'numeric' => ':attributeは、:minから:maxの間で指定してください。',
        'file'    => ':attributeは、:min kBから、:max kBの間で指定してください。',
        'string'  => ':attributeは、:min文字から、:max文字の間で指定してください。',
        'array'   => ':attributeは、:min個から:max個の間で指定してください。',
    ],
    'boolean'              => ':attributeは、trueかfalseを指定してください。',
    'confirmed'            => ':attributeと、確認フィールドとが、一致していません。',
    'current_password'     => 'パスワードが正しくありません。',
    'date'                 => ':attributeには有効な日付を指定してください。',
    'date_equals'          => ':attributeには、:dateと同じ日付けを指定してください。',
    'date_format'          => ':attributeは:format形式で指定してください。',
    'different'            => ':attributeと:otherには、異なった内容を指定してください。',
    'digits'               => ':attributeは:digits桁で指定してください。',
    'digits_between'       => ':attributeは:min桁から:max桁の間で指定してください。',
    'dimensions'           => ':attributeの図形サイズが正しくありません。',
    'distinct'             => ':attributeには異なった値を指定してください。',
    'email'                => '有効なメールアドレスを指定してください。',
    'ends_with'            => ':attributeには、:valuesのどれかで終わる値を指定してください。',
    'exists'               => '選択された:attributeは正しくありません。',
    'file'                 => ':attributeにはファイルを指定してください。',
    'filled'               => ':attributeに値を指定してください。',
    'gt'                   => [
        'numeric' => ':attributeには、:valueより大きな値を指定してください。',
        'file'    => ':attributeには、:value kBより大きなファイルを指定してください。',
        'string'  => ':attributeは、:value文字より長く指定してください。',
        'array'   => ':attributeには、:value個より多くのアイテムを指定してください。',
    ],
    'gte'                  => [
        'numeric' => ':attributeには、:value以上の値を指定してください。',
        'file'    => ':attributeには、:value kB以上のファイルを指定してください。',
        'string'  => ':attributeは、:value文字以上で指定してください。',
        'array'   => ':attributeには、:value個以上のアイテムを指定してください。',
    ],
    'image'                => ':attributeには画像ファイルを指定してください。',
    'in'                   => '選択された:attributeは正しくありません。',
    'in_array'             => ':attributeには:otherの値を指定してください。',
    'integer'              => ':attributeは整数で指定してください。',
    'ip'                   => ':attributeには、有効なIPアドレスを指定してください。',
    'ipv4'                 => ':attributeには、有効なIPv4アドレスを指定してください。',
    'ipv6'                 => ':attributeには、有効なIPv6アドレスを指定してください。',
    'json'                 => ':attributeには、有効なJSON文字列を指定してください。',
    'lt'                   => [
        'numeric' => ':attributeには、:valueより小さな値を指定してください。',
        'file'    => ':attributeには、:value kBより小さなファイルを指定してください。',
        'string'  => ':attributeは、:value文字より短く指定してください。',
        'array'   => ':attributeには、:value個より少ないアイテムを指定してください。',
    ],
    'lte'                  => [
        'numeric' => ':attributeには、:value以下の値を指定してください。',
        'file'    => ':attributeには、:value kB以下のファイルを指定してください。',
        'string'  => ':attributeは、:value文字以下で指定してください。',
        'array'   => ':attributeには、:value個以下のアイテムを指定してください。',
    ],
    'max'                  => [
        'numeric' => ':attributeには、:max以下の数字を指定してください。',
        'file'    => ':attributeには、:max kB以下のファイルを指定してください。',
        'string'  => ':attributeは、:max文字以下で指定してください。',
        'array'   => ':attributeは:max個以下指定してください。',
    ],
    'mimes'                => ':attributeには:valuesタイプのファイルを指定してください。',
    'mimetypes'            => ':attributeには:valuesタイプのファイルを指定してください。',
    'min'                  => [
        'numeric' => ':attributeには、:min以上の数字を指定してください。',
        'file'    => ':attributeには、:min kB以上のファイルを指定してください。',
        'string'  => ':attributeは、:min文字以上で指定してください。',
        'array'   => ':attributeは:min個以上指定してください。',
    ],
    'multiple_of' => ':attributeには、:valueの倍数を指定してください。',
    'not_in'               => '選択された:attributeは正しくありません。',
    'not_regex'            => ':attributeの形式が正しくありません。',
    'numeric'              => ':attributeには、数字を指定してください。',
    'password'             => '正しいパスワードを指定してください。',
    'present'              => ':attributeが存在していません。',
    'regex'                => ':attributeに正しい形式を指定してください。',
    'required'             => ':attributeは必ず指定してください。',
    'required_if'          => ':otherが:valueの場合、:attributeも指定してください。',
    'required_unless'      => ':otherが:valuesでない場合、:attributeを指定してください。',
    'required_with'        => ':valuesを指定する場合は、:attributeも指定してください。',
    'required_with_all'    => ':valuesを指定する場合は、:attributeも指定してください。',
    'required_without'     => ':valuesを指定しない場合は、:attributeを指定してください。',
    'required_without_all' => ':valuesのどれも指定しない場合は、:attributeを指定してください。',
    'prohibited'           => ':attributeは入力禁止です。',
    'prohibited_if' => ':otherが:valueの場合、:attributeは入力禁止です。',
    'prohibited_unless'    => ':otherが:valueでない場合、:attributeは入力禁止です。',
    'prohibits'            => 'attributeは:otherの入力を禁じています。',
    'same'                 => ':attributeと:otherには同じ値を指定してください。',
    'size'                 => [
        'numeric' => ':attributeは:sizeを指定してください。',
        'file'    => ':attributeのファイルは、:sizeキロバイトでなくてはなりません。',
        'string'  => ':attributeは:size文字で指定してください。',
        'array'   => ':attributeは:size個指定してください。',
    ],
    'starts_with'          => ':attributeには、:valuesのどれかで始まる値を指定してください。',
    'string'               => ':attributeは文字列を指定してください。',
    'timezone'             => ':attributeには、有効なゾーンを指定してください。',
    'unique'               => ':attributeの値は既に存在しています。',
    'uploaded'             => ':attributeのアップロードに失敗しました。',
    'url'                  => ':attributeに正しい形式を指定してください。',
    'uuid'                 => ':attributeに有効なUUIDを指定してください。',

    /*
    |--------------------------------------------------------------------------
    | Custom バリデーション言語行
    |--------------------------------------------------------------------------
    |
    | "属性.ルール"の規約でキーを指定することでカスタムバリデーション
    | メッセージを定義できます。指定した属性ルールに対する特定の
    | カスタム言語行を手早く指定できます。
    |
    */

    'custom' => [
        '属性名' => [
            'ルール名' => 'カスタムメッセージ',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | カスタムバリデーション属性名
    |--------------------------------------------------------------------------
    |
    | 以下の言語行は、例えば"email"の代わりに「メールアドレス」のように、
    | 読み手にフレンドリーな表現でプレースホルダーを置き換えるために指定する
    | 言語行です。これはメッセージをよりきれいに表示するために役に立ちます。
    |
    */

    'attributes' => [
        'user_name' => 'ユーザー名',
        'email' => 'メールアドレス',
        'new_email' => '新しいメールアドレス',
        'password' => 'パスワード',
        'password_conf' => '確認用パスワード',
        'new_password' => '新しいパスワード',
        'educational_background_id' => '学歴',
        'title' => 'タイトル',
        'date' => '日付',
        'name' => '氏名',
        'kana_name' => 'フリガナ(氏名)',
        'birth' => '生年月日',
        'post_code' => '郵便番号',
        'address' => '現住所',
        'kana_address' => 'フリガナ(現住所)',
        'tel' => '電話番号',
        'post_code_spare' => '郵便番号',
        'address_spare' => '現住所',
        'kana_address_spare' => 'フリガナ(現住所)',
        'tel_spare' => '電話番号',
        'motivation' => '志望動機',
        'remarks' => '本人希望記入欄',
        'desirable_industry_id' => '希望の業種',
        'desirable_occupation_id' => '希望の職種',
        'career' => '経歴要約',
        'skill' => 'スキル・知識',
        'licence' => '免許・資格',
        'summary' => '自己PR',

        'educational_background_year1' => '学歴の日付(年)',
        'educational_background_month1' => '学歴の日付(月)',
        'educational_background_body1' => '学歴',
        'educational_background_year2' => '学歴の日付(年)',
        'educational_background_month2' => '学歴の日付(月)',
        'educational_background_body2' => '学歴',
        'educational_background_year3' => '学歴の日付(年)',
        'educational_background_month3' => '学歴の日付(月)',
        'educational_background_body3' => '学歴',
        'educational_background_year4' => '学歴の日付(年)',
        'educational_background_month4' => '学歴の日付(月)',
        'educational_background_body4' => '学歴',
        'educational_background_year5' => '学歴の日付(年)',
        'educational_background_month5' => '学歴の日付(月)',
        'educational_background_body5' => '学歴',
        'educational_background_year6' => '学歴の日付(年)',
        'educational_background_month6' => '学歴の日付(月)',
        'educational_background_body6' => '学歴',
        'educational_background_year7' => '学歴の日付(年)',
        'educational_background_mont7' => '学歴の日付(月)',
        'educational_background_body7' => '学歴',
        'educational_background_year8' => '学歴の日付(年)',
        'educational_background_month8' => '学歴の日付(月)',
        'educational_background_body8' => '学歴',
        'educational_background_year9' => '学歴の日付(年)',
        'educational_background_month9' => '学歴の日付(月)',
        'educational_background_body9' => '学歴',
        'educational_background_year10' => '学歴の日付(年)',
        'educational_background_month10' => '学歴の日付(月)',
        'educational_background_body10' => '学歴',

        'work_history_year1' => '職歴の日付(年)',
        'work_history_month1' => '職歴の日付(月)',
        'work_history_body1' => '職歴',
        'work_history_year2' => '職歴の日付(年)',
        'work_history_month2' => '職歴の日付(月)',
        'work_history_body2' => '職歴',
        'work_history_year3' => '職歴の日付(年)',
        'work_history_month3' => '職歴の日付(月)',
        'work_history_body3' => '職歴',
        'work_history_year4' => '職歴の日付(年)',
        'work_history_month4' => '職歴の日付(月)',
        'work_history_body4' => '職歴',
        'work_history_year5' => '職歴の日付(年)',
        'work_history_month5' => '職歴の日付(月)',
        'work_history_body5' => '職歴',
        'work_history_year6' => '職歴の日付(年)',
        'work_history_month6' => '職歴の日付(月)',
        'work_history_body6' => '職歴',
        'work_history_year7' => '職歴の日付(年)',
        'work_history_month7' => '職歴の日付(月)',
        'work_history_body7' => '職歴',
        'work_history_year8' => '職歴の日付(年)',
        'work_history_month8' => '職歴の日付(月)',
        'work_history_body8' => '職歴',
        'work_history_year9' => '職歴の日付(年)',
        'work_history_month9' => '職歴の日付(月)',
        'work_history_body9' => '職歴',
        'work_history_year10' => '職歴の日付(年)',
        'work_history_month10' => '職歴の日付(月)',
        'work_history_body10' => '職歴',
        'work_history_year11' => '職歴の日付(年)',
        'work_history_month11' => '職歴の日付(月)',
        'work_history_body11' => '職歴',
        'work_history_year12' => '職歴の日付(年)',
        'work_history_month12' => '職歴の日付(月)',
        'work_history_body12' => '職歴',
        'work_history_year13' => '職歴の日付(年)',
        'work_history_month13' => '職歴の日付(月)',
        'work_history_body13' => '職歴',
        'work_history_year14' => '職歴の日付(年)',
        'work_history_month14' => '職歴の日付(月)',
        'work_history_body14' => '職歴',

        'licence_year1' => '免許・資格の日付(年)',
        'licence_month1' => '免許・資格の日付(月)',
        'licence_body1' => '免許・資格',
        'licence_year2' => '免許・資格の日付(年)',
        'licence_month2' => '免許・資格の日付(月)',
        'licence_body2' => '免許・資格',
        'licence_year3' => '免許・資格の日付(年)',
        'licence_month3' => '免許・資格の日付(月)',
        'licence_body3' => '免許・資格',
        'licence_year4' => '免許・資格の日付(年)',
        'licence_month4' => '免許・資格の日付(月)',
        'licence_body4' => '免許・資格',
        'licence_year5' => '免許・資格の日付(年)',
        'licence_month5' => '免許・資格の日付(月)',
        'licence_body5' => '免許・資格',
        'licence_year6' => '免許・資格の日付(年)',
        'licence_month6' => '免許・資格の日付(月)',
        'licence_body6' => '免許・資格',

        'work_history_company1' => '会社名', 
        'work_history_period1' => '期間', 
        'work_history_content1' => '事業内容', 
        'work_history_capital1' => '資本金', 
        'work_history_employees1' => '従業員数',
        'work_history_business1' => 'プロジェクト/業務名', 
        'work_history_business_period1' => '期間',  
        'work_history_body1' => 'プロジェクト/業務内容', 
        'work_history_company2' => '会社名', 
        'work_history_period2' => '期間', 
        'work_history_content2' => '事業内容', 
        'work_history_capital2' => '資本金', 
        'work_history_employees2' => '従業員数',
        'work_history_business2' => 'プロジェクト/業務名', 
        'work_history_business_period2' => '期間',  
        'work_history_body2' => 'プロジェクト/業務内容', 
        'work_history_company3' => '会社名', 
        'work_history_period3' => '期間', 
        'work_history_content3' => '事業内容', 
        'work_history_capital3' => '資本金', 
        'work_history_employees3' => '従業員数',
        'work_history_business3' => 'プロジェクト/業務名', 
        'work_history_business_period3' => '期間',  
        'work_history_body3' => 'プロジェクト/業務内容', 
        'work_history_company4' => '会社名', 
        'work_history_period4' => '期間', 
        'work_history_content4' => '事業内容', 
        'work_history_capital4' => '資本金', 
        'work_history_employees4' => '従業員数',
        'work_history_business4' => 'プロジェクト/業務名', 
        'work_history_business_period4' => '期間',  
        'work_history_body4' => 'プロジェクト/業務内容', 
        'work_history_company5' => '会社名', 
        'work_history_period5' => '期間', 
        'work_history_content5' => '事業内容', 
        'work_history_capital5' => '資本金', 
        'work_history_employees5' => '従業員数',
        'work_history_business5' => 'プロジェクト/業務名', 
        'work_history_business_period5' => '期間',  
        'work_history_body5' => 'プロジェクト/業務内容', 
    ],

];