<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Name:  Ion Auth Lang - English
* 
* Author: Ben Edmunds
* 		  ben.edmunds@gmail.com
*         @benedmunds
* 
* Location: http://github.com/benedmunds/ion_auth/
*          
* Created:  03.14.2010 
* 
* Description:  English language file for Ion Auth messages and errors
* 
* @translation: Marius Kildedal https://kildedal.no
*/

// Account Creation
$lang['account_creation_successful'] 	  	 = 'Konto opprettet';
$lang['account_creation_unsuccessful'] 	 	 = 'Kan ikke opprette konto';
$lang['account_creation_duplicate_email'] 	 = 'Epost er allerede brukt eller ugyldig';
$lang['account_creation_duplicate_username'] 	 = 'Brukernavn er i bruk eller ugyldig';


// Password
$lang['password_change_successful'] 	 	 = 'Passord er nå endret';
$lang['password_change_unsuccessful'] 	  	 = 'Klarer ikke endre passordet';
$lang['forgot_password_successful'] 	 	 = 'Hvordan endre passord, er sendt på mail';
$lang['forgot_password_unsuccessful'] 	 	 = 'Klarer ikke å endre passord';
$lang['cant_send_email'] = "Det oppsto et problem når vi skulle sende eposten.";

// Activation
$lang['activate_successful'] 		  	 = 'Konto aktivert';
$lang['activate_unsuccessful'] 		 	 = 'Klarer ikke aktivere kontoen';
$lang['deactivate_successful'] 		  	 = 'Konto er deaktivert';
$lang['deactivate_unsuccessful'] 	  	 = 'Klarer ikke deaktivere kontoen';
$lang['activation_email_successful'] 	  	 = 'Aktiverings epost er sendt';
$lang['activation_email_unsuccessful']   	 = 'Klarer ikke å sende aktiverings epost';

// Login / Logout
$lang['login_successful'] 		  	 = 'Du er nå logget inn';
$lang['login_unsuccessful'] 		  	 = 'Noe er feil!';
$lang['logout_successful'] 		 	 = 'Du er nå avlogget';
  
// Account Changes
$lang['update_successful'] 		 	 = 'Kontoinformasjonen er nå oppdatert';
$lang['update_unsuccessful'] 		 	 = 'Klarer ikke oppdatere kontoinformasjonen';
$lang['delete_successful'] 		 	 = 'Bruker slettet';
$lang['delete_unsuccessful'] 		 	 = 'Klarer ikke slette bruker';