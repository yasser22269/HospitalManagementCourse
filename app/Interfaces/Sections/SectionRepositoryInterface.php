<?php
namespace App\Interfaces\Sections;

use App\Models\Section;

interface SectionRepositoryInterface
{

    // get All Sections
    public function index();

    // store Sections
    public function store($request);

    // Update Sections
    public function update($request);

    // destroy Sections
    public function destroy($request);
}
