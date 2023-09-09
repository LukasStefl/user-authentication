<?php

declare(strict_types=1);

use Nette\Application\UI\Presenter;

class HomePresenter extends Presenter
{
    public function __construct()
    {
        // Inicializace presenteru
        parent::__construct();
    }

    protected function startup()
    {
        // Příprava - inicializace společných proměnných
        parent::startup();
    }

    public function renderDefault()
    {
        // Zpracování vstupního parametru - akce "default"
        $this->template->variable = 'Hodnota pro pohled';
    }

    protected function beforeRender()
    {
        // Příprava pohledu
        parent::beforeRender();
    }

    protected function createComponentForm()
    {
        // Manipulace s komponentami - vytvoření formuláře
        $form = new \Nette\Application\UI\Form();
        // ... inicializace formuláře
        return $form;
    }

    protected function afterRender()
    {
        // Zpracování výstupu
        parent::afterRender();
    }

    protected function shutdown()
    {
        // Závěrečné úkony presenteru
        parent::shutdown();
    }
}
