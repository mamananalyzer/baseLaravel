@extends('layout/base')

@section('title', 'Add Product')

@section('container')

    {{-- date_default_timezone_set('Asia/Jakarta');
    echo 'Indonesian Timezone: ' . date('d-m-Y H:i:s'); --}}

    <div class="container">
      <div class="row">
        <div class="col-8">
          <h1 class="mt-3">Form Add Product</h1>
            <form enctype="multipart/form-data" action="{{ url('/products') }}" method="POST" onsubmit="if(document.getElementById('agree').checked) { return true; }
            else {
                alert('Please indicate that you have read and agree to the Terms and Conditions and Privacy Policy');
                return false;
            }">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="brand">Brand *</label>
                <input type="text" class="form-control @error('brand') is-invalid @enderror" id="brand" placeholder="Rishabh, Accuenergy, Dold" name="brand" value="{{ old('brand')}}">
                @error('brand')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="category">Category *</label>
                <select class="custom-select custom-select-md form-control @error('category') is-invalid @enderror" name="category" id="category">
                    <option value="{{ old('category')}}">{{ old('category')}}</option>
                    <option value="transducer">Transducer</option>
                    <option value="powermeter">Power Meter</option>
                    <option value="digitalmeter">Digital Meter</option>
                    <option value="stroboscope">Stroboscope</option>
                </select>
                @error('category')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                {{-- <input type="text" class="form-control @error('category') is-invalid @enderror" id="category" placeholder="A2000, Analog Meter, Rish Eine+, Acuvim II" name="category" value="{{ old('category')}}">
                @error('category')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror --}}
            </div>
            <div class="form-group">
                <label for="type">Type *</label>
                <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" placeholder="A2000, Analog Meter, Rish Eine+, Acuvim II" name="type" value="{{ old('type')}}">
                @error('type')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="picture">Picture *</label>
                <input type="file" class="form-control @error('picture') is-invalid @enderror" id="picture" placeholder="picture" name="picture" value="{{ old('picture')}}">
                {{-- @error('picture')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror --}}
            </div>
            <div class="form-group">
                <label for="description">Description *</label>
                <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" placeholder="Description of Product" name="description" value="{{ old('description')}}">
                @error('description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="listdescription">List datasheetification of Product *</label>
                <input type="text" class="form-control @error('listdescription') is-invalid @enderror" id="listdescription" placeholder="Specification divider by ' , '" name="listdescription" value="{{ old('listdescription')}}">
                @error('listdescription')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="datasheet">Link datasheet *</label>
                <input type="text" class="form-control @error('datasheet') is-invalid @enderror" id="datasheet" placeholder="Link datasheet" name="datasheet" value="{{ old('datasheet')}}">
                @error('datasheet')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="usermanual">Link User's Manual *</label>
                <input type="text" class="form-control @error('usermanual') is-invalid @enderror" id="usermanual" placeholder="Link User's Manual" name="usermanual" value="{{ old('usermanual')}}">
                @error('usermanual')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <input type="checkbox" name="checkbox" value="check" id="agree" />
            <label for="agree">I have read and agree to the Terms and Conditions and Privacy Policy</label>
            <br>
            <br>
            <input class="btn btn-success" type="submit" name="submit" value="Kirim" />
            </form>
        </div>
      </div>
    </div>
@endsection
