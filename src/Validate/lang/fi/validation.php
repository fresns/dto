<?php

/*
 * Fresns (https://fresns.org)
 * Copyright (C) 2021-Present Jevan Tang
 * Released under the Apache-2.0 License.
 */

return [
    'accepted'             => 'Kenttä :attribute tulee hyväksyä.',
    'accepted_if'          => 'The :attribute must be accepted when :other is :value.',
    'active_url'           => 'Kentän :attribute tulee olla kelvollinen URL-osoite.',
    'after'                => 'Kentän :attribute päiväyksen tulee olla jälkeen :date.',
    'after_or_equal'       => 'Kentän :attribute päiväyksen tulee olla sama ja jälkeen :date',
    'alpha'                => 'Kenttä :attribute voi sisältää vain kirjaimia.',
    'alpha_dash'           => 'Kenttä :attribute voi sisältää vain kirjaimia, numeroita ja viivoja.',
    'alpha_num'            => 'Kenttä :attribute voi sisältää vain kirjaimia ja numeroita.',
    'array'                => 'Kenttä :attribute tulee olla taulukko.',
    'before'               => 'Kentän :attribute päiväyksen tulee olla ennen :date.',
    'before_or_equal'      => 'Kentän :attribute päiväyksen tulee olla sama tai ennen kuin :date.',
    'between'              => [
        'array'   => 'Kentän :attribute tulee sisältää välillä :min - :max arvoa.',
        'file'    => 'Tiedoston :attribute tulee olla :min - :max kilotavua.',
        'numeric' => 'Kentän :attribute tulee olla välillä :min - :max.',
        'string'  => 'Kentän :attribute tulee olla :min - :max merkkiä pitkä.',
    ],
    'boolean'              => 'Kentän :attribute arvon tulee olla tosi tai epätosi.',
    'confirmed'            => 'Kentän :attribute vahvistus ei täsmää.',
    'current_password'     => 'The password is incorrect.',
    'date'                 => 'Kentän :attribute arvo ei ole kelvollinen päivämäärä.',
    'date_equals'          => ':attribute on oltava sama päivämäärä kuin :date.',
    'date_format'          => 'Kentän :attribute arvo ei vastaa muotoa :format.',
    'declined'             => 'The :attribute must be declined.',
    'declined_if'          => 'The :attribute must be declined when :other is :value.',
    'different'            => 'Kenttien :attribute ja :other tulee olla eriarvoisia.',
    'digits'               => 'Kentän :attribute arvon on oltava :digits numeroa.',
    'digits_between'       => 'Kentän :attribute arvon tulee olla :min - :max numeroa.',
    'dimensions'           => 'Kentän :attribute kuvalla on virheelliset mitat.',
    'distinct'             => 'Kentän :attribute arvo ei ole uniikki.',
    'email'                => 'Kentän :attribute arvo ei ole validi sähköpostiosoite.',
    'ends_with'            => ':attribute: n on päätyttävä jompaankumpaan seuraavista: :values.',
    'enum'                 => 'The selected :attribute is invalid.',
    'exists'               => 'Kentän :attribute valittu arvo on virheellinen.',
    'file'                 => 'Kentän :attribute arvon tulee olla tiedosto.',
    'filled'               => 'Kenttä :attribute on pakollinen.',
    'gt'                   => [
        'array'   => 'Kentän :attribute tulee sisältää enemmän kuin :value arvoa.',
        'file'    => 'Tiedoston :attribute tulee olla suurempi kuin :value kilotavua.',
        'numeric' => 'Kentän :attribute arvo tulee olla suurempi kuin :value.',
        'string'  => 'Kentän :attribute arvo tulee olla pidempi kuin :value merkkiä.',
    ],
    'gte'                  => [
        'array'   => 'Kentän :attribute tulee sisältää :value arvoa tai enemmän.',
        'file'    => 'Tiedoston :attribute tulee olla suurempi tai yhtäsuuri kuin :value kilotavua.',
        'numeric' => 'Kentän :attribute arvo tulee olla suurempi tai yhtäsuuri kuin :value.',
        'string'  => 'Kentän :attribute arvo tulee olla pidempi tai yhtä pitkä kuin :value merkkiä.',
    ],
    'image'                => 'Kentän :attribute arvon tulee olla kuva.',
    'in'                   => 'Kentän :attribute arvo on virheellinen.',
    'in_array'             => 'Kentän :attribute arvo ei sisälly kentän :other arvoon.',
    'integer'              => 'Kentän :attribute arvon tulee olla numero.',
    'ip'                   => 'Kentän :attribute arvon tulee olla validi IP-osoite.',
    'ipv4'                 => 'Kentän :attribute arvon tulee olla validi IPv4-osoite.',
    'ipv6'                 => 'Kentän :attribute arvon tulee olla validi IPv6-osoite.',
    'json'                 => 'Kentän :attribute arvon tulee olla validia JSON:ia.',
    'lt'                   => [
        'array'   => 'Kentän :attribute tulee sisältää vähemmän kuin :value arvoa.',
        'file'    => 'Tiedoston :attribute tulee olla pienempi kuin :value kilotavua.',
        'numeric' => 'Kentän :attribute arvo tulee olla pienempi kuin :value.',
        'string'  => 'Kentän :attribute arvo tulee olla lyhyempi kuin :value merkkiä.',
    ],
    'lte'                  => [
        'array'   => 'Kentän :attribute tulee sisältää :value arvoa tai vähemmän.',
        'file'    => 'Tiedoston :attribute tulee olla pienempi tai yhtäsuuri kuin :value kilotavua.',
        'numeric' => 'Kentän :attribute arvo tulee olla pienempi tai yhtäsuuri kuin :value.',
        'string'  => 'Kentän :attribute arvo tulee olla lyhyempi tai yhtä pitkä kuin :value merkkiä.',
    ],
    'mac_address'          => 'The :attribute must be a valid MAC address.',
    'max'                  => [
        'array'   => 'Kentän :attribute ei tule sisältää enempää kuin :max arvoa.',
        'file'    => 'Tiedoston :attribute tulee olla enintään :max kilobittiä.',
        'numeric' => 'Kentän arvon :attribute tulee olla enintään :max.',
        'string'  => 'Kentän :attribute arvon tulee olla enintään :max merkkiä pitkä.',
    ],
    'mimes'                => 'Kentän :attribute arvon tulee olla tiedostotyyppiä: :values.',
    'mimetypes'            => 'Kentän :attribute arvon tulee olla tiedostotyyppiä: :values.',
    'min'                  => [
        'array'   => 'Kentän :attribute tulee sisältää vähintään :min arvoa.',
        'file'    => 'Tiedoston :attribute tulee olla vähintään :min kilobittiä.',
        'numeric' => 'Kentän :attribute arvon tulee olla vähintään :min.',
        'string'  => 'Kentän :attribute arvon tulee olla vähintään :min merkkiä.',
    ],
    'multiple_of'          => ':attribute: n on oltava :value: n kerrannainen',
    'not_in'               => 'Kentän :attribute arvo on virheellinen.',
    'not_regex'            => 'Kentän :attribute formaatti on virheellinen.',
    'numeric'              => 'Kentän :attribute arvon tulee olla numero.',
    'password'             => 'Salasana on väärä.',
    'present'              => 'Kenttä :attribute vaaditaan.',
    'prohibited'           => ':attribute-kenttä on kielletty.',
    'prohibited_if'        => ':attribute-kenttä on kielletty, kun :other on :value.',
    'prohibited_unless'    => ':attribute-kenttä on kielletty, ellei :other ole kohteessa :values.',
    'prohibits'            => 'The :attribute field prohibits :other from being present.',
    'regex'                => 'Kentän :attribute arvo on väärää muotoa.',
    'required'             => 'Kenttä :attribute vaaditaan.',
    'required_array_keys'  => 'The :attribute field must contain entries for: :values.',
    'required_if'          => 'Kenttä :attribute vaaditaan kun :other on :value.',
    'required_unless'      => 'Kenttä :attribute vaaditaan jos :other ei sisälly arvoihin :values.',
    'required_with'        => 'Kenttä :attribute vaaditaan kun arvo :values on annettu.',
    'required_with_all'    => 'Kenttä :attribute vaaditaan kun arvo :values on annettu.',
    'required_without'     => 'Kenttä :attribute vaaditaan kun arvoa :values ei ole annettu.',
    'required_without_all' => 'Kenttä :attribute vaaditaan kun mitään arvoista :values ei ole annettu.',
    'same'                 => 'Kenttien :attribute ja :other on oltava samanarvoiset.',
    'size'                 => [
        'array'   => 'Kentän :attribute tulee sisältää :size arvoa.',
        'file'    => 'Tiedoston :attribute tulee olla kokoa :size kilobittiä.',
        'numeric' => 'Kentän :attribute arvon tulee olla kokoa :size.',
        'string'  => 'Kentän :attribute arvon tulee olla kokoa :size merkkiä.',
    ],
    'starts_with'          => 'Attribuutin :attribute tulee alkaa yhdellä seuraavista: :values',
    'string'               => 'Kentän :attribute arvon tulee olla tekstiä.',
    'timezone'             => 'Kentän :attribute arvon tulee olla validi aikavyöhyketunniste.',
    'unique'               => 'Kentän :attribute arvo ei ole uniikki.',
    'uploaded'             => 'Tiedoston :attribute lataus epäonnistui.',
    'url'                  => 'Kentän :attribute arvon tulee olla validi URL-osoite.',
    'uuid'                 => ':attribute tulee olla kelvollinen UUID.',
    'custom'               => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
];
