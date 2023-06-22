<?php
/**
 * HTML widget form view.  
 * 
 * @var CView $this
 * @var array $data
 */ 

 (new CWidgetFormView($data))
    ->addField(
        new CWidgetFieldTextArea($data['fields']['content'])
    )
    ->show();
?>