<?php

namespace LJTrTool\RegistrationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class PersonType extends AbstractType
{
	private $divisions;

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->setAction($options['action'])
            ->setMethod('POST')
            ->add('personId', 'hidden', array('label' => 'Vorname', 'required' => true))
            ->add('name', 'text', array('label' => 'Nachname'))
            ->add('firstname','text', array('label' => 'Vorname'))
            ->add('file')
            //->add('birthday', 'birthday')
            ->add('birthday', 'text', array('label' => 'Geburtstag'))
            ->add('gender', 'choice', array(
                'label' => 'Geschlecht',
                'choices'  => array('m' => 'Männlich', 'f' => 'Weiblich'),
                'expanded' => true,
                'required' => true,
            ))
            ->add('division', 'entity', array(  'class' => 'LJTrTool\RegistrationBundle\Entity\Division',
                                                'label' => 'Gliederung',
                                                'property' => 'divisionName',
                                                'query_builder' => function(EntityRepository $er) {
                                                    return $er->createQueryBuilder('d')
                                                        ->orderBy('d.divisionName', 'ASC');
                                                },
                                                'placeholder' => 'Gliederung auswählen'))
            //http://symfony.com/doc/current/reference/forms/types/entity.html

            ->add('email', 'text', array('label' => 'E-Mail Adresse'))
            ->add('phone', 'text', array('label' => 'Telefonnummer', 'required' => false))
            ->add('address', new AddressType(), array('required' => false))
            ->add('feeding', 'entity', array(   'class' => 'LJTrTool\RegistrationBundle\Entity\Feeding',
                                                'property' => 'feedingName',
                                                'expanded' => true,
                                                'required' => false))
         //   ->add('allergies')
		    ->add('Anlegen', 'submit');


    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'LJTrTool\RegistrationBundle\Entity\Person'
        ));
    }

    /**
     * @return mixed
     */
    public function getDivisions()
    {
        return $this->divisions;
    }

    /**
     * @param mixed $divisions
     */
    public function setDivisions($divisions)
    {
        $this->divisions = $divisions;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ljtrtool_registrationbundle_person';
    }
}
