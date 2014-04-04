<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
* Pancake
*
* A simple, fast, self-hosted invoicing application
*
* @package	 	Pancake
* @author		Pancake Dev Team
* @copyright	Copyright (c) 2010, Pancake Payments
* @license		http://pancakeapp.com/license
* @link			http://pancakeapp.com
* @since		Version 1.0
*/

// ------------------------------------------------------------------------

$lang	= array(

	/** Global Words **/
	'global:overview'								=> 'Panorama',
	'global:error'									=> 'Erro',
	'global:pancakeby7am'							=> 'Pancake :1',
	'global:allrelatedmediacopyright'				=> 'Pancake and all related media is Copyright :1 :2',
	'global:insecure_action'						=> 'Uma ação insegura foi tentada, mas impedida',
	'global:disabled_in_demo'						=> 'Algumas funcionalidades nesta página foram desativadas na versão de demonstração.',
	'global:estimates'								=> 'Orçamentos',
	'global:estimate'								=> 'Orçamento',
	'global:incomplete_tasks'						=> 'Tarefas incompletadas',
	'global:completed_tasks'						=> 'Tarefas completas',
	'global:projects'								=> 'Projetos',
	'global:tickets'								=> 'Tíquetes',
	'global:project'								=> 'Projeto',
	'global:upload_failed'							=> 'Houve um problema no envio de seu arquivo. Por favor, tente de novo. Se o problema persistir, por favor, contacte support@pancakeapp.com, em inglês.',
	'global:upload_not_allowed'						=> 'O envio desse tipo de arquivo não é permitido. Se você precisa mesmo enviar um arquivo desse tipo, por favor, compacte-o num .zip ou algum outro formato que considere adequado.',
	'global:copied'									=> 'Copiado!',
	'global:sentbutunpaid'							=> 'Pendente (enviada, mas não paga)',
	'global:task'									=> 'Tarefa',
	'global:clients'								=> 'Clientes',
	'global:access_denied'							=> 'Acesso negado',
	'global:users'									=> 'Usuários',
	'global:send_to_client'							=> 'Enviar ao cliente',
	'global:couldnotsendemail'						=> 'O email não pode ser enviado.  Por favor, veja suas configurações.',
	'global:emailsent'								=> 'Email foi enviado!',
	'global:yes'									=> 'Sim',
	'global:no'										=> 'Não',
	'global:notyetsent'								=> 'Não enviado ao cliente',
	'global:dontshowagain'							=> 'Não mostrar isso de novo',
	'global:enable'									=> 'Habilitado(a)',
	'global:is_enabled'								=> 'Habilitado(a)?',
	'global:is_completed'							=> 'Completo?',
	'global:Y'										=> 'S',
	'global:N'										=> 'N',
	'global:notes'									=> 'Notas',
	'global:description'							=> 'Descrição',
	'global:backtoadmin'							=> 'Voltar ao Admin',
	'global:type'									=> 'Tipo',
	'global:name'									=> 'Nome',
	'global:first_name'								=> 'Primeiro nome',
	'global:last_name'								=> 'último nome',
	'global:company'								=> 'Companhia',
	'global:for'									=> 'para',
	'global:from'									=> 'de',
	'global:phone'									=> 'Fone',
	'global:email'									=> 'Email',
	'global:contacts'								=> 'Contatos',
	'global:week'									=> 'Semanal',
	'global:na'										=> 'N/D',
	'global:quarterly'								=> 'Trimestral',
	'global:every_six_months'						=> 'Semestral',
    'global:statistics'								=> 'Estatísticas',
	'global:biyearly'								=> 'Bienal',
	'global:month'									=> 'Mensal',
	'global:year'									=> 'Anual',
	'global:fax'									=> 'Fax',
	'global:mobile'									=> 'Celular',
	'global:address'								=> 'Endereço',
	'global:api_key'								=> 'API Key',
	'global:website'								=> 'Website',
	'global:action'									=> 'Ação',
	'global:items'									=> 'Itens',
	'global:reusableinvoiceitems'					=> 'Itens reutilizáveis em faturas',
	'global:reusableinvoiceitems_description'		=> 'Você deveria preferir itens reutilizáveis quando quiser repetí-los em diferentes faturas. Para usá-los na criação ou edição de faturas, apenas comece a digitar o nome do item e te oferecemos seus detalhes.',
	'global:create_invoice_estimate'				=> 'Criar faturas e orçamentos para ganhar dinheiro.',
	'global:createinvoice'							=> 'Criar fatura',
	'global:paid'									=> 'Pagas',
	'global:unpaid'									=> 'Não pagas',
	'global:overdue'								=> 'Vencidas',
	'global:time_entries'							=> 'Entradas de tempo',
	'global:invoices'								=> 'Faturas',
	'global:invoice'								=> 'Fatura',
	'global:tasks'									=> 'Tarefas',
	'global:estimate'								=> 'Orçamento',
	'global:dashboard'								=> 'Painel',
	'global:settings'								=> 'Configurações',
	'global:plugins'								=> 'Plug-Ins',
	'global:installed'								=> 'Instalado',
	'global:changepassword'							=> 'Mudar senha',
	'global:logout'									=> 'Sair',
	'global:status'									=> 'Situação',
	'global:client'									=> 'Cliente',
	'global:user'									=> 'Usuário',
	'global:title'									=> 'Título',
	'global:subtitle'								=> 'subtítulo',
	'global:to'										=> 'Para (separe múltiplos endereços com uma vírgula)',
	'global:subject'								=> 'Assunto',
	'global:thanks'									=> 'Obrigado!',
	'global:proposals'								=> 'Propostas',
	'global:proposal'								=> 'Proposta',
	'global:reports'								=> 'Relatórios',
	'global:item'									=> 'Item',
	'global:report'									=> 'Relatório',
	'global:saveandinsert'							=> 'Salvar e inserir',
	'global:details'								=> 'Detalhes',
	'global:license_key'							=> 'Número da licença',
	'global:version'								=> 'Versão :1',
	'global:content'								=> 'Conteúdo',
	'global:add'									=> 'Adicionar',
	'global:edit'									=> 'Editar',
	'global:resend'									=> 'Reenviar',
	'global:sent'									=> 'Enviado',
	'global:not_sent'								=> 'Não enviado',
	'global:view'									=> 'Ver',
	'global:delete'									=> 'Apagar',
	'global:remove'									=> 'Remover',
	'global:sort'									=> 'Ordenar',
	'global:deleteitem'								=> 'Apagar item',
	'global:dragtoreorder'							=> 'Arraste para reordenar',
	'global:start'									=> 'Iniciar',
	'global:stop'									=> 'Parar',
	'global:start_timer'							=> 'Iniciar cronômetro',
	'estimates:create' 								=> 'Criar orçamento',
	'global:stop_timer'								=> 'Parar cronômetro',
	'global:created'								=> 'Criado',
	'global:updated'								=> 'Atualizado',
	'global:update'									=> 'Atualizar',
    'global:update_available'						=> ':1 atualização disponível',
    'global:updates_available'						=> ':1 atualizações disponíveis',
	'global:downloadpdf'							=> 'Baixar PDF',
	'global:yesdelete'								=> 'Sim, apague!',
	'global:confirm_emphisised'						=> 'Não há retorno!',
	'global:color'									=> 'Cor',
	'global:save'									=> 'Salvar',
	'global:unknown'								=> 'Desconhecido',
	'global:upload_ini_size'						=> 'O arquivo enviado excede o limite de tamanho imposto pela instalação do PHP.',
	'global:upload_error'							=> 'Um problema ocorreu no envio do arquivo. Por favor, tente novamente.',
	'global:recurring'								=> 'Recorrente',
	'global:unsent'									=> 'Não enviado',
	'global:converttoproject'						=> 'Converter em projeto',
	'global:converttoinvoice'						=> 'Converter em fatura',
	'global:viewpdf'								=> 'Ver PDF',
	'global:duplicate'								=> 'Duplicar',
	'global:urltosend'								=> 'Aqui está a url para enviar:',
	'global:copytoclipboard'						=> 'Copiar para área de transf.',
	'global:you_need_pancake_cron_job'				=> 'Para usar faturas recorrentes, você precisa rodar o Pancake cron job.',
	'global:if_you_dont_know_how_to_set_it_up'		=> 'Se você não sabe como configurar, <a href="http://help.pancakeapp.com/customer/portal/articles/605703">clique aqui</a>.',
	'global:quick_links'							=> 'Links rápidos',
	'global:view_all'								=> 'Ver tudo',
	'global:deleted'								=> 'Apagado',

    'global:add_more'								=> 'Acrescentar',
    'global:upload_files'							=> 'Subir arquivos',
	'global:optional_increment'						=> '<strong>Opcional</strong> - acréscimo automático',

	'login:ahoy'									=> 'Ahoy!',
	'login:readytodothis'							=> 'Pronto para isso?',
	'login:sup'										=> 'Rango?',
	'global:actions'								=> 'Ações',
    'global:select'									=> '--- Selecione ---',

	/** Greetings **/
	'global:greetings'								=> array('Ahoy!', 'Hello,', 'Hey,', 'Sup,'),

	'global:mark_as_unanswered'						=> 'Marcar como não prespondido',
	'global:mark_as_accepted'						=> 'Marcar como aceito(a)',
	'global:mark_as_rejected'						=> 'Marcar como recusado(a)',
	'global:reject_estimate'						=> 'Recusar orçamento',
	'global:accept_estimate'						=> 'Aceitar orçamento',
	'global:estimate_rejected'						=> 'Orçamento recusado',
	'global:estimate_accepted'						=> 'Orçamento aceito',
	'global:reject_proposal'						=> 'Recusar proposta',
	'global:accept_proposal'						=> 'Aceitar proposta',
	'global:proposal_rejected'						=> 'Proposta recusada',
	'global:proposal_accepted'						=> 'Propsota aceita',
	'global:client_area'							=> 'Área do cliente',
	'global:admin'									=> 'Administração', // conferir
	'global:all_settings'							=> 'Todas as configurações',
	'global:viewable'								=> 'Visível na área doe cliente',
	'global:not_viewable'							=> 'Não visível na área do cliente',
    'global:milestones'								=> 'Milhagens',

	/** End Greetings **/

	/** Dashboard **/
	'dashboard:collected'							=> 'Coletado',
	'dashboard:outstanding'							=> 'Pendente',
	'dashboard:latest_activity'						=> 'Últimas atividades',
	'dashboard:these_are_your_upcoming_tasks'		=> 'Essas são suas próximas tarefas, :1.',
	'dashboard:upcoming_tasks'						=> 'Próximas tarefas',
	/** End Dashboard **/


	/** Users **/

	//	==============================>
	//	=> LOGIN PAGE COMPLETED - Lee=>
	//	==============================>
	'login:forgotinstructions'						=> 'Por favor, forneça seu endereço de email para que possamos recriar sua senha.',
	'login:reset'									=> 'Recriar &raquo;',
	'login:reset'									=> 'Recriar senha',
	'login:username'								=> 'Nome de usuário',
	'login:password'								=> 'Senha',
	'login:changepassword'							=> 'Mudar senha',
	'login:email'									=> 'Endereço de email',
	'login:login'									=> 'Entrar',
	'login:logout'									=> 'Sair',
	'login:remember'								=> 'Lembrar-se de mim',
	'login:forgot'									=> 'Esqueceu sua senha?',
	'login:cancel'									=> '&laquo; Cancelar',
	/** End Users **/

	/** User Groups **/
	'groups:edit_title'								=> 'Editar grupo %s',
	'groups:add_title'								=> 'Novo grupo de usuários',

	/** Clients **/
	'clients:title'									=> 'Todos os clientes',
	'clients:filter'								=> 'Filtro de clientes',
	'clients:add'									=> 'Novo cliente',
	'clients:removefilter'							=> 'Remover filtro',
	'clients:edit'									=> 'Editar cliente',
	'clients:noclienttitle'							=> 'Você precisa cadastrar alguns clientes!',
	'clients:noclientbody'							=> 'Então você pode enviar-lhes algumas fatura. Faturar agora?',
	'clients:noclienttitlefilter'					=> 'Nenhum cliente para esse filtro',
	'clients:hasnoinvoicetitle'						=> 'Legal! Esse cliente está cadastrado!',
	'clients:hasnoinvoicebody'						=> 'Vamos criar uma fatura e cobrá-los! Faturar uma agora?',
	'clients:added'									=> 'O cliente foi adicionado!',
	'clients:edited'								=> 'O cliente foi atualizado!',
	'clients:deleted'								=> 'O cliente foi apagado!',
	'clients:does_not_exist'						=> 'Aquele cliente não existe!',
	'clients:health_check'							=> 'Exame de saúde',
	'clients:all'									=> 'Tudo',
	'clients:delete_title'							=> 'Apagar esse cliente?!?!',
	'clients:delete_message'						=> 'Quer mesmo apagar esse cliente?<br />Isso apagará todas as faturas, projetos e propostas para ele.',
	'clients:clientaction'							=> '&nbsp;',
	'clients:passphrase'							=> 'Frase de acesso',
	'clients:bad_passphrase'						=> 'A frase de acesso está incorreta.',
	'clients:total_clients'							=> 'Total de clientes',
	'clients:support'								=> 'Suporte',
	'clients:support_rates'							=> 'Taxas de suporte',
	'clients:edit_support_rates'					=> 'Configurar taxas de suporte',
	/** End Clients **/


	/** Contact Log **/
	'contact:title'									=> 'Histórico de contatos recentes',
	'contact:method'								=> 'Método de contato',
	'contact:contact'								=> 'Contato',
	'contact:subject'								=> 'Assunto',
	'contact:content'								=> 'Conteúdo',
	'contact:method'								=> 'Método de contato',
	'contact:calling_title'							=> 'Chamando cliente ":1"',
	//	'contact:view_all'							=> 'Ver tudo',
	/** End Contact Log **/

	/** Invoices **/
	'invoices:markassent'							=> 'Marcar como enviado',
	'invoices:invoicedate'							=> 'Data da fatura',
	'invoices:file_name'							=> 'Nome do arquivo',
	'invoices:date_created'							=> 'Data de criação',
	'invoices:size'									=> 'Tamanho',
	'invoices:files'								=> 'Arquivos',
	'invoices:sentbutunpaid'						=> 'Faturas enviadas ao cliente, mas ainda devidas.',
	'invoices:duplicated'							=> 'Fatura duplicada #:1. O novo número da fatura é #:2.',
	'invoices:all'									=> 'Todas as faturas',
	'invoices:empty'								=> 'Ainda sem faturas.',
	'invoices:overdue'								=> 'Faturas vencidas',
	'invoices:tax_collected'						=> 'Tributos recolhidos',
	'invoices:paid'									=> 'Faturas pagas',
	'invoices:recurringinvoices'					=> 'Faturas recorrentes',
	'invoices:unsentinvoices'						=> 'Faturas não enviadas',
	'invoices:unpaid'								=> 'Faturas devidas',
	'invoices:thisinvoicewaspaidon'					=> 'Essa fatura foi paga em :1. Obrigado!',
	'invoices:senton'								=> 'Enviada em :1',
	'invoices:lastsenton'							=> 'Último envio em :1 at :2',
	'invoices:paidon'								=> 'Paga em :1',
	'invoices:paidonsingle'							=> 'Paga em',
	'invoices:thisinvoiceisunpaid'					=> 'Essa fatura ainda não foi paga.',
	'invoices:noinvoicetitle'						=> 'Você ainda não tem faturas!',
	'invoices:noinvoicesforthefilteredclient' 		=> 'Você não tem faturas para :1.',
	'invoices:noinvoicebody'						=> 'Você deveria criar uma fatura para um cliente agora! <br /> Clientes amam faturas!',
	'invoices:send_now_title'						=> 'Enviar a fatura agora?',
	'invoices:send_now_body'						=> 'Preencha o formulário seguinte e entregaremos essa fatura para você.',
	'invoices:newinvoice'							=> 'Criar fatura',
	'invoices:send_now'								=> 'Enviar fatura',
	'invoices:timequantity'							=> 'Tempo/Quantidade',
	'invoices:ratewithcurrency'						=> 'Valor unitário (:1)',
	'invoices:taxable'								=> 'Tributável',
	'invoices:total'								=> 'Total',
	'invoices:amount'								=> 'Quantia',
	'invoices:due'									=> 'Devido',
	'invoices:subtotal'								=> 'Subtotal',
	'invoices:totaltax'								=> 'Tributos Totais',
	'invoices:filestodownload'						=> 'Arquivos para baixar',
	'invoices:added'								=> 'A fatura foi adicionada!',
	'invoices:fileswillbeavailableafterpay'			=> 'Esses arquivos ficarão disponíveis assim que a fatura seja completamente paga.',
	'invoices:no_payment_gateways_enabled'			=> 'Nenhum sistema de pagamento foi ativado, o que deixa o pagamento complicado. Ative-os em <a href=":1">configurações</a>',
	'invoices:invoicenumber'						=> 'Fatura #:1',
	'invoices:number'								=> 'Fatura #',
	'invoices:type'									=> 'Tipo de fatura',
	'invoices:is_recurring'							=> 'Recorrente?',
	'invoices:is_paid'								=> 'Paga?',
	'invoices:is_sent'								=> 'Enviada?',
	'invoices:date_entered'							=> 'Data de criação',
	'invoices:delete_title'							=> 'Apagar essa fatura?',
	'items:select_time_entry' 						=> 'Horário',
	'invoices:delete_message'						=> 'Quer mesmo apagar essa fatura?',
	'invoices:create'								=> 'Criar fatura',
	'invoices:edit'									=> 'Editar fatura',
	'invoices:amountrequired'						=> 'A Quantia é exigida',
	'invoices:currencydoesnotexist'					=> 'Essa moeda não existe.',
	'invoices:unique_id'							=> 'ID único',
	'invoices:willreoccurin'						=> 'Essa fatura se repete em :1.',
	'invoices:willbesentautomatically'				=> 'O cliente será avisado por email sobre essa fatura em :1.',
	'invoices:thisisareoccurrence'					=> 'Essa fatura é uma ocorrência da fatura :1.',
	'invoices:clientlastnotifiedon'					=> 'O cliente foi avisado por email sobre ess fatura em :1.',
	'invoices:simple'								=> 'Simples',
	'invoices:simple_help'							=> 'Uma fatura simples não tem items. Apenas o total.',
	'invoices:detailed'								=> 'Detalhada',
	'invoices:detailed_help'						=> 'Faturas detalhadas permitem que você tenha múltiplos itens.',
	'invoices:estimate_help'						=> 'Orçamentos são faturas detalhadas que não são cobráveis.',
	'invoices:unpaid_totalamount'					=> 'Quantia / Total',
	'invoices:saveinvoice'							=> 'Salvar fatura',
	'invoices:deleted'								=> 'A fatura foi apagada!',
	'invoices:view'									=> 'Ver fatura',
	'invoices:is_viewable'							=> 'Exibir na área de clientes?',
	'invoices:no_invoices'							=> 'Não há faturas.',
	'invoices:addedsuccess'							=> 'Você tem uma fatura para',
	'invoices:invoice'								=> 'fatura',
	'invoices:addedconf'							=> 'Você adicionou a fatura # <strong>:1</strong>, totalizando <strong>:2</strong> para :3:4.',
	'invoices:preview'								=> 'Conferir fatura',
	'invoices:editinvoice'							=> 'Editar fatura #:1',
	'invoices:messageupdated'						=> 'A fatura foi atualizada!',
	'invoices:resend'								=> 'Reenviar fatura',
	'invoices:client_viewed'						=> ':1 viu a fatura #:2 em :3',
	'invoices:client_paid'							=> ':1 pagou a fatura #:2 em :3',
	'invoice:paid_amount'							=> 'Quantia paga',
	/** End Invoices **/

	/** Estimates **/
	'estimates:attachedtoproposal'					=> 'Anexo à proposta #:1',
	'estimates:duplicated'							=> 'Orçamento duplicado #:1. O novo número do orçamento é #:2.',
	'estimates:alltitle'							=> 'Todos os orçamentos',
	'estimates:attachingtoproposal'					=> 'Anexando orçamento à proposta. Por favor, aguarde...',
	'estimates:delete_title'						=> 'Apagar esse orçamento?',
	'estimates:delete_message'						=> 'Quer mesmo apagar esse orçamento?',
	'estimates:createnew'							=> 'Criar orçamento',
	'estimates:generate_estimate'					=> 'Gerar orçamento',
	'estimates:converted'							=> 'Converter orçamento #:1 numa fatura.',
	'estimates:converted_to_invoice'				=> 'Orçamento #:1  convertido numa fatura.',
	'estimates:noestimatetitle'						=> 'Não há orçamentos',
	'estimates:noestimatesforthisclient'			=> 'Não há orçamentos para esse cliente.',
	'estimates:noestimatesforthefilteredclient'		=> 'Não há orçamentos para :1.',
	'estimates:deleted'								=> 'O orçamento foi apagado!',
	'estimates:noestimatebody'						=> 'VOcê deveria fazer isso! Gostaria de criar um agora?',
	'estimates:estimatenumber'						=> 'Orçamento #:1',
	'estimates:view'								=> 'Ver orçamento',
	'estimates:no_estimates'						=> 'Não há orçamentos.',
	'estimates:addedsuccess'						=> 'Você adicionou um orçamento para',
	'estimates:estimate'							=> 'orçamento',
	'estimates:added'								=> 'Pronto! O orçamento foi adicionado.',
	'estimates:addedconf'							=> 'Você adicionou o orçamento # <strong>:1</strong>, totalizando <strong>:2</strong> para :3:4.',
	'estimates:send_now_title'						=> 'Enviar orçamento agora?',
	'estimates:send_now_body'						=> 'Preencha o formulário seguinte e entregaremos o orçamento para você.',
	'estimates:send_now'							=> 'Enviar orçamento',
	'estimates:edit'								=> 'Editar orçamento',
	'estimates:preview'								=> 'Conferir orçamento',
	'estimates:editestimate'						=> 'Editar orçamento #:1',
	'estimates:messageupdated'						=> 'O orçamento foi atualizado!',
    'estimates:client_viewed'						=> ':1 viu o orçamento #:2 em :3',
    'estimates:client_accepted'						=> ':1 aceito o <a href=":2">orçamento #:3</a> em :4',
    'estimates:client_rejected'						=> ':1 recusou <a href=":2">orçamento #:3</a> em :4',
	'estimates:resend'								=> 'Reenviar orçamento',
	'estimates:estimatedate'						=> 'Data do orçamento',
	/** End Estimates **/

	/** Projects **/
	'projects:status_id'										=> 'Situação das tarefas',
	'projects:projected'										=> 'Planejado',
	'projects:projected_hours'									=> 'Horas planejadas',
	'projects:navigationitem'									=> 'Projetos',
	'projects:hours_worked'										=> 'Número de horas trabalhadas',
	'projects:hours_worked_short'								=> 'Horas trabalhadas',
	'projects:alltitle'											=> 'Todos os projetos',
	'projects:totalprojects'									=> 'Total de projetos',
	'projects:noprojecttitle'									=> 'Ainda não há projetos!',
	'projects:noprojecttext'									=> 'Você gostaria de criar um? ',
	'projects:add'												=> 'Criar projeto',
	'projects:createfromtemplate'								=> 'Criado a partir de modelo',
	'projects:doesnotexist'										=> 'O projeto que você quer acessar não existe.',
	'projects:edit'												=> 'Editar projeto',
	'projects:delete'											=> 'Apagar projeto',
	'projects:project'											=> 'Projeto',

	'projects:new_project_from_estimate_without_number'			=> 'Novo projeto do orçamento',// conferir
	'projects:new_project_from_estimate_with_number'			=> 'Novo projeto do orçamento #:1', //conferir

	'projects:due_date'											=> 'Prazo',
	'projects:is_completed'										=> 'Completo?',
	'projects:manage_project'									=> 'Gerenciar projeto',
	'projects:areyousuredeletetask'								=> 'Quer mesmo apagar essa tarefa?',
	'projects:add_time'											=> 'Adicionar horário',
	'projects:add_hours'										=> 'Adicionar horas',
	'projects:generate_invoice'									=> 'Gerar fatura',
	'projects:no_projects'										=> 'Não há projetos.',
	'projects:archive_proj'										=> 'Arquivo de projetos',
	'projects:unarchive_proj'									=> 'Desarquivar projeto',
	'projects:archive'											=> 'Ver arquivo',
	'projects:active'											=> 'Projetos ativos',
	'projects:archived'											=> 'Projetos arquivados',
	'projects:noarchivedprojecttitle'							=> 'Você não tem projetos arquivados.',
	'projects:noarchivedprojecttext'							=> 'Você pode arquivar um projeto de sua página ',
	'projects:allarchivedtitle'									=> 'Todos os projetos arquivados',
	'projects:templatize'										=> 'Salvar como modelo',
    'projects:milestone_identifier'								=> "[Milhagem: :1]",
	/** End Projects **/


	/** Milestones **/
	'milestones:add'											=> 'Nova milhagem',
	'milestones:edit'											=> 'Editar milhagem',
	'milestones:delete'											=> 'Apagar milhagem',
	'milestones:milestone'										=> 'Milhagem',
	'milestones:target_date'									=> 'Data alvo',
	'milestones:assigned_user'									=> 'Usuário atribuído',
	'milestones:select_default'									=> '-- Sem milhagem --',
	'milestones:no_milestone'									=> 'Tarefas sem milhagem',
	'milestones:add_success'									=> 'milhagem ":1" adicionada!',
	'milestones:edit_success'									=> 'milhagem ":1" editada!',
	'milestones:add_failed'										=> 'milhagem ":1" não pôde ser editada.',
	'milestones:edit_failed'									=> 'milhagem ":1" não pode ser adicionada.',
	'milestones:are_you_sure_delete'							=> 'Quer mesmo apagar essa milhagem?',
	'milestones:delete_success'									=> 'milhagem ":1" apagada!',
	'milestones:does_not_exist'									=> 'Essa milhagem não existe.',
	'milestones:target_date'									=> 'Data alvo',
	'milestones:select_assignee_default'						=> 'No Assignee',
	/** End Milestones **/

	/** Proposals **/
	'proposal:outline'								=> 'Elementos da proposta',


	/** End Proposals **/

	/** Reminders **/

	'reminders:reminders'							=> 'Lembretes',
	'reminders:send'								=> 'Enviar lembretes',
	'reminders:success'								=> 'Aqueles lembretes foram enviados!!',
	'reminders:remind'								=> 'Lembre',
	'reminders:message'								=> 'Mensagem',
	'reminders:due'									=> 'Dias',
	'reminders:details'								=> 'Detalhes',
	'reminders:log'									=> 'Registro',

	/** End Reminders **/


	/** Email Templates **/
	'emailtemplates:email_templates'				=> 'Modelos de Email',
	'emailtemplates:create_template'				=> 'Criar novo modelo',
	'emailtemplates:add'							=> 'Criar novo modelo de email',
	'emailtemplates:edit'							=> 'Editar modelo de email',
	'emailtemplates:manage'							=> 'Gerenciar modelos',
	'emailtemplates:name'							=> 'Nome do email',
	'emailtemplates:subject'						=> 'Assunto do email',
	'emailtemplates:days'							=> 'Dias de intervalo',
	'emailtemplates:type'							=> 'Tipo de modelo',
	'emailtemplates:success'						=> 'Modelo de email criado',
	'emailtemplates:edited'							=> 'Modelo de email editado',
	'emailtemplates:does_not_exist'					=> 'Modelo de email não existe',
	'emailtemplates:deleted'						=> 'Modelo de email apagado',
	'emailtemplates:delete_title'					=> 'Apagar modelo de email',
	'emailtemplates:delete_message'					=> 'Quer mesmo apagar esse modelo de email?',


	/** End Email Templates **/

	/** Reports **/
	'reports:perclient'								=> 'por cliente',
	'reports:datefrom'								=> 'De',
	'reports:allclients'							=> 'Todos os clientes',
	'reports:dateto'								=> 'Para',
	'reports:byclient'								=> 'Cliente',

	'reports:view'									=> 'Ver relatório',
	'reports:show_all'								=> 'Exibir relatórios',

	'reports:paid_and_unpaid' 						=> 'Pagos e devidos',
    'reports:paid_vs_unpaid_over_time'				=> 'Pagos × devidos',
    'reports:per_client' 							=> 'por cliente',
    'reports:total_with_tax' 						=> 'Total (c/ tributos)',
    'reports:total_without_tax' 					=> 'Total (sem tributos)',
    'reports:total_collected' 						=> 'Total recebido',
    'reports:fees_paid' 							=> 'Tributos pagos',
    'reports:total_amount' 							=> 'Total',
    'reports:paid_amount' 							=> 'Total pago',
    'reports:unpaid_amount' 						=> 'Total devido',
    'reports:client_name' 							=> 'Cliente',
    'reports:filters' 								=> 'Filtros',
    'reports:selection_explanation'					=> 'Faturas devidas são mostradas com base em sua data de vencimento.
Faturas pagas são mostradas com base em sua data de pagamento.
Faturas com mais de uma parcela paga são mostradas baseadas na data do primeiro pagamento.
Faturas devidas sem vencimento são exibidas baseadas na sua data de criação.',

	'reports:nodata'								=> 'Sem :1.',
	/** End Reports **/

	/** Currencies **/
	'currencies:default'							=> '[Padrão] :1',
	'currencies:cad'								=> 'Canadian Dollar',
	'currencies:eur'								=> 'Euro',
	'currencies:usd'								=> 'U.S. Dollar',
	'currencies:gbp'								=> 'Pound Sterling',
	'currencies:hkd'								=> 'Hong Kong Dollar',
	'currencies:php'								=> 'Philippine Peso',
	'currencies:zar'								=> 'South Africa, Rand',
	/** End Currencies **/

	/** Proposals **/
	'proposals:duplicated'							=> 'Proposta #:1 duplicada. O número da nova proposta é #:2.',
	'proposals:usesectiontemplate'					=> 'Use esse modelo de seção',
	'proposals:showcontents'						=> 'Mostrar conteúdo',
	'proposals:hidecontents'						=> 'Ocultar conteúdo',
	'proposals:deletepremadesection'				=> 'Apagar template de seção',
	'proposals:nopremadesections'					=> 'Você não tem modelos de seção salvos.',
	'proposals:newproposal'							=> 'Nova proposta',
	'proposals:number'								=> 'Proposta #',
	'proposals:all'									=> 'Todas as propostas',
	'proposals:noproposaltitle'						=> 'Não há propostas!',
	'proposals:noproposalbody'						=> 'Você deveria criar uma proposta agora. Com certeza.',
    'proposals:client_viewed'						=>	':1 viu a <a href=":2">proposta #:3</a> em :4',
    'proposals:client_accepted'						=>	':1 aceitou a <a href=":2">proposta #:3</a> em :4',
    'proposals:client_rejected'						=>	':1 recusou a <a href=":2">proposta #:3</a> em :4',
	'proposals:rejected'							=> 'Recusada em :1',
	'proposals:accepted'							=> 'Aceita em :1',
	'proposals:lastviewed'							=> 'Vista pelo cliente pela últma vez em :1, às :2',
	'proposals:neverviewed'							=> 'não vista pelo cliente',
	'proposals:noanswer'							=> 'Sem resposta',
	'proposals:createproposal'						=> 'Criar proposta',
	'proposals:editproposal'						=> 'Editar proposta',
	'proposals:createdsuccessfully'					=> 'Proposta criada!',
	'proposals:sections'							=> 'Seções',
	'proposals:section'								=> 'Seção',
	'proposals:createsection'						=> 'Nova seção',
	'proposals:createpage'							=> 'Nova página',
	'proposals:emptysection'						=> '(sem título)',
	'proposals:emptycontents'						=> '(sem conteúdo)',
	'proposals:emptysubtitle'						=> '(sem subtítulo)',
	'proposals:for'									=> 'Proposta para:',
	'proposals:pagexofcount'						=> 'Página :1 de :2',
	'proposals:saving'								=> 'Salvando...',
	'proposals:save'								=> 'Salvar Proposta',
	'proposals:savepremade'							=> 'Salvar como modelo de seção',
	'proposals:addestimate'							=> 'Adicionar orçamento',
	'proposals:saved'								=> 'Salva!',
	'proposals:createandedit'						=> 'Seguinte: Editar conteúdo da proposta',
	'proposals:delete_message'						=> 'Quer mesmo apagar essa proposta?',
	'proposals:createpremadesection'				=> 'Adicionar de um modelo de seção',
	'proposals:selected_attachments'				=> 'Selecionar orçamento',
	'proposals:attach_selected_estimate'			=> 'Anexar orçamento selecionado',
	'proposals:proposal'							=> 'Proposta',
	'proposals:status'								=> 'Situação',
	'proposals:view'								=> 'Ver proposta',
	'proposals:estimate'							=> 'Orçamento',
	'proposals:no_proposals'						=> 'Não há propostas.',
    'proposals:proposal_title'						=> 'Título da proposta',
	'proposals:kitchennotice'						=> 'Nota: Propostas aparecerão em :1 uma vez que o cliente tenha aberto seu link. Isso quer dizer quer você pode editá-la o quanto quiser e o cliente não verá até que você queira.',
	/** End Proposals **/

	/** Tasks **/
	'tasks:task'									=> 'Tarefa',
	'tasks:edit_succeeded'							=> 'Tarefa editada.',
	'tasks:hours'									=> 'Horas',
	'tasks:due_date'								=> 'Vencimento',
	'tasks:is_completed'							=> 'Completa?',
	'tasks:timer'									=> 'Cronômetro',
	'tasks:rate'									=> 'Unitário',				//conferir
	'tasks:default_rate'							=> 'Taxa padrão',		//conferir
	'tasks:entries'									=> 'Horários',
	'tasks:view_entries'							=> 'Ver horários',
	'tasks:edit_entry'								=> 'Editar horário',
	'tasks:create'									=> 'Nova tarefa',
	'tasks:create_sub'								=> 'Nova sub-tarefa',
	'tasks:task_parent'								=> 'Tarefa mãe',
	'tasks:edit'									=> 'Editar tarefa',
	'tasks:create_succeeded'						=> 'Nova tarefa criada!',
	'tasks:no_task_title'							=> 'Hmm, ainda sem tarefas...',
    'tasks:no_task'									=> 'Sem tarefas',
	'tasks:no_task_message'							=> 'Você deveria criar alguma!',
	'tasks:is_viewable'								=> 'Visível na área do cliente?',
	'tasks:no_milestones'							=> 'Tarefas sem milhagem',
	'tasks:not_related_to_a_task'					=> '-- Não relacionado à tarefa --',
	'tasks:select_parent_default'					=> '-- Sem tarefa mãe --',
	'tasks:timers_running'							=> 'Cronômetros contando',
	'tasks:task_completed_by'						=> ':1 completou a tarefa :2 às :3',
	'tasks:discussion'								=> 'Discussão: ',
	'tasks:billed_hours' 							=> 'Horas faturadas',
	'tasks:unbilled_hours' 							=> 'Horas não faturadas',


	/** Users **/
	'users:create_user'								=> 'Criar usuário',
	'users:confirm_delete_emphasised' 				=> 'Não há volta!',

	/** Items **/
	'items:name'									=> 'Item',
	'items:description'								=> 'Descrição',
	'items:qty_hrs'									=> 'Qtd / Hrs',
	'items:quantity'								=> 'Quantia',
	'items:rate'									=> 'Unitário',				//conferir
	'items:tax_rate'								=> 'Tributação',
	'items:cost'									=> 'Custo',
	'items:line_items'								=> 'Itens',
	'items:add'										=> 'Novo item',
	'items:edit'									=> 'Editar item',
	'items:noitemtitle'								=> 'Você ainda não tem itens!',
	'items:noitembody'								=> 'Você deveria criar alguns itens agora. Eles deixam a criação de faturas ainda mais fácil!',
	'items:delete_title'							=> 'Apagar esse item?',
	'items:delete_message'							=> 'Quer mesmo apagar o item ":1"?',
	'items:type'									=> 'Tipo',
	'items:select_standard'							=> 'Padrão',
	'items:select_expense'							=> 'Despesa',
	'items:add_expense_to_project'					=> 'Adicionar despesa',
	'items:expenses'								=> 'Despesas',
	/** END Items **/

	/** Expenses **/
	'expenses:expenses'								=> 'Despesas',
	'expenses:add'									=> 'Adicionar despesa',
	'expenses:edit_expense'							=> 'Editar despesa',
	'expenses:delete'								=> 'Apagar despesa',
	'expenses:deleted'								=> 'Despesa apagada',
	'expenses:all'									=> 'Todas as despesas',
	'expenses:amount'								=> 'Quantia',
	'expenses:supplier'								=> 'Fornecedor',
	'expenses:suppliers'							=> 'Fornecedores',
	'expenses:category'								=> 'Categoria',
	'expenses:categories'							=> 'Categorias',
	'expenses:add_supplier'							=> 'Adicionar fornecedor',
	'expenses:edit_supplier'						=> 'Editar fornecedor',
	'expenses:add_category'							=> 'Adicionar Categoria',
	'expenses:edit_category'						=> 'Editar Categoria',
	'expenses:parent_category'						=> 'Categoria mãe',
	'expenses:filter'								=> 'Filtro de despesas',
	'expenses:start_date'							=> 'Data inicial',
	'expenses:end_date'								=> 'Data final',


	/** END Expenses **/

	/** Transactions **/
	'transactions:paymentcancelled'					=> 'Pagamento cancelado',
	'transactions:extrapaymentcancelled'			=> 'Seu pagamento foi cancelado.',
	'transactions:paymentreceived'					=> 'Pagamento recebido!',
	'transactions:fee_applied'						=> 'Como :1 impõe um custo por transação, nós adicionamos uma subretaxa de :2%.',
	'transactions:orderbeingprocessed'				=> 'Por favor, aguarde. Sua ordem de pagamento está sendo processada e você será redirecionado para o website do :1.',
	'transactions:ifyouarenotredirected'			=> 'Se você não for redirecionado para :1 em 5 segundos...',
	'transactions:thankyouforyourpayment'			=> 'Obrigado pelo seu pagamento. Logo você receberá um comprovante por email.',
	'transactions:ifyouhavefilesyouwillgetanemail'	=> 'Se você espera pela disponibilização de arquivos, logo recebrá um email com o link para baixá-los.',
	'transactions:ifyoudonotreceiveemail'			=> 'Se você não receber um email em 1 hora, por favor, entre em contato com :1',
	/** End Transactions **/

	/** Timesheets **/
	'timesheet:taskname'							=> 'Tarefa',
	'timesheet:starttime'							=> 'Início',
	'timesheet:endtime'								=> 'Fim',
	'timesheet:timeframe'							=> 'Prazo',
	'timesheet:duration'							=> 'Duração',
	'timesheet:date'								=> 'Data',
	'timesheet:forproject'							=> 'Quadro de horários para projeto ":1"',
	'timesheet:timesheet'							=> 'Quadro de horários',
	'timesheet:for'									=> 'Quadro de horários para:',
	'timesheet:totalbillable'						=> 'Total de horas cobráveis',
	'timesheet:view_pdf'							=> 'Ver quadro de horários',
	'timesheet:user'								=> 'Usuário',
	'timesheet:entries'								=> 'Entradas',
	'timesheet:no_entries'							=> 'Não há entradas de horários.',
	/** End Timesheets **/


	/** Support Tickets **/

	'tickets:all_tickets'							=> 'Chamados de suporte',
	'tickets:support_tickets'						=> 'Chamados de suporte',
	'tickets:pending'								=> 'Pendentes',
	'tickets:open'									=> 'Abertos',
	'tickets:resolved'								=> 'Resolvidos',
	'tickets:closed'								=> 'Fechados',
	'tickets:respond'								=> 'Responder um chamado',
	'tickets:ticket_options'						=> 'Opções de chamados',
	'tickets:attachment'					   		=> 'Anexo',
	'tickets:updated_status'						=> ':1 atualizou a situação do chamado para :2',
	'tickets:add_a_new_ticket'						=> 'Adicionar novo tíquete',
	'tickets:create_a_new_ticket'					=> 'Criar tíquete',
	'tickets:add_ticket'							=> 'Adicionar tíquete',
	'tickets:assign_to_user'						=> 'Atribuir a usuário',
	'tickets:select_client'							=> 'Selecionar cliente',
	'tickets:ticket_subject'						=> 'Assunto',
	'tickets:ticket_message'						=> 'Mensagem',
	'tickets:ticket_priority'						=> 'Prioridade',
	'tickets:ticket_status'							=> 'Situação',
	'tickets:no_priority'							=> '-- sem prioridade --',
	'tickets:no_status'								=> '-- sem situação --',
	'tickets:no_posts' 								=> 'Sem mensagem',

	/** End Support Tickets **/

	/** Frontend **/
	'frontend:hithere'								=> 'E aí!', //conferir
	'frontend:followthemaillinkdude'				=> 'Para ver sua fatura, você precisa clicar no link do email enviado. Ex: :1.',
	'frontend:contactadminforassistance'			=> 'Por favor, faça isso ou peça ajuda para :1 @ :2',
	/** End Frontend **/

	/** Settings **/

	'settings:task_statuses'						=> 'Situação de tarefas',
	'settings:ticket_statuses'						=> 'Situação de suporte',
	'settings:ticket_priorities'					=> 'Prioridades de suporte',
	'settings:background_color'						=> 'Cor de fundo',
	'settings:text_color'							=> 'Cor de texto',
	'settings:text_shadow'							=> 'Sombra de texto',
	'settings:box_shadow'							=> 'Sombra de caixa',
	'settings:default_rate'							=> 'Default Rate',
	'settings:allowed_extensions'					=> 'Extensões de arquivos permitidas',
	'settings:comma_separated'						=> 'separadas por vírgula',
	'settings:pdf_page_size'						=> 'tamanho de página do PDF',
	'settings:default_invoice_notes'				=> 'Notas padrão de fatura',
	'settings:default_invoice_title'				=> 'Título padrão de fatura',
	'settings:default_invoice_due_date'				=> 'Data padrão de vencimento',
	'settings:autosave_proposals'					=> 'Salvar propostas automaticamente',
	'settings:default_invoice_due_date_explain'		=> 'dias após criação de fatura. Se não quiser uma data padrão, deixe vazio.',
	'settings:testemailsettings'					=> 'Testar configurações de email',
	'settings:kitchen_route'						=> 'Prefixo do link de acesso para clientes',
	'settings:kitchen_route_explain'				=> '(ex. :1)',
	'settings:include_remittance_slip'				=> 'Canhotos',// conferir
	'settings:include_remittance_slip_explain'		=> 'Se marcado, os PDFs das faturas incluirão um canhoto.',
	'settings:items_per_page'						=> 'Itens por página',
	'settings:items_per_page_explain'				=> 'Número de itens (faturas/orçamentos/propostas/projetos/tarefas) exibidios por página.',
	'settings:send_x_days_before'					=> 'Padrão de envio antes do vencimento',
	'settings:send_x_days_before_explain'			=> 'Número padrão de dias antes do vencimento para que uma fatura recorrente seja enviada ao cliente.',
	'settings:file_to_import'						=> 'Arquivo para importar',
	'settings:file_should_be_csv'					=> 'Pancake automaticamente processará seu arquivo e importará tudo dele. Se o Pancake não for capaz de processar seu arquivo, ele te avisará e te dará a opção de nos enviar seu arquivo para nos ajudar a tornar o Pancake capaz de processá-lo.',
	'settings:importnow'							=> 'Importar agora!',
	'settings:whatimporting'						=> 'O que você está importando?',
	'settings:whatexporting'						=> 'O que você está exportando?',
	'settings:nouploadedimportfile'					=> 'Você não enviou um arquivo para importar.',
	'settings:import'								=> 'Importar',
	'settings:importedclients'						=> ':1 clientes importados.',
	'settings:importedprojects'						=> ':1 projetos importados.',
	'settings:importedusers'						=> ':1 usuários importados.',
	'settings:importedinvoices'						=> ':1 faturas importadas.',
	'settings:importedtasks'						=> ':1 tarefas importadas.',
	'settings:importedestimates'					=> ':1 orçamentos importados.',
	'settings:importedtime_entries'					=> ':1 entradas de tempo importadas.',
	'settings:xwereduplicates'						=> ':1 eram duplicados e foram ignorados.',
	'settings:import_desc'							=> 'Importar dados para o Pancake.',
	'settings:export'								=> 'Exportar',
	'settings:exportnow'							=> 'Exportar agora!',
	'settings:importexport'							=> 'Importar / Exportar',
	'settings:removelogo'							=> 'Remover Logo',
	'settings:wrong_license_key'					=> 'O número da licença que você preencheu não é válido.',
	'settings:noopenssl'							=> 'Seu servidor PHP não tem o OpenSSL configurado, o que implica em você não poder usar o Gmail ou o Google Apps para enviar emails. Por favor, contacte seu provedor de hospedagem e diga que precisa do OpenSSL.',
	'settings:logoremoved'							=> 'Logo removido!',
	'settings:save'									=> 'Salvar configurações',
	'settings:logodimensions'						=> 'O logo deve ter 240 pixels de largura e 106 pixels de altura.',
	'settings:logoformatsallowed'					=> 'BMP, PNG, JPG (JPEG) e GIF são permitidos.',
	'settings:ftp_user'								=> 'Usuário de FTP',
	'settings:ftp_pass'								=> 'Senha de FTP',
	'settings:ftp_path'								=> 'Caminho',
	'settings:ftp_port'								=> 'Porta de FTP',
	'settings:ftp_pasv'								=> 'Modo passivo?',
	'settings:nophpupdates'							=> 'Devido a maneira como seu servidor está configurado, você precisa preencher seus dados de FTP para que o Pancake consiga se atualizar sozinho. Esses dados são usados internamente e nunca transmitidos para ninguém.',
	'settings:ftp_host'								=> 'Servidor FTP',
	'settings:uptodate'								=> 'a versão do Pancake está em dia (:1)',
	'settings:newversionavailable'					=> 'Há uma nova versão do Pancake disponível (:1)!',
	'settings:updatenow'							=> 'Atualize agora!',
	'settings:checkforupdates' 						=> 'Procurar atualização',
	'settings:youneedtoconfigurefirst'				=> 'Seu Pancake não está configurado para se atualizar sozinho. Por favor, preencha a seguir seus dados de conexão FTP e então clique em "Salvar configurações".<br /> Só assim o Pancake te deixará atualizá-lo.',
	'settings:general'								=> 'Geral',
	'settings:emails'								=> 'Emails',
	'settings:taxes'								=> 'Tributos',
	'settings:currencies'							=> 'Moedas',
	'settings:branding'								=> 'Marca',
	'settings:payment_methods'						=> 'Pagamentos',
	'settings:feeds'								=> 'Feeds',
	'settings:api_keys'								=> 'API Keys',

    'settings:time_entry_times'						=> 'Horários', // conferir
    'settings:include_dates_and_times_in_line_items' => 'Incluir datas e horas nas descrições dos horários de trabalho.',
    'settings:when_generating_invoice'				=> 'Usar uma linha por item na geração de faturas',
    'settings:use_utf8_font'						=> 'Usar fontes UTF-8 em PDFs',// conferir
    'settings:use_utf8_font_explanation'			=> 'Use se caracteres estranhos aparecem em seus PDFs.',
    'settings:pdf_attachments'						=> 'PDF anexos',
    'settings:pdf_attachments_explanation'			=> 'Se habilitado, Pancake anexará o PDF correspondente aos emails de fatura, orçamento ou proposta.',
    '' => '',
    '' => '',
    '' => '',
    '' => '',
    '' => '',



	'settings:site_name'							=> 'Nome do site',
	'settings:language'								=> 'Idioma',
	'settings:timezone'								=> 'Fuso horário',
	'settings:notify_email'							=> 'Email usado pelo pancake',
	'settings:currency'								=> 'Moeda',
	'settings:theme'								=> 'Tema da área externa',
	'settings:admin_theme'							=> 'Tema do painel de controle',
	'settings:admin_name'							=> 'Nome do administrador',
	'settings:date_format'							=> 'Formato de data',
	'settings:time_format' 							=> 'Formato de horário',
	'settings:task_time_interval'					=> 'Arredondamento de horário',
	'settings:task_time_interval_description'		=> '(ex. 00:30 or 0.5 - todos os horários são arredondados em meia hora nas faturas)',
	'settings:mailing_address'						=> 'Endereço do mailing',

	'settings:default_subject'						=> 'Assunto padrão',
	'settings:default_contents'						=> 'Mensagem padrão',
	'settings:new_estimate'							=> 'Novo orçamento',
	'settings:new_invoice'							=> 'Nova fatura',
	'settings:new_proposal'							=> 'Nova proposta',
	'settings:paid_notification'					=> 'Aviso de pagamento',
	'settings:payment_receipt'						=> 'Recebimento de pagamento',
	'settings:new_ticket'							=> 'Novo tíquete',
	'settings:ticket_invoice'						=> 'Nova fatura de tíquete',
	'settings:ticket_updated'						=> 'Tíquete atualizado',
	'settings:ticket_status_updated'				=> 'Situação atualizada',

	'settings:logo'									=> 'Seu logo',
	'settings:frontend_css'							=> 'CSS personalizado para área externa',
	'settings:backend_css'							=> 'CSS personalizado para área interna',

	'settings:rss_password'							=> 'Senha de RSS',
	'settings:default_feeds'						=> 'Feeds padrão',
	'settings:cron_job_feed'						=> 'Cron Job',
	'settings:feed_generator'						=> 'Gerador de Feed',
	'settings:your_link'							=> 'Seu link',
	'settings:bcc'									=> 'CCO',
	'settings:automaticallybccclientemail'			=> 'Automaticamente envie para o email do pancake (definido acima) uma cópia de todos os emails para clientes',
	'settings:api_note'								=> 'Nome / Nota',
	'settings:api_key'								=> 'Chave',

	'settings:tax_name'								=> 'Tributo',
	'settings:tax_value'							=> 'Valor',
	'settings:tax_reg'								=> 'Registro / Código',
	'settings:add_tax'								=> 'Adicionar outro tributo',

	'settings:currency_name'						=> 'Moeda',
	'settings:currency_code'						=> 'Código da moeda',
	'settings:exchange_rate'						=> 'Taxa de câmbio',
	'settings:add_currency'							=> 'Adicionar outra moeda',
	/** End Settings **/

	'update:ifyourenotsurecontactus'				=> 'Se não está certo do que fazer, por favor, <a href="http://pancakeapp.com/forums/newtopic/2/">crie um novo tópico no fórum de suporte técnico</a>.',
	'update:youmodified'							=> 'Você modificou',
	'update:youdeleted'								=> 'Você apagou',
	'update:loadingpleasewait'						=> 'Carregando. Por favor, aguarde...',
	'update:errordownloading'						=> 'Uma atualização para o Pancake está disponível, mas o Pancake está com problemas para baixá-la.',
	'update:herearestepstofix'						=> 'Há umas poucas soluções que você pode tentar para corrigir isso:',
	'update:makesureuploadsiswritable'				=> 'Certifique-se de que sua pasta de arquivos enviados é gravável (CHMOD).',
	'update:deletepancakesystemupdate'				=> 'Apague a pasta "pancake-update-system" (dentro da pasta uploads) e todo seu conteúdo.',
	'update:loadpancakeagain'						=> 'Recarregue o Pancake Se o error persistir, mude o proprietário da pasta do Pancake (chown) para que ele seja o mesmo do <i>web server</i>. Se você não pode fazer isso, ou não sabe como fazer, por favor, envie um email para support@pancakeapp.com e te ajudaremos.',
	'update:whatschanged'							=> 'O que há de novo na versão :1',
	'update:ftp_conn'								=> 'Pancake não consegue se conectar ao servidor de  FTP.',
	'update:ftp_login'								=> 'Pancake não conseuge se autenticar via FTP (nome de usuário ou senha de FTP errados?).',
	'update:ftp_chdir'								=> 'Pancake não consegue acertar o caminho no FTP (provavelmente o caminh onão existe).',
	'update:ftp_no_uploads'							=> 'Pancake não tem permissão para salvar arquivos via FTP.',
	'update:ftp_indexwrong'							=> 'O caminho no FTP fornecido não é correto. Deveria ser o caminho da pasta do Pancake.',
	'update:ftp_indexnotfound'						=> 'O caminho no FTP fornecido não é correto. Deveria ser o caminho da pasta do Pancake.',
	'update:update_conflict'						=> 'Você modificou alguns arquivos desde a última atualização. Para zelar pelas suas modificações, segue uma lista dos arquivos modificados e em conflito com a última atulização.',
	'update:update_no_perms'						=> 'Pancake não tem as permissões necessárias para se atualizar ou não tem acesso a uam conta de FTP de onde possa se atualizar. A atualização não pode prosseguir.',
	'update:review_files'							=> 'Por favor, confira esses arquivos e faça cópias antes de prosseguir. Quando a atualização terminar, você precisará refazer suas modificações. Por favor, não apenas coloque os arquivos de volta já que isso pode quebrar o Pancake.',
	'update:internetissues'							=> 'Pancake não consegue se conectar à Internet.',
	'update:pancakeneedsinternet'					=> 'Para o Pancake funcionar direito, seu servidor precisa permitir que ele busque algumas informações da Internet (porta 80).',
	'update:maybefirewall'							=> 'Parece que seu servidor impede que o Pancake acesse a Internet. Pode ser uma questão com o <i>firewall</i> no seu servidor. Por favor, peça ajuda ao seu provedor de hospedagem. Peça que dÊem acesso para o PHP acessar :1.',
	'update:nointernetaccess'						=> 'Sem acesso à Internet',
	'update:pancakeupdated'							=> 'Pancake foi atualizado de :1 para :2',
	/** Action Logger  **/

	/** End Action Logger **/

	/** Partial Payments **/
	'partial:partialpayments'						=> 'Plano de pagamento',
	'partial:totalamounttobepaid'					=> 'Total a ser pago pelo cliente',
	'partial:amountlefttobeadded'					=> 'Quantia restante para ser parcelada',
	'partial:amounttoobig'							=> 'Quantia que precisa ser removida das parcelas',
	'partial:noamountneeded'						=> 'Suas parcelas estão pagas.',
	'partial:amount'								=> 'Quantia',
	'partial:add_payment'							=> 'Adicionar pagamento',
	'partial:dueon'									=> 'Devido sobre',
	'partial:addanother'							=> 'Adicionar outra parcela a esse pagamento',
	'partial:disabledforrecurring'					=> 'Pagamentos recorrentes são limitados a uma parcela',
	'partial:paymentdetails'						=> 'Detalhes do pagamento',
	'partial:wrongtotal'							=> 'A soma de todas as parcelas de seu pagamento não corresponde ao total da cobrança.',
	'partial:problemsaving'							=> 'Ocorreu um problema enquanto o plano de parcelamento era salvo. Por favor, tente novamente.',
	'partial:wrongtotalbutsaved'					=> 'A soma de todas as parcelas de seu pagamento não corresponde ao total da cobrança.<br />As mudanças na fatura foram salvas, mas você precisa corrigir as parcelas.',
	'partial:problemsavingbutsaved'					=> 'Ocorreu um problema enquanto o plano de parcelamento era salvo. Por favor, tente novamente.<br />As mudanças na fatura foram salvas, mas o plano de parcelamento não.',
	'partial:savepaymentdetails'					=> 'Salvar detalhes de pagamento',
	'partial:partpaidthanks'						=> 'Essa parcela de sua fatura foi paga. Obrigado.',
	'partial:proceedtopayment'						=> 'Proceder ao pagamento',
	'partial:topaynowgoto'							=> 'Para pagar agora, por favor, vá para :1',
    'partial:pay_part_x_now'						=> 'Pagar agora a parcela #:1 de sua fatura',
	'partial:dueondate'								=> 'devido sobre :1',	//conferir
	'partial:paymentmethod'							=> 'Método de pagamento',
	'partial:paymentdate'							=> 'Data de pagamento',
	'partial:paymentstatus'							=> 'Situação do pagamento',
	'partial:transactionid'							=> 'ID da transação',
	'partial:markaspaid'							=> 'Marcar como pago',
	'partial:transactionfee'						=> 'Tributo sobre a transação',
	/** End Partial Payments **/

	/** Payment Gateways **/
	'paypal:clickhere'								=> 'Clique aqui para proceder',
	'authorize:transaction_key'						=> 'Transaction Key',	//conferir
	'paypal:email'									=> 'Email do PayPal',		//conferir
	'paypal:fee'									=> 'Tarifa do PayPal (%)',		//conferir
	'paypalpro:paypalpro'							=> 'PayPal Payments Pro (BETA)',	//conferir
	'paypalpro:viacreditcard'						=> 'Pagar via cartão de crédito',
	'cash:cash'										=> 'Dinheiro',
	'check:check'									=> 'Cheque',
	'moneyorder:moneyorder'							=> 'Ordem de pagamento',
	'creditcard:creditcard'							=> 'Cartão de crédito',
	'banktransfer:banktransfer'						=> 'Transferência bancária',
	'gateways:errorupdating'						=> 'Houve um erro enquanto o método de pagamento era atualizado. Por favor, contacte o pessoal de suporte.',
	'gateways:paymentmethods'						=> 'Métodos de pagamento',
	'gateways:selectpaymentmethod'					=> 'Selecione o método de pagamento',
	'gateways:nogatewayused'						=> 'Nenhum método usado: parcela não foi paga',
	'gateways:completed'							=> 'Completo',
	'gateways:refunded'								=> 'Reembolsado',
	'gateways:unpaid'								=> 'Não pago',
	'gateways:paymentrejected'						=> ':1 pagamento rejeitado',		//conferir
	'gateways:rejectedemail'						=> 'Pancake foi avisado sobre um :1 pagamento que um de seus clientes (:2) fez, mas :1 o rejeitou.',
	'gateways:pending'								=> 'Pendente',
	'gateways:returntowebsite'						=> 'Voltar para :1',
	'gateways:cc_type'								=> 'Tipo de cartão de crédito',	//conferir - não deveria ser bandeira?
	'gateways:cc_number'							=> 'Número do cartão de crédito',
	'gateways:cc_exp'								=> 'Válido até',
	'gateways:cc_cardholder'						=> 'Nome no cartão',
	'gateways:cc_code'								=> 'Código CVV',
	'gateways:payment_details'						=> 'Detalhes de pagamento',
	'gateways:api_signature'						=> 'API Signature',	//conferir
	'gateways:api_password'							=> 'API Password',	//conferir
	'gateways:api_username'							=> 'API Username',	//conferir
	/** End Payment Gateways **/

	/** Kitchen Area **/
	'kitchen:edit_comment'							=> 'Editar comentário',
    'kitchen:add_a_comment'							=> 'Adiconar comentário',
	'kitchen:kitchen_name'							=> 'Área de acesso dos clientes',
	'kitchen:pleaselogin'							=> 'Por favor, forneça sua <strong>frase de acesso</strong> para acessar sua conta',
	'kitchen:nocomments'							=> 'Não há comentários ainda.',
	'kitchen:comment'								=> 'Comentário',
	'kitchen:comments'								=> 'Commentários',
    'kitchen:comments_x'                            => 'Comentários (:1)',// conferir
	'kitchen:file'									=> 'Arquivo',
	'kitchen:submitcomment'							=> 'Comentar',
	'kitchen:attachment'							=> 'Anexo',
	'kitchen:saidon'								=> 'disse em :1, às :2',
	'kitchen:subjectinvoice'						=> 'Novo comentário para fatura #',
	'kitchen:subjectestimate'						=> 'Novo comentário para orçamento #',
	'kitchen:subjectproject'						=> 'Novo comentário para projeto:',
	'kitchen:subjecttask'							=> 'Novo comentário para tarefa:',
	'kitchen:subjectproposal'						=> 'Novo comentário para proposta:',
	'kitchen:backtodashboard'						=> 'De volta ao painel',
	'kitchen:client_welcome'						=> 'Área de acesso de clientes para:',
	'kitchen:urltosend'								=> 'URL de acesso de clientes',
	'kitchen:nopassphrase'							=> 'Atualmente a <strong>frase de acesso</strong> do cliente não está configurada, o que faz da url tudo que é necessário para ver a área de clientes. Se você gostaria de melhorar a segurança da área com uma <strong>frase de acesso</strong>, por favor, edite esse cliente e configure uma.',
	'kitchen:passphraseset'							=> '<strong>Frase de acesso</strong> do cliente configurada',
	'kitchen:passphrase'							=> '<strong>Frase de acesso</strong>',
	'kitchen:description'							=> 'Essa é a url a ser enviada ao seu cliente para que ele possa acessar os projetos e faturas que você permitir.',
	'kitchen:people_in_discussion'					=> 'Pessoas conversando',

    'kitchen:latest_invoice'						=> 'Última fatura',
    'kitchen:unpaid_balance'						=> 'Balanço devido: :1',//conferir
    'kitchen:total_paid_to_date'					=> 'Total pago até: :1',

	/** END Kitchen Area **/

    'store:store'									=> 'Loja',
	'store:buy'										=> 'Comprar ($:1)',
	'store:update'									=> 'Atualizar',
	'store:install'									=> 'Instalar',
	'store:settings'								=> 'Configurações',
	'store:already_bought'							=> 'Esse item já foi comprado!',
	'store:installed_successfully'					=> 'Você instalou o :1 :2.',
	'store:plugin'									=> 'Plugin',
	'store:payment_gateway'							=> 'Gateway de pagamento',
	'store:frontend_theme'							=> 'Tema da área externa',
	'store:backend_theme'							=> 'Tema do painel de controle',
	'store:unknown'									=> 'Desconhecido',
	'store:updatestoreitems'						=> 'Atualizar itens da loja',
	'store:download_free'							=> 'Baixar (GRATUITO)',
	'store:error1000'								=> 'Seu token de autorização não é mais válido. Você precisa preencher novamente os dados de pagamento em pancakeapp.com.',
	'store:error1001'								=> 'Você já comprou esse item!',
	'store:error1002'								=> 'Um problema ocorreu durante a cobrança no seu cartão de crédito. Tente novamente mais tarde.',
	'store:error1003'								=> 'Você fez uma solicitação inválida.',

    'email_templates:new_invoice'					=> 'Nova fatura',
    'email_templates:new_estimate'					=> 'Novo orçamento',
    'email_templates:new_proposal'					=> 'Nova proposta',
    'email_templates:invoice_payment_notification_for_admin' 	=> 'Aviso de pagamento efetuado (enviado ao admin)',
    'email_templates:invoice_payment_notification_for_client' 	=> 'Aviso de pagamento recebido (enviado ao cliente)',
    'email_templates:new_ticket'					=> 'Novo tíquete',
    'email_templates:new_ticket_invoice'			=> 'Nova fatura sobre tíquete',//conferir
    'email_templates:ticket_updated'				=> 'Aviso de atualização de tíquete',
    'email_templates:ticket_status_updated'			=> 'Aviso de atualização de situação em tíquete',
    'email_templates:assigned_to_task'				=> 'Aviso de atribuição de tarefa',
    'email_templates:assigned_to_milestone'			=> 'Aviso de atribuição de milhagem',//conferir
    'email_templates:new_comment'					=> 'Aviso de novo comentário',
    
    'global:timer_app'								=> 'Cronômetro do Pancake',

	/** Dashboard **/


	/** END Dashboard **/

    # v4.0.5

    'invoices:lastreoccurrence'						=> 'Última recorrência: :1',
    
    # Begin v4.1.2 changes
    'invoices:converted_to_estimate'				=> "Fatura #:1 convertida em orçamento.",
    'global:converttoestimate'						=> 'Converter em orçamento',
    # End v4.1.2 changes
  
    # Begin v4.1.3 changes
    'tickets:view_archived'							=> 'Tíquetes arquivados',
    'tickets:view_unarchived'						=> 'Tíquetes ativos',
    'tickets:archiving_ticket'						=> 'Arquivando tíquete',
    'tickets:unarchiving_ticket'					=> 'Desarquivando tíquete',
    'tickets:unknown_error_ticket_not_altered'		=> 'Aconteceu um erro desconhecido. Seu tíquete não foi alterado.',
    # End v4.1.3 changes
    
    # Begin v4.1.4 changes
    'tasks:starting_timer'							=> 'Iniciando cronômetro',
    'tasks:stopping_timer'							=> 'Parando cronômetro',
    'global:all_comments'							=> 'Todos os comentários',
    'dashboard:view_all_comments'					=> 'Ver todos comentários',
    'dashboard:latest_comments'						=> 'Últimos comentários',
    'dashboard:written_by'							=> 'Escrito por :1 em :2',
    'dashboard:client_activity'						=> 'Atividades do cliente',
    'dashboard:view_all_client_activity'			=> 'Ver todas atividades dos clientes',
    'dashboard:team_activity'						=> 'Atividades da equipe',
    'dashboard:view_all_team_activity'				=> 'Ver todas as atividades da equipe',
    'dashboard:my_tasks'							=> 'Minhas tarefas',
    'dashboard:view_all_my_tasks'					=> 'Ver todas as minhas tarefas',
    'dashboard:what_the_team_is_working_on'			=> 'Em que a equipe está trabalhando.',
    # End v4.1.4 changes
    
    # Begin v4.1.6 changes
    'global:save_milestone'							=> 'Salvar milhagem',
    'global:save_task'								=> 'Salvar tarefa',
    'global:private_comment'						=> 'Esse comentário é privado. Seu cliente não o vê.',
    'global:clients_cant_see_private'				=> 'Clientes não vêem comentários privados.',
    'global:is_private'								=> 'Privado?',
    # End v4.1.6 changes
    
    # Begin v4.1.7 changes
    'tickets:disable_client'						=> '-- Desativar tíquetes de suporte --',
    # End v4.1.7 changes
    
    # Begin v4.1.8 changes
    'global:css'									=> 'CSS personalizado',
    'global:js'										=> 'JavaScript personalizado',
    'global:js_explanation'							=> 'Você pode usar jQuery, se quiser. Seu código será adicionado logo antes do &lt;/body&gt;.',
    'settings:frontend_js'							=> 'JavaScript personalizado para área externa',
    'settings:backend_js'							=> 'JavaScript personalizado para área interna',
    # End v4.1.8 changes
    
    # Begin v4.1.9 changes
    'proposals:estimate_number_and_amount'			=> 'Orçamento #:1 (:2)',
    # End v4.1.9 changes
    
    # Begin v4.1.10 changes
    'clients:delete'								=> 'Apagar cliente',
    # End v4.1.10 changes
    
    # Begin v4.1.11 changes
    'global:nolongerexists'							=> '[NÃO EXISTE MAIS]',
    'global:billed_amount'							=> 'Total faturado',
    'global:unbilled_amount'						=> 'Total não fatarado',
    'global:is_billed'								=> 'Faturado?',
    # End v4.1.11 changes
  
    # Begin v4.1.14 changes
    "settings:year_start"							=> "Início do ano fiscal",
    "dashboard:since_explanation"					=> "Desde :1",
    # End v4.1.14 changes
    
    # Begin v4.1.15 changes
    "export:invoices_csv"							=> "Faturas (CSV)",
    # End v4.1.15 changes
    
    # Begin v4.1.17 changes
    "projects:createdtemplate"						=> "Modelo de projeto criado. Agora você pode criar projetos a partir desse modelo.",
    "projects:delete_template"						=> "Apagar modelo",
    "projects:deleted_template"						=> "Modelo apagado.",
    # End v4.1.17 changes
    
    # Begin v4.1.19 changes
    "export:expenses_csv" => "Despesas (CSV)",
    "export:clients_csv" => "Clientes (CSV)",
    "projects:expense_date" => "Data da despesa", // conferir
    # End v4.1.19 changes
    
    # Begin v4.1.20 changes
    "clients:can_create_support_tickets" => "Permitir criação de tíquetes de suporte pelo cliente?",
    "tickets:submit_new" => "Enviar um tíquete",// conferir
    "global:cancel" => "Cancelar",
    "global:timers" => "Cronômetros",
    "global:more" => "Mais",
    # End v4.1.20 changes
    
    # Begin v4.1.22 changes
    "global:search" => "Busca",
    "authorize:api_login_id" => "API Login ID",
    "authorize:api_login_id_description" => "Você pode encontrar isso em Authorize.net, em Account > API Login ID e Transaction Key.",
    "authorize:md5_hash" => "MD5-Hash",
    "authorize:md5_hash_description" => "Por padrão, esse é o seu API Login ID. Você pode mudar isso em Authorize.net, em Account > MD5-Hash. Se você ver, 'Hash Value Set: No', deixe vazio.",
    "transactions:paymentfailed" => "O pagamento falhou",
    "transactions:extrapaymentfailed" => "Um problema desconhecido aconteceu durante a tentatica de processar seu pagamento. Por favor, contacte :1 em :2 e peça por auxílio.",
    # End v4.1.22 changes
    
);

/** End of file: pancake_lang.php **/