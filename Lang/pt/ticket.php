<?php

return array(

    "feedback_question"         => "Questão a ser mostrada ao utilizador.",
    "open_new"                  => "Abrir um novo Ticket",
    "select_department"         => "Selecionar um Departamento",
    "select_department_desc"    => "Por favor clique no departamento pretendido para o seu contacto abaixo.",
    "no_departments"            => "Não foram encontrados departamentos.",
    "department_user_details"   => "Detalhes do Departamento e do Utilizador",
    "enter_your_details"        => "Insira os seus detalhes",
    "enter_ticket_details"      => "Inserir detalhes",
    "enter_subject_message"     => "Insira assunto e mensagem",
    "invalid_user"              => "Por favor, confirme que os dados de utilizador inseridos são válidos para continuar.",

    "registered_users"          => "Utilizadores registados apenas",

    "tickets"                   => "Ticket(s)",
    "ticket"                    => "Ticket|Tickets",
    "subject"                   => "Assunto",
    "no_subject"                => "Sem Assunto",
    "last_action"               => "Última Ação",
    "due_time"                  => "Prazo",
    "created_time"              => "Data de Criação",
    "submitted"                 => "Submetido",
    "ticket_reply"              => "Resposta ao Ticket",
    "ticket_note"               => "Nota do Ticket",
    "ticket_type"               => "Tipo de Ticket",

    "user_ticket"               => "Ticket de Utilizador",
    "user_ticket_desc"          => "Abrir novo ticket em nome de um Utilizador já existente ou de um novo Utilizador.",
    "existing_user"             => "Utilizador Existente",
    "new_user"                  => "Novo Utilizador",
    "internal"                  => "Interno",
    "internal_ticket_desc"      => "Abrir um ticket apenas para uso interno. Este ticket será associado a sí e não a um Utilizador.",
    "ticket_opened"             => "O seu ticket foi aberto com sucesso.",
    "enter_user_details"        => "Por favor insira os dados abaixo, ou autentique-se na sua conta se tiver uma.",
    "already_have_account"      => "Já tem uma conta, por favor efectue autenticação e abra posteriormente o ticket. Por favor utilize a funcionalidade de recuperação de password caso não se lembre dos dados de autenticação.",

    "recent_tickets"            => "Tickets recentes",
    "last_message_text"         => "Texto da Última Mensagem",

    "set_due_time"              => "Definir um prazo",

    "settings"                  => "Definições do Ticket",

    "priority"                  => "Prioridade|Prioridades",

    "channel"                   => "Canal|Canais",
    "account"                   => "Conta|Contas",

    "assign_operator"           => "Atribuir Operador",
    "assigned_operator"         => "Operadores Atribuídos",
    "assigned_to"               => "Atribuído a",
    "assigned"                  => "Atribuído",

    "department"                => "Departamento|Departamentos",
    "change_department_order"   => "Arraste as linhas para alterar a ordem em que os departamentos são mostrados aos utilizadores ao abrir um novo ticket.",
    "department_applicable"     => "Departamentos Aplicáveis",
    "department_applicable_desc" => "Os departamentos nos quais a prioridade estará disponível para os utilizadores seleccionarem. Aplica-se apenas ao FrontEnd, pois todas as prioridades estarão disponíveis para os operadores de todos os departamentos",

    "due_to_be_sent"            => "Prazo para ser enviado",
    "send_now"                  => "Enviar agora",

    "tag"                       => "Tag|Tags",

    "track_ticket"              => "Encontrar Ticket",
    "view_ticket"               => "Ver Ticket",

    // Recent activity
    "recent_activity"           => "Actividade Recente",

    "ticket_number"             => "Número do Ticket",
    "ticket_format"             => "Formato do Número do Ticket",

    // Departments
    "department_public_desc"    => "Se o departamento se encontra visível para os utilizadores na Web Help Desk",
    "department_parent_desc"    => "Se o departamento for um sub-departamento, selecionar qual o departamento pai. Os sub-departamentos destinam-se a escalonamento interno e gestão, por isso, definir isto irá remover algumas das opções abaixo.",
    "department_priority"       => "Prioridades de Departamento",
    "department_priority_desc"  => "As prioridades que estarão disponíveis aos utilizadores ao abrir um ticket neste departamento. Pelo menos uma terá de ser selecionada. Por defeito, todas as prioridades estarão disponíveis no departamento.",
    "department_no_format"      => "Opcional, defina apenas para substituir o formato do número do Ticket por defeito, caso contrário, deixe em branco.",
    "department_operator"       => "Operadores de Departamento",
    "department_default_assign" => "Atribuir, por defeito, a",
    "dept_default_assign_desc"  => "Utilize caso pretenda que os Tickets abertos neste departamento sejam automaticamente atribuídos a um ou mais operadores.",

    // Department emails
    "email_accounts_desc"       => "Configure endereços de e-mail para o departamento. Qualquer e-mail recebido para estes endereços de e-mail abrirá um ticket nesse departamento. O primeiro endereço de e-mail é utilizado como endereço de e-mail de remetente, por defeito, para e-mails de saída.",
    "department_port"           => "Os valores por defeito são: 110 para POP3, 995 para POP3 Seguro, 143 para IMAP, 993 para IMAP Seguro. Deixe em branco para utilizar o valor por defeito",
    "department_encryption"     => "Alguns provedores de e-mail exigem encriptação SSL ou TLS para se conectar. Se não tiver a certeza, deixe esta configuração como Nenhum",
    "department_delete_mail"    => "Caso esteja a utilizar IMAP, poderá optar por não excluir e-mails no servidor depois de importá-los como Tickets.",
    "protocol"                  => "Protocolo",
    "server"                    => "Servidor de E-mail",
    "port"                      => "Porta",
    "encryption"                => "Encriptação",
    "delete_downloaded"         => "Apagar e-mails descarregados",
    "consume_all"               => "Consumir todos os e-mails",
    "email_download"            => "Download E-mail",
    "email_piping"              => "Email Piping",
    "email_piping_desc"         => "Configure um redirecionamento de e-mail como o seguinte, o caminho do executável PHP pode ser diferente no seu servidor.",
    "remote_email_piping"       => "Email Piping Remoto",

    // Department email options
    "email_options"             => "Opções de Email",
    "email_user_on_email"       => "Utilizadores de e-mail em ticket abertos por e-mail",
    "email_user_on_email_desc"  => "Seleccione se os utilizadores devem ser notificados por e-mail quando um e-mail que eles enviaram resultar na abertura de um novo Ticket.",
    "email_operators"           => "Notificar os Operadores",
    "email_operators_desc"      => "Seleccione se pretende encaminhar as respostas do operador para outros operadores. Por defeito, verifica a opção \"Notificar os Operadores\" no painel do operador e enviará automaticamente um e-mail para respostas de e-mail por operadores.",
    // Department email templates
    "new_ticket_opened"         => "Novo Ticket Aberto",
    "reply_to_locked"           => "Responder a Ticket Bloqueado",
    "waiting_for_response"      => "Aguardando Resposta",
    "ticket_auto_closed"        => "Ticket Fechado Automaticamente",
    "closed_by_operator"        => "Fechado por Operador",

    // Feedback
    "feedback"                  => "Feedback",
    "feedback_form"             => "Formulário de Feedback|Formulários de Feedback",
    "feedback_form_desc"        => "Os Formulários de Feedback são processados na ordem em que aparecem. Arraste as linhas para reordenar e ajustar a prioridade dos Formulários de Feedback",
    "view_feedback"             => "Ver Feedback",
    "ticket_feedback"           => "Ticket Feedback",
    "feedback_fields_error"     => "Ocorreu um problema ao obter os campos de feedback.",
    "time_after_resolved"       => "Tempo depois de resolvido",
    "time_after_resolved_desc"  => "O tempo após o qual um ticket é marcado como resolvido para que o formulário de feedback seja enviado ao utilizador.",
    "expires_after"             => "Expira após",
    "expires_after_desc"        => "O tempo após o qual um formulário de feedback expirou e não já não poderá ser respondido. Embora recomendemos definir 7 dias, poderá inserir 0 em todos os campos para definir o tempo ilimitado de expiração.",
    "form_conditions"           => "Condições do Formulário",
    "form_conditions_desc"      => "Defina as condições do ticket para as quais os tickets resolvidos recentemente são verificados para ver se eles se enquadram neste formulário. Se um ticket resolvido cabe em vários formulários, ele será seleccionado na prioridade do formulário, que pode ser modificada indo para a lista de formulários e reordenando.",
    "form_fields"               => "Campos do Formulário",
    "rating"                    => "Avaliação",
    "feedback_desc"             => "Obrigado por nos contactar, esperamos ter resolvido a sua questão. Se possível, por favor, gostaríamos que avaliasse abaixo a sua experiência.",
    "good_satisfied"            => "Bom, estou satisfeito",
    "bad_not_satisfied"         => "Mau, não estou satisfeito",
    "feedback_not_found"        => "Não foi possível aceitar o seu feedback, por favor, abra um novo ticket com a nossa equipa caso pretenda partilhar o seu feedback.",
    "feedback_malformed_token"  => "Não foi possível aceitar o seu feedback devido a uma má formação do Token. Por favor, abra um novo ticket com a nossa equipa caso pretenda partilhar o seu feedback.",
    "feedback_already_done"     => "Você já forneceu o seu feedback para este Ticket, Obrigado.",
    "feedback_expired"          => "O ticket já foi resolvido há algum tempo e, infelizmente, já não é possível efectuar a sua avaliação.",
    "feedback_questions"        => "Caso seja possível dispensar alguns minutos, por favor responda às seguintes questões para nos ajudar a melhorar ainda mais o suporte que oferecemos.",
    "feedback_thank_you"        => "Obrigado por fornecer o seu feedback sobre este Ticket",
    "feedback_for_ticket"       => "Feedback para o Ticket #:number",
    "feedback_rating_desc"      => "O suporte recebido neste Ticket foi avaliado como <strong>:rating</strong> pelo utilizador.",

    // Custom fields
    "customfield"               => "Campo de Ticket Personalizado|Campos de Tickets Personalizados",
    "customfield_order"         => "Arraste as linhas para alterar a ordem pela qual os campos personalizados são exibidos aos utilizadores ao abrir tickets pela Web",

    // Canned responses
    "cannedresponse"            => "Resposta Pré-definida|Respostas Pré-definidas",

    // Filters
    "filter"                    => "Filtro|Filtros",
    "filter_condition"          => "Condições de Filtro",
    "filter_condition_desc"     => "Defina as condições para as quais os tickets são listados neste filtro",

    // Macros
    "macro"                     => "Macro|Macros",
    "macro_condition"           => "Condições de Macro",
    "macro_action"              => "Ações de Macro",
    "macro_action_desc"         => "Defina as ações que são executadas quando uma Macro é executada. Certifique-se de que as ações são válidas para o departamento em que o Ticket se encontra, ou então elas serão ignoradas.",

    "from"                      => "De",
    "to"                        => "Para",
    "cc"                        => "CC",

    "allowed_files"             => "Tipo de Ficheiros de anexo permitidos",

    // Drafts
    "also_viewing"              => "<strong>:name</strong> também está a ver o Ticket",
    "draft_saved"               => "Rascunho guardado há :time",
    "save_draft"                => "Guardar Rascunho",
    "discard_draft"             => "Descartar Rascunho",

    // Locked
    "error_ticket_locked"       => "Este ticket foi bloqueado e não pode ser actualizado novamente. Abra um novo ticket caso necessite de suporte adicional.",

    // Ticket Followups
    "follow_up"                 => "Follow Up",
    "follow_up_status_desc"     => "Defina o ticket com um status diferente até à data do Follow Up",
    "exact_date_time"           => "Data e Hora exactas",
    "time_from_now"             => "Tempo a partir de agora",

    // Schedule
    "schedule"                  => "Horário|Horários",
    "business_hour"             => "Horário Útil",
    "business_hour_desc"        => "O horário útil indica os horários em que os funcionários estão disponíveis para esclarecer questões. As horas são tidas em consideração quando é calculado o prazo dos Tickets.",

    // Holidays
    "holiday"                   => "Holiday|Holidays",
    "holiday_or_on_the"         => "or, on the",
    "holiday_month_year_desc"   => "Year is optional if the holiday is recurring. Select a year only if the holiday happens on this date in a particular year.",

    // SLA Plans
    "sla_plan"                  => "SLA Plan|SLA Plans",
    "specific_schedule"         => "Specific Schedules",
    "calendar_hours_24"         => "Calendar Hours (24 Hours)",
    "resolution_time"           => "Resolution Times",
    "resolution_time_desc"      => "Set times that a ticket must be responded to by and resolved by per priority. The time will be counted only during business hours based on the schedule(s) chosen, decimal values can be used.",
    "reply_within"              => "Reply within",
    "resolve_within"            => "Resolve within",
    "plan"                      => "Plan",
    "sla_condition"             => "SLA Conditions",
    "sla_condition_desc"        => "Define the ticket conditions for which new tickets are checked to see if they fall under this plan. If a new ticket fits multiple SLA plans, it will be selected on plan priority, which can be modified by going to the list of plans and reordering.",
    "escalation_rule"           => "Escalation Rules",
    "escalation_rule_desc"      => "Define actions that are carried out when a ticket under this SLA plan is close to or has become overdue. Please ensure rules are valid for the department the ticket is in or else they will be ignored.",
    "condition"                 => "Condição",
    "condition_group"           => "Grupo de Condições",
    "all_groups"                => "ALL groups must be true",
    "any_group"                 => "ANY group can be true",
    "all_conditions"            => "ALL conditions in group must be true",
    "any_condition"             => "ANY condition in group can be true",
    "sla_plan_desc"             => "SLA Plans are processed in the order they appear. Drag the rows to reorder and adjust the priority of the SLA Plans.",

    // Reply options
    "reply_options"             => "Opções de resposta",
    "send_email_to_users"       => "Enviar e-mail ao utilizador(es)",
    "send_email_to_operators"   => "Enviar e-mail ao operador(es)",
    "back_to_grid"              => "Voltar à lista de Tickets",
    "take"                      => "Assumir",
    "take_ownership"            => "Assumir Titularidade",
    "pause_duetime"             => "Pausar Prazo",
    "add_to_canned_responses"   => "Adicionar a Respostas Pré-Definidas",
    "visible_to_all_operators"  => "Tornar visível para todos os operadores",
    "set_status"                => "Definir Estado",
    "add_selfservice_link"      => "Adicionar Link Self-Service",
    "search_selfservice"        => "Pesquisar por um artigo Self-Service",
    "search_canned"             => "Pesquisar por Resposta Pré-Definida",

    "mark_resolved"             => "Marcar como Resolvido",

    "ticket_signature"          => "Assinatura de Ticket",

    "default_open_status"       => "Status de Aberto por Defeito",

    "default_resolve_status"    => "Status Resolvido por Defeito",
    "default_resolve_status_desc" => "Seleccione o status por defeito que é utilizado para tickets que foram resolvidos.",

    "waiting_response_time"      => "A aguardar pelo e-mail de resposta",
    "waiting_response_time_desc" => "O tempo após o qual os utilizadores recebem um e-mail acerca de tickets inativos, questionando se eles consideram o ticket resolvido. Defina como 0 para desactivar este e-mail.",

    "close_inactive_tickets"    => "Fechar Tickets Inativos",
    "close_inactive_tickets_desc" => "O tempo após o qual os tickets inativos são fechados automaticamente. Defina 0 para nunca fechar os tickets automaticamente.",

    "ticket_reply_order"        => "Ordem de resposta de ticket",
    "ticket_reply_order_desc"   => "Selecione a ordem em que as mensagens do ticket são mostradas, ascendente onde a última mensagem é a última ou descendente onde a última mensagem é a primeira.",

    "ticket_notes_position"     => "Posição das notas do ticket",
    "ticket_notes_position_desc" => "Seleccione onde, na visualização do ticket, as notas do ticket são mostradas.",
    "ticket_notes_top_messages" => "No topo e nas mensagens",
    "ticket_notes_top"          => "Apenas no topo",
    "ticket_notes_messages"     => "Apenas nas mensagens",

    "captcha_desc"              => "Quando o Captcha deve ser mostrado aos utilizadores que abrem novos tickets.",
    "unregistered_only"         => "Apenas utilizadores não registados",

    "allow_unauth_users"        => "Permitir utilizadores não autenticados",
    "allow_unauth_users_desc"   => "Permitir que os utilizadores não autenticados vejam e respondam aos tickets. Desactivar a opção também removerá a funcionalidade de track ticket e os utilizadores irão necessitar de estar registados e autenticados antes de poder aceder aos tickets.",

    "default_department"        => "Departamento por Defeito",
    "default_department_desc"   => "O departamento por defeito definido em todos os tickets recebidos por este canal.",

    "show_related_articles"     => "Mostrar Artigos Relacionados",
    "show_related_articles_desc" => "Quando o utilizador escreve o assunto, podem ser mostrados artigos relacionados com base no que ele inseriu. Requer que o módulo de Self-Service esteja activo e o Mysql 5.6+.",

    // Email Channel Settings
    "default_priority"          => "Default Priority",
    "default_priority_desc"     => "The default priority set on all incoming tickets via this channel.",
    "verbose_email_log"         => "Verbose Email Log",

    "last_reply"                => "Última Resposta",
    "opened_at"                 => "Aberto Em",

    "change_department"         => "Alterar Departamento",
    "change_status"             => "Alterar Estado",
    "no_statuses"               => "No statuses found. Click <a href=':route'>here</a> to create one.",
    "no_priorities"             => "No priorities found. Click <a href=':route'>here</a> to create one.",
    "no_templates"              => "No custom email templates found. Click <a href=':route'>here</a> to create one.",
    "no_tags"                   => "No ticket tags found. Click <a href=':route'>here</a> to create one.",
    "no_departments_found"      => "No departments found. Click <a href=':route'>here</a> to create one.",
    "no_operators_found"        => "No operators found. Click <a href=':route'>here</a> to create one.",
    "change_priority"           => "Alterar Prioridade",
    "add_tag"                   => "Adicionar Tag",

    "unlock"                    => "Desbloquear",
    "merge"                     => "Juntar",
    "merged"                    => "Unido",
    "unmerge"                   => "Separar",
    "close_and_lock"            => "Fechar & Bloquear",

    "mass_reply"                => "Mass Reply",

    "due_today"                 => "Vencendo Hoje",
    "overdue"                   => "Expirado",
    "unassigned"                => "Não Atribuído",

    "pause_duetime_desc"        => "If there is an active SLA plan on this ticket, pause the remaining due time until after the follow up date. The due time will only start again once a reply or note has been added to the ticket (including from the follow up).",

    "add_cc"                    => "Adicionar CC",
    "reply_above_line"          => "Por favor responda acima desta linha",

    "email_settings"            => "Email Settings",
    "web_settings"              => "Web Settings",
    "split_selected_replies"    => "Split Selected Replies",

    "track_ticket_not_found"    => "Could not find ticket with ticket number and user email address entered.",

    "channel_deactivated"       => "The ticket channel is currently deactivated, a reply cannot be posted.",

    "type_in_tags"              => "Escrever tags",

    /*
     * 2.0.1
     */
    "allowed_files_desc"        => "A list of file extensions, separated by the pipe | character, that are permitted as attachments. For example: txt|png|jpg. To allow all attachments, input: ?.*",

    /*
     * 2.0.2
     */
    "no_operator_groups"        => "No operator groups found. Click <a href=':route'>here</a> to create one.",
    "no_user_groups"            => "No user groups found. Click <a href=':route'>here</a> to create one.",
    "remote_email_piping_desc"  => "Download the <a href='http://www.supportpal.com/manage/dl.php?type=d&id=8' target='_blank'>remote email piping script</a> and follow the <a href='https://docs.supportpal.com/current/Remote+Email+Piping' target='_blank'>documentation</a> on configuring it on your mail server.",

    /*
     * 2.0.3
     */
    "department_consume_all"    => "By default, SupportPal has email alias support and will check the TO address on incoming email to see which department the ticket should be opened in, a ticket is not opened if a matching department email address cannot be found. Enabling this setting will mean all emails without a matching department email address are imported as tickets in this department.",
    "default_reply_options"     => "Opções Padrão de Resposta",
    "default_reply_options_desc" => "Selecione as opções pré-definidas de resposta para serem definidas quando abre ou responde a um ticket. A opção ':reply_option' será selecionada com base na definição ':department_option' do departamento.",
    "associate_response_tag"    => "Associate canned response with a tag...",
    "canned_response_tags_desc" => "Add tags which may help finding a canned response when replying to a ticket.",
    "loading_tags"              => "Loading tags",
    "append_ip_address"         => "Append IP Address",
    "append_ip_address_desc"    => "Append the IP address of users to their messages when they are opening and replying to tickets from the frontend.",
    "unassign_operator"         => "Unassign Operator",
    "remove_tag"                => "Remove Tag",
    "message_clipped"           => "[Message Clipped]",
    "view_entire_message"       => "View entire message",
    "no_custom_fields"          => "No custom fields found. Click <a href=':route'>here</a> to create one.",
    "follow_up_active"          => "A <a class='view-followup' style='text-decoration: underline;'>follow up</a> is currently active on this ticket and will run <strong>:time</strong>.",
    "disable_user_email_replies" => "Disable User Email Replies",

    /*
     * 2.1.0
     */
    "default_ticket_filter"     => "Filtro de Ticket Padrão",
    "default_ticket_filter_desc" => "O filtro de tickets que é utilizado por defeito quando clica em 'Gerir Tickets'. Pode ser definido para 'Nenhum', a opção padrão, que mostrará todos os tickets por resolver.",
    "recent_filters"            => "Filtros Recentes",
    "inactive_tickets"          => "Inactive Tickets",
    "default_open_status_desc"  => "Select the default status that should be automatically set when a user opens a new ticket or replies to a ticket without an operator response yet.",
    "default_reply_status"      => "Default Reply Status",
    "default_reply_status_desc" => "Select the default status that should be automatically set when a user replies to a ticket, only applies after an operator has replied to the ticket.",
    "ticket_reply_order_default" => "System default will use the value that is currently selected in the ticket general settings.",
    "select_a_parent"           => "Select a parent department...",
    "select_a_department"       => "Selecionar um departamento...",
    "department_operator_desc"  => "You may also assign individual operators to the department. These operators will be in addition to any groups assigned above.",
    "department_group"          => "Department Groups",
    "department_group_desc"     => "You may assign whole operator groups to the department, recommended if your list of operators is large and/or changes frequently.",
    "ticket_other_brands"       => "Tickets in Other Brands",
    "add_for_department"        => "Adicionar para departamento...",
    "record_order"              => "Drag the rows to change the order of records.",
    "reply_all"                 => "Reply All",
    "reply_without_cc"          => "Reply (without CC)",
    "email_accounts"            => "Email Accounts",
    "add_another_email"         => "Add Another Email Address",
    "follow_up_date"            => "Data de Follow Up",
    "post_reply"                => "Submeter Resposta",
    "post_note"                 => "Submeter Nota",
    "ticket_details"            => "Detalhes do Ticket",
    "organisation_tickets"      => "Organisation Tickets",
    "manage_tickets"            => "Gerir Tickets",
    "via_channel"               => "via :channel",
    "department_parent"         => "Department Parent",
    "department_brands"         => "Department Brands",
    "email_item"                => "Email :item",
    "from_name"                 => "From Name",
    "from_address"              => "From Address",

    /*
     * 2.1.1
     */
    "edited_message"            => ":user at :date",
    "prioritise_reply-to"       => "Prioritise Reply-To",
    "prioritise_reply-to_desc"  => "Toggle to prioritise the Reply-To header over the From header. If enabled, tickets opened via email will be opened on behalf of the Reply-To name and address.",
    "note_options"              => "Note Options",
    "escalation_rules_desc"     => "The below SLA plan escalation rules are scheduled to run after the times listed. These times may change or the rules may be removed if an operator replies to this ticket.",

    /*
     * 2.1.2
     */
    "not_registered_user"       => "Not a registered user. Email channel settings set to only import emails from registered users.",
    "display_name"              => "Email Display Name",
    "display_name_desc"         => "Optional, only set to override the display name used on outgoing emails from this department, leave blank otherwise.",
    "display_name_options"      => "The following Twig variables may be used:<br >{{ brand.name }} - Brand name<br />{{ department.name }} - Department Name<br />{{ department.frontend_name }} - Shows the parent department name, if ticket belongs to a sub-department.<br />{{ operator.formatted_name }} - Operator Name<br /><em>The operator name won't always be available, so wrap it in a 'not empty' conditional i.e. {% if operator is not empty %}{{ operator.formatted_name }}{% endif %}</em>",
    "attachment_rejected"       => "Attachment Rejected",
    "enable_subaddresses"       => "Enable Sub-addresses",
    "enable_subaddresses_desc"  => "Toggle to enable using email sub-addressing for all departments. This will create a unique sub-address for each ticket that is set as the Reply-To address on all outgoing email. Your mail server must be able to handle sub-addressing, additional steps may be required if you are using email piping to ensure emails to these addresses are forwarded correctly. Enabling this will allow you to remove the ticket number from the subject of email templates.",
    "email_replies_disabled"    => "Email Replies Disabled",
    "disable_user_email_replies_desc" => "Enable to block email replies from users, and also remove the reply clipping line from outbound ticket emails. By default, the email will be silently ignored, but you can set an email to be sent to the user by changing the selected email template for the 'Email Replies Disabled' option below.",
    "bcc"                       => "BCC",
    "assigned_to_ticket"        => "Assigned to Ticket",
    "user_ticket_reply"         => "User Ticket Reply",
    "new_internal_ticket"       => "New Internal Ticket",
    "department_changed"        => "Department Changed",
    "operator_ticket_reply"     => "Operator Ticket Reply",
    "new_ticket_note"           => "New Ticket Note",
    "email_template_desc"       => "You may select an email template other than the default to be sent to the user or operators for any of the actions below. This template will become the default for this department only.",
    "create_new_user"           => "Create new user",
    "user_reply_internal_ticket" => "Not an operator. Only operators can reply to internal tickets.",
    "enter_email_address"       => "Inserir endereço de e-mail...",
    "email_user_frontend"       => "Email Users on Tickets Opened at Frontend",
    "email_user_frontend_desc"  => "Select whether users should be notified by email when they open a ticket themselves on the frontend.",
    "department_template_disabled" => "The relevant department email template is disabled, so this email cannot be sent.",
    "verbose_email_log_desc"    => "If email collection should be logged on file, recommended to keep disabled unless instructed by support for debugging. Five days worth of logs are stored, older log files will be purged automatically by the system.",

    /*
     * 2.2.0
     */
    "user_ticket_existing_desc" => "Open new ticket on behalf of an existing user.",
    "canned_response_tag"       => "Canned Response Tag|Canned Response Tags",
    "response"                  => "Response|Responses",
    "response_desc"             => "The canned response can be written in several languages. The appropriate response will be used automatically based on the user's language preference.",
    "no_slaplans"               => "No SLA plans found. Click <a href=':route'>here</a> to create one.",
    "filter_performance"        => "Performance considerations and recommendations",
    "filter_performance_desc"   => "<li>Filters that match more tickets will be slower, in most cases try to exclude resolved tickets.</li><li>Filters using 'is not' conditions will usually be slower than using 'is' conditions.</li><li>Filters checking for NULL values (e.g. Ticket tag is None) will be slower.</li><li>Avoid multiple conditions that involve checking strings/words as they introduce more complexity.</li><li>Filters using 'begins with' or 'contains' conditions will generally be slower than using 'equals' or 'ends with' conditions.</li><li>Resolved tickets are excluded from the counts shown in the sidebar.</li>",
    "run_macro"                 => "Run Macro",
    "run_macro_desc"            => "<strong>:macro</strong><br /><em>:description</em>",

    /*
     * 2.3.0
     */
    "registered_users_desc"     => "Toggle to only show the department to logged in users and only accept emails from users actively registered in the help desk. If enabled, a bounce back email will be sent to unregistered users who email this department, to change or disable the email please see the 'Registered Users Only' template option below.",
    "form_fields_desc"          => "If you'd like to collect additional information when the user provides their feedback, you may set up custom fields to show on the form here. The field type will be locked once the form has been completed by a user.",
    "feedback_ratings"          => "Customer Satisfaction Ratings (affecting your Customer Satisfaction score)",
    "email_and_other_accounts"  => "Email and other channel accounts",
    "delete_message"            => "Eliminar mensagem",
    "linked_tickets"            => "Tickets Associados",
    "add_linked_ticket"         => "Adicionar Ticket Associado",
    "create_linked_ticket"      => "Criar Ticket Associado",
    "copy_link"                 => "Copiar link",
    "forward_message"           => "Redirecionar esta mensagem",
    "forward_from_here"         => "Redirecionar ticket daqui",
    "forward"                   => "Redirecionar",
    "forward_options"           => "Opções de Redirecionamento",
    "forwarded_to"              => "Redirecionar para",
    "new_operator_reply"        => "Nova Resposta de Operador",
    "new_user_reply"            => "Nova Resposta de Utilizador",
    "add_bcc"                   => "Adicionar BCC",
    "at_least_one_recipient"    => "Por favor especifique pelo menos um destinatário.",
    "forwarded_message"         => "---------- Mensagem Redirecionada ----------",

    /*
     * 2.3.1
     */
    "inactive_ticket_note"      => "Note: only affects tickets belonging to a status with 'Close Inactive Tickets' enabled.",
    "close_inactive_status_desc" => "Toggle to enable/disable automatic closure of inactive tickets and inactivity email reminders ('Waiting For Response' and 'Ticket Auto Closed' templates). If enabled, the time before reminders are sent can be configured via the ticket general settings.",
    "from_header_missing"       => "From: header missing from email.",
    "move_ticket"               => "Move Ticket",
    "move_ticket_step1"         => "Step 1: Choose a new brand to move ticket to",
    "move_ticket_step2"         => "Step 2: Choose a department from new brand",
    "current_record"            => "Current :record",
    "new_record"                => "New :record",
    "department_email"          => "Department Email",
    "select_a_department_email" => "Select a department email...",
    "record_public_desc"        => "Toggle to only let the :record be accessible by yourself.",
    "record_group_desc"         => "If you wish to make the :record visible to only certain operator groups. Leave blank to make visible to all operators.",
    "ticket_format_desc"        => "Can contain alphanumeric characters and special characters <code>-_.+!*,</code><br />The following variables may also be used: %S for a sequential number | %N for a random number | %L for a random letter<br />Use {number} to repeat <strong>only</strong> after %N or %L, e.g. %N{4} equates to 4 random numbers, %L{3} equates to 3 random letters<br />The following <a href='http://php.net/manual/en/function.date.php' target='_blank'>PHP Date</a> Parameters prefixed with % Y,y,m,d,j,g,G,h,H,i,s",

    /*
     * 2.4.0
     */
    "macro_enabled_desc"        => "Toggle to disable the macro and prevent it from running automatically or showing in the ticket interface.",
    "macro_order_drag"          => "Drag the rows to change the order of the macros.",
    "macro_order_processed"     => ":type macros are processed in the order they appear.",
    "macro_type"                => "Macro Type",
    "macro_type_desc"           => "There are three types of macros available. Manual macros can only be ran from the ticket view or grid, automatic macros run on unresolved tickets every hour, and hook macros run on specified ticket events. Automatic and hook macros can also be set to only run within specific schedules. Any hook macro actions won't trigger other hook macros to avoid the risk of loops.",
    "macro_run_at_most"         => "Run At Most",
    "macro_run_times"           => "times", // As in '5 times'
    "macro_run_at_most_desc"    => "Limit how many times an automatic macro can run on a single ticket, leave blank to let it run an unlimited number of times.",
    "macro_events_desc"         => "Select one or more events that the macro should run on. The conditions set below will be checked before the macro runs.",
    "macro_schedules_desc"      => "By default the macro will run 24/7, but you can select one or more help desk schedules so the macro is only active during those times.",
    "macro_condition_desc"      => "Define the conditions for which tickets this macro will be available to. By default, with no conditions, it will apply to all tickets. At least one condition must be defined for automatic macros.",
    "add_remove_headers"        => "Adicionar/Remover Headers",
    "webhook_merge_fields"      => "Merge fields podem ser utilizados no URL e campo de conteúdo, <a href=\"https://docs.supportpal.com/current/Merge+Fields\">ler mais</a>.",
    "webhook_ticket_required"   => "A ticket must exist for this functionality to work.",
    "not_permitted"             => "Sorry, you're not permitted to view the requested ticket(s). If you think this has been shown in error, please contact your administrator.",
    "watch"                     => "Seguir",
    "unwatch"                   => "Deixar de Seguir",
    "watching"                  => "Seguindo",
    "internal_ticket"           => "Ticket Interno|Tickets Internos",

    /*
     * 2.4.1
     */
    "downloading"               => "Downloading...",
    "downloading_desc"          => "If the download doesn't start automatically in a few seconds, please <a href=':href'>click here</a> to access the download URL directly.",

    /*
     * 2.5.0
     */
    "belonging_to"              => "(Pertencente a :name)",
    "block_user"                => "Bloquear Utilizador",
    "merge_tickets"             => "Juntar Tickets",

    /*
     * 2.5.1
     */
    "channel_account_removed"   => "The ticket channel account has been deactivated or removed, a reply cannot be posted.",

    /*
     * 2.6.0
     */
    "follow_ups"                => "Follow Ups",
    "follow_up_multiple_active" => "Multiple <a class='view-followup' style='text-decoration: underline;'>follow ups</a> are currently active on this ticket and the next scheduled will run <strong>:time</strong>.",
    "follow_up_no_actions"      => "The follow up has no actions set, please confirm if you'd like to continue.",
    "status_after_running"      => "Estado após Executado",
    "older_messages"            => ":count older messages",
    "holiday_single_day"        => "Single Day",
    "holiday_date_range"        => "Date Range",

    /*
     * 3.0.0
     */
    "merge_tickets_into"        => "Selecionar ticket para juntar a",
    "search_number_or_subject"  => "Pesquisar por número de ticket ou assunto",
    "im_not_sure"               => "Não tenho a certeza",
    "auto_reply_detected"       => "Auto-reply detetado - não serão enviadas notificações para este utilizador(es).",
    "cc_desc"                   => "Poderá adicionar outras pessoas em CC neste ticket inserindo aqui os endereços de e-mail.",

    /*
     * 3.2.0
     */
    "drafting_message"          => "<strong>:name</strong> was drafting a message",

    /*
     * 3.3.0
     */
    "email_setup_manually"      => "Definir Manualmente",
    "unresolved"                => "Por Resolver",
    "resolved"                  => "Resolvido",
    "manage_oauth_options"      => "To add or manage OAuth options, please visit the <a href=\":route\">Third-Party Integrations</a> page.",

);