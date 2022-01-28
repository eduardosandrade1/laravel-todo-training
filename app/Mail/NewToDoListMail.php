<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewToDoListMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $todoList;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($todoList)
    {
        $this->todoList = $todoList;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->to('teste@edu.com')->view('mails.newToDoList', ['dataTodo' => $this->todoList]);
    }
}
