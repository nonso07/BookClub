<?php

namespace App\Http\Controllers;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\BookUpload;
use App\Models\BookCat;

class appNavController extends Controller
{
    //
    public function Home(){

        return view('index');
    }

    public function about(){
        return view('aboutUs');
    }

    public function books(){
        $ebooks= BookUpload::with('media')->get();

        return view('books', [
           'ebooks'=> $ebooks
        ]);
        /*
        foreach ($ebooks as $books) {
            # code...
            foreach ($books->getMedia('books') as $bookID) {
                # code...
                dd($bookID->file_name);
            }
        }
        all();
        $mediaItems = $ebooks->getMedia('books');
       $publicUrl = $mediaItems[0]->getUrl();
       */
       // dd($ebooks);
    }

    public function show(Media $mediaItem){

        //return $mediaItems;
    // $ebooks= BookUpload::with('media')->find($id)->get();
       // $mediaItem=getFirstMedia('books');
        //dd($mediaItem);
        //return $mediaItems;
        return response()->download($mediaItem->getPath(), $mediaItem->file_name);
    }

    public function bookList(){

        $ebooks_list=BookCat::with('media')->where('enabled', 1)->get();

        return view('list_of_ebooks', [
           'ebooks_list' => $ebooks_list
        ]);
       // dd($ebooks_list);
    }

    public function bookView($id, $book_id){
        
        $bookDetails= BookCat::find($id);
        return view('bookView',[
            'bookDetails'=> $bookDetails,
            'book_id'=> $book_id
        ]);
    }

    public function comment(Request $request){

    }


}
