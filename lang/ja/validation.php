<?php

/*
|--------------------------------------------------------------------------
| Validation Language Lines
|--------------------------------------------------------------------------
|
| The following language lines contain the default error messages used by
| the validator class. Some of these rules have multiple versions such
| as the size rules. Feel free to tweak each of these messages here.
|
*/

return [

    'accepted' => ':attributeを承認してください。',
    'accepted_if' => ':otherが:valueの場合、:attributeを承認してください。',
    'active_url' => ':attributeは有効なURLではありません。',
    'after' => ':attributeには:dateより後の日付を指定してください。',
    'after_or_equal' => ':attributeには:date以降の日付を指定してください。',
    'alpha' => ':attributeはアルファベットのみ使用できます。',
    'alpha_dash' => ':attributeはアルファベットとダッシュ(-)及び下線(_)が使用できます。',
    'alpha_num' => ':attributeはアルファベット数字が使用できます。',
    'array' => ':attributeは配列を指定してください。',
    'before' => ':attributeには:dateより前の日付を指定してください。',
    'before_or_equal' => ':attributeには:date以前の日付を指定してください。',
    'between' => [
        'array' => ':attributeは:min個から:max個の間で指定してください。',
        'file' => ':attributeは:min。から:maxキロバイトの間で指定してください。',
        'numeric' => ':attributeは:minから:maxの間で指定してください。',
        'string' => ':attributeは:min文字から:max文字の間で指定してください。',
    ],
    'boolean' => ':attributeにはtrueかfalseを指定してください。',
    'confirmed' => ':attributeと確認フィールドが一致していません。',
    'current_password' => 'パスワードが正しくありません。',
    'date' => ':attributeには有効な日付を指定してください。',
    'date_equals' => ':attributeには:dateと同じ日付を指定してください。',
    'date_format' => ':attributeは:formatの形式と一致しません。',
    'decimal' => ':attributeは小数点以下:decimal桁を指定してください。',
    'declined' => ':attributeを拒否してください。',
    'declined_if' => ':otherが:valueの場合、:attributeを拒否してください。',
    'different' => ':attributeと:otherには、異なる値を指定してください。',
    'digits' => ':attributeは:digits桁で指定してください。',
    'digits_between' => ':attributeは:min桁から:max桁の間で指定してください。',
    'dimensions' => ':attributeの画像サイズが正しくありません。',
    'distinct' => ':attributeには重複した値が含まれています。',
    'doesnt_start_with' => ':attributeを:valuesで開始することはできません。',
    'doesnt_end_with' => ':attributeを:valuesで終了することはできません。',
    'email' => ':attributeには、有効なメールアドレス形式を指定してください。',
    'ends_with' => ':attributeには、:valuesのいずれかで終わる値を指定してください。',
    'enum' => '選択された:attributeは正しくありません。',
    'exists' => '選択された:attributeは正しくありません。',
    'file' => ':attributeにはファイルを指定してください。',
    'filled' => ':attributeに値を指定してください。',
    'gt' => [
        'array' => ':attributeは:value項目より多くしてください。',
        'file' => ':attributeは:valueキロバイトより大きくしてください。',
        'numeric' => ':attributeは:valueより大きくしてください。',
        'string' => ':attributeは:value文字より大きくしてください。',
    ],
    'gte' => [
        'array' => ':attributeは:value項目以上にしてください。',
        'file' => ':attributeは:valueキロバイト以上にしてください。',
        'numeric' => ':attributeは:value以上にしてください。',
        'string' => ':attributeは:value文字以上にしてください。',
    ],
    'image' => ':attributeには画像ファイルを指定してください。',
    'in' => '選択された:attributeは正しくありません。',
    'in_array' => ':attributeには:otherの値を指定してください。',
    'integer' => ':attributeには整数を指定してください。',
    'ip' => ':attributeには、有効なIPアドレスを指定してください。',
    'ipv4' => ':attributeには、有効なIPv4アドレスを指定してください。',
    'ipv6' => ':attributeには、有効なIPv6アドレスを指定してください。',
    'json' => ':attributeには、有効なJSON文字列を指定してください。',
    'lowercase' => ':attributeは小文字にする必要があります。',
    'lt' => [
        'array' => ':attributeは:value項目より少なくしてください。',
        'file' => ':attributeは:valueキロバイトより小さくしてください。',
        'numeric' => ':attributeは:valueより小さくしてください。',
        'string' => ':attributeは:value文字より小さくしてください。',
    ],
    'lte' => [
        'array' => ':attributeは:value項目以下にしてください。',
        'file' => ':attributeは:valueキロバイト以下にしてください。',
        'numeric' => ':attributeは:value以下にしてください。',
        'string' => ':attributeは:value文字以下にしてください。',
    ],
    'mac_address' => ':attributeには、有効なMACアドレスを指定してください。',
    'max' => [
        'array' => ':attributeは:max個以下指定してください。',
        'file' => ':attributeは:maxキロバイト以下のサイズにしてください。',
        'numeric' => ':attributeには:max以下の数字を指定してください。',
        'string' => ':attributeは:max文字以下で指定してください。',
    ],
    'max_digits' => ':attributeは:max桁以下にしてください。',
    'mimes' => ':attributeには、:valuesタイプのファイルを指定してください。',
    'mimetypes' => ':attributeには、:valuesタイプのファイルを指定してください。',
    'min' => [
        'array' => ':attributeは:min個以上指定してください。',
        'file' => ':attributeは:minキロバイト以上のサイズにしてください。',
        'numeric' => ':attributeには:min以上の数字を指定してください。',
        'string' => ':attributeは:min文字以上で指定してください。',
    ],
    'min_digits' => ':attributeは:min桁以上にしてください。',
    'multiple_of' => ':attributeは:valueの倍数にしてください。',
    'not_in' => '選択された:attributeは正しくありません。',
    'not_regex' => ':attributeの形式が正しくありません。',
    'numeric' => ':attributeには、数字を指定してください。',
    'password' => [
        'letters' => ':attributeは1文字以上の文字を含める必要があります。',
        'mixed' => ':attributeは1文字以上の大文字と小文字を含める必要があります。',
        'numbers' => ':attributeは1文字以上の数字を含める必要があります。',
        'symbols' => ':attributeは1文字以上の記号を含める必要があります。',
        'uncompromised' => '指定した:attributeは漏洩したことがあるパスワードです。別の:attributeを選択してください。',
    ],
    'present' => ':attributeが存在していません。',
    'prohibited' => ':attributeは許可されていません。',
    'prohibited_if' => ':otherが:valueの場合、:attributeは許可されていません。',
    'prohibited_unless' => ':otherが:valuesにない場合、:attributeは許可されていません。',
    'prohibits' => ':attributeは:otherの存在を禁止しています。',
    'regex' => ':attributeの形式が正しくありません。',
    'required' => ':attributeは必須です。',
    'required_array_keys' => ':attributeには、:valuesの項目を指定してください。',
    'required_if' => ':otherが:valueの場合、:attributeは必須です。',
    'required_unless' => ':otherが:valuesにない場合、:attributeは必須です。',
    'required_with' => ':valuesが指定されている場合、:attributeは必須です。',
    'required_with_all' => ':valuesが指定されている場合、:attributeは必須です。',
    'required_without' => ':valuesが指定されていない場合、:attributeは必須です。',
    'required_without_all' => ':valuesがどれも指定されていない場合、:attributeは必須です。',
    'same' => ':attributeと:otherには、同じ値を指定してください。',
    'size' => [
        'array' => ':attributeは:size個指定してください。',
        'file' => ':attributeのサイズは:sizeキロバイトにしてください。',
        'numeric' => ':attributeには:sizeを指定してください。',
        'string' => ':attributeは:size文字で指定してください。',
    ],
    'starts_with' => ':attributeには、:valuesのいずれかで始まる値を指定してください。',
    'string' => ':attributeには、文字列を指定してください。',
    'timezone' => ':attributeには、有効なタイムゾーンを指定してください。',
    'unique' => ':attributeは既に使用されています。',
    'uploaded' => ':attributeのアップロードに失敗しました。',
    'uppercase' => ':attributeは大文字にする必要があります。',
    'url' => ':attributeの形式が正しくありません。',
    'ulid' => ':attributeには、有効なULIDを指定してください。',
    'uuid' => ':attributeには、有効なUUIDを指定してください。',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'name' => '名前',
        'username' => 'ユーザー名',
        'email' => 'メールアドレス',
        'first_name' => '名',
        'last_name' => '姓',
        'password' => 'パスワード',
        'password_confirmation' => '確認用パスワード',
        'city' => '市区町村',
        'country' => '国',
        'address' => '住所',
        'phone' => '電話番号',
        'mobile' => '携帯電話番号',
        'age' => '年齢',
        'sex' => '性別',
        'gender' => '性別',
        'day' => '日',
        'month' => '月',
        'year' => '年',
        'hour' => '時',
        'minute' => '分',
        'second' => '秒',
        'title' => 'タイトル',
        'content' => '内容',
        'description' => '説明',
        'excerpt' => '抜粋',
        'date' => '日付',
        'time' => '時間',
        'available' => '有効',
        'size' => 'サイズ',
    ],

];
