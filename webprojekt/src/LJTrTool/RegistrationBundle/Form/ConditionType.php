<?php

namespace LJTrTool\RegistrationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ConditionType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('conditionId', 'hidden', array('label' => 'ConditionId'))
            ->add('conditionName', 'text', array('label' => 'Anforderungsname (intern)', 'required' => true))
            ->add('displayName', 'text', array('label' => 'angezeigter Anforderungsname', 'required' => true))
            ->add('description', 'textarea', array('label' => 'Beschreibung', 'required' => false))
            ->add('Anlegen', 'submit');
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'LJTrTool\RegistrationBundle\Entity\Condition'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ljtrtool_registrationbundle_condition';
    }
}
