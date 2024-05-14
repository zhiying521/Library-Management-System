<?php

return [
    'login' => [
        'name' => 'Il nome utente non deve essere vuoto',
        'password' => 'La password non deve essere vuota',
        'email' => 'La lunghezza della cassetta delle lettere non deve superare i 128 bit',
        'empty' => 'Gli amministratori non devono restare vuoti',
        'array' => 'L’amministratore deve essere in gruppi'
    ],
    'product' => [
        'name' => 'Il nome commerciale non deve superare 128 bit',
        'bar_code' => 'La lunghezza del codice a barre non deve essere superiore a 128 bit',
        'selling_price' => 'L’importo del prezzo di vendita non può essere inferiore a 0',
        'buying_price' => 'L’importo di costo non può essere inferiore a zero',
        'allergy' => 'Le denominazioni allergiche non devono superare 128 bit',
        'empty' => 'Le merci non possono essere vuote',
        'array' => 'Le merci devono essere suddivise in gruppi',
        'remark' => 'Il numero di osservazioni non deve essere superiore a 128',
    ],
    'order' => [
        'count' => 'I quantitativi acquistati superano le scorte',
        'lessen_count' => 'I quantitativi superano quelli acquistati',
        'price' => 'Più del prezzo di acquisto',
        'payment' => 'Ordinativi di pagamento',
        'payment_refund' => 'Ordinativi non pagati',
        'refund_price' => 'L’importo della restituzione deve essere un importo',
        'cancel' => 'Ordinanza annullata',
        'exceed' => 'Importo in eccesso',


        'empty' => 'Nessuna merce',
        'id_null' => 'Nessuna merce',
        'count_null' => 'Nessuna quantità',
        'remark' => 'La lunghezza dei caratteri non deve essere superiore a 255 caratteri',
        'discount_null' => 'Gli sconti sugli ordini non devono essere vuoti',
        'discount_between' => 'Lo sconto sugli ordinativi deve essere arrotondato tra 0 e 100',
        'discount_gt' => 'Lo sconto sugli ordini deve essere superiore a 0',
        'discount_numeric' => 'Gli sconti sugli ordini devono essere indicati in cifre',
    ],
    'allergy' => [
        'name' => 'Le denominazioni allergiche non devono superare 128 bit',
    ],
    'category' => [
        'name' => 'La lunghezza della classificazione non deve superare 128 bit',
    ],
    'spicy' => [
        'name' => 'Il nome del chiodo non deve superare 128 bit',
        'grade' => 'La scala di sensibilità non deve essere superiore a 128 bit',
    ],
    'tag' => [
        'name' => 'L’etichetta non deve superare 128 bit di lunghezza',
    ],
    'taste' => [
        'name' => 'Il nome del gusto non deve superare 128 bit',
    ],
    'combo' => [
        'name' => 'La durata dei titoli dei pacchetti non deve superare i 128 bit',
        'price' => 'L’importo delle vendite non deve essere inferiore a zero',
        'empty' => 'Il pacchetto non deve rimanere vuoto',
        'array' => 'I pacchetti devono essere suddivisi in gruppi'
    ],
    'spec' => [
        'name' => 'La lunghezza della designazione del tipo non deve essere superiore a 128 bit',
        'price' => 'L’importo delle vendite non deve essere inferiore a zero',
    ],
    'store' => [
        'name' => 'Il nome del negozio non deve superare 128 bit',
    ],
    'user' => [
        'name' => 'Il nome dell’amministratore non deve superare 128 bit',
        'password' => 'La password non deve superare 128 bit',
        'email' => 'La lunghezza della cassetta delle lettere non deve superare i 128 bit',
        'email_format' => 'Il formato della posta elettronica non era corretto',
        'phone' => 'La lunghezza del cellulare non deve superare le 11 cifre',
        'phone_format' => 'Il numero di telefono non è formato correttamente',
        'password_update' => 'Inserire questo punto modifica la password',
    ],
    'kitchen' => [
        'name' => 'La lunghezza della classificazione non deve superare 128 bit',
    ],
    'device' => [
        'name' => 'Nome dell’impianto',
    ],
    'payment' => [
        'method' => 'Il mezzo di pagamento non può essere vuoto',
        'payment_price' => 'La somma da pagare non può essere nulla',
        'payment_price_numeric' => 'La somma da pagare deve essere una cifra',
        'payment_price_gt' => 'L’importo dei pagamenti deve essere superiore a zero',
        'have_paid' => 'Ordinativi di pagamento',
    ],
];
