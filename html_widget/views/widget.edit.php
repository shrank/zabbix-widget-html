<?php
/**
 * HTML widget form view.  
 * 
 * @var CView $this
 * @var array $data
 */ 

 (new CWidgetFormView($data))
    ->addField(
        new CWidgetFieldTextAreaView($data['fields']['content'])
    )
    ->show();
?>