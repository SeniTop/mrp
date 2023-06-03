@php $editing = isset($mrpPost) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12">
        <x-inputs.select name="user_id" label="User" required>
            @php $selected = old('user_id', ($editing ? $mrpPost->user_id : '')) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>Please select the User</option>
            @foreach($users as $value => $label)
            <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }} >{{ $label }}</option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="part_plan"
            label="Part Plan"
            :value="old('part_plan', ($editing ? $mrpPost->part_plan : ''))"
            maxlength="255"
            placeholder="Part Plan"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="part_descr"
            label="Part Descr"
            :value="old('part_descr', ($editing ? $mrpPost->part_descr : ''))"
            maxlength="255"
            placeholder="Part Descr"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="manuf"
            label="Manuf"
            :value="old('manuf', ($editing ? $mrpPost->manuf : ''))"
            maxlength="255"
            placeholder="Manuf"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="manuf_part_no"
            label="Manuf Part No"
            :value="old('manuf_part_no', ($editing ? $mrpPost->manuf_part_no : ''))"
            maxlength="255"
            placeholder="Manuf Part No"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="comm_group"
            label="Comm Group"
            :value="old('comm_group', ($editing ? $mrpPost->comm_group : ''))"
            maxlength="255"
            placeholder="Comm Group"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="mrp_pr_no"
            label="Mrp Pr No"
            :value="old('mrp_pr_no', ($editing ? $mrpPost->mrp_pr_no : ''))"
            maxlength="255"
            placeholder="Mrp Pr No"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="qty_mrp_plan_o"
            label="Qty Mrp Plan O"
            :value="old('qty_mrp_plan_o', ($editing ? $mrpPost->qty_mrp_plan_o : ''))"
            maxlength="255"
            placeholder="Qty Mrp Plan O"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="qty_mrp_on_hand"
            label="Qty Mrp On Hand"
            :value="old('qty_mrp_on_hand', ($editing ? $mrpPost->qty_mrp_on_hand : ''))"
            maxlength="255"
            placeholder="Qty Mrp On Hand"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="qty_available"
            label="Qty Available"
            :value="old('qty_available', ($editing ? $mrpPost->qty_available : ''))"
            maxlength="255"
            placeholder="Qty Available"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="qty_safety_stock"
            label="Qty Safety Stock"
            :value="old('qty_safety_stock', ($editing ? $mrpPost->qty_safety_stock : ''))"
            maxlength="255"
            placeholder="Qty Safety Stock"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="qty_wo_demmand"
            label="Qty Wo Demmand"
            :value="old('qty_wo_demmand', ($editing ? $mrpPost->qty_wo_demmand : ''))"
            maxlength="255"
            placeholder="Qty Wo Demmand"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="qty_multiple_lot_size"
            label="Qty Multiple Lot Size"
            :value="old('qty_multiple_lot_size', ($editing ? $mrpPost->qty_multiple_lot_size : ''))"
            maxlength="255"
            placeholder="Qty Multiple Lot Size"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="wo_no"
            label="Wo No"
            :value="old('wo_no', ($editing ? $mrpPost->wo_no : ''))"
            maxlength="255"
            placeholder="Wo No"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="qty_pr_supply"
            label="Qty Pr Supply"
            :value="old('qty_pr_supply', ($editing ? $mrpPost->qty_pr_supply : ''))"
            maxlength="255"
            placeholder="Qty Pr Supply"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="pr_supply_no"
            label="Pr Supply No"
            :value="old('pr_supply_no', ($editing ? $mrpPost->pr_supply_no : ''))"
            maxlength="255"
            placeholder="Pr Supply No"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="qty_po_supply"
            label="Qty Po Supply"
            :value="old('qty_po_supply', ($editing ? $mrpPost->qty_po_supply : ''))"
            maxlength="255"
            placeholder="Qty Po Supply"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="po_supply_no"
            label="Po Supply No"
            :value="old('po_supply_no', ($editing ? $mrpPost->po_supply_no : ''))"
            maxlength="255"
            placeholder="Po Supply No"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="qty_arrived_po"
            label="Qty Arrived Po"
            :value="old('qty_arrived_po', ($editing ? $mrpPost->qty_arrived_po : ''))"
            maxlength="255"
            placeholder="Qty Arrived Po"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="arrived_po_supply_no"
            label="Arrived Po Supply No"
            :value="old('arrived_po_supply_no', ($editing ? $mrpPost->arrived_po_supply_no : ''))"
            maxlength="255"
            placeholder="Arrived Po Supply No"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="uom"
            label="Uom"
            :value="old('uom', ($editing ? $mrpPost->uom : ''))"
            maxlength="255"
            placeholder="Uom"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="buyer_group"
            label="Buyer Group"
            :value="old('buyer_group', ($editing ? $mrpPost->buyer_group : ''))"
            maxlength="255"
            placeholder="Buyer Group"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="remarks"
            label="Remarks"
            :value="old('remarks', ($editing ? $mrpPost->remarks : ''))"
            maxlength="255"
            placeholder="Remarks"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="budget"
            label="Budget"
            :value="old('budget', ($editing ? $mrpPost->budget : ''))"
            maxlength="255"
            placeholder="Budget"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.select name="persetujuan_id" label="Persetujuan" required>
            @php $selected = old('persetujuan_id', ($editing ? $mrpPost->persetujuan_id : '')) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>Please select the Persetujuan</option>
            @foreach($persetujuans as $value => $label)
            <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }} >{{ $label }}</option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>
</div>
