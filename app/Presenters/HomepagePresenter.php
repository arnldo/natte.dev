<?php declare(strict_types=1);
namespace App\Presenters;

use Nette\Application\UI\Presenter;

class HomepagePresenter extends Presenter
{
    private array $links;

    public function __construct()
    {
        parent::__construct();
        $this->links = array(
            [
                "title" => "GitHub",
                "url" => "https://github.com/natte16231"
            ],
            [
                "title" => "Discord",
                "url" => "https://dyskord.cc/"
            ]
        );
    }

    public function actionDefault(): void
    {
        $this->template->links = $this->links;
    }
}
