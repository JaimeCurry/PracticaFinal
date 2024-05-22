<?php
namespace Biblioteca\DemoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Biblioteca\DemoBundle\Entity\Biblioteca;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;



class LibroType extends AbstractType
{
       /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titulo')
            ->add('autor')
            ->add('sinopsis')
            ->add('fechaPublicacion', 'date')
            ->add('editorial')
            ->add('isbn')
            ->add('ejemplares')
            ->add('biblioteca', 'entity', array(
                'class' => 'BibliotecaDemoBundle:Biblioteca',
                'property' => 'nombre',
            ));
            
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Biblioteca\DemoBundle\Entity\Libro'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'biblioteca_demobundle_libro';
    }

}
