<?php

namespace App\Http\Controllers;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\BookUpload;
use App\Models\BookCat;
use App\Models\Comment;
use Paystack;

class appNavController extends Controller
{
    // home page function 
    public function Home(){
     /*
  This command means that this function 
  should return this blade(i.e HTML and CSS pages) page called index
     */
        return view('index'); 
    }

    public function about(){
        return view('aboutUs');
    }

    public function books(){ // Book list function 
        $ebooks= BookUpload::with('media')->get(); // query the database using  eloquent
       // Eloquent replaces sql command in core php
        return view('books', [
           'ebooks'=> $ebooks // this passes the data assosciated to the modle table in form of arrary 
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
        
        if (auth()->user()) {
        $bookDetails= BookCat::find($id);
        $comments=  Comment::where([['enabled', 1],['book_id', $book_id]])->orderBy('id', 'desc')->paginate(15); //->get();
        //This will pass all the comments form the comment table.
        $openEdit=false;
       
        return view('bookView',[
            'bookDetails'=> $bookDetails,
            'book_id'=> $book_id,
            'id' =>$id,
            'comments' => $comments
        ]);

        }else{
            return redirect('/singin');
        }
    }

    public function comment(Request $request){ // This function is use to post comment
       // $validated = $request->validated();
      
       $validated = $request->validate([
            'user_name'=> 'required',
            'user_id'=> 'required',
            'user_comments'=> 'required',
            'book_id' => 'required' 
        ]);
        Comment::create($validated);
        $id_redirct=$request['id'];
           //dd($request['commets']);
          // $this->sucess="Review done sucessful. Thanks you.";
            return redirect('bookView/'.$id_redirct.'/'.$request['book_id']);//,[
             //   'sucess'=> "Review done sucessful. Thanks you.",
           // ]);
         
            }
    


    public function editCommte($id){
        if (Auth::id()== $request['user_id']) {
         $this->openEdit=true;
    }else{
        return redirect('/');
        }

    }

    public function deletCommte($id){
       // if (Auth::id()== $request['user_id']) {
         
            /*$comment_to_delet= Comment::find($id);
            $comment_to_delet->delete();*/
            Comment::destroy($id);
            return redirect('/booksList');
   /* }else{
        return redirect('/');
        }
        */

    }

    public function premium(){
         
        $amountToPay=500000;
        return view('premium',[
           'amountToPay'=> $amountToPay
        ]);
    }

    public function profile(){
          
        if(Auth::check()){
        return view('profile',[
            'user_profile'
        ]);
        }else {
            return redirect('/singin');
        }
    }

    public function profilEdit()
    {
        if(Auth::check()){
            return view('profilEdit');
        }else{
            return redirect('/singin');
        }
    }

    


}
