<?php

namespace App\Form;

use App\Entity\AdresseLivraison;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AdresseLivraisonType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('adresse')
            ->add('compAdresse')
            ->add('ville')
            ->add('codePostal')
            ->add('pays', ChoiceType::class, [
                'choices'  => [
                    'France' => 'France',
                    'Luxembourg' => 'Luxembourg',
                    'Belgique' => 'Belgique',
                ]])
            ->add('telephone')
            // ->add('adresseFacturation')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => AdresseLivraison::class,
        ]);
    }
}
