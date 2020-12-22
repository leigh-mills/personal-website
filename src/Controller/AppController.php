<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppController
{
    /**
     * @Route("/")
     */
    public function actionHome(): Response
    {
        $number = random_int(0, 100);

        return new Response(
            '<html><body>Annotation routing: '.$number.'</body></html>'
        );
    }
}