<?php
//为分页效果封装一个类
class Page{
	public $total;
	public $show;
	public $pageNum;
	public $curpage;
	public $limitpage;
	public $spot = '#spot';    //跳转锚点名称
	public function __construct($total,$show){
		$this->total = $total; //记录条数
		$this->show = $show; //显示数目,可更改
		$this->pageNum = ceil($this->total/$this->show); //总页数
		$this->curpage = empty($_GET['p'])?1:$_GET['p']; //当前页
		$this->limitpage = ($this->curpage-1)*$this->show; //开始位置
		if($this->curpage>$this->pageNum){
			$this->curpage = $this->pageNum;
		}
		if($this->curpage<0){
			$this->curpage = 1;
		}
	}

    /**
     * @param $url  当前页面的url值
     * @return string
     */
	public function showPage($url){
	  $pageData = "当前".$this->curpage."/".$this->pageNum."页&nbsp;&nbsp;";
      $pageData .= "共有".$this->total."条记录";
      $pageData .= "<a href='?p=1".$url.$this->spot."'>首页</a>";
      if($this->curpage>1){
        $pageData .= "<a href='?p=".($this->curpage-1).$url.$this->spot."'>上一页</a>";
      }
      if($this->curpage<$this->pageNum){
        $pageData .= "<a href='?p=".($this->curpage+1).$url.$this->spot."'>下一页</a>";
      }
      $pageData .= "<a href='?p=".$this->pageNum.$url.$this->spot."'>尾页</a>";
      $pageData .= "<span style='display:inline-block;border:0;'><input type='text' style='width:35px;height:25px;text-align:center;' id='page' value='$this->curpage'>
      <button type='button' onclick='go()'>跳转</button></span>";
      return $pageData;
	}
}