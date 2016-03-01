<?php

return [
    'auth' => [
        'title' => 'Administrasjonsområde'
    ],
    'field' => [
        'invalid_type' => 'Ugyldig felttype brukt :type.',
        'options_method_not_exists' => "Modellklassen :model må definere en metode :method() som returnerer vilkår for formfeltet ':field'."
    ],
    'widget' => [
        'not_registered' => "En widget med klassenavnet ':name' har ikke blitt registrert",
        'not_bound' => "En widget med klassenavnet ':name' er ikke bundet til kontrolleren"
    ],
    'page' => [
        'untitled' => 'Uten navn',
        'access_denied' => [
            'label' => 'Ingen tilgang',
            'help' => "Du har ikke nødvendig tilgang til å se denne siden.",
            'cms_link' => 'Tilbake til backend'
        ]
    ],
    'partial' => [
        'not_found_name' => "En partial ved navn ':name' ble ikke funnet."
    ],
    'account' => [
        'sign_out' => 'Logg ut',
        'login' => 'Logg inn',
        'reset' => 'Nullstill',
        'restore' => 'Gjenopprett',
        'login_placeholder' => 'brukernavn',
        'password_placeholder' => 'passord',
        'forgot_password' => 'Glemt passordet ditt?',
        'enter_email' => 'Din e-postadresse',
        'enter_login' => 'Ditt brukernavn',
        'email_placeholder' => 'e-postadresse',
        'enter_new_password' => 'Skriv inn nytt passord',
        'password_reset' => 'Gjenopprett passord',
        'restore_success' => 'En e-post har blitt sendt til din e-postadresse med informasjon om gjenoppretting av passord.',
        'restore_error' => "Brukernavnet ':login' eksisterer ikke.",
        'reset_success' => 'Ditt passord har blitt gjenopprettet. Du kan nå logge inn.',
        'reset_error' => 'Ugyldig data. Vennligst prøv igjen!',
        'reset_fail' => 'Kunne ikke gjenopprette passord!',
        'apply' => 'Fortsett',
        'cancel' => 'Avbryt',
        'delete' => 'Slett',
        'ok' => 'OK'
    ],
    'dashboard' => [
        'menu_label' => 'Dashboard',
        'widget_label' => 'Widget',
        'widget_width' => 'Bredde',
        'full_width' => 'full bredde',
        'add_widget' => 'Legg til widget',
        'widget_inspector_title' => 'Widget-konfigurasjon',
        'widget_inspector_description' => 'Konfigurer widgeten',
        'widget_columns_label' => 'Bredde :columns',
        'widget_columns_description' => 'Bredden på widgeten. Tall mellom 1 og 10.',
        'widget_columns_error' => 'Vennligst spesifiser bredden på weidgeten som et tall mellom 1 og 10.',
        'columns' => '{1} kolonne|[2,Inf] kolonner',
        'widget_new_row_label' => 'Tving ny rad',
        'widget_new_row_description' => 'Plasserer widgeten i en ny rad.',
        'widget_title_label' => 'Widget-tittel',
        'widget_title_error' => 'Tittel er obligatorisk.',
        'status' => [
            'widget_title_default' => 'Systemstatus',
            'online' => 'online',
            'maintenance' => 'in maintenance',
            'update_available' => '{0} oppdateringer tilgjengelig!|{1} oppdatering tilgjengelig!|[2,Inf] oppdateringer tilgjengelig!'
        ]
    ],
    'user' => [
        'name' => 'Administrator',
        'menu_label' => 'Administratorer',
        'menu_description' => 'Håndter backend-administratorer, grupper og tilganger.',
        'list_title' => 'Håndter administratorer',
        'new' => 'Ny administrator',
        'login' => 'Brukernavn',
        'first_name' => 'Fornavn',
        'last_name' => 'Etternavn',
        'full_name' => 'Fult navn',
        'email' => 'E-postadresse',
        'groups' => 'Grupper',
        'groups_comment' => 'Spesifiser hvilke grupper personen tilhører.',
        'avatar' => 'Avatar',
        'password' => 'Passord',
        'password_confirmation' => 'Bekreft passord',
        'permissions' => 'Tilganger',
        'superuser' => 'Superbruker',
        'superuser_comment' => 'Kryss av denne boksen for å gi personen tilgang til alle områder.',
        'send_invite' => 'Send invitasjon via e-post',
        'send_invite_comment' => 'Kryss av denne boksen for å sende personen en invitasjon via e-post',
        'delete_confirm' => 'Vil du virkelig slette denne administratoren?',
        'return' => 'Tilbake til administratoroversikten',
        'allow' => 'Tillat',
        'inherit' => 'Arv',
        'deny' => 'Nekt',
        'group' => [
            'name' => 'Gruppe',
            'name_field' => 'Navn',
            'description_field' => 'Beskrivelse',
            'is_new_user_default_field' => 'Legg til nye administratorer til denne gruppen automatisk',
            'code_field' => 'Kode',
            'code_comment' => 'Fyll inn en unik kode for å bruke API-en.',
            'menu_label' => 'Grupper',
            'list_title' => 'Håndter grupper',
            'new' => 'New Administrator Group',
            'delete_confirm' => 'Vil du virkelig slette denne administratorgruppen?',
            'return' => 'Tilbake til gruppeoversikten',
        ],
        'preferences' => [
            'not_authenticated' => 'Det er ingen autentiserte brukere å laste eller lagre innstillinger for.'
        ]
    ],
    'list' => [
        'default_title' => 'Liste',
        'search_prompt' => 'Søk...',
        'no_records' => 'Det er ingen treff i denne visningen.',
        'missing_model' => 'List-egenskapen brukt i :class mangler en modelldefinisjon.',
        'missing_column' => 'Det er ingen kolonnedefinisjoner for :columns.',
        'missing_columns' => 'List brukt i :class har ingen definerte kolonner.',
        'missing_definition' => "List-egenskapen inneholder ingen kolonner for ':field'.",
        'behavior_not_ready' => 'List-egenskapen har ikke blir initialisert, sjekk at du har kalt makeList() i kontrolleren.',
        'invalid_column_datetime' => "Kolonneverdien ':column' er ikke et DateTime-objekt, mangler du en \$dates referanse i modellen?",
        'pagination' => 'Viser rader: :from-:to av :total',
        'prev_page' => 'Forrige side',
        'next_page' => 'Neste side',
        'loading' => 'Laster...',
        'setup_title' => 'Listeinnstillinger',
        'setup_help' => 'Kryss av sjekkboksene for å velge hvilke kolonner du vil ha i listen. Du kan sortere kolonnene ved å dra sjekkboksene opp eller ned.',
        'records_per_page' => 'Rader per side',
        'records_per_page_help' => 'Velg antall rader som skal vises på hver side. Vær oppmerksom på at et høyt antall kan redusere ytelsen på siden.',
        'delete_selected' => 'Slett valgte',
        'delete_selected_empty' => 'Det er ingen valgte rader å slette.',
        'delete_selected_confirm' => 'Vil du slette valgte rader?',
        'delete_selected_success' => 'Rader har blitt slettet.',
    ],
    'fileupload' => [
        'attachment' => 'Vedlegg',
        'help' => 'Legg til tittel og beskrivelse for dette vedlegget.',
        'title_label' => 'Tittel',
        'description_label' => 'Beskrivelse'
    ],
    'form' => [
        'create_title' => 'Ny :name',
        'update_title' => 'Endre :name',
        'preview_title' => 'Forhåndsvis :name',
        'create_success' => ':name har blitt opprettet',
        'update_success' => ':name har blitt endret',
        'delete_success' => ':name har blitt slettet',
        'missing_id' => 'Record ID for skjemaet har ikke blitt spesifisert.',
        'missing_model' => 'Skjemaegenskapen brukt i :class mangler en modell.',
        'missing_definition' => "Skjemaegenskapen mangler et felt for ':field'.",
        'not_found' => 'Record ID :id ble ikke funnet.',
        'action_confirm' => 'Er du sikker?',
        'create' => 'Opprett',
        'create_and_close' => 'Opprett og lukk',
        'creating' => 'Oppretter...',
        'creating_name' => 'Oppretter :name...',
        'save' => 'Lagre',
        'save_and_close' => 'Lagre og lukk',
        'saving' => 'Lagrer...',
        'saving_name' => 'Lagrer :name...',
        'delete' => 'Slett',
        'deleting' => 'Sletter...',
        'deleting_name' => 'Sletter :name...',
        'reset_default' => 'Tilbakestill',
        'resetting' => 'Tilbakestiller',
        'resetting_name' => 'Tilbakestiller :name',
        'undefined_tab' => 'Div.',
        'field_off' => 'Av',
        'field_on' => 'På',
        'add' => 'Legg til',
        'apply' => 'Fortsett',
        'cancel' => 'Avbryt',
        'close' => 'Lukk',
        'confirm' => 'Bekreft',
        'reload' => 'Oppdater',
        'ok' => 'OK',
        'or' => 'eller',
        'confirm_tab_close' => 'Vil du virkelig lukke fanen? Endringer som ikke er lagret vil gå tapt.',
        'behavior_not_ready' => 'Skjemaegenskap har ikke blitt initialisert, sjekk at du har kalt initForm() i kontrolleren.',
        'preview_no_files_message' => 'Filer er ikke opplastet',
        'select' => 'Velg',
        'select_all' => 'alle',
        'select_none' => 'ingen',
        'select_placeholder' => 'velg',
        'insert_row' => 'Sett inn rad',
        'delete_row' => 'Slett rad',
        'concurrency_file_changed_title' => 'Fil endret',
        'concurrency_file_changed_description' => "The file you're editing has been changed on disk by another user. You can either reload the file and lose your changes or override the file on the disk.",
        'concurrency_file_changed_description' => "Filen du endrer på har blitt endret på disken av en annen bruker. Du kan enten oppdatere filen og tape endret data eller overskrive filen på disken.",
    ],
    'relation' => [
        'missing_config' => "Relasjonen mangler en konfigurasjon for ':config'.",
        'missing_definition' => "Relasjonen mangler en definisjon for ':field'.",
        'missing_model' => "Relasjonen brukt i :class har ingen definert modell.",
        'invalid_action_single' => "Denne handlingen kan ikke brukes på en enkel relasjon.",
        'invalid_action_multi' => "Denne relasjonen kan ikke brukes på fler-relasjoner.",
        'help' => "Klikk på et element for å legge til",
        'related_data' => "Relatert :name data",
        'add' => "Legg til",
        'add_selected' => "Legg til valgte",
        'add_a_new' => "Legg til ny :name",
        'link_selected' => "Link valgte",
        'link_a_new' => "Link en ny :name",
        'cancel' => "Avbryt",
        'close' => "Lukk",
        'add_name' => "Legg til :name",
        'create' => "Opprett",
        'create_name' => "Opprett :name",
        'update' => "Oppdater",
        'update_name' => "Oppdater :name",
        'preview' => "Forhåndsvis",
        'preview_name' => "Forhåndsvis :name",
        'remove' => "Fjern",
        'remove_name' => "Fjern :name",
        'delete' => "Slett",
        'delete_name' => "Slett :name",
        'delete_confirm' => "Er du sikker?",
        'link' => "Link",
        'link_name' => "Link :name",
        'unlink' => "Fjern link",
        'unlink_name' => "Fjern link :name",
        'unlink_confirm' => "Er du sikker?",
    ],
    'model' => [
        'name' => 'Modell',
        'not_found' => "Modellen ':class' med ID-en :id ble ikke funnet",
        'missing_id' => 'Det er ingen ID spesifisert for å se opp modellen.',
        'missing_relation' => "Modellen ':class' mangler en definisjon for ':relation'.",
        'missing_method' => "Modellen ':class' mangler metoden ':method'.",
        'invalid_class' => "Modellen :model som brukes i :class er ugyldig, den må arve \Model-klassen.",
        'mass_assignment_failed' => "Mass assignment feilet for modell-attributten ':attribute'."
    ],
    'warnings' => [
        'tips' => 'Tips for systemkonfigurasjon',
        'tips_description' => 'Det er problemer du må være oppmerksom på for å konfigurere systemet riktig.',
        'permissions'  => 'Mappen :name eller dens undermapper kan ikke skrives på av PHP. Vennligst sjekk skrivetilganger på serveren.',
        'extension' => 'PHP-extensionen :name er ikke installert..'
    ],
    'editor' => [
        'menu_label' => 'Teksteditor-innstillinger',
        'menu_description' => 'Endre teksteditor-innstillingene dine, for eksemplem tekststørrelse og fargevalg.',
        'font_size' => 'Tekststørrelse',
        'tab_size' => 'Tab-størrelse',
        'use_hard_tabs' => 'Inntrykk med tabs',
        'code_folding' => 'Code folding',
        'word_wrap' => 'Word wrap',
        'highlight_active_line' => 'Fremhev aktiv linje',
        'show_invisibles' => 'Vis usynlige tegn',
        'show_gutter' => 'Vis linjenummer',
        'theme' => 'Fargevalg'
    ],
    'tooltips' => [
        'preview_website' => 'Forhåndsvis nettsiden'
    ],
    'mysettings' => [
        'menu_label' => 'Mine innstillinger',
        'menu_description' => 'Innstillinger relatert til din administratorkonto'
    ],
    'myaccount' => [
        'menu_label' => 'Min konto',
        'menu_description' => 'Oppdater dine kontodetaljer, som navn, e-postadresse og passord.',
        'menu_keywords' => 'sikkerhetsinnlogging'
    ],
    'branding' => [
        'menu_label' => 'Tilpass backend',
        'menu_description' => 'Tilpass administratorområdet, for eksempel navn, farger og logo.',
        'brand' => 'Merkevare',
        'logo' => 'Logo',
        'logo_description' => 'Last opp logo for å bruke backend.',
        'app_name' => 'App-navn',
        'app_name_description' => 'Dette navnet vises i tittelområdet backend.',
        'app_tagline' => 'App Tagline',
        'app_tagline_description' => 'Denne teksten vises på innloggingssiden backend.',
        'colors' => 'Farger',
        'primary_light' => 'Primær (Lys)',
        'primary_dark' => 'Primær (Mørk)',
        'secondary_light' => 'Sekundær (Lys)',
        'secondary_dark' => 'Sekundær (Mørk)',
        'styles' => 'Stilsett',
        'custom_stylesheet' => 'Eget stilsett'
    ],
    'backend_preferences' => [
        'menu_label' => 'Backend-innstillinger',
        'menu_description' => 'Håndter kontoinnstillinger som for eksempel språk.',
        'menu_description' => 'Manage your account preferences such as desired language.',
        'locale' => 'Språk',
        'locale_comment' => 'Velg ditt ønsket språk.'
    ],
    'access_log' => [
        'hint' => 'Denne loggen viser en liste over vellykkede administratorinnlogginger. Innloggingene blir lagret i 60 dager.',
        'menu_label' => 'Aksesslogg',
        'menu_description' => 'Se en liste over vellykkede innlogginger på backend.',
        'created_at' => 'Tid',
        'login' => 'Brukernavn',
        'ip_address' => 'IP-adresse',
        'first_name' => 'Fornavn',
        'last_name' => 'Etternavn',
        'email' => 'E-postadresse'
    ],
    'filter' => [
      'all' => 'alle'
    ]
];
