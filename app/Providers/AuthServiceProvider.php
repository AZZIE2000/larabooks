<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\Book;
use App\Models\User;
use App\Models\Author;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Blade;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('isAdmin', function (User $user) {
            return $user->role == 'admin';
        });
        Gate::define('isAuthor', function (User $user) {
            return $user->role == 'author';
        });

        Blade::directive('authShow', function ($user) {
            return $user->role == 'author';
        });

        Gate::define('isManager', function (User $user) {

            if ($user->role == 'author' || $user->role == 'admin') {
                return true;
            }
        });



        Gate::define('author-book', function (User $user, $book) {

            return $user->author->id === $book->author_id;
        });
    }
}
