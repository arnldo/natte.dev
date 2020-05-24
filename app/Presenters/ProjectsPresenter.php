<?php declare(strict_types=1);
namespace App\Presenters;

use Nette\Application\UI\Presenter;
use Nette\Database\Context;

class ProjectsPresenter extends Presenter
{

    private Context $database;

    public function __construct(Context $db)
    {
        parent::__construct();
        $this->database = $db;
    }

    public function actionDefault(): void
    {
        $this->template->projects = $this->database->table("projects");
    }

    public function actionView($id): void
    {
        $project = $this->database->table("projects")->get($id);
        
        if (!$project) {
            $this->redirect("Projects:default");
        }
        
        $this->template->project = $project;
    }
}