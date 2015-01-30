<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Pancake
 *
 * A simple, fast, self-hosted invoicing application
 *
 * @package     Pancake
 * @author      Pancake Dev Team
 * @copyright   Copyright (c) 2010, Pancake Payments
 * @license     http://pancakeapp.com/license
 * @link        http://pancakeapp.com
 * @since       Version 1.0
 * @translated Peter Ruiter - http://peterruiter.com - Twitter: @pajruiter
 * @translated Koen Rijpstra - Twitter: @KoenRijpstra
 * @translated Martin Kapma, http://www.albruna.nl
 */
 
// ------------------------------------------------------------------------
 
$lang = array(

    /** Global Words **/
    'global:overview' => 'Overzicht',
    'global:error' => 'Foutmelding',
    'global:pancakeby7am' => 'Pancake :1',
    'global:allrelatedmediacopyright' => 'Pancake en alle gerelateerde media is Copyright :1 :2',
    'global:insecure_action' => 'Onveilige actie werd geprobeerd, maar is onderschept',
    'global:disabled_in_demo' => 'Sommige onderdelen op deze pagina zijn uitgeschakeld voor de demo.',
    'global:estimates' => 'Offertes',
    'global:estimate' => 'Offerte',
    'global:incomplete_tasks' => 'Incomplete Taken',
    'global:completed_tasks' => 'Voltooide Taken',
    'global:projects' => 'Projecten',
    'global:tickets' => 'Tickets',
    'global:project' => 'Project',
    'global:upload_failed' => 'Er is een fout opgetreden bij het uploaden van uw bestand. Probeer het opnieuw. Wanneer het probleem blijft bestaan, neem dan contact op met support@pancakeapp.com',
    'global:upload_not_allowed' => 'Het bestandstype van het bestand dat u probeert te uploaden is niet toegestaan. Als u een bestand moet uploaden van dat type, maar er dan eerst een .zip bestand van of een willekeurig ander archiefformaat.',
    'global:copied' => 'Gekopieerd!',
    'global:sentbutunpaid' => 'Openstaand (Verzonden maar niet betaald)',
    'global:task' => 'Taken',
    'global:clients' => 'Klanten',
    'global:access_denied' => "Toegang geweigerd",
    'global:users' => 'Gebruikers',
    'global:send_to_client' => 'Stuur naar klant',
    'global:couldnotsendemail' => 'Kon de e-mail niet versturen. Controleer je instellingen.',
    'global:emailsent' => 'E-mail is verzonden!',
    'global:yes' => 'Ja',
    'global:no' => 'Nee',
    'global:notyetsent' => 'Nog niet verzonden naar klant',
    'global:dontshowagain' => "Dit niet nogmaals laten zien",
    'global:enable' => 'Aanzetten',
    'global:is_enabled' => 'Aangezet?',
    'global:is_completed' => 'Voltooid?',
    'global:Y' => 'J',
    'global:N' => 'N',
    'global:notes' => 'Notities',
    'global:description' => 'Beschrijving',
    'global:backtoadmin' => 'Terug naar Admin',
    'global:type' => 'Soort',
    'global:name' => 'Naam',
    'global:first_name' => 'Voornaam',
    'global:last_name' => 'Achternaam',
    'global:company' => 'Bedrijf',
    'global:for' => 'voor',
    'global:from' => 'van',
    'global:phone' => 'Telefoon',
    'global:email' => 'E-mail',
    'global:contacts' => 'Contacten',
    'global:week' => 'Wekelijks',
    'global:na' => 'N/A',
    'global:quarterly' => 'Per kwartaal',
    'global:every_six_months' => 'Elke 6 maanden',
    'global:statistics' => "Statistieken",
    'global:biyearly' => 'Elke 2 jaar',
    'global:month' => 'Maandelijks',
    'global:year' => 'Jaarlijks',
    'global:fax' => 'Fax',
    'global:mobile' => 'Mobiel',
    'global:address' => 'Adres',
    'global:api_key' => 'API Key',
    'global:website' => 'Website',
    'global:action' => 'Actie',
    'global:items' => 'Items',
    'global:reusableinvoiceitems' => 'Herbruikbare factuur items',
    'global:reusableinvoiceitems_description' => 'Je moet Herbruikbare factuur items gebruiken als je hetzelfde item in een andere facturen wilt gebruiken. Om deze te gebruiken wanneer je een factuur maakt of bewerkt, begin gewoon de naam van het opgeslagen item te typen en het systeem zal je de mogelijkheid bieden om de details van dat item automatisch in te vullen.',
    'global:create_invoice_estimate' => 'Creëer facturen en schattingen om geld te ontvangen.',
    'global:createinvoice' => 'Factuur aanmaken',
    'global:paid' => 'Betaald',
    'global:unpaid' => 'Niet betaald',
    'global:overdue' => 'Achterstallig',
    'global:time_entries' => 'Tijdingaves',
    'global:invoices' => 'Facturen',
    'global:invoice' => 'Factuur',
    'global:tasks' => 'Taken',    
    'global:dashboard' => 'Dashboard',
    'global:settings' => 'Instellingen',
    'global:plugins' => 'Plugins',
    'global:installed' => 'Geïnstalleerd',
    'global:changepassword' => 'Wachtwoord veranderen',
    'global:logout' => 'Uitloggen',
    'global:status' => 'Status',
    'global:client' => 'Klant',
    'global:user' => 'Gebruiker',
    'global:title' => 'Titel',
    'global:subtitle' => 'Subtitel',
    'global:to' => 'Aan (scheid meerdere adressen met een comma)',
    'global:subject' => 'Onderwerp',
    'global:thanks' => 'Hartelijk bedankt!',
    'global:proposals' => 'Voorstellen',
    'global:proposal' => 'Voorstel',
    'global:reports' => 'Rapporten',
    'global:item' => 'Product/dienst',
    'global:report' => 'Rapport',
    'global:saveandinsert' => 'Opslaan en toevoegen',
    'global:details' => 'Details',
    'global:license_key' => 'Licentie code',
    'global:version' => 'Versie :1',
    'global:content' => 'Inhoud',
    'global:add' => 'Toevoegen',
    'global:edit' => 'Bewerken',
    'global:resend' => 'Opnieuw versturen',
    'global:sent' => 'Verzonden',
    'global:not_sent' => 'Niet verzonden',
    'global:view' => 'Bekijken',
    'global:delete' => 'Verwijderen',
    'global:remove' => 'Verwijderen',
    'global:sort' => 'Sorteren',
    'global:deleteitem' => 'Product/dienst verwijderen',
    'global:dragtoreorder' => 'Sleep om opnieuw te ordenen',
    'global:start' => 'Start',
    'global:stop' => 'Stop',
    'global:start_timer' => 'Start Timer',
    'estimates:create' => "Nieuwe offerte",
    'global:stop_timer' => 'Stop Timer',
    'global:created' => 'Aangemaakt',
    'global:updated' => 'Bijgewerkt',
    'global:update' => 'Bijwerken',
    'global:update_available' => ':1 update beschikbaar',
    'global:updates_available' => ':1 updates beschikbaar',
    'global:downloadpdf' => 'PDF Downloaden',
    'global:yesdelete' => 'Ja, verwijderen!',
    'global:confirm_emphisised' => 'Je kunt dit niet meer ongedaan maken!',
    'global:color' => 'Kleur',
    'global:save' => 'Opslaan',
    'global:unknown' => 'Onbekend',
    'global:upload_ini_size' => 'Het bestand dat u probeert te uploaden overschrijdt de bestandsgrootte welke wordt opgelegd door uw PHP installatie.',
    'global:upload_error' => 'Er is een fout opgetreden bij het uploaden van het bestand. Probeer het opnieuw.',
    'global:recurring' => 'Periodiek',
    'global:unsent' => 'Niet verzonden',
    'global:converttoproject' => 'Wijzigen naar project',
    'global:converttoinvoice' => 'Wijzigen naar factuur',
    'global:viewpdf' => 'Bekijk PDF',
    'global:duplicate' => 'Kopieer',
    'global:urltosend' => 'Hier is de URL die u kunt verzenden:',
    'global:copytoclipboard' => 'Kopieer naar plakbord',
    'global:you_need_pancake_cron_job' => 'Om periodiek te factureren dient u de Pancake cronjob te gebruiken.',
    'global:if_you_dont_know_how_to_set_it_up' => 'Indien u niet weet hoe u dit gebruikt kijkt u, <a href="http://www.pancakeapp.com/documentation/cron">hier</a>.',
    'global:quick_links' => 'Snelle Links',
    'global:view_all' => 'Bekijk alles',
    'global:deleted' => 'Verwijderd',

    'global:add_more' => "Voeg meer toe",
    'global:upload_files' => "Upload Bestanden",
    'global:optional_increment' => '<strong>Optioneel</strong> - wordt automatisch verhoogd',

    'login:ahoy' => 'Hoi!',
    'login:readytodothis' => 'Klaar om te starten?',
    'login:sup' => 'Sup?',
    'global:actions' => 'Acties',
    'global:select' => "--- Selecteer ---",

    /** Greetings * */
    'global:greetings' => array('Hoi!', 'Hallo,', 'Hey daar,', 'Sup,'),
    
	'global:mark_as_unanswered' => 'Markeer als onbeantwoord',
    'global:mark_as_accepted' => 'Markeer als geaccepteerd',
    'global:mark_as_rejected' => 'Markeer als afgewezen',
    'global:reject_estimate' => 'Offerte afwijzen',
    'global:accept_estimate' => 'Offerte accepteren',
    'global:estimate_rejected' => 'Offerte afgewezen',
    'global:estimate_accepted' => 'Offerte geaccepteerd',
    'global:reject_proposal' => 'Voorstel afwijzen',
    'global:accept_proposal' => 'Voorstel accepteren',
    'global:proposal_rejected' => 'Voorstel afgewezen',
    'global:proposal_accepted' => 'Voorstel geaccepteerd',
    'global:client_area' => 'Klantgedeelte',
    'global:admin' => 'Admin',
    'global:all_settings' => 'Alle Instellingen',
    'global:viewable' => 'Zichtbaar in klantgedeelte',
    'global:not_viewable' => 'Niet zichtbaar in klantgedeelte',
    'global:milestones' => 'Mijlpalen',
	/** End Greetings **/

	/** Dashboard **/
    'dashboard:collected' => 'Ontvangen',
    'dashboard:outstanding' => 'Uitstaan',
    'dashboard:latest_activity' => 'Recente activiteit',
    'dashboard:these_are_your_upcoming_tasks' => "Dit zijn je aankomende taken, :1.",
    'dashboard:upcoming_tasks' => 'Aankomende taken',
	/** End Dashboard **/

	/** Timesheets **/
	'global:timesheets'			=>	'Roosters',
	'timesheets:todays'			=>  'Vandaag',
	'timesheets:all_users'		=>	'Alle gebruikers',
    'timesheets:rounded_time' => 'Afgerond op het dichtstbijzijnde :1',
    'timesheets:there_are_no_time_entries' => "Er zijn geen tijden geschreven binnen deze datum range.",
	/** END Timesheets **/

	/** Users **/

	// ==============================
    'login:forgotinstructions' => 'Vul a.u.b. je e-mail adres in zodat wij een email kunnen sturen om het wachtwoord te resetten.',
    'login:reset' => 'Reset &raquo;',
    'login:reset' => 'Wachtwoord resetten',
    'login:username' => 'Gebruikersnaam',
    'login:password' => 'Wachtwoord',
    'login:changepassword' => 'Wachtwoord aanpassen',
    'login:email' => 'E-mailadres',
    'login:login' => 'Inloggen',
    'login:logout' => 'Uitloggen',
    'login:remember' => 'Onthoud mij',
    'login:forgot' => 'Wachtwoord vergeten?',
    'login:cancel' => '&laquo; Annuleren',
	/** End Users **/

	/** User Groups **/
    'groups:edit_title'	=> 'Wijzig gebruikersgroep %s',
    'groups:add_title'	=> 'Toevoegen gebruikersgroep',

	/** Clients **/
    'clients:title' => 'Alle klanten',
    'clients:filter' => 'Klant filter',
    'clients:add' => 'Klant toevoegen',
    'clients:removefilter' => 'Verwijder Filter',
    'clients:edit' => 'Klant bewerken',
    'clients:noclienttitle' => 'Je moet eerst een paar klanten invoeren!',
    'clients:noclientbody' => 'Zodat je facturen kunt sturen. Nu eentje toevoegen?',
    'clients:noclienttitlefilter' => 'Geen enkele klant komt overeen met je filter',
    'clients:hasnoinvoicetitle' => 'Top! Deze klant is ingesteld!',
    'clients:hasnoinvoicebody' => 'Laten we een factuur voor ze aanmaken en betaald krijgen! Nu eentje toevoegen?',
    'clients:added' => 'De klant is toegevoegd!',
    'clients:edited' => 'De klant is bijgewerkt!',
    'clients:deleted' => 'De klant is verwijderd!',
    'clients:does_not_exist' => 'Deze klant bestaat niet!',
    'clients:health_check' => 'Gezondheidscontrole',
    'clients:all' => 'Alle',
    'clients:delete_title' => 'Deze klant verwijderen?!?!',
    'clients:delete_message' => 'Weet je zeker dat je deze klant wilt verwijderen?<br />Zo ja, dan worden ook alle facturen, projecten en offertes van deze klant verwijderd.',
    'clients:clientaction' => '&nbsp;',
    'clients:passphrase' => 'Wachtwoord',
    'clients:bad_passphrase' => 'Wachtwoord is niet correct.',
    'clients:total_clients' => 'Totaal klanten',
    'clients:support' => 'Support',
    'clients:support_rates'	=> 'Support tarieven',
    'clients:edit_support_rates' => 'Instellen tarieven',
	/** End Clients **/


	/** Contact Log **/
    'contact:title' => 'Recente contacthistorie',
    'contact:method' => 'Contactmethode',
    'contact:contact' => 'Contact',
    'contact:subject' => 'Onderwerp',
    'contact:content' => 'Inhoud',
    'contact:method' => 'Contactmethode',
    'contact:calling_title' => 'Bellen klant ":1"',
    // 'contact:view_all' => 'Toon alle',
	/** End Contact Log **/

	/** Invoices **/
    'invoices:markassent' => 'Markeer als verzonden',
    'invoices:invoicedate' => 'Factuurdatum',
    'invoices:file_name' => "Bestandsnaam",
    'invoices:date_created' => "Datum aangemaakt",
    'invoices:size' => "Grootte",
    'invoices:files' => "Bestanden",
    'invoices:sentbutunpaid' => 'Facturen verzonden naar de klant maar nog steeds niet betaald',
    'invoices:duplicated' => 'Factuur #:1 gekopieerd. Het nieuwe factuurnummer is #:2.',
    'invoices:all' => 'Alle facturen',
    'invoices:empty' => 'Nog geen facturen.',
    'invoices:overdue' => 'Achterstallige facturen',
    'invoices:tax_collected' => "BTW ontvangen",
    'invoices:paid' => 'Betaalde facturen',
    'invoices:recurringinvoices' => 'Periodieke facturen',
    'invoices:unsentinvoices' => 'Nog niet verzonden facturen',
    'invoices:unpaid' => 'Onbetaalde facturen',
    'invoices:thisinvoicewaspaidon' => 'Deze factuur is betaald op :1. Bedankt!',
    'invoices:senton' => 'Verzonden op :1',
    'invoices:lastsenton' => 'Laatst verzonden op :1 om :2',
    'invoices:paidon' => 'Betaald op :1',
    'invoices:paidonsingle' => 'Betaald op',
    'invoices:thisinvoiceisunpaid' => 'Deze factuur is nog niet betaald.',
    'invoices:noinvoicetitle' => 'Er zijn nog geen facturen!',
    'invoices:noinvoicesforthefilteredclient' => "U heeft geen facturen voor :1.",
    'invoices:noinvoicebody' => 'Je kunt nu een factuur aanmaken voor een klant! <br /> Klanten zijn gek op facturen!',
    'invoices:send_now_title' => 'Nu factuur versturen?',
    'invoices:send_now_body' => 'Vul het formulier hieronder in en de factuur wordt door ons afgeleverd.',
    'invoices:newinvoice' => 'Factuur aanmaken',
    'invoices:send_now' => 'Factuur versturen',
    'invoices:timequantity' => 'Tijd/Aantal',
    'invoices:ratewithcurrency' => 'Tarief (:1)',
    'invoices:taxable' => 'BTW',
    'invoices:total' => 'Totaal',
    'invoices:amount' => 'Bedrag',
    'invoices:due' => 'Totaal bedrag te betalen voor',
    'invoices:subtotal' => 'Subtotaal',
    'invoices:totaltax' => 'Totaal BTW',
    'invoices:filestodownload' => 'Bestanden om te downloaden',
    'invoices:added' => 'De factuur is toegevoegd!',
    'invoices:fileswillbeavailableafterpay' => 'Deze bestanden zijn beschikbaar om te downloaden zodra de factuur volledig is betaald.',
    'invoices:no_payment_gateways_enabled' => 'Er zijn geen betaal providers aangezet, dit maakt het natuurlijk lastig om betaald te krijgen. Aanzetten in <a href=":1">Instellingen</a>',
    'invoices:invoicenumber' => 'Factuur #:1',
    'invoices:number' => 'Factuur #',
    'invoices:type' => 'Soort factuur',
    'invoices:is_recurring' => 'Periodiek / herhaling?',
    'invoices:is_paid' => 'Betaald?',
    'invoices:is_sent' => 'Verzonden?',
    'invoices:date_entered' => 'Datum aangemaakt',
    'invoices:delete_title' => 'Deze factuur verwijderen?',
    'items:select_time_entry' => 'Tijd binnenkomst',
    'invoices:delete_message' => 'Weet je zeker dat je deze factuur wilt verwijderen?',	
    'invoices:create' => 'Factuur aanmaken',
    'invoices:edit' => 'Factuur bewerken',
    'invoices:amountrequired' => 'Het bedrag is verplicht',
    'invoices:currencydoesnotexist' => 'Deze valuta bestaat niet.',
    'invoices:unique_id' => 'Uniek ID',
    'invoices:willreoccurin' => 'Deze factuur wordt herhaald op :1.',
    'invoices:willbesentautomatically' => 'De klant wordt per e-mail op de hoogte gebracht over deze factuur op :1.',
    'invoices:clientlastnotifiedon' => 'De klant is per e-mail geïnformeerd over deze factuur op :1.',
    'invoices:simple' => 'Eenvoudig',
    'invoices:simple_help' => 'Een eenvoudige factuur heeft geen extra regels voor producten/diensten. Alleen een totaalbedrag.',
    'invoices:detailed' => 'Gedetailleerd',
    'invoices:detailed_help' => 'Gedetailleerde facturen kunnen meerdere regels voor producten/diensten bevatten.',
    'invoices:estimate_help' => 'Offertes zijn gedetailleerde voorstellen die niet factureerbaar zijn.',
    'invoices:unpaid_totalamount' => 'Onbetaald / Totaal bedrag',
    'invoices:saveinvoice' => 'Factuur opslaan',
    'invoices:deleted' => 'De factuur is verwijderd!',
    'invoices:view' => 'Bekijk factuur',
    'invoices:is_viewable' => 'Toon in klantgedeelte?',
    'invoices:no_invoices' => 'Er zijn geen facturen.',
    'invoices:addedsuccess' => 'U heeft een factuur toegevoegd voor',
    'invoices:invoice' => 'factuur',
    'invoices:preview' => 'Voorvertoning factuur',
    'invoices:editinvoice' => 'Bewerk factuur #:1',
    'invoices:messageupdated' => 'De factuur is bijgewerkt!',
    'invoices:resend' => 'Factuur opnieuw verzenden',
    'invoices:client_viewed' =>	':1 bekeek <a href=":2">factuur #:3</a> op :4',
	'invoices:client_paid' => ':1 betaalde <a href=":2">factuur #:3</a> op :4',
    'invoice:paid_amount' => 'Betaald bedrag',
	/** End Invoices **/

	/** Estimates **/
    'estimates:attachedtoproposal' => 'Toegevoegd aan voorstel #:1',
    'estimates:duplicated' => 'Offerte #:1 gekopieerd. Het nieuwe offertenummer is #:2.',
    'estimates:alltitle' => 'Alle offertes',
    'estimates:attachingtoproposal' => 'Offerte wordt nu toegevoegd aan het voorstel, moment aub...',
    'estimates:delete_title' => 'Deze offerte verwijderen?',
    'estimates:delete_message' => 'Weet je zeker dat je deze offerte wilt verwijderen?',
    'estimates:createnew' => 'Nieuwe offerte aanmaken',
    'estimates:generate_estimate' => 'Genereer Offerte',
    'estimates:converted' => 'Offerte #:1 gewijzigd naar een project.',
    'estimates:converted_to_invoice' => 'Offerte #:1 gewijzigd naar een factuur.',
    'estimates:noestimatetitle' => 'Er zijn geen offertes',
    'estimates:noestimatesforthisclient' => 'Er zijn geen offertes voor deze klant.',
    'estimates:noestimatesforthefilteredclient' => "Er zijn geen offertes voor :1.",
    'estimates:deleted' => 'De offerte is verwijderd!',
    'estimates:noestimatebody' => 'Dit zou je eigenlijk nog moeten doen! Wilt je er eentje aanmaken?',
    'estimates:estimatenumber' => 'Offerte #:1',
    'estimates:view' => 'Bekijk offerte',
    'estimates:no_estimates' => 'Er zijn geen offertes.',
    'estimates:addedsuccess' => 'U heeft een offerte toegevoegd voor',
    'estimates:estimate' => 'offerte',
    'estimates:added' => 'Succes! De offerte is toegevoegd.',
    'estimates:addedconf' => 'U heeft offerte # <strong>:1</strong> toegevoegd, totaal <strong>:2</strong> voor :3:4.',
    'estimates:send_now_title' => 'Offerte nu verzenden?',
    'estimates:send_now_body' => 'Vul het onderstaande formulier in en we verzenden deze offerte direct voor u.',
    'estimates:send_now' => 'Verzend offerte',
    'estimates:edit' => 'Bewerk offerte',
    'estimates:preview' => 'Voortvertoning offerte',
    'estimates:editestimate' => 'Bewerk offerte #:1',
    'estimates:messageupdated' => 'De offerte is bijgewerkt!',
    'estimates:client_viewed'		=>	':1 bekeek <a href=":2">offerte #:3</a> op :4',
    'estimates:client_accepted'		=>	':1 accepteerde <a href=":2">offerte #:3</a> op :4',
    'estimates:client_rejected'		=>	':1 wees <a href=":2">offerte #:3</a> af op :4',
    'estimates:resend' => 'Offerte opnieuw versturen',
    'estimates:estimatedate' => 'Offerte datum',
	/** End Estimates **/

	/** Projects **/
    'projects:status_id' => 'Taak Status',
    'projects:projected' => 'Ingeschat',
    'projects:projected_hours' => 'Ingeschatte uren',
    'projects:navigationitem' => 'Projecten',
    'projects:hours_worked' => 'Aantal gewerkte uren',
    'projects:hours_worked_short' => 'Uren gewerkt',
    'projects:alltitle' => 'Alle projecten',
    'projects:totalprojects' => 'Totaal aantal projecten',
    'projects:noprojecttitle' => 'Er zijn nog geen projecten!',
    'projects:noprojecttext' => 'Wil je nu een project toevoegen? ',
    'projects:add' => 'Start nieuw project',
    'projects:createfromtemplate'	=> 'Nieuw gebaseerd op template',
    'projects:doesnotexist' => 'Het project dat u probeert te bekijken bestaat niet.',
    'projects:edit' => 'Bewerk project',
    'projects:delete' => 'Verwijder project',
    'projects:project' => 'Project',
    
	'projects:new_project_from_estimate_without_number' => "Nieuw Project van Offerte",
    'projects:new_project_from_estimate_with_number' => "Nieuw Project van Offerte #:1",
    
	'projects:due_date' => 'Vervaldatum',
    'projects:is_completed' => 'Voltooid?',
    'projects:manage_project' => 'Beheer Project',
    'projects:areyousuredeletetask' => 'Weet je zeker dat je deze taak wilt verwijderen?',
    'projects:add_time' => 'Tijd toevoegen',
    'projects:add_hours' => 'Uren toevoegen',
    'projects:generate_invoice' => 'Factuur genereren',
    'projects:no_projects' => 'Er zijn geen projecten.',
    'projects:archive_proj' => 'Project archiveren',
    'projects:archive' => 'Bekijk archief',
    'projects:active' => 'Actieve Projecten',
    'projects:archived' => 'Gearchiveerde Projecten',
    'projects:noarchivedprojecttitle' => 'U heeft geen gearchiveerde projecten.',
    'projects:noarchivedprojecttext' => 'U kunt een project archiveren vanuit uw projectpagina ',
    'projects:allarchivedtitle' => 'Alle gearchiveerde projecten',
    'projects:templatize' => 'Opslaan als template',
    'projects:milestone_identifier' => "[Mijlpaal: :1]",
	/** End Projects **/


	/** Milestones **/
    'milestones:add' => 'Toevoegen Mijlpaal',
    'milestones:edit' => 'Bewerken Mijlpaal',
    'milestones:delete' => 'Verwijderen Mijlpaal',
    'milestones:milestone' => 'Mijlpaal',
    'milestones:target_date' => 'Geplande afrondingsdatum',
    'milestones:assigned_user' => 'Toegewezen gebruiker',
    'milestones:select_default' => '-- Geen Mijlpaal --',
    'milestones:no_milestone' => 'Taken zonder Mijlpaal',
    'milestones:add_success' => 'Mijlpaal ":1" succesvol toegevoegd!',
    'milestones:edit_success' => 'Mijlpaal ":1" succesvol bewerkt!',
    'milestones:add_failed' => 'Mijlpaal ":1" kon niet worden toegevoegd.',
    'milestones:edit_failed' => 'Mijlpaal ":1" kon niet worden toegevoegd.',
    'milestones:are_you_sure_delete' => 'Weet u zeker dat u deze Mijlpaal wilt verwijderen?',
    'milestones:delete_success' => 'Mijlpaal ":1" succesvol verwijderd!',
    'milestones:does_not_exist' => 'Deze Mijlpaal bestaat niet.',
    'milestones:target_date' => 'Geplande afrondingsdatum',
    'milestones:select_assignee_default' => 'Geen Opdrachtnemer',
    /** End Milestones **/
     
    /** Proposals **/
    'proposal:outline' => 'Voorstel schema',


    /** End Proposals **/

	/** Reminders **/
 
    'reminders:reminders'	=>	'Herinneringen',
    'reminders:send'	=>	'Verzend herinneringen',
    'reminders:success'	=>	'De herinneringen zijn verzonden!!',
    'reminders:remind'	=> 'Herinner',
    'reminders:message'	=>	'Bericht',
    'reminders:due'	=>	'Dagen',
    'reminders:details'	=>	'Details',
    'reminders:log'	=>	'Log',

	/** End Reminders **/


	/** Email Templates **/
    'emailtemplates:email_templates'	=> 'E-mail templates',
    'emailtemplates:create_template'	=>	'Nieuwe template maken',
    'emailtemplates:add'	=>	'Nieuwe e-mail template maken',
    'emailtemplates:edit'	=>	'E-mail template bewerken',
    'emailtemplates:manage'	=>	'Templates beheren',
    'emailtemplates:name'	=>	'E-mail naam',
    'emailtemplates:subject'	=>	'E-mail onderwerp',
    'emailtemplates:days'	=>	'Datumbereik',
    'emailtemplates:type'	=>	'Template type',
    'emailtemplates:success'	=>	'E-mail template succesvol aangemaakt',
    'emailtemplates:edited'	=>	'E-mail template succesvol bewerkt',
    'emailtemplates:does_not_exist'	=>	'E-mail template bestaat niet',
    'emailtemplates:deleted'	=>	'E-mail template succesvol verwijderd',
    'emailtemplates:delete_title'	=>	'Verwijder e-mail template',
    'emailtemplates:delete_message'	=>	'Weet u zeker dat u deze e-mail template wilt verwijderen?',


	/** End Email Templates **/

    /** Reports **/
    'reports:perclient' => 'per klant',
    'reports:datefrom' => 'Van',
    'reports:allclients' => 'Alle klanten',
    'reports:dateto' => 'Aan',
    'reports:byclient' => 'Klant',
     
    'reports:view' => 'Rapport bekijken',
    'reports:show_all' => 'Toon rapporten',
    
    'reports:paid_and_unpaid' => "Betaald en Onbetaald",
    'reports:paid_vs_unpaid_over_time' => "Betaald versus Onbetaald over periode",
    'reports:per_client' => 'per klant',
    'reports:total_with_tax' => "Totaal (Incl. BTW)",
    'reports:total_without_tax' => "Totaal (Excl. BTW)",
    'reports:total_collected' => 'Totaal Ontvangen',
    'reports:fees_paid' => 'Betaalde kosten',
    'reports:total_amount' => 'Totaal Bedrag',
    'reports:paid_amount' => "Betaald Bedrag",
    'reports:unpaid_amount' => "Onbetaald Bedrag",
    'reports:client_name' => "Klantennaam",

    'reports:nodata' => 'Nr :1.',
    /** End Reports **/
 
    /** Currencies **/
    'currencies:default' => '[Standaard] :1',
    'currencies:cad' => 'Canadese Dollar',
    'currencies:eur' => 'Euro',
    'currencies:usd' => 'U.S. Dollar',
    'currencies:gbp' => 'Pond',
    'currencies:hkd' => 'Hong Kong Dollar',
    'currencies:php' => 'Filippijnse Peso',
    'currencies:zar' => 'Zuid Afrikaanse Rand',
    /** End Currencies **/

    /** Proposals **/
    'proposals:duplicated' => 'Voorstel #:1 gekopieerd. Het nieuwe voorstelnummer is #:2.',
    'proposals:usesectiontemplate' => 'Gebruik deze Sectie Template',
    'proposals:showcontents' => 'Toon inhoud',
    'proposals:hidecontents' => 'Verberg inhoud',
    'proposals:deletepremadesection' => 'Verwijder Sectie Template',
    'proposals:nopremadesections' => 'U heeft geen opgeslagen Sectie Templates.',
    'proposals:newproposal' => 'Nieuw voorstel',
    'proposals:number' => 'Voorstel #',
    'proposals:all' => 'Alle voorstellen',
    'proposals:noproposaltitle' => "Er zijn geen voorstellen!",
    'proposals:noproposalbody' => "Je zou nu een voorstel moeten aanmaken. Echt waar.",
    'proposals:client_viewed'		=>	':1 bekeek <a href=":2">voorstel #:3</a> op :4',
    'proposals:client_accepted'		=>	':1 accepteerde <a href=":2">voorstel #:3</a> op :4',
    'proposals:client_rejected'		=>	':1 wees <a href=":2">voorstel #:3</a> af op :4',
	'proposals:rejected' => 'Afgewezen op :1',
    'proposals:accepted' => 'Geaccepteerd op :1',
    'proposals:lastviewed' => 'Recent bekeken door klant op :1, om :2.',
    'proposals:neverviewed' => 'niet bekeken door klant.',
    'proposals:noanswer' => 'Geen antwoord',
    'proposals:createproposal' => 'Voorstel aanmaken',
    'proposals:editproposal' => 'Voorstel bewerken',
    'proposals:createdsuccessfully' => 'Voorstel gemaakt!',
    'proposals:sections' => 'Secties',
    'proposals:section' => 'Sectie',
    'proposals:createsection' => 'Nieuwe sectie toevoegen',
    'proposals:createpage' => 'Pagina toevoegen',
    'proposals:emptysection' => '(geen titel)',
    'proposals:emptycontents' => '(geen inhoud)',
    'proposals:emptysubtitle' => '(geen subtitel)',
    'proposals:for' => 'Voorstel voor:',
    'proposals:pagexofcount' => 'Pagina :1 van :2',
    'proposals:saving' => 'Bezig met opslaan...',
    'proposals:save' => 'Voorstel opslaan',
    'proposals:savepremade' => 'Opslaan als Sectie template',
    'proposals:addestimate' => 'Offerte toevoegen',
    'proposals:saved' => 'Opgeslagen!',
    'proposals:createandedit' => 'Volgende: Inhoud van voorstel bewerken',
    'proposals:delete_message' => 'Weet je zeker dat je dit voorstel wil verwijderen?',
    'proposals:createpremadesection' => 'Toevoegen van Sectie template',
    'proposals:selected_attachments' => 'Selecteer offerte',
    'proposals:attach_selected_estimate' => 'Geselecteerde offerte bijvoegen',
    'proposals:proposal' => 'Voorstel',
    'proposals:status' => 'Status',
    'proposals:view' => 'Bekijk voorstel',
    'proposals:estimate' => 'Offerte ',
    'proposals:no_proposals' => 'Er zijn geen voorstellen.',
    'proposals:proposal_title' => 'Voorstel titel',
    'proposals:kitchennotice' => 'Let op: Voorstellen zullen worden getoond in de :1 wanneer de klant de voorstellink heeft bekeken. Dit betekend dat u zoveel wijzigingen kunt doen als u wilt zonder dat de klant het ziet totdat u dat wilt.',
    /** End Proposals **/
     
    /** Tasks **/
    'tasks:task' => 'Taak',
    'tasks:edit_succeeded' => 'Taak succesvol gewijzigd.',
    'tasks:hours' => 'Uren',
    'tasks:due_date' => 'Vervaldatum',
    'tasks:is_completed' => 'Voltooid?',
    'tasks:timer' => 'Tijdklok',
    'tasks:rate' => 'Tarief',
    'tasks:default_rate' => 'Standaard tarief',
    'tasks:entries' => 'Tijd regels',
    'tasks:view_entries' => 'Bekijk reacties',
    'tasks:edit_entry' => 'Wijzig tijd-regel',
    'tasks:create' => "Taak aanmaken",
    'tasks:create_sub' => "Toevoegen Sub-Taak",
    'tasks:task_parent' => "Bovenliggende taak",
    'tasks:edit' => "Wijzig taak",
    'tasks:create_succeeded' => "De taak is aangemaakt!",
    'tasks:no_task_title' => 'Hmm, nog geen taken...',
    'tasks:no_task' => "Geen Taak",
    'tasks:no_task_message' => 'Je zou er een paar kunnen maken!',
    'tasks:is_viewable' => 'Tonen in klantgedeelte?',
    'tasks:no_milestones' => 'Taken zonder mijlpaal',
    'tasks:not_related_to_a_task' => "-- Niet gerelateerd aan een taak --",
    'tasks:select_parent_default' => '-- Geen bovenliggende taak --',
    'tasks:timers_running' => 'Timer loopt',
    'tasks:task_completed_by' =>	':1 voltooide <a href=":2">taak :3</a> om :4',
    'tasks:discussion' => 'Discussie: ',
    'tasks:billed_hours' => "Gefactureerde uren",
    'tasks:unbilled_hours' => "Niet gefactureerde uren",
    
    
	/** Users **/
    'users:create_user' => 'Nieuwe gebruiker aanmaken',
    'users:confirm_delete_emphasised' => "Er is geen weg terug!",

	/** Items **/
    'items:name' => 'Product/dienst naam',
    'items:description' => 'Product/dienst beschrijving',
    'items:qty_hrs' => 'Aantal / Uren',
    'items:quantity' => 'Aantal',
    'items:rate' => 'Tarief',
    'items:tax_rate' => 'BTW tarief',
    'items:cost' => 'Prijs',
    'items:line_items' => 'Regel producten/diensten',
    'items:add' => 'Product/dienst toevoegen',
    'items:edit' => 'Product/dienst bewerken',
    'items:noitemtitle' => 'Er zijn nog geen producten/diensten!',
    'items:noitembody' => 'Je zou nu een paar producten/diensten kunnen toevoegen, het zorgt ervoor dat het aanmaken van facturen een stuk makkelijker gaat!',
    'items:delete_title' => 'Dit product/dienst verwijderen?',
    'items:delete_message' => 'Weet je zeker dat je product/dienst ":1" wilt verwijderen?',
    'items:type' => 'Type',
    'items:select_standard' => 'Standaard',
    'items:select_expense' => 'Uitgave',
    'items:add_expense_to_project' => 'Toevoegen uitgave',
    'items:expenses'	=> 'Uitgaven',
	/** END Items **/

	/** Expenses **/
    'expenses:expenses'	=>	'Uitgaven',
    'expenses:add'	=>	'Toevoegen uitgave',
    'expenses:edit_expense'	=>	'Wijzig uitgave',
    'expenses:delete'	=>	'Verwijder uitgave',
    'expenses:deleted'	=>	'Uitgave verwijderd',
    'expenses:all'	=>	'Alle uitgaven',
    'expenses:amount'	=>	'Bedrag',
    'expenses:supplier'	=>	'Leverancier',
    'expenses:suppliers'	=>	'Leveranciers',
    'expenses:category'	=>	'Categorie',
    'expenses:categories'	=>	'Categorieën',
    'expenses:add_supplier'	=>	'Toevoegen leverancier',
    'expenses:edit_supplier'	=>	'Wijzig leverancier',
    'expenses:add_category'	=>	'Toevoegen categorie',
    'expenses:edit_category'	=>	'Wijzig categorie',
    'expenses:parent_category'	=>	'Hoofd categorie',
    'expenses:filter'	=>	'Filter uitgave(n)',
    'expenses:start_date'	=>	'Startdatum',
    'expenses:end_date'	=>	'Einddatum',


	/** END Expenses **/

	/** Transactions **/
    'transactions:paymentcancelled' => 'Betaling geannuleerd',
    'transactions:extrapaymentcancelled' => 'Uw betaling is geannuleerd.',
    'transactions:paymentreceived' => 'Betaling ontvangen!',
    'transactions:fee_applied' => 'Gezien :1 transactie kosten oplegt, hebben we een :2% opslag toegevoegd.',
    'transactions:orderbeingprocessed' => 'Moment aub, uw opdracht wordt verwerkt en u wordt doorgestuurd naar de :1 website.',
    'transactions:ifyouarenotredirected' => 'Als u niet automatisch binnen 5 seconden wordt doorgestuurd naar :1 ...',
    'transactions:thankyouforyourpayment' => 'Hartelijk dank voor uw betaling. U ontvangt zo spoedig mogelijk een ontvangst bevestiging per e-mail.',
    'transactions:ifyouhavefilesyouwillgetanemail' => 'Als er bestanden zijn die nog aan u geleverd moeten worden, ontvangt u een e-mail met de download link.',
    'transactions:ifyoudonotreceiveemail' => 'Als u binnen een uur geen e-mail hebt ontvangen neem dan contact op met :1',
	/** End Transactions **/

	/** Timesheets **/
    'timesheet:taskname' => 'Taak naam',
    'timesheet:starttime' => 'Begintijd',
    'timesheet:endtime' => 'Eindtijd',
    'timesheet:timeframe' => 'Tijdschema',
    'timesheet:duration' => 'Duur',
    'timesheet:date' => 'Datum',
    'timesheet:forproject' => 'Tijdrooster voor project ":1"',
    'timesheet:timesheet' => 'Tijdrooster',
    'timesheet:for' => 'Tijdrooster voor:',
    'timesheet:totalbillable' => 'Totaal te factureren uren',
    'timesheet:view_pdf' => 'Bekijk tijdrooster (PDF)',
    'timesheet:user' => 'Gebruiker',
    'timesheet:entries' => 'Vermeldingen',
    'timesheet:no_entries' => "Er zijn geen tijdsvermeldingen.",
	/** End Timesheets **/


	/** Support Tickets **/
 
    'tickets:all_tickets' => 'Support tickets',
    'tickets:support_tickets' => "Support Tickets",
    'tickets:pending' => 'In afwachting',
    'tickets:open' => 'Open',
    'tickets:resolved' => 'Afgehandeld',
    'tickets:closed' =>	'Gesloten',
    'tickets:respond' => 'Reageer op ticket',
    'tickets:ticket_options' =>	'Ticket Opties',
    'tickets:attachment' =>	'Bijlage',
    'tickets:updated_status' =>	':1 werkte de ticketstatus bij naar :2',
    'tickets:add_a_new_ticket' => "Toevoegen nieuwe ticket",
    'tickets:create_a_new_ticket' => 'Maak een nieuw ticket',
    'tickets:add_ticket' => 'Ticket toevoegen',
    'tickets:assign_to_user' => 'Toewijzen aan gebruiker',
    'tickets:select_client' => 'Selecteer Klant',
    'tickets:ticket_subject' => 'Ticket Onderwerp',
    'tickets:ticket_message' => 'Ticket Bericht',
    'tickets:ticket_priority' => 'Ticket Prioriteit',
    'tickets:ticket_status' => 'Ticket Status',
    'tickets:no_priority' => '-- Geen prioriteit --',
    'tickets:no_status' => '-- Geen status --',
    'tickets:no_posts' => "Geen berichten.",

	/** End Support Tickets **/

	/** Frontend **/
    'frontend:hithere' => 'Hallo!',
    'frontend:followthemaillinkdude' => 'Om te zorgen dat u de facturen kunt bekijken moet u op de volledige link klikken die gestuurd is per e-mail. Bijv. :1.',
    'frontend:contactadminforassistance' => 'Probeer dit eerst of neem contact op :1 @ :2 voor assistentie.',
	/** End Frontend **/

	/** Settings **/

    'settings:task_statuses' => "Taak Statussen",
    'settings:ticket_statuses' => "Ticket Statussen",
    'settings:ticket_priorities' => "Ticket Prioriteiten",
    'settings:background_color' => "Achtergrondkleur",
    'settings:text_color' => "Tekstkleur",
    'settings:text_shadow' => "Tekstschaduw",
    'settings:box_shadow' => "Boxschaduw",
    'settings:default_rate'	=> "Standaard tarief",
    'settings:allowed_extensions' => 'Toegestane upload extensies',
    'settings:comma_separated' => 'komma-gescheiden',
    'settings:pdf_page_size' => 'PDF Pagina grootte',
    'settings:default_invoice_notes' => 'Standaard factuur notities',
    'settings:default_invoice_title' => 'Standaard factuurtitel',
    'settings:default_invoice_due_date' => 'Standaard vervaldatum',
    'settings:autosave_proposals' => 'Autosave Voorstellen',
    'settings:default_invoice_due_date_explain' => 'dagen nadat de factuur is aangemaakt. Als u geen standaard datum wilt laat u dit veld leeg.',
    'settings:testemailsettings' => 'Test E-mail instellingen',
    'settings:kitchen_route' => 'Klant toegang link voorvoegsel',
    'settings:kitchen_route_explain' => "(Voorbeeld. :1)",
    'settings:include_remittance_slip' => 'Overschrijvingsstrook',
    'settings:include_remittance_slip_explain' => "Wanneer aangevinkt zullen de PDF facturen een overschrijvingsstrook bevatten.",
    'settings:items_per_page' => 'Items per pagina',
    'settings:items_per_page_explain' => 'Aantal items (facturen/voorstellen/offertes/projecten/taken) om per pagina te tonen.',
    'settings:send_x_days_before' => 'Standaard "verzend dagen van te voren"',
    'settings:send_x_days_before_explain' => "Standaard aantal dagen voordat een periodieke factuur vervalt verzenden naar de klant.",
    'settings:file_to_import' => 'Bestand om te importeren',    
    'settings:file_should_be_csv' => 'Alleen CSV en XML bestanden worden ondersteund.',
    'settings:importnow' => 'Importeer nu!',
    'settings:whatimporting' => 'Wat bent u aan het importeren?',
    'settings:whatexporting' => 'Wat bent u aan het exporteren?',
    'settings:nouploadedimportfile' => 'U heeft geen bestand geupload om te importeren.',
    'settings:import' => 'Importeren',
    'settings:importedclients' => ':1 klanten succesvol geïmporteerd.',
    'settings:importedprojects' => ":1 projecten succesvol geïmporteerd.",
    'settings:importedusers' => ":1 gebruikers succesvol geïmporteerd.",
    'settings:importedinvoices' => ':1 facturen succesvol geïmporteerd.',
    'settings:importedtasks' => ':1 taken succesvol geïmporteerd.',
    'settings:importedestimates' => ':1 offertes succesvol geïmporteerd.',
    'settings:importedtime_entries' => ':1 tijd regels succesvol geïmporteerd.',
    'settings:xwereduplicates' => ':1 waren duplicaten en zijn genegeerd.',
    'settings:import_desc' => 'Importeer data naar Pancake.',
    'settings:export' => 'Exporteren',
    'settings:exportnow' => 'Exporteer nu!',
    'settings:importexport' => 'Importeren / Exporteren',
    'settings:removelogo' => 'Verwijder Logo',
    'settings:wrong_license_key' => 'De licentie code die is ingevuld is ongeldig.',
    'settings:noopenssl' => 'Je PHP server heeft geen OpenSSL geconfigureerd, wat betekend dat je geen gebruik kunt maken van Gmail of Google Apps om email te versturen. Neem cotact op met je hosting provider om te zeggen dat je OpenSSL nodig hebt.',
    'settings:logoremoved' => 'Logo verwijderen is gelukt!',
    'settings:save' => 'Instellingen opslaan',
    'settings:logodimensions' => 'Het logo moet 240 x 106 pixels zijn (breedte x hoogte).',
    'settings:logoformatsallowed' => 'BMP, PNG, JPG (JPEG) en GIF zijn toegestaan.',
    'settings:ftp_user' => 'FTP Gebruiker',
    'settings:ftp_pass' => 'FTP Wachtwoord',
    'settings:ftp_path' => 'FTP Pad',
    'settings:ftp_port' => 'FTP Poort',
    'settings:ftp_pasv' => 'Passieve modus?',
    'settings:nophpupdates' => "Vanwege de server configuratie is het nodig om je FTP gegevens in te vullen zodat Pancake automatisch kan worden bijgewerkt. Deze gegevens worden intern gebruikt door Pancake en nooit aan derden verstrekt.",
    'settings:ftp_host' => 'FTP Host',
    'settings:uptodate' => 'Pancake is bijgewerkt (:1)',
    'settings:newversionavailable' => 'Er is een nieuwe versie van Pancake beschikbaar (:1)!',
    'settings:updatenow' => 'Nu bijwerken!',
    'settings:checkforupdates' => "Controleer op updates",
    'settings:youneedtoconfigurefirst' => 'Je Pancake is nog niet geconfigureerd om automatisch te worden bijgewerkt. Vul je FTP gegevens hieronder in en klik op "Instellingen opslaan".<br /> Pancake zal dan worden bijgewerkt.',
    'settings:general' => 'Algemeen',
    'settings:emails' => 'Emails',
    'settings:taxes' => 'BTW',
    'settings:currencies' => 'Valuta',
    'settings:branding' => 'Huisstijl',
    'settings:payment_methods' => 'Betaal methodes',
    'settings:feeds' => 'Feeds',
    'settings:api_keys' => 'API Keys',

    'settings:time_entry_times' => "Tijd Invoer Tijden",
    "settings:include_dates_and_times_in_line_items" => 'Voeg data en tijden toe bij een "Tijd Invoer" regel item omschrijving.',
    "settings:when_generating_invoice" => "Bij het genereren van facturen gebruik een regel per item",
    "settings:use_utf8_font" => "Gebruik UTF-8 font in PDF's",
    "settings:use_utf8_font_explanation" => "Gebruik dit als karakters niet goed worden weergegeven in PDF's.",
    "settings:pdf_attachments" => "PDF Bijlages",
    "settings:pdf_attachments_explanation" => "Indien aangevinkt, zal Pancake de PDF als bijlage meesturen bij de factuur, inschatting of voorstel e-mails.",

    'settings:site_name' => 'Site naam',
    'settings:language' => 'Taal',
    'settings:timezone' => 'Tijdzone',
    'settings:currency' => 'Valuta',
    'settings:theme' => 'Frontend thema',
    'settings:admin_theme' => 'Admin thema',
    'settings:date_format' => 'Datum notatie',
    'settings:time_format' => "Tijd notatie",
    'settings:task_time_interval' => 'Taak tijd afronding (Laat leeg voor geen afronding)',
    'settings:task_time_interval_description' => '(bijv: 00:30 of 0.5 - alle tijd entries worden afgerond naar het dichtstbijzijnde 00:30 wanneer ze worden gefactureerd op een factuur.)',
    'settings:mailing_address' => 'Postadres',
     
    'settings:default_subject' => 'Standaard onderwerp',
    'settings:default_contents' => 'Standaard bericht',
    'settings:new_estimate' => 'Nieuwe offerte',
    'settings:new_invoice' => 'Nieuwe factuur',
    'settings:new_proposal' => 'Nieuw voorstel',
    'settings:paid_notification' => 'Kennisgeving betaling',
    'settings:payment_receipt' => 'Ontvangen betaling',
    'settings:new_ticket' => 'Nieuwe ticket',
    'settings:ticket_invoice' => "Nieuwe ticket factuur",
    'settings:ticket_updated' => 'Ticket bijgewerkt',
    'settings:ticket_status_updated' => 'Ticket status bijgewerkt',
    
    'settings:logo' => 'Je logo',
    'settings:frontend_css' => 'Frontend Custom CSS',
    'settings:backend_css' => 'Backend Custom CSS',
     
    'settings:rss_password' => 'RSS wachtwoord',
    'settings:default_feeds' => 'Standaard Feeds',
    'settings:cron_job_feed' => 'Cron Job',
    'settings:feed_generator' => 'Feed Generator',
    'settings:your_link' => 'Je Link',
    'settings:bcc' => 'BCC',
    'settings:automaticallybccclientemail' => 'Een kopie van alle e-mails van klanten worden automatisch gestuurd naar het kennisgevings e-mailadres (zoals hierboven is aangegeven)',
    'settings:api_note' => 'Naam / Notitie',
    'settings:api_key' => 'Sleutel',
     
    'settings:tax_name' => 'BTW naam',
    'settings:tax_value' => 'Waarde',
    'settings:tax_reg' => 'Registratie / Code',
    'settings:add_tax' => 'Andere belasting toevoegen',
     
    'settings:currency_name' => 'Valuta naam',
    'settings:currency_code' => 'Valuta code',
    'settings:exchange_rate' => 'Wisselkoers',
    'settings:add_currency' => 'Andere valuta toevoegen',
    /** End Settings **/
     
    'update:ifyourenotsurecontactus' => "Als je niet zeker weet wat je moet doen <a href='https://www.pancakeapp.com/account/support/ticket/new'>start dan een nieuw support onderwerp in het forum</a>.",
    'update:youmodified' => 'Je wijzigde',
    'update:youdeleted' => 'Je verwijderde',
    'update:loadingpleasewait' => 'Laden, een moment geduld...',
    'update:errordownloading' => 'Er is een systeemupdate voor Pancake beschikbaar, maar er zijn momenteel problemen met het binnenhalen van deze update.',
    'update:herearestepstofix' => 'Hier zijn enkele stappen die u kunt proberen om het probleem op te lossen:',
    'update:makesureuploadsiswritable' => 'Wees er zeker van dat de uploads map schrijfbaar is (CHMOD 0777).',
    'update:deletepancakesystemupdate' => 'Verwijder de pancake-update-system map (binnen de uploads map), en alle inhoud van deze map.',
    'update:loadpancakeagain' => "Herlaad Pancake. Als de fout blijft bestaan neem dan contact op met support@pancakeapp.com en we zullen u proberen te assisteren.",
    'update:whatschanged' => "Wat is nieuw in :1",
    'update:ftp_conn' => 'Pancake kon geen verbinding maken met de FTP host.',
    'update:ftp_login' => 'Pancake kon niet inloggen via FTP (verkeerde FTP gebruikersnaam/wachtwoord?).',
    'update:ftp_chdir' => 'Pancake kon het FTP pad niet instellen (pad bestaat waarschijnlijk niet).',
    'update:ftp_no_uploads' => 'Pancake Kreeg geen toegang om bestanden te uploaden via FTP.',
    'update:ftp_indexwrong' => 'Het FTP pad wat is opgegeven is onjuist. Het moet een pad zijn naar Pancake\'s directory.',
    'update:ftp_indexnotfound' => 'Het FTP pad wat is opgegeven is onjuist. Het moet een pad zijn naar Pancake\'s directory.',
    'update:update_conflict' => 'Je hebt een aantal bestanden bijgewerkt sinds de laatste update. Om te zorgen dat je aangepaste bestanden veilig zijn is hier een lijst met bestanden die je hebt aangepast en waarschijnlijk conflicteren met de laatste update.',
    'update:update_no_perms' => 'Pancake heeft onvoldoende rechten om zichzelf te updaten, en heeft geen toegang tot een FTP account om zichzelf te updaten. Update kan niet doorgaan.',
    'update:review_files' => 'Bekijk deze bestanden en maak een backup voordat je verder gaat. Als de upgrade voltooid is kunt je je wijzigingen terugzetten. Vervang niet zomaar de bijgewerkte bestanden door je verouderde kopieën, omdat Pancake dan niet meer goed werkt.',
    'update:internetissues' => "Pancake kan geen verbinding maken met het internet.",
    'update:pancakeneedsinternet' => 'Om Pancake goed te laten functioneren, moet je server toestaan om informatie van het internet te halen.',
    'update:maybefirewall' => "Het lijkt erop dat je server Pancake geen toegang tot internet geeft. Dit kan komen door een firewall probleem op je server. Neem hiervoor contact op met je hosting provider. Vraag om PHP toegang tot manage.pancakeapp.com.",
    'update:nointernetaccess' => 'Geen internet toegang',
    'update:pancakeupdated' => 'Pancake is bijgewerkt van :1 naar :2',
    /** Action Logger **/
     
    /** End Action Logger **/
     
    /** Partial Payments **/
    'partial:totalamounttobepaid' => "Totaalbedrag te betalen door klant",
    'partial:amount' => 'Bedrag',
    'partial:add_payment' => 'Toevoegen betaling',
    'partial:dueon' => 'Te betalen voor',
    'partial:paymentdetails' => 'Betalingsgegevens',
    'partial:savepaymentdetails' => 'Betalingsgegevens opslaan',
    'partial:proceedtopayment' => 'Overgaan tot betaling',
    'partial:topaynowgoto' => 'Om direct te betalen ga naar :1',
    'partial:pay_part_x_now' => "Betaal deel #:1 van de factuur nu",
    'partial:dueondate' => 'verschuldigd voor :1',
    'partial:paymentmethod' => 'Betalingsmethode',
    'partial:paymentdate' => 'Datum betaling',
    'partial:paymentstatus' => 'Status betaling',
    'partial:transactionid' => 'Transactie ID',
    'partial:markaspaid' => 'Markeren als betaald',
    'partial:transactionfee' => 'Transactiekosten',
    /** End Partial Payments **/

    /** Payment Gateways **/
    'paypal:clickhere' => 'Klik hier om verder te gaan',
    'authorize:transaction_key' => 'Transactie Sleutel',
    'paypal:email' => 'PayPal E-mail',
    'paypal:fee' => 'PayPal Kosten (%)',
    'paypalpro:paypalpro' => 'PayPal Payments Pro',
    'paypalpro:viacreditcard' => 'Betaal via Credit Card',
    'cash:cash' => 'Contant',
    'check:check' => 'Cheque',
    'moneyorder:moneyorder' => 'Money Order',
    'creditcard:creditcard' => 'Credit Card',
    'banktransfer:banktransfer' => 'Bankoverschrijving',
    'gateways:errorupdating' => 'Er is een fout opgetreden tijdens het bijwerken van de instellingen van je betalingsmethode. Neem contact op met support.',
    'gateways:paymentmethods' => 'Betaalmethoden',
    'gateways:selectpaymentmethod' => 'Selecteer Betaalmethode',
    'gateways:nogatewayused' => 'Geen betaalmethode gebruikt: Deel is niet betaald',
    'gateways:completed' => 'Voltooid',
    'gateways:refunded' => 'Terugbetaald',
    'gateways:unpaid' => 'Onbetaald',
    'gateways:paymentrejected' => ':1 betaling afgewezen',
    'gateways:rejectedemail' => 'Pancake kreeg bericht van een :1 betaling welke een van uw klanten (:2) maakte, maar :1 heeft deze afgewezen.',
    'gateways:pending' => 'In behandeling',
    'gateways:returntowebsite' => 'Ga terug naar :1',
    'gateways:cc_type' => 'Creditcard type',
    'gateways:cc_number' => 'Creditcard nummer',
    'gateways:cc_exp' => 'Vervaldatum',
    'gateways:cc_cardholder' => 'Naam op de creditcard',
    'gateways:cc_code' => 'CVV Code',
    'gateways:payment_details' => 'Betalingsdetails',
    'gateways:api_signature' => 'API handtekening',
    'gateways:api_password' => 'API wachtwoord',
    'gateways:api_username' => 'API gebruikersnaam',
    /** End Payment Gateways **/
     
    /** Kitchen Area **/
    'kitchen:edit_comment' => 'Wijzig reactie',
    'kitchen:add_a_comment' => "Reactie toevoegen",
    'kitchen:kitchen_name' => 'Klantenomgeving',
    'kitchen:pleaselogin' => 'Vul a.u.b. uw wachtwoord in om toegang te krijgen tot uw account',
    'kitchen:nocomments' => 'Er zijn nog geen reacties.',
    'kitchen:comment' => 'Reactie',
    'kitchen:comments' => 'Reacties',
    'kitchen:comments_x' => 'Reacties (:1)',
    'kitchen:file' => 'Bestand',
    'kitchen:submitcomment' => 'Nieuwe reactie',
    'kitchen:attachment' => 'Bijlage',
    'kitchen:saidon' => 'geplaatst op :1, om :2',
    'kitchen:subjectinvoice' => 'Nieuwe reactie op factuur #',
    'kitchen:subjectestimate' => 'Nieuwe reactie op offerte #',
    'kitchen:subjectproject' => 'Nieuwe reactie op project:',
    'kitchen:subjecttask' => 'Nieuwe reactie op taak:',
    'kitchen:subjectproposal' => 'Nieuwe reactie op voorstel:',
    'kitchen:backtodashboard' => 'Terug naar Dashboard',
    'kitchen:client_welcome' => 'Klantenomgeving voor:',
    'kitchen:urltosend' => 'Klant toegang url',
    'kitchen:nopassphrase' => 'Momenteel is het "wachtwoord" van de klant niet ingesteld. Dit betekend dat ze gewoon toegang hebben via de URL en dus geen wachtwoord nodig hebben om hun klantgedeelte te benaderen. Als u dit gedeelte toch wilt beveiligen met een simpel wachtwoord kunt u de klant bewerken en daar een wachtwoord instellen.',
    'kitchen:passphraseset' => 'Deze klant heeft een wachtwoord ingesteld',
    'kitchen:passphrase' => 'Wachtwoord',
    'kitchen:description' => 'Dit is de url om naar uw klant te zenden om ze toegang te geven tot het klantgedeelte waar ze projecten, facturen, etc. kunnen bekijken.',
    'kitchen:people_in_discussion'	=> 'Mensen aan het chatten',
    
    'kitchen:latest_invoice' => 'Laatste Factuur',
    'kitchen:unpaid_balance' => 'Openstaand bedrag: :1',
    'kitchen:total_paid_to_date' => 'Totaal betaald tot nu toe: :1',

    /** END Kitchen Area **/

    'store:store' => 'Winkel',
    'store:buy' => "Koop ($:1)",
    'store:update' => "Update",
    'store:install' => "Installeren",
    'store:settings' => "Instellingen",
    'store:already_bought' => "Je hebt dit item reeds gekocht!",
    'store:installed_successfully' => "Je hebt de :1 :2 succesvol geïnstalleerd.",
    'store:plugin' => "Plugin",
    'store:payment_gateway' => "Payment Gateway",
    'store:frontend_theme' => "Frontend Thema",
    'store:backend_theme' => "Backend Thema",
    'store:unknown' => "Onbekend",
    'store:updatestoreitems' => "Store items bijwerken",
    'store:download_free' => "Download (GRATIS)",
    'store:error1000' => "Je autorisatie token is niet langer geldig. Je moet je betaal gegevens nogmaals invoeren in pancakeapp.com.",
    'store:error1001' => "Je hebt dit item al gekocht!",
    'store:error1002' => "Er is een probleem opgetreden bij het afschrijven op je creditcard. Probeer het later opnieuw.",
    'store:error1003' => "Je hebt een ongeldig verzoek gedaan.",
    
    'email_templates:new_invoice' => 'Nieuwe Factuur',
    'email_templates:new_estimate' => 'Nieuwe Offerte',
    'email_templates:new_proposal' => 'Nieuw Voorstel',
    'email_templates:invoice_payment_notification_for_admin' => 'Betaalnotificatie (verstuurd naar admin)',
    'email_templates:invoice_payment_notification_for_client' => 'Betaling Ontvangen Notificatie (verstuurd naar klant)',
    'email_templates:new_ticket' => 'Nieuwe Ticket',
    'email_templates:new_ticket_invoice' => 'Nieuwe Ticket Factuur',
    'email_templates:ticket_updated' => 'Ticket Update Notificatie',
    'email_templates:ticket_status_updated' => 'Ticket Status Update Notificatie',
    'email_templates:assigned_to_task' => "Task Toewijzing Notificatie",
    'email_templates:assigned_to_milestone' => "Mijlpaal Toewijzing Notificatie",
    'email_templates:new_comment' => "Nieuwe Reactie Notificatie",
    
    'global:timer_app' => "Pancake Timer App",
	'global:there_is_no_activity' => "Er is geen teamactiviteit om weer te geven.",
    'global:there_are_no_tasks_assigned_to_you' => "Er zijn geen taken aan jou toegewezen.",
    
    /** Dashboard **/


	/** END Dashboard **/
    
    # v4.0.5
    
    # Begin v4.1.2 changes
    'invoices:converted_to_estimate' => "Factuur #:1 omgezet naar een inschatting.",
    'global:converttoestimate' => 'Omzetten naar Offerte',
    # End v4.1.2 changes
    
    # Begin v4.1.3 changes
    'tickets:view_archived' => "Bekijk Gearchiveerde Tickets",
    'tickets:view_unarchived' => "Bekijk Actieve Tickets",
    'tickets:archiving_ticket' => "Gearchiveerde ticket",
    'tickets:unarchiving_ticket' => "Ongearchiveerde ticket",
    "tickets:unknown_error_ticket_not_altered" => "Een onbekende foutmelding is opgetreden. De ticket is niet gewijzigd.",
    # End v4.1.3 changes
    
    # Begin v4.1.4 changes
    "tasks:starting_timer" => "Start timer",
    "tasks:stopping_timer" => "Stop timer",
    "global:all_comments" => "Alle Reacties",
    "dashboard:view_all_comments" => "Bekijk Alle Reacties",
    "dashboard:latest_comments" => "Laatste Reacties",
    "dashboard:written_by" => "Geschreven door :1 op :2",
    "dashboard:client_activity" => "Klant Activiteit",
    "dashboard:view_all_client_activity" => "Bekijk Alle Klant Activiteit",
    "dashboard:team_activity" => "Team Activiteit",
    "dashboard:view_all_team_activity" => "Bekijk Alle Team Activiteiten",
    "dashboard:my_tasks" => "Mijn Taken",
    "dashboard:view_all_my_tasks" => "Bekijk Al Mijn Taken",
    "dashboard:what_the_team_is_working_on" => "Wat het team aan werkt.",
    # End v4.1.4 changes
    
    # Begin v4.1.6 changes
    "global:save_milestone" => "Mijlpaal opslaan",
    "global:save_task" => "Taak opslaan",
    "global:private_comment" => "Deze reactie is privé. De klant zal deze niet te zien krijgen.",
    "global:clients_cant_see_private" => "Klanten kunnen geen privé reacties zien.",
    "global:is_private" => "Prive?",
    # End v4.1.6 changes
    
    # Begin v4.1.7 changes
    "tickets:disable_client" => "-- Support Tickets Uitschakelen --",
    # End v4.1.7 changes
    
    # Begin v4.1.8 changes
    "global:css" => "Aangepaste CSS",
    "global:js" => "Aangepaste JavaScript",
    "global:js_explanation" => "Je can gebruiken van jQuery. De code word toegevoegd voor &lt;/body&gt;.",
    "settings:frontend_js" => "Frontend Aangepaste JavaScript",
    "settings:backend_js" => "Backend Aangepaste JavaScript",
    # End v4.1.8 changes
    
    # Begin v4.1.9 changes
    "proposals:estimate_number_and_amount" => "Offerte #:1 (:2)",
    # End v4.1.9 changes
    
    # Begin v4.1.10 changes
    "clients:delete" => "Verwijder klant",
    # End v4.1.10 changes
    
    # Begin v4.1.11 changes
    "global:nolongerexists" => "[BESTAAT NIET MEER]",
    "global:billed_amount" => "Gefactureerd Bedrag",
    "global:unbilled_amount" => "Nog niet gefactureerd bedrag",
    "global:is_billed" => "Gefactureerd?",
    # End v4.1.11 changes

    # Begin v4.1.14 changes
    "settings:year_start" => "Startdatum van het fiscale jaar",
    "dashboard:since_explanation" => "Sinds :1",
    # End v4.1.14 changes
 	
	# Begin v4.1.15 changes
    "export:invoices_csv" => "Facturen (CSV)",
    # End v4.1.15 changes
    
    # Begin v4.1.17 changes
    "projects:createdtemplate" => "Project template aangemaakt. U kunt nu nieuwe projecten aanmaken op basis van deze template.",
    "projects:delete_template" => "Verwijder Template",
    "projects:deleted_template" => "Gelukt! Template verwijderd.",
    # End v4.1.17 changes
    
    # Begin v4.1.19 changes
    "export:expenses_csv" => "Uitgaven (CSV)",
    "export:clients_csv" => "Klanten (CSV)",
    "projects:expense_date" => "Uitgave datum",
    # End v4.1.19 changes
    
    # Begin v4.1.20 changes
    "clients:can_create_support_tickets" => "Klanten toestaan om support tickets aan te maken?",
    "tickets:submit_new" => "Maak nieuwe ticket",
    "global:cancel" => "Annuleer",
    "global:timers" => "Timers",
    "global:more" => "Meer",
    # End v4.1.20 changes
    
    # Begin v4.1.23 changes
    "global:search" => "Zoeken",
    "authorize:api_login_id" => "API Login ID",
    "authorize:api_login_id_description" => "U kunt deze vinden in Authorize.net, onder Account > API Login ID en Transaction Key.",
    "authorize:md5_hash" => "MD5-Hash",
    "authorize:md5_hash_description" => "Standaard is dit uw API Login ID. U kunt deze wijzigen in Authorize.net, onder Account > MD5-Hash. Als u 'Hash Value Set: No' ziet staan laat u dit leeg.",
    "transactions:paymentfailed" => "Betaling mislukt",
    "transactions:extrapaymentfailed" => "Er is een onbekende fout opgetreden bij het verwerken van uw betaling. Neem contact op met :1 van :2 voor verdere support.",
    # End v4.1.23 changes
    
    # Begin v4.1.24 changes
    "projects:tracked" => "Tracked",
    "invoices:partially_paid" => "Gedeeltelijk",
    # End v4.1.24 changes
    
    # Begin v4.1.27 changes
    "global:projects_ommitted" => ":1 projecten niet getoond",
    "global:tasks_ommitted" => ":1 taken niet getoond",
    # End v4.1.27 changes
    
    # Begin v4.1.28 changes
    "login:username_email" => "Gebruikersnaam / Email",
    # End v4.1.28 changes

    # Begin v4.1.31 changes
    "settings:when_new_updates_are_available" => "Wanneer er nieuwe updates beschikbaar zijn",
    "settings:dont_install_just_notify_me" => "Installeer niet, maar laat het me alleen weten",
    "settings:install_automatically" => "Installeer automatisch",
    "settings:loading_update_details" => "Laden update details... Dit kan een minuutje duren. Je kan op ieder moment de pagina herladen.",
    "settings:updating_please_wait" => "Bijwerken, even wachten aub. Deze pagina zal automatisch herladen als de update is voltooid.",
    "settings:will_have_to_overwrite_single_file" => "Pancake moet 1 bestand overschrijven welke handmatig is aangepast!",
    "settings:will_have_to_overwrite_multiple_files" => "Pancake moet :1 bestanden overschrijven welke handmatig zijn aangepast!",
    "settings:checking_for_updates" => "Controleren op updates, even wachten aub. Deze pagina zal automatisch herladen als de update is voltooid.",    
	"settings:updating_please_wait" => "Bijwerken... even wachten aub. Deze pagina zal automatisch herladen als de update is voltooid.",    
	"settings:description" => "Bewaar de bijgewerkte instellingen voordat je de pagina verlaat of wisselt van tab.",
    "settings:business_identities" => "Bedrijfsidentiteiten",
    "settings:business_name" => "Bedrijfsnaam",
    "settings:new_business" => "Nieuw bedrijf",
    "settings:business_identity" => "Bedrijfsidentiteit",
    "settings:business_identity_explanation" => "De klant zal de bovenstaande bedrijfsidentiteit zien op al zijn emails, pdfs en pagina's.",
    # End v4.1.31 changes
    
    # Begin v4.1.33 changes
    "settings:have_been_updated" => 'De instellingen zijn bijgewerkt.',
    "tasks:all" => "Alle taken",
    "projects:progress" => "Voortgang",
    "expenses:name" => "Uitgave naam",
    "tasks:add_hours_to" => "Toevoegen uren aan :1",
    "global:today" => "Vandaag",
    "global:yesterday" => "Gister",
    "global:other" => "Anders",
    "global:now" => "Nu",
    "timesheet:view_for_clients" => "Bekijk rooster (voor klanten)",
    "global:not_billed_yet" => "Nog niet gefactureerd.",
    "tasks:total_logged_time" => "Totaal geschreven tijd",
    "global:biweekly" => "Tweewekelijks",
    # End v4.1.33 changes
    
    # Begin v4.2 changes
    'settings:default_task_due_date' => 'Standaard einddatum taak',
    'settings:default_task_due_date_explain' => "dagen nadat de taak is aangemaakt. Als je geen standaard einddatum wilt laat je dit veld leeg.",
    # End v4.2 changes
    
    # Note: 4.2.x brought changes to the language file that weren't appended to the end of the file.
    # If you're updating your translation, make sure to check out a diff of the language file, instead of relying on just checking the bottom of the file.
    
    # Begin v4.2.4 changes
    "expenses:sort_or_filter" => "Sorteer/Filter Uitgaven",
    "expenses:show" => "Toon uitgaven",
    "global:sort_by" => "Sorteer op",
    "global:sort_order" => "Sorteervolgorde",
    "global:asc" => "Oplopend (A-Z)",
    "global:desc" => "Aflopend (Z-A)",
    # End v4.2.4 changes
    
    # Begin v4.3.0 changes
    "settings:tax_compound" => "Samengesteld?",
    "settings:no_tax" => "Geen BTW",
    "settings:default_taxes" => "Standaard BTW",
    "global:and" => "en", 
    "global:tax" => "BTW",
    # End v4.3.0 changes
    
    # Begin v4.3.6 changes
    "global:youarenotallowed" => "U heeft geen toegang tot deze pagina.",
    # End v4.3.6 changes
    
    # Begin v4.3.7 changes
    'settings:notify_email' => 'Support Email',
    'settings:billing_email' => 'Facturatie Email',
    'settings:brand_name' => 'Merknaam',
    'settings:admin_name' => 'Admin naam',
    'settings:brand_name_explanation' => 'Dit is de naam welke u wilt gebruiken in de communicatie naar uw klanten. Deze zal overal worden getoond behalve op uw facturen.',
    'settings:business_name_explanation' => 'Dit is uw bedrijfsnaam. Deze zal worden getoond op uw facturen.',
    'settings:admin_name_explanation' => 'Standaard zal dit onder uw emails naar klanten worden getoond.',
    'settings:billing_email_explanation' => 'Dit is het "From" adres gebruikt voor Facturen, Offertes en Voorstellen emails.',
    'settings:notify_email_explanation' => 'Dit is het "From" adres gebruikt voor reactie notificaties en support tickets',
    'settings:show_name_along_with_logo' => 'Merknaam tonen naast uw logo?',
    'dashboard:your_projects' => 'Uw projecten',
    'dashboard:today' => 'Vandaag',
    'dashboard:team_activity' => 'Updates',
    'dashboard:snapshot' => 'Snapshot',
    'invoices:frequency' => 'Frequentie',
    'invoices:auto_send' => 'Automatisch versturen?',
    'invoices:send' => 'Verzenden',
    'invoices:days_before_invoice_is_due' => 'dagen voor de uiterste betaaldatum',
    'invoices:cannot_change_recurrences' => 'U kunt de herhalingsinstellingen van een factuur niet wijzigen wanneer deze een herhaling is van een andere factuur.',
    # End v4.3.7 changes
    
 # Begin v4.3.8 changes
    'email_templates:client_area_details' => 'Klantgedeelte gegevens',
    'settings:always_https' => 'Forceer HTTPS?',
    'settings:always_https_explanation' => 'Dit zorgt ervoor dat Pancake altijd wordt geladen via HTTPS. Gebruik dit alleen als u een SSL certificaat heeft geinstalleerd.',
    'settings:remittance_slip' => 'Overschrijvingscoupon',
    'invoices:mail_to' => 'Mail naar',
    'clients:send_client_area_email' => 'Verstuur klantgedeelte gegevens',
    'clients:you_cannot_send' => 'Je kan niets aan deze klant sturen omdat bij deze klant nog geen email adres is opgenomen.',
    # End v4.3.8 changes

    # Begin v4.4.0 changes
    'invoices:discount' => 'Korting',
    'invoices:discount_explain' => 'Voeg % toe voor percentages.',
    'invoices:addedconf' => 'U heeft factuur # <strong>:1</strong> toegevoegd, totaal <strong>:2</strong> (:3 incl BTW) voor :4:5.',
    'estimates:addedconf' => 'U heeft offerte # <strong>:1</strong> toegevoegd, totaal <strong>:2</strong> (:3 incl BTW) voor :4:5.',
    'credit_notes:edit_credit_note' => 'Bewerk creditnota #:1',
    'credit_notes:create_credit_note' => 'Maak creditnota',
    'global:credit_notes' => 'Creditnota\'s',
    'global:credit_note' => 'Creditnota',
    'credit_notes:alltitle' => 'Alle creditnota\'s',
    'credit_notes:nocredit_notesforthefilteredclient' => 'U heeft geen creditnota\'s voor :1.',
    'credit_notes:no_credit_notes' => 'U heeft geen creditnota\'s.',
    'credit_notes:create' => 'Maak creditnota',
    'credit_notes:no_credit_notes_body' => 'U zou er een moeten maken. Wilt u dit nu doen?',
    'credit_notes:edit' => 'Bewerk creditnota',
    'credit_notes:credit_note_number' => 'Creditnota #:1',
    'credit_notes:credit_note_date' => 'Creditnota datum',
    'credit_notes:delete_title' => 'Verwijder deze creditnota?',
    'credit_notes:delete_message' => 'Weet u zeker dat u deze creditnota wilt verwijderen?',
    'credit_notes:addedconf' => 'U heeft creditnota # <strong>:1</strong> toegevoegd, totaal <strong>:2</strong> (:3 incl BTW) voor :4:5.',
    'credit_notes:send_now_title' => 'Verstuur creditnota nu?',
    'credit_notes:send_now_body' => "Vul onderstaand formulier in en we versturen de creditnota voor u.",
    'email_templates:new_credit_note' => 'Nieuwe creditnota',
    'credit_notes:send_now' => 'Verstuur creditnota',
    'credit_notes:preview' => 'Voorvertoning creditnota',
    'credit_notes:duplicated' => "Creditnota #:1 gedupliceerd. Het nieuwe creditnota nummer is #:2.",
    'credit_notes:client_viewed' => ":1 bekeek <a href=':2'>creditnota #:3</a> on :4",
    'invoices:make_bulk_payment' => 'Doe een batchbetaling',
    'global:success' => 'Gelukt!',
    'clients:view' => 'Bekijk klant',
    'invoices:store_bulk_payment' => 'Opslaan batchbetaling',
    'invoices:x_invoices' => ':1 facturen',
    'invoices:amount_to_pay' => 'Bedrag om als betaald te markeren',
    'invoices:bulk_payment_added' => "De batchbetaling is toegevoegd.",
    'clients:credit_balance_currently' => "Creditbalans (momenteel :1)",
    'clients:has_no_unpaid_invoices' => ":1 heeft geen onbetaalde facturen.",
    'invoices:send_payment_notification' => "Verstuur een betalingsnotificatie email naar de klant?",
    'invoices:send_bulk_payment_notification' => "Verstuur betalingsnotificatie emails naar de klant?",
    'invoices:specify_bulk_payment_details' => "Specificeer de details van de betaling en geef aan op welke facturen de betaling van toepassing is.",
    'global:credit_balance' => "Creditbalans",
    # End v4.4.0 changes

    # Begin v4.4.1 changes
    'credit_notes:view' => 'Bekijk creditnota',
    # End v4.4.1 changes

    # Begin v4.4.3 changes
    'tickets:ticket_number' => "Ticket #:1",
    'settings:ticket_status_for_sending_invoice' => "Ticket status voor facturatie",
    'settings:ticket_status_for_sending_invoice_description' => "Wanneer een betaalde ticket wordt bijgewerkt naar deze status wordt er een factuur opgemaakt en verzonden naar de klant.",
    'settings:never_send_ticket_invoices_automatically' => "-- Verstuur ticketfacturen nooit automatisch --",
    # End v4.4.3 changes

    # Begin v4.4.6 changes
    'expenses:added' => "De uitgave is succesvol toegevoegd.",
    # End v4.4.6 changes

    # Begin v4.4.9 changes
    'global:error_submitting_ajax' => "Er is een onbekende fout opgetreden bij het versturen van dit formulier. Probeer het later opnieuw. Als de fout blijft bestaan open dan een support ticket op pancakeapp.com.",
    'store:error1004' => "Er is een onbekende fout opgetreden bij het aankopen van dit product. Probeer het later opnieuw. Als de fout blijft bestaan open dan een support ticket op pancakeapp.com.",
    # End v4.4.9 changes

    # Begin v4.5.0 changes
    'invoices:pancake_will_automatically_change_is_viewable' => "Dit zal automatisch veranderen naar 'Ja' wanneer de factuur wordt gemaild naar de klant.",
    "global:incorrect_login" => "De ingevoerde gebruikersnaam/wachtwoord combinatie is onjuist.",
    # End v4.5.0 changes

    # Begin v4.5.3 changes
    'contact:title' => 'Contact Historie',
    # End v4.5.3 changes

    # Begin v4.5.5 changes
    'settings:hide_tax_column' => "Verberg BTW kolom?",
    'settings:hide_tax_column_explanation' => "Dit zal de BTW kolom verbergen bij facturen wanneer deze geen btw informatie bevat.",
    'tickets:not_yet_generated' => "Factuur is nog niet aangemaakt",
    'tickets:invoice_will_be_generated' => "Een :1 factuur voor deze ticket zal worden aangemaakt wanneer de status van de ticket veranderd naar \":2\".",
    'global:accepted' => "Geaccepteerd",
    'global:rejected' => "Afgewezen",
    'global:unanswered' => "Onbeantwoord",
    'estimates:accepted' => "Geaccepteerde Voorstellen",
    'estimates:rejected' => "Afgewezen Voorstellen",
    'estimates:unanswered' => "Onbeantwoorde Voorstellen",
    'emailtemplates:content' => "Email Content",
    'global:every_six_months' => 'Halfjaarlijks (twee keer per jaar)',
    'global:biyearly' => 'Tweejaarlijks (elke 2 jaar)',
    'global:triennially' => "Driejaarlijks",
    # End v4.5.5 changes

    # Begin v4.5.6 changes
    'settings:automaticallybccclientemail' => 'Stuur automatisch een kopie van alle verstuurde emails naar klanten ook naar het het hoofd-e-mailadres van uw bedrijf.',
    # End v4.5.6 changes

    # Begin v4.5.7 changes
    'invoices:send_to_client' => "Email Factuur Naar Klant",
    'estimates:send_to_client' => "Email Voorstel Naar Klant",
    'global:beforeunload' => "U staat op het punt om deze pagina te verlaten. Als u dit doet, gaat alle ingevulde data verloren. Weet u zeker dat u deze pagina wilt verlaten?",
    # End v4.5.7 changes

    # Begin v4.5.8 changes
    'global:appendtoproject' => 'Omzetten in taken voor ":1"',
    'estimates:appended' => 'Voorstel #:1 omgezet in taken voor ":2".',
    # End v4.5.8 changes

    # Begin v4.6.0 changes
    'items:percentage_discount' => "Korting (%)",
    'items:fixed_discount' => "Korting (:1)",
    'invoices:discount_percentage' => "Korting (:1%)",
    'invoices:sub_total_after_discounts' => "Subtotaal (na kortingen)",
    'settings:tax_reg' => 'BTW Nummers / IDs',
    'clients:tax_registration_number' => ':1 Nummer / ID',
    'clients:add_custom_field' => "Voeg nog een aangepast veld toe",
    'clients:tax_numbers' => 'Klant BTW Nummers / IDs',
    'clients:custom_fields' => "Aangepaste Velden",
    'expenses:category_added' => "Gelukt! De uitgave categorie is aangemaakt.",
    'clients:update_balance' => "Credit Balans Bijwerken",
    'clients:balance_updated' => "Gelukt! De credit balans van de klant is bijgewerkt.",
    'clients:what_do_you_want_to_do' => "Wat wil je doen",
    'clients:save_balance_alteration' => "Sla balans bewerking op",
    'clients:no_amount_specified' => "U heeft geen hoeveelheid gespecificeerd.",
    'expenses:attach_receipt' => "Voeg Bon Toe (Maximum Grootte: :1)",
    'expenses:no_project_business_expense' => "Bedrijfsuitgave (Geen Project)",
    'expenses:expense_date' => "Datum",
    'expenses:receipt' => "Bon",
    'expenses:no_receipt' => "Geen Bon",
    # End v4.6.0 changes

    # Begin v4.6.3 changes
    'expenses:edited' => "Gelukt! De uitgave is bewerkt.",
    'expenses:expense_receipts' => "Uitgave Bonnen",
    # End v4.6.3 changes

    # Begin v4.6.7 changes
    'reports:payments' => "Betalingen",
    'reports:verb_created' => "Aangemaakt",
    'reports:verb_paid' => "Betaald",
    'reports:verb_from_to' => ":1 van :2 tot en met :3",
    # Deleted "reports:selection_explanation_accrual"
    # Deleted "reports:selection_explanation_cash"
    # Deleted "settings:accounting_type"
    # Deleted "settings:accrual"
    # Deleted "settings:cash"
    # End v4.6.7 changes
    
    # Begin v4.6.8 changes
    'reports:amount_paid' => "Betaald Bedrag",
    # End v4.6.8 changes
    
    # Begin v4.6.9 changes
    'dashboard:upcoming_invoices' => 'Opkomende Facturen',
    'dashboard:there_are_no_upcoming_invoices' => "Er zijn geen opkomende facturen om te tonen.",
    "dashboard:view_all_upcoming_invoices" => "Bekijk Alle Opkomende Facturen",
    # End v4.6.9 changes
    
    # Begin v4.7.0 changes
    "error:cannot_send_error_details" => "U kan geen foutmelding details sturen naar Pancake Support omdat u niet bent ingelogd.",
    "error:unknown_error_reporting" => "Er heeft een onbekende foutmelding plaats gevonden. Rapporteer dit alstublieft handmatig.",
    "error:sending_details" => "Bezig met het versturen van de details...",
    "error:response_will_be_sent_to_email" => "U wordt op de hoogte gehouden van reacties op {email}.",
    "settings:errors_and_diagnostics" => "Foutmeldingen & Diagnostiek",
    "error:already_reported" => "Deze foutmelding is al gemeld bij Pancake Support.",
    "error:title" => "Onbekende Foutmelding",
    "error:subtitle" => "Een onbekende foutmelding heeft plaats gevonden.",
    "error:not_logged_in_intro" => "Deze foutmeldingen worden automatisch gelogd.",
    "error:not_logged_in_extra" => "Als het probleem blijft neem dan contact op :1.",
    "error:logged_in_intro" => "Deze foutmeldingen worden opgeslagen in de administratie, onder 'Instellingen > Foutmeldingen & Diagnostiek'.",
    "error:logged_in_extra" => "Klik hier om een gratis support ticket te sturen met de details van de foutmelding naar Pancake Support.",
    "error:no_logged_errors" => "U heeft geen gelogde foutmeldingen.",
    "errors:subject" => "Foutmelding titel",
    "errors:report" => "Rapporteer Foutmelding",
    "errors:number_of_occurrences" => "# keer voorgekomen",
    "global:errors" => "Foutmeldingen",
    "settings:error_reported" => "Foutmelding Gerapporteerd",
    "settings:report_error" => "Rapporteer Foutmelding",
    "settings:delete_error" => "Verwijder Foutmelding",
    "global:once" => "Eenmaal",
    "global:twice" => "Tweemaal",
    "global:x_times" => ":1 keer",
    "global:occurred_times" => "Voorgekomen :1",
    "settings:view_error_details" => "Bekijk Foutmelding Details",
    "error:deleting" => "Verwijderen...",
    "error:reporting" => "Rapporteren...",
    "clients:noclientbodyfiltered" => "Geen van uw klanten beginnen in de naam met ':1'.", 
    "tickets:archive" => "Archief",
    "tickets:unarchive" => "Herstel",
    'projects:unarchive_proj' => 'Herstel Project',
    'invoices:lastreoccurrence' => 'Laatste Herhaling: :1',
    'invoices:thisisareoccurrence' => 'Deze factuur is een herhaling van Factuur :1.',
    
    ### This was moved here from the Projects language files, which were in a separate folder.
    'projects:role_view' => 'Bekijk',
    'projects:role_create' => 'Aanmaken',
    'projects:role_edit' => 'Bewerken',
    'projects:role_delete' => 'Verwijderen',
    'projects:role_add_task' => 'Taak aanmaken',
    'projects:role_edit_task' => 'Taak bewerken',
    'projects:role_delete_task' => 'Taak verwijderen',
    'projects:role_add_milestone' => 'Mijlpaal aanmaken',
    'projects:role_edit_milestone' => 'Mijlpaal bewerken',
    'projects:role_delete_milestone' => 'Mijlpaal verwijderen',
    'projects:role_track_time' => 'Tijd bijhouden',
    "projects.title" => "Projecten",
    "projects.create.title" => "Project aanmaken",
    "projects.edit.title" => "Project bijwerken",
    "projects.label.name" => "Naam:",
    "projects.label.client" => "Klant:",
    "projects.label.due_date" => "Vervaldag:",
    "projects.label.rate" => "Uur Tarief:",
    "projects.label.description" => "Beschrijving:",
    "projects.label.is_viewable" => "Bekijkbaar in klantgedeelte?",
    "projects.button.create" => "Project aanmaken &rarr;",
    "projects.create.succeeded" => "Project is aangemaakt!",
    "projects.button.edit" => "Project bijwerken &rarr;",
    "projects.button.delete" => "Het project verwijderen &rarr;",
    "projects.update.succeeded" => "Het project is bijgewerkt!",
    "projects.delete.title" => "Weet u zeker dat u het project wilt verwijderen?",
    "times.title" => "Tijden",
    "times.create.title" => "Tijd aanmaken",
    "times.label.start_time" => "Start tijd:",
    "times.label.end_time" => "Eind tijd:",
    "times.label.date" => "Datum:",
    "times.label.task_id" => "Taak:",
    "times.label.note" => "Notitie:",
    "times.label.notes" => "Notities:",
    "times.button.create" => "Tijd aanmaken &rarr;",
    "times.create.succeeded" => "De tijd is succesvol ingevuld!",
    "times.edit.succeeded" => "De tijd is succesvol bijgewerkt!",
    # End v4.7.0 changes
    
    # Begin v4.7.1 changes
    "global:estimates_unsent" => "Onverstuurd",
    "invoices:estimates_unsent" => "Onverstuurde Offertes",
    # End v4.7.1 changes
    
    # Begin v4.7.3 changes
    "error:not_enough_disk_space" => "Niet genoeg schijfruimte",
    "error:cant_send_email" => "Kan email niet versturen",
    "error:not_enough_disk_space_explanation" => "Uw database server (:1) heeft niet genoeg schijfruimte.",
    "error:you_cannot_report_this_error" => "U kan dit probleem niet rapporteren bij Pancake Support, want het is een probleem met uw server. Neem alstublieft contact op met uw server administrateur over dit probleem. Wanneer u overlegd met hen, dan kunt u het volgende vertellen:",
    "error:not_enough_disk_space_solutions" => "Als u root toegang heeft tot de database server, probeer dan /tmp op te schonen. Als dat niet werkt, controleer dan uw database server's schijfruimte gebruik, en probeer wat schijfruimte vrij te maken.",
    "error:cant_send_email_explanation" => "U heeft gespecificeerd dat u Sendmail (:1) wilt gebruiken om emails te versturen, maar dit was helaas niet mogelijk. Of het pad naar Sendmail is incorrect, of er is iets anders fout gegaan.",
    "error:email_settings_not_valid" => "Uw email instellingen zijn niet geldig.",
    "error:cant_send_email_solutions" => "Als u root toegang heeft tot de server, controleer dan dat u sendmail heeft geïnstalleerd en probeer het te vinden met <code>which sendmail</code>.",
    # End v4.7.3 changes

    # Begin v4.7.5 changes
    "error:server_error" => "Server Fout",
    "error:xcache_extension_broken" => "Je server heeft een probleem met de XCache extensie.",
    "error:xcache_extension_broken_explanation" => "Er ging iets fout terwijl je server probeerde de XCache extensie te laden. Dit heeft totaal geen oorwaak omwille van Pancake, maar het weerhoudt Pancake te draaien.",
    "error:permissions_not_valid" => "Er is een probleem met de bestandspermissies op je server.",
    "error:no_tmp_dir_permissions_explanation" => "Je server is ingesteld in zulk een manier dat Pancake geen toelating heeft tijdelijke bestanden aan te maken in <code>:1</code>.",
    "error:no_tmp_dir_permissions_solutions" => "Indien je geen root toegang heb tot de server, kan je de <code>open_basedir</code> instelling in je php.ini aanpassen zodat <code>:1</code> inbegrepen is in de lijst van toegelaten mappen."
    # End v4.7.5 changes

    # Begin v4.7.7 changes
    "error:cant_php_mail_explanation" => "U heeft gespecificeerd dat u PHP mail() wilt gebruiken om email te sturen, maar deze methode van email versturen werkt niet correct op uw server. Deze methode van email versturen vereist geen configuratie, maar dit wordt niet aangeraden omdat email servers niet kunnen verifiëren wie eigenlijk de email stuurt. Sommige van hen zullen zelfs automatisch emails markeren als spam. Verander uw email server instellingen in admin, onder 'Installingen > Emails', om één van de SMTP opties te gebruiken, of, als je dat niet kan, gebruik de Sendmail optie als laatste uitweg. Als geen van deze opties werken, zou u met de server administrateur contact op moeten nemen.",
    "invoices:see_payment_schedule_below" => "Bekijk betalingsschema hieronder",
    "invoices:see_payment_schedule" => "Bekijk Betalingsschema",
    
    'partial:partialpayments' => 'Betalingsschema',
    'partial:amountlefttobeadded' => "Bedrag over om toe te voegen aan het betalingsschema",
    'partial:amounttoobig' => "Bedrag dat moet worden verwijderd uit het betalingsschema",
    'partial:noamountneeded' => "Uw betalingsschema is compleet.",
    'partial:wrongtotal' => 'De som van alle onderdelen van het betalingsschema komen niet overeen met het totaal bedrag dat gefactureerd wordt.',
    'partial:problemsaving' => 'Er is een fout opgetreden tijdens het opslaan van het betalingsschema. Probeer het nogmaals.',,
    'partial:wrongtotalbutsaved' => 'De som van alle onderdelen van je betalingsschema komen niet overeen met het totaal bedrag dat gefactureerd wordt.<br />De aanpassingen voor je factuur zijn opgeslagen, maar je moet de fout in het betalingsschema wel herstellen.',
    'partial:problemsavingbutsaved' => 'Er is een fout opgetreden tijdens het opslaan van het betalingsschema. Probeer het nogmaals.<br />De aanpassingen voor je factuur zijn opgeslagen, alleen het betalingsschema niet.',
    'partial:addanother' => 'Voeg een ander deel aan dit betalingsschema toe',
    'partial:disabledforrecurring' => 'Periodieke facturen zijn beperkt tot eendelige betalingsschema\'s',
    'partial:partpaidthanks' => "Dit deel van het betalingsschema van de factuur is betaald. Hartelijk dank.",
    
    "error:page_not_found" => "Pagina Niet Gevonden",
    "error:page_does_not_exist" => "De pagina die u probeert te bereiken bestaat niet.",
    "error:page_does_not_exist_explanation" => "U probeerde :1 te benaderen, maar dit bestaat niet. Als dit onverwachts is, kunt u een error rapporteren bij Pancake Support. U kunt dit vinden in 'Instellingen > Foutmeldingen & Diagnostiek'.",
    # End v4.7.7 changes
); 
/** End of file: pancake_lang.php **/