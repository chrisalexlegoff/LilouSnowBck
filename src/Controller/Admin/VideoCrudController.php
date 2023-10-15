<?php

namespace App\Controller\Admin;

use App\Entity\Video;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Vich\UploaderBundle\Form\Type\VichFileType;

class VideoCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Video::class;
    }

    public function configureFields(string $video): iterable
    {
        return [
            TextField::new('nom'),
            TextField::new('description'),
            TextField::new('videoFile', 'Upload')
                ->setFormType(VichFileType::class)
                ->onlyOnForms(),
        ];
    }
}
