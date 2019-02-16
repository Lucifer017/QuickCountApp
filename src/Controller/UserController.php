<?php
  namespace App\Controller;

  // use App\Entity\Text;

  use Symfony\Component\HttpFoundation\Response;
  use Symfony\Component\HttpFoundation\Request;

  use Symfony\Component\Routing\Annotation\Route;

  use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

  use Symfony\Bundle\FrameworkBundle\Controller\Controller;

  use Symfony\Component\Form\Extension\Core\Type\TextType;
  use Symfony\Component\Form\Extension\Core\Type\TextareaType;
  use Symfony\Component\Form\Extension\Core\Type\SubmitType;

  class UserController extends Controller{
    /**
      * @Route("/", name="text_list")
      *
      */
    public function index(){
    //  $texts= $this->getDoctrine()->getRepository(User::class)->findAll();

      // return $this->render('text/index.html.twig', array('texts' => $texts));

      return $this->render('text/index.html.twig');
    }

    /**
      * @Route("/text/save")
      *
      */
      // public function save(){
      //   $entityManager = $this->getDoctrine()->getManager();
      //
      //   $text = new Text();
      //   $text->setTitle('Text Two');
      //   $text->setBody('This is the body');
      //
      //   $entityManager->persist($text);
      //
      //   $entityManager->flush();
      //
      //   return new Response('Text saved with the id of '.$text->getId());
      // }

  }

 ?>
