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

    /** Global Words **/
    'global:overview' => 'Overview',
    'global:error' => 'Error',
    'global:pancakeby7am' => 'Pancake :1',
    'global:allrelatedmediacopyright' => 'Pancake and all related media is Copyright :1 :2',
    'global:insecure_action' => 'Insecure action was attempted but caught',
    'global:disabled_in_demo' => 'Some features on this page are disabled for the demo.',
    'global:estimates' => 'Estimates',
    'global:estimate' => 'Estimate',
    'global:incomplete_tasks' => 'Incomplete Tasks',
    'global:completed_tasks' => 'Completed Tasks',
    'global:projects' => 'Projects',
    'global:tickets' => 'Tickets',
    'global:project' => 'Project',
    'global:upload_failed' => 'There was a problem uploading your file. Please try again. If the problem persists, please contact support@pancakeapp.com.',
    'global:upload_not_allowed' => 'The file type of the file you were trying to upload is not allowed. If you need to upload a file of that type, please compress it into a .zip or any other archive format you might find appropriate.',
    'global:copied' => 'Copied!',
    'global:sentbutunpaid' => 'Outstanding (Sent but unpaid)',
    'global:task' => 'Task',
    'global:clients' => 'Clients',
    'global:access_denied' => "Access Denied",
    'global:users' => 'Users',
    'global:send_to_client' => 'Send to client',
    'global:couldnotsendemail' => 'Could not send the email.  Please check your settings.',
    'global:emailsent' => 'Email has been sent!',
    'global:yes' => 'Yes',
    'global:no' => 'No',
    'global:notyetsent' => 'Not sent to client',
    'global:dontshowagain' => "Don't show this again",
    'global:enable' => 'Enable',
    'global:is_enabled' => 'Enabled?',
    'global:is_completed' => 'Completed?',
    'global:Y' => 'Y',
    'global:N' => 'N',
    'global:notes' => 'Notes',
    'global:description' => 'Description',
    'global:backtoadmin' => 'Back to Admin',
    'global:type' => 'Type',
    'global:name' => 'Name',
    'global:first_name' => 'First Name',
    'global:last_name' => 'Last Name',
    'global:company' => 'Company',
    'global:for' => 'for',
    'global:from' => 'from',
    'global:phone' => 'Phone',
    'global:email' => 'Email',
    'global:contacts' => 'Contacts',
    'global:week' => 'Weekly',
    'global:na' => 'N/A',
    'global:quarterly' => 'Quarterly',
    'global:statistics' => "Statistics",
    'global:month' => 'Monthly',
    'global:year' => 'Yearly',
    'global:fax' => 'Fax',
    'global:mobile' => 'Mobile',
    'global:address' => 'Address',
    'global:api_key' => 'API Key',
    'global:website' => 'Website',
    'global:action' => 'Action',
    'global:items' => 'Items',
    'global:reusableinvoiceitems' => 'Reusable Invoice Items',
    'global:reusableinvoiceitems_description' => 'You should use Reusable Invoice Items when you want to reuse the same item in different invoices. To use them when you\'re creating or editing an invoice, simply start typing the name of the item you saved, and it\'ll offer to autocomplete the item\'s details for you.',
    'global:create_invoice_estimate' => 'Create invoices and estimates to collect money.',
    'global:createinvoice' => 'Create Invoice',
    'global:paid' => 'Paid',
    'global:unpaid' => 'Unpaid',
    'global:overdue' => 'Overdue',
    'global:time_entries' => 'Time Entries',
    'global:invoices' => 'Invoices',
    'global:invoice' => 'Invoice',
    'global:tasks' => 'Tasks',
    'global:dashboard' => 'Dashboard',
    'global:settings' => 'Settings',
    'global:plugins' => 'Plugins',
    'global:installed' => 'Installed',
    'global:changepassword' => 'Change Password',
    'global:logout' => 'Log Out',
    'global:status' => 'Status',
    'global:client' => 'Client',
    'global:user' => 'User',
    'global:title' => 'Title',
    'global:subtitle' => 'Subtitle',
    'global:to' => 'To (separate multiple addresses with a comma)',
    'global:subject' => 'Subject',
    'global:thanks' => 'Thanks!',
    'global:proposals' => 'Proposals',
    'global:proposal' => 'Proposal',
    'global:reports' => 'Reports',
    'global:item' => 'Item',
    'global:report' => 'Report',
    'global:saveandinsert' => 'Save and Insert',
    'global:details' => 'Details',
    'global:license_key' => 'License Key',
    'global:version' => 'Version :1',
    'global:content' => 'Content',
    'global:add' => 'Add',
    'global:edit' => 'Edit',
    'global:resend' => 'Resend',
    'global:sent' => 'Sent',
    'global:not_sent' => 'Not sent',
    'global:view' => 'View',
    'global:delete' => 'Delete',
    'global:remove' => 'Remove',
    'global:sort' => 'Sort',
    'global:deleteitem' => 'Delete Item',
    'global:dragtoreorder' => 'Drag To Reorder',
    'global:start' => 'Start',
    'global:stop' => 'Stop',
    'global:start_timer' => 'Start Timer',
    'estimates:create' => "Create Estimate",
    'global:stop_timer' => 'Stop Timer',
    'global:created' => 'Created',
    'global:updated' => 'Updated',
    'global:update' => 'Update',
    'global:update_available' => ':1 update available',
    'global:updates_available' => ':1 updates available',
    'global:downloadpdf' => 'Download PDF',
    'global:yesdelete' => 'Yes, delete!',
    'global:confirm_emphisised' => 'There is no going back!',
    'global:color' => 'Color',
    'global:save' => 'Save',
    'global:unknown' => 'Unknown',
    'global:upload_ini_size' => 'The file you uploaded exceeds the size limit imposed by your PHP installation.',
    'global:upload_error' => 'A problem occurred while uploading the file. Please try again.',
    'global:recurring' => 'Recurring',
    'global:unsent' => 'Unsent',
    'global:converttoproject' => 'Convert to Project',
    'global:converttoinvoice' => 'Convert to Invoice',
    'global:viewpdf' => 'View PDF',
    'global:duplicate' => 'Duplicate',
    'global:urltosend' => 'Here is the url to send:',
    'global:copytoclipboard' => 'Copy to clipboard',
    'global:quick_links' => 'Quick Links',
    'global:view_all' => 'View All',
    'global:deleted' => 'Deleted',

    'global:add_more' => "Add More",
    'global:upload_files' => "Upload Files",
    'global:optional_increment' => '<strong>Optional</strong> - will auto increment',

    'login:ahoy' => 'Ahoy!',
    'login:readytodothis' => 'Ready to do this?',
    'login:sup' => 'Sup?',
    'global:actions' => 'Actions',
    'global:select' => "--- Select ---",

    'global:mark_as_unanswered' => 'Mark as unanswered',
    'global:mark_as_accepted' => 'Mark as accepted',
    'global:mark_as_rejected' => 'Mark as rejected',
    'global:reject_estimate' => 'Reject estimate',
    'global:accept_estimate' => 'Accept estimate',
    'global:estimate_rejected' => 'Estimate Rejected',
    "global:estimate_accepted" => "Estimate Accepted",
    'global:reject_proposal' => 'Reject proposal',
    'global:accept_proposal' => 'Accept proposal',
    'global:proposal_rejected' => 'Proposal Rejected',
    "global:proposal_accepted" => "Proposal Accepted",
    "global:client_area" => "Client Area",
    "global:admin" => "Admin",
    "global:all_settings" => "All Settings",
    'global:viewable' => 'Viewable in client area',
    'global:not_viewable' => 'Not viewable in client area',
    'global:milestones' => "Milestones",

    /** Dashboard **/
    'dashboard:collected' => 'Collected',
    'dashboard:outstanding' => 'Outstanding',
    'dashboard:latest_activity' => 'Latest Activity',
    'dashboard:these_are_your_upcoming_tasks' => "These are your upcoming tasks, :1.",
    'dashboard:upcoming_tasks' => 'Upcoming Tasks',
    /** End Dashboard **/

    /** Timesheets **/
    'global:timesheets' => 'Timesheets',
    'timesheets:todays' => 'Today\'s',
    'timesheets:all_users' => 'All Users',
    'timesheets:rounded_time' => 'Rounded up to the nearest :1',
    'timesheets:there_are_no_time_entries' => "There are no time entries to display for this date range.",
    /** END Timesheets **/


    /** Users **/

    // ==============================
    'login:forgotinstructions' => 'Please enter your email address so we can send you an email to reset your password.',
    'login:reset' => 'Reset Password',
    'login:username' => 'Username',
    'login:password' => 'Password',
    'login:changepassword' => 'Change Password',
    'login:email' => 'Email Address',
    'login:login' => 'Login',
    'login:logout' => 'Logout',
    'login:remember' => 'Remember Me',
    'login:forgot' => 'Forgot your password?',
    'login:cancel' => '&laquo; Cancel',
    /** End Users **/

    /** User Groups **/
    'groups:edit_title' => 'Edit Group %s',
    'groups:add_title' => 'Add User Group',

    /** Clients **/
    'clients:title' => 'All Clients',
    'clients:filter' => 'Client Filter',
    'clients:add' => 'Add Client',
    'clients:removefilter' => 'Remove Filter',
    'clients:edit' => 'Edit Client',
    'clients:noclienttitle' => 'You need to enter some clients!',
    'clients:noclientbody' => 'So you can send them some invoices. Add one now?',
    'clients:noclienttitlefilter' => 'No clients match your filter',
    'clients:hasnoinvoicetitle' => 'Sweet! This client is all set up!',
    'clients:hasnoinvoicebody' => 'Let\'s create an invoice for them and get billing! Add one now?',
    'clients:added' => 'The client has been added!',
    'clients:edited' => 'The client has been updated!',
    'clients:deleted' => 'The client has been deleted!',
    'clients:does_not_exist' => 'That client does not exist!',
    'clients:health_check' => 'Health Check',
    'clients:all' => 'All',
    'clients:delete_title' => 'Delete this client?!?!',
    'clients:delete_message' => 'Are you sure you want to delete this client?<br />This will also delete all invoices, projects and proposals for this client.',
    'clients:clientaction' => '&nbsp;',
    'clients:passphrase' => 'Pass Phrase',
    'clients:bad_passphrase' => 'Pass Phrase is incorrect.',
    'clients:total_clients' => 'Total Clients',
    'clients:support' => 'Support',
    'clients:support_rates' => 'Support Rates',
    'clients:edit_support_rates' => 'Set Rates',
    /** End Clients **/


    /** Contact Log **/
    'contact:contact' => 'Contact',
    'contact:subject' => 'Subject',
    'contact:content' => 'Content',
    'contact:method' => 'Contact Method',
    'contact:calling_title' => 'Calling client ":1"',
    // 'contact:view_all'		=>	'View All',
    /** End Contact Log **/

    /** Invoices **/
    'invoices:markassent' => 'Mark as Sent',
    'invoices:invoicedate' => 'Invoice Date',
    'invoices:file_name' => "File Name",
    'invoices:date_created' => "Date Created",
    'invoices:size' => "Size",
    'invoices:files' => "Files",
    'invoices:sentbutunpaid' => 'Invoices sent to the client but still not paid',
    'invoices:duplicated' => 'Duplicated invoice #:1. The new invoice\'s number is #:2.',
    'invoices:all' => 'All Invoices',
    'invoices:empty' => 'No invoices yet.',
    'invoices:overdue' => 'Overdue Invoices',
    'invoices:tax_collected' => "Tax Collected",
    'invoices:paid' => 'Paid Invoices',
    'invoices:recurringinvoices' => 'Recurring Invoices',
    'invoices:unsentinvoices' => 'Unsent Invoices',
    'invoices:unpaid' => 'Unpaid Invoices',
    'invoices:thisinvoicewaspaidon' => 'This invoice was paid on :1. Thank you!',
    'invoices:senton' => 'Sent on :1',
    'invoices:lastsenton' => 'Last sent on :1 at :2',
    'invoices:paidon' => 'Paid on :1',
    'invoices:paidonsingle' => 'Paid on',
    'invoices:thisinvoiceisunpaid' => "This invoice hasn't been paid yet.",
    'invoices:noinvoicetitle' => 'You have no invoices yet!',
    'invoices:noinvoicesforthefilteredclient' => "You have no invoices for :1.",
    'invoices:noinvoicebody' => 'You should create an invoice now! <br /> Clients love invoices!',
    'invoices:send_now_title' => 'Send invoice now?',
    'invoices:send_now_body' => 'Fill out the form below and we\'ll deliver this invoice for you.',
    'invoices:newinvoice' => 'Create Invoice',
    'invoices:timequantity' => 'Time/Quantity',
    'invoices:ratewithcurrency' => 'Rate (:1)',
    'invoices:taxable' => 'Taxable',
    'invoices:total' => 'Total',
    'invoices:amount' => 'Amount',
    'invoices:due' => 'Due',
    'invoices:subtotal' => 'Subtotal',
    'invoices:totaltax' => 'Total Tax',
    'invoices:filestodownload' => 'Files for Download',
    'invoices:added' => 'The invoice has been added!',
    'invoices:fileswillbeavailableafterpay' => 'These files will be available for download once the invoice has been fully paid.',
    'invoices:no_payment_gateways_enabled' => 'No payment gateways have been enabled, which might make it tricky to be paid. Enable in <a href=":1">Settings</a>',
    'invoices:invoicenumber' => 'Invoice #:1',
    'invoices:number' => 'Invoice #',
    'invoices:type' => 'Invoice Type',
    'invoices:is_recurring' => 'Recurring?',
    'invoices:is_paid' => 'Paid?',
    'invoices:is_sent' => 'Sent?',
    'invoices:date_entered' => 'Date of Creation',
    'invoices:delete_title' => 'Delete this invoice?',
    'items:select_time_entry' => 'Time Entry',
    'invoices:delete_message' => 'Are you sure you want to delete this invoice?',
    'invoices:create' => 'Create Invoice',
    'invoices:edit' => 'Edit Invoice',
    'invoices:amountrequired' => 'The Amount field is required',
    'invoices:currencydoesnotexist' => 'This currency does not exist.',
    'invoices:unique_id' => 'Unique ID',
    'invoices:willreoccurin' => 'This invoice will reoccur on :1.',
    'invoices:willbesentautomatically' => 'The client will be notified by email about this invoice on :1.',
    'invoices:clientlastnotifiedon' => 'The client was notified by email about this invoice on :1.',
    'invoices:simple' => 'Simple',
    'invoices:simple_help' => 'A simple invoice has no line items. Simply a total.',
    'invoices:detailed' => 'Detailed',
    'invoices:detailed_help' => 'Detailed invoices allow you to have multiple line items.',
    'invoices:estimate_help' => 'Estimates are detailed invoices that are not billable.',
    'invoices:unpaid_totalamount' => 'Unpaid / Total amount',
    'invoices:saveinvoice' => 'Save Invoice',
    'invoices:deleted' => 'The invoice has been deleted!',
    'invoices:view' => 'View Invoice',
    'invoices:is_viewable' => 'Show in client area?',
    'invoices:no_invoices' => 'There are no invoices.',
    'invoices:addedsuccess' => 'You have added an invoice for',
    'invoices:invoice' => 'invoice',
    'invoices:preview' => 'Preview Invoice',
    'invoices:editinvoice' => 'Edit invoice #:1',
    'invoices:messageupdated' => 'The invoice has been updated!',
    'invoices:resend' => 'Resend Invoice',
    'invoices:client_viewed' => ':1 viewed <a href=":2">invoice #:3</a> on :4',
    'invoices:client_paid' => ':1 paid <a href=":2">invoice #:3</a> on :4',
    'invoice:paid_amount' => 'Amount Paid',
    /** End Invoices **/

    /** Estimates **/
    'estimates:attachedtoproposal' => 'Attached to proposal #:1',
    'estimates:duplicated' => 'Duplicated estimate #:1. The new estimate\'s number is #:2.',
    'estimates:alltitle' => 'All Estimates',
    'estimates:attachingtoproposal' => 'Attaching estimate to proposal, please wait...',
    'estimates:delete_title' => 'Delete this estimate?',
    'estimates:delete_message' => 'Are you sure you want to delete this estimate?',
    'estimates:createnew' => 'Create Estimate',
    'estimates:generate_estimate' => 'Generate Estimate',
    'estimates:converted' => 'Converted estimate #:1 to a project.',
    'estimates:converted_to_invoice' => 'Converted estimate #:1 to an invoice.',
    'estimates:noestimatetitle' => 'You have no estimates',
    'estimates:noestimatesforthisclient' => 'You have no estimates for this client.',
    'estimates:noestimatesforthefilteredclient' => "You have no estimates for :1.",
    'estimates:deleted' => 'The estimate has been deleted!',
    'estimates:noestimatebody' => 'You should get on that! Would you like to create one now?',
    'estimates:estimatenumber' => 'Estimate #:1',
    'estimates:view' => 'View Estimate',
    'estimates:no_estimates' => 'There are no estimates.',
    'estimates:addedsuccess' => 'You have added an estimate for',
    'estimates:estimate' => 'estimate',
    'estimates:added' => 'Success! The estimate has been added.',
    'estimates:send_now_title' => 'Send estimate now?',
    'estimates:send_now_body' => 'Fill out the form below and we\'ll deliver this estimate for you.',
    'estimates:send_now' => 'Send Estimate',
    'estimates:edit' => 'Edit Estimate',
    'estimates:preview' => 'Preview Estimate',
    'estimates:editestimate' => 'Edit estimate #:1',
    'estimates:messageupdated' => 'The estimate has been updated!',
    'estimates:client_viewed' => ':1 viewed <a href=":2">estimate #:3</a> on :4',
    'estimates:client_accepted' => ':1 accepted <a href=":2">estimate #:3</a> on :4',
    'estimates:client_rejected' => ':1 rejected <a href=":2">estimate #:3</a> on :4',
    'estimates:resend' => 'Resend Estimate',
    'estimates:estimatedate' => 'Estimate Date',
    /** End Estimates **/

    /** Projects **/
    'projects:status_id' => 'Task Status',
    'projects:projected' => 'Projected',
    'projects:projected_hours' => 'Projected Hours',
    'projects:navigationitem' => 'Projects',
    'projects:hours_worked' => 'Number of hours worked',
    'projects:hours_worked_short' => 'Hours worked',
    'projects:alltitle' => 'All Projects',
    'projects:totalprojects' => 'Total Projects',
    'projects:noprojecttitle' => 'There are no projects yet!',
    'projects:noprojecttext' => 'Would you like to add one now? ',
    'projects:add' => 'Create Project',
    'projects:createfromtemplate' => 'Create from Template',
    'projects:doesnotexist' => 'The project you are trying to access does not exist.',
    'projects:edit' => 'Edit Project',
    'projects:delete' => 'Delete Project',
    'projects:project' => 'Project',

    'projects:new_project_from_estimate_without_number' => "New Project from Estimate",
    'projects:new_project_from_estimate_with_number' => "New Project from Estimate #:1",

    'projects:due_date' => 'Due Date',
    'projects:is_completed' => 'Completed?',
    'projects:manage_project' => 'Manage Project',
    'projects:areyousuredeletetask' => 'Are you sure you want to delete this task?',
    'projects:add_time' => 'Add Time Entry',
    'projects:add_hours' => 'Add Hours',
    'projects:generate_invoice' => 'Generate Invoice',
    'projects:no_projects' => 'There are no projects.',
    'projects:archive_proj' => 'Archive Project',
    'projects:archive' => 'View Archive',
    'projects:active' => 'Active Projects',
    'projects:archived' => 'Archived Projects',
    'projects:noarchivedprojecttitle' => 'You have no archived projects.',
    'projects:noarchivedprojecttext' => 'You can archive a project from your project page ',
    'projects:allarchivedtitle' => 'All Archived Projects',
    'projects:templatize' => 'Save as template',
    'projects:milestone_identifier' => "[Milestone: :1]",
    /** End Projects **/


    /** Milestones **/
    'milestones:add' => 'Add Milestone',
    'milestones:edit' => 'Edit Milestone',
    'milestones:delete' => 'Delete Milestone',
    'milestones:milestone' => 'Milestone',
    'milestones:assigned_user' => 'Assigned User',
    'milestones:select_default' => '-- No milestone --',
    'milestones:no_milestone' => 'Tasks without Milestone',
    'milestones:add_success' => 'Milestone ":1" added successfully!',
    'milestones:edit_success' => 'Milestone ":1" edited successfully!',
    'milestones:add_failed' => 'Milestone ":1" could not be edited.',
    'milestones:edit_failed' => 'Milestone ":1" could not be added.',
    'milestones:are_you_sure_delete' => 'Are you sure you want to delete this milestone?',
    'milestones:delete_success' => 'Milestone ":1" deleted successfully!',
    'milestones:does_not_exist' => 'This milestone does not exist.',
    'milestones:target_date' => 'Target Date',
    'milestones:select_assignee_default' => 'No Assignee',
    /** End Milestones **/

    /** Proposals **/
    'proposal:outline' => 'Proposal Outline',


    /** End Proposals **/

    /** Reminders **/

    'reminders:reminders' => 'Reminders',
    'reminders:send' => 'Send Reminders',
    'reminders:success' => 'Those reminders have been sent!!',
    'reminders:remind' => 'Remind',
    'reminders:message' => 'Message',
    'reminders:due' => 'Days',
    'reminders:details' => 'Details',
    'reminders:log' => 'Log',

    /** End Reminders **/


    /** Email Templates **/
    'emailtemplates:email_templates' => 'Email Templates',
    'emailtemplates:create_template' => 'Create new template',
    'emailtemplates:add' => 'Create new email template',
    'emailtemplates:edit' => 'Edit email template',
    'emailtemplates:manage' => 'Manage Templates',
    'emailtemplates:name' => 'Email Name',
    'emailtemplates:subject' => 'Email Subject',
    'emailtemplates:days' => 'Day Range',
    'emailtemplates:type' => 'Template Type',
    'emailtemplates:success' => 'Successfully created email template',
    'emailtemplates:edited' => 'Successfully edited email template',
    'emailtemplates:does_not_exist' => 'Email template does not exist',
    'emailtemplates:deleted' => 'Email template successfully deleted',
    'emailtemplates:delete_title' => 'Delete email template',
    'emailtemplates:delete_message' => 'Are you sure you\'d like to delete this email template?',


    /** End Email Templates **/

    /** Reports **/
    'reports:perclient' => 'per client',
    'reports:datefrom' => 'From',
    'reports:allclients' => 'All clients',
    'reports:dateto' => 'To',
    'reports:byclient' => 'Client',

    'reports:view' => 'View Report',
    'reports:show_all' => 'Show Reports',

    'reports:paid_and_unpaid' => "Paid and Unpaid",
    'reports:paid_vs_unpaid_over_time' => "Paid vs. Unpaid over time",
    'reports:per_client' => 'per client',
    'reports:total_with_tax' => "Total (w/ tax)",
    'reports:total_without_tax' => "Total (no tax)",
    'reports:total_collected' => 'Total Collected',
    'reports:fees_paid' => 'Fees Paid',
    'reports:total_amount' => 'Total Amount',
    'reports:paid_amount' => "Paid Amount",
    'reports:unpaid_amount' => "Unpaid Amount",
    'reports:client_name' => "Client Name",

    'reports:nodata' => 'No :1.',
    /** End Reports **/

    /** Currencies **/
    'currencies:default' => '[Default] :1',
    'currencies:cad' => 'Canadian Dollar',
    'currencies:eur' => 'Euro',
    'currencies:usd' => 'U.S. Dollar',
    'currencies:gbp' => 'Pound Sterling',
    'currencies:hkd' => 'Hong Kong Dollar',
    'currencies:php' => 'Philippine Peso',
    'currencies:zar' => 'South Africa, Rand',
    /** End Currencies **/

    /** Proposals **/
    'proposals:duplicated' => 'Duplicated proposal #:1. The new proposal\'s number is #:2.',
    'proposals:usesectiontemplate' => 'Use this Section Template',
    'proposals:showcontents' => 'Show Contents',
    'proposals:hidecontents' => 'Hide Contents',
    'proposals:deletepremadesection' => 'Delete Section Template',
    'proposals:nopremadesections' => 'You have no saved section templates.',
    'proposals:newproposal' => 'New Proposal',
    'proposals:number' => 'Proposal #',
    'proposals:all' => 'All Proposals',
    'proposals:noproposaltitle' => "There are no proposals!",
    'proposals:noproposalbody' => "You should create a proposal now. Definitely.",
    'proposals:client_viewed' => ':1 viewed <a href=":2">proposal #:3</a> on :4',
    'proposals:client_accepted' => ':1 accepted <a href=":2">proposal #:3</a> on :4',
    'proposals:client_rejected' => ':1 rejected <a href=":2">proposal #:3</a> on :4',
    'proposals:rejected' => 'Rejected on :1',
    'proposals:accepted' => 'Accepted on :1',
    'proposals:lastviewed' => 'Last viewed by the client on :1, at :2.',
    'proposals:neverviewed' => 'not viewed by the client.',
    'proposals:noanswer' => 'No answer',
    'proposals:createproposal' => 'Create Proposal',
    'proposals:editproposal' => 'Edit Proposal',
    'proposals:createdsuccessfully' => 'Proposal created!',
    'proposals:sections' => 'Sections',
    'proposals:section' => 'Section',
    'proposals:createsection' => 'Add New Section',
    'proposals:createpage' => 'Add Page',
    'proposals:emptysection' => '(no title)',
    'proposals:emptycontents' => '(no contents)',
    'proposals:emptysubtitle' => '(no subtitle)',
    'proposals:for' => 'Proposal for:',
    'proposals:pagexofcount' => 'Page :1 of :2',
    'proposals:saving' => 'Saving...',
    'proposals:save' => 'Save Proposal',
    'proposals:savepremade' => 'Save as Section Template',
    'proposals:addestimate' => 'Add Estimate',
    'proposals:saved' => 'Saved!',
    'proposals:createandedit' => 'Next: Edit proposal contents',
    'proposals:delete_message' => 'Are you sure you want to delete this proposal?',
    'proposals:createpremadesection' => 'Add from Section Template',
    'proposals:selected_attachments' => 'Select Estimate',
    'proposals:attach_selected_estimate' => 'Attach Selected Estimate',
    'proposals:proposal' => 'Proposal',
    'proposals:status' => 'Status',
    'proposals:view' => 'View Proposal',
    'proposals:estimate' => 'Estimate',
    'proposals:no_proposals' => 'There are no proposals.',
    'proposals:proposal_title' => 'Proposal Title',
    'proposals:kitchennotice' => 'Note: Proposals will appear in the :1 once the client has viewed the proposal link. This means you can edit it all you want and the client wont see it until you want them too.',
    /** End Proposals **/

    /** Tasks **/
    'tasks:task' => 'Task',
    'tasks:edit_succeeded' => 'Edited task successfully.',
    'tasks:hours' => 'Hours',
    'tasks:due_date' => 'Due Date',
    'tasks:is_completed' => 'Completed?',
    'tasks:timer' => 'Timer',
    'tasks:rate' => 'Rate',
    'tasks:default_rate' => 'Default Rate',
    'tasks:entries' => 'Time Entries',
    'tasks:view_entries' => 'View Entries',
    'tasks:edit_entry' => 'Edit Time Entry',
    'tasks:create' => "Add Task",
    'tasks:create_sub' => "Add Sub-Task",
    'tasks:task_parent' => "Task Parent",
    'tasks:edit' => "Edit Task",
    'tasks:create_succeeded' => "The task has been created!",
    'tasks:no_task_title' => 'Hmm, no tasks yet...',
    'tasks:no_task' => "No Task",
    'tasks:no_task_message' => 'You should create some!',
    'tasks:is_viewable' => 'Viewable in client area?',
    'tasks:no_milestones' => 'Tasks with no milestones',
    'tasks:not_related_to_a_task' => "-- Not related to a task --",
    'tasks:select_parent_default' => '-- No parent task --',
    'tasks:timers_running' => 'Timers Running',
    'tasks:task_completed_by' => ':1 completed <a href=":2">task :3</a> at :4',
    'tasks:discussion' => 'Discussion: ',
    'tasks:billed_hours' => "Billed Hours",
    'tasks:unbilled_hours' => "Unbilled Hours",


    /** Users **/
    'users:create_user' => 'Create User',
    'users:confirm_delete_emphasised' => "There is no going back!",

    /** Items **/
    'items:name' => 'Item Name',
    'items:description' => 'Item Description',
    'items:qty_hrs' => 'Qty / Hrs',
    'items:quantity' => 'Quantity',
    'items:rate' => 'Rate',
    'items:tax_rate' => 'Tax Rate',
    'items:cost' => 'Cost',
    'items:line_items' => 'Line Items',
    'items:add' => 'Add Item',
    'items:edit' => 'Edit Item',
    'items:noitemtitle' => 'You have no items yet!',
    'items:noitembody' => 'You should add some items now, it makes creating invoices loads easier!',
    'items:delete_title' => 'Delete this item?',
    'items:delete_message' => 'Are you sure you want to delete item ":1"?',
    'items:type' => 'Type',
    'items:select_standard' => 'Standard',
    'items:select_expense' => 'Expense',
    'items:add_expense_to_project' => 'Add Expense',
    'items:expenses' => 'Expenses',
    /** END Items **/

    /** Expenses **/
    'expenses:expenses' => 'Expenses',
    'expenses:add' => 'Add Expense',
    'expenses:edit_expense' => 'Edit Expense',
    'expenses:delete' => 'Delete Expense',
    'expenses:deleted' => 'Expense Deleted',
    'expenses:all' => 'All Expenses',
    'expenses:amount' => 'Amount',
    'expenses:supplier' => 'Supplier',
    'expenses:suppliers' => 'Suppliers',
    'expenses:category' => 'Category',
    'expenses:categories' => 'Categories',
    'expenses:add_supplier' => 'Add Supplier',
    'expenses:edit_supplier' => 'Edit Supplier',
    'expenses:add_category' => 'Add Category',
    'expenses:edit_category' => 'Edit Category',
    'expenses:parent_category' => 'Parent Category',
    'expenses:filter' => 'Filter Expenses',
    'expenses:start_date' => 'Start Date',
    'expenses:end_date' => 'End Date',


    /** END Expenses **/

    /** Transactions **/
    'transactions:paymentcancelled' => 'Payment Cancelled',
    'transactions:extrapaymentcancelled' => 'Your payment has been cancelled.',
    'transactions:paymentreceived' => 'Payment Received!',
    'transactions:fee_applied' => 'As :1 imposes a transactional fee, we have added a :2% surcharge.',
    'transactions:orderbeingprocessed' => 'Please wait, your order is being processed and you will be redirected to the :1 website.',
    'transactions:ifyouarenotredirected' => 'If you are not automatically redirected to :1 within 5 seconds...',
    'transactions:thankyouforyourpayment' => 'Thank you for your payment. You should be receiving a receipt via email shortly.',
    'transactions:ifyouhavefilesyouwillgetanemail' => 'If you have files awaiting delivery you will receive an email with a link to download them shortly.',
    'transactions:ifyoudonotreceiveemail' => 'If you do not receive an email within an hour please contact :1',
    /** End Transactions **/

    /** Timesheets **/
    'timesheet:taskname' => 'Task Name',
    'timesheet:starttime' => 'Start Time',
    'timesheet:endtime' => 'End Time',
    'timesheet:timeframe' => 'Timeframe',
    'timesheet:duration' => 'Duration',
    'timesheet:date' => 'Date',
    'timesheet:forproject' => 'Timesheet for Project ":1"',
    'timesheet:timesheet' => 'Timesheet',
    'timesheet:for' => 'Timesheet for:',
    'timesheet:totalbillable' => 'Total Billable Hours',
    'timesheet:view_pdf' => 'View Timesheet',
    'timesheet:user' => 'User',
    'timesheet:entries' => 'Entries',
    'timesheet:no_entries' => "There are no time entries.",
    /** End Timesheets **/


    /** Support Tickets **/

    'tickets:all_tickets' => 'Support Tickets',
    'tickets:support_tickets' => "Support Tickets",
    'tickets:pending' => 'Pending',
    'tickets:open' => 'Open',
    'tickets:resolved' => 'Resolved',
    'tickets:closed' => 'closed',
    'tickets:respond' => 'Respond to ticket',
    'tickets:ticket_options' => 'Ticket Options',
    'tickets:attachment' => 'Attachment',
    'tickets:updated_status' => ':1 updated the ticket status to :2',
    'tickets:add_a_new_ticket' => "Add a New Ticket",
    'tickets:create_a_new_ticket' => 'Create a New Ticket',
    'tickets:add_ticket' => 'Add Ticket',
    'tickets:assign_to_user' => 'Assign To User',
    'tickets:select_client' => 'Select Client',
    'tickets:ticket_subject' => 'Ticket Subject',
    'tickets:ticket_message' => 'Ticket Message',
    'tickets:ticket_priority' => 'Ticket Priority',
    'tickets:ticket_status' => 'Ticket Status',
    'tickets:no_priority' => '-- No priority --',
    'tickets:no_status' => '-- No status --',
    'tickets:no_posts' => "No message.",

    /** End Support Tickets **/

    /** Frontend **/
    'frontend:hithere' => 'Hi There!',
    'frontend:followthemaillinkdude' => 'In order to view your invoice you must click the entire link sent in the email you received. Eg :1.',
    'frontend:contactadminforassistance' => 'Please do so or contact :1 at :2 for assistance',
    /** End Frontend **/

    /** Settings **/

    'settings:task_statuses' => "Task Statuses",
    'settings:ticket_statuses' => "Ticket Statuses",
    'settings:ticket_priorities' => "Ticket Priorities",
    'settings:background_color' => "Background Color",
    'settings:text_color' => "Text Color",
    'settings:text_shadow' => "Text Shadow",
    'settings:box_shadow' => "Box Shadow",
    'settings:default_rate' => "Default Rate",
    'settings:allowed_extensions' => 'Allowed Upload Extensions',
    'settings:comma_separated' => 'comma-separated',
    'settings:pdf_page_size' => 'PDF Page Size',
    'settings:default_invoice_notes' => 'Default Invoice Notes',
    'settings:default_invoice_title' => 'Default Invoice Title',
    'settings:default_invoice_due_date' => 'Default Invoice Due Date',
    'settings:autosave_proposals' => 'Autosave Proposals',
    'settings:default_invoice_due_date_explain' => 'days after invoice is created. If you don\'t want a default date, leave this empty.',
    'settings:testemailsettings' => 'Test Email Settings',
    'settings:include_remittance_slip' => 'Remittance Slips',
    'settings:include_remittance_slip_explain' => "If checked, invoice PDFs will include a remittance slip.",
    'settings:items_per_page' => 'Items Per Page',
    'settings:items_per_page_explain' => 'Number of items (invoices/estimates/proposals/projects/tasks) to show per page.',
    'settings:send_x_days_before' => 'Default "send days before"',
    'settings:file_to_import' => 'File To Import',
    'settings:file_should_be_csv' => 'Pancake will automatically process your file and import everything in it. If Pancake is unable to process your file, it will let you know, and it will give you the option to send us some information to help us make Pancake work with your file.',
    'settings:importnow' => 'Import now!',
    'settings:whatimporting' => 'What are you importing?',
    'settings:whatexporting' => 'What are you exporting?',
    'settings:nouploadedimportfile' => 'You did not upload a file to import.',
    'settings:import' => 'Import',
    'settings:importedclients' => 'Imported :1 clients successfully.',
    'settings:importedprojects' => "Imported :1 projects successfully.",
    'settings:importedusers' => "Imported :1 users successfully.",
    'settings:importedinvoices' => 'Imported :1 invoices successfully.',
    'settings:importedtasks' => 'Imported :1 tasks successfully.',
    'settings:importedestimates' => 'Imported :1 estimates successfully.',
    'settings:importedtime_entries' => 'Imported :1 time entries successfully.',
    'settings:xwereduplicates' => ':1 were duplicates, and were ignored.',
    'settings:import_desc' => 'Import data into Pancake.',
    'settings:export' => 'Export',
    'settings:exportnow' => 'Export now!',
    'settings:importexport' => 'Import / Export',
    'settings:removelogo' => 'Remove Logo',
    'settings:wrong_license_key' => 'The license key you have entered is not valid.',
    'settings:noopenssl' => 'Your PHP server does not have OpenSSL configured, which means you can\'t use Gmail or Google Apps for sending email. Please contact your host and let them know you need OpenSSL.',
    'settings:logoremoved' => 'Logo removed successfully!',
    'settings:save' => 'Save Settings',
    'settings:logodimensions' => 'The logo can be uploaded in any size, and will be resized automatically.',
    'settings:logoformatsallowed' => 'BMP, PNG, JPG (JPEG) and GIF are allowed.',
    'settings:ftp_user' => 'FTP User',
    'settings:ftp_pass' => 'FTP Password',
    'settings:ftp_path' => 'FTP Path',
    'settings:ftp_port' => 'FTP Port',
    'settings:ftp_pasv' => 'Passive Mode?',
    'settings:nophpupdates' => "Because of the way your server is configured, you need to enter your FTP details so that Pancake can update itself. These details are used internally by Pancake and are never transmitted to anyone.",
    'settings:ftp_host' => 'FTP Host',
    'settings:uptodate' => 'Pancake is up to date (:1)',
    'settings:newversionavailable' => 'There is a new version of Pancake available (:1)!',
    'settings:updatenow' => 'Update now!',
    'settings:checkforupdates' => "Check for updates",
    'settings:youneedtoconfigurefirst' => 'Your Pancake is not yet configured to update itself. Please enter your FTP details below, then press "Save Settings".<br /> Pancake will then let you update.',
    'settings:general' => 'General',
    'settings:emails' => 'Emails',
    'settings:taxes' => 'Taxes',
    'settings:currencies' => 'Currencies',
    'settings:branding' => 'Branding',
    'settings:payment_methods' => 'Payments',
    'settings:feeds' => 'Feeds',
    'settings:api_keys' => 'API Keys',

    'settings:time_entry_times' => "Time Entry Times",
    "settings:include_dates_and_times_in_line_items" => 'Include dates and times in "Time Entry" line item descriptions.',
    "settings:when_generating_invoice" => "When generating invoices, use a line item per",
    "settings:use_utf8_font" => "Use UTF-8 font in PDFs",
    "settings:use_utf8_font_explanation" => "Use this if characters are broken in your PDFs.",
    "settings:pdf_attachments" => "PDF Attachments",
    "settings:pdf_attachments_explanation" => "If checked, Pancake will attach the corresponding PDF to invoice, estimate or proposal emails.",


    'settings:site_name' => 'Site name',
    'settings:language' => 'Language',
    'settings:timezone' => 'Timezone',
    'settings:currency' => 'Currency',
    'settings:theme' => 'Frontend Theme',
    'settings:admin_theme' => 'Admin Theme',
    'settings:date_format' => 'Date Format',
    'settings:time_format' => "Time Format",
    'settings:task_time_interval' => 'Time Entry Rounding (Leave empty for no rounding)',
    'settings:task_time_interval_description' => '(eg. 00:30 or 0.5 - all time entries are rounded up to the nearest 00:30 when billing for them in an invoice.)',
    'settings:mailing_address' => 'Mailing Address',

    'settings:default_subject' => 'Default Subject',
    'settings:default_contents' => 'Default Message',
    'settings:new_estimate' => 'New Estimate',
    'settings:new_invoice' => 'New Invoice',
    'settings:new_proposal' => 'New Proposal',
    'settings:paid_notification' => 'Paid Notification',
    'settings:payment_receipt' => 'Payment Receipt',
    'settings:new_ticket' => 'New Ticket',
    'settings:ticket_invoice' => "New Ticket Invoice",
    'settings:ticket_updated' => 'Ticket Updated',
    'settings:ticket_status_updated' => 'Ticket Status Updated',

    'settings:logo' => 'Your logo',
    'settings:frontend_css' => 'Frontend Custom CSS',
    'settings:backend_css' => 'Backend Custom CSS',

    'settings:rss_password' => 'RSS Password',
    'settings:default_feeds' => 'Default Feeds',
    'settings:cron_job_feed' => 'Cron Job',
    'settings:feed_generator' => 'Feed Generator',
    'settings:your_link' => 'Your Link',
    'settings:bcc' => 'BCC',
    'settings:api_note' => 'Name / Note',
    'settings:api_key' => 'Key',

    'settings:tax_name' => 'Tax Name',
    'settings:tax_value' => 'Value',
    'settings:add_tax' => 'Add Another Tax',

    'settings:currency_name' => 'Currency Name',
    'settings:currency_code' => 'Currency Code',
    'settings:exchange_rate' => 'Exchange Rate',
    'settings:add_currency' => 'Add Another Currency',
    /** End Settings **/

    'update:ifyourenotsurecontactus' => "If you're not sure what to do, please <a href='https://www.pancakeapp.com/account/support/ticket/new'>open a <strong>free</strong> support ticket</a>.",
    'update:youmodified' => 'You modified',
    'update:youdeleted' => 'You deleted',
    'update:loadingpleasewait' => 'Loading, please wait...',
    'update:errordownloading' => 'An update to Pancake is available, but Pancake is having problems downloading it.',
    'update:herearestepstofix' => 'Here are a few steps you can try to fix it:',
    'update:makesureuploadsiswritable' => 'Make sure that your uploads folder is writable (CHMOD 0777).',
    'update:deletepancakesystemupdate' => 'Delete the pancake-update-system folder (inside the uploads folder), and all its contents.',
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
    /** Action Logger  **/

    /** End Action Logger **/

    /** Partial Payments **/
    'partial:totalamounttobepaid' => "Total amount to be paid by the client",
    'partial:amount' => 'Amount',
    'partial:add_payment' => 'Add Payment',
    'partial:dueon' => 'Due on',
    'partial:paymentdetails' => 'Payment Details',
    'partial:savepaymentdetails' => 'Save payment details',
    'partial:proceedtopayment' => 'Proceed to payment',
    'partial:topaynowgoto' => 'To pay now, please go to :1',
    'partial:pay_part_x_now' => "Pay part #:1 of your invoice now",
    'partial:dueondate' => 'due on :1',
    'partial:paymentmethod' => 'Payment Method',
    'partial:paymentdate' => 'Payment Date',
    'partial:paymentstatus' => 'Payment Status',
    'partial:transactionid' => 'Transaction ID',
    'partial:markaspaid' => 'Mark as Paid',
    'partial:transactionfee' => 'Transaction Fee',
    /** End Partial Payments **/

    /** Payment Gateways **/
    'paypal:clickhere' => 'Click Here to Proceed',
    'authorize:transaction_key' => 'Transaction Key',
    'paypal:email' => 'PayPal Email',
    'paypal:fee' => 'PayPal Fee (%)',
    'paypalpro:paypalpro' => 'PayPal Payments Pro (BETA)',
    'paypalpro:viacreditcard' => 'Pay via Credit Card',
    'cash:cash' => 'Cash',
    'check:check' => 'Check',
    'moneyorder:moneyorder' => 'Money Order',
    'creditcard:creditcard' => 'Credit Card',
    'banktransfer:banktransfer' => 'Bank Transfer',
    'gateways:errorupdating' => 'There was an error updating your payment method settings.  Please contact support.',
    'gateways:paymentmethods' => 'Payment Methods',
    'gateways:selectpaymentmethod' => 'Select Payment Method',
    'gateways:nogatewayused' => 'No method used: Part is unpaid',
    'gateways:completed' => 'Completed',
    'gateways:refunded' => 'Refunded',
    'gateways:unpaid' => 'Unpaid',
    'gateways:paymentrejected' => ':1 Payment Rejected',
    'gateways:pending' => 'Pending',
    'gateways:returntowebsite' => 'Return to :1',
    'gateways:cc_type' => 'Credit Card Type',
    'gateways:cc_number' => 'Credit Card Number',
    'gateways:cc_exp' => 'Expiry Date',
    'gateways:cc_cardholder' => 'Name on card',
    'gateways:cc_code' => 'CVV Code',
    'gateways:payment_details' => 'Payment Details',
    'gateways:api_signature' => 'API Signature',
    'gateways:api_password' => 'API Password',
    'gateways:api_username' => 'API Username',
    /** End Payment Gateways **/

    /** Kitchen Area **/
    'kitchen:edit_comment' => 'Edit Comment',
    'kitchen:add_a_comment' => "Add a comment",
    'kitchen:kitchen_name' => 'Client Access Area',
    'kitchen:pleaselogin' => 'Please enter your Pass Phrase to access your account',
    'kitchen:nocomments' => 'There are no comments yet.',
    'kitchen:comment' => 'Comment',
    'kitchen:comments' => 'Comments',
    'kitchen:comments_x' => 'Comments (:1)',
    'kitchen:file' => 'File',
    'kitchen:submitcomment' => 'Add comment',
    'kitchen:attachment' => 'Attachment',
    'kitchen:saidon' => 'said on :1, at :2',
    'kitchen:subjectinvoice' => 'New comment for Invoice #',
    'kitchen:subjectestimate' => 'New comment for Estimate #',
    'kitchen:subjectproject' => 'New comment for Project:',
    'kitchen:subjecttask' => 'New comment for Task:',
    'kitchen:subjectproposal' => 'New comment for Proposal:',
    'kitchen:backtodashboard' => 'Back to Dashboard',
    'kitchen:client_welcome' => 'Client access area for:',
    'kitchen:urltosend' => 'Client access url',
    'kitchen:nopassphrase' => 'Currently the client "Passphrase" is not set, this means that just accessing that url is all that is needed to view the client area. If you\'d like to secure it using a simple passphrase please edit this client and set one.',
    'kitchen:passphraseset' => 'This client has a Passphrase set up',
    'kitchen:passphrase' => 'Passphrase',
    'kitchen:description' => 'This is the url to send to your client to allow them to access the client access area where they can view items, such as projects and invoices, that you have made viewable.',
    'kitchen:people_in_discussion' => 'People chatting',

    'kitchen:latest_invoice' => 'Latest Invoice',
    'kitchen:unpaid_balance' => 'Unpaid Balance: :1',
    'kitchen:total_paid_to_date' => 'Total Paid To Date: :1',

    /** END Kitchen Area **/

    'store:store' => 'Store',
    'store:buy' => "Buy ($:1)",
    'store:update' => "Update",
    'store:install' => "Install",
    'store:settings' => "Settings",
    'store:already_bought' => "You've already purchased this item!",
    'store:installed_successfully' => "You've installed the :1 :2 successfully.",
    'store:plugin' => "Plugin",
    'store:payment_gateway' => "Payment Gateway",
    'store:frontend_theme' => "Frontend Theme",
    'store:backend_theme' => "Backend Theme",
    'store:unknown' => "Unknown",
    'store:updatestoreitems' => "Update store items",
    'store:download_free' => "Download (FREE)",
    'store:error1000' => "Your authorization token is no longer valid. You will have to enter your payment details in pancakeapp.com once more.",
    'store:error1001' => "You have already purchased this store item!",
    'store:error1002' => "A problem occurred while trying to charge your credit card. Try again later.",
    'store:error1003' => "You have made an invalid request.",

    'email_templates:new_invoice' => 'New Invoice',
    'email_templates:new_estimate' => 'New Estimate',
    'email_templates:new_proposal' => 'New Proposal',
    'email_templates:invoice_payment_notification_for_admin' => 'Payment Notification (sent to admin)',
    'email_templates:invoice_payment_notification_for_client' => 'Payment Receipt Notification (sent to client)',
    'email_templates:new_ticket' => 'New Ticket',
    'email_templates:new_ticket_invoice' => 'New Ticket Invoice',
    'email_templates:ticket_updated' => 'Ticket Update Notification',
    'email_templates:ticket_status_updated' => 'Ticket Status Update Notification',
    'email_templates:assigned_to_task' => "Task Assignment Notification",
    'email_templates:assigned_to_milestone' => "Milestone Assignment Notification",
    'email_templates:new_comment' => "New Comment Notification",

    'global:timer_app' => "Pancake Timer App",
    'global:there_is_no_activity' => "There is no team activity to display.",
    'global:there_are_no_tasks_assigned_to_you' => "There are no tasks assigned to you.",

    /** Dashboard **/


    /** END Dashboard **/

    # v4.0.5

    # Begin v4.1.2 changes
    'invoices:converted_to_estimate' => "Converted invoice #:1 to an estimate.",
    'global:converttoestimate' => 'Convert to Estimate',
    # End v4.1.2 changes

    # Begin v4.1.3 changes
    'tickets:view_archived' => "View Archived Tickets",
    'tickets:view_unarchived' => "View Active Tickets",
    'tickets:archiving_ticket' => "Archiving ticket",
    'tickets:unarchiving_ticket' => "Unarchiving ticket",
    "tickets:unknown_error_ticket_not_altered" => "An unknown error occurred. Your ticket was not altered.",
    # End v4.1.3 changes

    # Begin v4.1.4 changes
    "tasks:starting_timer" => "Starting timer",
    "tasks:stopping_timer" => "Stopping timer",
    "global:all_comments" => "All Comments",
    "dashboard:view_all_comments" => "View All Comments",
    "dashboard:latest_comments" => "Latest Comments",
    "dashboard:written_by" => "Written by :1 on :2",
    "dashboard:client_activity" => "Client Activity",
    "dashboard:view_all_client_activity" => "View All Client Activity",
    "dashboard:view_all_team_activity" => "View All Team Activity",
    "dashboard:my_tasks" => "My Tasks",
    "dashboard:view_all_my_tasks" => "View All My Tasks",
    "dashboard:what_the_team_is_working_on" => "What the team is working on.",
    # End v4.1.4 changes

    # Begin v4.1.6 changes
    "global:save_milestone" => "Save Milestone",
    "global:save_task" => "Save Task",
    "global:private_comment" => "This comment is private. Your client won't see it.",
    "global:clients_cant_see_private" => "Clients can't see private comments.",
    "global:is_private" => "Private?",
    # End v4.1.6 changes

    # Begin v4.1.7 changes
    "tickets:disable_client" => "-- Disable Support Tickets --",
    # End v4.1.7 changes

    # Begin v4.1.8 changes
    "global:css" => "Custom CSS",
    "global:js" => "Custom JavaScript",
    "global:js_explanation" => "You can use jQuery at will. Your code will be added just before &lt;/body&gt;.",
    "settings:frontend_js" => "Frontend Custom JavaScript",
    "settings:backend_js" => "Backend Custom JavaScript",
    # End v4.1.8 changes

    # Begin v4.1.9 changes
    "proposals:estimate_number_and_amount" => "Estimate #:1 (:2)",
    # End v4.1.9 changes

    # Begin v4.1.10 changes
    "clients:delete" => "Delete Client",
    # End v4.1.10 changes

    # Begin v4.1.11 changes
    "global:nolongerexists" => "[NO LONGER EXISTS]",
    "global:billed_amount" => "Billed Amount",
    "global:unbilled_amount" => "Unbilled Amount",
    "global:is_billed" => "Billed?",
    # End v4.1.11 changes

    # Begin v4.1.14 changes
    "settings:year_start" => "Fiscal Year Start Date",
    "dashboard:since_explanation" => "Since :1",
    # End v4.1.14 changes

    # Begin v4.1.15 changes
    "export:invoices_csv" => "Invoices (CSV)",
    # End v4.1.15 changes

    # Begin v4.1.17 changes
    "projects:createdtemplate" => "Project template created. You can now create projects based on this template.",
    "projects:delete_template" => "Delete Template",
    "projects:deleted_template" => "Success! Template deleted.",
    # End v4.1.17 changes

    # Begin v4.1.19 changes
    "export:expenses_csv" => "Expenses (CSV)",
    "export:clients_csv" => "Clients (CSV)",
    "projects:expense_date" => "Expense Date",
    # End v4.1.19 changes

    # Begin v4.1.20 changes
    "clients:can_create_support_tickets" => "Allow client to create support tickets?",
    "tickets:submit_new" => "Submit a Ticket",
    "global:cancel" => "Cancel",
    "global:timers" => "Timers",
    "global:more" => "More",
    # End v4.1.20 changes

    # Begin v4.1.23 changes
    "global:search" => "Search",
    "authorize:api_login_id" => "API Login ID",
    "authorize:api_login_id_description" => "You can find this in Authorize.net, under Account > API Login ID and Transaction Key.",
    "authorize:md5_hash" => "MD5-Hash",
    "authorize:md5_hash_description" => "By default, this is your API Login ID. You can change this in Authorize.net, under Account > MD5-Hash. If you see 'Hash Value Set: No', leave this empty.",
    "transactions:paymentfailed" => "Payment Failed",
    "transactions:extrapaymentfailed" => "An unknown problem occurred while trying to process your payment. Please contact :1 at :2 for assistance.",
    # End v4.1.23 changes

    # Begin v4.1.24 changes
    "projects:tracked" => "Tracked",
    "invoices:partially_paid" => "Partially",
    # End v4.1.24 changes

    # Begin v4.1.27 changes
    "global:projects_ommitted" => ":1 projects not shown",
    "global:tasks_ommitted" => ":1 tasks not shown",
    # End v4.1.27 changes

    # Begin v4.1.28 changes
    "login:username_email" => "Username / Email",
    # End v4.1.28 changes

    # Begin v4.1.31 changes
    "settings:when_new_updates_are_available" => "When new updates are available",
    "settings:dont_install_just_notify_me" => "Don't install, just notify me",
    "settings:install_automatically" => "Install automatically",
    "settings:loading_update_details" => "Loading update details... This may take a minute or two. Feel free to refresh at any time.",
    "settings:will_have_to_overwrite_single_file" => "Pancake will have to overwrite 1 file that you have modified manually!",
    "settings:will_have_to_overwrite_multiple_files" => "Pancake will have to overwrite :1 files that you have modified manually!",
    "settings:checking_for_updates" => "Checking for updates, please wait. This page will refresh automatically.",
    "settings:updating_please_wait" => "Updating, please wait. This page will refresh once the update has finished.",
    "settings:description" => "Save your updated settings before changing tab or leaving the page.",
    "settings:business_identities" => "Business Identities",
    "settings:business_name" => "Business Name",
    "settings:new_business" => "New Business",
    "settings:business_identity" => "Business Identity",
    "settings:business_identity_explanation" => "Your client will see the above business identity on all of their emails, PDFs and pages.",
    # End v4.1.31 changes

    # Begin v4.1.33 changes
    "settings:have_been_updated" => 'The settings have been updated.',
    "tasks:all" => "All Tasks",
    "projects:progress" => "Progress",
    "expenses:name" => "Expense Name",
    "tasks:add_hours_to" => "Add Hours To :1",
    "global:today" => "Today",
    "global:yesterday" => "Yesterday",
    "global:other" => "Other",
    "global:now" => "Now",
    "timesheet:view_for_clients" => "View timesheet (for clients)",
    "global:not_billed_yet" => "Not billed yet.",
    "tasks:total_logged_time" => "Total logged time",
    "global:biweekly" => "Biweekly",
    # End v4.1.33 changes

    # Begin v4.2 changes
    'settings:default_task_due_date' => 'Default Task Due Date',
    'settings:default_task_due_date_explain' => "days after task is created. If you don't want a default date, leave this empty.",
    # End v4.2 changes

    # Note: 4.2.x brought changes to the language file that weren't appended to the end of the file.
    # If you're updating your translation, make sure to check out a diff of the language file, instead of relying on just checking the bottom of the file.

    # Begin v4.2.4 changes
    "expenses:sort_or_filter" => "Sort/Filter Expenses",
    "expenses:show" => "Show Expenses",
    "global:sort_by" => "Sort by",
    "global:sort_order" => "Sort order",
    "global:asc" => "Ascending (A-Z)",
    "global:desc" => "Descending (Z-A)",
    # End v4.2.4 changes

    # Begin v4.3.0 changes
    "settings:tax_compound" => "Compound?",
    "settings:no_tax" => "No Tax",
    "settings:default_taxes" => "Default Taxes",
    "global:and" => "and",
    "global:tax" => "Tax",
    # End v4.3.0 changes

    # Begin v4.3.6 changes
    "global:youarenotallowed" => "You are not allowed to access this page.",
    # End v4.3.6 changes

    # Begin v4.3.7 changes
    'settings:notify_email' => 'Support Email',
    'settings:billing_email' => 'Billing Email',
    'settings:brand_name' => 'Brand Name',
    'settings:admin_name' => 'Admin Name',
    'settings:brand_name_explanation' => 'This is the name you want your clients to see. It will be displayed everywhere except invoices.',
    'settings:business_name_explanation' => 'This is your legal business name. It will be displayed on your invoices.',
    'settings:admin_name_explanation' => 'By default, this appears at the bottom of your emails to clients.',
    'settings:billing_email_explanation' => 'This is the "From" address used for Invoice, Estimate and Proposal emails.',
    'settings:notify_email_explanation' => 'This is the "From" address used for comment notifications and support tickets.',
    'settings:show_name_along_with_logo' => 'Show your brand name alongside your logo?',
    'dashboard:your_projects' => 'Your Projects',
    'dashboard:today' => 'Today',
    'dashboard:team_activity' => 'Updates',
    'dashboard:snapshot' => 'Snapshot',
    'invoices:frequency' => 'Frequency',
    'invoices:auto_send' => 'Auto Send?',
    'invoices:send' => 'Send',
    'invoices:days_before_invoice_is_due' => 'days before invoice is due',
    'invoices:cannot_change_recurrences' => 'You cannot change the recurrence settings of an invoice that is a recurrence of another invoice.',
    # End v4.3.7 changes

    # Begin v4.3.8 changes
    'email_templates:client_area_details' => 'Client Area Details',
    'settings:always_https' => 'Force HTTPS?',
    'settings:always_https_explanation' => 'This will make Pancake always load via HTTPS. Use this only if you have an SSL certificate installed and can access Pancake via HTTPS.',
    'settings:remittance_slip' => 'Remittance Slip',
    'invoices:mail_to' => 'Mail To',
    'clients:send_client_area_email' => 'Send Client Area Details',
    'clients:you_cannot_send' => 'You cannot send this client his or her client area details by email because this client does not have an email address.',
    # End v4.3.8 changes

    # Begin v4.4.0 changes
    'invoices:discount' => 'Discount',
    'invoices:discount_explain' => 'Add % for percentages.',
    'invoices:addedconf' => 'You have added invoice # <strong>:1</strong>, totalling <strong>:2</strong> (:3 with tax) for :4:5.',
    'estimates:addedconf' => 'You have added estimate # <strong>:1</strong>, totalling <strong>:2</strong> (:3 with tax) for :4:5.',
    'credit_notes:edit_credit_note' => 'Edit Credit Note #:1',
    'credit_notes:create_credit_note' => 'Create Credit Note',
    'global:credit_notes' => 'Credit Notes',
    'global:credit_note' => 'Credit Note',
    'credit_notes:alltitle' => 'All Credit Notes',
    'credit_notes:nocredit_notesforthefilteredclient' => 'You have no credit notes for :1.',
    'credit_notes:no_credit_notes' => 'You have no credit notes.',
    'credit_notes:create' => 'Create Credit Note',
    'credit_notes:no_credit_notes_body' => 'You should get on that! Would you like to create one now?',
    'credit_notes:edit' => 'Edit Credit Note',
    'credit_notes:credit_note_number' => 'Credit Note #:1',
    'credit_notes:credit_note_date' => 'Credit Note Date',
    'credit_notes:delete_title' => 'Delete this credit note?',
    'credit_notes:delete_message' => 'Are you sure you want to delete this credit note?',
    'credit_notes:addedconf' => 'You have added credit note # <strong>:1</strong>, totalling <strong>:2</strong> (:3 with tax) for :4:5.',
    'credit_notes:send_now_title' => 'Send credit note now?',
    'credit_notes:send_now_body' => "Fill out the form below and we'll deliver this credit note for you.",
    'email_templates:new_credit_note' => 'New Credit Note',
    'credit_notes:send_now' => 'Send Credit Note',
    'credit_notes:preview' => 'Preview Credit Note',
    'credit_notes:duplicated' => "Duplicated credit note #:1. The new credit note's number is #:2.",
    'credit_notes:client_viewed' => ":1 viewed <a href=':2'>credit note #:3</a> on :4",
    'invoices:make_bulk_payment' => 'Make Multiple Payments',
    'global:success' => 'Success!',
    'clients:view' => 'View Client',
    'invoices:store_bulk_payment' => 'Save Multiple Payments',
    'invoices:x_invoices' => ':1 invoices',
    'invoices:amount_to_pay' => 'Amount to mark as paid',
    'invoices:bulk_payment_added' => "The payments were added successfully.",
    'clients:credit_balance_currently' => "Credit Balance (currently :1)",
    'clients:has_no_unpaid_invoices' => ":1 has no unpaid invoices.",
    'invoices:send_payment_notification' => "Send a payment notification email to the client?",
    'invoices:send_bulk_payment_notification' => "Send payment notification emails to the client?",
    'invoices:specify_bulk_payment_details' => "Specify the details of your client's payments, and select to which invoices the payments apply.",
    'global:credit_balance' => "Credit Balance",
    # End v4.4.0 changes

    # Begin v4.4.1 changes
    'credit_notes:view' => 'View Credit Note',
    # End v4.4.1 changes

    # Begin v4.4.3 changes
    'tickets:ticket_number' => "Ticket #:1",
    'settings:ticket_status_for_sending_invoice' => "Ticket Status for Invoicing",
    'settings:ticket_status_for_sending_invoice_description' => "When a paid ticket is updated to this status, an invoice will automatically be generated and sent to the client.",
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
    'invoices:pancake_will_automatically_change_is_viewable' => "This will automatically be changed to 'Yes' when you email the invoice to the client.",
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
    'settings:automaticallybccclientemail' => 'Automatically send a copy of all client emails to your main business identity\'s support email address.',
    # End v4.5.6 changes

    # Begin v4.5.7 changes
    'invoices:send_to_client' => "Email Invoice To Client",
    'estimates:send_to_client' => "Email Estimate To Client",
    'global:beforeunload' => "You are about to leave this page. If you do so, all the data you have entered so far will be lost. Are you sure that you wish to leave this page?",
    # End v4.5.7 changes

    # Begin v4.5.8 changes
    'global:appendtoproject' => 'Convert into tasks for ":1"',
    'estimates:appended' => 'Converted estimate #:1 into tasks for ":2".',
    # End v4.5.8 changes

    # Begin v4.6.0 changes
    'items:percentage_discount' => "Discount (%)",
    'items:fixed_discount' => "Discount (:1)",
    'invoices:discount_percentage' => "Discount (:1%)",
    'invoices:sub_total_after_discounts' => "Subtotal (after discounts)",
    'settings:tax_reg' => 'Tax Numbers / IDs',
    'clients:tax_registration_number' => ':1 Number / ID',
    'clients:add_custom_field' => "Add another custom field",
    'clients:tax_numbers' => 'Client Tax Numbers / IDs',
    'clients:custom_fields' => "Custom Fields",
    'expenses:category_added' => "Success! The expense category was created successfully.",
    'clients:update_balance' => "Update Credit Balance",
    'clients:balance_updated' => "Success! The client's credit balance was updated successfully.",
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
    "settings:delete_error" => "Delete Error",
    "global:once" => "Once",
    "global:twice" => "Twice",
    "global:x_times" => ":1 times",
    "global:occurred_times" => "Occurred :1",
    "settings:view_error_details" => "View Error Details",
    "error:deleting" => "Deleting...",
    "error:reporting" => "Reporting...",
    "clients:noclientbodyfiltered" => "None of your clients' names start with ':1'.",
    "tickets:archive" => "Archive",
    "tickets:unarchive" => "Restore",
    'projects:unarchive_proj' => 'Restore Project',
    'invoices:lastreoccurrence' => 'Last Recurrence: :1',
    'invoices:thisisareoccurrence' => 'This invoice is a recurrence of Invoice :1.',

    ### This was moved here from the Projects language files, which were in a separate folder.
    'projects:role_view' => 'View',
    'projects:role_create' => 'Create',
    'projects:role_edit' => 'Edit',
    'projects:role_delete' => 'Delete',
    'projects:role_add_task' => 'Add Task',
    'projects:role_edit_task' => 'Edit Task',
    'projects:role_delete_task' => 'Delete Task',
    'projects:role_add_milestone' => 'Add Milestone',
    'projects:role_edit_milestone' => 'Edit Milestone',
    'projects:role_delete_milestone' => 'Delete Milestone',
    'projects:role_track_time' => 'Track Time',
    "projects.title" => "Projects",
    "projects.create.title" => "Create Project",
    "projects.edit.title" => "Update Project",
    "projects.label.name" => "Name:",
    "projects.label.client" => "Client:",
    "projects.label.due_date" => "Due Date:",
    "projects.label.rate" => "Hourly Rate:",
    "projects.label.description" => "Description:",
    "projects.label.is_viewable" => "Viewable in client area?",
    "projects.button.create" => "Create Project &rarr;",
    "projects.create.succeeded" => "The project has been created!",
    "projects.button.edit" => "Update Project &rarr;",
    "projects.button.delete" => "Delete Project &rarr;",
    "projects.update.succeeded" => "The project has been updated!",
    "projects.delete.title" => "Are you sure you want to delete this project?",
    "times.title" => "Times",
    "times.create.title" => "Add Time",
    "times.label.start_time" => "Start time:",
    "times.label.end_time" => "End time:",
    "times.label.date" => "Date:",
    "times.label.task_id" => "Task:",
    "times.label.note" => "Note:",
    "times.label.notes" => "Notes:",
    "times.button.create" => "Add Time &rarr;",
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
    'partial:addanother' => 'Add another part to the payment schedule',
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
    'projects:add_new_task' => "Add New Task",
    'projects:delete_project_template' => "Delete Project Template",
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
    'global:project_task' => 'Task',
    'global:ticket' => 'Ticket',
    'tickets:added' => "The ticket was created successfully.",
    'tickets:replied' => "Your response to the ticket was saved successfully.",
    'tickets:user_updated_ticket' => ":1 updated the ticket status to :2 on :3",
    "global:reply" => "Reply",
    'global:attach_file' => "Attach File (Maximum Size: :1)",
    "global:download_csv" => "Download CSV",
    "reports:uncollected" => "Uncollected",
    "reports:collected" => "Collected",
    "clients:filter_clients" => "Filter Clients",
    "users:deactivate" => "Deactivate",
    "users:activate" => "Activate",
    "global:group" => "Group",
    "users:edit_user" => "Edit User",
    "users:please_enter_information" => "Please enter the user's information below.",
    "users:confirm_password" => "Confirm Password",
    "invoices:not_associated_with_a_project" => "-- Not associated with a project --",
    "global:by_x_with_time" => "By :1, :2.",
    "tasks:add_notes" => "Add notes",
    "tasks:complete_this_task" => "Complete this task",
    "tasks:task_notes" => "Task Notes",
    "tasks:discuss_task" => "Discuss Task",
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
    "error:upgrade_php" => "You should upgrade your PHP version to at least 5.5 (ideally 5.6). To do so, please talk to your server administrators and ask them to update PHP.",
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
    "proposals:archived" => "You've archived proposal #:1 successfully.",
    "proposals:restored" => "You've restored proposal #:1 successfully.",
    "invoices:archived" => "You've archived invoice #:1 successfully.",
    "invoices:restored" => "You've restored invoice #:1 successfully.",
    "estimates:archived" => "You've archived estimate #:1 successfully.",
    "estimates:restored" => "You've restored estimate #:1 successfully.",
    "credit_notes:archived" => "You've archived credit note #:1 successfully.",
    "credit_notes:restored" => "You've restored credit note #:1 successfully.",
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
    "tickets:invoice_for_ticket" => "Ticket #:1 - :2",
    "tickets:link_to_ticket" => "Link to Ticket: :1",
    "dashboard:outstanding_invoices" => 'Outstanding Invoices',
    "dashboard:view_all_outstanding_invoices" => "View All Outstanding Invoices",
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
    "proposals:missing_client" => "You didn't select a client.",
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
    "settings:add_another_business" => "Add another business",
    # End v4.10.2 changes

    # Begin v4.11.6 changes
    'global:auto_send_needs_pancake_cron_job' => 'To automatically send invoices, you must setup the <a target="_blank" href="https://www.pancakeapp.com/documentation/cron">Pancake Cron Job</a>.',
    'global:you_need_pancake_cron_job' => 'To use recurring invoices, you must setup the <a target="_blank" href="https://www.pancakeapp.com/documentation/cron">Pancake Cron Job</a>.',
    'settings:always_autosend' => "Auto Send invoices by default",
    'settings:send_x_days_before_explain' => "Default number of days before an invoice is due to auto send it to a client.",
    # End v4.11.6 changes

    # Begin v4.12.0 changes
    "invoice:description" => "Description",
    "invoices:charge_when_due" => "Charge When Due",
    "invoices:auto_charge" => "Charge Client Automatically",
    "invoices:pancake_will_charge_when_invoice_is_due" => "Pancake will automatically charge this client when the invoice is due, using their saved payment details.",
    "invoices:pancake_cannot_auto_charge" => "There are no saved payment details for this client, so Pancake cannot auto-charge. The client has to pay you through Stripe at least once in order to save their payment details.",
    "invoices:auto_charge_needs_pancake_cron_job" => 'To automatically charge clients, you must setup the <a target="_blank" href="https://www.pancakeapp.com/documentation/cron">Pancake Cron Job</a>.',
    "global:or" => "or",
    "invoices:could_not_auto_charge" => "Pancake was not able to charge your client automatically. Your client will have to pay for Invoice #:1 manually.",
    "invoices:auto_charged" => "Your client was charged for Invoice #:1. The invoice is now paid.",
    "settings:gmail_setup_successfully" => "You've connected your Pancake with your Gmail account successfully!",
    "settings:pancake_uses_our_servers" => "Note: Pancake uses Pancake servers to make sure the permission to use Gmail doesn't expire.<br />No information of any kind is stored. If you have your own Google Developer Account, you can <a target='_blank' href='https://www.pancakeapp.com/faq/google-oauth'>use your own server</a>.",
    "settings:you_are_signed_in" => "You are signed in as :1.<br />Click the button below if you need to update your details or use a different account.",
    "settings:you_are_using_old_auth" => "Pancake is currently sending email as :1 using your email and password.<br />Click the button below to upgrade to a more secure way of using Gmail.",
    "invoices:send_now" => "Send Invoice",
    "credit_notes:messageupdated" => "The credit note has been updated!",
    'credit_notes:resend' => 'Resend Credit Note',
    "global:support" => "Help / Support",
    # End v4.12.0 changes

);

/** End of file: pancake_lang.php **/