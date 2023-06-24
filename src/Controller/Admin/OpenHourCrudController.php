<?php

namespace App\Controller\Admin;

use App\Entity\OpenHour;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class OpenHourCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return OpenHour::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            //IdField::new('id'),
            TextField::new('days', 'jour'),
            TextEditorField::new('description'),
        ];
    }
    
}
