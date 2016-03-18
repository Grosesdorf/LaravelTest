<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function createComment($idUser, $idNews, $comment){
    	if($idUser && $idNews && $comment){
	        $this->id_user = $idUser;
	        $this->id_news = $idNews;
	        $this->comment = $comment;

	        return redirect()->back()->with('message','saved');
    	}	

    	return redirect()->back()->with('errMessage','error');
    }
}
