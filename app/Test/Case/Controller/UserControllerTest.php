<?php
class UserControllerTest extends ControllerTestCase {

    public $fixtures = array('app.user');

    public function setUp() {
        // 確実にログアウトした状態で各テストを実行する
        $this->testAction('/users/login', array('method' => 'get')); // $this->controllerを用意するためのダミー
        $this->controller->logout();

        $this->User = ClassRegistry::init('User');
    }

    public function testLogin_success() {
        $data = array('User' => array(
            'username' => 'testuser',
            'password' => 'ffff'
        ));
        $this->testAction('/users/login', array('data' => $data, 'method' => 'post'));

        $this->assertTextEndsWith('/users/home', $this->headers['Location']);
    }

    public function testLogin_fail() {
        $data = array('User' => array(
            'username' => 'testuser',
            'password' => ''
        ));
        $this->testAction('/users/login', array('data' => $data, 'method' => 'post'));

        $title = $this->vars['title_for_layout'];
        $this->assertEqual($title, 'ログイン');

        $flash = CakeSession::read('Message.flash');
        $this->assertTextContains('ログインに失敗しました。', $flash['message']);
    }
}
?>