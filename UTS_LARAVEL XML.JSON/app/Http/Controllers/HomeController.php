<?php
namespace App\Http\Controllers;
use App\Models\dosen;
use App\Models\matakuliah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use PHPUnit\Framework\Test;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard');
    }

    public function MyInformation()
    {
        return view('MyInformation');
    }

    public function list()
    {
        $dosen = dosen::paginate(5);
        //dd($dosen);
        return view('list', compact('dosen'));
    }

    public function matakuliah()
    {
        $matakuliah = matakuliah::paginate(5);
         //dd($matakuliah);
         return view('matakuliah', compact('matakuliah'));
    }

    
    public function create()
    {
         $matakuliah = matakuliah::all();
        // dd ($dosen);
        return view ('createdosen',compact('matakuliah'));
    }

    public function store(Request $request)
    {
        //dd ($request);
      
        $post = new dosen();
        $post ->matakuliah_id = $request ->matakuliah_id;
        $post->NIP = $request ->NIP;
        $post->Name = $request ->Name;
        $post ->sks =$request ->sks;
        $post->Address = $request ->Address;

        // dd ($post);

        $post->save();
        return redirect('/list');
    }

    public function detail(dosen $dosen)
    {
        $dsn = matakuliah::all();
         //dd($matakuliah);
         return view('editdosen', compact('dosen','dsn'));
    }

    public function update(dosen $dosen)
    {
        $dsn = request()->all();
        //dd($dsn);
        $dosen->update($dsn);
        return redirect('/list');
    }    

    public function delete(dosen $dosen)
    {
        $dosen->delete();
        return redirect('/list');
    }


    public function list_json() //database to json
    {
        $dosen = dosen::all();
        //dd($dosen);
        echo json_encode($dosen);
    }

    public function create_json() // json to db
    {
         $matakuliah = matakuliah::all();
        
        if ($matakuliah){
            echo json_encode ( array('message' =>'success'));
        }else {
            echo json_encode ( array('message' => 'error') ); 
        }
        return view ('create_json',compact('matakuliah'));
        //dd ($dosen);
    }


    public function jsondb()
   {
        foreach ($this->dosen['dosen'] as $item )

            dosen::updateOrCreate();
            [
                ['id' => $item['id']],

                ['matakuliah_id' => $item ['matakuliah_id']],

                ['sks' => $item ['sks']],

                ['Name' => $item ['Name']],

                ['Address' => $item ['Address']],

                ['matakuliah_id' => $item ['matakuliah_id']],
            ];
               
     }

   
    
}