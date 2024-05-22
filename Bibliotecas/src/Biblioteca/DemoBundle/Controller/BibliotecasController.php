<?php

namespace Biblioteca\DemoBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityRepository;
use Biblioteca\DemoBundle\Entity\Biblioteca;
use Biblioteca\DemoBundle\Entity\BibliotecaRepository;
use Biblioteca\DemoBundle\Entity\Libro;
use Biblioteca\DemoBundle\Entity\LibroRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Biblioteca\DemoBundle\Form\BibliotecaType;

class BibliotecasController extends Controller
{
    public function listarBibliotecasAction()
    {
         //http://localhost/Bibliotecas/web/app_dev.php/listarBibliotecas
         $em = $this->getDoctrine()->getEntityManager();     
         $bibliotecas = $em->getRepository('BibliotecaDemoBundle:Biblioteca')->findAll();
        return $this->render('BibliotecaDemoBundle:Default:index.html.twig', array('bibliotecas' => $bibliotecas));
    }
    public function buscarBibliotecaNombreAction($nombre)
    {
         //http://localhost/Bibliotecas/web/app_dev.php/buscarBibliotecaNombre/nombre1
         $em = $this->getDoctrine()->getEntityManager();     
         $biblioteca = $em->getRepository('BibliotecaDemoBundle:Biblioteca')->findBy(['nombre' => $nombre]);
        return $this->render('BibliotecaDemoBundle:Default:index.html.twig', array('bibliotecas' => $biblioteca));
    }
    public function buscarBibliotecasCiudadAction($ciudad)
    {
         //http://localhost/Bibliotecas/web/app_dev.php/buscarBibliotecasCiudad/ciudad1
         $em = $this->getDoctrine()->getEntityManager();     
         $bibliotecas = $em->getRepository('BibliotecaDemoBundle:Biblioteca')->findBy(['ciudad' => $ciudad]);
        return $this->render('BibliotecaDemoBundle:Default:index.html.twig', array('bibliotecas' => $bibliotecas));
    }
    public function annadirBibliotecaAction(){ 
        //http://localhost/Bibliotecas/web/app_dev.php/annadirBiblioteca
        $request =$this->getRequest();
        $biblioteca = new Biblioteca();
        $form = $this->createForm(new BibliotecaType(), $biblioteca);
        
        if ($request->getMethod()=='POST')
        {
            $form->bind($request);
            if ($form->isValid())
            {
                 $em=$this->getDoctrine()->getEntityManager();
                 $em->persist($biblioteca);
                 $em->flush();
                
                 return $this->redirect($this->generateUrl('listarBibliotecas'));
            }
        }
        
        return $this->render('BibliotecaDemoBundle:Default:annadirBiblioteca.html.twig', array('form' => $form->createView()));
    }
    public function eliminarBibliotecaAction($id){
        //http://localhost/Bibliotecas/web/app_dev.php/eliminarBiblioteca/1
        $em = $this->getDoctrine()->getEntityManager();
        $em->getRepository('BibliotecaDemoBundle:Biblioteca')->eliminarBiblioteca($id);
        return $this->redirect($this->generateUrl('listarBibliotecas'));
    }
    public function editarBibliotecaAction($id){ 
        //http://localhost/Bibliotecas/web/app_dev.php/editarBiblioteca/2
        $request =$this->getRequest();
        $em = $this->getDoctrine()->getEntityManager();
        $biblioteca = $em->getRepository('BibliotecaDemoBundle:Biblioteca')->find($id);
        $form = $this->createForm(new BibliotecaType(), $biblioteca);
        
        if ($request->getMethod()=='POST')
        {
            $form->bind($request);
            if ($form->isValid())
            {
                 $em->flush();
                 return $this->redirect($this->generateUrl('listarBibliotecas'));
            }
        }
        
       return $this->render('BibliotecaDemoBundle:Default:editarBiblioteca.html.twig', array(
    'form' => $form->createView(),
    'biblioteca' => $biblioteca, 
));
    }
    
    
}
