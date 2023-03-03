<?php

namespace App\Controller\Admin;

use App\Entity\Formula;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;


class FormulaCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Formula::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            //IdField::new('id'),
            TextField::new('title'),
            NumberField::new('price'),
            TextEditorField::new('description'),
        ];
    }
    
}
