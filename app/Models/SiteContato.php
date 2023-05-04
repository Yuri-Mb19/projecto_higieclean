<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mail;
use App\Mail\ContactMail;   

class SiteContato extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'telefone','email','mensagem'];

     public static function boot() {
  
        parent::boot();
  
        static::created(function ($item) {
                
            $adminEmail = "yurimbalane19@gmail.com";
            Mail::to($adminEmail)->send(new ContactMail($item));
        });
    }

}    
