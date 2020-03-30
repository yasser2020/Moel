<?php
namespace App\Http\Controllers\dashboard;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;
use App\Project;
class ProjectController extends Controller
{
    public function __construct()
    {
     $this->middleware('permission:read_projects')->only('index');   
     $this->middleware('permission:create_projects')->only(['create','store']); 
     $this->middleware('permission:update_projects')->only(['edit','update']); 
     $this->middleware('permission:delete_projects')->only(['destory']); 
    }
    
    public function index()
    {
        $projects=Project::latest()->paginate(5);
        return view('dashboard.projects.index',compact('projects'));
    }//end of index

    
    public function create()
    {
        return view('dashboard.projects.create_project');
    }//end of create

    
    public function store(Request $request,Project $project)
    {
        // Validation
        $request->validate([
            'name'=>'required|unique:projects,name',

        ]);


        $request_data=$request->except('images[]'); 
    
        if($request->has('images'))
        {
            $images = [];
            
            foreach ($request->file('images') as $key => $image)
            {
                
                $poster=Image::make($image)
                ->resize(255,378)
                ->encode('jpg');
               
                $flage =Storage::disk('local')->put('public/images/'.$image->hashName(),(string)$poster,'public');
                if ($flage){
                    // array_push($images, $image);
                    $tempName=$image->hashName();
                    array_push($images, $tempName);   
                } 
            }
            $request_data['path']=$images;
            
        }
              
        $project=Project::create($request_data);
        session()->flash('success','تم إضافة البيانات بنجاح');
        return redirect()->route('dashboard.projects.index');
      

    }//end of store

    public function show($id)
    {
        //
    }//end of show

    public function edit(Project $project)
    {
        return view('dashboard.projects.edit_project',compact('project'));
        
    }//end of edit

    public function update(Request $request,Project $project)
    {
        // Validation
        $request->validate([
            'name'=>'required|unique:projects,name,'.$project->id,
        ]);
        $request_data=$request->except('images[]'); 

        if($request->has('images'))
        {
            $this->remove_previews($project);
            $images = [];
            foreach ($request->file('images') as $key => $image)
            {
                $poster=Image::make($image)
                ->resize(255,378)
                ->encode('jpg');
               
                $flage =Storage::disk('local')->put('public/images/'.$image->hashName(),(string)$poster,'public');
                if ($flage){
                    $tempName=$image->hashName();
                    array_push($images, $tempName);   
                } 
            }
            $request_data['path']=$images;
            
        }
              
        $project->update($request_data);
        session()->flash('success','تم تعديل البيانات بنجاح');
        return redirect()->route('dashboard.projects.index');

    }//end of update

    private function remove_previews($project)
    {
            if($project->path !=null){
              foreach ($project->path as $item) {
                $done=Storage::disk('local')->delete('public/images/'.$item);                
              }
            }
    }

    public function destroy(Project $project)
    {
        foreach ($project->path as $item)
            $done=Storage::disk('local')->delete('public/images/'.$item);                
          
        $project->delete();
        session()->flash('success','تم حذف المشروع بنجاح');
        return redirect()->route('dashboard.projects.index');
    }//end of destroy
}
