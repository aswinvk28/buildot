<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\DataMapperInterface;
use App\Entity\Users;
use App\Entity\Members;
use App\Entity\Usertype;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class RegistrationType extends AbstractType implements DataMapperInterface
{
    /**
     *
     * @var ContainerAwareInterface
     */
    private $container;
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('first_name', TextType::class)
            ->add('last_name', TextType::class)
            ->add('email', EmailType::class)
            ->add('password', RepeatedType::class, array(
                'type' => PasswordType::class,
                'invalid_message' => 'The password fields must match.',
                'options' => array('attr' => array('class' => 'form-password-field')),
                'required' => true,
                'first_options'  => array('label' => 'Password'),
                'second_options' => array('label' => 'Confirm Password')
            ))
            ->add('gender', ChoiceType::class)
            ->add('photo', FileType::class, array(
                'label' => 'Photo',
                'required' => false,
            ))
            ->add('cv', FileType::class, array(
                'label' => 'CV / Resume',
                'required' => false,
            ))
            ->add('portfolio', FileType::class, array(
                'label' => 'Portfolio',
                'required' => false,
            ))
        ;
        
        $container = $options['container'];
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }

    public function mapDataToForms($data, $forms) 
    {
        
    }

    public function mapFormsToData($forms, &$data) 
    {
        $forms = iterator_to_array($forms);
        
        $data = array();
        $user = new Users();
        $member = new Members();
        
        $user->setEmail($forms['email']->getData());
        $user->setRole(Usertype::MEMBER);
        $user->setPassword($forms['password']->getData());
        
        $member->setFirstName($forms['first_name']->getData());
        $member->setLastName($forms['last_name']->getData());
        $member->setGender($forms['gender']->getData());
        if($forms['member_photo']->getData()->isValid()) {
            $member->setPersonalPhoto($forms['member_photo']->getData(), $container->getParameter('photo_dir'));
        }
        if($forms['cv']->getData()->isValid()) {
            $member->setCurriculumVitae($forms['cv']->getData(), $container->getParameter('cv_dir'));
        }
        if($forms['portfolio']->getData()->isValid()) {
            $member->setWorkPortfolio($forms['portfolio']->getData(), $container->getParameter('portfolio_dir'));
        }
    }
    
}
