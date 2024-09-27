<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use CacheLoader\CacheLoaderBundle\CacheLoaderBundle;

class UnitController extends AbstractController
{

    public function __invoke(
        CacheLoaderBundle $cacheLoaderBundle
    ): Response
    {
        dd($cacheLoaderBundle);
        return $this->render("base.html.twig");
    }
}
