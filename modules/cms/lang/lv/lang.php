<?php

return [
    'cms_object' => [
        'invalid_file' => 'Nederīgs faila nosaukums: :name. Faila nosaukums var saturēt tikai burtus, ciparus, apakšsvītras, domuzīmes un punktus. Daži piemēri pareiziem failu nosaukumiem: lapa.htm, lapa, mape/lapa',
        'invalid_property' => "Īpašība ':name' nevar tikt iestatīta",
        'file_already_exists' => "Fails ':name' jau eksistē.",
        'error_saving' => "Kļūda saglabājot failu ':name'. Lūdzu, pārbaudiet rakstīšanas tiesības.",
        'error_creating_directory' => 'Kļūda izveidojot mapi :name. Lūdzu, pārbaudiet rakstīšanas tiesības.',
        'invalid_file_extension' => 'Nederīgs faila paplašinājums: :invalid. Atļautie paplašinājumi: :allowed.',
        'error_deleting' => "Kļūda dzēšot veidnes failu ':name'. Lūdzu, pārbaudiet rakstīšanas tiesības.",
        'delete_success' => 'Izdzēstās veidnes: :count.',
        'file_name_required' => 'Faila nosaukuma lauks ir obligāts.',
        'safe_mode_enabled' => 'Šobrīd ir ieslēgts drošais režīms. PHP koda labošanas funkcionalitāte CMS veidnēs ir atspējota. Lai izslēgtu drošo režīmu, iestatiet `cms.enableSafeMode` konfigurācijas vērtību uz `false`.',
    ],
    'dashboard' => [
        'active_theme' => [
            'widget_title_default' => 'Vietne',
            'online' => 'Tiešsaistē',
            'maintenance' => 'Uzturēšanas režīmā',
            'manage_themes' => 'Pārvaldīt tēmas',
            'customize_theme' => 'Pielāgot tēmu',
        ]
    ],
    'theme' => [
        'not_found_name' => "Tēma ':name' netika atrasta.",
        'by_author' => 'Autors :name',
        'active' => [
            'not_set' => 'Aktīvā tēma netika iestatīta.',
            'not_found' => 'Aktīvā tēma netika atrasta.',
        ],
        'edit' => [
            'not_set' => 'Labotā tēma netika iestatīta.',
            'not_found' => 'Labotā tēma netika atrasta.',
            'not_match' => "Objekts, kuram cenšaties piekļūt nepieder šobrīd labojamajai tēmai. Lūdzu, pārlādējiet lapu.",
        ],
        'settings_menu' => 'Front-end tēma',
        'settings_menu_description' => 'Pārvaldiet aktīvo front-end tēmu un pielāgošanas iespējas.',
        'default_tab' => 'Īpašības',
        'name_label' => 'Nosaukums',
        'name_create_placeholder' => 'Jaunās tēmas nosaukums',
        'author_label' => 'Autors',
        'author_placeholder' => 'Personas vārds vai kompānijas nosaukums',
        'description_label' => 'Apraksts',
        'description_placeholder' => 'Tēmas apraksts',
        'homepage_label' => 'Tīmekļvietne',
        'homepage_placeholder' => 'Vietnes URL',
        'code_label' => 'Kods',
        'code_placeholder' => 'Unikāls kods tēmas identificēšanai, tiek lietots tēmas izplatīšanai',
        'preview_image_label' => 'Priekšskatījuma attēls',
        'preview_image_placeholder' => 'Tēmas priekšskatījuma attēla ceļš.',
        'dir_name_label' => 'Mapes nosaukums',
        'dir_name_create_label' => 'Tēmas mapes atrašanās vieta',
        'theme_label' => 'Tēma',
        'theme_title' => 'Tēmas',
        'activate_button' => 'Aktivizēt',
        'active_button' => 'Aktivizēt',
        'customize_theme' => 'Pielāgot tēmu',
        'customize_button' => 'Pielāgot',
        'duplicate_button' => 'Dublēt',
        'duplicate_title' => 'Dublēt tēmu',
        'duplicate_theme_success' => 'Tēma nodublēta!',
        'manage_button' => 'Pārvaldīt',
        'manage_title' => 'Pārvaldīt tēmu',
        'edit_properties_title' => 'Tēma',
        'edit_properties_button' => 'Labot īpašības',
        'save_properties' => 'Saglabāt īpašības',
        'import_button' => 'Importēt',
        'import_title' => 'Importēt tēmu',
        'import_theme_success' => 'Tēma importēta!',
        'import_uploaded_file' => 'Tēmas arhīva fails',
        'import_overwrite_label' => 'Pārrakstīt esošos failus',
        'import_overwrite_comment' => 'Izņemiet ķeksi, lai importētu tikai jaunos failus',
        'import_folders_label' => 'Mapes',
        'import_folders_comment' => 'Lūdzu, izvēlieties tēmas mapes, kuras vēlaties importēt',
        'export_button' => 'Eksportēt',
        'export_title' => 'Eksportēt tēmu',
        'export_folders_label' => 'Mapes',
        'export_folders_comment' => 'Lūdzu, izvēlieties tēmas mapes, kuras vēlaties eksportēt',
        'delete_button' => 'Dzēst',
        'delete_confirm' => 'Dzēst izvēlēto tēmu? Izmaiņas nevarēs atsaukt!',
        'delete_active_theme_failed' => 'Aktīvo tēmu nevar izdzēst, vispirms iestatiet citu aktīvo tēmu.',
        'delete_theme_success' => 'Tēma izdzēsta!',
        'create_title' => 'Izveidot tēmu',
        'create_button' => 'Izveidot',
        'create_new_blank_theme' => 'Izveidot jaunu tukšu tēmu',
        'create_theme_success' => 'Tēma izveidota!',
        'create_theme_required_name' => 'Lūdzu, norādiet tēmas nosaukumu.',
        'new_directory_name_label' => 'Tēmas mape',
        'new_directory_name_comment' => 'Norādiet jaunu mapes nosaukumu dublētajai tēmai.',
        'dir_name_invalid' => 'Nosaukums var saturēt tikai ciparus, latīņu alfabēta burtus un sekojošos simbolus: _-',
        'dir_name_taken' => 'Norādītā tēmas mape jau pastāv.',
        'find_more_themes' => 'Atrast citas tēmas',
        'saving' => 'Saglabā tēmu...',
        'return' => 'Atgriezties tēmu sarakstā',
    ],
    'maintenance' => [
        'settings_menu' => 'Uzturēšanas režīms',
        'settings_menu_description' => 'Konfigurējiet uzturēšanas režīma lapu un pielāgojiet iestatījumus.',
        'is_enabled' => 'Ieslēgt uzturēšanas režīmu',
        'is_enabled_comment' => 'Izvēlieties lapu, kura tiks attēlota, kad uzturēšanas režīms ir aktīvs.',
        'hint' => 'Uzturēšanas režīms attēlos izvēlēto uzturēšanas lapu apmeklētājiem, kuri nav pierakstījušies back-end sistēmā.',
        'allowed_ips' => [
            'name' => 'Atļautās IP adreses',
            'description' => 'IP adreses, kurām ir atļauts skatīt vietni, kamēr uzturēšanas režīms ir aktīvs',
            'prompt' => 'Pievienot IP adresi',
            'ip' => 'IP adrese',
            'label' => 'Apraksts',
        ],
    ],
    'page' => [
        'not_found_name' => "Lapa ':name' netika atrasta",
        'not_found' => [
            'label' => 'Lapa nav atrasta',
            'help' => 'Pieprasītā lapa nav atrasta.',
        ],
        'custom_error' => [
            'label' => 'Lapas kļūda',
            'help' => "Atvainojamies, taču kaut kas nogāja greizi un lapa nevar tikt attēlota.",
        ],
        'menu_label' => 'Lapas',
        'unsaved_label' => 'Nesaglabāta lapa(-as)',
        'no_list_records' => 'Nav lapu',
        'new' => 'Jauna lapa',
        'invalid_url' => 'Nederīgs URL formāts. URL jāsākas ar šķērssvītras simbolu un var saturēt tikai ciparus, latīņu alfabēta burtus un sekojošos simbolus: ._-[]:?|/+*^$',
        'delete_confirm_multiple' => 'Dzēst izvēlētās lapas?',
        'delete_confirm_single' => 'Dzēst šo lapu?',
        'no_layout' => '-- bez izkārtojuma --',
        'cms_page' => 'CMS lapa',
        'title' => 'Lapas nosaukums',
        'url' => 'Lapas URL',
        'file_name' => 'Lapas faila nosaukums',
    ],
    'layout' => [
        'not_found_name' => "Izkārtojums ':name' netika atrasts",
        'menu_label' => 'Izkārtojumi',
        'unsaved_label' => 'Nesaglabāts izkārtojums(-i)',
        'no_list_records' => 'Nav izkārtojumu',
        'new' => 'Jauns izkārtojums',
        'delete_confirm_multiple' => 'Dzēst izvēlētos izkārtojumus?',
        'delete_confirm_single' => 'Dzēst šo izkārtojumu?',
    ],
    'partial' => [
        'not_found_name' => "Daļa ':name' netika atrasta.",
        'invalid_name' => 'Nederīgs daļas nosaukums: :name.',
        'menu_label' => 'Daļas',
        'unsaved_label' => 'Nesaglabāta daļa(-as)',
        'no_list_records' => 'Nav daļu',
        'delete_confirm_multiple' => 'Dzēst izvēlētās daļas?',
        'delete_confirm_single' => 'Dzēst šo daļu?',
        'new' => 'Jauna daļa',
    ],
    'content' => [
        'not_found_name' => "Satura fails ':name' netika atrasts.",
        'menu_label' => 'Saturs',
        'unsaved_label' => 'Nesaglabāts saturs',
        'no_list_records' => 'Nav satura failu',
        'delete_confirm_multiple' => 'Dzēst izvēlētos satura failus vai mapes?',
        'delete_confirm_single' => 'Dzēst šo satura failu?',
        'new' => 'Jauns satura fails',
    ],
    'ajax_handler' => [
        'invalid_name' => 'Nederīgs AJAX pieprasījumu apstrādātāja nosaukums: :name.',
        'not_found' => "AJAX pieprasījumu apstrādātājs ':name' netika atrasts.",
    ],
    'cms' => [
        'menu_label' => 'CMS',
    ],
    'sidebar' => [
        'add' => 'Pievienot',
        'search' => 'Meklēt...',
    ],
    'editor' => [
        'settings' => 'Iestatījumi',
        'title' => 'Nosaukums',
        'new_title' => 'Jauns lapas nosaukums',
        'url' => 'URL',
        'filename' => 'Faila nosaukums',
        'layout' => 'Izkārtojums',
        'description' => 'Apraksts',
        'preview' => 'Priekšskatījums',
        'meta' => 'Metadati',
        'meta_title' => 'Meta nosaukums',
        'meta_description' => 'Meta apraksts',
        'markup' => 'Attēlojuma kods',
        'code' => 'Kods',
        'content' => 'Saturs',
        'hidden' => 'Slēpts',
        'hidden_comment' => 'Slēptās lapas ir pieejamas tikai autorizētajiem back-end lietotājiem.',
        'enter_fullscreen' => 'Atvērt pilnekrāna režīmu',
        'exit_fullscreen' => 'Iziet no pilnekrāna režīma',
        'open_searchbox' => 'Atvērt meklēšanas joslu',
        'close_searchbox' => 'Aizvērt meklēšanas joslu',
        'open_replacebox' => 'Atvērt aizvietošanas joslu',
        'close_replacebox' => 'Aizvērt aizvietošanas joslu',
        'commit' => 'Apstiprināt',
        'reset' => 'Atiestatīt',
        'commit_confirm' => 'Vai esat pārliecināts, ka vēlaties apstiprināt failā veiktās izmaiņas un saglabāt tās failu sistēmā? Darbības rezultātā tiks pārrakstīts failu sistēmā esošais fails.',
        'reset_confirm' => 'Vai esat pārliecināts, ka vēlaties atiestatīt šo failu uz tā failu sistēmā atrodamo kopiju? Darbības rezultātā esošais saturs tiks pilnībā aizvietots ar failu sistēmā atrodamā faila saturu.',
        'committing' => 'Saglabā',
        'resetting' => 'Atiestata',
        'commit_success' => ':type saglabāts failu sistēmā',
        'reset_success' => ':type atiestatīts uz failu sistēmas versiju',
    ],
    'asset' => [
        'menu_label' => 'Papildu faili',
        'unsaved_label' => 'Nesaglabāts fails(-i)',
        'drop_down_add_title' => 'Pievienot...',
        'drop_down_operation_title' => 'Darbība...',
        'upload_files' => 'Augšupielādēt failu(-us)',
        'create_file' => 'Izveidot failu',
        'create_directory' => 'Izveidot mapi',
        'directory_popup_title' => 'Jauna mape',
        'directory_name' => 'Mapes nosaukums',
        'rename' => 'Pārsaukt',
        'delete' => 'Dzēst',
        'move' => 'Pārvietot',
        'select' => 'Izvēlēties',
        'new' => 'Jauns fails',
        'invalid_path' => 'Ceļš var saturēt tikai ciparus, latīņu alfabēta burtus, atstarpes un sekojošos simbolus: ._-/',
        'error_deleting_file' => 'Kļūda dzēšot failu :name.',
        'error_deleting_dir_not_empty' => 'Kļūda dzēšot mapi :name. Mape nav tukša.',
        'error_deleting_dir' => 'Kļūda dzēšot mapi :name.',
        'invalid_name' => 'Nosaukums var saturēt tikai ciparus, latīņu alfabēta burtus, atstarpes un sekojošos simbolus: ._-',
        'original_not_found' => 'Oriģinālais fails vai mape netika atrasta',
        'already_exists' => 'Fails vai mape ar šo nosaukumu jau eksistē',
        'error_renaming' => 'Kļūda pārdēvējot failu vai mapi',
        'name_cant_be_empty' => 'Nosaukums nevar būt tukšs',
        'too_large' => 'Augšupielādētais fails ir pārāk liels. Maksimālais atļautais faila izmērs ir :max_size',
        'type_not_allowed' => 'Tikai sekojošie failu veidi ir atļauti: :allowed_types',
        'file_not_valid' => 'Fails nav derīgs',
        'error_uploading_file' => "Kļūda augšupielādējot failu ':name': :error",
        'move_destination' => 'Mērķa mape',
        'move_popup_title' => 'Pārvietot failus',
        'selected_files_not_found' => 'Izvēlētie faili nav atrasti',
        'select_destination_dir' => 'Lūdzu, izvēlieties mērķa mapi',
        'destination_not_found' => 'Mērķa mape nav atrasta',
        'error_moving_file' => 'Kļūda pārvietojot failu :file',
        'error_moving_directory' => 'Kļūda pārvietojot mapi :dir',
        'error_deleting_directory' => 'Kļūda dzēšot oriģinālo mapi :dir',
        'no_list_records' => 'Nav failu',
        'delete_confirm' => 'Dzēst izvēlētos failus vai mapes?',
        'path' => 'Ceļš',
    ],
    'component' => [
        'menu_label' => 'Komponenti',
        'unnamed' => 'Nenosaukts',
        'no_description' => 'Nav norādīts apraksts',
        'alias' => 'Aizstājvārds',
        'alias_description' => 'Unikāls nosaukums šim komponentam, kad tas tiek izmantots lapas vai izkārtojuma kodā.',
        'validation_message' => 'Komponenta aizstājvārds ir obligāts un var saturēt tikai no latīņu alfabeta burtiem, cipariem un apakšsvītrām. Aizstājvārdam jāsākas ar latīņu alfabēta burtu.',
        'invalid_request' => 'Veidne nevar tikt saglabāta komponenta nederīgo datu dēļ.',
        'no_records' => 'Nav komponentu',
        'not_found' => "Komponents ':name' netika atrasts.",
        'no_default_partial' => "Šim komponentam neeksistē 'default' (noklusētā) daļa",
        'method_not_found' => "Komponents ':name' nesatur metodi ':method'.",
        'soft_component' => 'Neobligāts komponents',
        'soft_component_description' => 'Šis komponents ir pazudis, taču nav obligāts.',
    ],
    'template' => [
        'invalid_type' => 'Nezināms veidnes veids.',
        'not_found' => 'Veidne nav atrasta.',
        'saved' => 'Veidne saglabāta.',
        'no_list_records' => 'Nav ierakstu',
        'delete_confirm' => 'Dzēst izvēlētās veidnes?',
        'order_by' => 'Kārtot pēc',
    ],
    'permissions' => [
        'name' => 'CMS',
        'manage_content' => 'Pārvaldīt vietnes satura failus',
        'manage_assets' => 'Pārvaldīt vietnes papildu failus - attēlus, JavaScript un CSS failus',
        'manage_pages' => 'Izveidot, modificēt un dzēst vietnes lapas',
        'manage_layouts' => 'Izveidot, modificēt un dzēst CMS izkārtojumus',
        'manage_partials' => 'Izveidot, modificēt un dzēst CMS daļu elementus',
        'manage_themes' => 'Aktivizēt, deaktivizēt un konfigurēt CMS tēmas',
        'manage_theme_options' => 'Konfigurēt pielāgošanas iespējas aktīvajai tēmai',
    ],
    'theme_log' => [
        'hint' => 'Šis žurnāls attēlo jebkuras sistēmas administratoru veiktās izmaiņas tēmā, lietojot back-end sistēmu.',
        'menu_label' => 'Tēmas žurnāls',
        'menu_description' => 'Skatīt veiktās izmaiņas aktīvajai tēmai.',
        'empty_link' => 'Iztīrīt tēmas žurnālu',
        'empty_loading' => 'Iztīra tēmas žurnālu...',
        'empty_success' => 'Tēmas žurnāls iztīrīts',
        'return_link' => 'Atgriezties tēmas žurnālā',
        'id' => 'ID',
        'id_label' => 'Žurnāla ID',
        'created_at' => 'Datums un laiks',
        'user' => 'Lietotājs',
        'type' => 'Veids',
        'type_create' => 'Izveido',
        'type_update' => 'Atjauno',
        'type_delete' => 'Dzēš',
        'theme_name' => 'Tēma',
        'theme_code' => 'Tēmas kods',
        'old_template' => 'Veidne (vecā)',
        'new_template' => 'Veidne (jaunā)',
        'template' => 'Veidne',
        'diff' => 'Izmaiņas',
        'old_value' => 'Vecā vērtība',
        'new_value' => 'Jaunā vērtība',
        'preview_title' => 'Veidnes izmaiņas',
        'template_updated' => 'Veidne tika atjaunota',
        'template_created' => 'Veidne tika izveidota',
        'template_deleted' => 'Veidne tika izdzēsta',
    ],
];
