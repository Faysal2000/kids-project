<?php

return [

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

    'accepted' => ':attribute alanı kabul edilmelidir.',
    'accepted_if' => ':other :value olduğunda :attribute alanı kabul edilmelidir.',
    'active_url' => ':attribute alanı geçerli bir URL olmalıdır.',
    'after' => ':attribute alanı :date tarihinden sonra olmalıdır.',
    'after_or_equal' => ':attribute alanı :date tarihinden sonra veya aynı olmalıdır.',
    'alpha' => ':attribute alanı yalnızca harf içermelidir.',
    'alpha_dash' => ':attribute alanı yalnızca harf, rakam, tire ve alt tire içermelidir.',
    'alpha_num' => ':attribute alanı yalnızca harf ve rakam içermelidir.',
    'array' => ':attribute alanı bir dizi (array) olmalıdır.',
    'ascii' => ':attribute alanı yalnızca tek baytlık ASCII karakterleri içermelidir.',
    'before' => ':attribute alanı :date tarihinden önce olmalıdır.',
    'before_or_equal' => ':attribute alanı :date tarihinden önce veya aynı olmalıdır.',
    'between' => [
        'array' => ':attribute alanı :min ile :max arasında öğe içermelidir.',
        'file' => ':attribute dosyası :min ile :max kilobayt arasında olmalıdır.',
        'numeric' => ':attribute değeri :min ile :max arasında olmalıdır.',
        'string' => ':attribute metni :min ile :max karakter arasında olmalıdır.',
    ],
    'boolean' => ':attribute alanı doğru veya yanlış olmalıdır.',
    'can' => ':attribute alanı yetkisiz bir değer içeriyor.',
    'confirmed' => ':attribute alanı doğrulaması eşleşmiyor.',
    'current_password' => 'Şifre yanlış.',
    'date' => ':attribute alanı geçerli bir tarih olmalıdır.',
    'date_equals' => ':attribute alanı :date tarihine eşit olmalıdır.',
    'date_format' => ':attribute alanı şu formatla eşleşmelidir: :format.',
    'decimal' => ':attribute alanı :decimal ondalık basamak içermelidir.',
    'declined' => ':attribute alanı reddedilmelidir.',
    'declined_if' => ':other :value olduğunda :attribute alanı reddedilmelidir.',
    'different' => ':attribute ve :other alanları farklı olmalıdır.',
    'digits' => ':attribute alanı :digits basamak olmalıdır.',
    'digits_between' => ':attribute alanı :min ile :max basamak arasında olmalıdır.',
    'dimensions' => ':attribute görseli geçersiz boyutlara sahip.',
    'distinct' => ':attribute alanı yinelenen bir değere sahip.',
    'doesnt_end_with' => ':attribute alanı şu değerlerden biriyle bitmemelidir: :values.',
    'doesnt_start_with' => ':attribute alanı şu değerlerden biriyle başlamamalıdır: :values.',
    'email' => ':attribute alanı geçerli bir e-posta adresi olmalıdır.',
    'ends_with' => ':attribute şu değerlerden biriyle bitmelidir: :values.',
    'enum' => 'Seçilen :attribute geçerli değil.',
    'exists' => 'Seçilen :attribute geçerli değil.',
    'extensions' => ':attribute alanı şu uzantılardan birine sahip olmalıdır: :values.',
    'file' => ':attribute bir dosya olmalıdır.',
    'filled' => ':attribute alanı doldurulmalıdır.',
    'gt' => [
        'array' => ':attribute alanı :value öğeden fazla olmalıdır.',
        'file' => ':attribute dosyası :value kilobayttan büyük olmalıdır.',
        'numeric' => ':attribute alanı :value değerinden büyük olmalıdır.',
        'string' => ':attribute alanı :value karakterden uzun olmalıdır.',
    ],
    'gte' => [
        'array' => ':attribute alanı en az :value öğe içermelidir.',
        'file' => ':attribute dosyası :value kilobayt veya daha büyük olmalıdır.',
        'numeric' => ':attribute alanı :value veya daha büyük olmalıdır.',
        'string' => ':attribute alanı :value karakter veya daha uzun olmalıdır.',
    ],
    'hex_color' => ':attribute alanı geçerli bir onaltılık (hex) renk olmalıdır.',
    'image' => ':attribute alanı bir resim olmalıdır.',
    'in' => 'Seçilen :attribute geçersiz.',
    'in_array' => ':attribute alanı :other içinde mevcut olmalıdır.',
    'integer' => ':attribute alanı bir tam sayı olmalıdır.',
    'ip' => ':attribute alanı geçerli bir IP adresi olmalıdır.',
    'ipv4' => ':attribute alanı geçerli bir IPv4 adresi olmalıdır.',
    'ipv6' => ':attribute alanı geçerli bir IPv6 adresi olmalıdır.',
    'json' => ':attribute alanı geçerli bir JSON dizesi olmalıdır.',
    'lowercase' => ':attribute alanı küçük harf olmalıdır.',
    'lt' => [
        'array' => ':attribute alanı :value öğeden az olmalıdır.',
        'file' => ':attribute dosyası :value kilobayttan küçük olmalıdır.',
        'numeric' => ':attribute alanı :value değerinden küçük olmalıdır.',
        'string' => ':attribute alanı :value karakterden kısa olmalıdır.',
    ],
    'lte' => [
        'array' => ':attribute alanı :value öğeden fazla olmamalıdır.',
        'file' => ':attribute dosyası :value kilobayt veya daha küçük olmalıdır.',
        'numeric' => ':attribute alanı :value veya daha küçük olmalıdır.',
        'string' => ':attribute alanı :value karakter veya daha kısa olmalıdır.',
    ],
    'mac_address' => ':attribute alanı geçerli bir MAC adresi olmalıdır.',
    'max' => [
        'array' => ':attribute alanı :max öğeden fazla olamaz.',
        'file' => ':attribute dosyası :max kilobayttan büyük olamaz.',
        'numeric' => ':attribute alanı :max değerinden büyük olamaz.',
        'string' => ':attribute alanı :max karakterden uzun olamaz.',
    ],
    'max_digits' => ':attribute alanı en fazla :max basamak içerebilir.',
    'mimes' => ':attribute dosyası şu türde olmalıdır: :values.',
    'mimetypes' => ':attribute dosyası şu türde olmalıdır: :values.',
    'min' => [
        'array' => ':attribute alanı en az :min öğe içermelidir.',
        'file' => ':attribute dosyası en az :min kilobayt olmalıdır.',
        'numeric' => ':attribute alanı en az :min olmalıdır.',
        'string' => ':attribute alanı en az :min karakter olmalıdır.',
    ],
    'min_digits' => ':attribute alanı en az :min basamak içermelidir.',
    'missing' => ':attribute alanı eksik olmalıdır.',
    'missing_if' => ':other :value olduğunda :attribute alanı eksik olmalıdır.',
    'missing_unless' => ':other :value değilse :attribute alanı eksik olmalıdır.',
    'missing_with' => ':values mevcutsa :attribute alanı eksik olmalıdır.',
    'missing_with_all' => ':values mevcutsa :attribute alanı eksik olmalıdır.',
    'multiple_of' => ':attribute alanı :value katı olmalıdır.',
    'not_in' => 'Seçilen :attribute geçersiz.',
    'not_regex' => ':attribute biçimi geçersiz.',
    'numeric' => ':attribute alanı sayı olmalıdır.',
    'password' => [
        'letters' => ':attribute alanı en az bir harf içermelidir.',
        'mixed' => ':attribute alanı en az bir büyük ve bir küçük harf içermelidir.',
        'numbers' => ':attribute alanı en az bir rakam içermelidir.',
        'symbols' => ':attribute alanı en az bir sembol içermelidir.',
        'uncompromised' => 'Belirtilen :attribute bir veri ihlalinde yer almış. Lütfen farklı bir :attribute seçin.',
    ],
    'present' => ':attribute alanı mevcut olmalıdır.',
    'present_if' => ':other :value olduğunda :attribute alanı mevcut olmalıdır.',
    'present_unless' => ':other :value değilse :attribute alanı mevcut olmalıdır.',
    'present_with' => ':values mevcutsa :attribute alanı mevcut olmalıdır.',
    'present_with_all' => ':values mevcutsa :attribute alanı mevcut olmalıdır.',
    'prohibited' => ':attribute alanı yasaktır.',
    'prohibited_if' => ':other :value olduğunda :attribute alanı yasaktır.',
    'prohibited_unless' => ':other şu değerlerden biri olmadıkça :attribute alanı yasaktır: :values.',
    'prohibits' => ':attribute alanı :other alanının mevcut olmasını engeller.',
    'regex' => ':attribute biçimi geçersiz.',
    'required' => ':attribute alanı zorunludur.',
    'required_array_keys' => ':attribute alanı şu anahtarları içermelidir: :values.',
    'required_if' => ':other :value olduğunda :attribute alanı gereklidir.',
    'required_if_accepted' => ':other kabul edildiğinde :attribute alanı gereklidir.',
    'required_unless' => ':other şu değerlerden biri olmadıkça :attribute alanı gereklidir: :values.',
    'required_with' => ':values mevcutsa :attribute alanı gereklidir.',
    'required_with_all' => ':values mevcutsa :attribute alanı gereklidir.',
    'required_without' => ':values mevcut değilse :attribute alanı gereklidir.',
    'required_without_all' => 'Hiçbiri :values mevcut değilse :attribute alanı gereklidir.',
    'same' => ':attribute ve :other eşleşmelidir.',
    'size' => [
        'array' => ':attribute alanı :size öğe içermelidir.',
        'file' => ':attribute dosyası :size kilobayt olmalıdır.',
        'numeric' => ':attribute :size olmalıdır.',
        'string' => ':attribute :size karakter olmalıdır.',
    ],
    'starts_with' => ':attribute şu ifadelerden biriyle başlamalıdır: :values.',
    'string' => ':attribute alanı metin olmalıdır.',
    'timezone' => ':attribute geçerli bir saat dilimi olmalıdır.',
    'unique' => ':attribute zaten alınmış.',
    'uploaded' => ':attribute yüklenemedi.',
    'uppercase' => ':attribute büyük harf olmalıdır.',
    'url' => ':attribute geçerli bir URL olmalıdır.',
    'ulid' => ':attribute geçerli bir ULID olmalıdır.',
    'uuid' => ':attribute geçerli bir UUID olmalıdır.',


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

    'attributes' => [],

];
