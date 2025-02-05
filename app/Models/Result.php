<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Result extends Model
{
    use HasFactory;

    protected $fillable = [
        'text_data',
        'created_at',
        'updated_at',
    ];

    
    // Disabilita i timestamp automatici di Eloquent perché li gestisce manualmente quando invio il form.
    public $timestamps = false;

    // Metodo statico per trovare un record utilizzando il guest_token
    // static così sul controller non serve l'istanza di Result
    public static function findByGuestToken($guestToken)
    {        
        // Converte il timestamp Unix in una stringa di data e ora
        $createdAt = Carbon::createFromTimestamp($guestToken)->toDateTimeString();
        // Esegue la query per trovare il record con il campo created_at corrispondente
        return self::where('created_at', $createdAt)->first();
    }
}
