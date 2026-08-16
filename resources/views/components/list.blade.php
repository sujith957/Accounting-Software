<div class="container-fluid p-4">
    <div class="card filter-card shadow-sm mb-4">
        <div class="card-body page-filter-body" style="padding-bottom: 50px;">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h4 class="page-title mb-0">
                        {{ $title }}
                    </h4>
                </div>

                @if (isset($addUrl))
                    <a href="{{ $addUrl }}" class="btn btn-primary">
                        <i class="fa fa-plus me-1"></i>
                        {{ $addText ?? 'Add ' . $title }}
                    </a>
                @endif

            </div>

            @if (isset($filters))
                {{ $filters }}
            @endif

        </div>
    </div>

    <div class="card table-card shadow-sm">
        <div class="card-body">
            <div class="table-responsive">

                {{ $table }}

            </div>
        </div>
    </div>
</div>
