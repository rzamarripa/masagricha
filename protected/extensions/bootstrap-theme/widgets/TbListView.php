<?php
/**
 * TbListView class file.
 * @author Christoffer Niska <ChristofferNiska@gmail.com>
 * @copyright Copyright &copy; Christoffer Niska 2011-
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @package bootstrap.widgets
 */

Yii::import('zii.widgets.CListView');

/**
 * Bootstrap Zii list view.
 */
class TbListView extends CListView
{

	public $headersview;
	public $footersview;
	public $headerContentView;
	public $footerContentView;

	/**
	 * @var string the CSS class name for the pager container. Defaults to 'pagination'.
	 */
	public $pagerCssClass = 'pagination';
	/**
	 * @var array the configuration for the pager.
	 * Defaults to <code>array('class'=>'ext.bootstrap.widgets.TbPager')</code>.
	 */
	public $pager = array('class'=>'bootstrap.widgets.TbPager');
	/**
	 * @var string the URL of the CSS file used by this detail view.
	 * Defaults to false, meaning that no CSS will be included.
	 */
	public $cssFile = false;
	
	public function renderHeaderContent()
	{
		if($this->headerContentView === null)
			throw new CException(Yii::t('zii','The property "headerContentView" cannot be empty.'));
		
		$owner=$this->getOwner();
		$owner->$render($this->headerContentView);
	}
	
	public function renderFooterContent()
	{
		if($this->footerContentView === null)
			throw new CException(Yii::t('zii','The property "footerContentView" cannot be empty.'));
		
		$owner=$this->getOwner();
		$owner->$render($this->footerContentView);
	}
	
	public function renderItems()
	{
		echo CHtml::openTag($this->itemsTagName,array('class'=>$this->itemsCssClass))."\n";
		$data=$this->dataProvider->getData();
		if(($n=count($data))>0)
		{
			$owner=$this->getOwner();
			$render=$owner instanceof CController ? 'renderPartial' : 'render';
			$j=0;
			$bandera = true;
			foreach($data as $i=>$item)
			{				
				$data=$this->viewData;
				$data['index']=$i;
				$data['data']=$item;
				$data['widget']=$this;
				if ($bandera == true){
					$owner->$render($this->headersview,$data);
					$bandera = false;
				}
				$owner->$render($this->itemView,$data);
				if($j++ < $n-1)
					echo $this->separator;
			}
			$owner->$render($this->footersview,$data);
		}
		else
			$this->renderEmptyText();
		echo CHtml::closeTag($this->itemsTagName);
	}
}
