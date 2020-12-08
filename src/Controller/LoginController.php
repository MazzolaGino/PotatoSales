<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use App\Form\Type\UserType; 
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface; 


class LoginController extends AbstractController
{
    
    protected $session;
    
    public function __construct(SessionInterface $session)
    {
        $this->session = $session;
    }
    /**
     * @Route("/login", name="login")
     */
    public function index(): Response
    {
        $user = new User();
        
        $loginForm = $this->createForm(UserType::class, $user);
        
        return $this->render('login/index.html.twig', [
            'controller_name' => 'LoginController',
            'form' => $loginForm->createView()
        ]);
        
    }
    
     /**
     * @Route("/logout", name="logout")
     */
    public function logout(): Response
    {
      
       $this->session->clear();
       return $this->redirectToRoute('login');
        
    }
    
    /**
     * @Route("/login-submit", name="login_submit")
     */
    public function submit(Request $request): Response
    {
       
        // just setup a fresh $task object (remove the example data)
        $user = new User();

        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
      
            $user = $form->getData();
            
            $this->session->set('username', $user->getUsername());
            $this->session->set('fullname', 'User Fullname');
            $this->session->set('email', 'username@mail.com');
                   
            return $this->redirectToRoute('product');
        }

 
        return $this->render('login/index.html.twig', [
            'controller_name' => 'LoginController',
            'form' => $form->createView()
        ]);
        
    }
}
