@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a href="{{ route('persetujuans.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                @lang('crud.persetujuans.show_title')
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.persetujuans.inputs.user_id')</h5>
                    <span>{{ optional($persetujuan->user)->name ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.persetujuans.inputs.setuju')</h5>
                    <span>{{ $persetujuan->setuju ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.persetujuans.inputs.tidak')</h5>
                    <span>{{ $persetujuan->tidak ?? '-' }}</span>
                </div>
            </div>

            <div class="mt-4">
                <a
                    href="{{ route('persetujuans.index') }}"
                    class="btn btn-light"
                >
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\Persetujuan::class)
                <a
                    href="{{ route('persetujuans.create') }}"
                    class="btn btn-light"
                >
                    <i class="icon ion-md-add"></i> @lang('crud.common.create')
                </a>
                @endcan
            </div>
        </div>
    </div>
</div>
@endsection
