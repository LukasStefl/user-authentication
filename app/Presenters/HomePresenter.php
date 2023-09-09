<?php

declare(strict_types=1);

namespace App\Presenters;

use Nette;


final class HomePresenter extends Nette\Application\UI\Presenter
{
    public function __construct()
    {   
        bdump("__construct: " . microtime());
        parent::__construct();

    }

    protected function startup()
    {
        parent::startup();
        bdump("startup: " . microtime());

    }

    public function actionDefault()
    {
        bdump("actionAdd: " . microtime());

    }

    public function handleSaveSignal()
    {
        bdump("handleSaveSignal: " . microtime());

    }

    public function beforeRender()
    {
        bdump("beforeRender: " . microtime());
        parent::beforeRender();
        
    }
    public function renderDefault()
    {
        bdump("renderDefault: " . microtime());
        
    }
    public function afterRender()
    {
        bdump("afterRender: " . microtime());
        parent::afterRender();

    }

    public function renderView()
    {
        bdump("renderView: " . microtime());
    }
    protected function shutdown($response)
    {
        bdump("shutdown: " . microtime());
        // Your shutdown logic here
        parent::shutdown($response);
    }
}
