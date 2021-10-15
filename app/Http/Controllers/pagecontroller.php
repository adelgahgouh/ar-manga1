<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class pagecontroller extends Controller
{
    public function index(Request $request)
    {
        $mangas = DB::select('SELECT a.chapter,b.slash ,b.namear ,b.srcimg
        from manga b ,chapters a WHERE a.idanime=b.id ORDER by a.idchapter DESC LIMIT 12
        ');
                $ads = DB::select('select * from ads ');


        return view('pages.index', ['mangas' => $mangas,'ads'=>$ads]);
    }

    public function myapichapter(Request $request){
        $idanime = $request->idanime;



        $mangas = DB::select('select * from chapters where idanime='.$idanime);

        return json_encode($mangas);
    }
    public function myapimanga(Request $request)
    {
        $idanime = $request->idanime;



        $mangas = DB::select('select * from manga where id='.$idanime);

        return json_encode($mangas);
    }
 public function myapiimgchapter(Request $request)
    {
        $idchapter= $request->idchapter;



        $mangas = DB::select('select * from imgchapter where idchapter='.$idchapter);

        return json_encode($mangas);
    }

    public function myapilist(){
        $mangas = DB::select('select * from manga ');

        return json_encode($mangas);
    }

    public function list()
    {
        $mangas = DB::select('select * from manga ');
        $ads = DB::select('select * from ads ');


        return view('pages.list', ['mangas' => $mangas,'ads'=>$ads]);
    }
    public function manga(Request $request)
    {
        $manga = $request->manga;
        $ads = DB::select('select * from ads ');

        if ($manga != "") {

            $manga = DB::select('select * from manga where slash="' . $manga . '"');
            $idanime = $manga[0]->id;

            $chapters = DB::select('select * from chapters where idanime=' . $idanime .' order by chapter asc');

            return view('pages.manga', ['chapters' => $chapters, 'manga' => $manga,'ads'=>$ads]);
        } else {

            $mangas = DB::select('SELECT a.chapter,b.slash ,b.namear ,b.srcimg
        from manga b ,chapters a WHERE a.idanime=b.id ORDER by a.idchapter DESC LIMIT 12
        ');

            return view('pages.index', ['mangas' => $mangas,'ads'=>$ads]);
        }
    }
    public function chapter(Request $request)
    {
        $manga = $request->manga;
        $chapter = $request->chapter;
        $ads = DB::select('select * from ads ');

        if ($manga != "") {

            if ($chapter != "") {
                $searchnext = (float) ($chapter + 1);
                $searchprev = (float) ($chapter - 1);
                $manga = DB::select('select * from manga where slash="' . $manga . '"');
                $idanime = $manga[0]->id;
                $chapter = DB::select('select * from chapters where chapter=' . $chapter . ' and idanime=' . $idanime);
                if (empty($chapter)) {
                    return abort(404);
                } else {


                    $idchapter = $chapter[0]->idchapter;
                    $chapternext = "";
                    $chapterprev = "";
                    $chapter2 = DB::select('select * from chapters where chapter=' . $searchprev . ' and idanime=' . $idanime);

                    $chapter1 = DB::select('select * from chapters where chapter=' . $searchnext . '  and idanime=' . $idanime);
                    if (empty($chapter1)) {
                        $chapternext = "empty";
                    } else {
                        $chapternext = $chapter1[0]->chapter;
                    }
                    if (empty($chapter2)) {
                        $chapterprev = "empty";
                    } else {
                        $chapterprev = $chapter2[0]->chapter;
                    }



                    $imgchapter = DB::select('select * from imgchapter where idchapter=' . $idchapter);
                    return view('pages.chapter', ['ads'=>$ads,'chapter2' => $chapter, 'manga' => $manga, 'imgs' => $imgchapter, 'next' => $chapternext, 'prev' => $chapterprev]);
                }
            }
        } else {

            return abort(404);
        }
    }



    public function insertformchapter(){
        $mangas = DB::select('select * from manga ');

        return view('pages.insertformchapter', ['mangas' => $mangas]);
        }

        public function insertchapteroepration(Request $request){
        $idanime = $request->input('idanime');
        $chapter = $request->input('chapter');
        $imgs = $request->input('imgs');
        $imgsar = explode(',', $imgs);
        $maxid= DB::select('select max(idchapter) as idchapter from chapters ');
        $idchap=$maxid[0]->idchapter+1;
        $datachpter=array('idchapter'=>$idchap,'idanime'=>$idanime,"chapter"=>$chapter);
        DB::table('chapters')->insert($datachpter);

$i=1;
        foreach($imgsar as $imgs)
        {
            $data=array('idchapter'=>$idchap,"srcimg"=>$imgs,"nbrimg"=>$i);
            DB::table('imgchapter')->insert($data);
$i++;
        }

        echo "Record inserted successfully.<br/>";
        echo '<a href = "../addformchapter">Click Here</a> to go back.';

        return "idanime=".$idanime." chapter=".$chapter." imgs=".$imgs;

    }
    public function insertformmanga(){


        return view('pages.insertformmanga');
        }

        public function insertmangaoepration(Request $request){
        $namear = $request->input('namear');
        $nameeng = $request->input('nameeng');
        $srcimg = $request->input('imgsrc');
        $statue = $request->input('statue');
        $slash = $request->input('slash');

        $story = $request->input('story');
        $data=array('namear'=>$namear,'nameeng'=>$nameeng,"srcimg"=>$srcimg,
        "statue"=>$statue,"story"=>$story,"slash"=>$slash);
        DB::table('manga')->insert($data);

        echo "Record inserted successfully.<br/>";
        echo '<a href = "../addformchapter">Click Here</a> to go back.';

        return "succesfull";

    }


//edit ads
public function editadsform(){
    $ads = DB::select('select * from ads ');


    return view('pages.editads',['ads'=>$ads]);
    }

    public function editadsopration(Request $request){
    $id = $request->input('idads');
    $script = $request->input('script');


    DB::update('update ads set script = ? where idads = ?',[$script,$id]);

    echo "Record inserted successfully.<br/>";
    echo '<a href = "../editads">Click Here</a> to go back.';

    return "succesfull";

}


}
