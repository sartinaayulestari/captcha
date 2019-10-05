@csrf

<div class="Form-group row">
    <label for="nama" class="col-md-4 col-Form-label text-md-right">{{ __('nama') }}</label>

    <div class="col-md-6">
            <input id="nama" type="text" class="Form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" required autofocus>

            @error('nama')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
    </div>
</div>


<input id="users_id" type="hidden" class="Form-control @error('users_id') is-invalid @enderror" name="users_id" value="{{ Auth::id() }}" required autofocus>

<div class="Form-group row mb-0">
    <div class="col-md-0 offset-md-4">
         <button type="submit" class="btn btn-primary">
            {{ __('Simpan Data') }}
         </button>
         <a href="{!! route('kategori_galeri.index') !!}" class="btn btn-danger">
            {{ __('Batal') }}
         </a>
    </div>
</div>