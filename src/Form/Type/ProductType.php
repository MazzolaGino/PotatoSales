<?php

namespace App\Form\Type;

use App\Entity\Product;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class ProductType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options): void {
        $builder
            ->add('productID', IntegerType::class)
            ->add('productName', TextType::class)
            ->add('productManager', TextType::class)
            ->add('salesStartDate', DateType::class)
            ->add('save', SubmitType::class, ['label' => 'Save Product'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }

}
