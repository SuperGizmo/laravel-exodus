<?php
namespace SuperGizmo\Exodus;

use Illuminate\Support\ServiceProvider;

class ExodusServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([ExodusCommand::class]);
        }
    }

    public function register()
    {
        //
    }
}
