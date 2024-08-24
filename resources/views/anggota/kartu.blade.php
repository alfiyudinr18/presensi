@if(!empty($cek))
@foreach($data as $item)
<div class="row mb-12">
    <label class="col-sm-2 col-form-label" for="">RFID</label>
    <div class="col-sm-10">
        <input type="text" name="uid" value="{{ $item->uid }}" class="form-control" required readonly>
    </div>
</div>
@endforeach
	
@else
<div class="row mb-12">
    <label class="col-sm-2 col-form-label" for="">RFID</label>
    <div class="col-sm-10">
        <input type="text" name="uid" class="form-control" required readonly placeholder="Tempelkan kartu ke RFID"> 
    </div>
</div>
@endif