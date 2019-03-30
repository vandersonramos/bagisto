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

    'accepted'             => 'Das Feld :attribute sollte angenommen werden.',
    'active_url'           => 'Das Feld :attribute ist keine gültige URL.',
    'after'                => 'Das Feld :attribute muss ein Datum vor :date.',
    'after_or_equal'       => 'Das Feld :attribute benötigt ein Datum nach oder gleich :date.',
    'alpha'                => 'Das Feld :attribute kann nur Buchstaben enthalten.',
    'alpha_dash'           => 'Das Feld :attribute es darf nur Buchstaben, Zahlen und Bindestriche enthalten.',
    'alpha_num'            => 'Das Feld :attribute es darf nur Buchstaben, Zahlen.',
    'array'                => 'Das Feld :attribute muss ein Array sein.',
    'before'               => 'Das Feld :attribute muss ein früheres Datum sein :date.',
    'before_or_equal'      => 'Das Feld :attribute muss früher oder gleich sein :date.',
    'between'              => [
        'numeric' => 'Das Feld :attribute muss zwischen sein :min und :max.',
        'file'    => 'Das Feld :attribute muss zwischen sein :min und :max kilobytes.',
        'string'  => 'Das Feld :attribute muss zwischen sein :min und :max zeichen.',
        'array'   => 'Das Feld :attribute muss zwischen haben :min und :max elemente.',
    ],
    'boolean'              => 'Das Feld :attribute muss wahr oder falsch sein.',
    'confirmed'            => 'Das Feld :attribute passt nicht zusammen.',
    'date'                 => 'Das Feld :attribute ist kein gültiges Datum.',
    'date_format'          => 'Das Feld :attribute stimmt nicht mit dem Format überein :format.',
    'different'            => 'Felder :attribute und :other Es muss anders sein.',
    'digits'               => 'Das Feld :attribute muss haben :digits ziffern.',
    'digits_between'       => 'Das Feld :attribute muss zwischen haben :min und :max ziffern.',
    'dimensions'           => 'Das Feld :attribute hat ungültige Bildmaße.',
    'distinct'             => 'Das Feld :attribute hat einen doppelten Wert',
    'email'                => 'Das Feld :attribute muss eine gültige E-Mail-Adresse sein.',
    'exists'               => 'Das Feld :attribute ausgewählt ist ungültig.',
    'file'                 => 'Das Feld :attribute muss eine Datei sein.',
    'filled'               => 'Das Feld :attribute muss einen Wert haben',
    'image'                => 'Das Feld :attribute muss ein Bild sein',
    'in'                   => 'Das Feld :attribute ausgewählt ist ungültig.',
    'in_array'             => 'Das Feld :attribute existiert nicht in :other.',
    'integer'              => 'Das Feld :attribute muss eine ganze Zahl sein',
    'ip'                   => 'Das Feld :attribute muss eine gültige IP-Adresse sein.',
    'ipv4'                 => 'Das Feld :attribute muss eine gültige IPv4-Adresse sein',
    'ipv6'                 => 'Das Feld :attribute muss eine gültige IPv6-Adresse sein',
    'json'                 => 'Das Feld :attribute muss eine gültige JSON-Zeichenfolge sein.',
    'max'                  => [
        'numeric' => 'Das Feld :attribute darf nicht überschreiten :max.',
        'file'    => 'Das Feld :attribute darf nicht überschreiten :max kilobytes.',
        'string'  => 'Das Feld :attribute darf nicht überschreiten :max zeichen.',
        'array'   => 'Das Feld :attribute kann nicht mehr als :max Elemente haben.',
    ],
    'mimes'                => 'Das Feld :attribute muss ein Dateityp sein: :values.',
    'mimetypes'            => 'Das Feld :attribute muss ein Dateityp sein: :values.',
    'min'                  => [
        'numeric' => 'Das Feld :attribute muss mindestens sein :min.',
        'file'    => 'Das Feld :attribute muss mindestens haben :min kilobytes.',
        'string'  => 'Das Feld :attribute muss mindestens haben :min zeichen.',
        'array'   => 'Das Feld :attribute muss mindestens haben :min Elemente haben.',
    ],
    'not_in'               => 'Das Feld :attribute ausgewählt ist ungültig.',
    'numeric'              => 'Das Feld :attribute muss eine Zahl sein.',
    'present'              => 'Das Feld :attribute muss vorhanden sein.',
    'regex'                => 'Das Feld :attribute hat ein ungültiges Format.',
    'required'             => 'Das Feld :attribute ist erforderlich.',
    'required_if'          => 'Das Feld :attribute Es ist erforderlich wann :other ist :value.',
    'required_unless'      => 'Das Feld :attribute ist notwendig, außer wenn :other ist :values.',
    'required_with'        => 'Das Feld :attribute Es ist erforderlich wann :values ist anwesend.',
    'required_with_all'    => 'Das Feld :attribute Es ist erforderlich wann :values ist anwesend.',
    'required_without'     => 'Das Feld :attribute Es ist erforderlich wann :values ist nicht anwesend.',
    'required_without_all' => 'Das Feld :attribute ist obligatorisch, wenn keine der :values sind anwesend.',
    'same'                 => 'Felder :attribute und :other müssen übereinstimmen.',
    'size'                 => [
        'numeric' => 'Das Feld :attribute muss :size.',
        'file'    => 'Das Feld :attribute muss :size Kilobytes.',
        'string'  => 'Das Feld :attribute muss :size Zeichen sein.',
        'array'   => 'Das Feld :attribute muss :size Elemente enthalten.',
    ],
    'string'               => 'Das Feld :attribute muss eine Zeichenfolge sein.',
    'timezone'             => 'Das Feld :attribute muss eine gültige Zone sein.',
    'unique'               => 'Das Feld :attribute wird bereits verwendet.',
    'uploaded'             => 'Upload fehlgeschlagen :attribute.',
    'url'                  => 'Das Feld :attribute hat ein ungültiges Format.',

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
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */
    'attributes' => [],

];
