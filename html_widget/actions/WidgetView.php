<?php
namespace Modules\ShrankHtmlWidget\Actions;
use CControllerDashboardWidgetView,
    CControllerResponseData; 
class WidgetView extends CControllerDashboardWidgetView {
    protected function doAction(): void {
        $this->setResponse(new CControllerResponseData([
            'name' => $this->getInput('name', $this->widget->getName()),
            'content' => $this->fields_values['content'],
            'user' => [
                'debug_mode' => $this->getDebugMode()
                ]
        ]));
    }
}
?>