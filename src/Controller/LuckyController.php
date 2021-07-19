<<<<<<< HEAD
<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;


// for annotations
use Symfony\Component\Routing\Annotation\Route;

// for AbstractController
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;



class LuckyController extends AbstractController
{
    /**
     * @Route("/lucky/number")
     */
    public function number(): Response
    {
        $number = random_int(0, 100);

        //return new Response(
        //    '<html><body>Lucky number: '.$number.'</body></html>'
        //);

        return $this->render('lucky/number.html.twig', [
            'number' => $number,
        ]);

    }
}

=======
<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;


// for annotations
use Symfony\Component\Routing\Annotation\Route;

// for AbstractController
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;



class LuckyController extends AbstractController
{
    /**
     * @Route("/lucky/number")
     */
    public function number(): Response
    {
        $number = random_int(0, 100);

        //return new Response(
        //    '<html><body>Lucky number: '.$number.'</body></html>'
        //);

        return $this->render('lucky/number.html.twig', [
            'number' => $number,
        ]);

    }
}

>>>>>>> 03ba94b208baea597a5c27c50ae3b71571862ad6
