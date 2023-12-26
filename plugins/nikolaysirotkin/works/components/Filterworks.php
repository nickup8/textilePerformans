<?php

namespace Nikolaysirotkin\Works\Components;

use Cms\Classes\ComponentBase;
use NikolaySirotkin\Works\Models\Category;
use NikolaySirotkin\Works\Models\Work;
use Winter\Storm\Support\Facades\Input;

class Filterworks extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Filter Works',
            'description' => 'Filter works',
        ];
    }

    public function onRun()
    {
        $this->works = $this->filterWorks();
        $this->categories = $this->categoryList();
        $this->category = $this->filterWorks();
    }

    protected function filterWorks()
    {

        $category = Input::get('category');
        $works = Work::all();

        if ($category) {
            $works = Work::whereHas('categories', function ($filter) use ($category) {
                $filter->where('slug', '=', $category);
            })->get();
        }

        return $works;
    }

    protected function categoryList()
    {
        $categories = Category::all();
        return $categories;
    }





    public $works;
    public $categories;
    public $category;
}
