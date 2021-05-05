<?php

namespace App\Form;

use App\Entity\Etat;
use App\Entity\FicheFrais;
use App\Repository\EtatRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class FicheFraisType extends AbstractType
{
    private $tokenStorage;
    private $etatRepository;

    public function __construct(TokenStorageInterface $tokenStorage, EtatRepository $etatRepository){
        $this->tokenStorage = $tokenStorage;
        $this->etatRepository = $etatRepository;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('mois')
            ->add('nbJustificatifs')
            ->add('montantValide')
            ->add('dateModif')
            ->add('motifRefus')
            ->add('user')
            ->add('etat')
            ->add('acteurs')
            ->addEventListener(
                FormEvents::PRE_SET_DATA,
                [$this, 'onPreSetData']
            )
        ;
    }

    public function onPreSetData(FormEvent $event)
    {
        $form = $event->getForm();

        /** @var $ficheFrais FicheFrais */
        $ficheFrais = $event->getData();

        $FCSC = $this->etatRepository->findOneBy(['id' => 2]);

        if($ficheFrais->getId() === null) {
            $form->remove('nbJustificatifs');

            $form->remove('montantValide');

            $ficheFrais->setMois(new \DateTime());
            $form->remove('mois');

            $ficheFrais->setDateModif(new \DateTime());
            $form->remove('dateModif');

            $form->remove('motifRefus');

            $ficheFrais->setUser($this->tokenStorage->getToken()->getUser());
            $form->remove('user');

            $ficheFrais->setEtat($FCSC);
            $form->remove('etat');
        }
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => FicheFrais::class,
        ]);
    }
}
