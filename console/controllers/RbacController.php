<?php
namespace console\controllers;

use Yii;
use yii\console\Controller;

class RbacController extends Controller
{
    public function actionInit()
    {
        $auth = Yii::$app->authManager;

        // add "createUser" permission
        $createUser = $auth->createPermission('createUser');
        $createUser->description = 'Create a User';
        $auth->add($createUser);

        // add "updateUser" permission
        $updateUser = $auth->createPermission('updateUser');
        $updateUser->description = 'Update User';
        $auth->add($updateUser);

        // add "traveller" role and give this role the "createUser" permission
        $traveller = $auth->createRole('traveller');
        $auth->add($traveller);
        $auth->addChild($traveller, $createUser);

        // add "host" role and give this role the "createUser" permission
        $host = $auth->createRole('host');
        $auth->add($host);
        $auth->addChild($host, $createUser);

        // add "admin" role and give this role the "updatePost" permission
        // as well as the permissions of the "author" role
        $admin = $auth->createRole('admin');
        $auth->add($admin);
        $auth->addChild($admin, $updateUser);
        $auth->addChild($admin, $host);

        // Assign roles to users. 1 and 2 are IDs returned by IdentityInterface::getId()
        // usually implemented in your User model.
        $auth->assign($host, 2);
        $auth->assign($admin, 1);
    }
}