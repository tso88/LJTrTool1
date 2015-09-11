<?php

namespace LJTrTool\RegistrationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\DataTransformer\DateTimeToStringTransformer;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class RoleApprovalType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('roleApprovalId', 'hidden', array('label' => 'RoleApprovalId'))
            ->add('role', 'typeahead', array(
                        "data_class" => 'LJTrTool\RegistrationBundle\Entity\Role',
                        'label'    => 'Rolle',
                        'attr' => array("display" => "displayName"), //the property to display in case of hydrated form
                    ))
            ->add('registration_startTime', 'text', array('label' => 'Startzeit'))
            ->add('registration_endTime', 'text', array('label' => 'Endzeit'))
            ->add('showRole', 'checkbox', array('label' => 'Anzeigen?'))

            ->add('roleId', 'hidden', array('label' => 'RoleId', 'mapped' => false))
            ->add('roleName', 'text', array('label' => 'Rollenname (intern)', 'required' => true, 'mapped' => false))
            ->add('conditions', 'entity', array(  'class' => 'LJTrTool\RegistrationBundle\Entity\Condition',
                'property' => 'displayName',
                'query_builder' => function(EntityRepository $er) {
                    return $er->createQueryBuilder('c')
                        ->orderBy('c.conditionName', 'ASC');
                },
                'multiple' => true,
                'placeholder' => 'Gliederung auswählen',
                'required' => false,
                'mapped' => false))
            ->add('description', 'textarea', array('attr' => array('rows' => 8), 'label' => 'Beschreibung', 'required' => false, 'mapped' => false))
            ->add('Anlegen', 'submit');

        $builder->get('registration_startTime')
            ->addModelTransformer(new DateTimeToStringTransformer('Europe/Berlin', 'Europe/Berlin', 'd.m.Y H:i'));
        $builder->get('registration_endTime')
            ->addModelTransformer(new DateTimeToStringTransformer('Europe/Berlin', 'Europe/Berlin', 'd.m.Y H:i'));
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'LJTrTool\RegistrationBundle\Entity\RoleApproval'
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
