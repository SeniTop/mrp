@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a href="{{ route('mrp-posts.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                @lang('crud.mrp_posts.show_title')
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.mrp_posts.inputs.user_id')</h5>
                    <span>{{ optional($mrpPost->user)->name ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.mrp_posts.inputs.part_plan')</h5>
                    <span>{{ $mrpPost->part_plan ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.mrp_posts.inputs.part_descr')</h5>
                    <span>{{ $mrpPost->part_descr ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.mrp_posts.inputs.manuf')</h5>
                    <span>{{ $mrpPost->manuf ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.mrp_posts.inputs.manuf_part_no')</h5>
                    <span>{{ $mrpPost->manuf_part_no ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.mrp_posts.inputs.comm_group')</h5>
                    <span>{{ $mrpPost->comm_group ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.mrp_posts.inputs.mrp_pr_no')</h5>
                    <span>{{ $mrpPost->mrp_pr_no ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.mrp_posts.inputs.qty_mrp_plan_o')</h5>
                    <span>{{ $mrpPost->qty_mrp_plan_o ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.mrp_posts.inputs.qty_mrp_on_hand')</h5>
                    <span>{{ $mrpPost->qty_mrp_on_hand ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.mrp_posts.inputs.qty_available')</h5>
                    <span>{{ $mrpPost->qty_available ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.mrp_posts.inputs.qty_safety_stock')</h5>
                    <span>{{ $mrpPost->qty_safety_stock ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.mrp_posts.inputs.qty_wo_demmand')</h5>
                    <span>{{ $mrpPost->qty_wo_demmand ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>
                        @lang('crud.mrp_posts.inputs.qty_multiple_lot_size')
                    </h5>
                    <span>{{ $mrpPost->qty_multiple_lot_size ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.mrp_posts.inputs.wo_no')</h5>
                    <span>{{ $mrpPost->wo_no ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.mrp_posts.inputs.qty_pr_supply')</h5>
                    <span>{{ $mrpPost->qty_pr_supply ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.mrp_posts.inputs.pr_supply_no')</h5>
                    <span>{{ $mrpPost->pr_supply_no ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.mrp_posts.inputs.qty_po_supply')</h5>
                    <span>{{ $mrpPost->qty_po_supply ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.mrp_posts.inputs.po_supply_no')</h5>
                    <span>{{ $mrpPost->po_supply_no ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.mrp_posts.inputs.qty_arrived_po')</h5>
                    <span>{{ $mrpPost->qty_arrived_po ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.mrp_posts.inputs.arrived_po_supply_no')</h5>
                    <span>{{ $mrpPost->arrived_po_supply_no ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.mrp_posts.inputs.uom')</h5>
                    <span>{{ $mrpPost->uom ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.mrp_posts.inputs.buyer_group')</h5>
                    <span>{{ $mrpPost->buyer_group ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.mrp_posts.inputs.remarks')</h5>
                    <span>{{ $mrpPost->remarks ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.mrp_posts.inputs.budget')</h5>
                    <span>{{ $mrpPost->budget ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.mrp_posts.inputs.persetujuan_id')</h5>
                    <span
                        >{{ optional($mrpPost->persetujuan)->id ?? '-' }}</span
                    >
                </div>
            </div>

            <div class="mt-4">
                <a href="{{ route('mrp-posts.index') }}" class="btn btn-light">
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\MrpPost::class)
                <a href="{{ route('mrp-posts.create') }}" class="btn btn-light">
                    <i class="icon ion-md-add"></i> @lang('crud.common.create')
                </a>
                @endcan
            </div>
        </div>
    </div>
</div>
@endsection
