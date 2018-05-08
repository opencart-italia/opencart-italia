<?php 

$_['heading_title']     =  'CardConnect';
$_['tab_settings']     =  'impostazioni';
$_['tab_order_status']     =  'Stato:';
$_['text_extension']     =  'estensioni';
$_['text_success']     =  'Successo: hai modificato il modulo di pagamento CardConnect!';
$_['text_edit']     =  'Modifica CardConnect';
$_['text_cardconnect']     =  '<a href="http://www.cardconnect.com" target="_blank"> <img src = "vista / immagine / pagamento / cardconnect.png" alt = "CardConnect" title = "CardConnect"> </a >';
$_['text_payment']     =  'Pagamento';
$_['text_authorize']     =  'Autorizzare';
$_['text_live']     =  'Vivere';
$_['text_test']     =  'Test';
$_['text_no_cron_time']     =  'Il cron non è ancora stato eseguito';
$_['text_payment_info']     =  'Payment Pagine informative';
$_['text_payment_method']     =  'Metodo Pagamento';
$_['text_card']     =  'Carta';
$_['text_echeck']     =  'eCheck';
$_['text_reference']     =  'Riferimento';
$_['text_update']     =  'Aggiornare';
$_['text_order_total']     =  'Ordine totale';
$_['text_total_captured']     =  'Totale catturato';
$_['text_capture_payment']     =  'Cattura pagamento';
$_['text_refund_payment']     =  'Pagamento di rimborso';
$_['text_void']     =  'vuoto';
$_['text_transactions']     =  'Le transazioni';
$_['text_column_type']     =  'Tipo';
$_['text_column_reference']     =  'Riferimento';
$_['text_column_amount']     =  'Quantità';
$_['text_column_status']     =  'Stato Categoria';
$_['text_column_date_modified']     =  'Modificato il';
$_['text_column_date_added']     =  'Aggiunto il';
$_['text_column_update']     =  'Aggiornare';
$_['text_column_void']     =  'vuoto';
$_['text_confirm_capture']     =  'Sei sicuro? you want to capture the payment?';
$_['text_confirm_refund']     =  'Sei sicuro? you want to refund the payment?';
$_['text_inquire_success']     =  'La richiesta ha avuto successo';
$_['text_capture_success']     =  'La richiesta di acquisizione è riuscita';
$_['text_refund_success']     =  'La richiesta di rimborso ha avuto successo';
$_['text_void_success']     =  'La richiesta non valida ha avuto successo';
$_['entry_merchant_id']     =  'ID Commerciante';
$_['entry_api_username']     =  'API Nome utente';
$_['entry_api_password']     =  'Password API';
$_['entry_token']     =  'Segno segreto';
$_['entry_transaction']     =  'Transazione';
$_['entry_environment']     =  'Ambiente';
$_['entry_site']     =  'Luogo';
$_['entry_store_cards']     =  'Memorizza le carte';
$_['entry_echeck']     =  'eCheck';
$_['entry_total']     =  'Totale';
$_['entry_geo_zone']     =  'Geo Zone';
$_['entry_status']     =  'Stato Categoria';
$_['entry_logging']     =  'Registrazione di debug';
$_['entry_sort_order']     =  'Ordina';
$_['entry_cron_url']     =  'URL del lavoro di Cron';
$_['entry_cron_time']     =  'Cron lavoro ultima prova';
$_['entry_order_status_pending']     =  'in attesa di';
$_['entry_order_status_processing']     =  'lavorazione';
$_['help_merchant_id']     =  'Il tuo ID personale del tuo account CardConnect.';
$_['help_api_username']     =  'Il tuo nome utente per accedere all\'API CardConnect.';
$_['help_api_password']     =  'La tua password per accedere all\'API CardConnect.';
$_['help_token']     =  'Inserisci un token casuale per la sicurezza o utilizza quello generato.';
$_['help_transaction']     =  'Scegli "Pagamento" per acquisire immediatamente il pagamento o "Autorizza" per approvarlo.';
$_['help_site']     =  'Ciò determina la prima parte dell\'URL API. Cambiare solo se istruito.';
$_['help_store_cards']     =  'Sia che si desideri memorizzare le carte usando la tokenizzazione.';
$_['help_echeck']     =  'Se desideri offrire la possibilità di pagare utilizzando un eCheck.';
$_['help_total']     =  'Il totale dell\'ordine deve arrivare prima che questo metodo di pagamento diventi attivo. Deve essere un valore senza segno di valuta.';
$_['help_logging']     =  'L\'abilitazione del debug scriverà dati sensibili in un file di registro. Dovresti sempre disattivare, a meno che non sia stato specificato diversamente.';
$_['help_cron_url']     =  'Impostare un processo cron per chiamare questo URL in modo che gli ordini siano aggiornati automaticamente. È stato progettato per essere eseguito poche ore dopo l\'ultima cattura di un giorno lavorativo.';
$_['help_cron_time']     =  'Questa è l\'ultima volta che l\'URL del lavoro cron è stato eseguito.';
$_['help_order_status_pending']     =  'Lo stato dell\'ordine quando l\'ordine deve essere autorizzato dal commerciante.';
$_['help_order_status_processing']     =  'Lo stato dell\'ordine quando l\'ordine viene acquisito automaticamente.';
$_['button_inquire_all']     =  'Richiedere tutto';
$_['button_capture']     =  'Catturare';
$_['button_refund']     =  'Rimborso';
$_['button_void_all']     =  'Vuoto tutto';
$_['button_inquire']     =  'chiedere informazioni';
$_['button_void']     =  'vuoto';
$_['error_permission']     =  'Avviso: Non hai l\'autorizzazione a modificare il pagamento CardConnect!';
$_['error_merchant_id']     =  'Obbligatorio ID Merchant!';
$_['error_api_username']     =  'API Nome utente Required!';
$_['error_api_password']     =  'Password API richiesto!';
$_['error_token']     =  'Segreto segreto richiesto!';
$_['error_site']     =  'Sito richiesto!';
$_['error_amount_zero']     =  'L\'importo deve essere superiore a zero!';
$_['error_no_order']     =  'Nessun dato d\'ordine corrispondente!';
$_['error_invalid_response']     =  'Risposta non valida ricevuta!';
$_['error_data_missing']     =  'Dati mancanti!';
$_['error_not_enabled']     =  'Modulo non abilitato!';
