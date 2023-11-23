<div class="form-check form-switch form-check-custom form-check-solid float-end">
    <input class="form-check-input h-20px w-30px service-statusbar" data-id="{{$row->id}}" type="checkbox"
           id="flexSwitch20x30" value=""
            {{$row->status == 1 ?'checked':''}} />
</div>
