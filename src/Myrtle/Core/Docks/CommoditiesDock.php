<?php

namespace Myrtle\Core\Docks;

use Myrtle\Core\Commodities\Policies\CommoditiesPolicy;
use Myrtle\Core\Commodities\Policies\CommoditiesDockPolicy;

class CommoditiesDock extends Dock
{
    /**
     * Description for Dock
     *
     * @var string
     */
    public $description = 'Commodities system';

    /**
     * Explicit Gate definitions
     *
     * @var array
     */
    public $gateDefinitions = [
        self::class . '.admin' => CommoditiesDockPolicy::class . '@admin',
        self::class . '.access-admin' => CommoditiesDockPolicy::class . '@accessAdmin',
        self::class . '.edit-settings' => CommoditiesDockPolicy::class . '@editSettings',
        self::class . '.view-settings' => CommoditiesDockPolicy::class . '@viewSettings',
        self::class . '.edit-permissions' => CommoditiesDockPolicy::class . '@editPermissions',
        self::class . '.view-permissions' => CommoditiesDockPolicy::class . '@viewPermissions',
    ];

    /**
     * Policy mappings
     *
     * @var array
     */
    public $policies = [
        CommoditiesPolicy::class => CommoditiesPolicy::class,
        CommoditiesDockPolicy::class => CommoditiesDockPolicy::class
    ];

    /**
     * List of config file paths to be loaded
     *
     * @return array
     */
    public function configPaths()
    {
        return [
            'abilities' => dirname(__DIR__, 2) . '/config/abilities.php',
            'docks.' . self::class => dirname(__DIR__, 2) . '/config/docks/commodities.php',
        ];
    }

    /**
     * List of migration file paths to be loaded
     *
     * @return array
     */
    public function migrationPaths()
    {
        return [
            dirname(__DIR__, 2) . '/database/migrations',
        ];
    }

    /**
     * List of routes file paths to be loaded
     *
     * @return array
     */
    public function routes()
    {
        return [
            'admin' => dirname(__DIR__, 2) . '/routes/admin.php',
        ];
    }
}
