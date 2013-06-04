<?php

namespace Manager\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Manager\AdminBundle\Form\PreviewType;

class ImageType extends AbstractType
{

  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder
      ->add('file', 'file', array('label' => ' '))
      ->add('preview', new PreviewType(), array(
          'property_path' => 'web_path',
          'label' => ' '
      ));
    
    if ($options['can_be_removed']) {
      $builder->add('to_be_removed', 'checkbox');
    }
  }

  public function setDefaultOptions(OptionsResolverInterface $resolver)
  {
    $resolver->setDefaults(array(
        'data_class' => 'Manager\AdminBundle\Entity\Image',
        'can_be_removed' => false,
        'cascade_validation' => true,
    ));
  }

  public function getName()
  {
    return 'manager_adminbundle_imagetype';
  }

}
