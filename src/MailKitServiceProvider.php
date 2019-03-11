<?php
namespace Amos\MailKit;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
class MailKitServiceProvider extends ServiceProvider
{
    /**
     *
     */
    public function register()
    {
        $this->app->singleton('mailKit', function () {
            return new MailKit();
        });

        if ($this->app->runningInConsole()) {
            $this->registerConsoleCommands();
        }
    }

    /**
     * Register the commands accessible from the Console.
     */
    private function registerConsoleCommands()
    {
        $this->commands(Commands\EmailRobot::class);
    }
}