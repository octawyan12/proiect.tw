<?php

namespace Manager\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
		$can_be_removed = false;
        if ($builder->getData()) {
          if ($builder->getData()->getImage()) {
            $can_be_removed = true;
          }
        }
        $builder
            ->add('name')
            ->add('type')
            ->add('price')
            ->add('quantity')
            ->add('expiration_date','date')
            ->add('production_date','date')
            ->add('category')
			->add('image', new \Manager\AdminBundle\Form\ImageType(), array(
                          'can_be_removed' => $can_be_removed
            ));
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
