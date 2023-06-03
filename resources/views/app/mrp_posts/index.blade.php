@extends('layouts.app')

@section('content')
<div class="container">
    <div class="searchbar mt-0 mb-4">
        <div class="row">
            <div class="col-md-6">
                <form>
                    <div class="input-group">
                        <input
                            id="indexSearch"
                            type="text"
                            name="search"
                            placeholder="{{ __('crud.common.search') }}"
                            value="{{ $search ?? '' }}"
                            class="form-control"
                            autocomplete="off"
                        />
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-primary">
                                <i class="icon ion-md-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6 text-right">
                @can('create', App\Models\MrpPost::class)
                <a
                    href="{{ route('mrp-posts.create') }}"
                    class="btn btn-primary"
                >
                    <i class="icon ion-md-add"></i> @lang('crud.common.create')
                </a>
                @endcan
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div style="display: flex; justify-content: space-between;">
                <h4 class="card-title">@lang('crud.mrp_posts.index_title')</h4>
            </div>

            <div class="table-responsive">
                <table class="table table-borderless table-hover">
                    <thead>
                        <tr>
                            <th class="text-left">
                                @lang('crud.mrp_posts.inputs.user_id')
                            </th>
                            <th class="text-left">
                                @lang('crud.mrp_posts.inputs.part_plan')
                            </th>
                            <th class="text-left">
                                @lang('crud.mrp_posts.inputs.part_descr')
                            </th>
                            <th class="text-left">
                                @lang('crud.mrp_posts.inputs.manuf')
                            </th>
                            <th class="text-left">
                                @lang('crud.mrp_posts.inputs.manuf_part_no')
                            </th>
                            <th class="text-left">
                                @lang('crud.mrp_posts.inputs.comm_group')
                            </th>
                            <th class="text-left">
                                @lang('crud.mrp_posts.inputs.mrp_pr_no')
                            </th>
                            <th class="text-left">
                                @lang('crud.mrp_posts.inputs.qty_mrp_plan_o')
                            </th>
                            <th class="text-left">
                                @lang('crud.mrp_posts.inputs.qty_mrp_on_hand')
                            </th>
                            <th class="text-left">
                                @lang('crud.mrp_posts.inputs.qty_available')
                            </th>
                            <th class="text-left">
                                @lang('crud.mrp_posts.inputs.qty_safety_stock')
                            </th>
                            <th class="text-left">
                                @lang('crud.mrp_posts.inputs.qty_wo_demmand')
                            </th>
                            <th class="text-left">
                                @lang('crud.mrp_posts.inputs.qty_multiple_lot_size')
                            </th>
                            <th class="text-left">
                                @lang('crud.mrp_posts.inputs.wo_no')
                            </th>
                            <th class="text-left">
                                @lang('crud.mrp_posts.inputs.qty_pr_supply')
                            </th>
                            <th class="text-left">
                                @lang('crud.mrp_posts.inputs.pr_supply_no')
                            </th>
                            <th class="text-left">
                                @lang('crud.mrp_posts.inputs.qty_po_supply')
                            </th>
                            <th class="text-left">
                                @lang('crud.mrp_posts.inputs.po_supply_no')
                            </th>
                            <th class="text-left">
                                @lang('crud.mrp_posts.inputs.qty_arrived_po')
                            </th>
                            <th class="text-left">
                                @lang('crud.mrp_posts.inputs.arrived_po_supply_no')
                            </th>
                            <th class="text-left">
                                @lang('crud.mrp_posts.inputs.uom')
                            </th>
                            <th class="text-left">
                                @lang('crud.mrp_posts.inputs.buyer_group')
                            </th>
                            <th class="text-left">
                                @lang('crud.mrp_posts.inputs.remarks')
                            </th>
                            <th class="text-left">
                                @lang('crud.mrp_posts.inputs.budget')
                            </th>
                            <th class="text-left">
                                @lang('crud.mrp_posts.inputs.persetujuan_id')
                            </th>
                            <th class="text-center">
                                @lang('crud.common.actions')
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($mrpPosts as $mrpPost)
                        <tr>
                            <td>{{ optional($mrpPost->user)->name ?? '-' }}</td>
                            <td>{{ $mrpPost->part_plan ?? '-' }}</td>
                            <td>{{ $mrpPost->part_descr ?? '-' }}</td>
                            <td>{{ $mrpPost->manuf ?? '-' }}</td>
                            <td>{{ $mrpPost->manuf_part_no ?? '-' }}</td>
                            <td>{{ $mrpPost->comm_group ?? '-' }}</td>
                            <td>{{ $mrpPost->mrp_pr_no ?? '-' }}</td>
                            <td>{{ $mrpPost->qty_mrp_plan_o ?? '-' }}</td>
                            <td>{{ $mrpPost->qty_mrp_on_hand ?? '-' }}</td>
                            <td>{{ $mrpPost->qty_available ?? '-' }}</td>
                            <td>{{ $mrpPost->qty_safety_stock ?? '-' }}</td>
                            <td>{{ $mrpPost->qty_wo_demmand ?? '-' }}</td>
                            <td>
                                {{ $mrpPost->qty_multiple_lot_size ?? '-' }}
                            </td>
                            <td>{{ $mrpPost->wo_no ?? '-' }}</td>
                            <td>{{ $mrpPost->qty_pr_supply ?? '-' }}</td>
                            <td>{{ $mrpPost->pr_supply_no ?? '-' }}</td>
                            <td>{{ $mrpPost->qty_po_supply ?? '-' }}</td>
                            <td>{{ $mrpPost->po_supply_no ?? '-' }}</td>
                            <td>{{ $mrpPost->qty_arrived_po ?? '-' }}</td>
                            <td>{{ $mrpPost->arrived_po_supply_no ?? '-' }}</td>
                            <td>{{ $mrpPost->uom ?? '-' }}</td>
                            <td>{{ $mrpPost->buyer_group ?? '-' }}</td>
                            <td>{{ $mrpPost->remarks ?? '-' }}</td>
                            <td>{{ $mrpPost->budget ?? '-' }}</td>
                            <td>
                                {{ optional($mrpPost->persetujuan)->id ?? '-' }}
                            </td>
                            <td class="text-center" style="width: 134px;">
                                <div
                                    role="group"
                                    aria-label="Row Actions"
                                    class="btn-group"
                                >
                                    @can('update', $mrpPost)
                                    <a
                                        href="{{ route('mrp-posts.edit', $mrpPost) }}"
                                    >
                                        <button
                                            type="button"
                                            class="btn btn-light"
                                        >
                                            <i class="icon ion-md-create"></i>
                                        </button>
                                    </a>
                                    @endcan @can('view', $mrpPost)
                                    <a
                                        href="{{ route('mrp-posts.show', $mrpPost) }}"
                                    >
                                        <button
                                            type="button"
                                            class="btn btn-light"
                                        >
                                            <i class="icon ion-md-eye"></i>
                                        </button>
                                    </a>
                                    @endcan @can('delete', $mrpPost)
                                    <form
                                        action="{{ route('mrp-posts.destroy', $mrpPost) }}"
                                        method="POST"
                                        onsubmit="return confirm('{{ __('crud.common.are_you_sure') }}')"
                                    >
                                        @csrf @method('DELETE')
                                        <button
                                            type="submit"
                                            class="btn btn-light text-danger"
                                        >
                                            <i class="icon ion-md-trash"></i>
                                        </button>
                                    </form>
                                    @endcan
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="26">
                                @lang('crud.common.no_items_found')
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="26">{!! $mrpPosts->render() !!}</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
