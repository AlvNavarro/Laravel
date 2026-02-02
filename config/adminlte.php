<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    */

    'title' => 'CRMNAVARRO',
    'title_prefix' => '',
    'title_postfix' => '| CRM',

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    */

    'logo' => '<b>CRM</b>NAVARRO',
    'logo_img' => 'vendor/adminlte/dist/img/AdminLTELogo.png',
    'logo_img_class' => 'brand-image img-circle elevation-3',
    'logo_img_xl' => null,
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt' => 'CRM Logo',

    /*
    |--------------------------------------------------------------------------
    | Authentication
    |--------------------------------------------------------------------------
    */

    'usermenu_enabled' => true,
    'usermenu_header' => true,
    'usermenu_header_class' => 'bg-navy',
    'usermenu_image' => false,
    'usermenu_desc' => false,
    'usermenu_profile_url' => false,

    'dashboard_url' => 'clientes', 
    'logout_url' => 'logout',
    'login_url' => 'login',
    'register_url' => 'register',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    */

    'menu' => [
        // Buscador arriba
        [
            'type' => 'sidebar-menu-search',
            'text' => 'Buscar en el sistema...',
        ],

        // Sección principal
        ['header' => 'MÓDULOS DE NEGOCIO'],

        [
            'text' => 'Clientes',
            'route'  => 'clientes.index',
            'icon' => 'fas fa-fw fa-users',
            'icon_color' => 'info',
            'label' => 'VIP',
            'label_color' => 'info',
        ],
        [
            'text' => 'Productos',
            'route'  => 'productos.index',
            'icon' => 'fas fa-fw fa-box-open',
            'icon_color' => 'warning',
        ],
        [
            'text' => 'Proveedores',
            'route'  => 'proveedores.index',
            'icon' => 'fas fa-fw fa-truck-moving',
            'icon_color' => 'primary',
        ],
        
        ['header' => 'ADMINISTRACIÓN Y CONTROL'],
        
        [
            'text' => 'Empleados',
            'route'  => 'empleados.index',
            'icon' => 'fas fa-fw fa-id-badge',
            'icon_color' => 'teal',
        ],
        [
            'text' => 'Facturación',
            'route'  => 'facturas.index',
            'icon' => 'fas fa-fw fa-file-invoice-dollar',
            'icon_color' => 'success',
            'label' => 'NUEVO',
            'label_color' => 'success',
        ],

        // Sección de cuenta
        ['header' => 'AJUSTES DE USUARIO'],
        [
            'text' => 'Mi Perfil',
            'url'  => 'admin/settings',
            'icon' => 'fas fa-fw fa-user-cog',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Look & Feel
    |--------------------------------------------------------------------------
    */

    'layout_topnav' => null,
    'layout_boxed' => null,
    'layout_fixed_sidebar' => true,
    'layout_fixed_navbar' => true,
    'layout_fixed_footer' => null,
    'layout_dark_mode' => true, // ACTIVA EL MODO OSCURO PARA QUE SEA MÁS MODERNO

    'classes_auth_card' => 'card-outline card-primary',
    'classes_sidebar' => 'sidebar-dark-navy elevation-4', // COLOR NAVY PARA EL LATERAL
    'classes_topnav' => 'navbar-dark navbar-navy', // BARRA SUPERIOR A JUEGO

    /*
    |--------------------------------------------------------------------------
    | Plugins
    |--------------------------------------------------------------------------
    */

    'plugins' => [
        'Datatables' => [
            'active' => true,
            'files' => [
                ['type' => 'js', 'asset' => false, 'location' => '//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js'],
                ['type' => 'js', 'asset' => false, 'location' => '//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js'],
                ['type' => 'css', 'asset' => false, 'location' => '//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css'],
            ],
        ],
        'Sweetalert2' => [
            'active' => true,
            'files' => [
                ['type' => 'js', 'asset' => false, 'location' => '//cdn.jsdelivr.net/npm/sweetalert2@8'],
            ],
        ],
    ],

    'livewire' => false,
    
    // Filtros necesarios
    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\DataFilter::class,
    ],
];