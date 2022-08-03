<?php

namespace App\Controller;

use App\Form\PicturesType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\String\Slugger\SluggerInterface;


class AdminPicturesController extends AbstractController
{
    //Je créer une route et une méthode pour ajouter des images sotckées en BDD
    /**
     * @Route ("/admin/new-picture", name="admin_new_picture")
     */

    public function newPicture(EntityManagerInterface $entityManager, Request $request, SluggerInterface $slugger){
        $picture = new Picture();

        $form = $this->createForm(PicturesType::class, $picture);

        $form->handleRequest($request);

    }

}