<?php
namespace Chandachewe\Comments\Http\Controllers;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Auth;
use Illuminate\Support\Facades\Crypt;
use Chandachewe\Comments\Models\get;
use Chandachewe\Comments\Models\userscomment;
use Chandachewe\Comments\Models\replies;
 

class Getfrom extends Controller
{

     /**
     * Add a comment to the database
     *
     * 
     * 
     * 
     */   


public function commented(Request $request){
       
 
 $enter=new userscomment;
 $enter->fullnames=$request->input("fullnames");
 $enter->comments=$request->input("comments");
 $enter->save();
 return \json_encode("Comment Added Successfully"); 
          
    }




    
     /**
     * Retrieve all comments From the database
     *
     *
     * 
     * 
     */
        
public function retrieveComments(){
$comments=userscomment::all()->sortByDesc('created_at');
return view("secondindex")->with("comments",$comments);

            }




            
     /**
     * Make a reply to a specific comment
     * Redirect to a blade for making
     * Replies
     *
     * 
     * 
     */
public function reply(Request $request,$id){
$comment_id=$id;
return view("reply")->with("comment_id",$comment_id);
}

   



     /**
     * Add Retrieve to the database
     * In the replies table
     *
     * 
     * 
     */
    public function replies(Request $request){
    $enter=new replies;
    $enter->comments_id=$request->input("comment_id");
    $enter->fullnames=$request->input("fullnames");
    $enter->replies=$request->input("replies");
    $enter->save();
    return \json_encode("Reply Added Successfully");
       
                      
           }
       
       


           
     /**
     * Retrieve replies of a comment
     * from the replies table
     * 
     *
     *
     * 
     * 
     */
     public function retrieveReplies(Request $request){ 
     $replies=replies::where("comments_id",$request->comment_id)->get();
     return view("replies")->with("replies",$replies);                          
              
           
            
           }




                 
     /**
     * Retrieve number of replies
     * from a certain comment
     * in the replies table
     *
     *
     * 
     * 
     */
    public function number_of_replies(Request $request){
        $number_of_replies=replies::where("comments_id", $request->comments_id)->count();
        return \json_encode($number_of_replies);
        
    }





}
            


   
