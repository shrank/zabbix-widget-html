<?php 
/**  
 * HTML widget view. < *  
 * @var CView $this  
 * @var array $data  
 */ 
(new CWidgetView($data))
    ->addItem(
        new CJsScript($data['content'])
    )
    ->show();

?>