<?php

declare(strict_types=1);

namespace App;

use App\Exceptions\RouteNotFoundException;

class App
{

    /**
     * @param Router $router
     */
    private static DB $db;
    public function __construct(protected Router $router, protected array $request, protected Config $config)
    {
//        try {
//            static::$db = new PDO(
//                $config['driver'] . ':host=' . $config['host'] . ';dbname=' . $config['database'],
//                $config['user'],
//                $config['pass']
//            );
//        } catch (\PDOException $e) {
//            throw new \PDOException($e->getMessage(), (int)$e->getCode());
//        }
        static::$db = new DB($config->db ?? []);
    }

    public static function db(): DB
    {
        return static::$db;
    }

    public function run()
    {
        try {
            echo $this->router->resolve(
//                $_SERVER['REQUEST_URI'],
                $this->request['uri'],
//                strtolower($_SERVER['REQUEST_METHOD'])
                strtolower($this->request['method'])
            );
        } catch (RouteNotFoundException) {
            http_response_code(404);

            echo View::make('error/404');
        }
    }
}