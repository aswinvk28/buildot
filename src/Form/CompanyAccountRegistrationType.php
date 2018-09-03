<?php

namespace App\Form;

use App\Model\CompanyAccount;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CompanyAccountRegistrationType extends AbstractType implements DataMapperInterface
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('company_name')
            ->add('website')
            ->add('logo')
            ->add('portfolio')
            ->add('company_status')
            ->add('created')
            ->add('modified')
        ;
        
        $this->container = $options['container'];
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => CompanyAccount::class,
        ]);
    }
    
    public function mapDataToForms($data, $forms) 
    {
        
    }
    
    public function mapFormsToData($forms, &$data)
    {
        $forms = iterator_to_array($forms);
        
        $companyAccount = new CompanyAccount();
        $companyAccount->setEmail($forms['email']->getData());
        $companyAccount->setFirstName($forms['first_name']->getData());
        $companyAccount->setLastName($forms['first_name']->getData());
        $companyAccount->setPassword($forms['password']->getData());
        $companyAccount->setDesignation($forms['designation']->getData());
        $companyAccount->setMobile($forms['mobile']->getData());
        $companyAccount->setCompanyName($forms['company_name']->getData());
        $companyAccount->setCompanyType($forms['company_type']->getData());
        $companyAccount->setCompanyFunctionalArea($forms['company_functional_area']->getData());
        $companyAccount->setTelephone($forms['telephone']->getData());
        $companyAccount->setFax($forms['fax']->getData());
        $companyAccount->setWebsite($forms['website']->getData());
        $companyAccount->setCountry($forms['country']->getData());
        $companyAccount->setLocation($forms['location']->getData());
        if($forms['member_photo']->getData()->isValid()) {
            $companyAccount->setMemberPhoto($forms['member_photo']->getData(), $this->container->getParameter('photo_dir'));
        }
        if($forms['logo']->getData()->isValid()) {
            $companyAccount->setCurriculumVitae($forms['logo']->getData(), $this->container->getParameter('logo_dir'));
        }
        if($forms['portfolio']->getData()->isValid()) {
            $companyAccount->setWorkPortfolio($forms['portfolio']->getData(), $this->container->getParameter('portfolio_dir'));
        }
        
        $data = $companyAccount;
    }
}
