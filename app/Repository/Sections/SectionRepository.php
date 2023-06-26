<?php


namespace App\Repository\Sections;

use App\Interfaces\Sections\SectionRepositoryInterface;
use App\Models\Section;
use Illuminate\Database\Eloquent\Model;

class SectionRepository implements SectionRepositoryInterface
{
    /**
     * @var Model
     */
    protected $model;

    /**
     * BaseRepository constructor.
     *
     * @param Model $model
     */
    public function __construct(Section $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $sections = $this->model->all();
        return view('Dashboard.Sections.index',compact('sections'));
    }

    public function store($request)
    {
        $this->model->create([
            'name' => $request->input('name'),
        ]);

        session()->flash('add');
        return redirect()->route('Sections.index');
    }

    public function update($request)
    {
        $section = $this->model->findOrFail($request->id);
        $section->update([
            'name' => $request->input('name'),
        ]);
        session()->flash('edit');
        return redirect()->route('Sections.index');
    }


    public function destroy($request)
    {
        $this->model->findOrFail($request->id)->delete();
        session()->flash('delete');
        return redirect()->route('Sections.index');
    }
}
