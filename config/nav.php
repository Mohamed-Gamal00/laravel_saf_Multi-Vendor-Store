<?php

return [
    [
        'icon' => 'fe fe-home fe-16',
        'route' => 'dashboard.dashboard',
        'title' => 'Dashboard',
        'active' => 'dashboard.dashboard',
    ],
    [
        'icon' => 'fe fe-box fe-16',
        'route' => 'dashboard.categories.index',
        'title' => 'Categories',
        'badge' => 'New',
        'active' => 'dashboard.categories.*'

    ],
    [
        'icon' => 'fe fe-box fe-16',
        'route' => 'dashboard.categories.index',
        'title' => 'Products',
        'badge' => 'soon',
        'active' => 'dashboard.products.*'

    ],
    [
        'icon' => 'fe fe-box fe-16',
        'route' => 'dashboard.categories.index',
        'title' => 'Order',
        'badge' => 'soon',
        'active' => 'dashboard.orders.*'

    ]
];
