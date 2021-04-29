<?php

namespace App\Form;

use App\Entity\User;
use App\Form\Type\RolesType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class UserType extends AbstractType
{
    private $pwd;
    private $authorizationChecker;

    public function __construct(AuthorizationCheckerInterface $authorizationChecker){
        $this->authorizationChecker = $authorizationChecker;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $this->pwd = $options['pwd'];
        $builder
            ->add('username')
            ->add('roles',RolesType::class)
            ->add('nom')
            ->add('prenom')
            ->add('adresse')
            ->add('codePostal')
            ->add('ville')
            ->add('dateEmbauche')
            ->add('typeUser')
            ->add('plainPassword', PasswordType::class, [
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new NotBlank(),
                    new Length(['min' => 8]),
                ],
                'label' => 'Mot de Passe',
            ])
            ->addEventListener(
                FormEvents::PRE_SET_DATA,
                [$this, 'onPreSetData']
            )
        ;
    }

    public function onPreSetData(FormEvent $event)
    {
        $form = $event->getForm();

        /** @var $user User */
        $user = $event->getData();

        if($user->getId() !== null){

            if(isset($this->pwd)){
                $form->remove('username');
                $form->remove('roles');
                $form->remove('nom');
                $form->remove('prenom');
                $form->remove('adresse');
                $form->remove('codePostal');
                $form->remove('ville');
                $form->remove('dateEmbauche');
                $form->remove('typeUser');
            }
            else {
                $form->remove('plainPassword');

                if($this->authorizationChecker->isGranted('ROLE_ADMIN') === false)// Check les roles
                {
                    $form->remove('roles');
                    $form->remove('typeUser');
                }
            }
        }
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
            'pwd' => null
        ]);
    }
}
