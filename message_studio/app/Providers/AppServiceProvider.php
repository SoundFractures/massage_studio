<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        view()->composer('ControlPanel.Components.newQuestions', function($view){

            $newQuestions = DB::table('questions')->orderBy('created_at')
            ->where([['seen', '=', 0],['answered','=',0]])
            ->get(); 
            
            $lastNewQuestions = $newQuestions->take(3);
            $newQuestionsCount = $newQuestions->count();
            $view->with(compact('lastNewQuestions','newQuestionsCount'));
        });
       
    }
}
