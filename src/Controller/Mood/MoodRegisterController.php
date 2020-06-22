<?php

declare(strict_types=1);

namespace App\Controller\Mood;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class MoodRegisterController extends AbstractController
{
    public function register(): Response
    {

        return $this->render('mood/register.html.twig', [

        ]);
    }
}