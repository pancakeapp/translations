<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Pancake
 * A simple, fast, self-hosted invoicing application
 *
 * @package     Pancake
 * @author      Pancake Dev Team
 * @copyright   Copyright (c) 2010, Pancake Payments
 * @license     http://pancakeapp.com/license
 * @link        http://pancakeapp.com
 * @since       Version 1.0
 */

// ------------------------------------------------------------------------

$lang = array(

    /** Global Words 2-4-17 **/
    'global:overview' => 'Overblik',
    'global:error' => 'Fejl',
    'global:pancakeby7am' => 'Pancake :1',
    'global:allrelatedmediacopyright' => 'Pancake og alle relaterede medier har ophavsret :1 :2',
    'global:insecure_action' => 'En usikker handling er blevet afbrudt',
    'global:disabled_in_demo' => 'Nogle funktioner på denne side er ikke tilgængelige i demoen.',
    'global:estimates' => 'Estimater',
    'global:estimate' => 'Estimat',
    'global:incomplete_tasks' => 'Igangværende opgaver',
    'global:completed_tasks' => 'Fuldførte opgaver',
    'global:projects' => 'Projekter',
    'global:tickets' => 'Tickets',
    'global:project' => 'Projekt',
    'global:upload_failed' => 'Det lykkedes ikke at uploade din fil. Venligst prøv igen. Hvis problemet fortsætter, venligst kontakt support@pancakeapp.com.',
    'global:upload_not_allowed' => 'Filtypen du prøver at uploade er ikke tilladt. Hvis du til uploade en fil af denne type, venligst komprimer filen til .zip eller et andet arkivformat.',
    'global:copied' => 'Kopieret!',
    'global:sentbutunpaid' => 'Åben (Sendt, men ubetalt)',
    'global:task' => 'Opgave',
    'global:clients' => 'Kunder',
    'global:access_denied' => "Adgang nægtet",
    'global:users' => 'Brugere',
    'global:send_to_client' => 'Sendt til kunde',
	'global:couldnotsendemail' => 'Kunne ikke sende e-mailen. Venligst tjek dine e-mail indstillinger.',
    'global:emailsent' => 'E-mailen er sendt!',
    'global:yes' => 'Ja',
    'global:no' => 'Nej',
    'global:notyetsent' => 'Ikke sendt til kunde',
    'global:dontshowagain' => "Vis ikke dette igen",
    'global:enable' => 'Aktiver',
    'global:is_enabled' => 'Aktiveret?',
    'global:is_completed' => 'Fuldført?',
    'global:Y' => 'J',
    'global:N' => 'N',
    'global:notes' => 'Noter',
    'global:description' => 'Beskrivelse',
    'global:backtoadmin' => 'Tilbage til Manager',
    'global:type' => 'Type',
    'global:name' => 'Navn',
    'global:first_name' => 'Fornavn',
    'global:last_name' => 'Efternavn',
    'global:company' => 'Virksomhed',
    'global:for' => 'til',
    'global:from' => 'fra',
    'global:phone' => 'Telefon',
    'global:email' => 'E-mail',
    'global:contacts' => 'Kontakter',
    'global:week' => 'Ugentlig',
    'global:na' => 'N/A',
    'global:quarterly' => 'Kvartalsvis',
    'global:statistics' => "Statistikker",
    'global:month' => 'Månedtlig',
    'global:year' => 'Årligt',
    'global:fax' => 'Fax',
    'global:mobile' => 'Mobil',
    'global:address' => 'Adresse',
    'global:api_key' => 'API nøgle',
    'global:website' => 'Webside',
    'global:action' => 'Handling',
    'global:items' => 'Linjer',
    'global:reusableinvoiceitems' => 'Gemte fakturalinjer',
    'global:reusableinvoiceitems_description' => 'Du kan bruge gemte fakturalinjer, når du vil benytte den samme linje i flere fakturaer. Du kan bruge gemte fakturalinjer når du opretter eller redigerer en faktura, ved at begynde at skrive navnet på den gemte fakturalinje, og pancake vil tilbyde at importere den gemte fakturalinje.',
    'global:create_invoice_estimate' => 'Opret tilbud og fakturaer.',
    'global:createinvoice' => 'Opret faktura',
    'global:paid' => 'Betalt',
    'global:unpaid' => 'Ubetalt',
    'global:overdue' => 'Forfalden',
    'global:time_entries' => 'Tidsregistreringer',
    'global:invoices' => 'Fakturaer',
    'global:invoice' => 'Faktura',
    'global:tasks' => 'Opgaver',
    'global:dashboard' => 'Kontrolpanel',
    'global:settings' => 'Indstillinger',
    'global:plugins' => 'Plugins',
    'global:installed' => 'Installeret',
    'global:changepassword' => 'Ændre adgangskode',
    'global:logout' => 'Log ud',
    'global:status' => 'Status',
    'global:client' => 'Kunde',
    'global:user' => 'Bruger',
    'global:title' => 'Titel',
    'global:subtitle' => 'Undertitel',
    'global:to' => 'Til (adskil flere adresser med et komma)',
    'global:subject' => 'Emne',
    'global:thanks' => 'Tak!',
    'global:proposals' => 'Tilbud',
    'global:proposal' => 'Tilbud',
    'global:reports' => 'Rapporter',
    'global:item' => 'Fakturalinje',
    'global:report' => 'Rapport',
    'global:saveandinsert' => 'Gem og indsæt',
    'global:details' => 'Detaljer',
    'global:license_key' => 'Licens nøgle',
    'global:version' => 'Version :1',
    'global:content' => 'Indhold',
    'global:add' => 'Tilføj',
    'global:edit' => 'Rediger',
    'global:resend' => 'Gensend',
    'global:sent' => 'Sendt',
    'global:not_sent' => 'Ikke sendt',
    'global:view' => 'Se',
    'global:delete' => 'Slet',
    'global:remove' => 'Fjern',
    'global:sort' => 'Sorter',
    'global:deleteitem' => 'Slet fakturalinje',
    'global:dragtoreorder' => 'Træk for at ændre rækkefølgen',
    'global:start' => 'Start',
    'global:stop' => 'Stop',
    'global:start_timer' => 'Start tidtagning',
    'estimates:create' => "Opret estimat",
    'global:stop_timer' => 'Stop tidtagning',
    'global:created' => 'Oprettet',
    'global:updated' => 'Opdateret',
    'global:update' => 'Opdater',
    'global:update_available' => ':1 opdatering venter',
    'global:updates_available' => ':1 opdateringer venter',
    'global:downloadpdf' => 'Download PDF',
    'global:yesdelete' => 'Ja, slet!',
    'global:confirm_emphisised' => 'Denne handling kan ikke fortrydes!',
    'global:color' => 'Farve',
    'global:save' => 'Gem',
    'global:unknown' => 'Ukendt',
    'global:upload_error' => 'Der opstod et problem under upload af filen. Prøv venligst igen.',
    'global:recurring' => 'Faste',
    'global:unsent' => 'Usendt',
    'global:converttoproject' => 'Konverter til projekt',
    'global:converttoinvoice' => 'Konverter til faktura',
    'global:viewpdf' => 'Se PDF',
    'global:duplicate' => 'Kopier',
    'global:urltosend' => 'Her er adressen, der skal sendes:',
    'global:copytoclipboard' => 'Kopier til udklipsholder',
    'global:quick_links' => 'Hurtige links',
    'global:view_all' => 'Se alle',
    'global:deleted' => 'Slettet',

    'global:add_more' => "Tilføj flere",
    'global:upload_files' => "Upload filer",
    'global:optional_increment' => '<strong>Valgfrit</strong> - øges automatisk',

    'login:ahoy' => 'Halløj!',
    'login:readytodothis' => 'Klar til at gøre det?',
    'login:sup' => 'Sup?',
    'global:actions' => 'Handlinger',
    'global:select' => "--- Vælg ---",

    'global:mark_as_unanswered' => 'Sæt som ubesvaret',
    'global:mark_as_accepted' => 'Sæt som accepteret',
    'global:mark_as_rejected' => 'Sæt som afvist',
    'global:reject_estimate' => 'Afvis estimat',
    'global:accept_estimate' => 'Accepter estimat',
    'global:estimate_rejected' => 'Estimat afvist',
    "global:estimate_accepted" => "Estimat accepteret",
    'global:reject_proposal' => 'Afvis tilbud',
    'global:accept_proposal' => 'Accepter tilbud',
    'global:proposal_rejected' => 'Tilbud afvist',
    "global:proposal_accepted" => "Tilbud accepteret",
    "global:client_area" => "Kundecenter",
    "global:admin" => "Manager",
    "global:all_settings" => "Alle indstillinger",
    'global:viewable' => 'Synlig i kundecenter',
    'global:not_viewable' => 'Skjult i kundecenter',
    'global:milestones' => "Milepæl",

    /** Dashboard 2-4-17 **/
    'dashboard:collected' => 'Indbetalinger',
    'dashboard:outstanding' => 'Udestående',
    'dashboard:latest_activity' => 'Seneste aktivitet',
    'dashboard:these_are_your_upcoming_tasks' => "Her er dine næste opgaver, :1.",
    'dashboard:upcoming_tasks' => 'Næste opgaver',
    /** End Dashboard **/

    /** Timesheets 2-4-17 **/
    'global:timesheets' => 'Tidsregistreringer',
    'timesheets:todays' => 'I dag',
    'timesheets:all_users' => 'Alle brugere',
    'timesheets:rounded_time' => 'Rundet op til den nærmeste :1',
    'timesheets:there_are_no_time_entries' => "Der er ingen tider at vise for den angivne periode.",
    /** END Timesheets **/


    /** Users 2-4-17 **/

    // ==============================
    'login:forgotinstructions' => 'Indtast venligst din e-mailadresse, så vi kan sende dig en e-mail for at nulstille din adgangskode.',
    'login:reset' => 'Nulstil adgangskode',
    'login:username' => 'Brugernavn',
    'login:password' => 'Adgangskode',
    'login:changepassword' => 'Skift adgangskode',
    'login:email' => 'E-mailadresse',
    'login:login' => 'Log ind',
    'login:logout' => 'Log ud',
    'login:remember' => 'Husk mig',
    'login:forgot' => 'Glemt din adgangskode?',
    'login:cancel' => '&laquo; Annuller',
    /** End Users **/

    /** User Groups 2-4-17 **/
    'groups:edit_title' => 'Rediger brugergruppe %s',
    'groups:add_title' => 'Tilføj brugergruppe',

    /** Clients 2-4-17 **/
    'clients:title' => 'Alle kunder',
    'clients:filter' => 'Filtrer kunder',
    'clients:add' => 'Tilføj kunde',
    'clients:removefilter' => 'Fjern filter',
    'clients:edit' => 'Rediger kunde',
    'clients:noclienttitle' => 'Du skal tilføje nogle kunder!',
    'clients:noclientbody' => 'Så du kan sende dem fakturaer. Tilføj en nu?',
    'clients:noclienttitlefilter' => 'Ingen kunder passer til dit filter',
    'clients:hasnoinvoicetitle' => 'Denne kunde er nu klar!',
    'clients:hasnoinvoicebody' => 'Opret en faktura og få din betaling! Tilføj en nu?',
    'clients:added' => 'Kunden er tilføjet!',
    'clients:edited' => 'Kunden er opdateret!',
    'clients:deleted' => 'Kunden er slettet!',
    'clients:does_not_exist' => 'Kunden findes ikke!',
    'clients:health_check' => 'Sundhedstjek',
    'clients:all' => 'Alle',
    'clients:delete_title' => 'Slet denne kunde?!?!',
    'clients:delete_message' => 'Er du sikker på at du vil slette kunden?<br />Du vil også slette ALT som er tilknyttet kunden - fakturaer, projekter, tilbud mm.',
    'clients:clientaction' => '&nbsp;',
    'clients:passphrase' => 'Kodeord',
    'clients:bad_passphrase' => 'Kodeord er forkert.',
    'clients:total_clients' => 'Kunder i alt',
    'clients:support' => 'Support',
    'clients:support_rates' => 'Support rater',
    'clients:edit_support_rates' => 'Sæt rater',
    /** End Clients **/


    /** Contact Log 2-4-17 **/
    'contact:contact' => 'Kontakt',
    'contact:subject' => 'Emne',
    'contact:content' => 'Indhold',
    'contact:method' => 'Kontakt metode',
    'contact:calling_title' => 'Kontakt kunde ":1"',
    // 'contact:view_all'		=>	'View All',
    /** End Contact Log **/

    /** Invoices 13-4-17 **/
    'invoices:markassent' => 'Sæt som sendt',
    'invoices:invoicedate' => 'Fakturadato',
    'invoices:file_name' => "Filnavn",
    'invoices:date_created' => "Oprettelsesdato",
    'invoices:size' => "Størrelse",
    'invoices:files' => "Filer",
    'invoices:sentbutunpaid' => 'Fakturaer sendt til kunden, men stadig ikke betalt',
    'invoices:duplicated' => 'Faktura nr. :1 er kopieret. Den nye faktura har nummer :2.',
    'invoices:all' => 'Alle fakturaer',
    'invoices:empty' => 'Ingen fakturaer endnu.',
    'invoices:overdue' => 'Forfaldne fakturaer',
    'invoices:tax_collected' => "Indbetalt moms",
    'invoices:paid' => 'Betalte fakturaer',
    'invoices:recurringinvoices' => 'Faste fakturaer',
    'invoices:unsentinvoices' => 'Usendte fakturaer',
    'invoices:unpaid' => 'Ubetalte fakturaer',
    'invoices:thisinvoicewaspaidon' => 'Denne faktura er betalt den :1. Mange tak!',
    'invoices:senton' => 'Sendt den :1',
    'invoices:lastsenton' => 'Sidst sendt den :1 til :2',
    'invoices:paidon' => 'Betalt den :1',
    'invoices:paidonsingle' => 'Betalt den',
    'invoices:thisinvoiceisunpaid' => "Denne faktura er endnu ikke betalt.",
    'invoices:noinvoicetitle' => 'Du har ingen fakturaer endnu!',
    'invoices:noinvoicesforthefilteredclient' => "Du har ingen fakturaer til :1.",
    'invoices:noinvoicebody' => 'Lav en faktura nu! <br /> Kunder elsker fakturaer!',
    'invoices:send_now_title' => 'Send faktura nu?',
    'invoices:send_now_body' => 'Udfyld nedenstående formular for at få fakturaen tilsendt.',
    'invoices:newinvoice' => 'Opret faktura',
    'invoices:timequantity' => 'Timer/Antal',
    'invoices:ratewithcurrency' => 'Sats (:1)',
    'invoices:taxable' => 'Inkl. moms',
    'invoices:total' => 'I alt',
    'invoices:amount' => 'Sum',
    'invoices:due' => 'Forfaldsdato',
    'invoices:subtotal' => 'Subtotal',
    'invoices:totaltax' => 'Moms i alt',
    'invoices:filestodownload' => 'Filer til download',
    'invoices:added' => 'Fakturaen er tilføjet!',
    'invoices:fileswillbeavailableafterpay' => 'Disse filer vil være tilgængelige til download, når hele fakturaen er indbetalt.',
    'invoices:no_payment_gateways_enabled' => 'Ingen betalingudbyder er blevet aktiveret, hvilket kan gøre det svært at blive betalt. Aktiver i <a href=":1">Indstillinger</a>',
    'invoices:invoicenumber' => 'Faktura nr. :1',
    'invoices:number' => 'Faktura nr.',
    'invoices:type' => 'Fakturatype',
    'invoices:is_recurring' => 'Faste?',
    'invoices:is_paid' => 'Betalt?',
    'invoices:is_sent' => 'Sendt?',
    'invoices:date_entered' => 'Oprettelsesdato',
    'invoices:delete_title' => 'Slet denne faktura?',
    'items:select_time_entry' => 'Tidsregistrering',
    'invoices:delete_message' => 'Er du sikker på at du vil slette denne faktura?',
    'invoices:create' => 'Opret faktura',
    'invoices:edit' => 'Rediger faktura',
    'invoices:amountrequired' => 'Beløb skal udfyldes',
    'invoices:currencydoesnotexist' => 'Valutaen findes ikke.',
    'invoices:unique_id' => 'Unik id',
    'invoices:willreoccurin' => 'Denne faktura vil gentage sig den :1.',
    'invoices:willbesentautomatically' => 'Kunden vil få besked om denne faktura på e-mail den :1.',
    'invoices:clientlastnotifiedon' => 'Kunden har fået besked om denne faktura på e-mail den :1.',
    'invoices:simple' => 'Enkel',
    'invoices:simple_help' => 'En enkel faktura har ingen fakturalinjer. Kun et beløb.',
    'invoices:detailed' => 'Detaljeret',
    'invoices:detailed_help' => 'Detaljerede fakturaer tillader at du har flere fakturalinjer.',
    'invoices:estimate_help' => 'Estimater er detaljerede fakturaer, der ikke kan faktureres.',
    'invoices:unpaid_totalamount' => 'Ubetalt / Samlet beløb',
    'invoices:saveinvoice' => 'Gem faktura',
    'invoices:deleted' => 'Fakturaen er slettet!',
    'invoices:view' => 'Se faktura',
    'invoices:is_viewable' => 'Vis i kundecenter?',
    'invoices:no_invoices' => 'Der er ingen fakturaer.',
    'invoices:addedsuccess' => 'Du har tilføjet en faktura til',
    'invoices:invoice' => 'faktura',
    'invoices:preview' => 'Forhåndsvis faktura',
    'invoices:editinvoice' => 'Rediger faktura nr. :1',
    'invoices:messageupdated' => 'Fakturaen er opdateret!',
    'invoices:resend' => 'Gensend faktura',
    'invoices:client_viewed' => ':1 har set <a href=":2">faktura nr. :3</a> den :4',
    'invoices:client_paid' => ':1 har betalt <a href=":2">faktura nr. :3</a> den :4',
    'invoice:paid_amount' => 'Betalt beløb',
    /** End Invoices **/

    /** Estimates 2-4-17 **/
    'estimates:attachedtoproposal' => 'Vedhæftet til tilbud nr. :1',
    'estimates:duplicated' => 'Estimat nr. :1 er kopieret. Det nye estimat har nummer :2.',
    'estimates:alltitle' => 'Alle estimater',
    'estimates:attachingtoproposal' => 'Vedhæfter estimat til tilbud, vent venligst...',
    'estimates:delete_title' => 'Slet dette estimat?',
    'estimates:delete_message' => 'Er du sikker på at du vil slette dette estimat?',
    'estimates:createnew' => 'Opret estimat',
    'estimates:generate_estimate' => 'Generer estimat',
    'estimates:converted' => 'Konverterede estimat nr. :1 til et projekt.',
    'estimates:converted_to_invoice' => 'Konverterede estimat nr. :1 til en faktura.',
    'estimates:noestimatetitle' => 'Du har ingen estimater',
    'estimates:noestimatesforthisclient' => 'Du har ingen estimater til denne kunde.',
    'estimates:noestimatesforthefilteredclient' => "Du har ingen estimater til :1.",
    'estimates:deleted' => 'Dette estimat er slettet!',
    'estimates:noestimatebody' => 'Skynd dig at komme i gang! Vil du oprette et estimat nu?',
    'estimates:estimatenumber' => 'Estimat nr. :1',
    'estimates:view' => 'Se estimat',
    'estimates:no_estimates' => 'Der er ingen estimater.',
    'estimates:addedsuccess' => 'Du har tilføjet et estimat til',
    'estimates:estimate' => 'estimat',
    'estimates:added' => 'Succes! Estimatet er tilføjet.',
    'estimates:send_now_title' => 'Send estimat nu?',
    'estimates:send_now_body' => 'Udfyld formularen nedenfor og jeg vil sende estimatet til dig.',
    'estimates:send_now' => 'Send estimat',
    'estimates:edit' => 'Rediger estimat',
    'estimates:preview' => 'Forhåndsvis estimat',
    'estimates:editestimate' => 'Rediger estimat nr. :1',
    'estimates:messageupdated' => 'Estimatet er opdateret!',
    'estimates:client_viewed' => ':1 har set <a href=":2">estimat nr. :3</a> den :4',
    'estimates:client_accepted' => ':1 har accepteret <a href=":2">estimat nr. :3</a> den :4',
    'estimates:client_rejected' => ':1 har afvist <a href=":2">estimat nr. :3</a> den :4',
    'estimates:resend' => 'Gensend estimat',
    'estimates:estimatedate' => 'Estimatdato',
    /** End Estimates **/

    /** Projects 2-4-17 **/
    'projects:status_id' => 'Opgavestatus',
    'projects:projected' => 'Forventet',
    'projects:projected_hours' => 'Forventede timer',
    'projects:navigationitem' => 'Projekter',
    'projects:hours_worked' => 'Antal af arbejdstimer',
    'projects:hours_worked_short' => 'Arbejdstimer',
    'projects:alltitle' => 'Alle projekter',
    'projects:totalprojects' => 'Projekter i alt',
    'projects:noprojecttitle' => 'Der er ingen projekter endnu!',
    'projects:noprojecttext' => 'Vil du gerne tilføje et projekt nu? ',
    'projects:add' => 'Opret projekt',
    'projects:createfromtemplate' => 'Opret fra skabelon',
    'projects:doesnotexist' => 'Projektet du forsøger at få adgang til findes ikke.',
    'projects:edit' => 'Rediger projekt',
    'projects:delete' => 'Slet projekt',
    'projects:project' => 'Projekt',

    'projects:new_project_from_estimate_without_number' => "Nyt projekt fra estimat",
    'projects:new_project_from_estimate_with_number' => "Nyt projekt fra estimat nr. :1",

    'projects:due_date' => 'Afleveringsdato',
    'projects:is_completed' => 'Fuldført?',
    'projects:manage_project' => 'Administrer projekt',
    'projects:areyousuredeletetask' => 'Er du sikker på, at du vil slette denne opgave?',
    'projects:add_time' => 'Tilføj tidsregistrering',
    'projects:add_hours' => 'Tilføj timer',
    'projects:generate_invoice' => 'Generer faktura',
    'projects:no_projects' => 'Der er ingen projekter.',
    'projects:archive_proj' => 'Arkiver projekt',
    'projects:archive' => 'Se arkiv',
    'projects:active' => 'Igangværende projekter',
    'projects:archived' => 'Arkiverede projekter',
    'projects:noarchivedprojecttitle' => 'Du har ingen arkiverede projekter.',
    'projects:noarchivedprojecttext' => 'Du kan arkivere et projekt fra din projektside ',
    'projects:allarchivedtitle' => 'Alle arkiverede projekter',
    'projects:templatize' => 'Gem som skabelon',
    'projects:milestone_identifier' => "[Milepæl: :1]",
    /** End Projects **/


    /** Milestones 2-4-17 **/
    'milestones:add' => 'Tilføj milepæl',
    'milestones:edit' => 'Rediger milepæl',
    'milestones:delete' => 'Slet milepæl',
    'milestones:milestone' => 'Milepæl',
    'milestones:assigned_user' => 'Tildelt bruger',
    'milestones:select_default' => '-- Ingen milepæl --',
    'milestones:no_milestone' => 'Opgaver uden milepæl',
    'milestones:add_success' => 'Milepæl ":1" er tilføjet!',
    'milestones:edit_success' => 'Milepæl ":1" er redigeret!',
    'milestones:add_failed' => 'Milepæl ":1" kunne ikke tilføjes.',
    'milestones:edit_failed' => 'Milepæl ":1" kunne ikke redigeres.',
    'milestones:are_you_sure_delete' => 'Er du sikker på at du vil slette milepælen?',
    'milestones:delete_success' => 'Milepæl ":1" er slettet!',
    'milestones:does_not_exist' => 'Milepælen findes ikke.',
    'milestones:target_date' => 'Skæringsdato',
    'milestones:select_assignee_default' => 'Ingen tildelte',
    /** End Milestones **/

    /** Proposals 13-4-17 **/
    'proposal:outline' => 'Overblik af tilbud',


    /** End Proposals **/

    /** Reminders 2-4-17 **/

    'reminders:reminders' => 'Rykkere',
    'reminders:send' => 'Send rykkere',
    'reminders:success' => 'Rykkerne er sendt!',
    'reminders:remind' => 'Ryk',
    'reminders:message' => 'Besked',
    'reminders:due' => 'Forfaldsdato',
    'reminders:details' => 'Detaljer',
    'reminders:log' => 'Log',

    /** End Reminders **/


    /** Email Templates 13-4-17 **/
    'emailtemplates:email_templates' => 'E-mail skabeloner',
    'emailtemplates:create_template' => 'Opret en ny skabelon',
    'emailtemplates:add' => 'Opret en ny e-mail skabelon',
    'emailtemplates:edit' => 'Rediger e-mail skabelon',
    'emailtemplates:manage' => 'Administrer skabeloner',
    'emailtemplates:name' => 'E-mail navn',
    'emailtemplates:subject' => 'E-mail emne',
    'emailtemplates:days' => 'Antal dage',
    'emailtemplates:type' => 'Skabelontype',
    'emailtemplates:success' => 'E-mail skabelon er oprettet',
    'emailtemplates:edited' => 'E-mail skabelon er redigeret',
    'emailtemplates:does_not_exist' => 'E-mail skabelonen findes ikke',
    'emailtemplates:deleted' => 'E-mail skabelonen er slettet',
    'emailtemplates:delete_title' => 'Slet e-mail skabelon',
    'emailtemplates:delete_message' => 'Er du sikker på at du vil slettet e-mail skabelonen?',


    /** End Email Templates **/

    /** Reports 13-4-17 **/
    'reports:perclient' => 'per kunde',
    'reports:datefrom' => 'Fra',
    'reports:allclients' => 'Alle kunder',
    'reports:dateto' => 'Til',
    'reports:byclient' => 'Kunde',

    'reports:view' => 'Se rapport',
    'reports:show_all' => 'Se rapporter',

    'reports:paid_and_unpaid' => "Betalt og ubetalt",
    'reports:paid_vs_unpaid_over_time' => "Betalt vs. ubetalt over tid",
    'reports:per_client' => 'per kunde',
    'reports:total_with_tax' => "I alt (inkl. moms)",
    'reports:total_without_tax' => "I alt (ekskl. moms)",
    'reports:total_collected' => 'I alt indbetalt',
    'reports:fees_paid' => 'Gebyrer betalt',
    'reports:total_amount' => 'Samlet beløb',
    'reports:paid_amount' => "Betalt beløb",
    'reports:unpaid_amount' => "Ubetalt beløb",
    'reports:client_name' => "Kundenavn",

    'reports:nodata' => 'Ingen :1.',
    /** End Reports **/

    /** Currencies 14-4-17**/
    'currencies:default' => '[Standard] :1',
    'currencies:dkk' => 'Danske Kroner',
	'currencies:cad' => 'Canadian Dollar',
    'currencies:eur' => 'Euro',
    'currencies:usd' => 'U.S. Dollar',
    'currencies:gbp' => 'Pound Sterling',
    'currencies:hkd' => 'Hong Kong Dollar',
    'currencies:php' => 'Philippine Peso',
    'currencies:zar' => 'South Africa, Rand',
    /** End Currencies **/

    /** Proposals 14-4-17**/
    'proposals:duplicated' => 'Tilbud nr. :1 er kopieret. Det nye tilbud har nummer :2.',
    'proposals:usesectiontemplate' => 'Brug denne afsnitskabelon',
    'proposals:showcontents' => 'Vis indhold',
    'proposals:hidecontents' => 'Skjul indhold',
    'proposals:deletepremadesection' => 'Slet afsnitskabelon',
    'proposals:nopremadesections' => 'Du har ingen gemte afsnitskabeloner.',
    'proposals:newproposal' => 'Nyt tilbud',
    'proposals:number' => 'Tilbud nr.',
    'proposals:all' => 'Alle tilbud',
    'proposals:noproposaltitle' => "Der er ingen tilbud!",
    'proposals:noproposalbody' => "Du skulle lave et tilbud nu.",
    'proposals:client_viewed' => ':1 har set <a href=":2">proposal nr. :3</a> den :4',
    'proposals:client_accepted' => ':1 har accepteret <a href=":2">proposal nr. :3</a> den :4',
    'proposals:client_rejected' => ':1 har afvist <a href=":2">proposal nr. :3</a> den :4',
    'proposals:rejected' => 'Afvist den :1',
    'proposals:accepted' => 'Accepteret den :1',
    'proposals:lastviewed' => 'Sidst set af kunden den :1, kl. :2.',
    'proposals:neverviewed' => 'ikke set af kunden.',
    'proposals:noanswer' => 'Intet svar',
    'proposals:createproposal' => 'Opret tilbud',
    'proposals:editproposal' => 'Rediger tilbud',
    'proposals:createdsuccessfully' => 'Tilbud oprettet!',
    'proposals:sections' => 'Afsnit',
    'proposals:section' => 'Afsnit',
    'proposals:createsection' => 'Tilføj nyt afsnit',
    'proposals:createpage' => 'Tilføj side',
    'proposals:emptysection' => '(ingen titel)',
    'proposals:emptycontents' => '(ingen indhold)',
    'proposals:emptysubtitle' => '(ingen undertitel)',
    'proposals:for' => 'Tilbud til:',
    'proposals:pagexofcount' => 'Side :1 af :2',
    'proposals:saving' => 'Gemmer...',
    'proposals:save' => 'Gem tilbud',
    'proposals:savepremade' => 'Gem som afsnitskabelon',
    'proposals:addestimate' => 'Tilføj estimat',
    'proposals:saved' => 'Gemt!',
    'proposals:createandedit' => 'Næste: Rediger tilbudets indhold',
    'proposals:delete_message' => 'Er du sikker på at du vil slette tilbudet?',
    'proposals:createpremadesection' => 'Tilføj fra afsnitskabelon',
    'proposals:selected_attachments' => 'Vælg estimat',
    'proposals:attach_selected_estimate' => 'Vedhæft valgte estimat',
    'proposals:proposal' => 'Tilbud',
    'proposals:status' => 'Status',
    'proposals:view' => 'Se tilbud',
    'proposals:estimate' => 'Estimat',
    'proposals:no_proposals' => 'Der er ingen tilbud.',
    'proposals:proposal_title' => 'Tilbudstitel',
    'proposals:kitchennotice' => 'Note: Tilbud vil være synlige i :1 når kunden har besøgt tilbudets link. Det betyder du kan redigere tilbudet som du vil og  kunden vil ikke kunne se det før du tillader det.',
    /** End Proposals **/

    /** Tasks 14-4-17**/
    'tasks:task' => 'Opgave',
    'tasks:edit_succeeded' => 'Opgaven er redigeret.',
    'tasks:hours' => 'Timer',
    'tasks:due_date' => 'Forfaldsdato',
    'tasks:is_completed' => 'Fuldført?',
    'tasks:timer' => 'Tidtagning',
    'tasks:rate' => 'Sats',
    'tasks:default_rate' => 'Standard sats',
    'tasks:entries' => 'Registrerede tider',
    'tasks:view_entries' => 'Se tider',
    'tasks:edit_entry' => 'Rediger tid',
    'tasks:create' => "Tilføj opgave",
    'tasks:create_sub' => "Tilføj delopgave",
    'tasks:task_parent' => "Forælder",
    'tasks:edit' => "Rediger opgave",
    'tasks:create_succeeded' => "Opgaven er oprettet!",
    'tasks:no_task_title' => 'Hmm, ingen opgaver endnu...',
    'tasks:no_task' => "Ingen opgave",
    'tasks:no_task_message' => 'Hvad med at lave en opgave?',
    'tasks:is_viewable' => 'Synlig i kundecenter?',
    'tasks:no_milestones' => 'Opgaver uden milepæle',
    'tasks:not_related_to_a_task' => "-- Ikke tilknyttet en opgave --",
    'tasks:select_parent_default' => '-- Ingen forælderopgave --',
    'tasks:timers_running' => 'Igangsatte tidtagninger',
    'tasks:task_completed_by' => ':1 fuldførte <a href=":2">opgave :3</a> den :4',
    'tasks:discussion' => 'Diskussion: ',
    'tasks:billed_hours' => "Faktureret timer",
    'tasks:unbilled_hours' => "Ikke faktureret timer",


    /** Users 14-4-17 **/
    'users:create_user' => 'Opret bruger',
    'users:confirm_delete_emphasised' => "Du kan ikke fortryde denne handling!",

    /** Items 14-4-17 **/
    'items:name' => 'Linjenavn',
    'items:description' => 'Linjebeskrivelse',
    'items:qty_hrs' => 'Antal / Timer',
    'items:quantity' => 'Mængde',
    'items:rate' => 'Sats',
    'items:tax_rate' => 'Moms sats',
    'items:cost' => 'Pris',
    'items:line_items' => 'Fakturalinjer',
    'items:add' => 'Tilføj fakturalinje',
    'items:edit' => 'Rediger fakturalinje',
    'items:noitemtitle' => 'Du har ingen fakturalinjer endnu!',
    'items:noitembody' => 'Lav nogle fakturalinjer nu - det gør det meget nemmere at lave fakturaer!',
    'items:delete_title' => 'Slet denne fakturalinje?',
    'items:delete_message' => 'Er du sikker på at du vil slette fakturalinje ":1"?',
    'items:type' => 'Type',
    'items:select_standard' => 'Standard',
    'items:select_expense' => 'Udgift',
    'items:add_expense_to_project' => 'Tilføj udgift',
    'items:expenses' => 'Udgifter',
    /** END Items **/

    /** Expenses 14-4-17 **/
    'expenses:expenses' => 'Udgifter',
    'expenses:add' => 'Tilføj udgift',
    'expenses:edit_expense' => 'Rediger udgift',
    'expenses:delete' => 'Slet udgift',
    'expenses:deleted' => 'Udgift er slettet',
    'expenses:all' => 'Alle udgifter',
    'expenses:amount' => 'Beløb',
    'expenses:supplier' => 'Leverandør',
    'expenses:suppliers' => 'Levenrandører',
    'expenses:category' => 'Kategori',
    'expenses:categories' => 'Kategorier',
    'expenses:add_supplier' => 'Tilføj leverandør',
    'expenses:edit_supplier' => 'Rediger leverandør',
    'expenses:add_category' => 'Tilføj kategori',
    'expenses:edit_category' => 'Rediger kategori',
    'expenses:parent_category' => 'Forælderkategori',
    'expenses:filter' => 'Filtrer udgifter',
    'expenses:start_date' => 'Startdato',
    'expenses:end_date' => 'Slutdato',


    /** END Expenses **/

    /** Transactions 14-4-17 **/
    'transactions:paymentcancelled' => 'Betaling annulleret',
    'transactions:extrapaymentcancelled' => 'Din betaling er blevet annulleret.',
    'transactions:paymentreceived' => 'Betaling modtaget!',
    'transactions:fee_applied' => 'Da :1 pålægger et transaktionsgebyr, bliver du opkrævet :2% af det samlede beløb.',
    'transactions:orderbeingprocessed' => 'Vent venligst mens din ordre bliver behandlet. Du vil snart blive videreført til :1.',
    'transactions:ifyouarenotredirected' => 'Hvis du ikke automatisk bliver videreført til :1 om 5 sekunder...',
    'transactions:thankyouforyourpayment' => 'Tak for din betaling. Du modtager snart en kvittering med e-mail.',
    'transactions:ifyouhavefilesyouwillgetanemail' => 'Hvis du har filer du venter på at kunne hente, vil du snart modtage en e-mail med et downloadlink.',
    'transactions:ifyoudonotreceiveemail' => 'Hvis du ikke modtager en e-mail inden for den næste time venligst kontakt :1',
    /** End Transactions **/

    /** Timesheets 14-4-17 **/
    'timesheet:taskname' => 'Opgavenavn',
    'timesheet:starttime' => 'Starttid',
    'timesheet:endtime' => 'Sluttid',
    'timesheet:timeframe' => 'Tidsramme',
    'timesheet:duration' => 'Varighed',
    'timesheet:date' => 'Dato',
    'timesheet:forproject' => 'Tidsregistreringer til projekt ":1"',
    'timesheet:timesheet' => 'Tidsregistrering',
    'timesheet:for' => 'Tidsregistrering til:',
    'timesheet:totalbillable' => 'I alt fakturerbare timer',
    'timesheet:view_pdf' => 'Se tidsregistrering',
    'timesheet:user' => 'Bruger',
    'timesheet:entries' => 'Tidtagning',
    'timesheet:no_entries' => "Der er ingen tidtagninger.",
    /** End Timesheets **/


    /** Support Tickets 14-4-17 **/

    'tickets:all_tickets' => 'Supportbilletter',
    'tickets:support_tickets' => "Sager",
    'tickets:pending' => 'Afventer',
    'tickets:open' => 'Åben',
    'tickets:resolved' => 'Løst',
    'tickets:closed' => 'lukket',
    'tickets:respond' => 'Svar på billet',
    'tickets:ticket_options' => 'Sagsindstillinger',
    'tickets:attachment' => 'Vedhæft',
    'tickets:updated_status' => ':1 opdaterede sagens status til :2',
    'tickets:add_a_new_ticket' => "Tilføj en ny billet",
    'tickets:create_a_new_ticket' => 'Opret en ny billet',
    'tickets:add_ticket' => 'Tilføj billet',
    'tickets:assign_to_user' => 'Tildel bruger',
    'tickets:select_client' => 'Vælg kunde',
    'tickets:ticket_subject' => 'Emne',
    'tickets:ticket_message' => 'Besked',
    'tickets:ticket_priority' => 'Prioritering',
    'tickets:ticket_status' => 'Billetstatus',
    'tickets:no_priority' => '-- Ingen prioritering --',
    'tickets:no_status' => '-- Ingen status --',
    'tickets:no_posts' => "Ingen besked.",

    /** End Support Tickets **/

    /** Frontend 14-4-17 **/
    'frontend:hithere' => 'Hejsa!',
    'frontend:followthemaillinkdude' => 'For at se dine fakturaer skal du klikke på hele linket i den e-mail du har modtaget. Fx :1.',
    'frontend:contactadminforassistance' => 'For hjælp kontakt :1 på :2.',
    /** End Frontend **/

    /** Settings 14-4-17 **/

    'settings:task_statuses' => "Opgave statusser",
    'settings:ticket_statuses' => "Sagsstatusser",
    'settings:ticket_priorities' => "Sagsprioriteringer",
    'settings:background_color' => "Baggrundsfarve",
    'settings:text_color' => "Tekstfarve",
    'settings:text_shadow' => "Tekstskygge",
    'settings:box_shadow' => "Boksskygge",
    'settings:default_rate' => "Standard sats",
    'settings:allowed_extensions' => 'Tilladte filtyper til upload',
    'settings:comma_separated' => 'kommaseparerede',
    'settings:pdf_page_size' => 'PDF sidestørrelse',
    'settings:default_invoice_notes' => 'Standard faktura noter',
    'settings:default_invoice_title' => 'Standard faktura titel',
    'settings:default_invoice_due_date' => 'Standard faktura forfaldsdato',
    'settings:autosave_proposals' => 'Automatisk gem tilbud',
    'settings:default_invoice_due_date_explain' => 'dage efter fakturaen er oprettet. Hvis du ikke vil have en standard dato, så efterlad feltet tomt.',
    'settings:testemailsettings' => 'Test e-mail indstillinger',
    'settings:include_remittance_slip' => 'Betalingsoplysninger',
    'settings:include_remittance_slip_explain' => "Sæt flueben for at fakturaens PDF får tilføjet betalingsoplysninger.",
    'settings:items_per_page' => 'Linjer per side',
    'settings:items_per_page_explain' => 'Antallet af linjer (fakturaer/estimater/tilbud/projekteer/opgaver) som vises per side.',
    'settings:send_x_days_before' => 'Standard "send antal dage før"',
    'settings:file_to_import' => 'Fil til importering',
    'settings:file_should_be_csv' => 'Pancake vil automatically gennemgå din fil og importere alt fra den. Hvis Pancake ikke kan importere din fil, vil du få besked, og du vil få muligheden for at sende information til Pancake, så du kan få hjælp til importen af din fil.',
    'settings:importnow' => 'Importer nu!',
    'settings:whatimporting' => 'Hvad vil du importere?',
    'settings:whatexporting' => 'Hvad vil du eksportere?',
    'settings:nouploadedimportfile' => 'Har du uploadet en fil til importering?',
    'settings:import' => 'Importer',
    'settings:importedclients' => ':1 kunder er importeret.',
    'settings:importedprojects' => ":1 projekter er importeret.",
    'settings:importedusers' => ":1 brugere er importeret.",
    'settings:importedinvoices' => ':1 fakturaer er importeret.',
    'settings:importedtasks' => ':1 opgaver er importeret.',
    'settings:importedestimates' => ':1 estimater er importeret.',
    'settings:importedtime_entries' => ':1 tidtagninger er importeret.',
    'settings:xwereduplicates' => ':1 var dubletter og derfor ignoreret.',
    'settings:import_desc' => 'Importer data ind i Pancake.',
    'settings:export' => 'Eksporter',
    'settings:exportnow' => 'Eksporter nu!',
    'settings:importexport' => 'Importer / Eksporter',
    'settings:removelogo' => 'Fjern logo',
    'settings:wrong_license_key' => 'Licensnøglen er ikke gyldig.',
    'settings:noopenssl' => 'Din PHP-server har ikke OpenSSL konfigureret, hvilket betyder, at du ikke kan bruge Gmail eller Google Apps til at sende e-mail. Kontakt venligst din webhost og fortæl dem, at du har brug for OpenSSL.',
    'settings:logoremoved' => 'Logo er fjernet!',
    'settings:save' => 'Gem indstillinger',
    'settings:logodimensions' => 'Logoet kan uploades i alle størrelser, og vil blive tilpasset automatisk.',
    'settings:logoformatsallowed' => 'BMP, PNG, JPG (JPEG) og GIF er tilladt.',
    'settings:ftp_user' => 'FTP bruger',
    'settings:ftp_pass' => 'FTP adgangskode',
    'settings:ftp_path' => 'FTP sti',
    'settings:ftp_port' => 'FTP port',
    'settings:ftp_pasv' => 'Passiv tilstand?',
    'settings:nophpupdates' => "På grund af den måde din server er konfigureret, skal du indtaste dine FTP oplysninger, så Pancake kan opdatere sig selv. Disse oplysninger bruges kun internt af Pancake og bliver ikke oplyst til andre.",
    'settings:ftp_host' => 'FTP host',
    'settings:uptodate' => 'Pancake er opdateret (:1)',
    'settings:newversionavailable' => 'Der er en ny version af Pancake (:1)!',
    'settings:updatenow' => 'Opdater nu!',
    'settings:checkforupdates' => "Tjek for opdateringer",
    'settings:youneedtoconfigurefirst' => 'Din Pancake er endnu ikke konfigureret til at opdatere sig selv. Indtast venligst dine FTP oplysninger nedenfor, og tryk på "Gem indstillinger".',
    'settings:general' => 'Generelt',
    'settings:emails' => 'E-mails',
    'settings:taxes' => 'Moms',
    'settings:currencies' => 'Valutaer',
    'settings:branding' => 'Udseende',
    'settings:payment_methods' => 'Betalinger',
    'settings:feeds' => 'Feeds',
    'settings:api_keys' => 'API nøgler',

	/** Settings 16-4-17 **/
	
    'settings:time_entry_times' => "Tidsregistrering tider",
    "settings:include_dates_and_times_in_line_items" => 'Inkluder dato og tid i "Tidsregistrering" fakturalinjebeskrivelser.',
    "settings:when_generating_invoice" => "Når fakturaer genereres, brug en fakturalinje per",
    "settings:use_utf8_font" => "Brug UTF-8 skrifttype i PDF dokumenter",
    "settings:use_utf8_font_explanation" => "Brug dette hvis bogstaver ikke vises korrekt i dine PDF dokumenter.",
    "settings:pdf_attachments" => "PDF vedhæftninger",
    "settings:pdf_attachments_explanation" => "Sæt flueben her, hvis Pancake skal vedhæfte det tilhørende PDF dokument til faktura-, estimat- eller tilbuds- e-mails.",


    'settings:site_name' => 'Websitenavn//Identitet',
    'settings:language' => 'Sprog',
    'settings:timezone' => 'Tidszone',
    'settings:currency' => 'Valuta',
    'settings:theme' => 'Kundecenter tema',
    'settings:admin_theme' => 'Manager tema',
    'settings:date_format' => 'Datoformat',
    'settings:time_format' => "Tidsformat",
    'settings:task_time_interval' => 'Tidtagning afrunding (Efterlad tom for ingen afrunding)',
    'settings:task_time_interval_description' => '(skriv fx 00:30 eller 0.5 - hvor alle tidtagninger er rundet op til den nærmeste halve time (00:30), når de faktureres.)',
    'settings:mailing_address' => 'Postadresse',

    'settings:default_subject' => 'Standard emne',
    'settings:default_contents' => 'Standard besked',
    'settings:new_estimate' => 'Nyt estimat',
    'settings:new_invoice' => 'Ny faktura',
    'settings:new_proposal' => 'Nyt tilbud',
    'settings:paid_notification' => 'Betalingsmeddelelse (til admin)',
    'settings:payment_receipt' => 'Betalingskvittering (til kunde)',
    'settings:new_ticket' => 'Ny sag',
    'settings:ticket_invoice' => "Fakturering af sag",
    'settings:ticket_updated' => 'Sag opdateret',
    'settings:ticket_status_updated' => 'Sagens status opdateret',

    'settings:logo' => 'Logo',
    'settings:frontend_css' => 'Tilpasset CSS til kundecenter',
    'settings:backend_css' => 'Tilpasset CSS til manager',

    'settings:rss_password' => 'RSS adgangskode',
    'settings:default_feeds' => 'Standard feeds',
    'settings:cron_job_feed' => 'Cronjob',
    'settings:feed_generator' => 'Feed-generator',
    'settings:your_link' => 'Dit link',
    'settings:bcc' => 'BCC',
    'settings:api_note' => 'Navn / Note',
    'settings:api_key' => 'API-nøgle',

    'settings:tax_name' => 'Momsnavn',
    'settings:tax_value' => 'Værdi',
    'settings:add_tax' => 'Tilføj en moms',

    'settings:currency_name' => 'Valutanavn',
    'settings:currency_code' => 'Valutakode',
    'settings:exchange_rate' => 'Valutakurs',
    'settings:add_currency' => 'Tilføj en valuta',
    /** End Settings **/

	/** Action Logger  **/
    'update:ifyourenotsurecontactus' => "If you're not sure what to do, please <a href='https://www.pancakeapp.com/account/support/ticket/new'>open a <strong>free</strong> support ticket</a>.",
    'update:youmodified' => 'You modified',
    'update:youdeleted' => 'You deleted',
    'update:loadingpleasewait' => 'Loading, please wait...',
    'update:errordownloading' => 'An update to Pancake is available, but Pancake is having problems downloading it.',
    'update:herearestepstofix' => 'Here are a few steps you can try to fix it:',
    'update:makesureuploadsiswritable' => 'Make sure that your uploads folder is writable (CHMOD 0777).',
    'update:deletepancakesystemupdate' => 'Slet the pancake-update-system folder (inside the uploads folder), and all its contents.',
    'update:loadpancakeagain' => "Load Pancake again. If the error persists, change the owner of the Pancake folder (chown) so it matches the web server's user. If you can't do that, or don't know how to, please send an email to support@pancakeapp.com, and we'll help you.",
    'update:whatschanged' => "What's new in :1",
    'update:ftp_conn' => 'Pancake could not connect to the FTP host.',
    'update:ftp_login' => 'Pancake could not login via FTP (wrong FTP username/password?).',
    'update:ftp_chdir' => 'Pancake could not set the FTP path (path probably does not exist).',
    'update:ftp_no_uploads' => 'Pancake could not obtain permission to upload files via FTP.',
    'update:ftp_indexwrong' => 'The FTP Path you entered is incorrect. It should be the path to Pancake\'s directory.',
    'update:ftp_indexnotfound' => 'The FTP Path you entered is incorrect. It should be the path to Pancake\'s directory.',
    'update:update_conflict' => 'You modified some files since the last update. In order to safeguard your customizations, here is a list of files that you have modified, that conflict with the latest upgrade.',
    'update:update_no_perms' => 'Pancake does not have enough permissions to update itself, nor does it have access to an FTP account from which it can update itself. Update cannot continue.',
    'update:review_files' => 'Please review these files and make backups of them before proceeding. When the upgrade is finished, you will have to re-integrate your modifications back into them. Please do not just replace the updated files with your outdated modified copies, as that may break Pancake.',
    'update:internetissues' => "Pancake is unable to connect to the Internet.",
    'update:pancakeneedsinternet' => 'For Pancake to function correctly, your server must allow it to fetch some information from the Internet (port 80).',
    'update:maybefirewall' => "It appears that your server is blocking Pancake from accessing the Internet. This could be a firewall issue in your server. Please contact your host for help. Ask them to allow PHP to access :1.",
    'update:nointernetaccess' => 'No Internet Access',
    'update:pancakeupdated' => 'Pancake was upgraded from :1 to :2',
 
    /** End Action Logger **/

    /** Partial Payments 16-4-17 **/
    'partial:totalamounttobepaid' => "Samlet beløb kunden skal betale",
    'partial:amount' => 'Beløb',
    'partial:add_payment' => 'Tilføj betaling',
    'partial:dueon' => 'Betalingsfrist den',
    'partial:paymentdetails' => 'Betalingsdetaljer',
    'partial:savepaymentdetails' => 'Gem betalingsdetaljer',
    'partial:proceedtopayment' => 'Fortsæt til betaling',
    'partial:topaynowgoto' => 'For at betale nu, gå til :1',
    'partial:pay_part_x_now' => "Betal del nr. :1 af fin faktura nu",
    'partial:dueondate' => 'med betalingsfrist den :1',
    'partial:paymentmethod' => 'Betalingsmetode',
    'partial:paymentdate' => 'Betalingsdag',
    'partial:paymentstatus' => 'Betalingsstatus',
    'partial:transactionid' => 'Transaktionsnummer',
    'partial:markaspaid' => 'Marker som betalt',
    'partial:transactionfee' => 'Transaktionsgebyr',
    /** End Partial Payments **/

    /** Payment Gateways 16-4-17 **/
    'paypal:clickhere' => 'Klik her for at fortsætte',
    'authorize:transaction_key' => 'Transaktionsnøgle',
    'paypal:email' => 'PayPal e-mail',
    'paypal:fee' => 'PayPal gebyr i procent (%)',
    'paypalpro:paypalpro' => 'PayPal Payments Pro (BETA)',
    'paypalpro:viacreditcard' => 'Betal med betalingskort',
    'cash:cash' => 'Kontant',
    'check:check' => 'Check',
    'moneyorder:moneyorder' => 'Postanvisning',
    'creditcard:creditcard' => 'Betalingskort',
    'banktransfer:banktransfer' => 'Bankoverførsel',
    'gateways:errorupdating' => 'Der opstod en fejl under opdatering dine indstillinger til betalingsmetode. Venligst kontakt support.',
    'gateways:paymentmethods' => 'Betalingsmetoder',
    'gateways:selectpaymentmethod' => 'Vælg betalingsmetode',
    'gateways:nogatewayused' => 'Ingen metode: Del er ubetalt',
    'gateways:completed' => 'Fuldført',
    'gateways:refunded' => 'Refunderet',
    'gateways:unpaid' => 'Ubetalt',
    'gateways:paymentrejected' => ':1 betaling afvist',
    'gateways:pending' => 'Afventer',
    'gateways:returntowebsite' => 'Gå tilbage til :1',
    'gateways:cc_type' => 'Betalingskorttype',
    'gateways:cc_number' => 'Kortnummer',
    'gateways:cc_exp' => 'Udløbsdato (måned/år)',
    'gateways:cc_cardholder' => 'Kortholder',
    'gateways:cc_code' => 'Kontrolcifre',
    'gateways:payment_details' => 'Betalingsdetaljer',
    'gateways:api_signature' => 'API signatur',
    'gateways:api_password' => 'API adgangskode',
    'gateways:api_username' => 'API brugernavn',
    /** End Payment Gateways **/

    /** Kitchen Area 2-4-17 **/
    'kitchen:edit_comment' => 'Rediger kommentar',
    'kitchen:add_a_comment' => "Tilføj en kommentar",
    'kitchen:kitchen_name' => 'Kundecenter',
    'kitchen:pleaselogin' => 'Indtast venligst din adgangskode',
    'kitchen:nocomments' => 'Der er ingen kommentarer endnu.',
    'kitchen:comment' => 'Kommentar',
    'kitchen:comments' => 'Kommentarer',
    'kitchen:comments_x' => 'Kommentarer (:1)',
    'kitchen:file' => 'Fil',
    'kitchen:submitcomment' => 'Tilføj en kommentar',
    'kitchen:attachment' => 'Vedhæft',
    'kitchen:saidon' => 'skrevet den :1, kl. :2',
    'kitchen:subjectinvoice' => 'Ny kommentar til faktura nr. ',
    'kitchen:subjectestimate' => 'Ny kommentar til estimat nr. ',
    'kitchen:subjectproject' => 'Ny kommentar til projekt:',
    'kitchen:subjecttask' => 'Ny kommentar til opgave:',
    'kitchen:subjectproposal' => 'Ny kommentar til tilbud:',
    'kitchen:backtodashboard' => 'Tilbage til manager',
    'kitchen:client_welcome' => 'Kundecenter til:',
    'kitchen:urltosend' => 'Direkte url',
    'kitchen:nopassphrase' => 'I øjeblikket har kunden ikke valgt en adgangskode, hvilket betyder at denne url alene er alt hvad der behøves for at få adgang til kundecenteret. Du kan sikre kundecenteret ved at redigere denne kunde og sætte en adgangskode.',
    'kitchen:passphraseset' => 'Denne kunde har valgt en adgangskode',
    'kitchen:passphrase' => 'Adgangskode',
    'kitchen:description' => 'Url til kundecenter, hvor kunden kan se projekter, fakturaer, tickets og andet som er gjort synligt i kundecenter.',
    'kitchen:people_in_discussion' => 'Hvem er i chatten?',

    'kitchen:latest_invoice' => 'Seneste faktura',
    'kitchen:unpaid_balance' => 'Ubetalt: :1',
    'kitchen:total_paid_to_date' => 'Betalt: :1',

    /** END Kitchen Area **/
	
	
	/** Dashboard 16-4-17 **/
    'store:store' => 'Butik',
    'store:buy' => "Køb ($:1)",
    'store:update' => "Opdater",
    'store:install' => "Installer",
    'store:settings' => "Indstillinger",
    'store:already_bought' => "Du har allerede købt dette produkt!",
    'store:installed_successfully' => "Du har installeret :1 :2.",
    'store:plugin' => "Plugin",
    'store:payment_gateway' => "Betalingsudbyder",
    'store:frontend_theme' => "Kundecenter tema",
    'store:backend_theme' => "Manager tema",
    'store:unknown' => "Ukendt",
    'store:updatestoreitems' => "Opdater butikkens produkter",
    'store:download_free' => "Download (gratis)",
    'store:error1000' => "Din autorisation er ikke længere gyldig. Du bliver nødt til at indtaste dine betalingsoplysninger i pancakeapp.com en gang mere.",
    'store:error1001' => "Du har allerede købt dette produkt i butikken!",
    'store:error1002' => "Der opstod et problem under forsøg på at betale med dit kreditkort. Prøv igen senere.",
    'store:error1003' => "Du har foretaget en ugyldig forespørgsel.",

    'email_templates:new_invoice' => 'Ny faktura',
    'email_templates:new_estimate' => 'Nyt estimat',
    'email_templates:new_proposal' => 'Nyt tilbud',
    'email_templates:invoice_payment_notification_for_admin' => 'Meddelelse om betaling (sendt til admin)',
    'email_templates:invoice_payment_notification_for_client' => ' Kvittering på betaling (sendt til kunde)',
    'email_templates:new_ticket' => 'Ny sag',
    'email_templates:new_ticket_invoice' => 'Ny faktura på sag',
    'email_templates:ticket_updated' => 'Opdatering af sag',
    'email_templates:ticket_status_updated' => 'Opdatering af status på sag',
    'email_templates:assigned_to_task' => "Tildeling af opgave",
    'email_templates:assigned_to_milestone' => "Tildeling af milepæl",
    'email_templates:new_comment' => "Ny kommenatr",

    'global:timer_app' => "Pancake Tidtagning App",
    'global:there_is_no_activity' => "Der er ingen aktiviteter.",
    'global:there_are_no_tasks_assigned_to_you' => "Du har ingen opgaver tildelt.",


    /** END Dashboard **/

    # v4.0.5

    # Begin v4.1.2 changes
    'invoices:converted_to_estimate' => "Converterede faktura nr. :1 til et estimat.",
    'global:converttoestimate' => 'Konverter til estimat',
    # End v4.1.2 changes

    # Begin v4.1.3 changes
    'tickets:view_archived' => "Se arkiverede sager",
    'tickets:view_unarchived' => "Se aktive sager",
    'tickets:archiving_ticket' => "Arkiverede sager",
    'tickets:unarchiving_ticket' => "Dearkiverer sag",
    "tickets:unknown_error_ticket_not_altered" => "Der opstod en ukendt fejl. Din sag blev ikke ændret.",
    # End v4.1.3 changes

    # Begin v4.1.4 changes
    "tasks:starting_timer" => "Starter tidtagning",
    "tasks:stopping_timer" => "Stopper tidtagning",
    "global:all_comments" => "Alle kommentarer",
    "dashboard:view_all_comments" => "Se alle kommentarer",
    "dashboard:latest_comments" => "Seneste kommentarer",
    "dashboard:written_by" => "Skrevet af :1 den :2",
    "dashboard:client_activity" => "Kundeaktivitet",
    "dashboard:view_all_client_activity" => "Se alle kundeaktiviteter",
    "dashboard:view_all_team_activity" => "Se alle teamets aktiviteter",
    "dashboard:my_tasks" => "Mine opgaver",
    "dashboard:view_all_my_tasks" => "Se alle mine opgaver",
    "dashboard:what_the_team_is_working_on" => "Hvad arbejder teamet med?",
    # End v4.1.4 changes

    # Begin v4.1.6 changes
    "global:save_milestone" => "Gem milepæl",
    "global:save_task" => "Gem opgave",
    "global:private_comment" => "Denne kommentar er privat. Din kunde vil ikke se den.",
    "global:clients_cant_see_private" => "Kunder kan ikke se private kommentarer.",
    "global:is_private" => "Privat?",
    # End v4.1.6 changes

    # Begin v4.1.7 changes
    "tickets:disable_client" => "-- Deaktiver supportsager --",
    # End v4.1.7 changes

    # Begin v4.1.8 changes
    "global:css" => "Tilpasset CSS",
    "global:js" => "Tilpasset JavaScript",
    "global:js_explanation" => "Du kan bruge jQuery efter behag. Din kode vil blive tilføjet lige før &lt;/body&gt;.",
    "settings:frontend_js" => "Tilpasset JavaScript til kundecenter",
    "settings:backend_js" => "Tilpasset JavaScript til manager",
    # End v4.1.8 changes

    # Begin v4.1.9 changes
    "proposals:estimate_number_and_amount" => "Estimat nr. :1 (:2)",
    # End v4.1.9 changes

    # Begin v4.1.10 changes
    "clients:delete" => "Slet kunde",
    # End v4.1.10 changes

    # Begin v4.1.11 changes
    "global:nolongerexists" => "[FINDES IKKE LÆNGERE]",
    "global:billed_amount" => "Faktureret",
    "global:unbilled_amount" => "Ikke faktureret",
    "global:is_billed" => "Faktureret?",
    # End v4.1.11 changes

    # Begin v4.1.14 changes
    "settings:year_start" => "Startdato på regnskabsår",
    "dashboard:since_explanation" => "Siden :1",
    # End v4.1.14 changes

    # Begin v4.1.15 changes
    "export:invoices_csv" => "Fakturaer (CSV)",
    # End v4.1.15 changes

    # Begin v4.1.17 changes
    "projects:createdtemplate" => "Projektskabelon oprettet. Du kan nu oprette projekter baseret på denne skabelon.",
    "projects:delete_template" => "Slet skabelon",
    "projects:deleted_template" => "Skabelonen er slettet.",
    # End v4.1.17 changes

    # Begin v4.1.19 changes
    "export:expenses_csv" => "Udgifter (CSV)",
    "export:clients_csv" => "Kunder (CSV)",
    "projects:expense_date" => "Udgiftsdato",
    # End v4.1.19 changes

    # Begin v4.1.20 changes
    "clients:can_create_support_tickets" => "Tillad kunden at oprette supportsager?",
    "tickets:submit_new" => "Opret en supportbillet",
    "global:cancel" => "Annuller",
    "global:timers" => "Tidtagninger",
    "global:more" => "Mere",
    # End v4.1.20 changes

    # Begin v4.1.23 changes
    "global:search" => "Søg",
    "authorize:api_login_id" => "API login-id",
    "authorize:api_login_id_description" => "Du kan finde dette på Authorize.net, under Account > API Login ID and Transaction Key.",
    "authorize:md5_hash" => "MD5-Hash",
    "authorize:md5_hash_description" => "Som standard er dette dit API login-id. Du kan finde dette på Authorize.net, under Account > MD5-Hash. Hvis du ser 'Hash Value Set: No', efterlad dette felt tomt.",
    "transactions:paymentfailed" => "Betaling mislykkedes",
    "transactions:extrapaymentfailed" => "En ukendt problem opstod under forsøget på at behandle din betaling. Kontakt venligst :1 på :2 for at få hjælp.",
    # End v4.1.23 changes

    # Begin v4.1.24 changes
    "projects:tracked" => "Registreret/sporet (Tracked)",
    "invoices:partially_paid" => "Delvist betalt",
    # End v4.1.24 changes

    # Begin v4.1.27 changes
    "global:projects_ommitted" => ":1 projekter ikke vist",
    "global:tasks_ommitted" => ":1 opgaver ikke vist",
    # End v4.1.27 changes

    # Begin v4.1.28 changes
    "login:username_email" => "Brugernavn / E-mail",
    # End v4.1.28 changes
	
    # Begin v4.1.31 changes
    "settings:when_new_updates_are_available" => "Når der er nye opdateringer",
    "settings:dont_install_just_notify_me" => "Installer ikke, giv kun besked",
    "settings:install_automatically" => "Installer automatisk",
    "settings:loading_update_details" => "Henter opdatering... Det kan tage et par minutter. Opdater siden når du har lyst.",
    "settings:will_have_to_overwrite_single_file" => "Pancake vil overskrive 1 fil, som du har ændret i manuelt!",
    "settings:will_have_to_overwrite_multiple_files" => "Pancake vil overskrive :1 filer, som du har ændret i manuelt!",
    "settings:checking_for_updates" => "Tjekker for opdateringer, vent venligst. Siden bliver automatisk opdateret.",
    "settings:updating_please_wait" => "Opdaterer Pancake, vent venligst. Siden bliver automatisk opdateret, når opdateringen er færdig.",
    "settings:description" => "Gem dine opdaterede indstillinger, før du skifter faneblad eller forlader siden.",
    "settings:business_identities" => "Dine virksomheder",
    "settings:business_name" => "Virksomhedsnavn",
    "settings:new_business" => "Ny virksomhed",
    "settings:business_identity" => "Virksomhed",
    "settings:business_identity_explanation" => "Din kunde vil se ovenstående virksomhed på alle e-mails, PDF'er og sider.",
    # End v4.1.31 changes

    # Begin v4.1.33 changes
    "settings:have_been_updated" => 'Indstillingerne er opdateret.',
    "tasks:all" => "Alle opgaver",
    "projects:progress" => "Fremgang/Forløb",
    "expenses:name" => "Navn på udgift",
    "tasks:add_hours_to" => "Tilføj timer til :1",
    "global:today" => "I dag",
    "global:yesterday" => "I går",
    "global:other" => "Andet",
    "global:now" => "Nu",
    "timesheet:view_for_clients" => "Se tidsregistreringer (for kunder)",
    "global:not_billed_yet" => "Ikke faktureret.",
    "tasks:total_logged_time" => "I alt logget tid",
    "global:biweekly" => "Hver anden uge",
    # End v4.1.33 changes

    # Begin v4.2 changes
    'settings:default_task_due_date' => 'Standard opgave slutdato',
    'settings:default_task_due_date_explain' => "dage efter opgaven er oprettet. Hvis du ikke vil have en standard dato, så lad feltet være tomt.",
    # End v4.2 changes

    # Note: 4.2.x brought changes to the language file that weren't appended to the end of the file.
    # If you're updating your translation, make sure to check out a diff of the language file, instead of relying on just checking the bottom of the file.

    # Begin v4.2.4 changes
    "expenses:sort_or_filter" => "Sorter/Filtrer udgifter",
    "expenses:show" => "Vis udgifter",
    "global:sort_by" => "Sorter efter",
    "global:sort_order" => "Sortering",
    "global:asc" => "Ascending (A-Z)",
    "global:desc" => "Descending (Z-A)",
    # End v4.2.4 changes

    # Begin v4.3.0 changes
    "settings:tax_compound" => "Stablet moms?",
    "settings:no_tax" => "Ingen moms",
    "settings:default_taxes" => "Standard moms",
    "global:and" => "og",
    "global:tax" => "Moms",
    # End v4.3.0 changes

    # Begin v4.3.6 changes
    "global:youarenotallowed" => "Du har ikke adgang til denne side.",
    # End v4.3.6 changes

    # Begin v4.3.7 changes
    'settings:notify_email' => 'Support e-mail',
    'settings:billing_email' => 'Fakturering e-mail',
    'settings:brand_name' => 'Brand navn',
    'settings:admin_name' => 'Administrator navn',
    'settings:brand_name_explanation' => 'Dette er navnet dine kunder vil se. Det bliver vist overalt med undtagelse af dine fakturaer.',
    'settings:business_name_explanation' => 'Dette er dit registrerede virksomhedsnavn. Det bliver vist på dine fakturaer.',
    'settings:admin_name_explanation' => 'Som standard bliver dette vist i bunden af dine e-mails til dine kunder.',
    'settings:billing_email_explanation' => 'Dette er "Fra" adressen til faktura-, estimat- og tilbud e-mails.',
    'settings:notify_email_explanation' => 'Dette er "Fra" adressen til kommentar notifikationer og support sager.',
    'settings:show_name_along_with_logo' => 'Vis dit brand navn sammen med dit logo?',
    'dashboard:your_projects' => 'Dine projekter',
    'dashboard:today' => 'I dag',
    'dashboard:team_activity' => 'Nyt',
    'dashboard:snapshot' => 'Snapshot',
    'invoices:frequency' => 'Frekvens',
    'invoices:auto_send' => 'Auto-send?',
    'invoices:send' => 'Send',
    'invoices:days_before_invoice_is_due' => 'dage før fakturaen er forfalden',
    'invoices:cannot_change_recurrences' => 'Du kan ikke ændre gentagelses indstillinger i en faktura, som er en gentagelse af en anden faktura.',
    # End v4.3.7 changes
	
#####################################################################
#############################################################################
#########################################################################################

    # Begin v4.3.8 changes
    'email_templates:client_area_details' => 'Kundecenter Details',
    'settings:always_https' => 'Gennemtving HTTPS?',
    'settings:always_https_explanation' => 'This will make Pancake always load via HTTPS. Use this only if you have an SSL certificate installed and can access Pancake via HTTPS.',
    'settings:remittance_slip' => 'Remittance Slip/Girokort/Bankoverførsel?',
    'invoices:mail_to' => 'Skriv/E-mail til',
    'clients:send_client_area_email' => 'Send Kundecenter Details',
    'clients:you_cannot_send' => 'You cannot send this kunde his or her kundecenter details by email because this client does not have an email address.',
    # End v4.3.8 changes

    # Begin v4.4.0 changes
    'invoices:discount' => 'Discount',
    'invoices:discount_explain' => 'Tilføj % for percentages.',
    'invoices:addedconf' => 'You have added invoice # <strong>:1</strong>, totalling <strong>:2</strong> (:3 with tax) for :4:5.',
    'estimates:addedconf' => 'You have added estimate # <strong>:1</strong>, totalling <strong>:2</strong> (:3 with tax) for :4:5.',
    'credit_notes:edit_credit_note' => 'Rediger Credit Note nr. :1',
    'credit_notes:create_credit_note' => 'Create Credit Note',
    'global:credit_notes' => 'Credit Notes',
    'global:credit_note' => 'Credit Note',
    'credit_notes:alltitle' => 'All Credit Notes',
    'credit_notes:nocredit_notesforthefilteredclient' => 'You have no credit notes for :1.',
    'credit_notes:no_credit_notes' => 'You have no credit notes.',
    'credit_notes:create' => 'Create Credit Note',
    'credit_notes:no_credit_notes_body' => 'You should get on that! Would you like to create one now?',
    'credit_notes:edit' => 'Rediger Credit Note',
    'credit_notes:credit_note_number' => 'Credit Note nr. :1',
    'credit_notes:credit_note_date' => 'Credit Note Date',
    'credit_notes:delete_title' => 'Slet this credit note?',
    'credit_notes:delete_message' => 'Are you sure you want to delete this credit note?',
    'credit_notes:addedconf' => 'You have added credit note # <strong>:1</strong>, totalling <strong>:2</strong> (:3 with tax) for :4:5.',
    'credit_notes:send_now_title' => 'Send credit note now?',
    'credit_notes:send_now_body' => "Fill out the form below and we'll deliver this credit note for you.",
    'email_templates:new_credit_note' => 'New Credit Note',
    'credit_notes:send_now' => 'Send Credit Note',
    'credit_notes:preview' => 'Preview Credit Note',
    'credit_notes:duplicated' => "Kreditnota nr. :1 er kopieret. Den nye kreditnota har nummer :2.",
    'credit_notes:client_viewed' => ":1 viewed <a href=':2'>credit note nr. :3</a> on :4",
    'invoices:make_bulk_payment' => 'Make Multiple Payments',
    'global:success' => 'Success!',
    'clients:view' => 'Se kunde',
    'invoices:store_bulk_payment' => 'Save Multiple Payments',
    'invoices:x_invoices' => ':1 invoices',
    'invoices:amount_to_pay' => 'Amount to mark as paid',
    'invoices:bulk_payment_added' => "The payments were added successfully.",
    'clients:credit_balance_currently' => "Credit Balance (currently :1)",
    'clients:has_no_unpaid_invoices' => ":1 has no unpaid invoices.",
    'invoices:send_payment_notification' => "Send a payment notification email to the kunde?",
    'invoices:send_bulk_payment_notification' => "Send payment notification emails to the kunde?",
    'invoices:specify_bulk_payment_details' => "Specify the details of your kunde's payments, and select to which invoices the payments apply.",
    'global:credit_balance' => "Credit Balance",
    # End v4.4.0 changes

    # Begin v4.4.1 changes
    'credit_notes:view' => 'Se Credit Note',
    # End v4.4.1 changes

    # Begin v4.4.3 changes
    'tickets:ticket_number' => "Sag nr. :1",
    'settings:ticket_status_for_sending_invoice' => "Sag Status for Invoicing",
    'settings:ticket_status_for_sending_invoice_description' => "When a paid ticket is updated to this status, an invoice will automatically be generated and sent to the kunde.",
    'settings:never_send_ticket_invoices_automatically' => "-- Never send ticket invoices automatically --",
    # End v4.4.3 changes

    # Begin v4.4.6 changes
    'expenses:added' => "The expense was added successfully.",
    # End v4.4.6 changes

    # Begin v4.4.9 changes
    'global:error_submitting_ajax' => "An unknown error occurred while trying to submit this form. Please try again later. If the error persists, please start a free support ticket at pancakeapp.com.",
    'store:error1004' => "An unknown error occurred while trying to purchase this item. Please try again later. If the error persists, please start a free support ticket at pancakeapp.com.",
    # End v4.4.9 changes

    # Begin v4.5.0 changes
    'invoices:pancake_will_automatically_change_is_viewable' => "This will automatically be changed to 'Yes' when you email the invoice to the kunde.",
    "global:incorrect_login" => "The username/password combination you have entered is invalid.",
    # End v4.5.0 changes

    # Begin v4.5.3 changes
    'contact:title' => 'Contact History',
    # End v4.5.3 changes

    # Begin v4.5.5 changes
    'settings:hide_tax_column' => "Hide Tax Column?",
    'settings:hide_tax_column_explanation' => "This will hide the tax column in invoices that have no tax information.",
    'tickets:not_yet_generated' => "Invoice not yet generated",
    'tickets:invoice_will_be_generated' => "A :1 invoice for this ticket will be generated when the ticket's status is changed to \":2\".",
    'global:accepted' => "Accepted",
    'global:rejected' => "Rejected",
    'global:unanswered' => "Unanswered",
    'estimates:accepted' => "Accepted Estimates",
    'estimates:rejected' => "Rejected Estimates",
    'estimates:unanswered' => "Unanswered Estimates",
    'emailtemplates:content' => "Email Content",
    'global:every_six_months' => 'Biannually (twice a year)',
    'global:biyearly' => 'Biennially (every 2 years)',
    'global:triennially' => "Triennially",
    # End v4.5.5 changes

    # Begin v4.5.6 changes
    'settings:automaticallybccclientemail' => 'Automatically send a copy of all kunde emails to your main business identity\'s support email address.',
    # End v4.5.6 changes

    # Begin v4.5.7 changes
    'invoices:send_to_client' => "Email Invoice To kunde",
    'estimates:send_to_client' => "Email Estimate To kunde",
    'global:beforeunload' => "You are about to leave this page. If you do so, all the data you have entered so far will be lost. Are you sure that you wish to leave this page?",
    # End v4.5.7 changes

    # Begin v4.5.8 changes
    'global:appendtoproject' => 'Convert into tasks for ":1"',
    'estimates:appended' => 'Converted estimate nr. :1 into tasks for ":2".',
    # End v4.5.8 changes

    # Begin v4.6.0 changes
    'items:percentage_discount' => "Discount (%)",
    'items:fixed_discount' => "Discount (:1)",
    'invoices:discount_percentage' => "Discount (:1%)",
    'invoices:sub_total_after_discounts' => "Subtotal (after discounts)",
    'settings:tax_reg' => 'Tax Numbers / IDs',
    'clients:tax_registration_number' => ':1 Number / ID',
    'clients:add_custom_field' => "Tilføj another custom field",
    'clients:tax_numbers' => 'Kunde Tax Numbers / IDs',
    'clients:custom_fields' => "Custom Fields",
    'expenses:category_added' => "Success! The expense category was created successfully.",
    'clients:update_balance' => "Update Credit Balance",
    'clients:balance_updated' => "Success! The kunde's credit balance was updated successfully.",
    'clients:what_do_you_want_to_do' => "What do you want to do",
    'clients:save_balance_alteration' => "Save balance alteration",
    'clients:no_amount_specified' => "You didn't specify an amount.",
    'expenses:attach_receipt' => "Attach Receipt (Maximum Size: :1)",
    'expenses:no_project_business_expense' => "Business Expense (No Project)",
    'expenses:expense_date' => "Date",
    'expenses:receipt' => "Receipt",
    'expenses:no_receipt' => "No Receipt",
    # End v4.6.0 changes

    # Begin v4.6.3 changes
    'expenses:edited' => "Success! The expense was edited successfully.",
    'expenses:expense_receipts' => "Expense Receipts",
    # End v4.6.3 changes

    # Begin v4.6.7 changes
    'reports:payments' => "Payments",
    'reports:verb_created' => "Created",
    'reports:verb_paid' => "Paid",
    'reports:verb_from_to' => ":1 from :2 to :3",
    # Deleted "reports:selection_explanation_accrual"
    # Deleted "reports:selection_explanation_cash"
    # Deleted "settings:accounting_type"
    # Deleted "settings:accrual"
    # Deleted "settings:cash"
    # End v4.6.7 changes

    # Begin v4.6.8 changes
    'reports:amount_paid' => "Payment Amount",
    # End v4.6.8 changes

    # Begin v4.6.9 changes
    'dashboard:upcoming_invoices' => 'Upcoming Invoices',
    'dashboard:there_are_no_upcoming_invoices' => "There are no upcoming invoices to display.",
    # End v4.6.9 changes

    # Begin v4.7.0 changes
    "error:cannot_send_error_details" => "You cannot send error details to Pancake Support because you are not logged in.",
    "error:unknown_error_reporting" => "An unknown error occurred. Please report this error manually.",
    "error:sending_details" => "Sending details...",
    "error:response_will_be_sent_to_email" => "You will be notified of replies at {email}.",
    "settings:errors_and_diagnostics" => "Errors & Diagnostics",
    "error:already_reported" => "This error has already been reported to Pancake Support.",
    "error:title" => "Unknown Error",
    "error:subtitle" => "An unknown error has occurred.",
    "error:not_logged_in_intro" => "These errors are logged automatically.",
    "error:not_logged_in_extra" => "If the problem persists please contact :1.",
    "error:logged_in_intro" => "These errors are stored in the admin, under 'Settings > Errors & Diagnostics'.",
    "error:logged_in_extra" => "Click here to submit a free support ticket with the error's details to Pancake Support.",
    "error:no_logged_errors" => "You have no logged errors.",
    "errors:subject" => "Error Title",
    "errors:report" => "Report Error",
    "errors:number_of_occurrences" => "# of occurrences",
    "global:errors" => "Errors",
    "settings:error_reported" => "Error Reported",
    "settings:report_error" => "Report Error",
    "settings:delete_error" => "Slet Error",
    "global:once" => "Once",
    "global:twice" => "Twice",
    "global:x_times" => ":1 times",
    "global:occurred_times" => "Occurred :1",
    "settings:view_error_details" => "Se Error Details",
    "error:deleting" => "Deleting...",
    "error:reporting" => "Reporting...",
    "clients:noclientbodyfiltered" => "None of your clients' names start with ':1'.",
    "tickets:archive" => "Archive",
    "tickets:unarchive" => "Restore",
    'projects:unarchive_proj' => 'Restore Project',
    'invoices:lastreoccurrence' => 'Last Recurrence: :1',
    'invoices:thisisareoccurrence' => 'This invoice is a recurrence of Invoice :1.',

    ### This was moved here from the Projects language files, which were in a separate folder.
    'projects:role_view' => 'Se',
    'projects:role_create' => 'Create',
    'projects:role_edit' => 'Rediger',
    'projects:role_delete' => 'Slet',
    'projects:role_add_task' => 'Tilføj opgave',
    'projects:role_edit_task' => 'Rediger opgave',
    'projects:role_delete_task' => 'Slet opgave',
    'projects:role_add_milestone' => 'Tilføj milepæl',
    'projects:role_edit_milestone' => 'Rediger milepæl',
    'projects:role_delete_milestone' => 'Slet milepæl',
    'projects:role_track_time' => 'Track Time',
    "projects.title" => "Projects",
    "projects.create.title" => "Create Project",
    "projects.edit.title" => "Update Project",
    "projects.label.name" => "Name:",
    "projects.label.client" => "Kunde:",
    "projects.label.due_date" => "Due Date:",
    "projects.label.rate" => "Hourly Rate:",
    "projects.label.description" => "Description:",
    "projects.label.is_viewable" => "Viewable in kundecenter?",
    "projects.button.create" => "Create Project &rarr;",
    "projects.create.succeeded" => "The project has been created!",
    "projects.button.edit" => "Update Project &rarr;",
    "projects.button.delete" => "Slet Project &rarr;",
    "projects.update.succeeded" => "The project has been updated!",
    "projects.delete.title" => "Are you sure you want to delete this project?",
    "times.title" => "Times",
    "times.create.title" => "Tilføj Time",
    "times.label.start_time" => "Start time:",
    "times.label.end_time" => "End time:",
    "times.label.date" => "Date:",
    "times.label.task_id" => "Opgave:",
    "times.label.note" => "Note:",
    "times.label.notes" => "Notes:",
    "times.button.create" => "Tilføj Time &rarr;",
    "times.create.succeeded" => "The time has been entered successfully!",
    "times.edit.succeeded" => "The time has been edited successfully!",
    # End v4.7.0 changes

    # Begin v4.7.1 changes
    "global:estimates_unsent" => "Unsent",
    # End v4.7.1 changes

    # Begin v4.7.3 changes
    "error:not_enough_disk_space" => "Not Enough Disk Space",
    "error:cant_send_email" => "Can't Send Email",
    "error:not_enough_disk_space_explanation" => "Your database server (:1) does not have enough disk space.",
    "error:you_cannot_report_this_error" => "You cannot report this issue to Pancake Support, because it is an issue with your server. Please contact your server administrator about this issue. When discussing it with them, tell them:",
    "error:not_enough_disk_space_solutions" => "If you have root access to the database server, try clearing /tmp. If that doesn't work, check your database server's disk space usage, and try freeing some disk space.",
    "error:cant_send_email_explanation" => "You've specified that you want to use Sendmail (:1) to send email, but it was not possible to do so. Either the path to Sendmail is incorrect, or something else has gone wrong.",
    "error:email_settings_not_valid" => "Your email settings are not valid.",
    "error:cant_send_email_solutions" => "If you have root access to the server, make sure you've got sendmail installed and try finding it with <code>which sendmail</code>.",
    # End v4.7.3 changes

    # Begin v4.7.5 changes
    "error:server_error" => "Server Error",
    "error:xcache_extension_broken" => "Your server has a problem with the XCache extension.",
    "error:xcache_extension_broken_explanation" => "Something went wrong while your server was trying to load the XCache extension. This is not related to Pancake at all, but it's preventing Pancake from running.",
    "error:permissions_not_valid" => "There is a problem with the file permissions on your server.",
    "error:no_tmp_dir_permissions_explanation" => "Your server is configured in a way that does not allow Pancake to create temporary files in <code>:1</code>.",
    "error:no_tmp_dir_permissions_solutions" => "If you have root access to the server, you can change the <code>open_basedir</code> setting in your php.ini so that <code>:1</code> is included in the list of allowed folders.",
    # End v4.7.5 changes

    # Begin v4.7.7 changes
    "error:cant_php_mail_explanation" => "You've specified that you want to use PHP mail() to send email, but this method of sending email isn't working correctly on your server. This method of sending email requires zero configuration, but it is not recommended because email servers can't verify who's sending the email. Some of them will even automatically mark your emails as spam. Change your email server setting in the admin, under 'Settings > Emails', to use one of the SMTP options, or, if you can't, use the Sendmail option as a last resort. If none of them work, you will have to contact your server administrator.",
    "invoices:see_payment_schedule_below" => "See Payment Schedule Below",
    "invoices:see_payment_schedule" => "See Payment Schedule",

    'partial:partialpayments' => 'Payment Schedule',
    'partial:amountlefttobeadded' => "Amount left to be added to the payment schedule",
    'partial:amounttoobig' => "Amount that needs to be removed from the payment schedule",
    'partial:noamountneeded' => "Your payment schedule is complete.",
    'partial:wrongtotal' => 'The sum of all the parts of your payment schedule does not match the total amount you are invoicing.',
    'partial:problemsaving' => 'A problem occurred while saving the payment schedule. Please try again.',
    'partial:wrongtotalbutsaved' => 'The sum of all the parts of your payment schedule does not match the total amount you are invoicing.<br />The changes to your invoice were saved, but you need to fix your payment schedule.',
    'partial:problemsavingbutsaved' => 'A problem occurred while saving the payment schedule. Please try again.<br />The changes to your invoice were saved, it is only the payment schedule that wasn\'t.',
    'partial:addanother' => 'Tilføj another part to the payment schedule',
    'partial:disabledforrecurring' => 'Recurring invoices are limited to one-part payment schedules',
    'partial:partpaidthanks' => "This part of your invoice's payment schedule has been paid. Thank You.",

    "error:page_not_found" => "Page Not Found",
    "error:page_does_not_exist" => "The page you were trying to access does not exist.",
    "error:page_does_not_exist_explanation" => "You were trying to access :1, but it does not exist. If this is unexpected, you can report the error to Pancake Support. You'll find it in 'Settings > Errors & Diagnostics'.",
    # End v4.7.7 changes

    # Begin v4.7.8 changes
    "settings:importedcredit_notes" => "Imported :1 credit notes successfully.",
    # End v4.7.8 changes

    # Begin v4.7.10 changes
    "expenses:supplier_added" => "Success! The supplier was created successfully.",
    # End v4.7.10 changes

    # Begin v4.7.11 changes
    'reports:per_payment_method' => 'per payment method',
    # End v4.7.11 changes

    # Begin v4.7.12 changes
    "gateways:just_for_logging" => "Note: This payment method does not affect invoices in any way.<br />It is here so that you can track which payments you received by :1.",
    "projects:no_data_provided" => "You did not enter any information for creating a project from a template.",
    "projects:invalid_template" => "You did not select a valid project template.",
    "settings:test_email_subject" => "This a test email.",
    "settings:test_email_message" => "This is a test email. If you've received this, it means emails are working in Pancake.",
    "settings:send_test_email" => "Send Test Email",
    "settings:sending" => "Sending email...",
    "settings:test_email_sent" => "Sent to :1 successfully!",
    "settings:test_email_error_header" => "Error sending test email",
    "settings:test_email_error" => "An error occurred while trying to send the test email:<br /><br />:1<br /><br />Please make sure the details you entered are correct. If you're using SMTP, make sure the port you're trying to use is open in your server's firewall.",
    "settings:test_email_connection_error" => "Your server can't connect to :1 on port :2. You will need to get in touch with your system administrator and allow this port in your server's firewall.<br /><br />The error message was:<br /><br />:3",
    # End v4.7.12 changes

    # Begin v4.8.0 changes
    # Deleted "global:greetings"
    "invoices:all_unpaid" => "All Unpaid",
    'items:select_flat_rate' => 'Flat Rate',
    'kitchen:no_tickets_created' => "No tickets created.",
    'kitchen:responses' => "Responses",
    'kitchen:x_responses' => ":1 Responses",
    'projects:add_new_task' => "Tilføj New opgave",
    'projects:delete_project_template' => "Slet Project Template",
    "expenses:supplier_edited" => "Success! The supplier was edited successfully.",
    "global:show_hide_deleted" => "Show / Hide Deleted",
    "expenses:supplier_name" => "Supplier Name",
    "expenses:category_name" => "Category Name",
    "expenses:category_edited" => "Success! The category was edited successfully.",
    "expenses:before_you_can_add_expenses" => "Before you can add any expenses you need to go and create some :1 and :2.",
    "reminders:no_due_date" => "No due date",
    "reminders:x_days_past_due" => ":1 days past due",
    "search:results_for_x" => 'Search Results for ":1"',
    "search:one_matching_result" => "1 matching result",
    "search:x_matching_results" => ":1 matching results",
    'global:project_expense' => 'Expense',
    'global:project_task' => 'Opgave',
    'global:ticket' => 'Sag',
    'tickets:added' => "The ticket was created successfully.",
    'tickets:replied' => "Your response to the ticket was saved successfully.",
    'tickets:user_updated_ticket' => ":1 updated the ticket status to :2 on :3",
    "global:reply" => "Reply",
    'global:attach_file' => "Attach File (Maximum Size: :1)",
    "global:download_csv" => "Download CSV",
    "reports:uncollected" => "Ubetalt",
    "reports:collected" => "Indbetalt",
    "clients:filter_clients" => "Filter Clients",
    "users:deactivate" => "Deactivate",
    "users:activate" => "Activate",
    "global:group" => "Group",
    "users:edit_user" => "Rediger User",
    "users:please_enter_information" => "Please enter the user's information below.",
    "users:confirm_password" => "Confirm Password",
    "invoices:not_associated_with_a_project" => "-- Not associated with a project --",
    "global:by_x_with_time" => "By :1, :2.",
    "tasks:add_notes" => "Tilføj notes",
    "tasks:complete_this_task" => "Complete this opgave",
    "tasks:task_notes" => "Opgave Notes",
    "tasks:discuss_task" => "Discuss opgave",
    "tickets:leave_a_response" => "Leave a Response",
    "tickets:active_tickets" => "Active Tickets",
    "projects:rate_type" => "Rate Type",
    "projects:hourly_rate" => "Hourly Rate",
    "global:bcc_was_sent_to" => "This email was sent to :1 on :2.",
    "global:server_default" => "Server Default (Not Recommended)",
    "error:fixed_in_version" => "This issue was fixed in Pancake {version}. If you haven't yet, update your Pancake.",
    "error:no_user_found" => "Your license key is not associated with any user in pancakeapp.com, so your error could not be submitted automatically. If this is unexpected, send an email to support@pancakeapp.com and we'll help you.",
    "error:already_being_dealt_with" => "This issue has already been reported by someone else, and is being dealt with. We are working to resolve it as quickly as possible.",
    # End v4.8.0 changes

    # Begin v4.8.8 changes
    "error:php_outdated" => "The version of PHP that you are using is out of date.",
    "error:using_php_53" => "You are using PHP 5.3, which has been out of date since July 2013 and is no longer supported by the PHP Group.",
    "error:pancake_will_stop_supporting_it" => "Pancake might stop supporting it at any time.",
    "error:using_php_54" => "You are using PHP 5.4, which has been out of date since September 2014 and is no longer supported by the PHP Group.",
    "error:why_update" => "By staying with this version of PHP, you're missing out on a number of performance and security improvements, as well as a countless number of bugfixes.",
    "error:upgrade_php" => "You should upgrade your PHP version to at least :1 (ideally :2). To do so, please talk to your server administrators and ask them to update PHP.",
    "error:scan_pancake" => "Scan your Pancake for file-related issues",
    "error:scan_pancake_explanation" => "Sometimes issues might happen because of a failed update, or because of permissions problems that cause your Pancake files to become corrupted during an update. Use this to check your Pancake for any such problems.",
    "error:scanning" => "Scanning, please wait...",
    "error:unknown_error_scanning" => "An unknown error occurred while scanning.",
    "error:scan" => "Scan",
    "error:scan_result_success" => "Your Pancake's in perfect condition and has not been altered in any way. Everything's OK.",
    "error:scan_result_failure_deleted_one" => ":1 file does not exist",
    "error:scan_result_failure_deleted_other" => ":1 files do not exist",
    "error:scan_result_failure_modified_one" => ":1 file has been modified",
    "error:scan_result_failure_modified_other" => ":1 files have been modified",
    "error:scan_result_failure_heading" => "There are issues with your Pancake's files.",
    "error:scan_result_failure_how_to_fix" => "To resolve these issues, you will need to manually update your Pancake's files.",
    "error:click_here_for_instructions" => "Click here for instructions",
    # End v4.8.8 changes

    # Begin v4.8.10 changes
    "error:and_x_others" => "... and :1 others.",
    # End v4.8.10 changes

    # Begin v4.8.11 changes
    "global:archive" => "Archive",
    "global:archived" => "Archived",
    "global:restore" => "Restore",
    "proposals:archived" => "You've archived proposal nr. :1 successfully.",
    "proposals:restored" => "You've restored proposal nr. :1 successfully.",
    "invoices:archived" => "You've archived invoice nr. :1 successfully.",
    "invoices:restored" => "You've restored invoice nr. :1 successfully.",
    "estimates:archived" => "You've archived estimate nr. :1 successfully.",
    "estimates:restored" => "You've restored estimate nr. :1 successfully.",
    "credit_notes:archived" => "You've archived credit note nr. :1 successfully.",
    "credit_notes:restored" => "You've restored credit note nr. :1 successfully.",
    "proposals:list_all" => "All Proposals",
    "proposals:list_accepted" => "Accepted Proposals",
    "proposals:list_rejected" => "Rejected Proposals",
    "proposals:list_unanswered" => "Unanswered Proposals",
    "proposals:list_archived" => "Archived Proposals",
    "invoices:credit_notes_archived" => "Archived Credit Notes",
    "invoices:estimates_archived" => "Archived Estimates",
    "invoices:invoices_archived" => "Archived Invoices",
    # End v4.8.11 changes

    # Begin v4.8.19 changes
    "estimates:estimates_unsent" => "Unsent Estimates",
    "tickets:invoice_for_ticket" => "Sag nr. :1 - :2",
    "tickets:link_to_ticket" => "Link to sag: :1",
    "dashboard:outstanding_invoices" => 'Outstanding Invoices',
    "dashboard:view_all_outstanding_invoices" => "Se All Outstanding Invoices",
    # End v4.8.19 changes

    # Begin v4.8.24 changes
    "expenses:missing_supplier" => "You didn't select a supplier.",
    "expenses:missing_category" => "You didn't select a category.",
    # End v4.8.24 changes

    # Begin v4.8.29 changes
    "error:update_system" => "Update Error",
    "error:update_system_cannot_update_file" => "Pancake was unable to modify one or more of its files during the update.",
    "error:update_system_cannot_update" => "Pancake was unable to download the update correctly.",
    "error:update_system_solutions" => "The update was unable to complete, and your Pancake may now be in a partially-updated state, which will cause you errors. You will need to manually update your Pancake's files to resolve the problem. <br /><br /> :1 <br /><br /> These errors can occur because of a problem with file permissions. If Pancake does not have write-access to all of its files, it is unable to update itself correctly. In most servers, this is handled automatically, but a very small number of servers might require manual intervention.",
    "error:update_without_ftp" => "If you don't have FTP access (or don't want to use FTP), but have SSH access to your Pancake, <a href='https://www.pancakeapp.com/faq/update-without-ftp' target='_blank' class='blue-btn'>click here</a> to learn how to update without FTP.",
    # End v4.8.29 changes

    # Begin v4.8.30 changes
    "proposals:missing_client" => "You didn't select a kunde.",
    # End v4.8.30 changes

    # Begin v4.8.48 changes
    "gateways:direct_debit" => "Direct Debit",
    "error:no_permissions_explanation" => "Pancake does not have permission to create files in <code>:1</code>.",
    "error:no_permissions_solutions" => "You can resolve this by making the folder writable. Typically, this is done with CHMOD 0777, but there may be other ways for you to do it (e.g. via your web hosting's control panel).",
    "error:you_cannot_report_this_non_server_error" => "You cannot report this issue to Pancake Support because this is not a problem with Pancake.",
    # End v4.8.48 changes

    # Begin v4.8.50 changes
    "settings:currency_format" => "Currency Format",
    "settings:decimal_places" => ":1 decimal places",
    # End v4.8.50 changes

    # Begin v4.8.53 changes
    "settings:no_notify_email" => "You don't have an email address set for your <a href=':1'>business identity</a>.<br />Pancake is not able to send email.",
    # End v4.8.53 changes

    # Begin v4.10.2 changes
    "settings:add_another_business" => "Tilføj another business",
    # End v4.10.2 changes

    # Begin v4.11.6 changes
    'global:auto_send_needs_pancake_cron_job' => 'To automatically send invoices, you must setup the <a target="_blank" href="https://www.pancakeapp.com/documentation/cron">Pancake Cron Job</a>.',
    'global:you_need_pancake_cron_job' => 'To use recurring invoices, you must setup the <a target="_blank" href="https://www.pancakeapp.com/documentation/cron">Pancake Cron Job</a>.',
    'settings:always_autosend' => "Auto Send invoices by default",
    'settings:send_x_days_before_explain' => "Default number of days before an invoice is due to auto send it to a kunde.",
    # End v4.11.6 changes

    # Begin v4.12.0 changes
    "invoice:description" => "Description",
    "invoices:charge_when_due" => "Charge When Due",
    "invoices:auto_charge" => "Charge kunde Automatically",
    "invoices:pancake_will_charge_when_invoice_is_due" => "Pancake will automatically charge this kunde when the invoice is due, using their saved payment details.",
    "invoices:pancake_cannot_auto_charge" => "There are no saved payment details for this kunde, so Pancake cannot auto-charge. The kunde has to pay you through Stripe at least once in order to save their payment details.",
    "invoices:auto_charge_needs_pancake_cron_job" => 'To automatically charge clients, you must setup the <a target="_blank" href="https://www.pancakeapp.com/documentation/cron">Pancake Cron Job</a>.',
    "global:or" => "or",
    "invoices:could_not_auto_charge" => "Pancake was not able to charge your kunde automatically. Your kunde will have to pay for Invoice nr. :1 manually.",
    "invoices:auto_charged" => "Your kunde was charged for Invoice nr. :1. The invoice is now paid.",
    "settings:gmail_setup_successfully" => "You've connected your Pancake with your Gmail account successfully!",
    "settings:pancake_uses_our_servers" => "Note: Pancake uses Pancake servers to make sure the permission to use Gmail doesn't expire.<br />No information of any kind is stored. If you have your own Google Developer Account, you can <a target='_blank' href='https://www.pancakeapp.com/faq/google-oauth'>use your own server</a>.",
    "settings:you_are_signed_in" => "You are signed in as :1.<br />Click the button below if you need to update your details or use a different account.",
    "settings:you_are_using_old_auth" => "Pancake is currently sending email as :1 using your email and password.<br />Click the button below to upgrade to a more secure way of using Gmail.",
    "invoices:send_now" => "Send Invoice",
    "credit_notes:messageupdated" => "The credit note has been updated!",
    'credit_notes:resend' => 'Resend Credit Note',
    "global:support" => "Help / Support",
    "settings:filesystem" => "Where to store uploads",
    "settings:filesystem_local" => "Uploads Folder",
    "filesystem:s3_access_key" => "Access Key",
    "filesystem:s3_secret_key" => "Secret Key",
    "filesystem:s3_prefix" => "Folder (optional)",
    "filesystem:s3_bucket" => "S3 Bucket",
    "invoices:amount_due" => "Amount Due",
    "invoices:due_date" => "Due Date",
    "settings:filesystem_explain" => "Note: If you change this setting, Pancake will copy all the files to the new storage place for you. You will not need to do anything else.",
    # End v4.12.0 changes

    # Begin v4.12.1 changes
    "error:using_old_php" => "You are using PHP :1, which has been out of date since :2 and is no longer supported by the PHP Group.",
    # End v4.12.1 changes

    # Begin v4.12.7 changes
    "settings:last_cron_run_datetime" => "Last time executed: :1",
    # End v4.12.7 changes

    # Begin v4.12.9 changes
    "settings:hijacked_error" => '<div class="diagnostic-error"><h4>Your server is trying to trick you!</h4><p>You were trying to make a connection to :1, but your webserver hijacked it and instead connected to :2.<br /><br />This is an extremely serious security issue, because your username, password, and email contents are being sent to an email server different from the one you expected.<br /><br />Please contact your server administrator about this.</p></div>',
    # End v4.12.9 changes

    # Begin v4.12.13 changes
    "invoices:edit_does_not_exist" => 'The invoice you are trying to edit does not exist.',
    # End v4.12.13 changes

    # Begin v4.12.14 changes
    "settings:importedexpenses" => 'Imported :1 expenses successfully.',
    "projects:is_timesheet_viewable" => "Show project timesheet in kundecenter?",
    "tasks:is_timesheet_viewable" => "Show opgave timesheet in kundecenter?",
    # End v4.12.14 changes

    # Begin v4.12.15 changes
    "notifications:mark_all_as_read" => "Mark All as Read",
    'notifications:new_comment' => ':1 commented on <a href=":2">:3</a> on :4',
    # End v4.12.15 changes

    # Begin v4.12.16 changes
    "invoices:unsent_recurrences" => "Unsent (Recurrences)",
    "invoices:unsent_not_recurrences" => "Unsent (Non-Recurring Invoices)",
    "discussions:does_not_exist" => "The item you were trying to access does not exist.",
    "discussions:private_commented_successfully" => "Your private comment was posted successfully. The kunde won't see it.",
    "discussions:public_commented_successfully" => "Your comment was posted successfully, and the kunde was emailed about it.",
    "discussions:discussion_area" => "Discussion Area",
    # End v4.12.16 changes

    # Begin v4.12.18 changes
    "projects:project_invoices" => "Project Invoices",
    "projects:project_estimates" => "Project Estimates",
    'global:upload_ini_size' => 'The file you uploaded exceeds the size limit imposed by your web server (:1).',
    "discussions:message_cannot_be_empty" => "Your comment cannot be empty.",
    "global:change_date_range" => "Change Date Range",
    "timesheet:rounded" => "Rounded",
    # End v4.12.18 changes

    # Begin v4.12.19 changes
    "projects:deleted" => "Project deleted successfully!",
    'tickets:edited' => 'Sag :1 edited successfully!',
    # End v4.12.19 changes

    # Begin v4.12.20 changes
    "global:x_hours" => ":1 hours",
    "global:one_hour" => ":1 hour",
    # End v4.12.20 changes

    # Begin v4.12.21 changes
    "global:couldnotsendemail" => "Pancake could not send the email.<br />Go to Settings > Emails and review your email settings.",
    "settings:gmail_access_denied" => "You denied your Pancake access to Gmail for sending emails.",
    'notifications:new_ticket' => ':1 created <a href=":2">:3</a> on :4',
    'notifications:responded_ticket' => ':1 responded to <a href=":2">:3</a> on :4',
    'notifications:updated_status_ticket' => ':1 changed the status of <a href=":2">:3</a> to <strong>:5</strong> on :4',
    'tickets:ticket_title' => "Sag nr. :1 - :2",
    # End v4.12.21 changes

    # Begin v4.12.22 changes
    "invoices:unpaid_recurrences" => "All Unpaid (Recurrences)",
    "invoices:unpaid_not_recurrences" => "All Unpaid (Non-Recurring Invoices)",
    # End v4.12.22 changes

    # Begin v4.12.24 changes
    "invoices:amount_including_surcharge" => ":1 including a :2 surcharge",
    # End v4.12.24 changes

    # Begin v4.12.27 changes
    "invoices:delete_does_not_exist" => 'The invoice you are trying to delete does not exist.',
    "invoices:select_a_gateway" => "You need to specify a payment method for this payment.",
    "discussions:are_you_sure_delete" => "Are you sure you want to delete this comment?",
    "discussions:deleted" => "You've deleted the comment successfully.",
    "discussions:edited" => "You've edited the comment successfully.",
    "projects:back_to_project" => "Back to Project",
    # End v4.12.27 changes

);

/** End of file: pancake_lang.php **/