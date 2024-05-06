<?php

Class Auth
{
    public function __construct()
    {

    }

    public function check()
    {
        return (session()->has('auth'));
    }

    public function set($authenticated)
    {
        session()->set('auth', $authenticated);
    }

    public function user()
    {
        return session()->get('auth');
    }

    public function logout()
    {
        return session()->remove('auth');
    }

    public function defaultRoute()
    {
        if (auth()->check()) {
            if (auth()->user()->isAdmin())
                return route('admin.dashboard');
            else
                return route('user.dashboard');
        }

        return route('auth.login');
    }

}