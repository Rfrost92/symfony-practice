<?php

namespace App\Controller;

use App\Entity\Item;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller
{
    /**
     * @Route("/index", name="index")
     */
    public function index()
    {
        $items = $this->getDoctrine()->getRepository(Item::class)->findAll();
        dump($items);exit;
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    /**
     * @Route("/index/{id}", name="getItem")
     */
    public function getItem(Request $request)
    {

        $items = $this->getDoctrine()->getRepository(Item::class)->find($request->get('id'));
        dump($items); exit;

    }

    /**
     * @Route("/index2/{id}", name="getItem2")
     */
    public function getItem2(int $id)
    {

        var_dump($id);
        dump($id);
        $items = $this->getDoctrine()->getRepository(Item::class)->find($id);
        dump($items); exit;

    }

    /**
     * @Route("/index3/{id}", name="getItem3")
     */
    public function getItem3(Item $item)
    {

        dump($item); exit;

    }

    /**
     * @Route("/index4/{name}", name="getItem4")
     */
    public function getItem4(Item $item)
    {

        dump($item); exit;

    }

}
