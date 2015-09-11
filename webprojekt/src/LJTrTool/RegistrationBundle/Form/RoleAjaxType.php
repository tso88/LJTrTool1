<?php

namespace LJTrTool\RegistrationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class RoleAjaxType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('roleId', 'hidden', array('label' => 'RoleId'))
            ->add('roleName', 'text', array('label' => 'Rollenname (intern)', 'required' => true))
            ->add('conditions', 'entity', array(  'class' => 'LJTrTool\RegistrationBundle\Entity\Condition',
                'property' => 'displayName',
                'query_builder' => function(EntityRepository $er) {
                    return $er->createQueryBuilder('c')
                        ->orderBy('c.conditionName', 'ASC');
                },
                'multiple' => true,
                'placeholder' => 'Gliederung auswählen',
                'required' => false))
            ->add('description', 'textarea', array('attr' => array('rows' => 8), 'label' => 'Beschreibung', 'required' => false))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'LJTrTool\RegistrationBundle\Entity\Role'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ljtrtool_registrationbundle_roleapproval';
    }
}
