<?php

namespace Acme\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\HelloBundle\Entity\Product;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\FormInterface;

class DefaultController extends Controller
{
    public function showAction($page)
    {
        $em = $this->getDoctrine()->getManager();
        $products = $em->getRepository('AcmeHelloBundle:Product')
            ->findProductsByPage($page);

        $product = new Product();
        $form = $this->createFormBuilder($product)
            ->add('name', 'text')
            ->add('price', 'money')
            ->add('description', 'text')
            ->getForm();

        return $this->render('AcmeHelloBundle:Default:show.html.twig', array('products' => $products,  'form' => $form->createView()));
    }

    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $products = $em->getRepository('AcmeHelloBundle:Product')
            ->deleteProductById($id);

        return new Response("Product with id = {$id} has been deleted", 200);
    }

    public function addAction(Request $request)
    {
        $product = new Product();
        $form = $this->createFormBuilder($product)
            ->add('name', 'text')
            ->add('price', 'money')
            ->add('description', 'text')
            ->getForm();
        $form->handleRequest($request);

        $em = $this->getDoctrine()->getManager();
        $em->persist($product);
        $em->flush();

        return $this->render('AcmeHelloBundle:Default:product_row.html.twig', array('product' => $product));
    }

    public function editAction($id)
    {
        $product = new Product();

        $em = $this->getDoctrine()->getManager();
        $product = $em->getRepository('AcmeHelloBundle:Product')->find($id);

        $product->setName($_POST['form']['name']);
        $product->setPrice($_POST['form']['price']);
        $product->setDescription($_POST['form']['description']);
        $em->flush();

        return $this->render('AcmeHelloBundle:Default:product_row.html.twig', array('product' => $product));
    }
}
