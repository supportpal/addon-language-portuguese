<?php

return array(

    // Standard messages
    "item_created"                      => "Criado novo :item :rel.",
    "item_updated"                      => "Actualizado :item :rel.",
    "item_deleted"                      => "Exluído :item :rel.",

    // Custom messages
    "ip_ban_created"                    => "Criada nova :rel.",
    "ip_ban_updated"                    => "Criada nova proibição ao IP :rel.",
    "ip_ban_deleted"                    => "Removida proibição ao IP :rel.",
    "banned_ip_on_login"                => "Banido IP :rel por 15 minutos.",

    "ip_whitelist_created"              => "Adicionado IP :rel á whitelist.",
    "ip_whitelist_updated"              => "Actualizado IP :rel na whitelist.",
    "ip_whitelist_deleted"              => "Excluido IP :rel da whitelist.",

    "system_cleanup"                    => "Efectuda limpeza de sistema a :rel.",

    "api_failed_login"                  => "O IP :rel falhou a autenticação na API.",

    "user_successful_login"             => "Autenticado no helpdesk.",
    "user_failed_login"                 => "Falhou a autenticação.",
    "user_successful_logout"            => "Saiu do helpdesk.",

    "user_registered"                   => "Registou uma conta",
    "user_confirmed"                    => "Confirmou a conta.",
    "user_password_set"                 => "Definiu uma password para a conta",
    "user_password_reset"               => "Efectuou reset a password",

    "user_added_to_organisation"        => "Utilizador :rel adicionado a organização :new_value.",
    "user_removed_from_organisation"    => "Utilizador :rel removido da organização :old_value.",
    "user_profile_updated"              => "Perfil da conta actualizado.",
    "user_left_organisation"            => "Deixou a orgalização :rel.",
    "user_organisation_emptied"         => "Todos os utilizadores removidos da organização :rel.",
    "user_organisation_updated"         => "O nivel de acesso da organização de :rel passou de :old_value para :new_value.",
    "organisation_membership_updated"   => "Actualizada relação do utilizador com a organização :rel.",
    "organisation_profile_updated"      => "Actualizado perfil da organização :rel.",
    "organisation_owner_updated"        => "Organização transferida :rel para propriedade de :new_value.",

    "user_emailed"                      => "Enviado email para :rel.",

    "mass_email_queued"                 => ":new_value emails colocados em fila para entrega.",
    "mass_email_sent"                   => "Enviados :new_value emails da fila.",

    "email_queue_deleted"               => "Email na fila excluído para :rel.",

    "scheduled_task_run"                => "Tarefa agendada :rel foi executada de forma manual.",

    "selfservice_article_upvoted"       => "Avaliação positiva do artigo :rel.",
    "selfservice_article_downvoted"     => "Avaliação negativa do artigo :rel.",
    "selfservice_comment_posted"        => "Colocado novo :rel.",
    "selfservice_comment_upvoted"       => "Classificação positiva a :rel de :old_value para :new_value.",
    "selfservice_comment_downvoted"     => "Classificação negativa a :rel de :old_value para :new_value.",

    "ticket_opened"                     => "Aberto novo ticket #:rel.",
    "ticket_opened_on_behalf"           => "Aberto novo ticket #:rel em nome de :new_value.",
    "ticket_opened_email"               => "Ticket importado por email #:rel.",

    "ticket_followup_set"               => "Um acompanhamento foi configurado no ticket #:rel.",
    "ticket_followup_updated"           => "O acompanhamento do ticket #:rel foi actualizado.",
    "ticket_followup_deleted"           => "O acompanhamento do ticket #:rel foi eliminado.",

    "ticket_message_reply"              => "Inserida nova resposta no ticket #:rel.",
    "ticket_message_note"               => "Inserida nova nota no ticket #:rel.",
    "ticket_message_deleted"            => "Eliminada uma mensagem no ticket #:rel.",

    "ticket_user_updated"               => "Actualizado o utilizador do ticket #:rel de :old_value para :new_value.",
    "ticket_subject_updated"            => "Actualizado o assunto do ticket #:rel.",
    "ticket_department_updated"         => "Actualizado o departamento do ticket #:rel de :old_value para :new_value.",
    "ticket_status_updated"             => "Actualizado o estado do ticket #:rel de :old_value para :new_value.",
    "ticket_priority_updated"           => "Actualizada a prioridade do ticket #:rel de :old_value para :new_value.",
    "ticket_tag_added"                  => "Adicionada tag :new_value ao ticket #:rel.",
    "ticket_tag_updated"                => "Tags actualizadas no ticket #:rel.",
    "ticket_tag_removed"                => "Removida tag :new_value do ticket #:rel.",
    "ticket_slaplan_updated"            => "Actualizado plano SLA no ticket #:rel de :old_value para :new_value.",
    "ticket_duetime_updated"            => "Actualizado prazo do ticket #:rel para :new_value.",
    "ticket_duetime_paused"             => "Pausado o prazo do ticket #:rel até resposta do utilizador.",
    "ticket_customfield_updated"        => "Actualizados campos personalizados no ticket #:rel.",
    "ticket_converted_user"             => "Ticket interno #:rel convertido para ticket de utilizador.",
    "ticket_converted_internal"         => "Ticket de utilizador #:rel convertido em ticket interno.",

    "ticket_assigned_operator"          => "Atribuido operador :new_value ao ticket #:rel.",
    "ticket_unassigned_operator"        => "Retirado operador :new_value do ticket #:rel.",
    "ticket_assigned_self"              => "Auto atribuido ao ticket #:rel.",
    "ticket_assigned_updated"           => "Actualizados operadores atribuidos ao ticket #:rel.",

    "ticket_locked"                     => "Ticket #:rel bloqueado.",
    "ticket_unlocked"                   => "Ticket #:rel desbloqueado.",
    "ticket_locked_reply"               => "Resposta não pôde ser adicionada ao ticket bloqueado #:rel.",

    "ticket_merged"                     => "Ticket :new_value acoplado ao ticket #:rel.",
    "ticket_unmerged"                   => "Ticket :rel separado.",

    "ticket_user_blocked"               => "Email bloqueado :new_value (do utilizador no ticket #:rel).",

    "ticket_closed"                     => "Ticket #:rel foi fechado.",
    "ticket_inactive_closed"            => "Fechado ticket inactivo #:rel. Estado anterior :old_value.",
    "ticket_awaiting_response"          => "Enviado email de aguardando resposta para o utilizador no ticket #:rel.",

    "ticket_split_from"                 => "Mensagens separadas do ticket #:rel para o novo ticket #:new_value.",
    "ticket_split_to"                   => "Mensagens separadas do ticket #:old_value para o novo ticket #:rel.",

    "ticket_email_user"                 => "Email enviado ao utilizador.",
    "ticket_email_operators"            => "Enviado email aos operadores.",

    "ticket_feedback_dequeued"          => "Removido o pedido de formulário de feedback para o ticket #:rel da fila.",
    "ticket_feedback_form_sent"         => "Enviado formulário de feedback para o ticket #:rel.",

    "ticket_attachment_saved"           => "Adicionado anexo ao ticket #:rel.",
    "ticket_attachment_deleted"         => "Eliminado anexo do ticket #:rel.",

    "ticket_throttled"                  => "Rejeitado novo ticket de :rel devido a limitação.",

    /*
     * 2.0.2
     */
    "ticket_email_operator_group"       => "Enviado email ao grupo de operadores :new_value.",
    "ticket_email_user_group"           => "Enviado email ao grupo de utilizadores :new_value.",

    /*
     * 2.0.3
     */
    "selfservice_attachment_saved"      => "Adicionado anexo ':new_value' ao artigo ID :rel.",
    "selfservice_attachment_deleted"    => "Eliminado anexo ':new_value' do artigo ID :rel.",
    "ticket_unassigned_self"            => "Auto-removido do ticket #:rel.",

    /*
     * 2.1.0
     */
    "ticket_brand_disabled_reply"       => "Resposta não pode ser adicionada, devido to ticket pertencer a uma marca desactivada #:rel.",
    "personal_signatures_updated"       => "Actualizadas as assinaturas pessoais.",
    "operator_signatures_updated"       => "Actualizadas as assinaturas de :rel.",
    "check_email_failed"                => "Erro: Falhou o download do email da conta :old_value: ':rel'.",
    "ticket_added_cc"                   => "Email(s) :new_value adicionado endereço cc para o ticket #:rel.",
    "ticket_removed_cc"                 => "Email(s) :old_value removido endereço cc para o ticket #:rel.",
    "invalid_department_brand"          => "Falhou alteração do departmento ':new_value' no ticket #:rel, o departamento não pertence à marca do ticket.",

    /*
     * 2.1.1
     */
    "ticket_message_updated"            => "Actualizada a mensagem :message_id no ticket #:rel.",

    /*
     * 2.1.2
     */
    "sent_email_to"                     => "Enviado um email com o assunto ':extra_rel1' para :rel.",
    "sent_template_email_to"            => "Enviado email ':extra_rel1' para :rel.",
    "sent_ticket_email_to_user"         => "Enviado email ':extra_rel1' ao utilizador do ticket #:rel.",
    "sent_email_to_operators"           => "Enviado email ':extra_rel1' aos operadores.",
    "sent_ticket_email_to_operators"    => "Enviado email ':extra_rel1' aos operadores do ticket #:rel.",
    "sent_email_to_operator_group"      => "Enviado email ':extra_rel1' ao grupo de operadores ':new_value' do ticket #:rel.",
    "ticket_macro_applied"              => "A macro ':new_value' foi executada no ticket #:rel.",
    "ticket_macro_automatic"            => "A macro ':new_value' foi automaticamente executada no ticket #:rel.",
    "email_template_not_found"          => "O email template ':new_value' não encontrado, abortado o envio do email.",
    "ticket_duetime_unset"              => "Removido o prazo no ticket #:rel.",
    "private_conversation_started"      => "Iniciada conversa com :rel.",
    "private_message_sent"              => "Enviada mensagem para :rel.",
    "not_imported_replies_disabled"     => "O email :extra_rel1 foi recebido para o ticker #:rel, mas não foi importado porque as respostas ao ticket estão desactivadas.",
    "not_imported_ticket_locked"        => "o email :extra_rel1foi recebido para o ticket #:rel, mas não foi importado porque o ticket está bloqueado.",

    /*
     * 2.2.0
     */
    "ticket_user_added_to_group"        => "Utilizador adicionado ao grupo :new_value.",
    "ticket_user_removed_from_group"    => "Utilizador removido do grupo :old_value.",
    "email_on_behalf"                   => "Encaminhado email :extra_rel2 em nome de ':extra_rel1' no ticket #:rel.",

    /*
     * 2.3.0
     */
    "registered_users_only"             => "Enviado ':extra_rel1' para :new_value, o departamento não aceita emails de utilizadores não registados.",
    "deleted_user"                      => "Excluido :item ':rel' com o email ':email_address' (ID :user_id).",
    "linked_ticket"                     => "Ticket #:rel anexado ao ticket :extra_rel1.",
    "unlinked_ticket"                   => "Desvinculado ticket #:rel do ticket :extra_rel1.",
    "email_queue_attachment_deleted"    => "Excluido o anexo ':old_value' do email na fila ':rel'.",
    "forward_ticket_email"              => "Ticket #:rel encaminhado a terceiros, ver o email ':extra_rel1'.",

    /*
     * 2.3.1
     */
    "selfservice_comment_updated"       => "Actualizado :rel por :extra_rel1.",
    "selfservice_comment_status"        => "Alterado o estado de :rel por :extra_rel1 de :old_value para :new_value.",
    "selfservice_comment_deleted"       => "Excluido comentário por :extra_rel1.",
    "ticket_message_posted"             => "Publicada nova :extra_rel1 no ticket #:rel.",
    "ticket_message_edited"             => "Editado um :extra_rel1 no ticket #:rel.",
    "email_send_failed"                 => "Falhou envio de email.",
    "ticket_brand_updated"              => "Actualizada a marca do ticket #:rel de :old_value para :new_value.",
    "export_scheduled"                  => "A exportação do utilizador :rel foi agendada.",
    "export_generated"                  => "Exportação :new_value do utilizador :rel foi gerada e guardada no sistema.",
    "export_deleted"                    => "Exportação :old_value do utilizador :rel foi eliminada do sistema.",
    "deleted_inactive_records"          => "Automatically deleted :old_value inactive :rel.",
    "deleted_old_records"               => "Automatically deleted old :rel records.",
    "sent_email_to_user_group"          => "Email para o grupo ':new_value' colocado em fila, relativo ao ticket #:rel.",

    /*
     * 2.4.0
     */
    "ticket_watching"                   => "Está a seguir o ticket #:rel.",
    "ticket_unwatching"                 => "Deixou de seguir o ticket #:rel.",
    "ticket_watch_operator"             => "Selecionou :new_value para seguir o ticket #:rel.",
    "ticket_unwatch_operator"           => "Retirou a atribuição de :new_value para seguir o ticket #:rel.",

    /*
     * 2.5.0
     */
    "marked_user_as_confirmed"          => "Email confirmado do utiliador :rel.",
    "ticket_department_email_updated"   => "Actualizou o email de departamento no ticket #:rel de :old_value para :new_value.",
    "ticket_watching_updated"           => "Actualiados os seguidores do ticket #:rel.",
    "ticket_deleted"                    => "Excluiu permanentemente o ticket ':old_value' (#:rel).",
    "ticket_trashed"                    => "Moveu o ticket #:rel para o lixo.",
    "ticket_restored"                   => "Restaurou o ticket #:rel do lixo.",
    "emptied_ticket_trash"              => "Limpeza automatica do lixo dos tickets ':old_value' records.",

    /*
     * 2.6.0
     */
    "ticket_followup_set"               => "Um novo acompanhamento foi configurado no ticket #:rel.",
    "ticket_followup_updated"           => "O acompanhamento do ticket #:rel foi actualizado.",
    "ticket_followup_deleted"           => "O acompanhamento no ticket #:rel foi removido.",

    /*
     * 3.0.0
     */
    "selfservice_article_neutral"       => "Artigo :rel com avaliação neutra.",
    
);