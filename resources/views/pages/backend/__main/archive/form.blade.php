<div class="kt-form-item">
    <div class="flex flex-col lg:flex-row items-start gap-3">
        <span class="kt-form-label w-52 pt-2"> Title </span>
        <div class="kt-form-control flex-1 w-full">
            {{ Html::text('title', (isset($data->title) ? $data->title : ''))->class(['kt-input w-full'])->required() }}
        </div>
    </div>
</div>
<div class="kt-form-item">
    <div class="flex flex-col lg:flex-row items-start gap-3">
        <span class="kt-form-label w-52 pt-2"> Description </span>
        <div class="kt-form-control flex-1 w-full">
            {{ Html::textarea('description', (isset($data->description) ? $data->description : ''))->class(['kt-textarea'])->rows(4) }}
        </div>
    </div>
</div>
