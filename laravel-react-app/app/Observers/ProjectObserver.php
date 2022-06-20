<?php

namespace App\Observers;

use App\Models\Project;

class ProjectObserver
{
    /**
     * Handle the post "created" event.
     *
     * @param Project $project
     * @return void
     */
    public function created(Project $project)
    {
        $project->$project = \Str::slug($project->name);
    }

    /**
     * Handle the post "deleted" event.
     *
     * @return void
     */
    public function deleted(Project $project)
    {
        $project->task_id = 'PR-'.$project->id;
        $project->save();
    }
    /**
     * Handle the post "restored" event.
     *
     * @return void
     */
    public function restored(Project $project)
    {
        //
    }
    /**
     * Handle the post "force deleted" event.
     *
     * @return void
     */
    public function forceDeleted(Project $project)
    {
        //
    }
}
