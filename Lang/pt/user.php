<?php

return array(

    "user"                          => "Utilizador|Utilizadores",
    "user_details"                  => "Detalhes do Utilizador",
    "add_user"                      => "Adicionar Utilizador",
    "account_active"                => "Conta ativa",
    "account_active_desc"           => "Alterne para ativar e desativar o acesso às seções autenticadas.",

    "op_settings_dept_desc"         => "Selecione os departamentos que o operador pode ver e para os quais pode responder aos tickets.",

    "organisation"                  => "Empresa|Empresas",
    "members"                       => "Membro|Membros",
    "owner"                         => "Dono",
    "manager"                       => "Gestor",
    "access_level"                  => "Nível de Acesso",
    "access_level_desc"             => "Define o nível de acesso do utilizador na organização, baseado no seguinte esquema:<br /><strong>Gestor</strong> - Pode ver os tickets abertos por todos os utilizadores da organização e pode gerir os utilizadores da mesma<br /><strong>Utilizador</strong> - Pode ver os tickets abertos apenas por si",
    "manage_organisation"           => "Gerir Organização",
    "leave_organisation"            => "Deixar Organização",
    "user_membership"               => "Associação de Utilizador",
    "transfer_ownership"            => "Transferir titularidade",
    "transfer_ownership_desc"       => "As the current owner of the organisation, you cannot be removed as a manager and only you can delete the organisation. You may transfer the ownership of the organisation to someone else, be aware that this action cannot be reversed.",
    "transfer_ownership_operator"   => "Apenas o dono pode eliminar a organização e este não se pode remover da mesma. Utilize esta opção para alterar a titularidade para outro utilizador da organização.",
    "start_typing_name"             => "Comece escrevendo um nome...",
    "organisation_add_user"         => "Adicionar utilizador à organização",
    "organisation_desc"             => "Cada organização pode ter <strong>gestores</strong>, que poderão gerir os utlizadores, ler e responder aos tickets dos restantes, ou <strong>utilizadores</strong>, que podem abrir tickets, mas não podem ler ou responder aos tickets dos restantes.",
    "organisation_operator_desc"    => "Adicione utilizadores a esta organização clicando em \"Adicionar Utilizador\" e pesquisando pelo seu nome. Note que adicionar um utilizador irá remover qualquer associação que este tenha com outra organização.",
    "organisation_user_desc"        => "<strong>Gestor</strong> - Pode gerir os outros utilizadores, assim como ver &amp; responder aos tickets dos outros utilizadores.<br /><strong>Utilizador</strong> - Pode apenas submeter tickets em representação da organização e responder aos seus próprios tickets.",
    "send_password_reset"           => "Enviar link de recuperação de password",

    "profile"                       => "Perfil",

    "login"                         => "Entrar",
    "remember_me"                   => "Lembrar-se de mim",
    "logout"                        => "Sair",
    "return_to_login"               => "Voltar à Autenticação",

    "user_register_disabled"        => "Desculpe, o registo público de utilizadores está actualmente desactivado.",
    "success_register"              => "Conta registada com sucesso!",
    "register_now"                  => "Registe-se Agora",
    "register"                      => "Registar",
    "register_account"              => "Registar Conta",
    "signed_up"                     => "Registado",
    "last_active"                   => "Última Actividade",

    "forgot_password"               => "Esqueceu a password?",
    "reset_password"                => "Recuperar Password",
    "set_password"                  => "Definir uma password",
    "please_set_password"           => "Por favor insira a sua nova password abaixo.",
    "missing_email_or_reset"        => "Endereço de E-mail ou Token em falta.",

    "firstname"                     => "Nome",
    "lastname"                      => "Apelido",
    "formatted_name"                => "Nome Formatado",
    "country"                       => "País",
    "avatar"                        => "Foto/Avatar",
    "confirm_password"              => "Confirmar Password",

    "confirmed"                     => "Confirmado",
    "unconfirmed"                   => "Por Confirmar",

    "group"                         => "Grupo de Utilizador|Grupos de Utilizador",
    "group_members"                 => "Membros do Grupo",
    "operator_group"                => "Grupo de Operador|Grupos de Operadores",
    "add_group"                     => "Adicionar a Grupo",

    "customfield"                   => "User Custom Field|User Custom Fields",
    "customfield_order"             => "Drag the rows to change the order custom fields appear to users.",

    "role"                          => "Cargo|Cargos",

    "operator_login_log"            => "Log de Autenticação de Operador",
    "system_activity_log"           => "Log de Actividade de Sistema",
    "activity_log"                  => "Registos de Actividade",

    "mass_email"                    => "Enviar E-mail em Massa",
    "send_email"                    => "Enviar Email",
    "choose_template"               => "Escolher template...",

    "ldap_account"                  => "Conta LDAP|Contas LDAP",
    "ldap_operator_desc"            => "Searching for an existing operator, or create a new one.",
    "ldap_server"                   => "LDAP Server",
    "ldap_server_desc"              => "The server hostname. Alternatively, you can specify the full LDAP URI. For example: ldaps://ldap.server:1234/ will connect via SSL to the port 1234.",
    "ldap_username"                 => "Username LDAP",
    "ldap_username_desc"            => "The username that the operator will use to login to the helpdesk (their LDAP username.)",
    "ldap_rdn"                      => "LDAP RDN or DN",
    "ldap_rdn_desc"                 => "The distinguished name for the LDAP username, for example: cn=Sample User,ou=people,dc=example,dc=com",
    "ldap_details"                  => "Detalhes LDAP",

    "operator_details"              => "Detalhes Operador",

    "email_notifications"           => "Notificações de Email",
    "email_notifications_desc"      => "As notificações de e-mail que serão recebidas do sistema.",

    "enable_ldap"                   => "Activar Autenticação LDAP",
    "enable_ldap_desc"              => "If you use LDAP, you can enable it for operator login. After enabling, go to the LDAP Accounts settings page to configure it.",
    "user_reg_enabled"              => "Registo de Utilizadores Activo",
    "user_reg_enabled_desc"         => "Allow new users to register an account in the frontend.",
    "user_reg_captcha"              => "Captcha no Registo de Utilizadores",
    "user_reg_captcha_desc"         => "If the captcha should be shown to new users registering.",
    "user_name_format"              => "Formato do Nome",
    "first_last"                    => "Nome Apelido",
    "last_first"                    => "Apelido Nome",
    "first_l"                       => "Nome A.",
    "f_last"                        => "N. Apelido",
    "password_length"               => "Tamanho de Password",
    "password_length_desc"          => "O tamanho mínimo de caracteres para a password quando registar ou actualizar uma conta.",
    "password_strength"             => "Segurança de Password",
    "password_strength_desc"        => "Selecione que caracteres são exigidos ao definir a password de um utilizador.",
    "password_str_must_contain"     => "Deve conter:",
    "password_str_letters"          => "Pelo menos um caracter alfanúmerico.",
    "password_str_digits"           => "Pelo menos um digito.",
    "password_str_case"             => "Pelo menos um caracter maiusculo e minusculo.",
    "password_str_symbols"          => "Pelo menos um símbolo.",

    "load_template"                 => "Carregar Template",
    "load_template_desc"            => "Escolher um template irá substituir o assunto e a mensagem actual.",
    "clear_template"                => "Limpar Template",

    "personal_settings"             => "Definições Pessoais",
    "personal_settings_desc"        => "Actualize o seu próprio perfil e modifique as definições que são relativas apenas à sua conta de operador.",
    "two_fa"                        => "Autenticação 2-Fatores",
    "notifications"                 => "Notificações",
    "two_fa_success_disabled"       => "A Autenticação de 2 Fatores foi desactivada com sucesso.",
    "two_fa_success_enabled"        => "A Autenticação de 2 Fatores foi activa com sucesso.",
    "two_fa_incorrect"              => "O código está incorrecto. Certifique-se que o código inserido está correcto e a data/hora do seu computador está sincronizada.",
    "two_fa_enabled"                => "2FA Activo?",
    "two_fa_disable"                => "Para desactivar o 2FA, por favor valide abaixo.",
    "two_fa_enable"                 => "Para activar a 2FA, por favor configure a conta no seu telefone utilizando os dados abaixo.",
    "verify_code"                   => "Código de Verificação",
    "verify_and_disable"            => "Verificar & Desactivar",
    "verify_and_enable"             => "Verificar & Activar",
    "verify_code_desc"              => "Insira um código válido para a sua conta 2FA de forma a desactivar a Autenticação 2FA.",
    "qr_code"                       => "Código QR",
    "two_fa_code"                   => "Código 2FA",
    "two_fa_secret"                 => "Código Secreto 2FA",
    "two_fa_secret_desc"            => "Por favor guarde esta informação num local seguro, uma vez que irá necessitar da mesma caso pretenda adicionar novamente a conta a um dispositivo móvel caso o perca ou formate.",
    "display_notifications"         => "Mostrar Notificações",
    "display_notifications_desc"    => "O sistema irá detectar novos tickets, respostas ou autenticação de outros utilizadores enquanto tem o painel de operador aberto. Poderá optar entre notificações desktop, notificações no browser ou desactivar completamente as notificações.",
    "desktop_notifications"         => "Notificações do Desktop",
    "browser_notifications"         => "Notificações do Browser",

    "search_for_user"               => "Pesquisar por utilizador...",
    "select_operator"               => "Pesquisar por operador...",
    "select_group"                  => "Selecionar um grupo...",

    "your_ip_has_been_banned"       => "O seu endereço de IP foi bloqueado.",
    "password_reset_success"        => "Password Alterada com sucesso!",

    "simpleauth_token_expired"      => "The access token has expired.",
    "simpleauth_token_invalid"      => "The access token provided is invalid.",
    "simpleauth_invalid_guard"      => "Cannot login as not a valid user.",
    "simpleauth_not_allowed"        => "Operators cannot currently login with SimpleAuth.",

    /*
     * 2.0.2
     */

    "email_history"                 => "Histório de e-mails",
    "view_email"                    => "Ver Email",

    "ban_after_count"               => "Banir IP após Autenticações Falhadas",
    "ban_after_count_user"          => "The number of failed logins after which the user IP is banned, and they are no longer able to login to the frontend for the configured amount of time. Setting to 0 will disable IP bans completely.",
    "ban_after_count_operator"      => "The number of failed logins after which the user IP is banned, and they are no longer able to login to the operator panel or API for the configured amount of time. Setting to 0 will disable IP bans completely.",
    "ban_length"                    => "Duração do Bloqueio de IP",
    "ban_length_desc"               => "The length of the IP ban when they reach the configured number of failed logins in a single day.",
    "n_failed_logins"               => ":count failed logins within 24 hours",

    /*
     * 2.0.3
     */
    "taking_a_break"                => "Taking a break...",
    "operator_session_expired"      => "You were inactive for a while or logged in on another device so I took a quick nap. Please wake me up by logging back in.",
    "log_back_in"                   => "Log Back In",
    "all_users"                     => "All Users",
    "all_operators"                 => "All Operators",
    "email_per_batch"               => "Emails Per Batch",
    "email_per_batch_desc"          => "The number of emails that are sent together at a time.",
    "batch_interval"                => "Batch Interval",
    "batch_interval_desc"           => "The gap between the email batches in minutes, 1 minute is the minimum.",
    "select_user_groups"            => "Select user/operator groups or type in email addresses...",
    "mass_email_sending_time"       => "It will take approximately :time to send all emails.",
    "organisations_enabled"         => "Organizações Activas",
    "organisations_enabled_desc"    => "Por defeito, utilizadores podem adicionar uma organização ao seu perfil e adicionar outros utilizadores a essa organização. Se apenas lida com consumidores finais, poderá desactivar a opção de organização e esconde-la da interface.",
    "manager_notifications"         => "Notificações de Gestor de Organização",
    "manager_notifications_desc"    => "Se os gestores das organizações devem receber por omissão actualizações por e-mails de tickets submetidos por outros utilizadores da organização. Cada gestor irá ter a opção individual para esta configuração no seu perfil e poderão sobrepor a mesma.",
    "manager_email_notifications_desc" => "Se deve receber notificações de e-mails de actualizações aos tickets abertos por outros utilizadores da oranização.",
    "organisation_notifications_desc" => "Se desejar receber notificações de e-mail para actualizações a tickets submetidos por outros utilizadores da sua organização.",
    "select_operator_group_desc"    => "Please select at least one operator group for this operator.",

    /*
     * 2.1.0
     */
    "organisation_customfield"      => "Campo Personalizado de Organização|Campos Personalizados de Organização",
    "recent_users"                  => "Utilizadores Recentes",
    "recent_organisations"          => "Organizações Recentes",
    "group_brand_desc"              => "Selecionar which brands the operators in this group will be able to view, create and delete (depending on permissions) tickets and other content.",
    "select_operators"              => "Selecionar operador(es)...",
    "select_groups"                 => "Selecionar grupo(s)...",
    "group_department_desc"         => "Assign all members of this group to departments, operators can also be assigned individually in the department settings.",
    "op_settings_group_dept"        => "Assigned to via operator groups:",
    "op_settings_group_dept_desc"   => "These departments are inherited automatically from the operator groups selected above. To assign via an operator group, edit the operator group or department settings.",
    "op_settings_individual_dept"   => "Assigned to individually:",
    "op_settings_individual_dept_desc" => "These departments are in addition to any departments the operator is assigned to via their groups above.",
    "also_registered_other_brand"   => "This user is also registered in the :brands brand.|This user is also registered in the :brands brands.",
    "signature"                     => "Assinatura|Assinaturas",
    "signature_desc"                => "Crie assinaturas de tickets pessoais, com a opção de personalizar as mesmas com base na marca ou departamento do ticket. A assinatura padrão é utilizada quando uma assinatura para uma marca ou departamento especifico não for detectada.",
    "operator_signature"            => "Assinatura de Operador|Assinaturas de Operador",
    "ticket_signature_desc"         => "Set the operator's default ticket signature.",
    "operator_signature_desc"       => "Further signatures for specific departments and/or brands can be set in the <a href=':route' target='_blank'>Operator Signatures</a> section.",
    "view_organisation"             => "Ver Organização",
    "new_owner"                     => "Novo Dono",
    "operator_role"                 => "Cargo de Operador|Cargos de Operador",
    "manage_users"                  => "Gerir Utilizadores",
    "manage_organisations"          => "Gerir Organizações",
    "manage_operators"              => "Gerir Operadores",
    "user_profile"                  => "User Profile",
    "organisation_access_level"     => "Nível de Acesso de Organização",
    "organisation_notifications"    => "Notificações da Organização",
    "organisation_users"            => "Utilizadores da Organização",
    "organisation_users_ticket"     => "Above is a list of your organisation's managers that will be also emailed updates about this ticket.",

    /*
     * 2.1.1
     */
    "change_password"               => "Alterar Password",
    "current_password"              => "Password Atual",
    "new_password"                  => "Nova Password",
    "personal_confirm_password"     => "Por favor confirme a sua password atual para definir uma nova.",

    /*
     * 2.1.2
     */
    "search_for_user_operator"      => "Pesquisar por utilizador/operador...",

    /*
     * 2.2.0
     */
    "user_name_format_desc"         => "O formato que é utilizado para mostrar o nome dos utilizadores em todo o sistema.",
    "operator_name_format_desc"     => "O formato que é utilizado para mostrar o nome dos operadores em todo o sistema.",

    /*
     * 2.3.0
     */
    "remove_from"                   => "Remover de :record?",
    "remove_from_warn"              => "Este procedimento irá remover o utilizador <strong>:name</strong> de :record.",

    /*
     * 2.3.1
     */
    "social_login"                  => "Autenticação Social",
    "login_via"                     => "Entrar através de :provider",
    "idp"                           => "IdP",
    "social_linking_login"          => "Please log in to complete linking of your social account.",
    "social_linking_register"       => "Please fill in the details below to complete registration of your account. Your social account will be automatically linked.",
    "already_registered"            => "Already registered?",
    "linked_accounts"               => "Linked Accounts",
    "unlink_account"                => "Unlink :record Account",
    "unlink_account_warning"        => "Unlinking the social account will mean it can no longer be used to log in directly to the account.",
    "failed_login"                  => "Failed Login|Failed Logins",
    "resend_confirmation"           => "<strong><a href=':link'>Click here</a></strong> to be sent a new confirmation email.",

    /*
     * 2.4.0
     */
    "must_have_permission"          => "must have \":permission\" permission",
    "deleted_user"                  => "Deleted User",
    "access_level_not_owner"        => "Não é possível alterar o nível de acesso do dono de uma organização. Transfira primeiro a titularidade da organização para outro utilizador visualizando a organização e clicando na aba 'Utilizadores'.",

    /*
     * 2.4.1
     */
    "select_or_new_organisation"    => "Selecione uma existente ou uma nova organização...",

    /*
     * 2.5.0
     */
    "organisation_domain_desc"      => "Inserir cada domínio pertencente a esta organização. Os utilizadores que se registem com um endereço de e-mail pertencente a um destes domínios será adicionado autoamticamente à organização. Recomendamos que verifique se o utilizador faz genuinamente parte da organização caso este não tenha confirmado a titularidade do endereço de e-mail.",
    "changing_email_desc"           => "Changing the email address will require the user to confirm ownership of their email address when they next login.",
    "unconfirmed_user_desc"         => "O utilizador não confirmou a titularidade deste e-mail.",
    "unregistered_user_desc"        => "Esta conta foi criada automaticamente sem uma password. Poderá abaixo enviar um e-mail de confirmação para que o utilizador possa configurar a sua conta ou definir uma password.",
    "send_confirmation_email"       => "Enviar E-mail de Confirmação",
    "mark_as_confirmed"             => "Marcar como Confirmado",
    "password_reset_already"        => "You have already confirmed ownership of this email address, you may proceed to login.",
    "unconfirmed_account"           => "Please check your email to confirm ownership of this email address.",
    "success_register_desc"         => "Thank you for registering an account. Please check your email to complete the account setup.",
    "resend_confirmation_sent"      => "A new confirmation email has been sent and should arrive in a few minutes.",
    "register_confirm_desc"         => "Thank you for confirming ownership of your email, please enter a password below to finish your account set up.",
    "thank_you_confirm"             => "Obrigado por confirmar a titularidade do seu endereço de e-mail.",
    "use_gravatar"                  => "Use Gravatar",
    "use_gravatar_desc"             => "Gravatar is a service which offers a globally recognised avatar to it's registered users. The help desk will automatically send a request to secure.gravatar.com with an MD5 hash of each user email address to assist in displaying an avatar. The MD5 hash may also be publicly visible in the frontend HTML. We recommend to update your privacy policy if enabling this feature.",

    /*
     * 2.6.0
     */
    "updating_email_address"        => "To complete the update of your email address, please click on the link sent to :email to confirm ownership of the new email address.",
    "confirmation"                  => "Confirmação",
    "confirmation_email_in_use"     => "The email address is already in use by another account.",
    "continue_to_login"             => "Por favor continue para <a href=':route'>efetuar autenticação</a>.",
    "reset_request_desc"            => "Caso tenha sido encontrada uma conta compatível, será enviado um e-mail para lhe permitir reconfigurar a password.",
    "password_reset_error"          => "O link poderá ter expirado. Se o seu link não está a funcionar por algum motivo, solicite por favor um novo.",

    /*
     * 3.0.0
     */
    "ldap_linked_error"             => "Account is linked to an LDAP service. Please log in using your LDAP username and password.",
    "operator_message"              => "Mensagens de Operador",
    "force_two_fa"                  => "Forçar 2FA",
    "force_two_fa_desc"             => "Force two-factor authentication (2FA) on all accounts. Any account without 2FA enabled will be taken through the steps to set it up when they next login.",
    "two_fa_required"               => "Two-factor authentication (2FA) is required. Please follow the information below to proceed.",
    "two_fa_user_enable"            => "The user can enable 2FA on their account in their settings.",

    /*
     * 3.3.0
     */
    "social_login_desc"             => "Allow users to register and log in using their social account.",
    "manage_social_login_options"   => "To add or manage social login options, please visit the <a href=\":route\">Third-Party Integrations</a> page.",

    /*
     * 3.4.0
     */
    "two_fa_verify_desc"            => "Download and install one of the following applications and scan the QR code or enter the secret key. This will set up your account on your device, you will then be able to view the account and it will generate a 6 digit code that you must enter to verify and complete the set up. Please ensure to click verify before the code expires. Your server time will need to be in sync with an NTP server to function properly.",
    "two_fa_successfully_enabled"   => "Two-factor authentication (2FA) has been successfully enabled.",

    /*
     * 3.5.0
     */
    "phone_number"                  => "Número de Telefone|Números de Telefone",

    /*
     * 3.6.0
     */
    "security_settings"             => "Definições de Segurança",
    "security_settings_desc"        => "Update your password, enable 2FA and manage other security related settings for your account.",
    "active_sessions"               => "Active Sessions",
    "active_sessions_desc"          => "This is a list of devices that have logged into your account, you may revoke any sessions that you do not recognise.",
    "current_session"               => "Current Session",
    "logged_in"                     => "Logged In",
    "revoke_session_desc"           => "Revoking a session will log the device out of the operator panel. It will also revoke all remember me tokens for other devices.",

    /**
     * 4.0.0
     */
    "verify_phone_number"           => "Verify Phone Number",
    "verify_phone_method"           => "Select the method you wish to verify your phone number.",
    "verify_phone_code_sent"        => "A verification code has been sent to your phone number, please enter this code below.",
    "verify_phone_code_send_error"  => "An error occurred while sending the verification code. Please try again later.",
    "verify_phone_code_error"       => "Code could not be verified.",
    "logged_in_as"                  => "Logged in as :name",

);
