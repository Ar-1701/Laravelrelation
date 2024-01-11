<?php

namespace App\Http\Controllers;

use App\Models\Deployment;
use App\Models\Language;
use App\Models\Project;
use Illuminate\Http\Request;

class HasMany extends Controller
{
    public function hasMany()
    {
        $data['p'] = Project::get();
        $data['language'] = Language::with('project')->get();
        // dd($data['language']);
        // foreach ($data['language'] as $val) {
        //     echo "<tr>d
        //     <td>$val->id</td>
        //     <td>$val->name</td>
        //     <td>$val->project_id</td>
        //     </tr>";
        //     foreach ($val->project as $v) {
        //         // echo "<tr>
        //         // <td>$v->id</td>
        //         // <td>$v->name</td>                
        //         // </tr>";
        //     }
        //     echo "<pre>";
        //     print_r($val->project->name);
        //     echo "</pre>";
        // }
        // die;
        // $data['deploy'] = Language::with([
        //     'project.deploy',

        // ])
        //     ->get();
        // $project = Project::with('deploy.languagess')->get();
        $data['deploy'] = Deployment::with(['language.project'])->get();
        // $project = Language::with(['deployment', 'deployment.lang'])->get();
        // dd($project);
        // echo "<pre>";
        // print_r($project);
        // echo "</pre>";
        // die;
        return view('hasMany', $data);
    }
    public function add_project()
    {
        $p = new Project();
        $p->name = "Ecommerce App";
        $p->save();
    }
    public function add_lang()
    {
        $p = Project::find(3);
        $l = new Language();
        $l->name = "HTML";
        $p->language()->save($l);
    }
    public function add_deploy()
    {
        $l = Language::find(8);
        $d = new Deployment();
        $d->status = "Pending";
        $l->deployment()->save($d);
    }
}
