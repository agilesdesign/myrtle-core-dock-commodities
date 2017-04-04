<?php

return [
    \Myrtle\Core\Docks\CommoditiesDock::class => [
        'access-admin' => 'Access Administrative Routes',
        'admin' => 'Administrator',
        \Myrtle\Commodities\Models\Commodity::class => [
            'create' => 'Create Commodities',
            'edit' => 'Edit Commodities',
            'delete' => 'Delete Commodities',
            'list' => 'Display lists of Commodities',
            'view' => 'View Commodities',
            'edit-settings' => 'Edit Dock Settings',
            'view-settings' => 'View Dock Settings',
            'edit-permissions' => 'Edit Dock Permissions',
            'view-permissions' => 'View Dock Permissions',
        ],
    ],
];