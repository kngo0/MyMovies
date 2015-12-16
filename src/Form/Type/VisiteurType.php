<?php

namespace GSB\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class VisiteurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', 'text', array(
                'label' => "Nom",
            ))
            ->add('prenom', 'text', array(
                'label' => "Prénom",
            ))
            ->add('adresse', 'text', array(
                'label' => "Adresse",
            ))
            ->add('codePostal', 'text', array(
                'label' => "Code postal",
            ))
            ->add('ville', 'text', array(
                'label' => "Ville",
            ))
            ->add('dateEmbauche', 'date', array(
                'label' => "Date d'embauche",
                'widget' => 'single_text',    // Pour rendre le champ comme un input de type 'date'
            ))
            ->add('username', 'text', array(
                'label' => "Nom d'utilisateur",
            ))
            ->add('password', 'repeated', array(
                'type'            => 'password',
                'invalid_message' => 'Les mots de passe doivent être identiques.',
                'options'         => array('required' => true),
                'first_options'   => array('label' => 'Mot de passe'),
                'second_options'  => array('label' => 'Répéter le mot de passe'),
            ))
            ->add('save', 'submit', array(
                'label' => 'Mettre à jour',
            ));
    }

    public function getName()
    {
        return 'visiteur';
    }
}
