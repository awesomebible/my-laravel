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

    'accepted' => 'Du musst :attribute akzeptieren.',
    'accepted_if' => 'Du musst :attribute akzeptieren, wenn :other :value ist.',
    'active_url' => ':attribute ist keine gültige URL.',
    'after' => ':attribute muss ein Datum nach :date sein.',
    'after_or_equal' => ':attribute muss ein Datum nach oder gleich :date sein.',
    'alpha' => ':attribute darf nur Buchstaben enthalten.',
    'alpha_dash' => ':attribute darf nur Buchstaben, Zahlen, Bindestriche und Unterstriche enthalten.',
    'alpha_num' => ':attribute darf nur Buchstaben und Zahlen enthalten.',
    'array' => ':attribute muss ein Array sein.',
    'before' => ':attribute muss ein Datum vor :date sein.',
    'before_or_equal' => ':attribute must be a date before or equal tmuss ein Datum vor oder gleich :date sein.',
    'between' => [
        'array' => ':attribute muss zwischen :min und :max Einträge haben.',
        'file' => ':attribute muss zwischen :min und :max kilobytes groß sein.',
        'numeric' => ':attribute muss eine Zahl zwischen :min und :max sein.',
        'string' => ':attribute muss zwischen :min und :max Zeichen sein.',
    ],
    'boolean' => 'Das :attribute Feld muss \"wahr\" oder \"falsch\" sein.',
    'confirmed' => ':attribute Bestätigung stimmt nicht mit :attribute überein.',
    'current_password' => 'Das Passwort ist falsch.',
    'date' => ':attribute ist kein korrektes Datum.',
    'date_equals' => ':attribute must be a date equal to :date.',
    'date_format' => ':attribute passt nicht zum Format :format.',
    'declined' => ':attribute muss abgelehnt werden.',
    'declined_if' => ':attribute muss abgelehnt werden, wenn :value :other ist.',
    'different' => ':attribute und :other müssen unterschiedlich sein.',
    'digits' => ':attribute muss :digits Ziffern sein.',
    'digits_between' => ':attribute muss zwischen :min und :max Ziffern lang sein.',
    'dimensions' => ':attribute hat eine falsche Bildauflösung.',
    'distinct' => ':attribute hat ein duplizierten Wert.',
    'doesnt_start_with' => ':attribute darf nicht mit folgendem Anfangen: :values.',
    'email' => ':attribute muss eine echte E-Mailadresse sein.',
    'ends_with' => ':attribute muss mit folgendem Enden: :values.',
    'enum' => 'Das ausgewählte :attribute ist inkorrekt.',
    'exists' => 'Das ausgewählte :attribute ist inkorrekt.',
    'file' => ':attribute muss eine Datei sein.',
    'filled' => ':attribute muss einen Wert haben.',
    'gt' => [
        'array' => ':attribute muss mehr als :value Werte enthalten.',
        'file' => ':attribute muss größer als :value kilobytes sein.',
        'numeric' => ':attribute muss größer als :value sein.',
        'string' => ':attribute muss länger als :value Zeichen sein.',
    ],
    'gte' => [
        'array' => ':attribute muss :value oder mehr Werte enthalten.',
        'file' => ':attribute muss größer oder gleich :value kilobytes groß sein.',
        'numeric' => ':attribute muss größer oder gleich :value sein.',
        'string' => ':attribute muss gleich oder länger als :value Zeichen sein.',
    ],
    'image' => ':attribute muss ein Bild sein.',
    'in' => 'Das ausgewählte :attribute ist ungültig.',
    'in_array' => 'Das :attribute Feld existiert nicht in :other.',
    'integer' => ':attribute muss eine Zahl sein.',
    'ip' => ':attribute muss eine gültige IP Addresse sein.',
    'ipv4' => ':attribute muss eine gültige IPv4 Addresse sein.',
    'ipv6' => ':attribute muss eine gültige IPv6 Addresse sein.',
    'json' => ':attribute muss ein valider JSON string sein.',
    'lt' => [
        'array' => ':attribute muss weniger als :value Werte enthalten.',
        'file' => ':attribute muss kleiner als :value kilobytes sein.',
        'numeric' => ':attribute muss kleiner als :value sein.',
        'string' => ':attribute muss kürzer als :value Zeichen sein.',
    ],
    'lte' => [
        'array' => ':attribute darf nicht mehr als :value Werte enthalten.',
        'file' => ':attribute muss kleiner oder gleich :value kilobytes sein.',
        'numeric' => ':attribute muss kleiner oder gleich :value sein.',
        'string' => ':attribute muss kürzer oder gleich :value Zeichen sein.',
    ],
    'mac_address' => ':attribute muss eine valide MAC Adresse sein.',
    'max' => [
        'array' => ':attribute darf nicht mehr als :max Werte enthalten.',
        'file' => ':attribute darf nicht größer als :max kilobytes sein.',
        'numeric' => ':attribute darf nicht größer als :max sein.',
        'string' => ':attribute darf nicht länger als :max Zeichen sein.',
    ],
    'mimes' => ':attribute muss eine Datei mit dem Typ: :values sein.',
    'mimetypes' => ':attribute muss eine Datei mit dem Typ: :values sein.',
    'min' => [
        'array' => ':attribute muss mindestens :min Werte enthalten.',
        'file' => ':attribute muss mindestens :min kilobytes groß sein.',
        'numeric' => ':attribute muss mindestens :min sein.',
        'string' => ':attribute muss mindestens :min Zeichen lang sein.',
    ],
    'multiple_of' => ':attribute muss ein Vielfaches von :value sein.',
    'not_in' => 'Die Auswahl :attribute ist ungültig.',
    'not_regex' => 'Das Format von :attribute ist ungültig.',
    'numeric' => ':attribute muss eine Zahl sein.',
    'password' => [
        'letters' => ':attribute muss mindestens einen Buchstaben enthalten.',
        'mixed' => ':attribute muss mindestens einen Groß- und einen Kleinbuchstaben enthalten.',
        'numbers' => ':attribute muss mindestens eine Zahl enthalten.',
        'symbols' => ':attribute muss mindestens ein Symbol enthalten.',
        'uncompromised' => ':attribute wurde in der Vergangenheit in einem Datenleck gefunden. Bitte wähle ein anderes :attribute, und ändere es überall da, wo du es vielleicht verwendest.',
    ],
    'present' => 'Das :attribute Feld muss existieren.',
    'prohibited' => 'Das :attribute Feld ist verboten.',
    'prohibited_if' => 'Das :attribute ist verboten, wenn :other :value ist.',
    'prohibited_unless' => 'Das :attribute Feld ist verboten, es sei denn :other ist in :values.',
    'prohibits' => 'Das :attribute Feld verbietet :other from being present.',
    'regex' => 'Das :attribute Format ist ungültig.',
    'required' => 'Das :attribute Feld ist erforderlich.',
    'required_array_keys' => 'Das :attribute Feld muss Einträge für :values enthalten.',
    'required_if' => 'Das :attribute Feld ist erforderlich wenn :other :value ist.',
    'required_unless' => 'Das :attribute Feld ist erforderlich, es sei denn, :other ist in :values.',
    'required_with' => 'Das :attribute Feld ist erforderlich wenn :values existiert.',
    'required_with_all' => 'Das :attribute Feld ist erforderlich wenn :values existieren.',
    'required_without' => 'Das :attribute Feld ist erforderlich wenn :values nicht existert.',
    'required_without_all' => 'Das :attribute Feld ist erforderlich wenn :values nicht existieren.',
    'same' => ':attribute und :other müssen übereinstimmen.',
    'size' => [
        'array' => ':attribute muss :size Einträge enthalten.',
        'file' => ':attribute muss :size kilobytes groß sein.',
        'numeric' => ':attribute muss :size betragen.',
        'string' => ':attribute muss :size Zeichen lang sein.',
    ],
    'starts_with' => ':attribute muss mit einem der folgenden Werte starten: :values.',
    'string' => ':attribute muss eine Zeichenfolge sein.',
    'timezone' => ':attribute muss eine gültige Zeitzone sein.',
    'unique' => ':attribute ist bereits vergeben.',
    'uploaded' => 'Das hochladen von :attribute ist fehlgeschlagen.',
    'url' => ':attribute muss eine gültige URL sein.',
    'uuid' => ':attribute muss eine gültige UUID sein.',

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
