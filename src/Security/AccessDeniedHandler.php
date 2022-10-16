<?php

namespace App\Security;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Http\Authorization\AccessDeniedHandlerInterface;

class AccessDeniedHandler implements AccessDeniedHandlerInterface
{

    public function __construct(private UrlGeneratorInterface $urlGenerator)
    {

    }

   public function handle(Request $request, AccessDeniedException $accessDeniedException): ?Response
   {
    //    $content = "Erreur : Cette page n'existe pas =(";
    //    return new Response($content, 404);
    return new RedirectResponse($this->urlGenerator->generate('homepage'));
   }
}