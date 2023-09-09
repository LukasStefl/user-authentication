<?php

declare(strict_types=1);

namespace App\Presenters;

use Nette;


final class HomePresenter extends Nette\Application\UI\Presenter
{
    // Constructor with dependency injection
    public function __construct()
    {   
        bdump("__construct: " . microtime());
        parent::__construct();
        // Inject your dependencies here
    }
    // Startup method
    protected function startup()
    {
        parent::startup();
        bdump("startup: " . microtime());
        // Your startup logic here
    }
    // Action methods
    public function actionDefault()
    {
        bdump("actionAdd: " . microtime());
        // Add functionality here
    }
    // Handle Signal methods
    public function handleSaveSignal()
    {
        bdump("handleSaveSignal: " . microtime());
        // Handle save signal here
    }
    // Before render method
    public function beforeRender()
    {
        bdump("beforeRender: " . microtime());
        parent::beforeRender();
        // Prepare data before rendering here
    }
    public function renderDefault()
    {
        bdump("renderDefault: " . microtime());
        // Prepare data before rendering here
    }
    public function afterRender()
    {
        bdump("afterRender: " . microtime());
        parent::afterRender();
        // Prepare data before rendering here
    }
    // Render method
    public function renderView()
    {
        bdump("renderView: " . microtime());
        // Render the appropriate view here
    }
    // Shutdown method
    protected function shutdown($response)
    {
        bdump("shutdown: " . microtime());
        // Your shutdown logic here
        parent::shutdown($response);
    }
}
