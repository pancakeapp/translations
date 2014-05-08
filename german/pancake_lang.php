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
 *
 * @translation: Philip Kuban, http://philipkuban.de
 */

// ------------------------------------------------------------------------

$lang = array(
    /** Global Words **/
    'global:overview'               => '&uuml;bersicht',
    'global:error'                  => 'Fehler',
    'global:pancakeby7am'           => 'Pancake :1',
    'global:allrelatedmediacopyright'   => 'Pancake und alle zugeh&ouml;rigen Medien sind urheberrechtlich gesch&uuml;tzt. :1 :2',
    'global:insecure_action'        => 'Eine unsichere Aktion wurde angestrebt, aber verhindert',
    'global:disabled_in_demo'       => 'Einige Funktionien dieser Seite sind f&uuml;r die Demo deaktiviert',
    'global:estimates'              => 'Voranschl&auml;ge',
    'global:estimate'               => 'Voranschlag',
    'global:incomplete_tasks'       => 'Unvollst&auml;ndige Aufgaben',
    'global:completed_tasks'        => 'Vollst&auml;ndige Aufgaben',
    'global:projects'               => 'Projekte',
    'global:tickets'                => 'Tickets',
    'global:project'                => 'Projekt',
    'global:upload_failed'          => 'Beim Upload der Datei is ein Problem aufgetreten. Bitte versuche es erneut. Wenn das Problem weiterhin besteht, wende dich bitte an support@pancakeapp.com.',
    'global:upload_not_allowed'     => 'Die Datei, die du versucht hast hochzuladen hat einen ung&uuml;ltigen Dateityp. Wenn du eine Datei dieses Typs hochladen musst, dann komprimiere sie bitte in ein .zip oder &auml;hnliches Format.',
    'global:copied'                 => 'Kopiert!',
    'global:sentbutunpaid'          => 'Ausstehend (versendet aber unbezahlt)',
    'global:task'                   => 'Aufgabe',
    'global:clients'                => 'Kunden',
    'global:access_denied'          => "Zugriff verwehrt",
    'global:users'                  => 'Benutzer',
    'global:send_to_client'         => 'An den Kunden senden',
    'global:couldnotsendemail'      => 'Konnte die E-Mail nicht versenden. Bitte kontrolliere die Einstellungen.',
    'global:emailsent'              => 'Die E-Mail wurde versendet!',
    'global:yes'                    => 'Ja',
    'global:no'                     => 'Nein',
    'global:notyetsent'             => 'Noch nicht an den Kunden gesendet',
    'global:dontshowagain'          => "Das nicht mehr anzeigen",
    'global:enable'                 => 'Erm&ouml;glichen',
    'global:is_enabled'             => 'M&ouml;glich?',
    'global:is_completed'           => 'Fertig?',
    'global:Y'                      => 'Y',
    'global:N'                      => 'N',
    'global:notes'                  => 'Notizen',
    'global:description'            => 'Beschreibung',
    'global:backtoadmin'            => 'Zur&uuml;ck zum Admin',
    'global:type'                   => 'Typ',
    'global:name'                   =>  'Name',
    'global:first_name'             =>  'Vorname',
    'global:last_name'              =>  'Nachname',
    'global:company'                =>  'Firma',
    'global:for'                    =>  'f&uuml;r',
    'global:from'                   =>  'von',
    'global:phone'                  =>  'Telefon',
    'global:email'                  =>  'E-Mail',
    'global:contacts'               =>  'Kontakte',
    'global:week'                   => 'W&ouml;chentlich',
    'global:na'                     => 'N/A',
    'global:quarterly'              => 'Quartalsweise',
    'global:every_six_months'       => 'Alle 6 Monate',
    'global:statistics'             => "Statistiken",
    'global:biyearly'               => 'Alle 2 Jahre',
    'global:month'                  => 'Monatlich',
    'global:year'                   => 'J&auml;hrlich',
    'global:fax'                    => 'Fax',
    'global:mobile'                 => 'Mobil',
    'global:address'                => 'Adresse',
    'global:api_key'                => 'API Key',
    'global:website'                => 'Website',
    'global:action'                 => 'Aktion',
    'global:items'                  => 'Posten',
    'global:reusableinvoiceitems'   => 'Wiederverwendbare Rechnungselemente',
    'global:reusableinvoiceitems_description'    => 'Du solltest wiederverwendbare Rechnungsposten verwenden, wenn du den gleichen Posten in mehreren Rechnungen verwenden willst. Um diese zu benutzen beim Erstellen oder bearbeiten einer Rechnung einfach anfangen den Namen des gespeicherten Postens einzugeben und es werden Vervollst&auml;ndigungen angeboten.',
    'global:create_invoice_estimate'    =>    'Erstelle Rechnungen und Voranschl&auml;ge umd bezahlt zu werden.',
    'global:createinvoice'          => 'Rechnung erstellen',
    'global:paid'                   => 'Bezahlt',
    'global:unpaid'                 => 'Unbezahlt',
    'global:overdue'                => '&uuml;berf&auml;llig',
    'global:time_entries'           => 'Zeiteintr&auml;ge',
    'global:invoices'               => 'Rechnungen',
    'global:invoice'                =>    'Rechnung',
    'global:tasks'                  => 'Aufgaben',
//    'global:estimate'               => 'Estimate',
    'global:dashboard'              => 'Dashboard',
    'global:settings'               => 'Einstellungen',
    'global:plugins'                => 'Plugins',
    'global:installed'              => 'Installiert',
    'global:changepassword'         => 'Passwort &auml;ndern',
    'global:logout'                 => 'ausloggen',
    'global:status'                 => 'Status',
    'global:client'                 => 'Kunde',
    'global:user'                   => 'Benutzer',
    'global:title'                  => 'Titel',
    'global:subtitle'               => 'Untertitel',
    'global:to'                     => 'An (mehrere Adressen mit Komma trennen)',
    'global:subject'                => 'Betreff',
    'global:thanks'                 => 'Danke!',
    'global:proposals'              => 'Angebote',
    'global:proposal'               => 'Angebot',
    'global:reports'                => 'Berichte',
    'global:item'                   => 'Posten',
    'global:report'                 => 'Bericht',
    'global:saveandinsert'          => 'Speichern und einf&uuml;gen',
    'global:details'                => 'Details',
    'global:license_key'            => 'Lizenzschl&uuml;ssel',
    'global:version'                => 'Version :1',
    'global:content'                => 'Inhalt',
    'global:add'                    => 'Hinzuf&uuml;gen',
    'global:edit'                   => 'Bearbeiten',
    'global:resend'                 => 'Erneut verschicken',
    'global:sent'                   => 'Gesendet',
    'global:not_sent'               => 'Nicht gesendet',
    'global:view'                   => 'Betrachten',
    'global:delete'                 => 'L&ouml;schen',
    'global:remove'                 => 'Entfernen',
    'global:sort'                   => 'Sortieren',
    'global:deleteitem'             => 'Posten l&ouml;schen',
    'global:dragtoreorder'          => 'Zum Sortieren ziehen',
    'global:start'                  => 'Start',
    'global:stop'                   => 'Stop',
    'global:start_timer'            => 'Timer starten',
    'estimates:create'              => "Kostenvoranschlag erstellen",
    'global:stop_timer'             => 'Timer stoppen',
    'global:created'                => 'Erstellt',
    'global:updated'                => 'Aktualisiert',
    'global:update'                 => 'Aktualisieren',
    'global:update_available'       => ':1 Update verf&uuml;gbar',
    'global:updates_available'      => ':1 Updates verf&uuml;gbar',
    'global:downloadpdf'            => 'PDF herunterladen',
    'global:yesdelete'              => 'Ja, l&ouml;schen!',
    'global:confirm_emphisised'     => 'Es gibt keinen Weg zur&uuml;ck!',
    'global:color'                  => 'Farbe',
    'global:save'                   => 'Speichern',
    'global:unknown'                => 'Unbekannt',
    'global:upload_ini_size'        => 'Die hochgeladene Datei &uuml;berschreitet das durch deine PHP Installation vorgegebene Gr&ouml;ßenlimit.',
    'global:upload_error'           => 'W&auml;hrend des Uploads ist ein Problem aufgetreten. Bitte versuche es erneut.',
    'global:recurring'              => 'Wiederkehrend',
    'global:unsent'                 => 'Nicht gesendet',
    'global:converttoproject'       => 'In Projekt konvertieren',
    'global:converttoinvoice'       => 'In Rechnung konvertieren',
    'global:viewpdf'                => 'PDF betrachten',
    'global:duplicate'              => 'Duplizieren',
    'global:urltosend'              => 'Diese URL versenden:',
    'global:copytoclipboard'        => 'kopieren',
    'global:you_need_pancake_cron_job'  => 'Um wiederkehrende Rechnungen zu verwenden musst du einen Pancake cronjob verwenden.',
    'global:if_you_dont_know_how_to_set_it_up'  => 'Wenn du nicht weißt, wie du diesen einrichtest, <a href="http://pancakeapp.com/documentation/cron">hier klicken</a>.',
    'global:quick_links'            => 'Schnelle Links',
    'global:view_all'               => 'Alle ansehen',
    'global:deleted'                => 'Gel&ouml;scht',
    'global:add_more'               => 'Mehr hinzuf&uuml;gen',
    'global:upload_files'           => 'Dateien hochladen',
    'global:optional_increment'     => '<strong>Optional</strong> - z&auml;hlt selber hoch',

    'login:ahoy'                    => 'Ahoy!',
    'login:readytodothis'           => 'Bist du bereit?',
    'login:sup'                     => 'Sup?',
    'global:actions'                => 'Aktionen',
    'global:select'                 => "--- ausw&auml;hlen ---",

    /** Greetings **/
    'global:greetings'              => array('Ahoy!', 'Hallo,', 'Hej,', 'Sup,', 'Tach,'),
    /** End Greetings **/

    'global:mark_as_unanswered'     => 'Als unbeantwortet markieren',
    'global:mark_as_accepted'       => 'Als angenommen markieren',
    'global:mark_as_rejected'       => 'Als abgelehnt markieren',
    'global:reject_estimate'        => 'Kostenvoranschlag ablehnen',
    'global:accept_estimate'        => 'Kostenvoranschlag annehmen',
    'global:estimate_rejected'      => 'Kostenvoranschlag abgelehnt',
    "global:estimate_accepted"      => "Kostenvoranschlag angenommen",
    'global:reject_proposal'        => 'Angebot ablehnen',
    'global:accept_proposal'        => 'Angebot annehmen',
    'global:proposal_rejected'      => 'Angebot abgelehnt',
    "global:proposal_accepted"      => "Angebot angenommen",
    "global:client_area"            => "Kundenbereich",
    "global:admin"                  => "Admin",
    "global:all_settings"           => "Alle Einstellungen",
    'global:viewable'               => 'Im Kundenbereich sichtbar',
    'global:not_viewable'           => 'Nicht im Kundenbereich sichtbar',
    'global:milestones'             => "Meilensteine",

    /** Dashboard **/
    'dashboard:collected'           =>    'Kassiert',
    'dashboard:outstanding'         =>    'Ausstehend',
    'dashboard:latest_activity'     =>    'Letzte Aktivit&auml;t',
    'dashboard:these_are_your_upcoming_tasks' => "Dies sind deine anstehenden Aufgaben, :1.",
    'dashboard:upcoming_tasks'      =>    'Anstehende Aufgaben',
    /** End Dashboard **/

	/** Timesheets **/
    'global:timesheets'	=>	'Timesheets',
    'timesheets:todays'	=> 'Heute\'s',
    'timesheets:all_users'	=>	'Alle Benutzer',
    'timesheets:rounded_time' => 'Aufgerundet zum n&auml;chsten :1',
    'timesheets:there_are_no_time_entries' => "Keine Eintr&auml;ge f&uuml;r diesen Zeitraum vorhanden.",
/** END Timesheets **/


    /** Users **/

    // ==============================
    // = LOGIN PAGE COMPLETED - Lee =
    // ==============================
    'login:forgotinstructions'      =>    'Bitte gib deine E-Mail-Adresse ein damit wir dir einen E-Mail zum zur&uuml;cksetzen deines Passworts schicken k&ouml;nnen.',
    'login:reset'                   =>    'Zur&uuml;cksetzen &raquo;',
    'login:reset'                   =>    'Passwort zur&uuml;cksetzen',
    'login:username'                =>    'Benutzername',
    'login:password'                =>    'Passwort',
    'login:changepassword'          =>    'Passwort &auml;ndern',
    'login:email'                   =>    'E-Mail-Adress',
    'login:login'                   =>    'Login',
    'login:logout'                  =>    'Logout',
    'login:remember'                =>    'Erinnere dich an mich',
    'login:forgot'                  =>    'Passwort vergessen?',
    'login:cancel'                  =>   '&laquo; Abbrechen',
    /** End Users **/

    /** User Groups **/
    'groups:edit_title'             => 'Gruppe bearbeiten %s',
    'groups:add_title'              => 'Benutzergruppe hinzuf&uuml;gen',

    /** Clients **/
    'clients:title'                 => 'Alle Kunden',
    'clients:filter'                => 'Kunden Filter',
    'clients:add'                   => 'Kunde hinzuf&uuml;gen',
    'clients:removefilter'          => 'Filter entfernen',
    'clients:edit'                  => 'Kunde bearbeiten',
    'clients:noclienttitle'         => 'Du solltest einige Kunden anlegen!',
    'clients:noclientbody'          => 'Um ihnen ein paar Rechnungen zu schicken. Jetzt einen hinzuf&uuml;gen?', /*?*/
    'clients:noclienttitlefilter'   => 'Dein Filter findet keine Kunden',
    'clients:hasnoinvoicetitle'     => 'H&uuml;bsch! Der Kunde ist fertig eingerichtet!',
    'clients:hasnoinvoicebody'      => 'Erstelle eine Rechnung f&uuml;r ihn und fang an zu kassieren! Jetzt eine hinzuf&uuml;gen?',
    'clients:added'                 => 'Der Kunde wurde hinzugef&uuml;gt!',
    'clients:edited'                => 'Der Kunde wurde aktualisiert!',
    'clients:deleted'               => 'Der Kunde wurde gel&ouml;scht!',
    'clients:does_not_exist'        => 'Der Kunde existiert nicht!',
    'clients:health_check'          => 'Health Check', /*?*/
    'clients:all'                   => 'Alle',
    'clients:delete_title'          => 'Diesen Kunden l&ouml;schen?!?!',
    'clients:delete_message'        => 'Bist du sicher, dass du diesen Kunden l&ouml;schen willst?<br>Damit werden auch alle Rechnung, Projekte und Angebote f&uuml;r diesen Kunden gel&ouml;scht.',
    'clients:clientaction'          => '&nbsp;',
    'clients:passphrase'            => 'Passwort',
    'clients:bad_passphrase'        => 'Das Passwort ist falsch.',
    'clients:total_clients'         => 'Gesamte Kunden', /*?*/
    'clients:support'               => 'Support',
    'clients:support_rates'         => 'Supports&auml;tze',
    'clients:edit_support_rates'    => 'S&auml;tze festlegen',
    /** End Clients **/


    /** Contact Log **/
    'contact:title'             => 'Aktueller Kontaktverlauf', /*?*/
    'contact:method'            => 'Kontaktart',
    'contact:contact'           => 'Kontakt',
    'contact:subject'           => 'Betreff',
    'contact:content'           => 'Inhalt',
//    'contact:method'            => 'Contact Method',
    'contact:calling_title'     => 'Kunden arufen ":1"', /*??*/
    // 'contact:view_all'       =>    'Alle ansehen',
    /** End Contact Log **/

    /** Invoices **/
    'invoices:markassent'           => 'Als versendet markieren',
    'invoices:invoicedate'          => 'Rechnungsdatum',
    'invoices:file_name'            => "Dateiname",
    'invoices:date_created'         => "Erstellungsdatum",
    'invoices:size'                 => "Gr&ouml;ße",
    'invoices:files'                => "Dateien",
    'invoices:sentbutunpaid'        => 'Rechnungen an den Kunden verschickt, aber noch unbezahlt', /*?*/
    'invoices:duplicated'           => 'Rechnung #:1 dupliziert. Neue Rechnungsnummer #:2.',
    'invoices:all'                  => 'Alle Rechnungen',
    'invoices:empty'                => 'Noch keine Rechnungen vorhanden.',
    'invoices:overdue'              => '&uuml;berf&auml;llige Rechnungen',
    'invoices:tax_collected'        => "Steuer bezahlt", /*?*/
    'invoices:paid'                 => 'Bezahlte Rechnungen',
    'invoices:recurringinvoices'    => 'Wiederkehrende Rechnungen',
    'invoices:unsentinvoices'       => 'Nicht versendete Rechnungen',
    'invoices:unpaid'               => 'Unbezahlte Rechnungen',
    'invoices:thisinvoicewaspaidon' => 'Diese Rechnung wurde am :1 bezahlt. Dankesch&ouml;n!',
    'invoices:senton'               => 'Versendet am :1',
    'invoices:lastsenton'           => 'Zuletzt versendet am :1 um :2', /*?*/
    'invoices:paidon'               => 'Bezahlt am :1',
    'invoices:paidonsingle'         => 'Bezahlt am',
    'invoices:thisinvoiceisunpaid'  => "Diese Rechnung wurde noch nicht bezahlt.",
    'invoices:noinvoicetitle'       => 'Du hast noch keine Rechnungen!',
    'invoices:noinvoicesforthefilteredclient'   => "Du hast noch keine Rechnungen f&uuml;r :1.",
    'invoices:noinvoicebody'        => 'Du solltest jetzt eine Rechnung erstellen! <br /> Kunden m&ouml;gen Rechnungen!',
    'invoices:send_now_title'       => 'Rechnung jetzt verschicken?',
    'invoices:send_now_body'        => 'F&uuml;lle das Formular unten aus und wir werden die Rechnung f&uuml;r dich zustellen.',
    'invoices:newinvoice'           => 'Rechnung erstellen',
    'invoices:send_now'             => 'Rechnung verschicken',
    'invoices:timequantity'         => 'Zeit/Menge',
    'invoices:ratewithcurrency'     => 'Satz (:1)',
    'invoices:taxable'              => 'besteuert', /*?*/
    'invoices:total'                => 'Gesamtbetrag',
    'invoices:amount'               => 'Betrag',
    'invoices:due'                  => 'F&auml;llig',
    'invoices:subtotal'             => 'Zwischensumme',
    'invoices:totaltax'             => 'Gesamt Steuer', /*?*/
    'invoices:filestodownload'      => 'Dateien zum Download',
    'invoices:added'                => 'Die Rechnung wurde hinzugef&uuml;gt!',
    'invoices:fileswillbeavailableafterpay' => 'Diese Dateien werden zum Download bereitgestellt, sobald die Rechnung vollst&auml;ndig bezahlt wurde.',
    'invoices:no_payment_gateways_enabled'  => 'Es wurden keine Bezahlm&ouml;glichkeiten konfiguriert, was eine Bezahlung m&ouml;glicherweise etwas schwierig macht. Konfigurieren und den <a href=":1">Einstellungen</a>',
    'invoices:invoicenumber'        => 'Rechnung #:1',
    'invoices:number'               => 'Rechnung #',
    'invoices:type'                 => 'Rechnungsart',
    'invoices:is_recurring'         => 'Wiederkehrend?',
    'invoices:is_paid'              => 'Bezahlt?',
    'invoices:is_sent'              => 'Versendet?',
    'invoices:date_entered'         => 'Erstellungsdatum',
    'invoices:delete_title'         => 'Diese Rechnung l&ouml;schen?',
    'items:select_time_entry'       => 'Zeiteintrag',
    'invoices:delete_message'       => 'Bist du sicher, dass du diese Rechnung l&ouml;schen m&ouml;chtest?',
    'invoices:create'               => 'Rechnung erstellen',
    'invoices:edit'                 => 'Rechnung bearbeiten',
    'invoices:amountrequired'       => 'Das Feld "Betrag" wird ben&ouml;tigt',
    'invoices:currencydoesnotexist' => 'Diese W&auml;hrung existiert nicht.',
    'invoices:unique_id'            => 'Unique ID', /*!*/
    'invoices:willreoccurin'        => 'Diese Rechnung wird am :1 wiederholt.', /*?*/
    'invoices:willbesentautomatically'  => 'Der Kunde wird am :1 per E-Mail &uuml;ber diese Rechnung informiert werden.',
    'invoices:thisisareoccurrence'  => 'Diese Rechnung ist eine Wiederholung der Rechnung :1.',
    'invoices:clientlastnotifiedon' => 'Der Kunde wurde am :1 per E-Mail &uuml;ber diese Rechnung informiert.',
    'invoices:simple'               => 'Einfach',
    'invoices:simple_help'          => 'Eine Einfache Rechnung hat keine Rechnungsposten. Nur einen Gesamtbetrag.',
    'invoices:detailed'             => 'Detailiert',
    'invoices:detailed_help'        => 'Detailierte Rechnungen erlauben es dir mehrere Rechnungsposten aufzuf&uuml;hren.',
    'invoices:estimate_help'        => 'Kostenvoranschl&auml;ge sind detailierte Rechnungen, die nicht berechnet werden.',
    'invoices:unpaid_totalamount'   => 'Unbezahlt / Gesamtbetrag', /*? Unpaid / Total amount*/
    'invoices:saveinvoice'          => 'Rechnung speichern',
    'invoices:deleted'              => 'Die Rechnung wurde gel&ouml;scht!',
    'invoices:view'                 => 'Rechnung ansehen',
    'invoices:is_viewable'          => 'Im Kundenbereich anzeigen?',
    'invoices:no_invoices'          => 'Es gibt keine Rechnungen.',
    'invoices:addedsuccess'         => 'Du hast eine Rechnung hinzugef&uuml;gt f&uuml;r', /*?! ... f&uuml;r XXX hinzugef&uuml;gt. @ TODO: where is that? Placeholder possible? */
    'invoices:invoice'              => 'berechnen', /*?*/
    'invoices:addedconf'            => 'Du hast die Rechnung # <strong>:1</strong> mit einem Gesamtbetrag von <strong>:2</strong> f&uuml;r :3:4 hinzugef&uuml;gt.',
    'invoices:preview'              => 'Rechnungsvorschau',
    'invoices:editinvoice'          => 'Rechnung # :1 bearbeiten',
    'invoices:messageupdated'       => 'Die Rechnung wurde aktualisiert!',
    'invoices:resend'               => 'Rechnung erneut versenden',
    'invoices:client_viewed'        => ':1 hat die <a href=":2">Rechnung # :3</a> am :4 gesehen',
    'invoices:client_paid'          => ':1 hat die <a href=":2">Rechnung # :3</a> am :4 bezahlt',
    'invoice:paid_amount'           => 'Bezahlter Betrag',
    /** End Invoices **/

    /** Estimates **/
    'estimates:attachedtoproposal'          => 'Dem Angebot # :1 angeh&auml;ngt',
    'estimates:duplicated'                  => 'Kostenvoranschlag # :1 dupliziert. Die Nummer des neuen Kostenvoranschlages ist # :2.',
    'estimates:alltitle'                    => 'Alle Kostenvoranschl&auml;ge',
    'estimates:attachingtoproposal'         => 'H&auml;nge Kostenvoranschlag an Angebot an. Bitte warten ...',
    'estimates:delete_title'                => 'Diesen Kostenvoranschlag l&ouml;schen?',
    'estimates:delete_message'              => 'Bist du sicher, dass du diesen Kostenvoranschlag l&ouml;schen m&ouml;chtest?',
    'estimates:createnew'                   => 'Kostenvoranschlag erstellen',
    'estimates:generate_estimate'           => 'Kostenvoranschlag generieren',
    'estimates:converted'                   => 'Kostenvoranschlag # :1 zu einem Projekt konvertieren.',
    'estimates:converted_to_invoice'        => 'Kostenvoranschlag # :1 zu einer Rechnung konvertieren.',
    'estimates:noestimatetitle'             => 'Du hast keine Kostenvoranschl&auml;ge.',
    'estimates:noestimatesforthisclient'    => 'Du hast keine Kostenvoranschl&auml;ge f&uuml;r diesen Kunden.',
    'estimates:noestimatesforthefilteredclient'     => "Du hast keine Kostenvoranschl&auml;ge f&uuml;r :1.",
    'estimates:deleted'                     => 'Der Kostenvoranschlag wurde gel&ouml;scht!',
    'estimates:noestimatebody'              => 'Das solltest du machen. Willst du jetzt einen erstellen?', /*?*/
    'estimates:estimatenumber'              => 'Kostenvoranschlag #:1',
    'estimates:view'                        => 'Kostenvoranschlag ansehen',
    'estimates:no_estimates'                => 'Es gibt hier keine Kostenvoranschl&auml;ge.',
    'estimates:addedsuccess'                => 'Du hast einen Kostenvoranschlag hinzugef&uuml;gt f&uuml;r', /*?! ... f&uuml;r XXX hinzugef&uuml;gt. @ TODO: where is that? Placeholder possible? */
    'estimates:estimate'                    => 'voranschlagen',
    'estimates:added'                       => 'Der Kostenvoranschlag wurde hinzugef&uuml;gt.',
    'estimates:addedconf'                   => 'Du hast Kostenvoranschlag # <strong>:1</strong>, mit einem Gesamtbetrag von <strong>:2</strong> f&uuml;r :3:4 hinzugef&uuml;gt.',
    'estimates:send_now_title'              => 'Kostenvoranschlag jetzt versenden?',
    'estimates:send_now_body'               => 'F&uuml;lle das Formular unten aus und wir werden diesen Kostenvoranschlag f&uuml;r dich zustellen.',
    'estimates:send_now'                    => 'Kostenvoranschlag versenden',
    'estimates:edit'                        => 'Kostenvoranschlag bearbeiten',
    'estimates:preview'                     => 'Vorschau des Kostenvoranschlag',
    'estimates:editestimate'                => 'Kostenvoranschlag # :1 bearbeiten',
    'estimates:messageupdated'              => 'Der Kostenvoranschlag wurde aktualisiert!',
    'estimates:client_viewed'               => ':1 hat <a href=":2">Kostenvoranschlag # :3</a> am :4 gesehen',
    'estimates:client_accepted'             => ':1 hat <a href=":2">Kostenvoranschlag #:3</a> am :4 angenommen',
    'estimates:client_rejected'             => ':1 hat <a href=":2">Kostenvoranschlag #:3</a> am :4 abgewiesen',
    'estimates:resend'                      => 'Kostenvoranschlag erneut versenden',
    'estimates:estimatedate'                => 'Kostenvoranschlagsdatum',
    /** End Estimates **/

    /** Projects **/
    'projects:status_id'                    => 'Aufgabenstatus',
    'projects:projected'                    => 'Gesch&auml;tzt', /*? Projected */
    'projects:projected_hours'              => 'Gesch&auml;tzte Stunden',
    'projects:navigationitem'               => 'Projekte',
    'projects:hours_worked'                 => 'Anzahl an Arbeitsstunden',
    'projects:hours_worked_short'           => 'Arbeitsstunden',
    'projects:alltitle'                     => 'Alle Projekte',
    'projects:totalprojects'                => 'Gesamt Projekte',
    'projects:noprojecttitle'               => 'Es gibt bisher keine Projekte!',
    'projects:noprojecttext'                => 'M&ouml;chtest du jetzt eins erstellen? ',
    'projects:add'                          => 'Projekt erstellen',
    'projects:createfromtemplate'           => 'Aus Vorlage erstellen',
    'projects:doesnotexist'                 => 'Das Projekt, auf das du versuchst zuzugreifen, gibt es nicht.',
    'projects:edit'                         => 'Projekt bearbeiten',
    'projects:delete'                       => 'Projekt l&ouml;schen',
    'projects:project'                      => 'Projekt',

    'projects:new_project_from_estimate_without_number' => "Neues Projekt aus Kostenvoranschlag",
    'projects:new_project_from_estimate_with_number' => "Neues Projekt aus Kostenvoranschlag #:1",

    'projects:due_date'                     => 'F&auml;lligkeitsdatum',
    'projects:is_completed'                 => 'Abgeschlossen?',
    'projects:manage_project'               => 'Projekt verwalten',
    'projects:areyousuredeletetask'         => 'Bist du sicher, dass du diese Aufgabe l&ouml;schen willst?',
    'projects:add_time'                     => 'Zeiteintrag hinzuf&uuml;gen',
    'projects:add_hours'                    => 'Stunden hinzuf&uuml;gen',
    'projects:generate_invoice'             => 'Rechnung generieren',
    'projects:no_projects'                  => 'Es gibt hier keine Projekte.',
    'projects:archive_proj'                 => 'Projekt archivieren',
    'projects:unarchive_proj'               => 'Projekt aus dem Archiv holen',
    'projects:archive'                      => 'Archiv betrachten',
    'projects:active'                       => 'Aktive Projekte',
    'projects:archived'                     => 'Archivierte Projekte',
    'projects:noarchivedprojecttitle'       => 'Du hast keine archivierten Projekte.',
    'projects:noarchivedprojecttext'        => 'Du kannst ein Projekt auf der Projektseite archivieren ',
    'projects:allarchivedtitle'             => 'Alle archivierten Projekte',
    'projects:templatize'                   => 'Als Vorlage speichern',
    'projects:milestone_identifier'         => "[Meilenstein: :1]",
    /** End Projects **/


    /** Milestones **/
    'milestones:add'                        => 'Milestone hinzuf&uuml;gen',
    'milestones:edit'                       => 'Milestone bearbeiten',
    'milestones:delete'                     => 'Milestone l&ouml;schen',
    'milestones:milestone'                  => 'Milestone',
    'milestones:target_date'                => 'Zieldatum',
    'milestones:assigned_user'              => 'Zugewiesener Benutzer',
    'milestones:select_default'             => '-- kein milestone --',
    'milestones:no_milestone'               => 'Aufgaben ohne Milestone',
    'milestones:add_success'                => 'Milestone ":1" erfolgreich hinzugef&uuml;gt!',
    'milestones:edit_success'               => 'Milestone ":1" erfolgreich bearbeitet!',
    'milestones:add_failed'                 => 'Milestone ":1" konnte nicht bearbeitet werden.',
    'milestones:edit_failed'                => 'Milestone ":1" konnte nicht hinzugef&uuml;gt werden.',
    'milestones:are_you_sure_delete'        => 'Bist du sicher, dass du diesen Milestone l&ouml;schen willst?',
    'milestones:delete_success'             => 'Milestone ":1" erfolgreich gel&ouml;scht!',
    'milestones:does_not_exist'             => 'Diesen milestone gibt es nicht.',
//    'milestones:target_date'                =>  'Target Date',
    'milestones:select_assignee_default'    => 'Keiner zugewiesen',
    /** End Milestones **/


    /** Reminders **/

    'reminders:reminders'   => 'Erinnerungen',
    'reminders:send'        => 'Erinnerungen versenden',
    'reminders:success'     => 'Diese Erinnerungen wurden versendet!!',
    'reminders:remind'      => 'Erinnern',
    'reminders:message'     => 'Nachricht',
    'reminders:due'         => 'Tage',
    'reminders:details'     => 'Details',
    'reminders:log'         => 'Log',

    /** End Reminders **/


    /** Email Templates **/

    'emailtemplates:email_templates'    => 'E-Mail-Vorlagen',
    'emailtemplates:create_template'    => 'Neue Vorlage erstellen',
    'emailtemplates:add'                =>    'Neue E-Mail-Vorlage erstellen',
    'emailtemplates:edit'               =>    'E-Mail-Vorlage bearbeiten',
    'emailtemplates:manage'             =>    'Vorlagen verwalten',
    'emailtemplates:name'               =>    'E-Mail Name',
    'emailtemplates:subject'            =>    'E-Mail Betreff',
    'emailtemplates:days'               =>    'Day Range', /*?*/
    'emailtemplates:type'               =>    'Vorlagenart',
    'emailtemplates:success'            =>    'E-Mail-Vorlage erfolgreich erstellt',
    'emailtemplates:edited'             =>    'E-Mail-Vorlage erfolgreich bearbeitet',
    'emailtemplates:does_not_exist'     =>    'E-Mail-Vorlagen existiert nicht',
    'emailtemplates:deleted'            =>    'E-Mail-Vorlage  erfolgreich gel&ouml;scht',
    'emailtemplates:delete_title'       =>    'E-Mail-Vorlage l&ouml;schen',
    'emailtemplates:delete_message'     =>    'Bist du sicher, dass du diese E-Mail-Vorlage l&ouml;schen willst?',

    /** End Email Templates **/


    /** Reports **/
    'reports:perclient'     => 'pro Kunde',
    'reports:datefrom'      => 'Von',
    'reports:allclients'    => 'Alle Kunden',
    'reports:dateto'        => 'Bis',
    'reports:byclient'      => 'Kunde',

    'reports:view'          => 'Bericht ansehen',
    'reports:show_all'      => 'Berichte anzeigen',

    'reports:paid_and_unpaid' => "Bezahlt und Unbezahlt",
    'reports:paid_vs_unpaid_over_time' => "Bezahlt gegen Unbezahlt nach Zeit",
    'reports:per_client'    => 'pro Kunde',
    'reports:total_with_tax' => "Gesamtsumme (mit Steuer)",
    'reports:total_without_tax' => "Gesamtsumme (ohne Steuer)",
    'reports:total_collected' => 'Gesamt kassiert',
    'reports:fees_paid' => 'bezahlte Geb&uuml;hren',
    'reports:total_amount' => 'Gesamtbetrag',
    'reports:paid_amount' => "Bezahlter Betrag",
    'reports:unpaid_amount' => "Unbezahlter Betrag",
    'reports:client_name' => "Kundenname",

    'reports:nodata'        => 'No :1.', /*?*/
    /** End Reports **/


    /** Currencies **/
    'currencies:default'    => '[Default] :1',
    'currencies:cad'        => 'Canadian Dollar',
    'currencies:eur'        => 'Euro',
    'currencies:usd'        => 'U.S. Dollar',
    'currencies:gbp'        => 'Pound Sterling',
    'currencies:hkd'        => 'Hong Kong Dollar',
    'currencies:php'        => 'Philippine Peso',
    'currencies:zar'        => 'South Africa, Rand',
    /** End Currencies **/


    /** Proposals **/
    'proposal:outline'      =>  'Projektskizze',
    /** End Proposals **/

    /** Proposals **/
    'proposals:duplicated'                      => 'Angebot # :1 dupliziert. Die neue Angebotsnummer ist #:2.',
    'proposals:usesectiontemplate'              => 'Diese Bereichsvorlage verwenden', /*? Use this Section Template*/
    'proposals:showcontents'                    => 'Inhalte anzeigen',
    'proposals:hidecontents'                    => 'Inhalte verbergen',
    'proposals:deletepremadesection'            => 'Bereichssvorlage l&ouml;schen',
    'proposals:nopremadesections'               => 'Du hast keine gespeicherten Bereichsvorlagen.',
    'proposals:newproposal'                     => 'Neues Angebot',
    'proposals:number'                          => 'Angebot #',
    'proposals:all'                             => 'Alle Angebote',
    'proposals:noproposaltitle'                 => 'Hier sind keine Angebote!',
    'proposals:noproposalbody'                  => 'Du solltest jetzt auf jeden Fall ein Angebot erstellen.',
    'proposals:client_viewed'                   => ':1 hat <a href=":2">Angebot #:3</a> am :4 gesehen',
    'proposals:client_accepted'                 => ':1 hat <a href=":2">Angebot #:3</a> am :4 gesehen',
    'proposals:client_rejected'                 => ':1 hat <a href=":2">Angebot #:3</a> am :4 abgewiesen',
    'proposals:rejected'                        => 'Abgelehnt am :1',
    'proposals:accepted'                        => 'Angenommen am :1',
    'proposals:lastviewed'                      => 'Zuletzt am :1 um :2 vom Kunden gesehen', /*?*/
    'proposals:neverviewed'                     => 'vom Kunden noch nicht gesehen.',
    'proposals:noanswer'                        => 'Keine Antwort',
    'proposals:createproposal'                  => 'Angebot erstellen',
    'proposals:editproposal'                    => 'Angebot bearbeiten',
    'proposals:createdsuccessfully'             => 'Angebot erstellt!',
    'proposals:sections'                        => 'Bereiche',
    'proposals:section'                         => 'Bereich',
    'proposals:createsection'                   => 'Neuen Bereich hinzuf&uuml;gen',
    'proposals:createpage'                      => 'Seite hinzuf&uuml;gen',
    'proposals:emptysection'                    => '(kein Titel)',
    'proposals:emptycontents'                   => '(kein Inhalt)',
    'proposals:emptysubtitle'                   => '(kein Untertitel)',
    'proposals:for'                             => 'Angebot f&uuml;r:',
    'proposals:pagexofcount'                    => 'Seite :1 von :2',
    'proposals:saving'                          => 'speichere...',
    'proposals:save'                            => 'Angebot speichern',
    'proposals:savepremade'                     => 'Als Bereichsvorlage speichern',
    'proposals:addestimate'                     => 'Kostenvoranschlag hinzuf&uuml;gen',
    'proposals:saved'                           => 'Gespeichert!',
    'proposals:createandedit'                   => 'N&auml;chster Schritt: Inhalt des Angebots bearbeiten',
    'proposals:delete_message'                  => 'Bist du sicher, dass du dieses Angebot l&ouml;schen m&ouml;chtest?',
    'proposals:createpremadesection'            => 'Aus Bereichsvorlage hinzuf&uuml;gen',
    'proposals:selected_attachments'            => 'Kostenvoranschlag ausw&auml;hlen',
    'proposals:attach_selected_estimate'        => 'Ausgew&auml;hlten Kostenvoranschlag anh&auml;ngen',
    'proposals:proposal'                        => 'Angebot',
    'proposals:status'                          => 'Status',
    'proposals:view'                            => 'Angebot ansehen',
    'proposals:estimate'                        => 'Kostenvoranschlag',
    'proposals:na'                              => 'N/A',
    'proposals:no_proposals'                    => 'Da sind keine Angebote.',
    'proposals:proposal_title'                  => 'Angebotstitel',
    'proposals:kitchennotice'                   => 'Hinweis: Angebote werden in :1 erscheinen sobald der Kunde den Angebotslink besucht hat. Das heißt du kannst es bearbeiten solang du willst und er Kunde sieht es erst, wann du das m&ouml;chstest.',
    /** End Proposals **/

    /** Tasks **/
    'tasks:task'                                => 'Aufgabe',
    'tasks:edit_succeeded'                      => 'Aufgabe erfolgreich bearbeitet.',
    'tasks:hours'                               => 'Stunden',
    'tasks:due_date'                            => 'F&auml;lligkeitsdatum',
    'tasks:is_completed'                        => 'Abgeschlossen?',
    'tasks:timer'                               => 'Timer',
    'tasks:rate'                                => 'Satz',
    'tasks:default_rate'                        => 'Standardsatz',
    'tasks:entries'                             => 'Zeiteintr&auml;ge',
    'tasks:view_entries'                        => 'Eintr&auml;ge ansehen',
    'tasks:edit_entry'                          => 'Zeiteintrag bearbeiten',
    'tasks:create'                              => 'Aufgabe hinzuf&uuml;gen',
    'tasks:create_sub'                          => 'Unteraufgabe hinzuf&uuml;gen',
    'tasks:task_parent'                         => 'Elternaufgabe',
    'tasks:edit'                                => 'Aufgabe bearbeiten',
    'tasks:create_succeeded'                    => 'Die Aufgabe wurde erstellt!',
    'tasks:no_task_title'                       => 'Bisher keine Aufgaben ...',
    'tasks:no_task'                             => 'Keine Aufgabe',
    'tasks:no_task_message'                     => 'Du solltest welche erstellen!',
    'tasks:is_viewable'                         => 'Im Kundenbereich sichtbar?',
    'tasks:no_milestones'                       => 'Aufgaben ohne Milestones',
    'tasks:not_related_to_a_task'               => '-- Ohne Bezug zu einer Aufgabe --',
    'tasks:select_parent_default'               => '-- Keine Elternaufgabe --',
    'tasks:timers_running'                      => 'Timer laufen',
    'tasks:task_completed_by'                   => ':1 hat die <a href=":2">Aufgabe :3</a> am :4 fertiggestellt',
    'tasks:discussion'                          => 'Diskussion: ',
    'tasks:billed_hours'                        => 'Berechnete Stunden',
    'tasks:unbilled_hours'                      => 'Unberechnete Stunden',


    /** Users **/
    'users:create_user'                         => 'Benutzer anlegen',
    'users:confirm_delete_emphasised'           => 'Es gibt keinen Weg zur&uuml;ck!',

    /** Items **/
    'items:name'                                => 'Name des Postens',
    'items:description'                         => 'Beschreibung des Postens',
    'items:qty_hrs'                             => 'Stk. / h',
    'items:quantity'                            => 'Menge',
    'items:rate'                                => 'Satz',
    'items:tax_rate'                            => 'Steuersatz',
    'items:cost'                                => 'Kosten',
    'items:line_items'                          => 'Posten',
    'items:add'                                 => 'Posten hinzuf&uuml;gen',
    'items:edit'                                => 'Posten bearbeiten',
    'items:noitemtitle'                         => 'Du hast bisher keine Posten!',
    'items:noitembody'                          => 'Du solltest nun einige Posten hinzuf&uuml;gen, es vereinfacht die Rechnungsstellung enorm.!',
    'items:delete_title'                        => 'Diesen Posten l&ouml;schen?',
    'items:delete_message'                      => 'Bist du sicher, dass du den Posten ":1" l&ouml;schen willst?',
    'items:type'                                => 'Art',
    'items:select_standard'                     => 'Standard',
    'items:select_expense'                      => 'Ausgabe',
    'items:add_expense_to_project'              => 'Ausgabe hinzuf&uuml;gen',
    'items:expenses'                            => 'Ausgaben',
    /** END Items **/

    /** Expenses **/
    'expenses:expenses'                         =>    'Ausgaben',
    'expenses:add'                              =>    'Ausgabe hinzuf&uuml;gen',
    'expenses:edit_expense'                     =>    'Ausgabe bearbeiten',
    'expenses:delete'                           =>    'Ausgabe l&ouml;schen',
    'expenses:deleted'                          =>    'Ausgabe gel&ouml;scht',
    'expenses:all'                              =>    'Alle Ausgaben',
    'expenses:amount'                           =>    'Betrag',
    'expenses:supplier'                         =>    'Lieferant',
    'expenses:suppliers'                        =>    'Lieferanten',
    'expenses:category'                         =>    'Kategorie',
    'expenses:categories'                       =>    'Kategorien',
    'expenses:add_supplier'                     =>    'Lieferant hinzuf&uuml;gen',
    'expenses:edit_supplier'                    =>    'Lieferant bearbeiten',
    'expenses:add_category'                     =>    'Kategorie hinzuf&uuml;gen',
    'expenses:edit_category'                    =>    'Kategorie bearbeiten',
    'expenses:parent_category'                  =>    '&uuml;bergeordnete Kategorie',
    'expenses:filter'                           =>    'Ausgaben filtern',
    'expenses:start_date'                       =>    'Startdatum',
    'expenses:end_date'                         =>    'Enddatum',


    /** END Expenses **/

    /** Transactions **/
    'transactions:paymentcancelled'                 => 'Bezahlung abgebrochen', /*?*/
    'transactions:extrapaymentcancelled'            => 'Deine Bezahlung wurde abgebrochen.',
    'transactions:paymentreceived'                  => 'Zahlung erhalten!',
    'transactions:fee_applied'                      => 'Weil :1 eine Bearbeitungsgeb&uuml;hr verlangt haben wir einen Zusatzbetrag von :2% hinzugef&uuml;gt.',
    'transactions:orderbeingprocessed'              => 'Bitte warten. Ihre Bestellung wird bearbeitet und sie werden zu :1 weitergeleitet.',
    'transactions:ifyouarenotredirected'            => 'Wenn sie nicht innerhalb von f&uuml;nf Sekunden automatisch zu :1 weitergeleitet werden ...',
    'transactions:thankyouforyourpayment'           => 'Vielen Dank f&uuml;r ihre Zahlung. Sie sollten bald eine Best&auml;tigung per E-Mail bekommen.',
    'transactions:ifyouhavefilesyouwillgetanemail'  => 'Wenn sie auf Dateien warten werden sie bald eine E-Mail mit links zu diesen Dateien bekommen.',
    'transactions:ifyoudonotreceiveemail'           => 'Wenn sie innerhalb der n&auml;chsten Stunde keine E-Mail erhalten wenden sie sich bitte an :1',
    /** End Transactions **/

    /** Timesheets **/
    'timesheet:taskname'                        => 'Aufgabenbezeichung',
    'timesheet:starttime'                       => 'Startzeit',
    'timesheet:endtime'                         => 'Endzeit',
    'timesheet:timeframe'                       => 'Zeitrahmen',
    'timesheet:duration'                        => 'Dauer',
    'timesheet:date'                            => 'Datum',
    'timesheet:forproject'                      => 'Zeiterfassungsbogen f&uuml;r Projekt ":1"',
    'timesheet:timesheet'                       => 'Zeiterfassungsbogen',
    'timesheet:for'                             => 'Zeiterfassungsbogen f&uuml;r:',
    'timesheet:totalbillable'                   => 'Gesamt berechenbare Stunden',
    'timesheet:view_pdf'                        => 'Zeiterfassungsbogen ansehen',
    'timesheet:user'                            => 'Benutzer',
    'timesheet:entries'                         => 'Eintr&auml;ge',
    'timesheet:no_entries'                      => 'Es gibt keine Zeiteintr&auml;ge',
    /** End Timesheets **/


    /** Support Tickets **/

    'tickets:all_tickets'                       => 'Support Tickets',
    'tickets:support_tickets'                   => "Support Tickets",
    'tickets:pending'                           => 'Ausstehend',
    'tickets:open'                              => 'Offen',
    'tickets:resolved'                          => 'Gel&ouml;st',
    'tickets:closed'                            => 'Geschlossen',
    'tickets:respond'                           => 'Auf Ticket antworten',
    'tickets:ticket_options'                    => 'Ticket Options',
    'tickets:attachment'                        => 'Anhang',
    'tickets:updated_status'                    => ':1 hat den ticket status zu :2 ge&auml;ndert',
    'tickets:add_a_new_ticket'                  => 'Ein neues Ticket hinzuf&uuml;gen',
    'tickets:create_a_new_ticket'               => 'Ein neues Ticket erstellen',
    'tickets:add_ticket'                        => 'Ticket hinzuf&uuml;gen',
    'tickets:assign_to_user'                    => 'Benutzer zuweisen',
    'tickets:select_client'                     => 'Kunden ausw&auml;hlen',
    'tickets:ticket_subject'                    => 'Ticket Betreff',
    'tickets:ticket_message'                    => 'Ticket Nachricht',
    'tickets:ticket_priority'                   => 'Ticket Priorit&auml;t',
    'tickets:ticket_status'                     => 'Ticket Status',
    'tickets:no_priority'                       => '-- keine Priorit&auml;t --',
    'tickets:no_status'                         => '-- kein Status --',
    'tickets:no_posts'                          => 'Keine Nachricht.',

    /** End Support Tickets **/

    /** Frontend **/
    'frontend:hithere'                          => 'Hallo auch!',
    'frontend:followthemaillinkdude'            => 'Um ihre Rechnung zu betrachten m&uuml;ssen sie den gesamten Link in der E-Mail klicken. Z.B. :1.',
    'frontend:contactadminforassistance'        => 'Bitte tun sie das oder wenden sie sich f&uuml;r Unterst&uuml;tzung an :1 bei :2',
    /** End Frontend **/

    /** Settings **/

    'settings:task_statuses'                    => 'Aufgaben Statuses',
    'settings:ticket_statuses'                  => 'Ticket Statuses',
    'settings:ticket_priorities'                => 'Ticket Priorit&auml;ten',
    'settings:background_color'                 => 'Hintergrundfarbe',
    'settings:text_color'                       => 'Textfarbe',
    'settings:text_shadow'                      => 'Textschatten',
    'settings:box_shadow'                       => 'Boxschatten',
    'settings:default_rate'                     => 'Standardsatz',
    'settings:allowed_extensions'               => 'Erlaubte Dateiendungen',
    'settings:comma_separated'                  => 'kommagetrennt',
    'settings:pdf_page_size'                    => 'PDF Seitengr&ouml;ße',
    'settings:default_invoice_notes'            => 'Standardrechnungsnotiz',
    'settings:default_invoice_title'            => 'Standardrechnungstitel',
    'settings:default_invoice_due_date'         => 'Standardf&auml;lligkeit f&uuml;r Rechnungen',
    'settings:autosave_proposals'               => 'Angebote automatisch speichern',
    'settings:default_invoice_due_date_explain' => 'tage nachdem die Rechnung erstellt wurde. Wenn du kein Standarddatum willst einfach das Feld leer lassen.',
    'settings:testemailsettings'                => 'E-Mail-Einstellungen testen',
    'settings:kitchen_route'                    => 'Prefix f&uuml;r Kundenzugangslink',
    'settings:kitchen_route_explain'            => "(Vorschau: :1)",
    'settings:include_remittance_slip'          => '&uuml;berweisungsbeleg',
    'settings:include_remittance_slip_explain'  => "Wenn ausgew&auml;hlt werden Rechnungs-PDFs einen &uuml;berweisungsbeleg einschließen.",
    'settings:items_per_page'                   => 'Elemente pro Seite',
    'settings:items_per_page_explain'           => 'Anzahl von Elementen (Rechnungen/Kostenvoranschl&auml;ge/Angebote/Projekte/Aufgaben) die pro Seite gezeigt werden.',
    'settings:send_x_days_before'               => 'Standardwert f&uuml;r "Tage vorher versenden"',
    'settings:send_x_days_before_explain'       => 'Standardwert wie viele Tage vor F&auml;lligkeit eine wiederkehrende Rechnung an den Kunden versand wird.',
    'settings:file_to_import'                   => 'Datei zum Importieren',
    'settings:file_should_be_csv'               => 'Pancake versucht deine Datei automatisch zu verarbeiten und alles darin zu importieren. Falls Pancake deine Datei nicht verarbeiten kann sagt es dir bescheid und bietet dir die Option uns einige Informationen zuzusenden, so dass wir daf&uuml;r sorgen k&ouml;nnen, dass Pancake auch mit deiner Datei arbeitet.',
    'settings:importnow'                        => 'Jetzt importieren!',
    'settings:whatimporting'                    => 'Was willst du importieren?',
    'settings:whatexporting'                    => 'Was willst du exportieren?',
    'settings:nouploadedimportfile'             => 'Du hast keine Datei f&uuml;r den Import hochgeladen.',
    'settings:import'                           => 'Import',
    'settings:importedclients'                  => ':1 Kunden wurden erfolgreich importiert.',
    'settings:importedprojects'                 => ":1 Projekte wurden erfolgreich importiert.",
    'settings:importedusers'                    => ":1 Benutzer wurden erfolgreich importiert.",
    'settings:importedinvoices'                 => ':1 Rechnungen wurden erfolgreich importiert.',
    'settings:importedtasks'                    => ':1 Aufgaben wurden erfolgreich importiert.',
    'settings:importedestimates'                => ':1 Kostenvoranschl&auml;ge wurden erfolgreich importiert.',
    'settings:importedtime_entries'             => ':1 Zeiteintr&auml;ge wurden erfolgreich importiert.',
    'settings:xwereduplicates'                  => ':1 waren Duplikate und wurden ignoriert.',
    'settings:import_desc'                      => 'Daten in Pancake importieren.',
    'settings:export'                           => 'Export',
    'settings:exportnow'                        => 'Jetzt exportieren!',
    'settings:importexport'                     => 'Import / Export',
    'settings:removelogo'                       => 'Logo entfernen',
    'settings:wrong_license_key'                => 'Der eingegebene Lizenzschl&uuml;ssel ist ung&uuml;ltig.',
    'settings:noopenssl'                        => 'Dein Server hat kein OpenSSL konfiguriert. Das bedeutet, dass du keine E-Mails &uuml;ber Gmail oder Google Apps versenden kannst. Bitte kontaktiere deinen Webhoster und bitte um Aktivierung von OpenSSl.',
    'settings:logoremoved'                      => 'Das Logo wurde erfolgreich entfernt!',
    'settings:save'                             => 'Einstellungen speichern',
    'settings:logodimensions'                   => 'Das Logo kann in jeder Gr&ouml;ße hochgeladen werden, es wird automatisch angepasst.',
    'settings:logoformatsallowed'               => 'BMP, PNG, JPG (JPEG) und GIF sind erlaubt.',
    'settings:ftp_user'                         => 'FTP Benutzer',
    'settings:ftp_pass'                         => 'FTP Passwort',
    'settings:ftp_path'                         => 'FTP Pfad',
    'settings:ftp_port'                         => 'FTP Port',
    'settings:ftp_pasv'                         => 'Passiver Modus?',
    'settings:nophpupdates'                     => 'Aufgrund deiner Serverkonfiguration musst du deine FTP-Zugangsdaten eingeben damit Pancake sich selbst updaten kann. Diese Informationen werden nur intern verwendet und niemals an jemanden &uuml;bermittelt.',
    'settings:ftp_host'                         => 'FTP Host',
    'settings:uptodate'                         => 'Pancake ist aktuell (:1)',
    'settings:newversionavailable'              => 'Es ist eine neuere Version von Pancake verf&uuml;gbar (:1)!',
    'settings:updatenow'                        => 'Jetzt Updaten!',
    'settings:checkforupdates'                  => "Auf verf&uuml;gbare Updates pr&uuml;fen",
    'settings:youneedtoconfigurefirst'          => 'Dein Pancake ist nicht daf&uuml;r konfiguriert sich selbst upzudaten. Bitte gib unten deine FTP-Zugangsdaten ein und speichere die Einstellungen.<br /> Pancake wird dich dann das Update machen lassen.',
    'settings:general'                          => 'Allgemein',
    'settings:emails'                           => 'E-Mails',
    'settings:email_templates'                  => 'E-Mails',
    'settings:taxes'                            => 'Steuern',
    'settings:currencies'                       => 'W&auml;hrungen',
    'settings:branding'                         => 'Branding',
    'settings:payment_methods'                  => 'Zahlungen',
    'settings:feeds'                            => 'Feeds',
    'settings:api_keys'                         => 'API Keys',

    'settings:time_entry_times'                 => "Zeiteintrag Zeiten",
    "settings:include_dates_and_times_in_line_items" => 'Daten und Zeiten in der Beschreibung zu "Zeiteintrag" Posten.',
    "settings:when_generating_invoice"          => "Bei der Erstellung von Rechnungen einen Posten pro",
    "settings:use_utf8_font"                    => "UTF-8 fonts in PDFs",
    "settings:use_utf8_font_explanation"        => "Bei Zeichensatzfehlern in PDFs.",
    "settings:pdf_attachments"                  => "PDF Anh&auml;nge",
    "settings:pdf_attachments_explanation"      => "Pancake wird die entsprechenden PDFs an Rechnungs-, Kostenvoranschlags- und Angebots-Mails anh&auml;ngen.",
    ""                                          => "",

    'settings:site_name'                        => 'Seitenname',
    'settings:language'                         => 'Sprache',
    'settings:timezone'                         => 'Zeitzone',
    'settings:notify_email'                     => 'E-Mail f&uuml;r Benachrichtigungen',
    'settings:currency'                         => 'W&auml;hrung',
    'settings:theme'                            => 'Frontend Theme',
    'settings:admin_theme'                      => 'Admin Theme',
    'settings:admin_name'                       => 'Admin Name',
    'settings:date_format'                      => 'Datumsformat',
    'settings:time_format'                      => "Zeitformat",
    'settings:task_time_interval'               => 'Zeitrundung (leer lassen f&uuml;r keine Rundung)',
    'settings:task_time_interval_description'   => '(z.B.. 00:30 oder 0.5 - alle Zeit-Eintr&auml;ge werden bei der Berechnung f&uuml;r eine Rechnung auf die n&auml;chste halbe Stunde aufgerundet.)',
    'settings:mailing_address'                  => 'Postadresse',

    'settings:default_subject'                  => 'Standardbetreff',
    'settings:default_contents'                 => 'Standardnachricht',
    'settings:new_estimate'                     => 'Neuer Kostenvoranschlag',
    'settings:new_invoice'                      => 'Neue Rechnung',
    'settings:new_proposal'                     => 'Neues Angebot',
    'settings:paid_notification'                => 'Paid Notification', /*!*/
    'settings:payment_receipt'                  => 'Zahlungsbeleg',
    'settings:new_ticket'                       => 'Neues Ticket',
    'settings:ticket_invoice'                   => 'Neue Ticketrechnung', /*?*/
    'settings:ticket_updated'                   => 'Ticket Updated', /*?*/
    'settings:ticket_status_updated'            => 'Ticketstatus aktualisiert',

    'settings:logo'                             => 'Dein Logo',
    'settings:frontend_css'                     => 'Eigenes CSS f&uuml;r das Frontend',
    'settings:backend_css'                      => 'Eigenes CSS f&uuml;r das Backend',

    'settings:rss_password'                     => 'RSS Passwort',
    'settings:default_feeds'                    => 'Standardfeeds',
    'settings:cron_job_feed'                    => 'Cron Job',
    'settings:feed_generator'                   => 'Feed Generator',
    'settings:your_link'                        => 'Dein Link',
    'settings:bcc'                              => 'BCC',
    'settings:automaticallybccclientemail'      => 'Automatisch eine Kopie aller Kunden-E-Mails an die Benachrichtigungsadresse (oben festgelegt) senden',
    'settings:api_note'                         => 'Name / Notiz',
    'settings:api_key'                          => 'Key',

    'settings:tax_name'                         => 'Name der Steuer',
    'settings:tax_value'                        => 'Wert',
    'settings:tax_reg'                          => 'Registration / Code', /*? USt-ID ??*/
    'settings:add_tax'                          => 'Eine weitere Steuer hinzuf&uuml;gen',

    'settings:currency_name'                    => 'Name der W&auml;hrungs',
    'settings:currency_code'                    => 'W&auml;hrungscode',
    'settings:exchange_rate'                    => 'Wechselkurs',
    'settings:add_currency'                     => 'Eine weitere W&auml;hrung hinzuf&uuml;gen',
    /** End Settings **/

    'update:ifyourenotsurecontactus'            => 'Wenn du nicht sicher bist was zu tun ist, bitte <a href="http://pancakeapp.com/forums/newtopic/2/">frage im Forum nach</a>.',
    'update:youmodified'                        => 'Du hast ver&auml;ndert',
    'update:youdeleted'                         => 'Du hast gel&ouml;scht',
    'update:loadingpleasewait'                  => 'Lade. Bitte warten ...',
    'update:errordownloading'                   => 'Ein Update f&uuml;r Pancake ist verf&uuml;gbar, aber Pancake hat Probleme mit dem Download.',
    'update:herearestepstofix'                  => 'Hier sind einige Schritte die du versuchen kannst um das zu beheben:',
    'update:makesureuploadsiswritable'          => 'Stell sicher, dass dein Upload-Verzeichnis beschreibbar ist (CHMOD 0777).',
    'update:deletepancakesystemupdate'          => 'L&ouml;sche das pancake-update-system Verzeichnis (im uploads Verzeichnis), inklusive aller Inhalte.',
    'update:loadpancakeagain'                   => 'Lade Pancake neu. Wenn der Fehler weiterhin besteht &auml;ndere den Besitzer des Pancake Verzeichnisses (chown) so, dass es identisch mit dem Webserver-Benutzer ist. Wenn du das nicht tun kannst, oder nicht weißt wie du das tun kannst schreib uns eine E-Mail an support@pancakeapp.com, wir werden versuchen dir zu helfen.',
    'update:whatschanged'                       => 'Was gibt\'s neues in :1',
    'update:ftp_conn'                           => 'Pancake konnte keine Verbindung zum FTP-Host herstellen.',
    'update:ftp_login'                          => 'Pancake konnte sich nicht via FTP einloggen (falsches Passwort/Benutzername?).',
    'update:ftp_chdir'                          => 'Pancake konnnte den FTP-Pfad nicht setzen (der Pfad existiert m&ouml;glicherweise nicht).',
    'update:ftp_no_uploads'                     => 'Pancake konnte keinen Berechtigung zum Upload der Dateien via FTP bekommen.',
    'update:ftp_indexwrong'                     => 'Der eingegebene Pfad ist falsch. Es sollte der Pfad zum Pancake-Verzeichnis sein.',
    'update:ftp_indexnotfound'                  => 'Der eingegebene Pfad ist falsch. Es sollte der Pfad zum Pancake-Verzeichnis sein.',
    'update:update_conflict'                    => 'Du hast seit dem letzten Update einige Dateien ver&auml;ndert. Um deine Anpassungen zu sichern hier eine Liste mit den ge&auml;nderten Dateien, die sich nicht mit dem letzten Upgrad verstehen.',
    'update:update_no_perms'                    => 'Pancake hat weder genug Rechte um sich selbst zu aktualisieren noch hat es Zugang zu einem FTP-Account von dem es sich aktualisieren k&ouml;nnte. Das Update kann nicht fortgesetzt werden.',
    'update:review_files'                       => 'Bitte kontrolliere diese Dateien und mache Backups davon before du weiter machst. Nachdem das Update fertig ist musst du deine &auml;nderungen wieder in diese integrieren. Biite ersetze nicht nur die aktualisierten Dateien mit deinen alten, da das den Pfannkuchen verbrennen kann.',
    'update:internetissues'                     => 'Pancake kann keine Verbindung zum Internet herstellen.',
    'update:pancakeneedsinternet'               => 'Damit Pancake wie vorgesehen funktionieren kann muss dein Server ihm erlauben einige Informationen aus dem Internet abzurufen (Port 80).',
    'update:maybefirewall'                      => 'Es scheint, dass dein Server Pancake verbietet mit dem Internet zu kommunuzieren. Das k&ouml;nnte eine Firewall auf deinem Server sein. Bitte frag deinen Webhoster um Hilfe und bitte darum PHP Zugang zu :1 zu erlauben.',
    'update:nointernetaccess'                   => 'Kein Internetzugang',
    'update:pancakeupdated'                     => 'Pancake wurde von :1 zu :2 aktualisiert',
    /** Action Logger  **/

    /** End Action Logger **/

    /** Partial Payments **/
    'partial:partialpayments'                   => 'Zahlungsplan',
    'partial:totalamounttobepaid'               => 'Gesamtbetrag, den der Kunde bezahlen muss',
    'partial:amountlefttobeadded'               => 'Restbetrag, der dem Zahlungsplan noch hinzugef&uuml;gt werden muss',
    'partial:amounttoobig'                      => 'Betrag, der vom Zahlungsplan entfernt werden muss',
    'partial:noamountneeded'                    => 'Dein Zahlungsplan ist vollst&auml;ndig.',
    'partial:amount'                            => 'Betrag',
    'partial:add_payment'                       => 'Zahlung hinzuf&uuml;gen',
    'partial:dueon'                             => 'F&auml;llig am',
    'partial:addanother'                        => 'Einen weiteren Teil zu dieser Zahlung hinzuf&uuml;gen',
    'partial:disabledforrecurring'              => 'Wiederkehrende Rechnungen sind auf Einmalzahlungen beschr&auml;nkt',
    'partial:paymentdetails'                    => 'Zahlungsdetails',
    'partial:wrongtotal'                        => 'Die Summe der Teile deines Zahlungsplanes ergeben nicht die Summe, die du berechnest.',
    'partial:problemsaving'                     => 'Beim Speichern des Zahlplanes ist ein Fehler aufgetreten. Bitte versuche es erneut.',
    'partial:wrongtotalbutsaved'                => 'Die Summe der Teile deines Zahlungsplanes ergeben nicht die Summe, die du berechnest.<br />Die &auml;nderungen an der Rechnung wurden gespeichert, aber du musst den Zahlungsplan berichtigen.',
    'partial:problemsavingbutsaved'             => 'Beim Speichern des Zahlplanes ist ein Fehler aufgetreten. Bitte versuche es erneut.<br />Die &auml;nderungen an der Rechnung wurden gespeichert, der Zahlungsplan aber nicht.',
    'partial:savepaymentdetails'                => 'Zahlungsdetails speichern',
    'partial:partpaidthanks'                    => 'Dieser Teil der Rechnung wurde bezahlt. Danke.',
    'partial:proceedtopayment'                  => 'Weiter zur Zahlung',
    'partial:topaynowgoto'                      => 'Um jetzt zu zahlen gehe zu :1',
    'partial:pay_part_x_now'                    => "Bezahlten sie jetzt Teil #:1 ihrer Rechnung",
    'partial:dueondate'                         => 'f&auml;llig am :1',
    'partial:paymentmethod'                     => 'Zahlungsart',
    'partial:paymentdate'                       => 'Zahlungsdatum',
    'partial:paymentstatus'                     => 'Zahlungsstatus',
    'partial:transactionid'                     => 'Transaktions-ID',
    'partial:markaspaid'                        => 'Als bezahlt markieren',
    'partial:transactionfee'                    => 'Bearbeitungsgeb&uuml;hr',
    /** End Partial Payments **/

    /** Payment Gateways **/
    'paypal:clickhere'                          => 'Hier klicken um weiter zu kommen',
    'authorize:transaction_key'                 => 'Transaction Key', /*?*/
    'paypal:email'                              => 'PayPal E-Mail',
    'paypal:fee'                                => 'PayPal Geb&uuml;hr (%)',
    'paypalpro:paypalpro'                       => 'PayPal Payments Pro (BETA)',
    'paypalpro:viacreditcard'                   => 'Mit Kreditkarte bezahlen',
    'cash:cash'                                 => 'Bar',
    'check:check'                               => 'Check',
    'moneyorder:moneyorder'                     => 'Money Order',
    'creditcard:creditcard'                     => 'Kreditkarte',
    'banktransfer:banktransfer'                 => '&uuml;berweisung',
    'gateways:errorupdating'                    => 'Beim Aktualisieren der Einstellungen zu den Bezahlmethoden ist ein Fehler aufgetreten. Bitte wende dich an den Support.',
    'gateways:paymentmethods'                   => 'Zahlungsarten',
    'gateways:selectpaymentmethod'              => 'Zahlungsart ausw&auml;hlen',
    'gateways:nogatewayused'                    => 'Keine Zahlungsart genutzt: Teil ist unbezahlt',
    'gateways:completed'                        => 'Abgeschlossen',
    'gateways:refunded'                         => 'R&uuml;ckerstattet',
    'gateways:unpaid'                           => 'Unbezahlt',
    'gateways:paymentrejected'                  => ':1 Zahlung zur&uuml;ckgewiesen',
    'gateways:rejectedemail'                    => 'Pancake wurde von :1 &uuml;ber eine Zahlung von einem Kunden (:2) benachrichtigt, diese wurde jedoch von :1 zur&uuml;ckgewiesen.',
    'gateways:pending'                          => 'Ausstehend',
    'gateways:returntowebsite'                  => 'Zur&uuml;ck zu :1',
    'gateways:cc_type'                          => 'Kreditkartenart',
    'gateways:cc_number'                        => 'Kreditkartennummer',
    'gateways:cc_exp'                           => 'Ablaufdatum',
    'gateways:cc_cardholder'                    => 'Name auf der Karte',
    'gateways:cc_code'                          => 'CVV Code',
    'gateways:payment_details'                  => 'Zahlungsdetails',
    'gateways:api_signature'                    => 'API Signature',
    'gateways:api_password'                     => 'API Password',
    'gateways:api_username'                     => 'API Username',
    /** End Payment Gateways **/

    /** Kitchen Area **/
    'kitchen:edit_comment'                      => 'Kommentar bearbeiten',
    'kitchen:add_a_comment'                     => 'Kommentar hinzuf&uuml;gen',
    'kitchen:kitchen_name'                      => 'Kundenbereich',
    'kitchen:pleaselogin'                       => 'Bitte geben sie ihr Passwort an um Zugriff auf ihr Konto zu erhalten',
    'kitchen:nocomments'                        => 'Bisher keine Kommentare.',
    'kitchen:comment'                           => 'Kommentar',
    'kitchen:comments'                          => 'Kommentare',
    'kitchen:comments_x'                        => 'Kommentare (:1)',
    'kitchen:file'                              => 'Datei',
    'kitchen:submitcomment'                     => 'Kommentar hinzuf&uuml;gen',
    'kitchen:attachment'                        => 'Anhang',
    'kitchen:saidon'                            => 'sagte am :1, um :2',
    'kitchen:subjectinvoice'                    => 'Neuer Kommentar zu Rechnung #',
    'kitchen:subjectestimate'                   => 'Neuer Kommentar zu Kostenvoranschlag #',
    'kitchen:subjectproject'                    => 'Neuer Kommentar zu Projekt:',
    'kitchen:subjecttask'                       => 'Neuer Kommentar zu Aufgabe:',
    'kitchen:subjectproposal'                   => 'Neuer Kommentar zu Angebot:',
    'kitchen:backtodashboard'                   => 'Zur&uuml;ck zur &uuml;bersicht',
    'kitchen:client_welcome'                    => 'Kundenbereich f&uuml;r:',
    'kitchen:urltosend'                         => 'URL des Kundenbereichs',
    'kitchen:nopassphrase'                      => 'Momentan ist kein Kundenpasswort gesetzt. Das heißt, jeder der die URL kennt kann auf den Kundenbereich zugreifen. Wenn du dies mit einem einfach Passwort sichern willst bearbeite die Kundeneinstellungen und lege dort eins fest.',
    'kitchen:passphraseset'                     => 'Dieser Kunde hat ein Passwort gesetzt',
    'kitchen:passphrase'                        => 'Passwort',
    'kitchen:description'                       => 'Diese URL kannst du deinem Kunden schicken damit er auf den Kundenbereich zugreifen kann, wo er Dinge wie Projekte und Rechnungen, die du sichtbar gemacht hast, einsehen kann.',
    'kitchen:people_in_discussion'              => 'Leute reden',

    'kitchen:latest_invoice'                    => 'aktuellste Rechnung',
    'kitchen:unpaid_balance'                    => 'Unbezahlter Betrag: :1',
    'kitchen:total_paid_to_date'                => 'Bis heute bezahlt: :1',


    /** END Kitchen Area **/

    'store:store'                               => 'Store',
    'store:buy'                                 => "Kaufen ($:1)",
    'store:update'                              => "Update",
    'store:install'                             => "Installieren",
    'store:settings'                            => "Einstellungen",
    'store:already_bought'                      => "Das hast du schon gekauft!",
    'store:installed_successfully'              => "Du hast das :1 :2 erfolreich installiert.",
    'store:plugin'                              => "Plugin",
    'store:payment_gateway'                     => "Payment Gateway",
    'store:frontend_theme'                      => "Frontend Theme",
    'store:backend_theme'                       => "Backend Theme",
    'store:unknown'                             => "Unbekannt",
    'store:updatestoreitems'                    => "Elemente aus dem Store updaten",
    'store:download_free'                       => "Download (Umsonst)",
    'store:error1000'                           => "Your authorization token is no longer valid. You will have to enter your payment details in pancakeapp.com once more.",
    'store:error1001'                           => "Du hast das schon gekauft!", /*? You have already purchased this store item!*/
    'store:error1002'                           => "Beim Versuch deine Kreditkarte zu belasten trat ein Fehler auf. Versuche es sp&auml;ter erneut.",
    'store:error1003'                           => "Du hast eine ung&uuml;ltige Anfrage gemacht.",

    'email_templates:new_invoice'               => 'Neue Rechnung',
    'email_templates:new_estimate'              => 'Neuer Kostenvoranschlag',
    'email_templates:new_proposal'              => 'Neues Angebot',
    'email_templates:invoice_payment_notification_for_admin' => 'Zahlungsnachricht (an admin gesendet)',
    'email_templates:invoice_payment_notification_for_client' => 'Nachricht &uuml;ber Zahlungsempfang (an Kunden gesendet)',
    'email_templates:new_ticket'                => 'Neues Ticket',
    'email_templates:new_ticket_invoice'        => 'Neue Ticket-Rechnung',
    'email_templates:ticket_updated'            => 'Ticket bearbeitet',
    'email_templates:ticket_status_updated'     => 'Ticketstatus ge&auml;ndert',
    'email_templates:assigned_to_task'          => "Aufgabe zugewiesen",
    'email_templates:assigned_to_milestone'     => "Milestone zugewiesen",
    'email_templates:new_comment'               => "Neuer Kommentar",

    'global:timer_app'                          => "Pancake Timer App",

    /** Dashboard **/


    /** END Dashboard **/

    # v4.0.5

    'invoices:lastreoccurrence' => 'Letztes Auftreten: :1',

    # Begin v4.1.2 changes
    'invoices:converted_to_estimate' => "Rechnung # :1 in einen Kostenvoranschlag umgewandelt.",
    'global:converttoestimate' => 'In Kostenvoranschlag umwandeln',
    # End v4.1.2 changes

  # Begin v4.1.3 changes
  'tickets:view_archived' => "Archivierte Tickets ansehen",
  'tickets:view_unarchived' => "Aktive Tickets ansehen",
  'tickets:archiving_ticket' => "Ticket archivieren",
  'tickets:unarchiving_ticket' => "Ticket aus dem Archiv holen", /*?*/
  "tickets:unknown_error_ticket_not_altered" => "Ein unbekannter Fehler ist aufgetreten. Das Ticket wurde nicht ver&auml;ndert.",
  # End v4.1.3 changes

  # Begin v4.1.4 changes
  "tasks:starting_timer" => "Timer starten",
  "tasks:stopping_timer" => "Timer stoppen",
  "global:all_comments" => "Alle Kommentare",
  "dashboard:view_all_comments" => "Alle Kommentare ansehen",
  "dashboard:latest_comments" => "Letzte Kommentare",
  "dashboard:written_by" => "Geschrieben von :1 am :2",
  "dashboard:client_activity" => "Kunden-Aktivit&auml;t",
  "dashboard:view_all_client_activity" => "Alle Kunden-Aktivit&auml;ten sehen",
  "dashboard:team_activity" => "Team-Aktivit&auml;t",
  "dashboard:view_all_team_activity" => "Alle Team-Aktivit&auml;ten sehen",
  "dashboard:my_tasks" => "Meine Aufgaben",
  "dashboard:view_all_my_tasks" => "Alle meine Aufgaben ansehen",
  "dashboard:what_the_team_is_working_on" => "Woran das Team gerade arbeitet.",
  # End v4.1.4 changes

  # Begin v4.1.6 changes
  "global:save_milestone" => "Meilenstein speichern",
  "global:save_task" => "Aufgabe speichern",
  "global:private_comment" => "Dieser Kommentar ist privat, der Kunde kann ihn nicht sehen.",
  "global:clients_cant_see_private" => "Kunden k&ouml;nnen keine privaten Kommentare sehen.",
  "global:is_private" => "Privat?",
  # End v4.1.6 changes

  # Begin v4.1.7 changes
  "tickets:disable_client" => "-- Support Tickets abschalten --",
  # End v4.1.7 changes

  # Begin v4.1.8 changes
  "global:css" => "Eigenes CSS",
  "global:js" => "Eigenes JavaScript",
  "global:js_explanation" => "Du kannst jQuery benutzen. Der Code wird direkt vor &lt;/body&gt; eingef&uuml;gt.",
  "settings:frontend_js" => "Eigenes Javascript f&uuml;r das Frontend",
  "settings:backend_js" => "Eigenes Javascript f&uuml;r das Backend",
  # End v4.1.8 changes

  # Begin v4.1.9 changes
  "proposals:estimate_number_and_amount" => "Kostenvoranschlag #:1 (:2)",
  # End v4.1.9 changes

  # Begin v4.1.10 changes
  "clients:delete" => "Kunden l&ouml;schen",
  # End v4.1.10 changes

  # Begin v4.1.11 changes
  "global:nolongerexists" => "[EXISTIERT NICHT MEHR]",
  "global:billed_amount" => "Berechneter Betrag",
  "global:unbilled_amount" => "Unberechneter Betrag",
  "global:is_billed" => "Berechnet?",
  # End v4.1.11 changes

  # Begin v4.1.14 changes
  "settings:year_start" => "Beginn des Gesch&auml;ftsjahres",
  "dashboard:since_explanation" => "Seit :1",
  # End v4.1.14 changes

  # Begin v4.1.15 changes
  "export:invoices_csv" => "Rechnungen (CSV)",
  # End v4.1.15 changes

  # Begin v4.1.17 changes
  "projects:createdtemplate" => "Projektvorlage erstellt. Du kannst nun Projekte auf dieser Vorlage erstellen.",
  "projects:delete_template" => "Vorlage l&ouml;schen.",
  "projects:deleted_template" => "Erfolg! Vorlage gel&ouml;scht.",
  # End v4.1.17 changes

  # Begin v4.1.19 changes
  "export:expenses_csv" => "Ausgaben (CSV)",
  "export:clients_csv" => "Kunden (CSV)",
  "projects:expense_date" => "Datum der Ausgabe",
  # End v4.1.19 changes

  # Begin v4.1.20 changes
  "clients:can_create_support_tickets" => "Dem Kunden erlauben Support-Tickets zu erstellen?",
  "tickets:submit_new" => "Ticket hinzuf&uuml;gen",
  "global:cancel" => "Abbrechen",
  "global:timers" => "Timers",
  "global:more" => "Mehr",
  # End v4.1.20 changes

  # Begin v4.1.23 changes
  "global:search" => "Suche",
  "authorize:api_login_id" => "API Login ID",
  "authorize:api_login_id_description" => "Du kannst das bei Authorize.net unter Account > API Login ID and Transaction Key finden.",
  "authorize:md5_hash" => "MD5-Hash",
  "authorize:md5_hash_description" => "Standardm&auml;ßig ist das deine API Login ID. Du kannst sie bei Authorize.net unter Account > MD5-Hash &auml;ndern. Wenn dort 'Hash Value Set: No' steht, lasse das leer.",
  "transactions:paymentfailed" => "Zahlung fehlgeschlagen",
  "transactions:extrapaymentfailed" => "Bei dem Versuch die Zahlung zu verarbeiten ist ein unbekanntes Problem aufgetreten. Bitte kontaktiere :1 bei :2 f&uuml;r Hilfestellung.",
  # End v4.1.23 changes

  # Begin v4.1.24 changes
  "projects:tracked" => "Tracked",
  "settings:accounting_type" => "Reporting Method",
  "settings:accrual" => "Zeige Rechnungen nach ihrem Erstellungsdatum",
  "settings:cash" => "Zeige Rechnungen nach ihrem Bezahldatum",
  "reports:selection_explanation_accrual" => "Rechnungen werden nach dem Datum, an dem sie erstellt wurden, angezeigt.",
  "reports:selection_explanation_cash" => "Bezahlte Rechnungen werden nach dem Datum, an dem sie bezahlt wurden, angezeigt.\n\nUnbezahlte oder teilgezahlte Rechnungen werden nach Erstellungsdatum angezeigt.",
  "invoices:partially_paid" => "Teilweise",
  # End v4.1.24 changes

  # Begin v4.1.27 changes
  "global:projects_ommitted" => ":1 Projekte nicht angezeigt",
  "global:tasks_ommitted" => ":1 Aufgaben nicht angezeigt",
  # End v4.1.27 changes

  # Begin v4.1.28 changes
  "login:username_email" => "Benutzername / E-Mail",
  # End v4.1.28 changes

  # Begin v4.1.31 changes
  "settings:when_new_updates_are_available" => "Wenn neue Aktualisierungen verf&uuml;gbar sind",
  "settings:dont_install_just_notify_me" => "Nicht installieren, nur benachrichtigen",
  "settings:install_automatically" => "Automatisch installieren",
  "settings:loading_update_details" => "Lade Aktualisierungs-Details... Dies kann ein oder zwei Minuten dauern. Du kannst jederzeit neu laden.",
  "settings:updating_please_wait" => "Aktualisierung. Bitte warten.\nDie Seite wird neu geladen sobald die Aktualisierung abgeschlossen ist.",
  "settings:will_have_to_overwrite_single_file" => "Pancake wird eine Datei &uuml;berschreiben, die du manuell ge&auml;ndert hast.",
  "settings:will_have_to_overwrite_multiple_files" => "Pancake wird :1 Dateien &uuml;berschreiben, die du manuell ge&auml;ndert hast.",
  "settings:checking_for_updates" => "Suche nach Aktualisierungen, bitte warten. Diese Seite wird automatisch neu geladen.",
  "settings:description" => "Speichere deine ge&auml;nderten Einstellungen bevor du den Tab wechselt oder die Seite verl&auml;sst.",
  "settings:business_identities" => "Gesch&auml;ftsidentit&auml;ten",
  "settings:business_name" => "Name des Gesch&auml;fts",
  "settings:new_business" => "Neues Gesch&auml;ft",
  "settings:business_identity" => "Gesch&auml;ftsidentit&auml;t",
  "settings:business_identity_explanation" => "Der Kunde wird die obenstehende Gesch&auml;ftsidentit&auml;t auf allen E-Mails, PDFs und Seiten sehen.",
  # End v4.1.31 changes

  # Begin v4.1.33 changes
  "settings:have_been_updated" => 'Die Einstellungen wurden aktualisiert.',
  "tasks:all" => "Alle Aufgaben",
  "projects:progress" => "Fortschritt",
  "expenses:name" => "Name der Ausgabe",
  "tasks:add_hours_to" => "F&uuml;ge Stunden zu :1 hinzu",
  "global:today" => "Heute",
  "global:yesterday" => "Gestern",
  "global:other" => "Andere",
  "global:now" => "Jetzt",
  "timesheet:view_for_clients" => "Zeiterfassungsbogen ansehen (f&uuml;r Kunden)",
  "global:not_billed_yet" => "Noch nicht berechnet.",
  "tasks:total_logged_time" => "Gesamte getrackte Zeit",
  "global:biweekly" => "Zweiw&ouml;chentlich",
  # End v4.1.33 changes

  # Begin v4.2 changes
  'settings:default_task_due_date' => 'Standardf&auml;lligkeitsdatum f&uuml;r Aufgaben',
  'settings:default_task_due_date_explain' => "Tage nachdem eine Aufgabe erstellt wurde. Wenn du kein Standarddatum verwenden willst lasse das Feld einfach leer.",
  # End v4.2 changes

  # Note: 4.2.x brought changes to the language file that weren't appended to the end of the file.
  # If you're updating your translation, make sure to check out a diff of the language file, instead of relying on just checking the bottom of the file.
    
    # Begin v4.2.4 changes
    "expenses:sort_or_filter" => "Sort/Filter Ausgaben",
    "expenses:show" => "Ausgaben anzeigen",
    "global:sort_by" => "Sortieren nach",
    "global:sort_order" => "Anordnung",
    "global:asc" => "Aufsteigend (A-Z)",
    "global:desc" => "Absteigend (Z-A)",
    # End v4.2.4 changes

);

/** End of file: pancake_lang.php **/
