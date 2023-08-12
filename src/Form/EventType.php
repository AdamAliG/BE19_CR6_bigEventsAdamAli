<?php



namespace App\Form;

use App\Entity\Event;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
class EventType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
{
    $builder
        ->add('name', TextType::class, ['label' => 'Event Name', 'attr' => ['class' => 'form-control']])
        ->add('date', DateType::class, ['label' => 'Event Date', 'widget' => 'single_text', 'attr' => ['class' => 'form-control']])
        ->add('start_time', TimeType::class, ['label' => 'Start Time', 'widget' => 'single_text', 'attr' => ['class' => 'form-control']])
        ->add('description', TextareaType::class, ['label' => 'Description', 'attr' => ['class' => 'form-control']])
        ->add('image_link', UrlType::class, ['label' => 'Image Link', 'attr' => ['class' => 'form-control']])
        ->add('capacity', NumberType::class, ['label' => 'Capacity', 'attr' => ['class' => 'form-control']])
        ->add('contact_email', EmailType::class, ['label' => 'Contact Email', 'attr' => ['class' => 'form-control']])
        ->add('contact_phone', TextType::class, ['label' => 'Contact Phone', 'attr' => ['class' => 'form-control']])
        ->add('address', TextType::class, ['label' => 'Address', 'attr' => ['class' => 'form-control']])
        ->add('ZIP_code', TextType::class, ['label' => 'ZIP Code', 'attr' => ['class' => 'form-control']])
        ->add('city_name', TextType::class, ['label' => 'City Name', 'attr' => ['class' => 'form-control']])
        ->add('event_url', UrlType::class, ['label' => 'Event URL', 'attr' => ['class' => 'form-control']])
        ->add('event_type', TextType::class, ['label' => 'Event Type', 'attr' => ['class' => 'form-control']])
    ;
}


    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'csrf_protection' => false,
            'data_class' => Event::class,
            'allow_extra_fields' => true
        ]);
    }
}
