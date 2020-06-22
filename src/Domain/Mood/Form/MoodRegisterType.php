<?php

declare(strict_types=1);

namespace App\Domain\Mood\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;

class MoodRegisterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options) : void
    {
        $builder
            ->add('mood', MoodType::class)
            ->add('dueDate', DateType::class)
            ->add('save', SubmitType::class);
    }
}