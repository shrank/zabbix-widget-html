<?php 
namespace Modules\ShrankHtmlWidget\Includes; 
use Zabbix\Widgets\CWidgetForm; 
use Zabbix\Widgets\Fields\CWidgetFieldTextArea; 
class WidgetForm extends CWidgetForm {
    public function addFields(): self {
        return $this
            ->addField(
                new CWidgetFieldTextArea('content', _('HTML Content'))
            );
    }
}