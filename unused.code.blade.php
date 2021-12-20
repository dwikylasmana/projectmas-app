NEWS MODEL 

/*
alt

 if(isset($filters['search']) ? $filters['search'] : false){
        return $query->where('title','like','%' . $filters['search'] . '%')
        ->orWhere('content','like','%' . $filters['search'] . '%')
        ->orWhere('intro','like','%' . $filters['search'] . '%');
    

public function scopeFilter($query, array $filters){

    $query->when($filters['search'] ?? false, function($query,$search){
        return $query->where('title','like','%' . $search . '%')
        ->orWhere('content','like','%' . $search . '%')
        ->orWhere('intro','like','%' . $search . '%');
    });

    $query->when($filters['category'] ?? false, function ($query, $category){
        $query->whereHas('category',function($query) use ($category){
            $query->where('slug',$category);
        });
    });
}
*/