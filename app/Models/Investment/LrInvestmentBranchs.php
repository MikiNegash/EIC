<?php

namespace App\Models\Investment;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int     $id
 * @property int     $investment_id
 * @property int     $activity_id
 * @property int     $estimated_employee
 * @property int     $created_by
 * @property int     $expert_id
 * @property int     $summary_id
 * @property int     $team_leader_id
 * @property int     $director_id
 * @property int     $commissioner_id
 * @property int     $mou_id
 * @property int     $slip_approved_by
 * @property int     $payment_id
 * @property int     $final_approved_by
 * @property string  $branch_type
 * @property string  $objectives
 * @property string  $other_source
 * @property string  $expert_comment
 * @property string  $team_leader_comment
 * @property string  $director_comment
 * @property string  $commissioner_comment
 * @property string  $bank_slip
 * @property string  $slip_id
 * @property string  $is_slip_approved
 * @property boolean $is_ip
 * @property boolean $is_sent
 * @property boolean $is_approved
 * @property boolean $is_registered
 * @property Date    $start_date
 * @property Date    $end_date
 * @property Date    $mou_approved_date
 */
class LrInvestmentBranchs extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'lr_investment_branchs';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'investment_id', 'branch_type', 'is_ip', 'activity_id', 'estimated_employee', 'objectives', 'created_by', 'planned_capital', 'equity_capital_percent', 'loan_capital_percent', 'other_source', 'other_capital_percent', 'start_date', 'end_date', 'registered_capital', 'is_sent', 'expert_id', 'expert_comment', 'summary_id', 'team_leader_id', 'team_leader_comment', 'director_id', 'director_comment', 'commissioner_id', 'commissioner_comment', 'mou_id', 'is_approved', 'mou_approved_date', 'bank_slip', 'slip_id', 'is_slip_approved', 'slip_approved_by', 'payment_id', 'final_approved_by', 'is_registered'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'int', 'investment_id' => 'int', 'branch_type' => 'string', 'is_ip' => 'boolean', 'activity_id' => 'int', 'estimated_employee' => 'int', 'objectives' => 'string', 'created_by' => 'int', 'other_source' => 'string', 'start_date' => 'date', 'end_date' => 'date', 'is_sent' => 'boolean', 'expert_id' => 'int', 'expert_comment' => 'string', 'summary_id' => 'int', 'team_leader_id' => 'int', 'team_leader_comment' => 'string', 'director_id' => 'int', 'director_comment' => 'string', 'commissioner_id' => 'int', 'commissioner_comment' => 'string', 'mou_id' => 'int', 'is_approved' => 'boolean', 'mou_approved_date' => 'date', 'bank_slip' => 'string', 'slip_id' => 'string', 'is_slip_approved' => 'string', 'slip_approved_by' => 'int', 'payment_id' => 'int', 'final_approved_by' => 'int', 'is_registered' => 'boolean'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'start_date', 'end_date', 'mou_approved_date'
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var boolean
     */
    public $timestamps = true;

    // Scopes...

    // Functions ...

    // Relations ...
}
