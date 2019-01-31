<?php


namespace App\Controller;




use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use App\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Serializer;

Class UserController extends AbstractController{


     /**
     * @Route("/find/{first}/{last}/{offset}/{limit}", name="user_find_by_name")
     * @Method({"GET"})
     */
    public function listUsersByFirstAndLast($first,$last,$offset,$limit){
        $userList = $this->getDoctrine()->getRepository('App:User')->findBy(['first' => $first,'last' => $last],array(),$limit,$offset);
                                                                        
        $data = $this->get('serializer')->serialize($userList, 'json');

        $response = $this->createAnswer($data);
        
        return $response;
    }
    /**
     * @Route("/findAll/{offset}/{limit}", name="user_find_all")
     * @Method({"GET"})
     */
    public function listAllUsers($offset,$limit){
        $userList = $this->getDoctrine()->getRepository('App:User')->findBy(array(),array('guid' => 'DESC'),$limit,$offset);
                                                                        
        $data = $this->get('serializer')->serialize($userList, 'json');

        $response = $this->createAnswer($data);
        
        return $response;
    }

     /**
     * @Route("/findByLastName/{last}/{offset}/{limit}", name="user_find_by_lastName")
     * @Method({"GET"})
     */
    public function listUserByLastName($last,$offset,$limit){
        $userList = $this->getDoctrine()->getRepository('App:User')->findBy(['last' => $last],array('guid' => 'DESC'),$limit,$offset);
                                                                        
        $data = $this->get('serializer')->serialize($userList, 'json');

        $response = $this->createAnswer($data);
        
        return $response;
    }

    /**
     * @Route("/findByFirstName/{first}/{offset}/{limit}", name="user_find_by_firstName")
     * @Method({"GET"})
     */
    public function listUserByFirstName($first,$offset,$limit){
        $userList = $this->getDoctrine()->getRepository('App:User')->findBy(['first' => $first],array('guid' => 'DESC'),$limit,$offset);
                                                                        
        $data = $this->get('serializer')->serialize($userList, 'json');

        $response = $this->createAnswer($data);
        
        return $response;
    }


    private function createAnswer($data){

        $response = new Response($data);
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Expose-Headers', 'X-App-Version');
        $response->headers->set('Access-Control-Allow-Credentials', 'true');
        $response->headers->set('Access-Control-Allow-Origin', '*');

        return $response;
    }

}

?>