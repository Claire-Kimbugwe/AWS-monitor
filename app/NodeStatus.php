<?php

namespace station;

use Illuminate\Database\Eloquent\Model;

class NodeStatus extends Model
{
    /**
     * The table associated with the model
     * 
     * @var string
     */
    protected $table = 'nodestatus';

    /**
     * Indicates if the model should be timestamped
     * 
     * @var bool
     */
    public $timestamps = false;

    const CREATED_AT = 'CreationDate';
    protected $fillable=["node_id","v_in","rssi","drop","vmcu","lqi","date_time"];

    
}
