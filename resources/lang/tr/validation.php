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

    'accepted' => ':attribute kabul edilmelidir.',
    'accepted_if' => ':attribute, :other :value olduğunda kabul edilmelidir.',
    'active_url' => ':attribute geçerli bir URL değil.',
    'after' => ':attribute, :date tarihinden sonraki bir tarih olmalıdır.',
    'after_or_equal' => ':attribute, :date\'den sonra veya buna eşit bir tarih olmalıdır.',
     'alpha' => ':attribute yalnızca harf içermelidir.',
     'alpha_dash' => ':attribute yalnızca harf, sayı, tire ve alt çizgi içermelidir.',
     'alpha_num' => ':attribute yalnızca harf ve rakamlardan oluşmalıdır.',
     'array' => ':attribute bir dizi olmalıdır.',
     'before' => ':attribute :date tarihinden önceki bir tarih olmalıdır.',
     'before_or_equal' => ':attribute, :date tarihinden önce veya buna eşit bir tarih olmalıdır.',
    'between' => [
        'numeric' => ':attribute :min ile :max arasında olmalıdır.',
        'file' => ':attribute :min ile :max kilobayt arasında olmalıdır.',
        'string' => ':attribute :min ve :max karakterleri arasında olmalıdır.',
        'array' => ':attribute :min ve :max öğeleri arasında olmalıdır.',
    ],
    'boolean' => ':attribute alanı doğru veya yanlış olmalıdır.',
    'confirmed' => ':attribute onayı eşleşmiyor.',
    'current_password' => 'Şifre yanlış.',
    'date' => ':attribute geçerli bir tarih değil.',
    'date_equals' => ':attribute, :date değerine eşit bir tarih olmalıdır.',
    'date_format' => ':attribute, :format biçimiyle eşleşmiyor.',
    'declined' => ':attribute reddedilmeli.',
    'declined_if' => ':attribute, :other :value olduğunda reddedilmelidir.',
    'different' => ':attribute ve :other farklı olmalıdır.',
    'digits' => ':attribute :digits basamak olmalıdır.',
    'digits_between' => ':attribute :min ve :max basamaklar arasında olmalıdır.',
    'dimensions' => ':attribute geçersiz resim boyutlarına sahip.',
    'distinct' => ':attribute alanında yinelenen bir değer var.',
    'email' => ':attribute geçerli bir e-posta adresi olmalıdır.',
    'ends_with' => ':attribute aşağıdakilerden biriyle bitmelidir: :values.',
    'enum' => 'Seçilen :attribute geçersiz.',
    'exists' => 'Seçilen :attribute geçersiz.',
    'file' => ':attribute bir dosya olmalıdır.',
    'filled' => ':attribute alanının bir değeri olmalıdır.',
    'gt' => [
        'numeric' => ':attribute, :value değerinden büyük olmalıdır.',
        'file' => ':attribute, :value kilobayttan büyük olmalıdır.',
        'string' => ':attribute, :value karakterlerinden büyük olmalıdır.',
        'array' => ':attribute, :value öğelerinden daha fazlasına sahip olmalıdır.',
    ],
    'gte' => [
        'numeric' => ':attribute, :value değerinden büyük veya ona eşit olmalıdır.',
        'file' => ':attribute, :value kilobayttan büyük veya ona eşit olmalıdır.',
        'string' => ':attribute, :value karakterlerinden büyük veya ona eşit olmalıdır.',
        'array' => ':attribute :value öğelerine veya daha fazlasına sahip olmalıdır.',
    ],
    'image' => ':attribute bir resim olmalıdır.',
    'in' => 'Seçilen :attribute geçersiz.',
    'in_array' => ':attribute alanı :other içinde mevcut değil.',
    'integer' => ':attribute bir tamsayı olmalıdır.',
    'ip' => ':attribute geçerli bir IP adresi olmalıdır.',
    'ipv4' => ':attribute geçerli bir IPv4 adresi olmalıdır.',
    'ipv6' => ':attribute geçerli bir IPv6 adresi olmalıdır.',
    'mac_address' => ':attribute geçerli bir MAC adresi olmalıdır.',
    'json' => ':attribute geçerli bir JSON dizesi olmalıdır.',
    'lt' => [
        'numeric' => ':attribute :value değerinden küçük olmalıdır.',
        'file' => ':attribute :value kilobayttan küçük olmalıdır.',
        'string' => ':attribute, :value karakterlerinden daha az olmalıdır.',
        'array' => ':attribute, :value öğelerinden daha azına sahip olmalıdır.',
    ],
    'lte' => [
        'numeric' => 'The :attribute must be less than or equal to :value.',
        'file' => 'The :attribute must be less than or equal to :value kilobytes.',
        'string' => 'The :attribute must be less than or equal to :value characters.',
        'array' => 'The :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'The :attribute must not be greater than :max.',
        'file' => 'The :attribute must not be greater than :max kilobytes.',
        'string' => 'The :attribute must not be greater than :max characters.',
        'array' => 'The :attribute must not have more than :max items.',
    ],
    'mimes' => 'The :attribute must be a file of type: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => 'The :attribute must be at least :min.',
        'file' => 'The :attribute must be at least :min kilobytes.',
        'string' => 'The :attribute must be at least :min characters.',
        'array' => 'The :attribute must have at least :min items.',
    ],
    'multiple_of' => ':attribute, :value\'nun katı olmalıdır.',
    'not_in' => 'Seçilen :attribute geçersiz.',
    'not_regex' => ':attribute biçimi geçersiz.',
    'numeric' => ':attribute bir sayı olmalıdır.',
    'password' => 'Parola yanlış.',
    'present' => ':attribute alanı mevcut olmalıdır.',
    'prohibited' => ':attribute alanı yasaktır.',
    'prohibited_if' => ':attribute alanı :other :value olduğunda yasaktır.',
    'prohibited_unless' => ':attribute alanı, :other :values içinde olmadığı sürece yasaktır.',
    'prohibits' => ':attribute alanı :other\'ın mevcut olmasını yasaklar.',
    'regex' => ':attribute biçimi geçersiz.',
    'required' => ':attribute alanı zorunludur.',
    'required_if' => ':attribute alanı, :diğer :değer olduğunda gereklidir.',
    'required_unless' => ':attribute alanı, :other :values içinde olmadığı sürece gereklidir.',
    'required_with' => ':değerler mevcut olduğunda :attribute alanı gereklidir.',
    'required_with_all' => ':attribute alanı :values mevcut olduğunda gereklidir.',
    'required_without' => ':attribute alanı :values olmadığında gereklidir.',
    'required_without_all' => ':attribute alanı, :değerlerden hiçbiri mevcut olmadığında gereklidir.',
    'same' => ':attribute ve :other eşleşmelidir.',
    'size' => [
        'numeric' => ':attribute :size olmalıdır.',
        'file' => ':attribute :size kilobayt olmalıdır.',
        'string' => ':attribute :size karakter olmalıdır.',
        'array' => ':attribute :size öğeleri içermelidir.',
    ],
    'starts_with' => ':attribute aşağıdakilerden biriyle başlamalıdır: :values.',
    'string' => ':attribute bir string olmalıdır.',
    'timezone' => ':attribute geçerli bir saat dilimi olmalıdır.',
    'unique' => ':attribute zaten alınmış.',
    'uploaded' => ':attribute yüklenemedi.',
    'url' => ':attribute geçerli bir URL olmalıdır.',
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
            'rule-name' => 'özel mesaj',
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
