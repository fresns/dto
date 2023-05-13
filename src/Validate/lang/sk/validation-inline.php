<?php

/*
 * Fresns (https://fresns.org)
 * Copyright (C) 2021-Present Jevan Tang
 * Released under the Apache-2.0 License.
 */

return [
    'accepted'             => 'Toto pole musí byť prijaté.',
    'accepted_if'          => 'This field must be accepted when :other is :value.',
    'active_url'           => 'Toto nie je platná adresa URL.',
    'after'                => 'Toto musí byť dátum po roku :date.',
    'after_or_equal'       => 'Toto musí byť dátum po :date alebo rovný.',
    'alpha'                => 'Toto pole môže obsahovať iba písmená.',
    'alpha_dash'           => 'Toto pole môže obsahovať iba písmená, čísla, pomlčky a podčiarknutia.',
    'alpha_num'            => 'Toto pole môže obsahovať iba písmená a číslice.',
    'array'                => 'Toto pole musí byť pole.',
    'before'               => 'Toto musí byť Dátum pred :date.',
    'before_or_equal'      => 'Musí to byť Dátum pred alebo rovný :date.',
    'between'              => [
        'array'   => 'This content must have between :min and :max items.',
        'file'    => 'This file must be between :min and :max kilobytes.',
        'numeric' => 'This value must be between :min and :max.',
        'string'  => 'This string must be between :min and :max characters.',
    ],
    'boolean'              => 'Toto pole musí byť pravdivé alebo nepravdivé.',
    'confirmed'            => 'Potvrdenie sa nezhoduje.',
    'current_password'     => 'The password is incorrect.',
    'date'                 => 'Toto nie je platný dátum.',
    'date_equals'          => 'Toto musí byť Dátum rovný :date.',
    'date_format'          => 'Toto sa nezhoduje s formátom :format.',
    'declined'             => 'This value must be declined.',
    'declined_if'          => 'This value must be declined when :other is :value.',
    'different'            => 'Táto hodnota sa musí líšiť od :other.',
    'digits'               => 'Musí to byť :digits číslic.',
    'digits_between'       => 'Musí to byť medzi číslicami :min a :max.',
    'dimensions'           => 'Tento obrázok má neplatné rozmery.',
    'distinct'             => 'Toto pole má duplicitnú hodnotu.',
    'email'                => 'Musí to byť platná e-mailová adresa.',
    'ends_with'            => 'Toto musí skončiť jedným z nasledujúcich krokov: :values.',
    'enum'                 => 'The selected value is invalid.',
    'exists'               => 'Zvolená hodnota je neplatná.',
    'file'                 => 'Obsah musí byť súbor.',
    'filled'               => 'Toto pole musí mať hodnotu.',
    'gt'                   => [
        'array'   => 'The content must have more than :value items.',
        'file'    => 'The file size must be greater than :value kilobytes.',
        'numeric' => 'The value must be greater than :value.',
        'string'  => 'The string must be greater than :value characters.',
    ],
    'gte'                  => [
        'array'   => 'The content must have :value items or more.',
        'file'    => 'The file size must be greater than or equal :value kilobytes.',
        'numeric' => 'The value must be greater than or equal :value.',
        'string'  => 'The string must be greater than or equal :value characters.',
    ],
    'image'                => 'Musí to byť obrázok.',
    'in'                   => 'Zvolená hodnota je neplatná.',
    'in_array'             => 'Táto hodnota neexistuje v roku :other.',
    'integer'              => 'Toto musí byť celé číslo.',
    'ip'                   => 'Musí to byť platná IP adresa.',
    'ipv4'                 => 'Musí to byť platná adresa IPv4.',
    'ipv6'                 => 'Musí to byť platná adresa IPv6.',
    'json'                 => 'Musí to byť platný reťazec JSON.',
    'lt'                   => [
        'array'   => 'The content must have less than :value items.',
        'file'    => 'The file size must be less than :value kilobytes.',
        'numeric' => 'The value must be less than :value.',
        'string'  => 'The string must be less than :value characters.',
    ],
    'lte'                  => [
        'array'   => 'The content must not have more than :value items.',
        'file'    => 'The file size must be less than or equal :value kilobytes.',
        'numeric' => 'The value must be less than or equal :value.',
        'string'  => 'The string must be less than or equal :value characters.',
    ],
    'mac_address'          => 'The value must be a valid MAC address.',
    'max'                  => [
        'array'   => 'The content must not have more than :max items.',
        'file'    => 'The file size must not be greater than :max kilobytes.',
        'numeric' => 'The value must not be greater than :max.',
        'string'  => 'The string must not be greater than :max characters.',
    ],
    'mimes'                => 'Musí to byť typ súboru: :values.',
    'mimetypes'            => 'Musí to byť typ súboru: :values.',
    'min'                  => [
        'array'   => 'The value must have at least :min items.',
        'file'    => 'The file size must be at least :min kilobytes.',
        'numeric' => 'The value must be at least :min.',
        'string'  => 'The string must be at least :min characters.',
    ],
    'multiple_of'          => 'Hodnota musí byť násobkom :value',
    'not_in'               => 'Zvolená hodnota je neplatná.',
    'not_regex'            => 'Tento formát je neplatný.',
    'numeric'              => 'Toto musí byť číslo.',
    'password'             => 'Heslo je nesprávne.',
    'present'              => 'Toto pole musí byť prítomné.',
    'prohibited'           => 'Toto pole je zakázané.',
    'prohibited_if'        => 'Toto pole je zakázané, keď :other je :value.',
    'prohibited_unless'    => 'Toto pole je zakázané, ak :other je v :values.',
    'prohibits'            => 'This field prohibits :other from being present.',
    'regex'                => 'Tento formát je neplatný.',
    'required'             => 'Toto pole je povinné.',
    'required_array_keys'  => 'This field must contain entries for: :values.',
    'required_if'          => 'Toto pole sa vyžaduje, keď je :other :value.',
    'required_unless'      => 'Toto pole sa vyžaduje, pokiaľ nie je :other v :values.',
    'required_with'        => 'Toto pole sa vyžaduje, keď je prítomné číslo :values.',
    'required_with_all'    => 'Toto pole sa vyžaduje, keď sú prítomné :values.',
    'required_without'     => 'Toto pole sa vyžaduje, keď nie je k dispozícii :values.',
    'required_without_all' => 'Toto pole sa vyžaduje, keď žiadny z :values sú prítomné.',
    'same'                 => 'Hodnota tohto poľa sa musí zhodovať s hodnotou z :other.',
    'size'                 => [
        'array'   => 'The content must contain :size items.',
        'file'    => 'The file size must be :size kilobytes.',
        'numeric' => 'The value must be :size.',
        'string'  => 'The string must be :size characters.',
    ],
    'starts_with'          => 'Toto musí začínať jedným z nasledujúcich krokov: :values.',
    'string'               => 'Musí to byť reťazec.',
    'timezone'             => 'Musí to byť platná zóna.',
    'unique'               => 'Toto už bolo prijaté.',
    'uploaded'             => 'Toto sa nepodarilo nahrať.',
    'url'                  => 'Tento formát je neplatný.',
    'uuid'                 => 'Musí to byť platný UUID.',
    'custom'               => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
];
