<?php

namespace App\Controller\Admin;

use App\Entity\BoutiqueUser;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class BoutiqueUserCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return BoutiqueUser::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
