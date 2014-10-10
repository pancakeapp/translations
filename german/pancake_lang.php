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
 *               Thomas Heinrichsdobler, http://demicloud.com
 */

// ------------------------------------------------------------------------

$lang = array(
  /** Global Words **/
  'global:overview'               => 'Übersicht',
  'global:error'                  => 'Fehler',
  'global:pancakeby7am'           => 'Pancake :1',
  'global:allrelatedmediacopyright'   => 'Pancake und alle zugehörigen Medien sind urheberrechtlich geschützt. :1 :2',
  'global:insecure_action'        => 'Eine unsichere Aktion wurde angestrebt, aber verhindert',
  'global:disabled_in_demo'       => 'Einige Funktionien dieser Seite sind für die Demo deaktiviert',
  'global:estimates'              => 'Voranschläge',
  'global:estimate'               => 'Voranschlag',
  'global:incomplete_tasks'       => 'Unvollständige Aufgaben',
  'global:completed_tasks'        => 'Vollständige Aufgaben',
  'global:projects'               => 'Projekte',
  'global:tickets'                => 'Tickets',
  'global:project'                => 'Projekt',
  'global:upload_failed'          => 'Beim Upload der Datei is ein Problem aufgetreten. Bitte versuche es erneut. Wenn das Problem weiterhin besteht, wende dich bitte an support@pancakeapp.com.',
  'global:upload_not_allowed'     => 'Die Datei, die du versucht hast hochzuladen hat einen ungültigen Dateityp. Wenn du eine Datei dieses Typs hochladen musst, dann komprimiere sie bitte in ein .zip oder ähnliches Format.',
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
  'global:enable'                 => 'Ermöglichen',
  'global:is_enabled'             => 'Möglich?',
  'global:is_completed'           => 'Fertig?',
  'global:Y'                      => 'Y',
  'global:N'                      => 'N',
  'global:notes'                  => 'Notizen',
  'global:description'            => 'Beschreibung',
  'global:backtoadmin'            => 'Zurück zum Admin',
  'global:type'                   => 'Typ',
  'global:name'                   =>  'Name',
  'global:first_name'             =>  'Vorname',
  'global:last_name'              =>  'Nachname',
  'global:company'                =>  'Firma',
  'global:for'                    =>  'für',
  'global:from'                   =>  'von',
  'global:phone'                  =>  'Telefon',
  'global:email'                  =>  'E-Mail',
  'global:contacts'               =>  'Kontakte',
  'global:week'                   => 'Wöchentlich',
  'global:na'                     => 'N/A',
  'global:quarterly'              => 'Quartalsweise',
  'global:every_six_months'       => 'Alle 6 Monate',
  'global:statistics'             => "Statistiken",
  'global:biyearly'               => 'Alle 2 Jahre',
  'global:month'                  => 'Monatlich',
  'global:year'                   => 'Jährlich',
  'global:fax'                    => 'Fax',
  'global:mobile'                 => 'Mobil',
  'global:address'                => 'Adresse',
  'global:api_key'                => 'API Key',
  'global:website'                => 'Website',
  'global:action'                 => 'Aktion',
  'global:items'                  => 'Posten',
  'global:reusableinvoiceitems'   => 'Wiederverwendbare Rechnungselemente',
  'global:reusableinvoiceitems_description'    => 'Du solltest wiederverwendbare Rechnungsposten verwenden, wenn du den gleichen Posten in mehreren Rechnungen verwenden willst. Um diese zu benutzen beim Erstellen oder bearbeiten einer Rechnung einfach anfangen den Namen des gespeicherten Postens einzugeben und es werden Vervollständigungen angeboten.',
  'global:create_invoice_estimate'    =>    'Erstelle Rechnungen und Voranschläge umd bezahlt zu werden.',
  'global:createinvoice'          => 'Rechnung erstellen',
  'global:paid'                   => 'Bezahlt',
  'global:unpaid'                 => 'Unbezahlt',
  'global:overdue'                => 'Überfällig',
  'global:time_entries'           => 'Zeiteinträge',
  'global:invoices'               => 'Rechnungen',
  'global:invoice'                =>    'Rechnung',
  'global:tasks'                  => 'Aufgaben',
  'global:dashboard'              => 'Dashboard',
  'global:settings'               => 'Einstellungen',
  'global:plugins'                => 'Plugins',
  'global:installed'              => 'Installiert',
  'global:changepassword'         => 'Passwort ändern',
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
  'global:saveandinsert'          => 'Speichern und einfügen',
  'global:details'                => 'Details',
  'global:license_key'            => 'Lizenzschlüssel',
  'global:version'                => 'Version :1',
  'global:content'                => 'Inhalt',
  'global:add'                    => 'Hinzufügen',
  'global:edit'                   => 'Bearbeiten',
  'global:resend'                 => 'Erneut verschicken',
  'global:sent'                   => 'Gesendet',
  'global:not_sent'               => 'Nicht gesendet',
  'global:view'                   => 'Betrachten',
  'global:delete'                 => 'Löschen',
  'global:remove'                 => 'Entfernen',
  'global:sort'                   => 'Sortieren',
  'global:deleteitem'             => 'Posten löschen',
  'global:dragtoreorder'          => 'Zum Sortieren ziehen',
  'global:start'                  => 'Start',
  'global:stop'                   => 'Stop',
  'global:start_timer'            => 'Timer starten',
  'estimates:create'              => "Kostenvoranschlag erstellen",
  'global:stop_timer'             => 'Timer stoppen',
  'global:created'                => 'Erstellt',
  'global:updated'                => 'Aktualisiert',
  'global:update'                 => 'Aktualisieren',
  'global:update_available'       => ':1 Update verfügbar',
  'global:updates_available'      => ':1 Updates verfügbar',
  'global:downloadpdf'            => 'PDF herunterladen',
  'global:yesdelete'              => 'Ja, löschen!',
  'global:confirm_emphisised'     => 'Es gibt keinen Weg zurück!',
  'global:color'                  => 'Farbe',
  'global:save'                   => 'Speichern',
  'global:unknown'                => 'Unbekannt',
  'global:upload_ini_size'        => 'Die hochgeladene Datei überschreitet das durch deine PHP Installation vorgegebene Größenlimit.',
  'global:upload_error'           => 'Während des Uploads ist ein Problem aufgetreten. Bitte versuche es erneut.',
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
  'global:quick_links'            => 'Quicklinks',
  'global:view_all'               => 'Alle ansehen',
  'global:deleted'                => 'Gelöscht',
  'global:add_more'               => 'Mehr hinzufügen',
  'global:upload_files'           => 'Dateien hochladen',
  'global:optional_increment'     => '<strong>Optional</strong> - zählt selber hoch',

  'login:ahoy'                    => 'Ahoy!',
  'login:readytodothis'           => 'Bist du bereit?',
  'login:sup'                     => 'Sup?',
  'global:actions'                => 'Aktionen',
  'global:select'                 => "--- auswählen ---",

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
  'dashboard:latest_activity'     =>    'Letzte Aktivität',
  'dashboard:these_are_your_upcoming_tasks' => "Dies sind deine anstehenden Aufgaben, :1.",
  'dashboard:upcoming_tasks'      =>    'Anstehende Aufgaben',
  /** End Dashboard **/

  /** Timesheets **/
  'global:timesheets'       =>  'Zeiterfassungsbögen',
  'timesheets:todays'       =>  'Heutige',
  'timesheets:all_users'    =>  'Alle Benutzer',
  'timesheets:rounded_time' => 'Gerundet auf die nächste :1',
  'timesheets:there_are_no_time_entries' => "Es gibt für diesen Datumbereich keine Zeiteinträge.",
  /** END Timesheets **/

  /** Users **/

  // ==============================
  // = LOGIN PAGE COMPLETED - Lee =
  // ==============================
  'login:forgotinstructions'      =>    'Bitte gib deine E-Mail-Adresse ein damit wir dir einen E-Mail zum zurücksetzen deines Passworts schicken können.',
//    'login:reset'                   =>    'Zurücksetzen &raquo;',
  'login:reset'                   =>    'Passwort zurücksetzen',
  'login:username'                =>    'Benutzername',
  'login:password'                =>    'Passwort',
  'login:changepassword'          =>    'Passwort ändern',
  'login:email'                   =>    'E-Mail-Adress',
  'login:login'                   =>    'Login',
  'login:logout'                  =>    'Logout',
  'login:remember'                =>    'Eingeloggt bleiben',
  'login:forgot'                  =>    'Passwort vergessen?',
  'login:cancel'                  =>   '&laquo; Abbrechen',
  /** End Users **/

  /** User Groups **/
  'groups:edit_title'             => 'Gruppe bearbeiten %s',
  'groups:add_title'              => 'Benutzergruppe hinzufügen',

  /** Clients **/
  'clients:title'                 => 'Alle Kunden',
  'clients:filter'                => 'Kunden filtern',
  'clients:add'                   => 'Kunde hinzufügen',
  'clients:removefilter'          => 'Filter entfernen',
  'clients:edit'                  => 'Kunde bearbeiten',
  'clients:noclienttitle'         => 'Du solltest einige Kunden anlegen!',
  'clients:noclientbody'          => 'Um ihnen ein paar Rechnungen zu schicken. Jetzt einen hinzufügen?', /*?*/
  'clients:noclienttitlefilter'   => 'Dein Filter findet keine Kunden',
  'clients:hasnoinvoicetitle'     => 'Hübsch! Der Kunde ist fertig eingerichtet!',
  'clients:hasnoinvoicebody'      => 'Erstelle eine Rechnung für ihn und fang an zu kassieren! Jetzt eine hinzufügen?',
  'clients:added'                 => 'Der Kunde wurde hinzugefügt!',
  'clients:edited'                => 'Der Kunde wurde aktualisiert!',
  'clients:deleted'               => 'Der Kunde wurde gelöscht!',
  'clients:does_not_exist'        => 'Der Kunde existiert nicht!',
  'clients:health_check'          => 'Kontostatus',
  'clients:all'                   => 'Alle',
  'clients:delete_title'          => 'Diesen Kunden löschen?!?!',
  'clients:delete_message'        => 'Bist du sicher, dass du diesen Kunden löschen willst?<br>Damit werden auch alle Rechnung, Projekte und Angebote für diesen Kunden gelöscht.',
  'clients:clientaction'          => '&nbsp;',
  'clients:passphrase'            => 'Passwort',
  'clients:bad_passphrase'        => 'Das Passwort ist falsch.',
  'clients:total_clients'         => 'Kunden gesamt',
  'clients:support'               => 'Support',
  'clients:support_rates'         => 'Supportsätze',
  'clients:edit_support_rates'    => 'Sätze festlegen',
  /** End Clients **/


  /** Contact Log **/
  'contact:title'             => 'Aktueller Kontaktverlauf',
  'contact:method'            => 'Kontaktart',
  'contact:contact'           => 'Kontakt',
  'contact:subject'           => 'Betreff',
  'contact:content'           => 'Inhalt',
  // 'contact:method'         => 'Contact Method',
  'contact:calling_title'     => 'Kunden arufen ":1"', /*??*/
  // 'contact:view_all'       =>    'Alle ansehen',
  /** End Contact Log **/

  /** Invoices **/
  'invoices:markassent'           => 'Als versendet markieren',
  'invoices:invoicedate'          => 'Rechnungsdatum',
  'invoices:file_name'            => "Dateiname",
  'invoices:date_created'         => "Erstellungsdatum",
  'invoices:size'                 => "Größe",
  'invoices:files'                => "Dateien",
  'invoices:sentbutunpaid'        => 'Rechnungen an den Kunden verschickt, aber noch unbezahlt', /*?*/
  'invoices:duplicated'           => 'Rechnung #:1 dupliziert. Neue Rechnungsnummer #:2.',
  'invoices:all'                  => 'Alle Rechnungen',
  'invoices:empty'                => 'Noch keine Rechnungen vorhanden.',
  'invoices:overdue'              => 'Überfällige Rechnungen',
  'invoices:tax_collected'        => "Steuer bezahlt", /*?*/
  'invoices:paid'                 => 'Bezahlte Rechnungen',
  'invoices:recurringinvoices'    => 'Wiederkehrende Rechnungen',
  'invoices:unsentinvoices'       => 'Nicht versendete Rechnungen',
  'invoices:unpaid'               => 'Unbezahlte Rechnungen',
  'invoices:thisinvoicewaspaidon' => 'Diese Rechnung wurde am :1 bezahlt. Dankeschön!',
  'invoices:senton'               => 'Versendet am :1',
  'invoices:lastsenton'           => 'Zuletzt versendet am :1 um :2', /*?*/
  'invoices:paidon'               => 'Bezahlt am :1',
  'invoices:paidonsingle'         => 'Bezahlt am',
  'invoices:thisinvoiceisunpaid'  => "Diese Rechnung wurde noch nicht bezahlt.",
  'invoices:noinvoicetitle'       => 'Du hast noch keine Rechnungen!',
  'invoices:noinvoicesforthefilteredclient'   => "Du hast noch keine Rechnungen für :1.",
  'invoices:noinvoicebody'        => 'Du solltest jetzt eine Rechnung erstellen! <br /> Kunden mögen Rechnungen!',
  'invoices:send_now_title'       => 'Rechnung jetzt verschicken?',
  'invoices:send_now_body'        => 'Fülle das Formular unten aus und wir werden die Rechnung für dich zustellen.',
  'invoices:newinvoice'           => 'Rechnung erstellen',
  'invoices:send_now'             => 'Rechnung verschicken',
  'invoices:timequantity'         => 'Zeit/Menge',
  'invoices:ratewithcurrency'     => 'Satz (:1)',
  'invoices:taxable'              => 'besteuert', /*?*/
  'invoices:total'                => 'Gesamtbetrag',
  'invoices:amount'               => 'Betrag',
  'invoices:due'                  => 'Fällig',
  'invoices:subtotal'             => 'Zwischensumme',
  'invoices:totaltax'             => 'Gesamt Steuer', /*?*/
  'invoices:filestodownload'      => 'Dateien zum Download',
  'invoices:added'                => 'Die Rechnung wurde hinzugefügt!',
  'invoices:fileswillbeavailableafterpay' => 'Diese Dateien werden zum Download bereitgestellt, sobald die Rechnung vollständig bezahlt wurde.',
  'invoices:no_payment_gateways_enabled'  => 'Es wurden keine Bezahlmöglichkeiten konfiguriert, was eine Bezahlung möglicherweise etwas schwierig macht. Konfigurieren und den <a href=":1">Einstellungen</a>',
  'invoices:invoicenumber'        => 'Rechnung #:1',
  'invoices:number'               => 'Rechnung #',
  'invoices:type'                 => 'Rechnungsart',
  'invoices:is_recurring'         => 'Wiederkehrend?',
  'invoices:is_paid'              => 'Bezahlt?',
  'invoices:is_sent'              => 'Versendet?',
  'invoices:date_entered'         => 'Erstellungsdatum',
  'invoices:delete_title'         => 'Diese Rechnung löschen?',
  'items:select_time_entry'       => 'Zeiteintrag',
  'invoices:delete_message'       => 'Bist du sicher, dass du diese Rechnung löschen möchtest?',
  'invoices:create'               => 'Rechnung erstellen',
  'invoices:edit'                 => 'Rechnung bearbeiten',
  'invoices:amountrequired'       => 'Das Feld "Betrag" wird benötigt',
  'invoices:currencydoesnotexist' => 'Diese Währung existiert nicht.',
  'invoices:unique_id'            => 'Unique ID', /*!*/
  'invoices:willreoccurin'        => 'Diese Rechnung wird am :1 wiederholt.', /*?*/
  'invoices:willbesentautomatically'  => 'Der Kunde wird am :1 per E-Mail über diese Rechnung informiert werden.',
  'invoices:thisisareoccurrence'  => 'Diese Rechnung ist eine Wiederholung der Rechnung :1.',
  'invoices:clientlastnotifiedon' => 'Der Kunde wurde am :1 per E-Mail über diese Rechnung informiert.',
  'invoices:simple'               => 'Einfach',
  'invoices:simple_help'          => 'Eine Einfache Rechnung hat keine Rechnungsposten. Nur einen Gesamtbetrag.',
  'invoices:detailed'             => 'Detailiert',
  'invoices:detailed_help'        => 'Detailierte Rechnungen erlauben es dir mehrere Rechnungsposten aufzuführen.',
  'invoices:estimate_help'        => 'Kostenvoranschläge sind detailierte Rechnungen, die nicht berechnet werden.',
  'invoices:unpaid_totalamount'   => 'Unbezahlt / Gesamtbetrag', /*? Unpaid / Total amount*/
  'invoices:saveinvoice'          => 'Rechnung speichern',
  'invoices:deleted'              => 'Die Rechnung wurde gelöscht!',
  'invoices:view'                 => 'Rechnung ansehen',
  'invoices:is_viewable'          => 'Im Kundenbereich anzeigen?',
  'invoices:no_invoices'          => 'Es gibt keine Rechnungen.',
  'invoices:addedsuccess'         => 'Du hast eine Rechnung hinzugefügt für', /*?! ... für XXX hinzugefügt. @ TODO: where is that? Placeholder possible? */
  'invoices:invoice'              => 'berechnen', /*?*/
  'invoices:preview'              => 'Rechnungsvorschau',
  'invoices:editinvoice'          => 'Rechnung # :1 bearbeiten',
  'invoices:messageupdated'       => 'Die Rechnung wurde aktualisiert!',
  'invoices:resend'               => 'Rechnung erneut versenden',
  'invoices:client_viewed'        => ':1 hat <a href=":2">Rechnung # :3</a> gesehen: :4',
  'invoices:client_paid'          => ':1 hat <a href=":2">Rechnung # :3</a> bezahlt: :4',
  'invoice:paid_amount'           => 'Bezahlter Betrag',
  /** End Invoices **/

  /** Estimates **/
  'estimates:attachedtoproposal'          => 'Dem Angebot # :1 angehängt',
  'estimates:duplicated'                  => 'Kostenvoranschlag # :1 dupliziert. Die Nummer des neuen Kostenvoranschlages ist # :2.',
  'estimates:alltitle'                    => 'Alle Kostenvoranschläge',
  'estimates:attachingtoproposal'         => 'Hänge Kostenvoranschlag an Angebot an. Bitte warten ...',
  'estimates:delete_title'                => 'Diesen Kostenvoranschlag löschen?',
  'estimates:delete_message'              => 'Bist du sicher, dass du diesen Kostenvoranschlag löschen möchtest?',
  'estimates:createnew'                   => 'Kostenvoranschlag erstellen',
  'estimates:generate_estimate'           => 'Kostenvoranschlag generieren',
  'estimates:converted'                   => 'Kostenvoranschlag # :1 zu einem Projekt konvertieren.',
  'estimates:converted_to_invoice'        => 'Kostenvoranschlag # :1 zu einer Rechnung konvertieren.',
  'estimates:noestimatetitle'             => 'Du hast keine Kostenvoranschläge.',
  'estimates:noestimatesforthisclient'    => 'Du hast keine Kostenvoranschläge für diesen Kunden.',
  'estimates:noestimatesforthefilteredclient'     => "Du hast keine Kostenvoranschläge für :1.",
  'estimates:deleted'                     => 'Der Kostenvoranschlag wurde gelöscht!',
  'estimates:noestimatebody'              => 'Das solltest du machen. Willst du jetzt einen erstellen?', /*?*/
  'estimates:estimatenumber'              => 'Kostenvoranschlag #:1',
  'estimates:view'                        => 'Kostenvoranschlag ansehen',
  'estimates:no_estimates'                => 'Es gibt hier keine Kostenvoranschläge.',
  'estimates:addedsuccess'                => 'Du hast einen Kostenvoranschlag hinzugefügt für', /*?! ... für XXX hinzugefügt. @ TODO: where is that? Placeholder possible? */
  'estimates:estimate'                    => 'voranschlagen',
  'estimates:added'                       => 'Der Kostenvoranschlag wurde hinzugefügt.',
  'estimates:send_now_title'              => 'Kostenvoranschlag jetzt versenden?',
  'estimates:send_now_body'               => 'Fülle das Formular unten aus und wir werden diesen Kostenvoranschlag für dich zustellen.',
  'estimates:send_now'                    => 'Kostenvoranschlag versenden',
  'estimates:edit'                        => 'Kostenvoranschlag bearbeiten',
  'estimates:preview'                     => 'Vorschau des Kostenvoranschlags',
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
  'projects:projected'                    => 'Geschätzt', /*? Projected */
  'projects:projected_hours'              => 'Geschätzte Stunden',
  'projects:navigationitem'               => 'Projekte',
  'projects:hours_worked'                 => 'Anzahl an Arbeitsstunden',
  'projects:hours_worked_short'           => 'Arbeitsstunden',
  'projects:alltitle'                     => 'Alle Projekte',
  'projects:totalprojects'                => 'Projekte gesamt',
  'projects:noprojecttitle'               => 'Es gibt bisher keine Projekte!',
  'projects:noprojecttext'                => 'Möchtest du jetzt eins erstellen? ',
  'projects:add'                          => 'Projekt erstellen',
  'projects:createfromtemplate'           => 'Aus Vorlage erstellen',
  'projects:doesnotexist'                 => 'Das Projekt, auf das du versuchst zuzugreifen, gibt es nicht.',
  'projects:edit'                         => 'Projekt bearbeiten',
  'projects:delete'                       => 'Projekt löschen',
  'projects:project'                      => 'Projekt',

  'projects:new_project_from_estimate_without_number' => "Neues Projekt aus Kostenvoranschlag",
  'projects:new_project_from_estimate_with_number' => "Neues Projekt aus Kostenvoranschlag #:1",

  'projects:due_date'                     => 'Fälligkeitsdatum',
  'projects:is_completed'                 => 'Abgeschlossen?',
  'projects:manage_project'               => 'Projekt verwalten',
  'projects:areyousuredeletetask'         => 'Bist du sicher, dass du diese Aufgabe löschen willst?',
  'projects:add_time'                     => 'Zeiteintrag hinzufügen',
  'projects:add_hours'                    => 'Stunden hinzufügen',
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
  'milestones:add'                        => 'Milestone hinzufügen',
  'milestones:edit'                       => 'Milestone bearbeiten',
  'milestones:delete'                     => 'Milestone löschen',
  'milestones:milestone'                  => 'Milestone',
  'milestones:target_date'                => 'Zieldatum',
  'milestones:assigned_user'              => 'Zugewiesener Benutzer',
  'milestones:select_default'             => '-- kein milestone --',
  'milestones:no_milestone'               => 'Aufgaben ohne Milestone',
  'milestones:add_success'                => 'Milestone ":1" erfolgreich hinzugefügt!',
  'milestones:edit_success'               => 'Milestone ":1" erfolgreich bearbeitet!',
  'milestones:add_failed'                 => 'Milestone ":1" konnte nicht bearbeitet werden.',
  'milestones:edit_failed'                => 'Milestone ":1" konnte nicht hinzugefügt werden.',
  'milestones:are_you_sure_delete'        => 'Bist du sicher, dass du diesen Milestone löschen willst?',
  'milestones:delete_success'             => 'Milestone ":1" erfolgreich gelöscht!',
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
  'emailtemplates:added'              =>    'E-Mail-Vorlage erstellt',
  'emailtemplates:edit'               =>    'E-Mail-Vorlage bearbeiten',
  'emailtemplates:manage'             =>    'Vorlagen verwalten',
  'emailtemplates:name'               =>    'Bezeichnung',
  'emailtemplates:subject'            =>    'Betreff',
  'emailtemplates:days'               =>    'Tage nach Fälligkeit',
  'emailtemplates:type'               =>    'Vorlagenart',
  'emailtemplates:success'            =>    'E-Mail-Vorlage erfolgreich erstellt',
  'emailtemplates:edited'             =>    'E-Mail-Vorlage erfolgreich bearbeitet',
  'emailtemplates:does_not_exist'     =>    'E-Mail-Vorlagen existiert nicht',
  'emailtemplates:deleted'            =>    'E-Mail-Vorlage  erfolgreich gelöscht',
  'emailtemplates:delete_title'       =>    'E-Mail-Vorlage löschen',
  'emailtemplates:delete_message'     =>    'Bist du sicher, dass du diese E-Mail-Vorlage löschen willst?',

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
  'reports:fees_paid' => 'bezahlte Gebühren',
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
  'proposals:deletepremadesection'            => 'Bereichssvorlage löschen',
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
  'proposals:createsection'                   => 'Neuen Bereich hinzufügen',
  'proposals:createpage'                      => 'Seite hinzufügen',
  'proposals:emptysection'                    => '(kein Titel)',
  'proposals:emptycontents'                   => '(kein Inhalt)',
  'proposals:emptysubtitle'                   => '(kein Untertitel)',
  'proposals:for'                             => 'Angebot für:',
  'proposals:pagexofcount'                    => 'Seite :1 von :2',
  'proposals:saving'                          => 'speichere...',
  'proposals:save'                            => 'Angebot speichern',
  'proposals:savepremade'                     => 'Als Bereichsvorlage speichern',
  'proposals:addestimate'                     => 'Kostenvoranschlag hinzufügen',
  'proposals:saved'                           => 'Gespeichert!',
  'proposals:createandedit'                   => 'Nächster Schritt: Inhalt des Angebots bearbeiten',
  'proposals:delete_message'                  => 'Bist du sicher, dass du dieses Angebot löschen möchtest?',
  'proposals:createpremadesection'            => 'Aus Bereichsvorlage hinzufügen',
  'proposals:selected_attachments'            => 'Kostenvoranschlag auswählen',
  'proposals:attach_selected_estimate'        => 'Ausgewählten Kostenvoranschlag anhängen',
  'proposals:proposal'                        => 'Angebot',
  'proposals:status'                          => 'Status',
  'proposals:view'                            => 'Angebot ansehen',
  'proposals:estimate'                        => 'Kostenvoranschlag',
  'proposals:na'                              => 'N/A',
  'proposals:no_proposals'                    => 'Da sind keine Angebote.',
  'proposals:proposal_title'                  => 'Angebotstitel',
  'proposals:kitchennotice'                   => 'Hinweis: Angebote werden in :1 erscheinen sobald der Kunde den Angebotslink besucht hat. Das heißt du kannst es bearbeiten solang du willst und er Kunde sieht es erst, wann du das möchstest.',
  /** End Proposals **/

  /** Tasks **/
  'tasks:task'                                => 'Aufgabe',
  'tasks:edit_succeeded'                      => 'Aufgabe erfolgreich bearbeitet.',
  'tasks:hours'                               => 'Stunden',
  'tasks:due_date'                            => 'Fälligkeitsdatum',
  'tasks:is_completed'                        => 'Abgeschlossen?',
  'tasks:timer'                               => 'Timer',
  'tasks:rate'                                => 'Satz',
  'tasks:default_rate'                        => 'Standardsatz',
  'tasks:entries'                             => 'Zeiteinträge',
  'tasks:view_entries'                        => 'Einträge ansehen',
  'tasks:edit_entry'                          => 'Zeiteintrag bearbeiten',
  'tasks:create'                              => 'Aufgabe hinzufügen',
  'tasks:create_sub'                          => 'Unteraufgabe hinzufügen',
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
  'tasks:timers_running'                      => 'Laufende Timer',
  'tasks:task_completed_by'                   => ':1 hat die <a href=":2">Aufgabe :3</a> am :4 fertiggestellt',
  'tasks:discussion'                          => 'Diskussion: ',
  'tasks:billed_hours'                        => 'Berechnete Stunden',
  'tasks:unbilled_hours'                      => 'Unberechnete Stunden',


  /** Users **/
  'users:create_user'                         => 'Benutzer anlegen',
  'users:confirm_delete_emphasised'           => 'Es gibt keinen Weg zurück!',

  /** Items **/
  'items:name'                                => 'Name des Postens',
  'items:description'                         => 'Beschreibung des Postens',
  'items:qty_hrs'                             => 'Stk. / h',
  'items:quantity'                            => 'Menge',
  'items:rate'                                => 'Satz',
  'items:tax_rate'                            => 'Steuersatz',
  'items:cost'                                => 'Kosten',
  'items:line_items'                          => 'Posten',
  'items:add'                                 => 'Posten hinzufügen',
  'items:added'                               => 'Posten hinzugefügt',
  'items:edit'                                => 'Posten bearbeiten',
  'items:noitemtitle'                         => 'Du hast bisher keine Posten!',
  'items:noitembody'                          => 'Du solltest nun einige Posten hinzufügen, es vereinfacht die Rechnungsstellung enorm.!',
  'items:delete_title'                        => 'Diesen Posten löschen?',
  'items:delete_message'                      => 'Bist du sicher, dass du den Posten ":1" löschen willst?',
  'items:type'                                => 'Art',
  'items:select_standard'                     => 'Standard',
  'items:select_expense'                      => 'Ausgabe',
  'items:add_expense_to_project'              => 'Ausgabe hinzufügen',
  'items:expenses'                            => 'Ausgaben',
  /** END Items **/

  /** Expenses **/
  'expenses:expenses'                         =>    'Ausgaben',
  'expenses:add'                              =>    'Ausgabe hinzufügen',
  'expenses:edit_expense'                     =>    'Ausgabe bearbeiten',
  'expenses:delete'                           =>    'Ausgabe löschen',
  'expenses:deleted'                          =>    'Ausgabe gelöscht',
  'expenses:all'                              =>    'Alle Ausgaben',
  'expenses:amount'                           =>    'Betrag',
  'expenses:supplier'                         =>    'Lieferant',
  'expenses:suppliers'                        =>    'Lieferanten',
  'expenses:category'                         =>    'Kategorie',
  'expenses:categories'                       =>    'Kategorien',
  'expenses:add_supplier'                     =>    'Lieferant hinzufügen',
  'expenses:supplier_added'                   =>    'Lieferant hinzugefügt',
  'expenses:edit_supplier'                    =>    'Lieferant bearbeiten',
  'expenses:add_category'                     =>    'Kategorie hinzufügen',
  'expenses:edit_category'                    =>    'Kategorie bearbeiten',
  'expenses:parent_category'                  =>    'Übergeordnete Kategorie',
  'expenses:filter'                           =>    'Ausgaben filtern',
  'expenses:start_date'                       =>    'Startdatum',
  'expenses:end_date'                         =>    'Enddatum',


  /** END Expenses **/

  /** Transactions **/
  'transactions:paymentcancelled'                 => 'Bezahlung abgebrochen', /*?*/
  'transactions:extrapaymentcancelled'            => 'Deine Bezahlung wurde abgebrochen.',
  'transactions:paymentreceived'                  => 'Zahlung erhalten!',
  'transactions:fee_applied'                      => 'Weil :1 eine Bearbeitungsgebühr verlangt haben wir einen Zusatzbetrag von :2% hinzugefügt.',
  'transactions:orderbeingprocessed'              => 'Bitte warten. Ihre Bestellung wird bearbeitet und sie werden zu :1 weitergeleitet.',
  'transactions:ifyouarenotredirected'            => 'Wenn sie nicht innerhalb von fünf Sekunden automatisch zu :1 weitergeleitet werden ...',
  'transactions:thankyouforyourpayment'           => 'Vielen Dank für ihre Zahlung. Sie sollten bald eine Bestätigung per E-Mail bekommen.',
  'transactions:ifyouhavefilesyouwillgetanemail'  => 'Wenn sie auf Dateien warten werden sie bald eine E-Mail mit links zu diesen Dateien bekommen.',
  'transactions:ifyoudonotreceiveemail'           => 'Wenn sie innerhalb der nächsten Stunde keine E-Mail erhalten wenden sie sich bitte an :1',
  /** End Transactions **/

  /** Timesheets **/
  'timesheet:taskname'                        => 'Aufgabenbezeichung',
  'timesheet:starttime'                       => 'Startzeit',
  'timesheet:endtime'                         => 'Endzeit',
  'timesheet:timeframe'                       => 'Zeitrahmen',
  'timesheet:duration'                        => 'Dauer',
  'timesheet:date'                            => 'Datum',
  'timesheet:forproject'                      => 'Zeiterfassungsbogen für Projekt ":1"',
  'timesheet:timesheet'                       => 'Zeiterfassungsbogen',
  'timesheet:for'                             => 'Zeiterfassungsbogen für:',
  'timesheet:totalbillable'                   => 'Gesamt berechenbare Stunden',
  'timesheet:view_pdf'                        => 'Zeiterfassungsbogen ansehen',
  'timesheet:user'                            => 'Benutzer',
  'timesheet:entries'                         => 'Einträge',
  'timesheet:no_entries'                      => 'Es gibt keine Zeiteinträge',
  /** End Timesheets **/


  /** Support Tickets **/

  'tickets:all_tickets'                       => 'Support-Tickets',
  'tickets:support_tickets'                   => "Support-Tickets",
  'tickets:pending'                           => 'Ausstehend',
  'tickets:open'                              => 'Offen',
  'tickets:resolved'                          => 'Gelöst',
  'tickets:closed'                            => 'Geschlossen',
  'tickets:respond'                           => 'Auf Ticket antworten',
  'tickets:ticket_options'                    => 'Ticket Options',
  'tickets:attachment'                        => 'Anhang',
  'tickets:updated_status'                    => ':1 hat den Ticket-Status zu :2 geändert',
  'tickets:add_a_new_ticket'                  => 'Ein neues Ticket hinzufügen',
  'tickets:create_a_new_ticket'               => 'Ein neues Ticket erstellen',
  'tickets:add_ticket'                        => 'Ticket hinzufügen',
  'tickets:assign_to_user'                    => 'Benutzer zuweisen',
  'tickets:select_client'                     => 'Kunde auswählen',
  'tickets:ticket_subject'                    => 'Betreff',
  'tickets:ticket_message'                    => 'Text',
  'tickets:ticket_priority'                   => 'Priorität',
  'tickets:ticket_status'                     => 'Status',
  'tickets:no_priority'                       => '-- keine Priorität --',
  'tickets:no_status'                         => '-- kein Status --',
  'tickets:no_posts'                          => 'Keine Nachricht.',

  /** End Support Tickets **/

  /** Frontend **/
  'frontend:hithere'                          => 'Hallo auch!',
  'frontend:followthemaillinkdude'            => 'Um ihre Rechnung zu betrachten müssen sie den gesamten Link in der E-Mail klicken. Z.B. :1.',
  'frontend:contactadminforassistance'        => 'Bitte tun sie das oder wenden sie sich für Unterstützung an :1 bei :2',
  /** End Frontend **/

  /** Settings **/

  'settings:task_statuses'                    => 'Aufgaben-Status',
  'settings:ticket_statuses'                  => 'Ticket-Status',
  'settings:ticket_priorities'                => 'Ticket-Prioritäten',
  'settings:background_color'                 => 'Hintergrundfarbe',
  'settings:text_color'                       => 'Textfarbe',
  'settings:text_shadow'                      => 'Textschatten',
  'settings:box_shadow'                       => 'Boxschatten',
  'settings:default_rate'                     => 'Standardsatz',
  'settings:allowed_extensions'               => 'Erlaubte Dateiendungen',
  'settings:comma_separated'                  => 'kommagetrennt',
  'settings:pdf_page_size'                    => 'PDF Seitengröße',
  'settings:default_invoice_notes'            => 'Standardrechnungsnotiz',
  'settings:default_invoice_title'            => 'Standardrechnungstitel',
  'settings:default_invoice_due_date'         => 'Standardfälligkeit für Rechnungen',
  'settings:autosave_proposals'               => 'Angebote automatisch speichern',
  'settings:default_invoice_due_date_explain' => 'Tage nachdem die Rechnung erstellt wurde. Wenn du kein Standarddatum willst einfach das Feld leer lassen.',
  'settings:testemailsettings'                => 'E-Mail-Einstellungen testen',
  'settings:kitchen_route'                    => 'Prefix für Kundenzugangslink',
  'settings:kitchen_route_explain'            => "(Vorschau: :1)",
  'settings:include_remittance_slip'          => 'Zahlschein',
  'settings:include_remittance_slip_explain'  => "Wenn ausgewählt werden Rechnungs-PDFs einen Zahlschein beinhalten.",
  'settings:items_per_page'                   => 'Elemente pro Seite',
  'settings:items_per_page_explain'           => 'Anzahl von Elementen (Rechnungen/Kostenvoranschläge/Angebote/Projekte/Aufgaben) die pro Seite gezeigt werden.',
  'settings:send_x_days_before'               => 'Standardwert für "Tage vorher versenden"',
  'settings:send_x_days_before_explain'       => 'Standardwert wie viele Tage vor Fälligkeit eine wiederkehrende Rechnung an den Kunden versandt wird.',
  'settings:file_to_import'                   => 'Datei zum Importieren',
  'settings:file_should_be_csv'               => 'Pancake versucht deine Datei automatisch zu verarbeiten und alles darin zu importieren. Falls Pancake deine Datei nicht verarbeiten kann sagt es dir bescheid und bietet dir die Option uns einige Informationen zuzusenden, so dass wir dafür sorgen können, dass Pancake auch mit deiner Datei arbeitet.',
  'settings:importnow'                        => 'Jetzt importieren!',
  'settings:whatimporting'                    => 'Was willst du importieren?',
  'settings:whatexporting'                    => 'Was willst du exportieren?',
  'settings:nouploadedimportfile'             => 'Du hast keine Datei für den Import hochgeladen.',
  'settings:import'                           => 'Import',
  'settings:importedclients'                  => ':1 Kunden wurden erfolgreich importiert.',
  'settings:importedprojects'                 => ":1 Projekte wurden erfolgreich importiert.",
  'settings:importedusers'                    => ":1 Benutzer wurden erfolgreich importiert.",
  'settings:importedinvoices'                 => ':1 Rechnungen wurden erfolgreich importiert.',
  'settings:importedtasks'                    => ':1 Aufgaben wurden erfolgreich importiert.',
  'settings:importedestimates'                => ':1 Kostenvoranschläge wurden erfolgreich importiert.',
  'settings:importedtime_entries'             => ':1 Zeiteinträge wurden erfolgreich importiert.',
  'settings:xwereduplicates'                  => ':1 waren Duplikate und wurden ignoriert.',
  'settings:import_desc'                      => 'Daten in Pancake importieren.',
  'settings:export'                           => 'Export',
  'settings:exportnow'                        => 'Jetzt exportieren!',
  'settings:importexport'                     => 'Import / Export',
  'settings:removelogo'                       => 'Logo entfernen',
  'settings:wrong_license_key'                => 'Der eingegebene Lizenzschlüssel ist ungültig.',
  'settings:noopenssl'                        => 'Dein Server hat kein OpenSSL konfiguriert. Das bedeutet, dass du keine E-Mails über Gmail oder Google Apps versenden kannst. Bitte kontaktiere deinen Webhoster und bitte um Aktivierung von OpenSSl.',
  'settings:logoremoved'                      => 'Das Logo wurde erfolgreich entfernt!',
  'settings:save'                             => 'Einstellungen speichern',
  'settings:logodimensions'                   => 'Das Logo kann in jeder Größe hochgeladen werden, es wird automatisch angepasst.',
  'settings:logoformatsallowed'               => 'BMP, PNG, JPG (JPEG) und GIF sind erlaubt.',
  'settings:ftp_user'                         => 'FTP Benutzer',
  'settings:ftp_pass'                         => 'FTP Passwort',
  'settings:ftp_path'                         => 'FTP Pfad',
  'settings:ftp_port'                         => 'FTP Port',
  'settings:ftp_pasv'                         => 'Passiver Modus?',
  'settings:nophpupdates'                     => 'Aufgrund deiner Serverkonfiguration musst du deine FTP-Zugangsdaten eingeben damit Pancake sich selbst updaten kann. Diese Informationen werden nur intern verwendet und niemals an jemanden übermittelt.',
  'settings:ftp_host'                         => 'FTP Host',
  'settings:uptodate'                         => 'Pancake ist aktuell (:1)',
  'settings:newversionavailable'              => 'Es ist eine neuere Version von Pancake verfügbar (:1)!',
  'settings:updatenow'                        => 'Jetzt Updaten!',
  'settings:checkforupdates'                  => "Auf verfügbare Updates prüfen",
  'settings:youneedtoconfigurefirst'          => 'Dein Pancake ist nicht dafür konfiguriert sich selbst upzudaten. Bitte gib unten deine FTP-Zugangsdaten ein und speichere die Einstellungen.<br /> Pancake wird dich dann das Update machen lassen.',
  'settings:general'                          => 'Allgemein',
  'settings:emails'                           => 'E-Mails',
  'settings:email_templates'                  => 'E-Mails',
  'settings:taxes'                            => 'Steuern',
  'settings:currencies'                       => 'Währungen',
  'settings:branding'                         => 'Branding',
  'settings:payment_methods'                  => 'Zahlungen',
  'settings:feeds'                            => 'Feeds',
  'settings:api_keys'                         => 'API Keys',

  'settings:time_entry_times'                 => "Zeiteintrag Zeiten",
  "settings:include_dates_and_times_in_line_items" => 'Daten und Zeiten in der Beschreibung von Zeiteinträgen ausgeben.',
  "settings:when_generating_invoice"          => "Bei der Erstellung von Rechnungen einen Posten pro",
  "settings:use_utf8_font"                    => "UTF8-Schriften in PDFs",
  "settings:use_utf8_font_explanation"        => "Bei Zeichensatzfehlern in PDFs.",
  "settings:pdf_attachments"                  => "PDF Anhänge",
  "settings:pdf_attachments_explanation"      => "Pancake wird die entsprechenden PDFs an Rechnungs-, Kostenvoranschlags- und Angebots-Mails anhängen.",
  ""                                          => "",

  'settings:site_name'                        => 'Seitenname',
  'settings:language'                         => 'Sprache',
  'settings:timezone'                         => 'Zeitzone',
  'settings:currency'                         => 'Währung',
  'settings:theme'                            => 'Frontend Theme',
  'settings:admin_theme'                      => 'Admin Theme',
  'settings:date_format'                      => 'Datumsformat',
  'settings:time_format'                      => "Zeitformat",
  'settings:task_time_interval'               => 'Zeitrundung (leer lassen für keine Rundung)',
  'settings:task_time_interval_description'   => '(z.B.. 00:30 oder 0.5 - alle Zeit-Einträge werden bei der Berechnung für eine Rechnung auf die nächste halbe Stunde aufgerundet.)',
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
  'settings:frontend_css'                     => 'Eigenes CSS für das Frontend',
  'settings:backend_css'                      => 'Eigenes CSS für das Backend',

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
  'settings:add_tax'                          => 'Eine weitere Steuer hinzufügen',

  'settings:currency_name'                    => 'Name der Währungs',
  'settings:currency_code'                    => 'Währungscode',
  'settings:exchange_rate'                    => 'Wechselkurs',
  'settings:add_currency'                     => 'Eine weitere Währung hinzufügen',
  /** End Settings **/

  'update:ifyourenotsurecontactus'            => 'Wenn du nicht sicher bist was zu tun ist, bitte <a href="https://pancakeapp.com/account/support/ticket/new">erstellle ein <strong>kostenloses</strong> Support Ticket</a>.',
  'update:youmodified'                        => 'Du hast verändert',
  'update:youdeleted'                         => 'Du hast gelöscht',
  'update:loadingpleasewait'                  => 'Lade. Bitte warten ...',
  'update:errordownloading'                   => 'Ein Update für Pancake ist verfügbar, aber Pancake hat Probleme mit dem Download.',
  'update:herearestepstofix'                  => 'Hier sind einige Schritte die du versuchen kannst um das zu beheben:',
  'update:makesureuploadsiswritable'          => 'Stell sicher, dass dein Upload-Verzeichnis beschreibbar ist (CHMOD 0777).',
  'update:deletepancakesystemupdate'          => 'Lösche das pancake-update-system Verzeichnis (im uploads Verzeichnis), inklusive aller Inhalte.',
  'update:loadpancakeagain'                   => 'Lade Pancake neu. Wenn der Fehler weiterhin besteht ändere den Besitzer des Pancake Verzeichnisses (chown) so, dass es identisch mit dem Webserver-Benutzer ist. Wenn du das nicht tun kannst, oder nicht weißt wie du das tun kannst schreib uns eine E-Mail an support@pancakeapp.com, wir werden versuchen dir zu helfen.',
  'update:whatschanged'                       => 'Was gibt\'s neues in :1',
  'update:ftp_conn'                           => 'Pancake konnte keine Verbindung zum FTP-Host herstellen.',
  'update:ftp_login'                          => 'Pancake konnte sich nicht via FTP einloggen (falsches Passwort/Benutzername?).',
  'update:ftp_chdir'                          => 'Pancake konnnte den FTP-Pfad nicht setzen (der Pfad existiert möglicherweise nicht).',
  'update:ftp_no_uploads'                     => 'Pancake konnte keinen Berechtigung zum Upload der Dateien via FTP bekommen.',
  'update:ftp_indexwrong'                     => 'Der eingegebene Pfad ist falsch. Es sollte der Pfad zum Pancake-Verzeichnis sein.',
  'update:ftp_indexnotfound'                  => 'Der eingegebene Pfad ist falsch. Es sollte der Pfad zum Pancake-Verzeichnis sein.',
  'update:update_conflict'                    => 'Du hast seit dem letzten Update einige Dateien verändert. Um deine Anpassungen zu sichern hier eine Liste mit den geänderten Dateien, die sich nicht mit dem letzten Upgrad verstehen.',
  'update:update_no_perms'                    => 'Pancake hat weder genug Rechte um sich selbst zu aktualisieren noch hat es Zugang zu einem FTP-Account von dem es sich aktualisieren könnte. Das Update kann nicht fortgesetzt werden.',
  'update:review_files'                       => 'Bitte kontrolliere diese Dateien und mache Backups davon before du weiter machst. Nachdem das Update fertig ist musst du deine Änderungen wieder in diese integrieren. Biite ersetze nicht nur die aktualisierten Dateien mit deinen alten, da das den Pfannkuchen verbrennen kann.',
  'update:internetissues'                     => 'Pancake kann keine Verbindung zum Internet herstellen.',
  'update:pancakeneedsinternet'               => 'Damit Pancake wie vorgesehen funktionieren kann muss dein Server ihm erlauben einige Informationen aus dem Internet abzurufen (Port 80).',
  'update:maybefirewall'                      => 'Es scheint, dass dein Server Pancake verbietet mit dem Internet zu kommunuzieren. Das könnte eine Firewall auf deinem Server sein. Bitte frag deinen Webhoster um Hilfe und bitte darum PHP Zugang zu :1 zu erlauben.',
  'update:nointernetaccess'                   => 'Kein Internetzugang',
  'update:pancakeupdated'                     => 'Pancake wurde von :1 zu :2 aktualisiert',
  /** Action Logger  **/

  /** End Action Logger **/

  /** Partial Payments **/
  'partial:partialpayments'                   => 'Zahlungsplan',
  'partial:totalamounttobepaid'               => 'Gesamtbetrag, den der Kunde bezahlen muss',
  'partial:amountlefttobeadded'               => 'Restbetrag, der dem Zahlungsplan noch hinzugefügt werden muss',
  'partial:amounttoobig'                      => 'Betrag, der vom Zahlungsplan entfernt werden muss',
  'partial:noamountneeded'                    => 'Dein Zahlungsplan ist vollständig.',
  'partial:amount'                            => 'Betrag',
  'partial:add_payment'                       => 'Zahlung hinzufügen',
  'partial:dueon'                             => 'Fällig am',
  'partial:addanother'                        => 'Einen weiteren Teil zu dieser Zahlung hinzufügen',
  'partial:disabledforrecurring'              => 'Wiederkehrende Rechnungen sind auf Einmalzahlungen beschränkt',
  'partial:paymentdetails'                    => 'Zahlungsdetails',
  'partial:wrongtotal'                        => 'Die Summe der Teile deines Zahlungsplanes ergeben nicht die Summe, die du berechnest.',
  'partial:problemsaving'                     => 'Beim Speichern des Zahlplanes ist ein Fehler aufgetreten. Bitte versuche es erneut.',
  'partial:wrongtotalbutsaved'                => 'Die Summe der Teile deines Zahlungsplanes ergeben nicht die Summe, die du berechnest.<br />Die Änderungen an der Rechnung wurden gespeichert, aber du musst den Zahlungsplan berichtigen.',
  'partial:problemsavingbutsaved'             => 'Beim Speichern des Zahlplanes ist ein Fehler aufgetreten. Bitte versuche es erneut.<br />Die Änderungen an der Rechnung wurden gespeichert, der Zahlungsplan aber nicht.',
  'partial:savepaymentdetails'                => 'Zahlungsdetails speichern',
  'partial:partpaidthanks'                    => 'Dieser Teil der Rechnung wurde bezahlt. Danke.',
  'partial:proceedtopayment'                  => 'Weiter zur Zahlung',
  'partial:topaynowgoto'                      => 'Um jetzt zu zahlen gehe zu :1',
  'partial:pay_part_x_now'                    => "Bezahlten sie jetzt Teil #:1 ihrer Rechnung",
  'partial:dueondate'                         => 'fällig am :1',
  'partial:paymentmethod'                     => 'Zahlungsart',
  'partial:paymentdate'                       => 'Zahlungsdatum',
  'partial:paymentstatus'                     => 'Zahlungsstatus',
  'partial:transactionid'                     => 'Transaktions-ID',
  'partial:markaspaid'                        => 'Als bezahlt markieren',
  'partial:transactionfee'                    => 'Bearbeitungsgebühr',
  /** End Partial Payments **/

  /** Payment Gateways **/
  'paypal:clickhere'                          => 'Hier klicken um weiter zu kommen',
  'authorize:transaction_key'                 => 'Transaction Key', /*?*/
  'paypal:email'                              => 'PayPal E-Mail',
  'paypal:fee'                                => 'PayPal Gebühr (%)',
  'paypalpro:paypalpro'                       => 'PayPal Payments Pro (BETA)',
  'paypalpro:viacreditcard'                   => 'Mit Kreditkarte bezahlen',
  'cash:cash'                                 => 'Bar',
  'check:check'                               => 'Scheck',
  'moneyorder:moneyorder'                     => 'Zahlungsanweisung',
  'creditcard:creditcard'                     => 'Kreditkarte',
  'banktransfer:banktransfer'                 => 'Überweisung',
  'gateways:errorupdating'                    => 'Beim Aktualisieren der Einstellungen zu den Bezahlmethoden ist ein Fehler aufgetreten. Bitte wende dich an den Support.',
  'gateways:paymentmethods'                   => 'Zahlungsarten',
  'gateways:selectpaymentmethod'              => 'Zahlungsart auswählen',
  'gateways:nogatewayused'                    => 'Keine Zahlungsart genutzt: Teil ist unbezahlt',
  'gateways:completed'                        => 'Abgeschlossen',
  'gateways:refunded'                         => 'Rückerstattet',
  'gateways:unpaid'                           => 'Unbezahlt',
  'gateways:paymentrejected'                  => ':1 Zahlung zurückgewiesen',
  'gateways:rejectedemail'                    => 'Pancake wurde von :1 über eine Zahlung von einem Kunden (:2) benachrichtigt, diese wurde jedoch von :1 zurückgewiesen.',
  'gateways:pending'                          => 'Ausstehend',
  'gateways:returntowebsite'                  => 'Zurück zu :1',
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
  'kitchen:add_a_comment'                     => 'Kommentar hinzufügen',
  'kitchen:kitchen_name'                      => 'Kundenbereich',
  'kitchen:pleaselogin'                       => 'Bitte geben sie ihr Passwort an um Zugriff auf ihr Konto zu erhalten',
  'kitchen:nocomments'                        => 'Bisher keine Kommentare.',
  'kitchen:comment'                           => 'Kommentar',
  'kitchen:comments'                          => 'Kommentare',
  'kitchen:comments_x'                        => 'Kommentare (:1)',
  'kitchen:file'                              => 'Datei',
  'kitchen:submitcomment'                     => 'Kommentar hinzufügen',
  'kitchen:attachment'                        => 'Anhang',
  'kitchen:saidon'                            => 'sagte am :1, um :2',
  'kitchen:subjectinvoice'                    => 'Neuer Kommentar zu Rechnung #',
  'kitchen:subjectestimate'                   => 'Neuer Kommentar zu Kostenvoranschlag #',
  'kitchen:subjectproject'                    => 'Neuer Kommentar zu Projekt:',
  'kitchen:subjecttask'                       => 'Neuer Kommentar zu Aufgabe:',
  'kitchen:subjectproposal'                   => 'Neuer Kommentar zu Angebot:',
  'kitchen:backtodashboard'                   => 'Zurück zur Übersicht',
  'kitchen:client_welcome'                    => 'Kundenbereich für:',
  'kitchen:urltosend'                         => 'URL des Kundenbereichs',
  'kitchen:nopassphrase'                      => 'Momentan ist kein Kundenpasswort gesetzt. Das heißt, jeder der die URL kennt kann auf den Kundenbereich zugreifen. Wenn du dies mit einem einfach Passwort sichern willst bearbeite die Kundeneinstellungen und lege dort eins fest.',
  'kitchen:passphraseset'                     => 'Dieser Kunde hat ein Passwort gesetzt',
  'kitchen:passphrase'                        => 'Passwort',
  'kitchen:description'                       => 'Diese URL kannst du deinem Kunden schicken, damit er auf seinen Kundenbereich zugreifen kann, wo er Dinge wie Projekte und Rechnungen, die du sichtbar gemacht hast, einsehen kann.',
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
  'store:error1002'                           => "Beim Versuch deine Kreditkarte zu belasten trat ein Fehler auf. Versuche es später erneut.",
  'store:error1003'                           => "Du hast eine ungültige Anfrage gemacht.",

  'email_templates:new_invoice'               => 'Neue Rechnung',
  'email_templates:new_estimate'              => 'Neuer Kostenvoranschlag',
  'email_templates:new_proposal'              => 'Neues Angebot',
  'email_templates:invoice_payment_notification_for_admin' => 'Zahlungsnachricht (an admin gesendet)',
  'email_templates:invoice_payment_notification_for_client' => 'Nachricht über Zahlungsempfang (an Kunden gesendet)',
  'email_templates:new_ticket'                => 'Neues Ticket',
  'email_templates:new_ticket_invoice'        => 'Neue Ticket-Rechnung',
  'email_templates:ticket_updated'            => 'Ticket bearbeitet',
  'email_templates:ticket_status_updated'     => 'Ticketstatus geändert',
  'email_templates:assigned_to_task'          => "Aufgabe zugewiesen",
  'email_templates:assigned_to_milestone'     => "Milestone zugewiesen",
  'email_templates:new_comment'               => "Neuer Kommentar",

  'global:timer_app'                          => "Pancake Timer App",
  'global:there_is_no_activity'               => "Es gibt hier keine Teamaktivitäten anzuzeigen.",
  'global:there_are_no_tasks_assigned_to_you' => "Es sind Dir keine Aufgaben zugewiesen.",

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
  "tickets:unknown_error_ticket_not_altered" => "Ein unbekannter Fehler ist aufgetreten. Das Ticket wurde nicht verändert.",
  # End v4.1.3 changes

  # Begin v4.1.4 changes
  "tasks:starting_timer" => "Timer starten",
  "tasks:stopping_timer" => "Timer stoppen",
  "global:all_comments" => "Alle Kommentare",
  "dashboard:view_all_comments" => "Alle Kommentare ansehen",
  "dashboard:latest_comments" => "Letzte Kommentare",
  "dashboard:written_by" => "Geschrieben von :1 am :2",
  "dashboard:client_activity" => "Kunden-Aktivität",
  "dashboard:view_all_client_activity" => "Alle Kunden-Aktivitäten",
  "dashboard:team_activity" => "Team-Aktivität",
  "dashboard:view_all_team_activity" => "Alle Team-Aktivitäten sehen",
  "dashboard:my_tasks" => "Meine Aufgaben",
  "dashboard:view_all_my_tasks" => "Alle meine Aufgaben ansehen",
  "dashboard:what_the_team_is_working_on" => "Woran das Team gerade arbeitet.",
  # End v4.1.4 changes

  # Begin v4.1.6 changes
  "global:save_milestone" => "Meilenstein speichern",
  "global:save_task" => "Aufgabe speichern",
  "global:private_comment" => "Dieser Kommentar ist privat, der Kunde kann ihn nicht sehen.",
  "global:clients_cant_see_private" => "Kunden können keine privaten Kommentare sehen.",
  "global:is_private" => "Privat?",
  # End v4.1.6 changes

  # Begin v4.1.7 changes
  "tickets:disable_client" => "-- Support Tickets abschalten --",
  # End v4.1.7 changes

  # Begin v4.1.8 changes
  "global:css" => "Eigenes CSS",
  "global:js" => "Eigenes JavaScript",
  "global:js_explanation" => "Du kannst jQuery benutzen. Der Code wird direkt vor &lt;/body&gt; eingefügt.",
  "settings:frontend_js" => "Eigenes Javascript für das Frontend",
  "settings:backend_js" => "Eigenes Javascript für das Backend",
  # End v4.1.8 changes

  # Begin v4.1.9 changes
  "proposals:estimate_number_and_amount" => "Kostenvoranschlag #:1 (:2)",
  # End v4.1.9 changes

  # Begin v4.1.10 changes
  "clients:delete" => "Kunden löschen",
  # End v4.1.10 changes

  # Begin v4.1.11 changes
  "global:nolongerexists" => "[EXISTIERT NICHT MEHR]",
  "global:billed_amount" => "Berechneter Betrag",
  "global:unbilled_amount" => "Unberechneter Betrag",
  "global:is_billed" => "Berechnet?",
  # End v4.1.11 changes

  # Begin v4.1.14 changes
  "settings:year_start" => "Beginn des Geschäftsjahres",
  "dashboard:since_explanation" => "Seit :1",
  # End v4.1.14 changes

  # Begin v4.1.15 changes
  "export:invoices_csv" => "Rechnungen (CSV)",
  # End v4.1.15 changes

  # Begin v4.1.17 changes
  "projects:createdtemplate" => "Projektvorlage erstellt. Du kannst nun Projekte auf dieser Vorlage erstellen.",
  "projects:delete_template" => "Vorlage löschen.",
  "projects:deleted_template" => "Erfolg! Vorlage gelöscht.",
  # End v4.1.17 changes

  # Begin v4.1.19 changes
  "export:expenses_csv" => "Ausgaben (CSV)",
  "export:clients_csv" => "Kunden (CSV)",
  "projects:expense_date" => "Datum der Ausgabe",
  # End v4.1.19 changes

  # Begin v4.1.20 changes
  "clients:can_create_support_tickets" => "Dem Kunden erlauben Support-Tickets zu erstellen?",
  "tickets:submit_new" => "Ticket hinzufügen",
  "global:cancel" => "Abbrechen",
  "global:timers" => "Timer",
  "global:more" => "Mehr",
  # End v4.1.20 changes

  # Begin v4.1.23 changes
  "global:search" => "Suche",
  "authorize:api_login_id" => "API Login ID",
  "authorize:api_login_id_description" => "Du kannst das bei Authorize.net unter Account > API Login ID and Transaction Key finden.",
  "authorize:md5_hash" => "MD5-Hash",
  "authorize:md5_hash_description" => "Standardmäßig ist das deine API Login ID. Du kannst sie bei Authorize.net unter Account > MD5-Hash ändern. Wenn dort 'Hash Value Set: No' steht, lasse das leer.",
  "transactions:paymentfailed" => "Zahlung fehlgeschlagen",
  "transactions:extrapaymentfailed" => "Bei dem Versuch die Zahlung zu verarbeiten ist ein unbekanntes Problem aufgetreten. Bitte kontaktiere :1 bei :2 für Hilfestellung.",
  # End v4.1.23 changes

  # Begin v4.1.24 changes
  "projects:tracked" => "Erfasst",
  "settings:accounting_type" => "Sortierung für Berichte",
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
  "login:username_email" => "E-Mail",
  # End v4.1.28 changes

  # Begin v4.1.31 changes
  "settings:when_new_updates_are_available" => "Wenn neue Aktualisierungen verfügbar sind",
  "settings:dont_install_just_notify_me" => "Nicht installieren, nur benachrichtigen",
  "settings:install_automatically" => "Automatisch installieren",
  "settings:loading_update_details" => "Lade Aktualisierungs-Details... Dies kann ein oder zwei Minuten dauern. Du kannst jederzeit neu laden.",
  "settings:updating_please_wait" => "Aktualisierung läuft. Bitte warten.\nDie Seite wird neu geladen sobald die Aktualisierung abgeschlossen ist.",
  "settings:will_have_to_overwrite_single_file" => "Pancake wird eine Datei überschreiben, die du manuell geändert hast.",
  "settings:will_have_to_overwrite_multiple_files" => "Pancake wird :1 Dateien überschreiben, die du manuell geändert hast.",
  "settings:checking_for_updates" => "Suche nach Aktualisierungen, bitte warten. Diese Seite wird automatisch neu geladen.",
  "settings:description" => "Speichere deine geänderten Einstellungen bevor du den Tab wechselt oder die Seite verlässt.",
  "settings:business_identities" => "Geschäftsidentitäten",
  "settings:business_name" => "Name des Geschäfts",
  "settings:new_business" => "Neues Geschäft",
  "settings:business_identity" => "Geschäftsidentität",
  "settings:business_identity_explanation" => "Der Kunde wird die obenstehende Geschäftsidentität auf allen E-Mails, PDFs und Seiten sehen.",
  # End v4.1.31 changes

  # Begin v4.1.33 changes
  "settings:have_been_updated" => 'Die Einstellungen wurden aktualisiert.',
  "tasks:all" => "Alle Aufgaben",
  "projects:progress" => "Fortschritt",
  "expenses:name" => "Name der Ausgabe",
  "tasks:add_hours_to" => "Füge Stunden zu :1 hinzu",
  "global:today" => "Heute",
  "global:yesterday" => "Gestern",
  "global:other" => "Andere",
  "global:now" => "Jetzt",
  "timesheet:view_for_clients" => "Zeiterfassungsbogen ansehen (für Kunden)",
  "global:not_billed_yet" => "Noch nicht berechnet.",
  "tasks:total_logged_time" => "Gesamte getrackte Zeit",
  "global:biweekly" => "Zweiwöchentlich",
  # End v4.1.33 changes

  # Begin v4.2 changes
  'settings:default_task_due_date' => 'Standardfälligkeitsdatum für Aufgaben',
  'settings:default_task_due_date_explain' => "Tage nachdem eine Aufgabe erstellt wurde. Wenn du kein Standarddatum verwenden willst lasse das Feld einfach leer.",
  # End v4.2 changes

  # Note: 4.2.x brought changes to the language file that weren't appended to the end of the file.
  # If you're updating your translation, make sure to check out a diff of the language file, instead of relying on just checking the bottom of the file.

  # Begin v4.2.4 changes
  "expenses:sort_or_filter" => "Ausgaben sortieren/filtern",
  "expenses:show"           => "Ausgaben anzeigen",
  "global:sort_by"          => "Sortieren nach",
  "global:sort_order"       => "Sortierreihenfolge",
  "global:asc"              => "Aufsteigend (A-Z)",
  "global:desc"             => "Absteigend (Z-A)",
  # End v4.2.4 changes

  # Begin v4.3.0 changes
  "settings:tax_compound"   => "Zusammengesetzt?",
  "settings:no_tax"         => "Keine Steuer",
  "settings:default_taxes"  => "Standardsteuer",
  "global:and"              => "und",
  "global:tax"              => "Steuer",
  # End v4.3.0 changes

  # Begin v4.3.6 changes
  "global:youarenotallowed" => "Du hast keine Berechtigung diese Seite zu betrachten.",
  # End v4.3.6 changes

  # Begin v4.3.7 changes
  'settings:notify_email'   => 'Support E-Mail',
  'settings:billing_email'  => 'Rechnungs E-Mail',
  'settings:brand_name'     => 'Markenname',
  'settings:admin_name'     => 'Administratorname',
  'settings:brand_name_explanation'     => 'Dies ist der Name den deine Kunden sehen sollen. Er wird überall, außer auf Rechnungen, angezeigt.',
  'settings:business_name_explanation'  => 'Dies ist der eingetragene Name des Gewerbes. Er wird auf Rechnungen angezeigt.',
  'settings:admin_name_explanation'     => 'Standardmäßig erscheint das am Ende der E-Mails an Kunden.',
  'settings:billing_email_explanation'  => 'Dies ist die Absenderadresse für E-Mails mit Rechnungen, Kostenvoranschlägen oder Angeboten.',
  'settings:notify_email_explanation'   => 'Dies ist die Absenderadresse für Kommentarbenachrichtigungen und Supporttickets.',
  'settings:show_name_along_with_logo'  => 'Zeige den Markennamen neben dem Logo?',
  'dashboard:your_projects'             => 'Deine Projekte',
  'dashboard:today'                     => 'Heute',
  'dashboard:team_activity'             => 'Updates',
  'dashboard:snapshot' => 'Snapshot',
  'invoices:frequency' => 'Frequenz',
  'invoices:auto_send' => 'Automatisch senden?',
  'invoices:send'      => 'Senden',
  'invoices:days_before_invoice_is_due' => 'Tage bevor die Rechnung fällig ist',
  'invoices:cannot_change_recurrences'  => 'Die Wiederholungseinstellungen können noch bei einer Rechnung geändert werden, die eine Wiederholung einer anderen Rechnung ist.',
  # End v4.3.7 changes

  # Begin v4.3.8 changes
  'email_templates:client_area_details' => 'Details für den Kundenbereich',
  'settings:always_https' => 'HTTPS erzwingen?',
  'settings:always_https_explanation' => 'Dadurch wird Pancake immer über HTTPS geladen. Nur zu empfehlen, wenn ein SSL-Zertifikat installiert ist und Pancake über HTTPS erreicht werden kann.',
  'settings:remittance_slip' => 'Zahlschein',
  'invoices:mail_to' => 'Senden an',
  'clients:send_client_area_email' => 'Details für den Kundenbereich senden',
  'clients:you_cannot_send' => 'Die Kundenbereichsdetails können nicht an den Kunden versendet werden, da er/sie keine E-Mail-Adresse hat.',
  # End v4.3.8 changes

  # Begin v4.4.0 changes
  'invoices:discount' => 'Rabatt',
  'invoices:discount_explain' => 'Für Prozentsätze ein % anfügen.',
  'invoices:addedconf' => 'Du hast die Rechnung # <strong>:1</strong> mit einem Gesamtbetrag von <strong>:2</strong> (:3 inkl. Steuern) für :4:5 hinzugefügt.',
  'estimates:addedconf' => 'Du hast Kostenvoranschlag # <strong>:1</strong>, mit einem Gesamtbetrag von <strong>:2</strong> (:3 inkl. Steuern) für :4:5 hinzugefügt.',
  'credit_notes:edit_credit_note' => 'Bearbeite Gutschrift #:1',
  'credit_notes:create_credit_note' => 'Gutschrift erstellen',
  'global:credit_notes' => 'Gutschriften',
  'global:credit_note' => 'Gutschrift',
  'credit_notes:alltitle' => 'Alle Gutschriften',
  'credit_notes:nocredit_notesforthefilteredclient' => 'Es gibt keine Gutschriften für :1.',
  'credit_notes:no_credit_notes' => 'Es gibt keine Gutschriften.',
  'credit_notes:create' => 'Gutschrift erstellen',
  'credit_notes:no_credit_notes_body' => 'Das solltest Du ändern. Willst du jetzt eine erstellen?',
  'credit_notes:edit' => 'Gutschrift bearbeiten',
  'credit_notes:credit_note_number' => 'Gutschrift #:1',
  'credit_notes:credit_note_date' => 'Datum der Gutschrift',
  'credit_notes:delete_title' => 'Diese Gutschrift löschen?',
  'credit_notes:delete_message' => 'Bist Du sicher, dass du diese Gutschrift löschen willst?',
  'credit_notes:addedconf' => 'Du hast Gutschrift #<strong>:1</strong>, mit einem Gesamtbetrag von <strong>:2</strong> (:3 inkl. Steuern) für :4:5 hinzugefügt.',
  'credit_notes:send_now_title' => 'Gutschrift jetzt senden?',
  'credit_notes:send_now_body' => "Fülle das Formular unten aus und wir werden diese Gutschrift für Dich zustellen.",
  'email_templates:new_credit_note' => 'Neue Gutschrift',
  'credit_notes:send_now' => 'Gutschrift senden',
  'credit_notes:preview' => 'Gutschrift Vorschau',
  'credit_notes:duplicated' => "Gutschrift #:1 dupliziert. Die neue Gutschrift hat die Nummer #:2.",
  'credit_notes:client_viewed' => ":1 hat <a href=':2'>Gutschrift #:3</a> am :4 gesehen",
  'invoices:make_bulk_payment' => 'Massenzahlung vornehmen',
  'global:success' => 'Erfolg!',
  'clients:view' => 'Kunde anstehen',
  'invoices:store_bulk_payment' => 'Massenzahlung speichern', /* ? "speichern" ist hier vielleicht nicht unbedingt das richtige Wort. */
  'invoices:x_invoices' => ':1 Rechnungen',
  'invoices:amount_to_pay' => 'Betrag, der als bezahlt markiert werden soll',
  'invoices:bulk_payment_added' => "Die Massenzahlung wurde erfolgreich hinzugefügt.",
  'clients:credit_balance_currently' => "Guthaben (momentan :1)",
  'clients:has_no_unpaid_invoices' => ":1 hat keine unbezahlten Rechnungen.",
  'invoices:send_payment_notification' => "Eine Zahlungsbestätigung per E-Mail an den Kunden senden?",
  'invoices:send_bulk_payment_notification' => "Zahlungsbestätigungen an den Kunden senden?",
  'invoices:specify_bulk_payment_details' => "Lege die Details der Zahlung fest und wähle aus auf welche Rechnungen sich die Zahlung bezieht.",
  'global:credit_balance' => "Guthaben",
  # End v4.4.0 changes

  # Begin v4.4.1 changes
  'credit_notes:view' => 'Gutschrift ansehen',
  # End v4.4.1 changes

  # Begin v4.4.3 changes
  'tickets:ticket_number' => "Ticket #:1",
  'settings:ticket_status_for_sending_invoice' => "Ticket-Status für Rechungsstellung",
  'settings:ticket_status_for_sending_invoice_description' => "Wenn ein zu zahlendes Ticket auf diesen Status gestellt wird, wird automatisch eine Rechnung generiert und an den Kunden gesendet.",
  'settings:never_send_ticket_invoices_automatically' => "-- Ticket-Rechnungen niemals automatisch senden --",
  # End v4.4.3 changes

  # Begin v4.4.6 changes
  'expenses:added' => "The expense was added successfully.",
  # End v4.4.6 changes

  # Begin v4.4.9 changes
  'global:error_submitting_ajax' => "An unknown error occurred while trying to submit this form. Please try again later. If the error persists, please start a free support ticket at pancakeapp.com.",
  'store:error1004' => "An unknown error occurred while trying to purchase this item. Please try again later. If the error persists, please start a free support ticket at pancakeapp.com.",
  # End v4.4.9 changes

  # Begin v4.5.0 changes
  'invoices:pancake_will_automatically_change_is_viewable' => "Dies wird automatisch auf 'Ja' gestellt, wenn die Rechnung an den Kunden gemailt wurde.",
  "global:incorrect_login" => "Die eingegebene Kombination aus Benutzername und Passwort ist ungültig.",
  # End v4.5.0 changes
);

/** End of file: pancake_lang.php **/
