<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController
{
    /**
     * @Route("/lucky/number")
     */
    public function number(): Response
    {
        $number = random_int(0, 100);

        // php8.0 feature
        $php8feature = match (8.0) {
            '8.0' => "not_matched",
            8.0 => "matched",
        };

        return new Response(
            '<html>
                <body>
                    <div>
                    Lucky number: '.$number.'
                    </div>
                    <div>
                    This text should be "matched": '.$php8feature.'
                    </div>
                </body>
            </html>'
        );
    }
}