Pancake Email Variables
=======================

The following is a collection of all the variables available to emails in Pancake. It should make knowing what to use a lot easier (a lot less guessing!). 

We're still working on adding documentation for each variable, getting rid of useless variables, and integrating this documentation into Pancake properly, so if you have any comments, questions or suggestions, [**let us know**](https://www.pancakeapp.com/account/support/ticket/new).

If you need any help, or need any more variables, we can add them as well!

Client
------

* `{{client.access_url}}`
* `{{client.address}}`
* `{{client.business_identity}}`
* `{{client.can_create_support_tickets}}`
* `{{client.company}}`
* `{{client.created}}`
* `{{client.display_name}}`
* `{{client.email}}`
* `{{client.fax}}`
* `{{client.first_name}}`
* `{{client.id}}`
* `{{client.language}}`
* `{{client.last_name}}`
* `{{client.mobile}}`
* `{{client.modified}}`
* `{{client.owner_id}}`
* `{{client.passphrase}}`
* `{{client.phone}}`
* `{{client.profile}}`
* `{{client.support_user_id}}`
* `{{client.title}}`
* `{{client.unique_id}}`
* `{{client.website}}`

Ticket
------

This only applies if it's a ticket notification email.

* `{{ticket.assigned_user_id}}`
* `{{ticket.client_id}}`
* `{{ticket.created}}`
* `{{ticket.id}}`
* `{{ticket.invoice_id}}`
* `{{ticket.is_archived}}`
* `{{ticket.is_paid}}`
* `{{ticket.name}}`
* `{{ticket.owner_id}}`
* `{{ticket.priority_id}}`
* `{{ticket.resolved}}`
* `{{ticket.status_id}}`
* `{{ticket.status}}`
* `{{ticket.subject}}`
* `{{ticket.url}}`

Comment
-------

This only applies if it's a comment notification email.

* `{{comment.client_id}}`
* `{{comment.comment}}`
* `{{comment.created}}`
* `{{comment.id}}`
* `{{comment.is_private}}`
* `{{comment.item_id}}`
* `{{comment.item_type}}`
* `{{comment.url_for_logged_in_users}}`
* `{{comment.url}}`
* `{{comment.user_id}}`
* `{{comment.user_name}}`
* `{{item}}` - The type/name/number of the item to which the comment applies. For example, for a project, it'd be "Project: [name]". For an invoice, it'd be "Invoice #XX".

IPN (Payment Notification)
--------------------------

This only applies if it's a payment notification email.

* `{{ipn.first_name}}`
* `{{ipn.gateway_surcharge}}`
* `{{ipn.is_paid}}`
* `{{ipn.last_name}}`
* `{{ipn.payer_status}}`
* `{{ipn.payment_amount}}`
* `{{ipn.payment_date}}`
* `{{ipn.payment_gross}}`
* `{{ipn.payment_method}}`
* `{{ipn.payment_status}}`
* `{{ipn.payment_type}}`
* `{{ipn.transaction_fee}}`
* `{{ipn.txn_id}}`
* `{{currency.code}}`
* `{{currency.symbol}}`
* `{{gateway.title}}` - The name of the gateway used for a payment (e.g. Stripe, PayPal).
* `{{gateway.frontend_title}}` - The client-friendly name of the gateway used for a payment (e.g. for Stripe, it would be "Credit Card").
* `{{gateway.gateway}}` - The Pancake name of the gateway (e.g. stripe_m, or paypal_m).

Invoice / Estimate / Credit Note
-------

**NOTE: You can replace `invoice.` with `estimate.` or `credit_note.` as appropriate. The three are treated exactly the same in Pancake, so the notes below regarding invoice details and even invoice items apply equally to estimates and credit notes.**

Invoice details are available when sending an invoice, sending a reminder, or for payment notification emails.

* `{{number}}`
* `{{description}}`
* `{{invoice.address}}`
* `{{invoice.amount}}`
* `{{invoice.auto_charge}}`
* `{{invoice.auto_send}}`
* `{{invoice.billable_amount}}`
* `{{invoice.client_id}}`
* `{{invoice.client_name}}`
* `{{invoice.client_unique_id}}`
* `{{invoice.company}}`
* `{{invoice.currency_code}}`
* `{{invoice.currency_id}}`
* `{{invoice.currency_symbol}}`
* `{{invoice.date_entered}}`
* `{{invoice.date_to_automatically_notify}}`
* `{{invoice.days_overdue}}`
* `{{invoice.description}}`
* `{{invoice.due_date}}`
* `{{invoice.email}}`
* `{{invoice.exchange_rate}}`
* `{{invoice.first_name}}`
* `{{invoice.formatted_is_paid}}`
* `{{invoice.frequency}}`
* `{{invoice.has_discount}}`
* `{{invoice.has_files}}`
* `{{invoice.has_sent_notification}}`
* `{{invoice.has_tax_reg}}`
* `{{invoice.id}}`
* `{{invoice.invoice_number}}`
* `{{invoice.is_archived}}`
* `{{invoice.is_paid}}`
* `{{invoice.is_recurring}}`
* `{{invoice.is_viewable}}`
* `{{invoice.item_name}}`
* `{{invoice.language}}`
* `{{invoice.last_name}}`
* `{{invoice.last_sent}}`
* `{{invoice.last_status_change}}`
* `{{invoice.last_viewed}}`
* `{{invoice.list_invoice_belongs_to}}`
* `{{invoice.next_part_to_pay}}`
* `{{invoice.next_recur_date}}`
* `{{invoice.notes}}`
* `{{invoice.number}}`
* `{{invoice.original_due_date}}`
* `{{invoice.overdue}}`
* `{{invoice.owner_id}}`
* `{{invoice.paid_amount}}`
* `{{invoice.paid_part_count}}`
* `{{invoice.paid}}`
* `{{invoice.part_count}}`
* `{{invoice.payer_status}}`
* `{{invoice.payment_date}}`
* `{{invoice.payment_gross}}`
* `{{invoice.payment_hash}}`
* `{{invoice.payment_status}}`
* `{{invoice.payment_type}}`
* `{{invoice.phone}}`
* `{{invoice.project_id}}`
* `{{invoice.proposal_id}}`
* `{{invoice.proposal_num}}`
* `{{invoice.real_invoice_id}}`
* `{{invoice.real_invoice_unique_id}}`
* `{{invoice.recur_id}}`
* `{{invoice.send_x_days_before}}`
* `{{invoice.status}}`
* `{{invoice.sub_total_after_discounts}}`
* `{{invoice.sub_total}}`
* `{{invoice.tax_collected}}`
* `{{invoice.tax_total}}`
* `{{invoice.total_comments}}`
* `{{invoice.total_transaction_fees}}`
* `{{invoice.total}}`
* `{{invoice.txn_id}}`
* `{{invoice.type}}`
* `{{invoice.unique_id}}`
* `{{invoice.unpaid_amount}}`
* `{{invoice.unpaid_part_count}}`
* `{{invoice.url}}`

Invoice (Items)
------------------

You can loop through these quite easily. See the following sample code:

```
{{#invoice.items}}
  <p>{{qty}} x {{name}}: {{total}}</p>
{{/invoice.items}}
```

* `{{invoice.items.1.billable_total}}`
* `{{invoice.items.1.currency_code}}`
* `{{invoice.items.1.description}}`
* `{{invoice.items.1.discount_is_percentage}}`
* `{{invoice.items.1.discount}}`
* `{{invoice.items.1.id}}`
* `{{invoice.items.1.is_taxable}}`
* `{{invoice.items.1.item_type_id}}`
* `{{invoice.items.1.item_type_table}}`
* `{{invoice.items.1.name}}`
* `{{invoice.items.1.qty}}`
* `{{invoice.items.1.rate}}`
* `{{invoice.items.1.sort}}`
* `{{invoice.items.1.tax_label}}`
* `{{invoice.items.1.tax_total}}`
* `{{invoice.items.1.total_pre_tax_post_discounts}}`
* `{{invoice.items.1.total}}`
* `{{invoice.items.1.type}}`

Invoice (Payments)
------------------

You can loop through these quite easily. See the following sample code:

```
{{#invoice.partial_payments}}
  <p>Payment #{{key}}: {{billableAmount}}</p>
{{/invoice.partial_payments}}
```

* `{{invoice.partial_payments.1.amount}}`
* `{{invoice.partial_payments.1.billableAmount}}`
* `{{invoice.partial_payments.1.due_date_input}}`
* `{{invoice.partial_payments.1.due_date}}`
* `{{invoice.partial_payments.1.gateway_surcharge}}`
* `{{invoice.partial_payments.1.id}}`
* `{{invoice.partial_payments.1.improved}}`
* `{{invoice.partial_payments.1.is_paid}}`
* `{{invoice.partial_payments.1.is_percentage}}`
* `{{invoice.partial_payments.1.item_name}}`
* `{{invoice.partial_payments.1.key}}`
* `{{invoice.partial_payments.1.notes}}`
* `{{invoice.partial_payments.1.over_due}}`
* `{{invoice.partial_payments.1.payer_status}}`
* `{{invoice.partial_payments.1.payment_date}}`
* `{{invoice.partial_payments.1.payment_gross}}`
* `{{invoice.partial_payments.1.payment_method}}`
* `{{invoice.partial_payments.1.payment_status}}`
* `{{invoice.partial_payments.1.payment_type}}`
* `{{invoice.partial_payments.1.payment_url}}`
* `{{invoice.partial_payments.1.transaction_fee}}`
* `{{invoice.partial_payments.1.txn_id}}`
* `{{invoice.partial_payments.1.unique_id}}`
* `{{invoice.partial_payments.1.unique_invoice_id}}`

Business Identity
--------

* `{{business.admin_name}}`
* `{{business.billing_email_from}}`
* `{{business.billing_email}}`
* `{{business.brand_name}}`
* `{{business.id}}`
* `{{business.logo_filename}}`
* `{{business.logo_height}}`
* `{{business.logo_width}}`
* `{{business.mailing_address}}`
* `{{business.notify_email_from}}`
* `{{business.notify_email}}`
* `{{business.show_name_along_with_logo}}`
* `{{business.site_name}}`

Settings
--------

* `{{logo}}`
* `{{user_display_name}}`
* `{{settings.accounting_type}}`
* `{{settings.admin_name}}`
* `{{settings.admin_theme}}`
* `{{settings.allowed_extensions}}`
* `{{settings.always_autosend}}`
* `{{settings.always_https}}`
* `{{settings.auto_update}}`
* `{{settings.autosave_proposals}}`
* `{{settings.backend_css}}`
* `{{settings.backend_js}}`
* `{{settings.bcc}}`
* `{{settings.changed_files}}`
* `{{settings.changelog}}`
* `{{settings.currency}}`
* `{{settings.date_format}}`
* `{{settings.default_invoice_due_date}}`
* `{{settings.default_invoice_notes}}`
* `{{settings.default_task_due_date}}`
* `{{settings.default_tax_id}}`
* `{{settings.email_secure}}`
* `{{settings.email_type}}`
* `{{settings.enable_pdf_attachments}}`
* `{{settings.filesystem}}`
* `{{settings.frontend_css}}`
* `{{settings.frontend_js}}`
* `{{settings.gmail_access_token}}`
* `{{settings.gmail_email}}`
* `{{settings.gmail_expiry_timestamp}}`
* `{{settings.gmail_refresh_token}}`
* `{{settings.hashes_version}}`
* `{{settings.hashes}}`
* `{{settings.hide_tax_column}}`
* `{{settings.include_remittance_slip}}`
* `{{settings.include_time_entry_dates}}`
* `{{settings.installation_id}}`
* `{{settings.items_per_page}}`
* `{{settings.kitchen_route}}`
* `{{settings.language}}`
* `{{settings.latest_version_fetch}}`
* `{{settings.latest_version}}`
* `{{settings.logo_url}}`
* `{{settings.mailing_address}}`
* `{{settings.never_use_ssl}}`
* `{{settings.notify_email}}`
* `{{settings.pdf_page_size}}`
* `{{settings.remittance_slip}}`
* `{{settings.send_multipart}}`
* `{{settings.send_x_days_before}}`
* `{{settings.site_name}}`
* `{{settings.split_line_items_by}}`
* `{{settings.suzip_parts}}`
* `{{settings.task_time_interval}}`
* `{{settings.theme}}`
* `{{settings.ticket_status_for_sending_invoice}}`
* `{{settings.time_format}}`
* `{{settings.timezone}}`
* `{{settings.use_utf8_font}}`
* `{{settings.version}}`
* `{{settings.year_start_day}}`
* `{{settings.year_start_month}}`
