<?php

namespace Manager\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('type')
            ->add('price')
            ->add('quantity')
            ->add('expiration_date')
            ->add('productionDate')
            ->add('category')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Manager\AdminBundle\Entity\Product'
        ));
    }

    public function getName()
    {
        return 'manager_adminbundle_producttype';
    }
}
