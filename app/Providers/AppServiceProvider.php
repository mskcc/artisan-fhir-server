<?php

namespace App\Providers;

use App\Entities\CarbonType;
use App\Entities\ExampleObservation;
use App\Repositories\ObservationsRepository;
use App\Repositories\ExampleObservationsRepository;
use Doctrine\DBAL\Types\Type;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Repository\RepositoryFactory;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use LaravelDoctrine\ORM\Configuration\Connections\ConnectionManager;
use LaravelDoctrine\ORM\EntityManagerFactory;
use LaravelDoctrine\ORM\Facades\Doctrine;

class AppServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap any application services.
     *
     * @param ConnectionManager $connections
     * @return void
     */
    public function boot(ConnectionManager $connections)
    {

        Schema::defaultStringLength(191);

        if( app()->environment('local')) {
            ini_set('max_execution_time', 60);
        }

        Type::overrideType('datetime', CarbonType::class);

        /**
         * Paginate a standard Laravel Collection.
         *
         * @param int $perPage
         * @param int $total
         * @param int $page
         * @param string $pageName
         * @return array
         */
        Collection::macro('paginate', function($perPage, $total = null, $page = null, $pageName = 'page') {
            $page = $page ?: LengthAwarePaginator::resolveCurrentPage($pageName);
            return new LengthAwarePaginator(
                $this->forPage($page, $perPage),
                $total ?: $this->count(),
                $perPage,
                $page,
                [
                    'path' => LengthAwarePaginator::resolveCurrentPath(),
                    'pageName' => $pageName,
                ]
            );
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ObservationsRepository::class, function($app){
            return new ExampleObservationsRepository(
                $app['em'],
                $app['em']->getClassMetaData(ExampleObservation::class)
            );
        });
    }
}
