<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\Response;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\DataFotografer' => 'App\Policies\DataFotograferPolicy',
        'App\JadwalFotografer' => 'App\Policies\JadwalFotograferPolicy',
        'App\DataPemesanan' => 'App\Policies\DataPemesananPolicy',
        'App\DetailPemesanan' => 'App\Policies\DetailPemesananPolicy',
        'App\DataPembelian' => 'App\Policies\DataPembelianPolicy',
        'App\DataAdmin' => 'App\Policies\DataAdminPolicy',
        'App\PaketAdmin' => 'App\Policies\PaketAdminPolicy',
        'App\ProdukAdmin' => 'App\Policies\ProdukAdminPolicy',
        'App\LayananAdmin' => 'App\Policies\LayananAdminPolicy',
        'App\PenyewaanAlat Admin' => 'App\Policies\PenyewaanAlatAdminPolicy',
        'App\Email' => 'App\Policies\EmailPolicy'
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('delete-permission' ,function($user)
        {
            return ($user->status=='admin'
            ? Response::allow()
            : Response::deny('Hanya admin yang boleh menghapus.')
        );
        });

        Gate::define('change-permission' ,function($user)
        {
            return ($user->status=='admin'
            ? Response::allow()
            : Response::deny('Hanya admin yang boleh mengubah.')
        );
        });

        Gate::define('add-permission' ,function($user)
        {
            return ($user->status=='admin'
            ? Response::allow()
            : Response::deny('Hanya admin yang boleh menambah.')
        );
        });

        //Halaman data pembelian
        Gate::define('view-permission' ,function($user)
        {
            return ($user->status=='admin'
            ? Response::allow()
            : Response::deny('Hanya admin yang dapat melihat.')
        );
        });


        //Home Pelanggan
        Gate::define('home-permission' ,function($user)
        {
            return ($user->status=='pelanggan'
            ? Response::allow()
            : Response::deny('Login sebagai pelanggan')
        );
        });
    }
}
