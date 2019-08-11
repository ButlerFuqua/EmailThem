<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    public $title;
    public $from;
    public $subject;
    public $body;
    public $hasSent;
}
