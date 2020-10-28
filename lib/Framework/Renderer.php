<?php

namespace Framework;


class Renderer
{

    public function render(ViewModel $viewModel)
    {
        $layoutTemplate = new ViewModel();
        $layoutTemplate->setTemplate('../template/layout/body.phtml');
        $layoutTemplate->setTemplateVariables(['templateOutput' => $viewModel->renderTemplate(), 'layoutVariables' => $viewModel->getLayoutVariables()]);
        echo $layoutTemplate;
    }
}
