<?php

declare(strict_types=1);

namespace App\Controller;

use App\Form\ProductOrderType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    #[Route('/tpsymfony', name: 'product_page')]
    public function index(Request $request): Response
    {
        $form = $this->createForm(ProductOrderType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            
            $this->addFlash('success', sprintf(
                'Product added to cart! Quantity: %d, Color: %s',
                $data->quantity,
                $data->color
            ));

            return $this->redirectToRoute('product_page');
        }

        return $this->render('product/index.html.twig', [
            'form' => $form,
        ]);
    }
}