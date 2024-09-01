<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Models\UserTicket;
use App\Models\User;

class Ticket extends Model
{
    use CrudTrait;
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'photo',
        'price',
        'description',
        'color',
        'stripe_item_price',
    ];

    public static function showQrCode($ticket_id)
    {   
        //  get user code
        $ticket = UserTicket::where('id', $ticket_id)->first();
        $user = User::where('id', $ticket->user_id)->first();
        $user_code = $user->accountkey;

        //  concatenate user code and ticket code then print qr code
        $ticket_code = $user_code.$ticket->ticket_key;

        $from = [255, 0, 0];
        $to = [0, 0, 255];

        $qr = QrCode::size(200)
        ->eye('circle')
        ->gradient($from[0], $from[1], $from[2], $to[0], $to[1], $to[2], 'diagonal')
        ->margin(1)
        ->generate(
            $ticket_code, '../public/assets/svg/'.$ticket_code.'.svg'
        );

        return [compact('qr'), './assets/svg/'.$ticket_code.'.svg'];
    }
}
