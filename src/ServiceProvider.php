<?php
namespace Seguce92\AdminMD;

use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;

/**
 * @package AdminMD
 */
class ServiceProvider extends IlluminateServiceProvider
{
    /**
     * [boot description]
     * @method boot
     * @return [Illuminate\ServiceProvider\boot] [charge all resources used in package]
     */
    public function boot()
    {
        $this->publishes([__DIR__ . '/../config/base.php' => config_path('seguce92/base.php')], 'seguce92.base');

        $this->publishes([__DIR__ . '/../config/adminmd.php' => config_path('seguce92/adminmd.php')], 'seguce92.adminmd');

        $this->publishes([__DIR__. '/public' => public_path('vendor/seguce92')], 'adminmd-source');

        $this->publishes([__DIR__ . '/resources/views/AdminMD' => resource_path('views/vendor/seguce92/AdminMD')], 'AdminMD');

        $this->publishes([__DIR__ . '/resources/views/index.blade.php' => resource_path('views/adminmd-example.blade.php')], 'view-home');
    }

    /**
     * [register description]
     * @method register
     * @return [Illuminate\ServiceProvider\register]
     */
    public function register()
    {

    }
}
