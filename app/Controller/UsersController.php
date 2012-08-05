<?php
class UsersController extends AppController {

    public function login() {
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                return $this->redirect($this->Auth->redirect());
            } else {
                $this->Session->setFlash(__('ログインに失敗しました。'));
            }
        }
        $this->set('title_for_layout', 'ログイン');
        return $this->render();
    }

    public function logout() {
        return $this->redirect($this->Auth->logout());
    }

    public function home() {
        $this->set('title_for_layout', 'ホーム');
        return $this->render();
    }
}
?>
