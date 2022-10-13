<?php

declare(strict_types=1);

namespace App\Controller;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{
    /**
     * ログイン画面表示
     *
     * @return void
     */
    public function index(): void
    {
    }

    /**
     * ログイン確認処理
     *
     * @return void
     */
    public function login()
    {
        // 記載したログイン情報の取得
        $loginData = $this->request->getData();

        // メールアドレス
        $email = $loginData['email'];
        // ログインパスワード
        $password = $loginData['password'];

        // ログイン情報の確認
        $users = $this->Users->find()
        ->where(['user_id' => $email,'user_password' => $password])
        ->first();

        // ログイン
        if (empty($users)) {
            $this->Flash->set('ログインに成功しました。');
        }
        $this->set(compact('email', 'password', 'users'));
    }
}
