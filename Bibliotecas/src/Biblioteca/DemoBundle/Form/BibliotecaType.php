<?php
namespace Biblioteca\DemoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BibliotecaType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('id', 'hidden')
            ->add('nombre', 'text', array('label'=>'Introduce nombre de la biblioteca'))
            ->add('direccion')
            ->add('ciudad', 'text', array('label'=>'Introduce en que ciudad esta'))
            ->add('horarioApertura')
            ->add('horarioCierre')
            ->add('fechaFundacion')
            ->add('normas')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Biblioteca\DemoBundle\Entity\Biblioteca'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'biblioteca_demobundle_biblioteca';
    }
}


