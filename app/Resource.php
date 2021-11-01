<?php

namespace App;

use App\ResourceCategory;
use App\ResourceType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Resource extends Model
{
    //Add extra attribute
    // protected $attributes = ['all_meta_tags'];

    //Make it available in the json response
    protected $appends = ['all_meta_tags', 'publicURL'];
    protected $guarded = [];
    protected $casts = [
        'meta_tags' => 'array',
    ];

    public function getPublicURLAttribute()
    {
        return route('resources.resource',['id'=>$this->id,'slug'=>$this->slug]);
    }

    public function resourceCategory()
    {
        return $this->hasOne('App\ResourceCategory', 'id', 'category');
    }

    public function resourceType()
    {
        return $this->hasOne('App\ResourceType', 'id', 'resource_type');
    }

    public function companyProduct()
    {
        return $this->belongsTo('App\CompanyProduct', 'company_id');
    }

    public function company()
    {
        return $this->hasOne('App\Company','id', 'company_id');
    }

    public function metaTags()
    {
        return $this->belongsTo('App\MetaTags','id','meta_tags');
    }

    public function getAllMetaTagsAttribute()
    {
        if($this->meta_tags != null){
            return \App\MetaTags::whereIn('id',$this->meta_tags)->get();
        }

        return null;
    }

    public function setMetaTagsAttribute($value)
    {
            $finalvalue = [];
            if($value != null){
                foreach($value as $tag){
                    if(!is_numeric($tag)){
                        if(!\App\MetaTags::where('slug',$tag)->first()){
                            //create new tag
                            $metatag = new \App\MetaTags;
                            $metatag->name = $tag;
                            $metatag->slug = Str::slug($tag, '-');
                            $metatag->model = Resource::class;
                            $metatag->save();
                            $finalvalue[] = $metatag->id;
                        }
                    }else{
                        $finalvalue[] = $tag;
                    }
                }
            }

			return $this->attributes['meta_tags'] = json_encode($finalvalue);
    }

    // public function getResourceTypeAttribute(){
    //     return ResourceType::find($this->category)->first();
    // }
}
