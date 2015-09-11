<?php

namespace LJTrTool\RegistrationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class RegistrationKnownUserType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->setAction($options['action'])
            ->setMethod('POST')
            ->add('event', 'entity', array( 'class' => 'LJTrTool\RegistrationBundle\Entity\Event',
                'property' => 'eventName',
                'query_builder' => function(EntityRepository $er) use ($options) {
                    return $er->createQueryBuilder('e')
                        ->where('e.endTime < :time')
                        ->andWhere('e.eventLinkName = :eventLinkName')
                        ->setParameter('time', 'NOW()')
                        ->setParameter('eventLinkName', $options['attr']['eventLinkName'])
                        ->orderBy('e.startTime', 'ASC');
                },
                'label' => 'Veranstaltung',
                'required' => true   ))
            ->add('person', 'entity', array( 'class' => 'LJTrTool\RegistrationBundle\Entity\Person',
                'property' => 'uniqueName',
                'query_builder' => function(EntityRepository $er) use ($options) {
                    return $er->createQueryBuilder('p')
                        ->where('p.personId = :personId')
                        ->setParameter('personId', $options['attr']['personId'])
                        ;
                },
                'label' => 'Person',
                'required' => true   ))
            ->add('roleApproval', 'entity', array(   'class' => 'LJTrTool\RegistrationBundle\Entity\RoleApproval',
                'property' => 'role.displayName',
                'label' => 'Rolle'))
            ->add('attendanceTimes', 'entity', array(  'class' => 'LJTrTool\RegistrationBundle\Entity\AttendanceTime',
                'property' => 'time',
                'label' => 'Zeiten',
                'required' => true,
                'expanded' => true,
                'multiple' => true
            ))
            ->add('condition', 'checkbox', array(
                'label'    => 'Ich habe die Teilnahmebedingungen gelesen und bin damit einverstanden',
                'required' => true,
                'mapped' => false
            ))
		    ->add('Submit', 'submit', array('label' => 'Verbindlich Anmelden'));

        //TODO Anmeldung nur für bestimmte Tage ergänzen
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'LJTrTool\RegistrationBundle\Entity\Registration'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ljtrtool_registrationbundle_registration';
    }
}
