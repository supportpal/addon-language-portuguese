<?php

return array(

    "customfield"               => "Campo Personalizado|Campos Personalizados",

    // Options
    "boolean"                   => "Boleano",
    "checkbox"                  => "Caixa de Seleção",
    "checklist"                 => "Lista de Seleção",
    "date"                      => "Data",
    "multiple"                  => "Múltiplas Opções",
    "options"                   => "Opções",
    "radio"                     => "Botões Radio",
    "rating"                    => "Classificação (1 a 5)",
    "text"                      => "Texto",
    "textarea"                  => "Área de Texto",

    "public"                    => "Publico",
    "public_desc"               => "Se o campo personalizado será mostrado publicamente no frontend ou é apenas para a nossa equipa.",
    "encrypted"                 => "Encriptado",
    "purge_desc"                => "Se o valor submetido para o campo personalizado deverá ser apaado automaticamente quando o ticket for resolvido.",
    "locked"                    => "Bloqueado",
    "locked_desc"               => "Se o valor do campo personalizado não pode ser alterado pelo utilizador quando definido.",
    "department_desc"           => "Escolha os departamentos para os quais o campo estará disponível.",

    /*
     * 2.0.2
     */
    "please_select"             => "Por favor selecione...",

    /*
     * 2.0.3
     */
    "description_desc"          => "O texto de ajuda que irá aparecer por baixo do campo personalizado que poderá ser deixado em branco opcionalmente.",

    /*
     * 2.1.0
     */
    "brand_desc"                => "Escolha em que marcas o campo estará disponível.",

    /*
     * 2.3.0
     */
    "option_warning"            => "Eliminar opções existentes irá limpar qualquer campos guardados que tenham os valores selecionados.",
    "regex_basic_desc"          => "Opcionalmente especifique uma expressão regular para validar o valor do campo personalizado.",
    "regex_desc"                => "O campo regex é case-sensitive, não é necessário especificar os delimitadores regex, e utilização de barras será automaticamente limpo. Exemplo: ^[a-z0-9_-]{6,18}$ irá forçar a que o valor tenha entre 6-18 caracteres e contenha apenas caracteres alfa-numericos, underscores e hífens.",
    "regex_error_message"       => "Mensagem de Erro de Validação",
    "regex_error_message_desc"  => "Opcionalmente especifique uma mensagem de erro personalizada que será mostrada se o valor não for compativel com a validação regex, caso contrário será mostrada uma mensagem genérica. A mensagem será mostrada exactamente conforme inserida, pelo que recomendamos que coloque o nome do campo personalizado para tornar a mensagem mais óbvia.",
    "custom_field_values"       => "Valores do Campo Personalizado",
    "depends_on"                => "Dependente De",
    "depends_on_desc"           => "Se selecionado, este campo apenas será mostrado ao utilizador quando um valor especifico seja seleccionado. A visibilidade de marca e departamento serão herdadas automaticamente das opções do campo a que este está associado.",
    "select_option"             => "Selecione uma opção...",
    "purge"                     => "Remover",
    "encrypted_desc"            => "Se o valor do campo personalizado é sensivel e deve ser guardado na base de dados de forma encriptada. Esta opção não pode ser alterada após o campo ser criado.",

    /*
     * 2.3.1
     */
    "required_desc"             => "Se o campo deve ser preenchido. Para os tipos checkbox, checklist ou múltiplas opções, irá exigir que o utilizador selecione pelo menos uma opção.",

    /*
     * 3.3.0
     */
    "encrypted_value"           => "** ENCRIPTADO **",
);
