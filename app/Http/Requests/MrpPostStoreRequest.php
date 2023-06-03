<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MrpPostStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'user_id' => ['required', 'exists:users,id'],
            'part_plan' => ['required', 'max:255', 'string'],
            'part_descr' => ['required', 'max:255', 'string'],
            'manuf' => ['nullable', 'max:255', 'string'],
            'manuf_part_no' => ['required', 'max:255', 'string'],
            'comm_group' => ['required', 'max:255', 'string'],
            'mrp_pr_no' => ['required', 'max:255', 'string'],
            'qty_mrp_plan_o' => ['required', 'max:255', 'string'],
            'qty_mrp_on_hand' => ['required', 'max:255', 'string'],
            'qty_available' => ['required', 'max:255', 'string'],
            'qty_safety_stock' => ['required', 'max:255', 'string'],
            'qty_wo_demmand' => ['required', 'max:255', 'string'],
            'qty_multiple_lot_size' => ['required', 'max:255', 'string'],
            'wo_no' => ['required', 'max:255', 'string'],
            'qty_pr_supply' => ['required', 'max:255', 'string'],
            'pr_supply_no' => ['required', 'max:255', 'string'],
            'qty_po_supply' => ['required', 'max:255', 'string'],
            'po_supply_no' => ['required', 'max:255', 'string'],
            'qty_arrived_po' => ['required', 'max:255', 'string'],
            'arrived_po_supply_no' => ['required', 'max:255', 'string'],
            'uom' => ['required', 'max:255', 'string'],
            'buyer_group' => ['required', 'max:255', 'string'],
            'remarks' => ['required', 'max:255', 'string'],
            'budget' => ['required', 'max:255', 'string'],
            'persetujuan_id' => ['required', 'exists:persetujuans,id'],
        ];
    }
}
