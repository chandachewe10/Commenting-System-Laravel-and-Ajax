<?php
namespace Chandachewe\Comments;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class commentingSystemProvider extends ServiceProvider
{
public function boot(){
//Load Routes
$this->loadRoutesFrom(__DIR__.'/routes/web.php');
//Load Views
$this->loadViewsFrom(__DIR__.'/resources/Views','Comments');

//Publish views to customise them
$this->publishes([__DIR__.'/resources/Views'=>resource_path('views/vendor/Comments'),],'chandachewe-comments');


//Load Migrations
$this->loadMigrationsFrom(__DIR__.'/Database/Migrations');
    }

    //Load Views
    public function register(){
      
    }
}
    ?>

