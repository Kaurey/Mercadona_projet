<?php

namespace App\Controller;

use App\Entity\Product;
use App\Form\ProductType;
use App\Form\FilterCategory;
use App\Entity\Category;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/product')]
class ProductController extends AbstractController
{
    #[Route('/', name: 'app_product_index', methods: ['GET', 'POST'])]
    public function index(Request $request, ProductRepository $productRepository): Response
    {
        $form = $this->createForm(FilterCategory::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $categoryResult = $form->getData();

            return $this->redirectToRoute('app_category_show', ['id' => $categoryResult['categorie']->getId()]);
        }

        return $this->render('product/index.html.twig', [
            'products' => $productRepository->findAll(),
            'form'=> $form,
        ]);
    }
}
