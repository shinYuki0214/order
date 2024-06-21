<?php

return [
    'accepted' => ':attributeを承認してください。',
    'active_url' => ':attributeは有効なURLではありません。',
    'after' => ':attributeには、:date以降の日付を指定してください。',
    'after_or_equal' => ':attributeには、:date以降の日付を指定してください。',
    'alpha' => ':attributeはアルファベットのみがご利用できます。',
    'alpha_dash' => ':attributeはアルファベット、数字、ハイフン、アンダースコアがご利用できます。',
    'alpha_num' => ':attributeはアルファベットと数字がご利用できます。',
    'array' => ':attributeは配列でなくてはなりません。',
    'before' => ':attributeには、:date以前の日付を指定してください。',
    'before_or_equal' => ':attributeには、:date以前の日付を指定してください。',
    'between' => [
        'numeric' => ':attributeは、:minから:maxの間で指定してください。',
        'file' => ':attributeは、:min kBから、:max kBの間で指定してください。',
        'string' => ':attributeは、:min文字から、:max文字の間で指定してください。',
        'array' => ':attributeは、:min個から:max個の間で指定してください。',
    ],
    'boolean' => ':attributeは、trueかfalseを指定してください。',
    'confirmed' => ':attributeと、確認フィールドとが、一致していません。',
    'date' => ':attributeは有効な日付ではありません。',
    'date_equals' => ':attributeは:dateと同じ日付である必要があります。',
    'date_format' => ':attributeの形式は":format"と一致していません。',
    'different' => ':attributeと:otherには、異なるものを指定してください。',
    'digits' => ':attributeは:digits桁で指定してください。',
    'digits_between' => ':attributeは、:min桁から:max桁の間で指定してください。',
    'dimensions' => ':attributeの画像サイズが無効です。',
    'distinct' => ':attributeには、重複した値が含まれています。',
    'email' => ':attributeは有効なメールアドレス形式で指定してください。',
    'ends_with' => ':attributeは、:valuesのいずれかで終わらなければなりません。',
    'exists' => '選択された:attributeは正しくありません。',
    'file' => ':attributeはファイルでなければなりません。',
    'filled' => ':attributeは必須です。',
    'gt' => [
        'numeric' => ':attributeは:valueより大きくなければなりません。',
        'file' => ':attributeは:value kBより大きくなければなりません。',
        'string' => ':attributeは:value文字より大きくなければなりません。',
        'array' => ':attributeは:value個より多くなければなりません。',
    ],
    'gte' => [
        'numeric' => ':attributeは:value以上でなければなりません。',
        'file' => ':attributeは:value kB以上でなければなりません。',
        'string' => ':attributeは:value文字以上でなければなりません。',
        'array' => ':attributeは:value個以上でなければなりません。',
    ],
    'image' => ':attributeは画像でなければなりません。',
    'in' => '選択された:attributeは正しくありません。',
    'in_array' => ':attributeは:otherに存在しません。',
    'integer' => ':attributeは整数でなければなりません。',
    'ip' => ':attributeは有効なIPアドレスでなければなりません。',
    'ipv4' => ':attributeは有効なIPv4アドレスでなければなりません。',
    'ipv6' => ':attributeは有効なIPv6アドレスでなければなりません。',
    'json' => ':attributeは有効なJSON文字列でなければなりません。',
    'lt' => [
        'numeric' => ':attributeは:valueより小さくなければなりません。',
        'file' => ':attributeは:value kBより小さくなければなりません。',
        'string' => ':attributeは:value文字より小さくなければなりません。',
        'array' => ':attributeは:value個より少なくなければなりません。',
    ],
    'lte' => [
        'numeric' => ':attributeは:value以下でなければなりません。',
        'file' => ':attributeは:value kB以下でなければなりません。',
        'string' => ':attributeは:value文字以下でなければなりません。',
        'array' => ':attributeは:value個以下でなければなりません。',
    ],
    'max' => [
        'numeric' => ':attributeは:max以下でなければなりません。',
        'file' => ':attributeは:max kB以下でなければなりません。',
        'string' => ':attributeは:max文字以下でなければなりません。',
        'array' => ':attributeは:max個以下でなければなりません。',
    ],
    'mimes' => ':attributeは:valuesタイプのファイルでなければなりません。',
    'mimetypes' => ':attributeは:valuesタイプのファイルでなければなりません。',
    'min' => [
        'numeric' => ':attributeは:min以上でなければなりません。',
        'file' => ':attributeは:min kB以上でなければなりません。',
        'string' => ':attributeは:min文字以上でなければなりません。',
        'array' => ':attributeは:min個以上でなければなりません。',
    ],
    'multiple_of' => ':attributeは:valueの倍数でなければなりません。',
    'not_in' => '選択された:attributeは正しくありません。',
    'not_regex' => ':attributeの形式が正しくありません。',
    'numeric' => ':attributeは数値でなければなりません。',
    'password' => 'パスワードが正しくありません。',
    'present' => ':attributeが存在している必要があります。',
    'regex' => ':attributeの形式が正しくありません。',
    'required' => ':attributeは必須です。',
    'required_if' => ':otherが:valueの場合、:attributeは必須です。',
    'required_unless' => ':otherが:valueでない限り、:attributeは必須です。',
    'required_with' => ':valuesが存在する場合、:attributeは必須です。',
    'required_with_all' => ':valuesが全て存在する場合、:attributeは必須です。',
    'required_without' => ':valuesが存在しない場合、:attributeは必須です。',
    'required_without_all' => ':valuesが全て存在しない場合、:attributeは必須です。',
    'same' => ':attributeと:otherは一致していなければなりません。',
    'size' => [
        'numeric' => ':attributeは:sizeでなければなりません。',
        'file' => ':attributeは:size kBでなければなりません。',
        'string' => ':attributeは:size文字でなければなりません。',
        'array' => ':attributeは:size個でなければなりません。',
    ],
    'starts_with' => ':attributeは、:valuesのいずれかで始まる必要があります。',
    'string' => ':attributeは文字列でなければなりません。',
    'timezone' => ':attributeは有効なタイムゾーンでなければなりません。',
    'unique' => ':attributeは既に存在します。',
    'uploaded' => ':attributeのアップロードに失敗しました。',
    'url' => ':attributeは有効なURL形式で指定してください。',
    'uuid' => ':attributeは有効なUUIDでなければなりません。',
    'custom' => [
        'order_date' => [
            'after' => ':attributeには、明日以降を指定してください。',
        ],
    ],
    /*
    |--------------------------------------------------------------------------
    | カスタムバリデーション属性
    |--------------------------------------------------------------------------
    |
    | 次の言語行は、属性プレースホルダをよりフレンドリーに置き換えるために使用されます。
    | たとえば、「email」の代わりに「Eメールアドレス」を指定できます。
    |
    */

    'attributes' => [
        'product_name' => '商品名',
        'product_price' => '価格',
        'product_img' => '商品画像',
        'order_date' => '日付',
    ],
];