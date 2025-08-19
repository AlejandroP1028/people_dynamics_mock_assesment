<?php
namespace App\Providers;


use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Models\Contact;
use App\Policies\ContactPolicy;


class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [ Contact::class => ContactPolicy::class,   ];
    public function boot(): void {}
}