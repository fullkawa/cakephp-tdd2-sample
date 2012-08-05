<?php
class User extends AppModel {

    public function beforeSave($options = array()) {
        $this->data['User']['password'] = AuthComponent::password($this->data['User']['password']);
        return true;
    }

    public function findByName($name) {
        $result = $this->find('first', array('conditions' => array('username' => $name)));

        //debug($result);
        if (!empty($result)) {
            return $result['User'];
        }
    }
}
?>
