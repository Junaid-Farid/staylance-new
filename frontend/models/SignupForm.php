<?php

namespace frontend\models;

use common\models\User;
use yii\base\Model;
use Yii;

/**
 * Signup form
 */
class SignupForm extends Model {

    public $firstname;
    public $lastname;
    public $gender;
    public $email;
    public $password;
    public $birthday;
    public $user_role;

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            ['firstname', 'required'],
            ['firstname', 'string', 'min' => 2, 'max' => 255],
            ['lastname', 'required'],
            ['lastname', 'string', 'min' => 2, 'max' => 255],
            ['gender', 'required'],
            ['gender', 'string', 'min' => 2, 'max' => 255],
            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],
            ['password', 'required'],
            ['password', 'string', 'min' => 6],
            ['birthday', 'required'],
            ['user_role', 'required']
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup() {
        if ($this->validate()) {
            $user = new User();
            $user->gender = $this->gender;
            $user->firstname = $this->firstname;
            $user->lastname = $this->lastname;
            $user->username = $this->email;
            $user->email = $this->email;
            $user->birthday = $this->birthday;
            $user->user_role = $this->user_role;
            $user->setPassword($this->password);
            $user->generateAuthKey();
            if ($user->save()) {
                if ($user->user_role == 'host') {
                    $auth = Yii::$app->authManager;
                    $hostRole = $auth->getRole('host');
                    $auth->assign($hostRole, $user->id);
                } elseif ($user->user_role == 'traveller') {
                    $auth = Yii::$app->authManager;
                    $hostRole = $auth->getRole('traveller');
                    $auth->assign($hostRole, $user->id);
                }
                return $user;
            }
        }

        return null;
    }

}
