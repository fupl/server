<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

/**
 * DefaultController
 *
 * @author Tom Haskins-Vaughan <tom@tomhv.uk>
 * @since  1.0.0
 */
class DefaultController
{
    /**
     * index
     *
     * @author Tom Haskins-Vaughan <tom@tomhv.uk>
     * @since  1.0.0
     *
     * @Route("/")
     */
    public function index()
    {
        return new JsonResponse([
            'message' => 'Welcome to fupl!',
        ]);
    }
}
