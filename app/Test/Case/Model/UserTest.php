<?php
App::uses('User', 'Model');

class UserTest extends CakeTestCase {

    public function setup() {
        parent::setup();
        $this->User = ClassRegistry::init('User');
    }

    public function testFindByName() {
        $user = $this->User->findByName('testuser');

        //debug($user);
        $this->assertEqual($user['username'], 'testuser'); // usersテーブルにデータが入っていないとテスト失敗となります。
    }

    public function testFindByName_nouser() {
        $user = $this->User->findByName('nouser');

        //debug($user);
        $this->assertEqual(empty($user), true);
    }
}
?>