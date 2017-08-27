<?php
// 本类由系统自动生成，仅供测试用途
class SearchAction extends Action {
    public function search(){
    	$key='';
		if(isset($_GET["key"])){
			$key=$_GET["key"];
		}
		$this->assign("key",$key);



		

	    $this->show('./App/Tpl/Search/search.html');
    }
    
}

?>

