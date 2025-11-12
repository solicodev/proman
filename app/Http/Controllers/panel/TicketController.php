<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Models\Ticket;
use App\Models\TicketAttachment;
use App\Models\TicketDepartment;
use App\Models\TicketMessage;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tickets = Ticket::where('user_id',Auth::id())->paginate(15);
        $users = User::all();
        $departments = TicketDepartment::all();
        return view('proMan.tickets.index',get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

            $ticket = Ticket::create([
                'user_id' => Auth::id(),
                'department_id' => $request->department_id,
                'subject' => $request->subject,
            ]);

            $message = TicketMessage::create([
                'ticket_id' => $ticket->id,
                'user_id' => Auth::id(),
                'message' => $request->message,
            ]);
            $ta = [];
            if (isset($request->uploaded_files)){
                foreach ($request->uploaded_files as $attach){
                    $ta = TicketAttachment::create([
                        'ticket_message_id' => $message->id,
                        'path' => $attach
                    ]);
                }
            }
        try {
            return redirect()->back()->with('flash_message', 'با موفقیت ثبت شد');
        }catch (\Exception $e){
            return redirect()->back()->withInput()->with('err_message', 'خطایی رخ داده است، لطفا مجددا تلاش نمایید');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Ticket $ticket)
    {
        //
    }


    public function reply(Request $request, Ticket $ticket)
    {
        try {
            $message = TicketMessage::create([
                'ticket_id' => $ticket->id,
                'user_id' => Auth::id(),
                'message' => $request->message,
            ]);

            if (isset($request->attach)){
                foreach ($request->attach as $attach){
                    $ta = TicketAttachment::create([
                        'ticket_message_id' => $message->id,
                        'path' => file_store($attach, 'uploads/tickets/attachments/'.$ticket->id .'/', 'file_')
                    ]);
                }
            }

            $ticket->status = 1;
            $ticket->save();

            return redirect()->back()->with('flash_message', 'با موفقیت ثبت شد');
        }catch (\Exception $e){
            return redirect()->back()->with('err_message', 'خطایی رخ داده است، لطفا مجددا تلاش نمایید');
        }
    }
}
