<?php

namespace LJTrTool\RegistrationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\DataTransformer\DateTimeToStringTransformer;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EventType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('eventId', 'hidden', array('label' => 'EventId'))
            ->add('eventLinkName', 'text', array('label' => 'Veranstaltungskürzel', 'required' => true))
            ->add('eventName', 'text', array('label' => 'Veranstaltungsname', 'required' => true))
            ->add('startTime', 'text', array('label' => 'Startzeit', 'required' => true, 'error_bubbling' => true))
            ->add('endTime', 'text', array('label' => 'Endzeit', 'error_bubbling' => true))
            ->add('place', 'text', array('label' => 'Ort', 'required' => false))
            ->add('description', 'textarea', array('attr' => array('rows' => 8), 'label' => 'Beschreibung', 'required' => false))
            ->add('Anlegen', 'submit');

        $builder->get('startTime')
            ->addModelTransformer(new DateTimeToStringTransformer('Europe/Berlin', 'Europe/Berlin', 'd.m.Y H:i'));
        $builder->get('endTime')
            ->addModelTransformer(new DateTimeToStringTransformer('Europe/Berlin', 'Europe/Berlin', 'd.m.Y H:i'));
        //http://symfony.com/doc/master/cookbook/form/data_transformers.html
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'LJTrTool\RegistrationBundle\Entity\Event'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ljtrtool_registrationbundle_event';
    }
}
