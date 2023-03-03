<?php

namespace App\Controller\Admin;

use App\Entity\ImageGallery;

use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ImageGalleryCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ImageGallery::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            /*IdField::new('id'),*/
            TextField::new('title'),
            ImageField::new('image')
                ->setBasePath('upload')
                ->setUploadDir('public/upload')
                ->setUploadedFileNamePattern('[slug]-[timestamp].[extension]')
        ];
    }
    
}
