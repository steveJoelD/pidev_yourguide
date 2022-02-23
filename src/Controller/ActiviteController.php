<?php

namespace App\Controller;

use App\Entity\Activite;
use App\Form\ActiviteFormType;
use App\Repository\ActiviteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ActiviteController extends AbstractController
{
    /**
     * @Route("/activite", name="activite")
     */
    public function index(): Response
    {
        return $this->render('activite/index.html.twig', [
            'controller_name' => 'ActiviteController',
        ]);
    }
    /**
     * @Route("/activite/show", name="show_activite", methods={"GET"})
     */
    public function show(ActiviteRepository $activiteRepository): Response
    {
        return $this->render('activite/show.html.twig', [
            'type' => $activiteRepository->findAll(),
        ]);
    }
    /**
     * @Route("/activite/add", name="add_activite")
     */
    public function show1(Request $request, EntityManagerInterface $entityManager, ActiviteRepository $activiteRepository): Response
    {
        $act = new Activite();
        $form = $this->createForm(ActiviteFormType::class, $act);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($act);
            $entityManager->flush();

            return $this->redirectToRoute('show_activite', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('activite/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/activite/delete/{id}", name="dele_activite", methods={"GET"})
     */
    public function del($id, Request $request, EntityManagerInterface $entityManager): Response
    {
        $act = $entityManager->getRepository(Activite::class)->findBy(['id' => $id])[0];
        $entityManager->remove($act);
        $entityManager->flush();

        return $this->redirectToRoute('show_activite', [], Response::HTTP_SEE_OTHER);
    }
    /**
     * @Route("/activite/modify/{id}", name="mod_activite", methods={"GET", "POST"})
     */
    public function mod($id, Request $request, EntityManagerInterface $entityManager, Activite $activite): Response
    {
        $activite = new Activite();
        $form = $this->createForm(ActiviteFormType::class, $activite);

        $form->handleRequest($request);

        if ($form->isSubmitted()  && $form->isValid()) {
            $act = $entityManager->getRepository(Activite::class)->findBy(['id' => $id])[0];
            $entityManager->remove($act);
            $entityManager->persist($activite);
            $entityManager->flush();

            return $this->redirectToRoute('show_activite', [], Response::HTTP_SEE_OTHER);
        }
        $cat = $entityManager->getRepository(Activite::class)->findBy(['id' => $id])[0];
        return $this->render('activite/mod.html.twig', [
            'form' => $form->createView(),
            'cat' => $cat
        ]);
    }
    /**
     * @Route("/activite/modifyy/{id}", name="modr_activite", methods={"post"})
     */
    public function mod1($id, Request $request, EntityManagerInterface $entityManager): Response
    {
        $activite = new Activite();
        $form = $this->createForm(ActiviteFormType::class, $activite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $activite->setId($form['id']->getData());
            $activite->setNom($form['name']->getData());
            $activite->setNom($form['lieu']->getData());
            $activite->setNom($form['description']->getData());
            $activite->setNom($form['type']->getData());
            $entityManager->persist($activite);
            $entityManager->flush();

            return $this->redirectToRoute('show_type', [], Response::HTTP_SEE_OTHER);
        }
        return new Response();
    }
}
