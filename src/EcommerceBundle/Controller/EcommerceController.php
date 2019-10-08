<?php

namespace EcommerceBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use EcommerceBundle\Entity\User;

class EcommerceController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $user_repo = $em->getRepository("EcommerceBundle:User");
        $users = $user_repo->findAll();
        
        return $this->render('EcommerceBundle:User:index.html.twig', array('users'=> $users));
    }
    
    public function createAction()
    {
        
        $user = new User();
        $user->setRole("User");
        $user->setName("Esperanza");
        $user->setSurname("Ayala");
        $user->setEmail("e.ayala@gmail.com");
        $user->setPassword("password de prueba");
        
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($user);
        $flush = $em->flush();
        
        if ($flush != null){
            echo "El usuario no se ha creado bien";  
        }else{
            echo "El usuario se ha creado correctamente";   
        }
        
        die();
    }
    
    public function readAction() {
        $em = $this->getDoctrine()->getEntityManager();
        $users_repo = $em->getRepository("EcommerceBundle:User");
        $users = $users_repo->findAll();
        
        foreach($users as $user){
            echo $user->getId()."<br>";
            echo $user->getRole()."<br>";
            echo $user->getName()."<br>";
            echo $user->getSurname()."<br>";
            echo $user->getEmail()."<br>";
            echo $user->getPassword()."<br>";   
        }
        
        die();
        
    }
    
    public function updateAction($id, $role, $name, $surname, $email, $password)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $users_repo = $em->getRepository("EcommerceBundle:User");
        
        $user = $users_repo->find($id);
        $user->setRole($role);
        $user->setName($name);
        $user->setSurname($surname);
        $user->setEmail($email);
        $user->setPassword($password);
        
        $em->persist($user);
        $flush = $em->flush();
        
         if ($flush!=null){
            echo "El curso no se ha actualizado";  
        }else{
            echo "El usuario se ha actualizado correctamente";   
        }
        
        die();
    }
    
    
    public function deleteAction($id) {
         $em = $this->getDoctrine()->getEntityManager();
         $users_repo = $em->getRepository("EcommerceBundle:User");
         
         $user = $users_repo->find($id);
         $em->remove($user);
         
         $flush=$em->flush();
         
         if($flush!=null){
             echo "El usuario no se ha borrado bien";
        }else{  
             echo "El usuasrio se ha borrado correctamente";   
        }
        
        die();
        
    }

}
