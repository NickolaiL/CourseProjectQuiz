<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class QuizType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('title')->add('firstQuestionID')->add('secondQuestionID')->add('thirdQuestionID')->add('fourthQuestionID')->add('fifthQuestionID')->add('sixthQuestionID')->add('seventhQuestionID')->add('eighthQuestionID')->add('ninthQuestionID')->add('tenthQuestionID')->add('isActive');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Quiz'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_quiz';
    }


}
