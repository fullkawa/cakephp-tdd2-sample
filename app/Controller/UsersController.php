<?php
class UsersController extends AppController {

    public function login() {
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                $this->Session->setFlash(__('Login success'));
                return $this->redirect($this->Auth->redirect());
            } else {
                $this->Session->setFlash(__('Username or password is incorrect'));
            }
        }
    }

    public function logout() {
        return $this->redirect($this->Auth->logout());
    }
}
?>
