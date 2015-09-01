<?php

namespace todoparrot;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Todolist extends Model implements SluggableInterface
{
    
    use SluggableTrait;
    
    protected $sluggable = array(
        'build_from'    => 'name',
        'save_to'       => 'slug'
    );


    private $rules = [
        'name'          => 'required',
        'description'   => 'required'
    ];
    
    public function tasks()
    {
        return $this->hasMany('todoparrot\Task');
    }
   
    public function categories()
    {
        return $this->belongsToMany('todoparrot\Category')->withTimestamps();
    }
}
