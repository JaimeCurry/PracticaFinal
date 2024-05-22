<?php

namespace Biblioteca\DemoBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityRepository;
use Biblioteca\DemoBundle\Entity\Biblioteca;
use Biblioteca\DemoBundle\Entity\BibliotecaRepository;
use Biblioteca\DemoBundle\Entity\Libro;
use Biblioteca\DemoBundle\Entity\LibroRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Biblioteca\DemoBundle\Form\LibroType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType; 
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\RequestStack;

class LibrosController extends Controller
{
     public function listarLibrosBibliotecaAction($idBiblioteca)
    {
        //http://localhost/Bibliotecas/web/app_dev.php/listarLibrosBiblioteca/1
        $em = $this->getDoctrine()->getEntityManager();
        $libros = $em->getRepository('BibliotecaDemoBundle:Libro')->listarLibrosBiblioteca($idBiblioteca);
        return $this->render('BibliotecaDemoBundle:Default:listarLibros.html.twig', array('libros' => $libros));
    }
    public function librosTituloBibliotecaAction($idBiblioteca,$titulo)
    {
        //http://localhost/Bibliotecas/web/app_dev.php/librosTituloBiblioteca/1/titulo1
        $em = $this->getDoctrine()->getEntityManager();
        $libros = $em->getRepository('BibliotecaDemoBundle:Libro')->librosTituloBiblioteca($idBiblioteca,$titulo);
        return $this->render('BibliotecaDemoBundle:Default:listarLibros.html.twig', array('libros' => $libros));
    }
    public function librosAutorBibliotecaAction($idBiblioteca,$autor)
    {
        //http://localhost/Bibliotecas/web/app_dev.php/librosAutorBiblioteca/1/autor1
        $em = $this->getDoctrine()->getEntityManager();
        $libros = $em->getRepository('BibliotecaDemoBundle:Libro')->librosAutorBiblioteca($idBiblioteca,$autor);
        return $this->render('BibliotecaDemoBundle:Default:listarLibros.html.twig', array('libros' => $libros));
    }
    public function librosEditorialBibliotecaAction($idBiblioteca,$editorial)
    {
        //http://localhost/Bibliotecas/web/app_dev.php/librosEditorialBiblioteca/1/editorial1
        $em = $this->getDoctrine()->getEntityManager();
        $libros = $em->getRepository('BibliotecaDemoBundle:Libro')->librosEditorialBiblioteca($idBiblioteca,$editorial);
        return $this->render('BibliotecaDemoBundle:Default:listarLibros.html.twig', array('libros' => $libros));
    }
    public function buscarLibroTituloAction($titulo)
    {
        //http://localhost/Bibliotecas/web/app_dev.php/buscarLibroTitulo/titulo1
        $em = $this->getDoctrine()->getEntityManager();
        $libros = $em->getRepository('BibliotecaDemoBundle:Libro')->findBy(['titulo' => $titulo]);
        return $this->render('BibliotecaDemoBundle:Default:buscarLibroTitulo.html.twig', array('libros' => $libros));
    }
    public function buscarLibroTituloDisponibilidadAction($titulo)
    {
        //http://localhost/Bibliotecas/web/app_dev.php/buscarLibroTituloDisponibilidad/titulo1
        $em = $this->getDoctrine()->getEntityManager();
        $libros = $em->getRepository('BibliotecaDemoBundle:Libro')->findBy([
            'titulo' => $titulo
            //'ejemplares' => ['>=' => 1]
        ]);
        return $this->render('BibliotecaDemoBundle:Default:buscarLibroTitulo.html.twig', array('libros' => $libros));
    }
    public function annadirLibroAction(){ 
        //http://localhost/Bibliotecas/web/app_dev.php/annadirBiblioteca
        $request =$this->getRequest();
        $libro = new Libro();
        $form = $this->createForm(new LibroType(), $libro);
        
        if ($request->getMethod()=='POST')
        {
            $form->bind($request);
            if ($form->isValid())
            {
                 $em=$this->getDoctrine()->getEntityManager();
                 $em->persist($libro);
                 $em->flush();
                
                 return $this->redirect($this->generateUrl('listarLibrosBiblioteca',['idBiblioteca' => 25]));
            }
        }
        
        return $this->render('BibliotecaDemoBundle:Default:annadirLibro.html.twig', array('form' => $form->createView()));
    }
    
    public function eliminarLibroAction($id)
    {
        //http://localhost/Bibliotecas/web/app_dev.php/eliminarLibro/25

        $em = $this->getDoctrine()->getManager();
        $libro = $em->getRepository('BibliotecaDemoBundle:Libro')->find($id);

        if (!$libro) {
            throw $this->createNotFoundException('No se encontró el libro con ID ' . $id);
        }

        $bibliotecaId = $libro->getBiblioteca()->getId();
        $em->remove($libro);
        $em->flush();

        return new RedirectResponse($this->generateUrl('listarLibrosBiblioteca', array('idBiblioteca' => intval($bibliotecaId))));
    }
    
    public function modificarLibroAction($id)
    {
        $request =$this->getRequest();
        $em = $this->getDoctrine()->getManager();
        $libro = $em->getRepository('BibliotecaDemoBundle:Libro')->find($id);

        if (!$libro) {
            throw $this->createNotFoundException('No se encontró el libro con ID ' . $id);
        }

        $form = $this->createFormBuilder($libro)
            ->add('titulo', 'text')
            ->add('autor', 'text')
            ->add('sinopsis', 'textarea')
            ->add('fechaPublicacion', 'date')
            ->add('editorial', 'text')
            ->add('isbn', 'text')
            ->add('ejemplares', 'integer')
            ->add('biblioteca', 'entity', array(
                'class' => 'BibliotecaDemoBundle:Biblioteca',
                'property' => 'nombre',
            ))
            ->add('save', 'submit', array('label' => 'Modificar Libro'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();

            return $this->redirectToRoute('listarLibrosBiblioteca', array('idBiblioteca' => $libro->getBiblioteca()->getId()));
        }

        return $this->render('BibliotecaDemoBundle:Default:modificarLibro.html.twig', array(
            'form' => $form->createView(),
            'libro' => $libro,
        ));
    }

}

