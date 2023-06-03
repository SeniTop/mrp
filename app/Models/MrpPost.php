<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MrpPost extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'user_id',
        'part_plan',
        'part_descr',
        'manuf',
        'manuf_part_no',
        'comm_group',
        'mrp_pr_no',
        'qty_mrp_plan_o',
        'qty_mrp_on_hand',
        'qty_available',
        'qty_safety_stock',
        'qty_wo_demmand',
        'qty_multiple_lot_size',
        'wo_no',
        'qty_pr_supply',
        'pr_supply_no',
        'qty_po_supply',
        'po_supply_no',
        'qty_arrived_po',
        'arrived_po_supply_no',
        'uom',
        'buyer_group',
        'remarks',
        'budget',
        'persetujuan_id',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'mrp_posts';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function persetujuan()
    {
        return $this->belongsTo(Persetujuan::class);
    }
}
