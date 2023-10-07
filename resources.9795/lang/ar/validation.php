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

    'accepted' => 'يجب قبول :attribute.',
'active_url' => ':attribute ليس رابط صحيح.',
'after' => ':attribute يجب أن يكون تاريخًا بعد :date.',
'after_or_equal' => ':attribute يجب أن يكون تاريخًا بعد أو يساوي :date.',
'alpha' => ':attribute يجب أن يحتوي على أحرف فقط.',
'alpha_dash' => ':attribute يجب أن يحتوي على أحرف وأرقام وشرطات وشرطات سفلية فقط.',
'alpha_num' => ':attribute يجب أن يحتوي على أحرف وأرقام فقط.',
'array' => ':attribute يجب أن يكون مصفوفة.',
'before' => ':attribute يجب أن يكون تاريخًا قبل :date.',
'before_or_equal' => ':attribute يجب أن يكون تاريخًا قبل أو يساوي :date.',
'between' => [
'numeric' => ':attribute يجب أن يكون بين :min و :max.',
'file' => ':attribute يجب أن يكون بين :min و :max كيلوبايت.',
'string' => ':attribute يجب أن يكون بين :min و :max حرفًا.',
'array' => ':attribute يجب أن يحتوي على بين :min و :max عنصرًا.',
],
'boolean' => ':attribute يجب أن يكون صحيحًا أو خطأ.',
'confirmed' => 'تأكيد :attribute غير متطابق.',
'date' => ':attribute ليس تاريخًا صحيحًا.',
'date_equals' => ':attribute يجب أن يكون تاريخًا مساويًا لـ :date.',
'date_format' => ':attribute لا يتوافق مع الشكل :format.',
'different' => ':attribute و :other يجب أن يكونا مختلفين.',
'digits' => ':attribute يجب أن يكون :digits أرقام.',
'digits_between' => ':attribute يجب أن يكون بين :min و :max أرقام.',
'dimensions' => ':attribute يحتوي على أبعاد صورة غير صالحة.',
'distinct' => 'حقل :attribute يحتوي على قيمة مكررة.',
'email' => ':attribute يجب أن يكون عنوان بريد إلكتروني صحيح.',
'ends_with' => ':attribute يجب أن ينتهي بأحد القيم التالية: :values.',
'exists' => ':attribute المحدد غير صحيح.',
'file' => ':attribute يجب أن يكون ملفًا.',
'filled' => 'حقل :attribute يجب أن يحتوي على قيمة.',
'gt' => [
'numeric' => ':attribute يجب أن يكون أكبر من :value.',
'file' => ':attribute يجب أن يكون أكبر من :value كيلوبايت.',
'string' => ':attribute يجب أن يكون أكبر من :value حرفًا.',
'array' => ':attribute يجب أن يحتوي على أكثر من :value عنصرًا.',
],
'gte' => [
'numeric' => ':attribute يجب أن يكون أكبر من أو يساوي :value.',
'file' => ':attribute يجب أن يكون أكبر من أو يساوي :value كيلوبايت.',
'string' => ':attribute يجب أن يكون أكبر من أو يساوي :value حرفًا.',
'array' => ':attribute يجب أن يحتوي على :value عنصرًا أو أكثر.',
],
'image' => ':attribute يجب أن تكون صورة.',
'in' => ':attribute المحدد غير صحيح.',
'in_array' => 'حقل :attribute غير موجود في :other.',
'integer' => ':attribute يجب أن يكون عددًا صحيحًا.',
'ip' => ':attribute يجب أن يكون عنوان IP صحيحًا.',
'ipv4' => ':attribute يجب أن يكون عنوان IPv4 صحيحًا.',
'ipv6' => ':attribute يجب أن يكون عنوان IPv6 صحيحًا.',
'json' => ':attribute يجب أن يكون سلسلة JSON صحيحة.',
'lt' => [
'numeric' => ':attribute يجب أن يكون أقل من :value.',
'file' => ':attribute يجب أن يكون أقل من :value كيلوبايت.',
'string' => ':attribute يجب أن يكون أقل من :value حرفًا.',
'array' => ':attribute يجب أن يحتوي على أقل من :value عنصرًا.',
],
'lte' => [
'numeric' => ':attribute يجب أن يكون أقل من أو يساوي :value.',
'file' => ':attribute يجب أن يكون أقل من أو يساوي :value كيلوبايت.',
'string' => ':attribute يجب أن يكون أقل من أو يساوي :value حرفًا.',
'array' => ':attribute يجب ألا يحتوي على أكثر من :value عنصرًا.',
],
'max' => [
'numeric' => ':attribute يجب ألا يكون أكبر من :max.',
'file' => ':attribute يجب ألا يكون أكبر من :max كيلوبايت.',
'string' => ':attribute يجب ألا يكون أكبر من :max حرفًا.',
'array' => ':attribute يجب ألا يحتوي على أكثر من :max عنصرًا.',
],
'mimes' => ':attribute يجب أن يكون ملفًا من النوع: :values.',
'mimetypes' => ':attribute يجب أن يكون ملفًا من النوع: :values.',
'min' => [
'numeric' => ':attribute يجب أن يكون على الأقل :min.',
'file' => ':attribute يجب أن يكون على الأقل :min كيلوبايت.',
'string' => ':attribute يجب أن يكون على الأقل :min حرفًا.',
'array' => ':attribute يجب أن يحتوي على الأقل :min عنصرًا.',
],
'multiple_of' => ':attribute يجب أن يكون مضاعفًا لـ :value.',
'not_in' => ':attribute المحدد غير صحيح.',
'not_regex' => 'صيغة :attribute غير صحيحة.',
'numeric' => ':attribute يجب أن يكون رقمًا.',
'password' => 'كلمة المرور غير صحيحة.',
'present' => 'حقل :attribute يجب أن يكون موجودًا.',
'regex' => 'صيغة :attribute غير صحيحة.',
'required' => 'حقل :attribute مطلوب.',
'required_if' => 'حقل :attribute مطلوب عندما :other يكون :value.',
'required_unless' => 'حقل :attribute مطلوب ما لم :other يكون في :values.',
'required_with' => 'حقل :attribute مطلوب عندما يكون حقل :values موجودًا.',
'required_with_all' => 'حقل :attribute مطلوب عندما تكون الحقول :values موجودة.',
'required_without' => 'حقل :attribute مطلوب عندما لا يكون حقل :values موجودًا.',
'required_without_all' => 'حقل :attribute مطلوب عندما لا يكون أي من الحقول :values موجودًا.',
'prohibited' => 'حقل :attribute ممنوع.',
'prohibited_if' => 'حقل :attribute ممنوع عندما :other يكون :value.',
'prohibited_unless' => 'حقل :attribute ممنوع ما لم :other يكون في :values.',
'same' => ':attribute و :other يجب أن يتطابقا.',
'size' => [
'numeric' => ':attribute يجب أن يكون :size.',
'file' => ':attribute يجب أن يكون :size كيلوبايت.',
'string' => ':attribute يجب أن يكون :size حرفًا.',
'array' => ':attribute يجب أن يحتوي على :size عنصرًا.',
],
'starts_with' => ':attribute يجب أن يبدأ بأحد القيم التالية: :values.',
'string' => ':attribute يجب أن يكون سلسلة نصية.',
'timezone' => ':attribute يجب أن يكون منطقة زمنية صحيحة.',
'unique' => ':attribute تم استخدامه بالفعل.',
'uploaded' => 'فشل تحميل :attribute.',
'url' => 'صيغة :attribute غير صحيحة.',
'uuid' => ':attribute يجب أن يكون UUID صحيح.',
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
