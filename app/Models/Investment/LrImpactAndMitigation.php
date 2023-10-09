<?php

namespace App\Models\Investment;

use Illuminate\Database\Eloquent\Model;

class LrImpactAndMitigation extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'lr_impact_and_mitigation';

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
        'investment_branch_id', 'impact', 'mitigation', 'request_id', 'approved_by', 'created_at', 'updated_at', 'activity_id', 'impact', 'mitigation', 'created_at', 'updated_at', 'activity_id', 'impact', 'mitigation', 'created_at', 'updated_at'
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
        'id' => 'int', 'id' => 'int', 'id' => 'int', 'investment_branch_id' => 'int', 'impact' => 'string', 'mitigation' => 'string', 'request_id' => 'int', 'approved_by' => 'int', 'created_at' => 'timestamp', 'updated_at' => 'timestamp', 'activity_id' => 'int', 'impact' => 'string', 'mitigation' => 'string', 'created_at' => 'timestamp', 'updated_at' => 'timestamp', 'activity_id' => 'int', 'impact' => 'string', 'mitigation' => 'string', 'created_at' => 'timestamp', 'updated_at' => 'timestamp'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at', 'updated_at', 'created_at', 'updated_at', 'created_at', 'updated_at'
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
