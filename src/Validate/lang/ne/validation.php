<?php

/*
 * Fresns (https://fresns.org)
 * Copyright (C) 2021-Present Jevan Tang
 * Released under the Apache-2.0 License.
 */

return [
    'accepted'             => ':attribute स्वीकार गरिएको हुनुपर्छ।',
    'accepted_if'          => 'The :attribute must be accepted when :other is :value.',
    'active_url'           => ':attribute URL अमान्य छ।',
    'after'                => ':attribute को मिति :date भन्दा पछि हुनुपर्छ।',
    'after_or_equal'       => ':attribute मिति पछाडि वा बराबर मिति हुनुपर्दछ।',
    'alpha'                => ':attribute मा अक्षरहरु मात्र हुनसक्छ।',
    'alpha_dash'           => ':attribute मा अक्षर, संख्या र ड्यासहरू मात्र हुनसक्छ।',
    'alpha_num'            => ':attribute मा अक्षर र संख्याहरू मात्र हुनसक्छ।',
    'array'                => ':attribute एर्रे हुनुपर्छ।',
    'before'               => ':attribute को मिति :date भन्दा अघि हुनुपर्छ।',
    'before_or_equal'      => ':attribute मिति भन्दा अघि वा बराबर :date हुनुपर्दछ। ',
    'between'              => [
        'array'   => ':attribute आइटमको संख्या :min र :max को बिचमा हुनुपर्छ।',
        'file'    => ':attribute :min र :max किलोबाइट्स को बिचमा हुनुपर्छ।',
        'numeric' => ':attribute :min र :maxको बिचमा हुनुपर्छ।',
        'string'  => ':attribute :min र :max वर्णको बिचमा हुनुपर्छ।',
    ],
    'boolean'              => ':attribute ठिक अथवा बेठिक हुनुपर्छ।',
    'confirmed'            => ':attribute दाेहाेर्याइएकाे मिलेन।',
    'current_password'     => 'The password is incorrect.',
    'date'                 => ':attribute को मिति मिलेन।',
    'date_equals'          => ':attribute मिति बराबर :date हुनुपर्दछ।',
    'date_format'          => ':attribute को ढाँचा :format जस्तो हुनुपर्छ।',
    'declined'             => 'The :attribute must be declined.',
    'declined_if'          => 'The :attribute must be declined when :other is :value.',
    'different'            => ':attribute र :other फरक हुनुपर्छ।',
    'digits'               => ':attribute :digits अंकको हुनुपर्छ।',
    'digits_between'       => ':attribute :min देखी :max अंकको हुनुपर्छ।',
    'dimensions'           => ':attribute अमान्य छवि आयाम छ।',
    'distinct'             => ':attribute फिल्ड फिल्डको नक्कल मान छ',
    'email'                => ':attribute को इमेल ठेगाना मिलेन।',
    'ends_with'            => ':attribute निम्न मध्ये एकको साथ विशेषता अन्त हुनुपर्दछ :values',
    'enum'                 => 'The selected :attribute is invalid.',
    'exists'               => 'छानिएको :attribute अमान्य छ।',
    'file'                 => ':attribute एक फाईल हुनुपर्दछ।',
    'filled'               => ':attribute दिइएको हुनुपर्छ।',
    'gt'                   => [
        'array'   => ' :attribute :value आईटमहरू भन्दा बढि हुनुपर्दछ।',
        'file'    => ' :attribute :value क्यालोबाइट भन्दा बढि हुनुपर्दछ।',
        'numeric' => ' :attribute :value भन्दा बढि हुनुपर्दछ।',
        'string'  => ' :attribute :value क्यारेक्टर भन्दा बढि हुनुपर्दछ।',
    ],
    'gte'                  => [
        'array'   => ' :attribute :value आईटमहरू भन्दा बढि हुनुपर्दछ।',
        'file'    => ' :attribute :value क्यालोबाइट भन्दा बढि हुनुपर्दछ।',
        'numeric' => ' :attribute :value भन्दा बढि हुनुपर्दछ।',
        'string'  => ' :attribute :value क्यारेक्टर भन्दा बढि हुनुपर्दछ।',
    ],
    'image'                => ':attribute मा फोटो हुनुपर्छ।',
    'in'                   => 'छानिएको :attribute अमान्य छ।',
    'in_array'             => ':attribute क्षेत्र मा अवस्थित छैन :other',
    'integer'              => ':attribute पूर्ण संख्या हुनुपर्छ।',
    'ip'                   => ':attribute मा दिइएको मान्य IP ठेगाना हुनुपर्छ।',
    'ipv4'                 => ':attribute एक मान्य IPv4 ठेगाना हुनुपर्दछ.',
    'ipv6'                 => ':attribute एक मान्य IPv6 ठेगाना हुनुपर्दछ.',
    'json'                 => ':attribute मा दिइएको मान्य JSON स्ट्रिङ्ग हुनुपर्छ।',
    'lt'                   => [
        'array'   => ' :attribute :value आईटमहरू भन्दा बढि हुनुपर्दछ।',
        'file'    => ' :attribute :value क्यालोबाइट भन्दा बढि हुनुपर्दछ।',
        'numeric' => ' :attribute :value भन्दा बढि हुनुपर्दछ।',
        'string'  => ' :attribute :value क्यारेक्टर भन्दा बढि हुनुपर्दछ।',
    ],
    'lte'                  => [
        'array'   => ' :attribute :value आईटमहरू भन्दा बढि हुनुपर्दछ।',
        'file'    => ' :attribute :value क्यालोबाइट भन्दा बढि हुनुपर्दछ।',
        'numeric' => ' :attribute :value भन्दा बढि हुनुपर्दछ।',
        'string'  => ' :attribute :value क्यारेक्टर भन्दा बढि हुनुपर्दछ।',
    ],
    'mac_address'          => 'The :attribute must be a valid MAC address.',
    'max'                  => [
        'array'   => ' :attribute मा :max आईटमहरू भन्दा बढि हुनुपर्दछ।',
        'file'    => ' :attribute :max क्यालोबाइट भन्दा बढि हुनुपर्दछ।',
        'numeric' => ' :attribute :max भन्दा बढि हुनुपर्दछ।',
        'string'  => ' :attribute :max क्यारेक्टर भन्दा बढि हुनुपर्दछ।',
    ],
    'mimes'                => ' :attribute :values प्रकारको फाइल हुनुपर्छ।',
    'mimetypes'            => ' :attribute :values प्रकारको फाइल हुनुपर्छ।',
    'min'                  => [
        'array'   => ':attribute मा कम्तिमा :min आइटम हुनुपर्छ।',
        'file'    => ':attribute कम्तिमा :min क्यालोबाइटोकाे हुनुपर्छ।',
        'numeric' => ':attribute कम्तिमा :min हुनुपर्छ।',
        'string'  => ':attribute कम्तिमा :min वर्णको हुनुपर्छ।',
    ],
    'multiple_of'          => 'यो :attribute को एक धेरै हुनुपर्छ :value',
    'not_in'               => 'छानिएको :attribute अमान्य छ।',
    'not_regex'            => ':attribute ढाँचा अवैध छ.',
    'numeric'              => ':attribute संख्या हुनुपर्छ।',
    'password'             => 'पासवर्ड गलत छ।',
    'present'              => ':attribute क्षेत्र उपस्थित हुनुपर्दछ.',
    'prohibited'           => 'यो :attribute क्षेत्र निषेध छ । ',
    'prohibited_if'        => 'यो :attribute क्षेत्र निषेध छ जब :other छ :value.',
    'prohibited_unless'    => 'यो :attribute क्षेत्र निषेध छ नभएसम्म :other छ :values.',
    'prohibits'            => 'The :attribute field prohibits :other from being present.',
    'regex'                => ':attribute को ढाँचा मिलेन।',
    'required'             => ':attribute दिइएको हुनुपर्छ।',
    'required_array_keys'  => 'The :attribute field must contain entries for: :values.',
    'required_if'          => ':attribute चाहिन्छ जब :other :value हुन्छ।',
    'required_unless'      => ':other :values मा नभएसम्म :attribute चाहिन्छ।',
    'required_with'        => ':values भएसम्म :attribute चाहिन्छ।',
    'required_with_all'    => ':values भएसम्म :attribute चाहिन्छ।',
    'required_without'     => ':values नभएको बेला :attribute चाहिन्छ।',
    'required_without_all' => 'कुनैपनि :values नभएको बेला :attribute चाहिन्छ।',
    'same'                 => ':attribute र :other मिल्नुपर्छ।',
    'size'                 => [
        'array'   => ':attribute :sizeमा आइटम हुनुपर्छ।',
        'file'    => ':attribute :size क्यालोबाइटोकाे हुनुपर्छ।',
        'numeric' => ':attribute :size हुनुपर्छ।',
        'string'  => ':attribute :size वर्णको हुनुपर्छ।.',
    ],
    'starts_with'          => ':attribute निम्न मध्ये एकसँग सुरू हुनुपर्दछ :values',
    'string'               => ':attribute स्ट्रिङ्ग हुनुपर्छ।',
    'timezone'             => ':attribute मान्य समय क्षेत्र हुनुपर्छ।',
    'unique'               => 'यो :attribute पहिले नै लिई सकेको छ।',
    'uploaded'             => ':attribute अपलोड गर्न असफल भयो।',
    'url'                  => ':attribute को ढांचा मिलेन।',
    'uuid'                 => ':attribute एक मान्य UUID हुनुपर्दछ।',
    'custom'               => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
];
