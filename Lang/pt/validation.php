<?php

return array(

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

    "accepted"                  => "O campo :attribute deve ser aceite.",
    "active_url"                => "O campo :attribute não é um URL válido.",
    "after"                     => "O campo :attribute deve ser uma data depois de :date.",
    "alpha"                     => "O campo :attribute deverá apenas conter letras.",
    "alpha_dash"                => "O campo :attribute deverá apenas conter letras, números, hífens ou underscore.",
    "alpha_num"                 => "O campo :attribute deve apenas conter letras e números.",
    "array"                     => "O campo :attribute deve ser uma array.",
    "before"                    => "O campo :attribute deve ser uma data antes de :date.",
    "between"                   => array(
        "numeric" => "O campo :attribute deverá ter entre :min e :max.",
        "file"    => "O :attribute deverá ter entre :min e :max kilobytes.",
        "string"  => "O campo :attribute ter estar entre :min e :max caractéres.",
        "array"   => "O :attribute deverá ter entre :min e :max ítens.",
    ),
    "boolean"                   => "O campo :attribute deve ser verdadeiro ou falso.",
    "confirmed"                 => "A confirmação do campo :attribute não coincide.",
    "date"                      => "O campo :attribute não é uma data válida.",
    "date_format"               => "O campo :attribute não coincide com o formato :format.",
    "different"                 => "Os campos :attribute e :other devem ser diferentes.",
    "digits"                    => "O campo :attribute deve ter :digits digitos.",
    "digits_between"            => "O campo :attribute deve conter entre :min e :max digitos.",
    "email"                     => "O campo :attribute tem que ser um email valido.",
    "exists"                    => "O campo :attribute selecionado é inválido.",
    "image"                     => "O campo :attribute deve ser uma imagem.",
    "in"                        => "O campo :attribute selecionado é inválido.",
    "integer"                   => "O campo :attribute deve ser um número inteiro.",
    "ip"                        => "O campo :attribute deve ser um endereço de IP válido.",
    "max"                       => array(
        "numeric" => "O número :attribute não deve ser superior :max.",
        "file"    => "O ficheiro :attribute não deve ser superior :max kilobytes.",
        "string"  => "O campo :attribute não deve ser superior :max caractéres.",
        "array"   => "A lista :attribute não deve conter mais que :max ítens.",
    ),
    "mimes"                     => "O ficheiro :attribute deve ser do tipo: :values.",
    "min"                       => array(
        "numeric" => "O número :attribute deve ser pelo menos :min.",
        "file"    => "O ficheiro :attribute deve ter pelo menos :min kilobytes.",
        "string"  => "O campo :attribute deve conter pelo menos :min caractéres.",
        "array"   => "A lista :attribute deve ter pelo menos :min ítens.",
    ),
    "not_in"                    => "O :attribute selecionado é inválido.",
    "numeric"                   => "O :attribute deve ser um número.",
    "regex"                     => "O formato do :attribute é inválido.",
    "required"                  => "O campo :attribute é obrigatório.",
    "required_if"               => "O campo :attribute é necessário quando :other é :value.",
    "required_with"             => "O campo :attribute é necessário quando :values estiver presente.",
    "required_with_all"         => "O campo :attribute é necessário quando :values estiverem presentes.",
    "required_without"          => "O campo :attribute é necessário quando :values não estiver presente.",
    "required_without_all"      => "O campo :attribute é necessário quando :values não estiverem presentes.",
    "same"                      => "O campo :attribute e :other devem coincidir.",
    "size"                      => array(
        "numeric" => "O número :attribute deve ter :size.",
        "file"    => "O ficheiro :attribute deve ter :size kilobytes.",
        "string"  => "O campo :attribute deve ter :size caractéres.",
        "array"   => "A lista :attribute deve conter :size ítens.",
    ),
    "unique"                    => "O campo :attribute já se encontra em uso.",
    "url"                       => "O formato de :attribute é inválido.",
    "template_exists"           => "O :attribute selecionado é inválido.",
    "is_valid_captcha"          => "O código captcha inserido é inválido ou está incorrecto, por favor tente de novo.",
    "user_password_strength"    => "O campo :attribute deve conter: :user_password_strength.",
    "operator_password_strength" => "O campo :attribute deve conter: :operator_password_strength.",

    /*
     * 2.1.0
     */
    "logo"                      => "O logo deve apontar para um ficheiro de imagem válido (URL direto ou caminho relativo referente à diretoria base).",

    /*
     * 2.2.0
     */
    "required_with_translation" => "A tradução :translation para o campo :attribute é necessária quando :values está presente.",
    "max_translation"           => "A tradução :translation para o campo :attribute não deve ser superior a :max caractéres.",
    "unique_translation"        => "A tradução :translation para o campo :attribute já foi atribuída.",

    /*
     * 2.3.0
     */
    "required_translation"      => "A tradução :translation para o campo :attribute é obrigatória.",
    "customfield_not_cyclic"    => "O campo não pode depender de um do seus filhos.",

    /*
     * 2.3.1
     */
    "is_slug"                   => "O campo slug deve conter apenas caractéres alfanúmericos, por favor codifique quaisquer caracteres especiais com percentagem.",
    "article_slug_unique"       => "O endereço slug já se encontra em utilização.",
    "captcha_required"          => "O Captcha é obrigatório.",
    "ticket_number_format"      => "O formato do número do ticket é inválido.",

    /*
     * 2.4.0
     */
    "after_or_equal"            => "O campo :attribute deve ser uma data posterior ou igual a :date.",
    "before_or_equal"           => "O campo :attribute deve ser uma data anterior ou igual a :date.",
    "dimensions"                => "O campo :attribute tem dimensões de imagem inválidas.",
    "distinct"                  => "O campo :attribute field has a duplicate value.",
    "file"                      => "O campo :attribute deve ser um ficheiro.",
    "filled"                    => "O campo :attribute deve conter um valor.",
    "gt"                        => array(
        "numeric" => "O número :attribute deve ser maior que :value.",
        "file"    => "O ficheiro :attribute deve ser maior que :value kilobytes.",
        "string"  => "O campo :attribute deve ser maior que :value caracteres.",
        "array"   => "A lista  :attribute deve ter mais que :value ítens.",
    ),
    "gte"                       => array(
        "numeric" => "O número :attribute deve ser maior ou igual a :value.",
        "file"    => "O ficheiro :attribute deve ser maior ou igual a :value kilobytes.",
        "string"  => "O campo :attribute deve ser maior ou igual a :value caracteres.",
        "array"   => "A lista :attribute deve ter :value itens ou mais.",
    ),
    "in_array"                  => "O campo :attribute não existe em :other.",
    "ipv4"                      => "O campo :attribute deve ser um endereço IPv4 válido",
    "ipv6"                      => "O campo :attribute deve ser um endereço IPv6 válido.",
    "json"                      => "O campo :attribute deve ser uma string JSON válida.",
    "lt"                        => array(
        "numeric" => "O número :attribute deve ser inferior a :value.",
        "file"    => "O ficheiro :attribute deve ser inferior a :value kilobytes.",
        "string"  => "O campo :attribute deve ser inferior a :value caracteres.",
        "array"   => "A lista :attribute deve ter menos de :value ítens.",
    ),
    "lte"                       => array(
        "numeric" => "O número :attribute deve ser menor ou igual a :value.",
        "file"    => "O ficheiro :attribute deve ser menor ou igual a :value kilobytes.",
        "string"  => "O campo :attribute deve ser menor ou igual a :value caracteres.",
        "array"   => "A lista :attribute não deve ter mais que :value itens.",
    ),
    "mimetypes"                 => "O campo :attribute deve ser um ficheiro do tipo: :values.",
    "not_regex"                 => "O campo :attribute tem um formato inválido.",
    "present"                   => "O campo :attribute deve estar presente.",
    "required_unless"           => "O campo :attribute é necessário a menos que :other esteja em :values.",
    "string"                    => "O campo :attribute deve ser uma string.",
    "timezone"                  => "O campo :attribute deve ser um fuso-horário válida.",
    "uploaded"                  => "O campo :attribute falhou ao fazer upload.",

    /*
     * 2.5.0
     */
    "domain"                    => "Um ou mais nomes de domínios são inválidos.",

    /*
     * 2.5.1
     */
    "valid_twig"                => "O campo :attribute é inválido. Por favor utilize o botão 'Pre-visualizar' para detalhes do erro.",

    /*
     * 3.0.0
     */
    "embed_image"               => "O campo :attribute deve ser um tipo de ficheiro: jpeg, png, ou gif.",
    "starts_with"               => "O campo :attribute deve começar por um dos seguintes: :values.",

    /*
     * 3.5.0
     */
    "phone"                     => "The supplied phone number is invalid.",

    /*
     * 4.3.0
     */
    "is_invalid"                => "The :attribute is invalid.",

    /*
     * 5.0.0
     */
    "current_password"           => "The password is incorrect.",
    "department_email_per_brand" => "An email account must exist for each brand assigned to this department.",
    "department_has_a_priority"  => "Department(s) :departments are public and must be assigned to at least one priority.",

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

    "custom" => array(
        "roles.*" => array(
            "exists" => "A função selecionada é inválida.",
        ),
        "category.*.type" => array(
            "required" => "Um ou mais tipos de self-service devem ser selecionados.",
        ),
        "category.*.categories" => array(
            "required" => "Uma ou mais categorias são necessárias quando um tipo self-service for selecionado.",
            "exists"   => "Uma ou mais das categorias selecionadas são inválidas.",
        ),
        "brand.*" => array(
            "exists" => "A marca selecionada é inválida.",
        ),
    ),

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as Email Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    "attributes" => array(),

);
