<?php
    echo $this->Form->create('kokosupo', array('action' => 'login'));
        echo $this->Form->input('name'    , array('type' => 'text', 'label' => 'ユーザ名'));
        echo $this->Form->input('password', array('type' => 'text','label' => 'パスワード'));
    echo $this->Form->end('ログイン');
?>
<?php echo $this->Html->link('新規登録', array('action' => 'sign_up')); ?>
<div class="twitter_login"><?php echo $this->Html->link(/*$this->Html->image('background/twitter_01.png')*/'twitterでログイン' , array('action' => 'twitter_login' ), array('escape' => false)); ?><br /></div>
<div class="facebook_login"><?php echo $this->Html->link(/*$this->Html->image('background/facebook_01.jpg')*/'facebookでログイン', array('controller' => 'Fbconnects', 'action' => 'facebook'), array('escape' => false)); ?><br /></div>
<br /><br />
岩手のイベントから自分のスポットを見つけてはどうですか？<br />
<?php
foreach($api['Items'] as $event){
    echo $this->Html->link($event['Title'], $event['Url'], array('target' => '_blank')) . '<br />';
}
?>
