<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function Hello(){
	    $this->show('./App/Tpl/Index/index.html');
    }
    
    public function Login(){
    	$this->show("./App/Tpl/Login/login.html");
    }
}

?>

