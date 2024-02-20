<?php

/*
 * Fresns (https://fresns.org)
 * Copyright (C) 2021-Present Jevan Tang
 * Released under the Apache-2.0 License.
 */

return [
    'accepted' => ':Attribute баталсан байх шаардлагатай.',
    'accepted_if' => 'The :attribute must be accepted when :other is :value.',
    'active_url' => ':Attribute талбарт зөв URL хаяг оруулна уу.',
    'after' => ':Attribute талбарт :date-с хойш огноо оруулна уу.',
    'after_or_equal' => ':Attribute талбарт :date эсвэл түүнээс хойш огноо оруулна уу.',
    'alpha' => ':Attribute талбарт латин үсэг оруулна уу.',
    'alpha_dash' => ':Attribute талбарт латин үсэг, тоо болон зураас оруулах боломжтой.',
    'alpha_num' => ':Attribute талбарт латин үсэг болон тоо оруулах боломжтой.',
    'array' => ':Attribute талбар массив байх шаардлагатай.',
    'before' => ':Attribute талбарт :date-с өмнөх огноо оруулна уу.',
    'before_or_equal' => ':attribute талбарт :date эсвэл түүнээс өмнөх огноо оруулна уу.',
    'between' => [
        'array' => ':Attribute массивт :min-:max элемэнт байх шаардлагатай.',
        'file' => ':Attribute талбарт :min-:max килобайт хэмжээтэй файл оруулна уу.',
        'numeric' => ':Attribute талбарт :min-:max хооронд тоо оруулна уу.',
        'string' => ':Attribute талбарт :min-:max урттай текст оруулна уу.',
    ],
    'boolean' => ':Attribute талбарын утга үнэн эсвэл худал байх шаардлагатай.',
    'confirmed' => ':Attribute талбарын баталагажуулалт тохирохгүй байна.',
    'current_password' => 'The password is incorrect.',
    'date' => ':Attribute талбарт оруулсан огноо буруу байна.',
    'date_equals' => ':attribute нь :date онтой тэнцүү байх естой.',
    'date_format' => ':Attribute талбарт :format хэлбэртэй огноо оруулна уу.',
    'declined' => 'The :attribute must be declined.',
    'declined_if' => 'The :attribute must be declined when :other is :value.',
    'different' => ':Attribute талбарт :other -с өөр утга оруулах шаардлагатай.',
    'digits' => ':Attribute талбарт дараах цифрүүдээс оруулах боломжтой. :digits.',
    'digits_between' => ':Attribute талбарт :min-:max хоорондох цифр оруулах боломжтой.',
    'dimensions' => ':Attribute талбарийн зургийн хэмжээс буруу байна.',
    'distinct' => ':Attribute талбарт ялгаатай утга оруулах шаардлагатай.',
    'email' => ':Attribute талбарт зөв и-мэйл хаяг оруулах шаардлагатай.',
    'ends_with' => ':attribute дараах аль нэгийг нь дуусгах естой: :values.',
    'enum' => 'The selected :attribute is invalid.',
    'exists' => 'Сонгогдсон :attribute буруу байна.',
    'file' => ':Attribute талбарт файл оруулах шаардлагатай.',
    'filled' => ':Attribute талбар шаардлагатай.',
    'gt' => [
        'array' => 'The :attribute must have more than :value items.',
        'file' => 'The :attribute must be greater than :value kilobytes.',
        'numeric' => 'The :attribute must be greater than :value.',
        'string' => 'The :attribute must be greater than :value characters.',
    ],
    'gte' => [
        'array' => 'The :attribute must have :value items or more.',
        'file' => 'The :attribute must be greater than or equal :value kilobytes.',
        'numeric' => 'The :attribute must be greater than or equal :value.',
        'string' => 'The :attribute must be greater than or equal :value characters.',
    ],
    'image' => ':Attribute талбарт зураг оруулна уу.',
    'in' => 'Сонгогдсон :attribute буруу байна.',
    'in_array' => ':Attribute талбарт оруулсан утга :other -д байхгүй байна.',
    'integer' => ':Attribute талбарт бүхэл тоо оруулах шаардлагатай.',
    'ip' => ':Attribute талбарт зөв IP хаяг оруулах шаардлагатай.',
    'ipv4' => ':attribute нь хүчинтэй ЦТ 4-р хаяг байх естой.',
    'ipv6' => ':attribute нь хүчин төгөлдөр Атв6 хаяг байх естой.',
    'json' => ':Attribute талбарт зөв JSON тэмдэгт мөр оруулах шаардлагатай.',
    'lt' => [
        'array' => 'The :attribute must have less than :value items.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'numeric' => 'The :attribute must be less than :value.',
        'string' => 'The :attribute must be less than :value characters.',
    ],
    'lte' => [
        'array' => 'The :attribute must not have more than :value items.',
        'file' => 'The :attribute must be less than or equal :value kilobytes.',
        'numeric' => 'The :attribute must be less than or equal :value.',
        'string' => 'The :attribute must be less than or equal :value characters.',
    ],
    'mac_address' => 'The :attribute must be a valid MAC address.',
    'max' => [
        'array' => ':Attribute талбарт хамгийн ихдээ :max элемэнт оруулах боломжтой.',
        'file' => ':Attribute талбарт :max килобайтаас бага хэмжээтэй файл оруулна уу.',
        'numeric' => ':Attribute талбарт :max буюу түүнээс бага утга оруулна уу.',
        'string' => ':Attribute талбарт :max-с бага урттай текст оруулна уу.',
    ],
    'mimes' => ':Attribute талбарт дараах төрлийн файл оруулах боломжтой: :values.',
    'mimetypes' => ':Attribute талбарт дараах төрлийн файл оруулах боломжтой: :values.',
    'min' => [
        'array' => ':Attribute талбарт хамгийн багадаа :min элемэнт оруулах боломжтой.',
        'file' => ':Attribute талбарт :min килобайтаас их хэмжээтэй файл оруулна уу.',
        'numeric' => ':Attribute талбарт :min буюу түүнээс их тоо оруулна уу.',
        'string' => ':Attribute талбарт :min буюу түүнээс их үсэг бүхий текст оруулна уу.',
    ],
    'multiple_of' => ':attribute нь олон байх естой :value',
    'not_in' => 'Буруу :attribute сонгогдсон байна.',
    'not_regex' => ':attribute хэлбэр нь хүчин төгөлдөр бус байна.',
    'numeric' => ':Attribute талбарт тоон утга оруулна уу.',
    'password' => 'Нууц үг буруу.',
    'present' => ':Attribute талбар байх шаардлагатай.',
    'prohibited' => ':attribute талбар нь хориглоно.',
    'prohibited_if' => ':other нь :value үед :attribute талбар нь хориглоно.',
    'prohibited_unless' => ':attribute салбарт бол хориглоно :other нь :values.',
    'prohibits' => 'The :attribute field prohibits :other from being present.',
    'regex' => ':Attribute талбарт оруулсан утга буруу байна.',
    'required' => ':Attribute талбар шаардлагатай.',
    'required_array_keys' => 'The :attribute field must contain entries for: :values.',
    'required_if' => 'Хэрэв :other :value бол :attribute табларт утга оруулах шаардлагатай.',
    'required_unless' => ':other :values дотор байхгүй бол :attribute талбарт утга оруулах шаардлагатай.',
    'required_with' => ':values утгуудийн аль нэг байвал :attribute талбар шаардлагатай.',
    'required_with_all' => ':values утгууд байвал :attribute талбар шаардлагатай.',
    'required_without' => ':attribute талбар нь :values байхгүй үед шаардлагатай байна.',
    'required_without_all' => 'Аль нь ч байхгүй үед :attribute талбар шаардлагатай байна :values байгаа.',
    'same' => ':attribute болон :other тохирох естой.',
    'size' => [
        'array' => ':Attribute :size элемэнттэй байх шаардлагатай.',
        'file' => ':Attribute :size килобайт хэмжээтэй байх шаардлагатай.',
        'numeric' => ':Attribute :size хэмжээтэй байх шаардлагатай.',
        'string' => ':Attribute :size тэмдэгтийн урттай байх шаардлагатай.',
    ],
    'starts_with' => ':attribute дараах аль нэг нь эхлэх естой: :values.',
    'string' => ':Attribute талбарт текст оруулна уу.',
    'timezone' => ':Attribute талбарт зөв цагийн бүс оруулна уу.',
    'unique' => 'Оруулсан :attribute аль хэдий нь бүртгэгдсэн байна.',
    'uploaded' => ':Attribute талбарт оруулсан файлыг хуулхад алдаа гарлаа.',
    'url' => ':Attribute зөв url хаяг оруулна уу.',
    'uuid' => ':attribute хүчин төгөлдөр хуучин төгөлдөр улс байх естой.',
    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
];
