<?php

namespace Manager\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PreviewType extends AbstractType
{

  public function setDefaultOptions(OptionsResolverInterface $resolver)
  {
    
  }
  
  public function getParent() {
    return 'field';
  }

  public function getName()
  {
    return 'preview';
  }

}

?>
