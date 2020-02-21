<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf-cloud/hyperf/blob/master/LICENSE
 */

namespace App\Controller;
use App\Middleware\CorsMiddleware;
use App\Middleware\Auth\TokenMiddleware;


/**
 * Class KongController
 * @package App\Controller
 * @Controller()
 * @Middlewares({
 *     @Middleware(CorsMiddleware::class),
 *     @Middleware(TokenMiddleware::class)
 * })
 *
 */
class KongController extends AbstractController
{
    /**
     * @RequestMapping(path="index", methods="get,post")
     * @return array
     */
    public function index()
    {
        $user = $this->request->input('user', 'Hyperf');
        $method = $this->request->getMethod();
        $url = $this->request->url();
        $fullurl = $this->request->fullUrl();
        return [
            'method' => $method,
            'message' => "Hello {$user}.",
        ];
    }
}