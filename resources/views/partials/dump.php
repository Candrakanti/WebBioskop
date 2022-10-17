<div class="mb-3">
  <label for="id_studio" class="form-label">Id Studio</label>
  {{-- <input type="tect" class="form-control" name="id_jadwal" autofocus> --}}
  <select class="form-select form-select-lg mb-3" name="id_studio">

    @foreach ($data as $js)

    <option value="{{$js->id_studio}}" selected>{{$js->id_studio}}</option>
    @endforeach
  </select>

</div>

<div class="mb-3">
  <label for="id_film" class="form-label">Id Film</label>
  {{-- <input type="tect" class="form-control" name="id_jadwal" autofocus> --}}
  <select class="form-select form-select-lg mb-3" name="id_film">

    @foreach ($data as $js)

    <option value="{{$js->id_film}}" selected>{{$js->id_film}}</option>
    @endforeach
  </select>

</div>