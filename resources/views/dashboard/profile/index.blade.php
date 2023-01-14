@extends('dashboard.partials.main')

@section('container')
    {{-- Pesan sukses --}}
    @if (Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
    @endif

    
    <form class="mb-3 col-lg-12 mt-3" action="{{ route('profile.index') }}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="row justify-content-between">
      <div class="col-6">
        {{-- kajdhsajdh --}}
        <p class="card-title">Profile</p>
        @if (get_meta_value('image'))
            <img style="max-width:100px;max-height:100px" src="{{ asset('profil_images').'/'.get_meta_value('image') }}" alt="Foto Profile">
        @endif
        <div class="mb-3">
          <label for="image" class="form-label"><i class="mdi mdi-account-box menu-icon"></i> Your Image Profile</label>
          <input type="file" class="form-control form-control-sm @error('image') is-invalid @enderror skill"  name="image" id="image" value="{{ old('image') }}" autofocus>
          
          @error('image')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        
        </div>

        <div class="mb-3">
          <label for="city" class="form-label"><i class="mdi mdi-city menu-icon"></i> City</label>
          <input type="text" class="form-control form-control-sm @error('city') is-invalid @enderror skill" placeholder=" Your City"  name="city" id="city" value="{{ get_meta_value('city') }}" value="{{ old('city') }}" autofocus>
          
          @error('city')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        
        </div>

        <div class="mb-3">
          <label for="province" class="form-label"><i class="mdi mdi-map menu-icon"></i> Province</label>
          <input type="text" class="form-control form-control-sm @error('province') is-invalid @enderror skill" placeholder=" Your province" value="{{ get_meta_value('province') }}" name="province" id="province" value="{{ old('province') }}" autofocus>
          
          @error('province')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        
        </div>

        <div class="mb-3">
          <label for="phone_number" class="form-label"><i class="mdi mdi-camera-front-variant menu-icon"></i> Phone Number</label>
          <input type="text" class="form-control form-control-sm @error('phone_number') is-invalid @enderror skill" value="{{ get_meta_value('phone_number') }}" placeholder="phone_number"  name="phone_number" id="phone_number" value="{{ old('phone_number') }}" autofocus>
          
          @error('phone_number')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        
        </div>

        <div class="mb-3">
          <label for="email" class="form-label"><i class="mdi mdi-email-outline menu-icon"></i> Email</label>
          <input type="text" class="form-control form-control-sm @error('email') is-invalid @enderror skill" value="{{ get_meta_value('email') }}" placeholder="your@email.com"  name="email" id="email" value="{{ old('email') }}" autofocus>
          
          @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        
        </div>

       
        {{-- dledhbj --}}
      </div>


      <div class="col-6">
        <p class="card-title">Social Media Account</p>
        <div class="mb-3">
          <label for="facebook" class="form-label"><i class="mdi mdi-facebook menu-icon"></i> Facebook</label>
          <input type="text" class="form-control form-control-sm @error('facebook') is-invalid @enderror skill" value="{{ get_meta_value('facebook') }}" placeholder="your@facebook.com"  name="facebook" id="facebook" value="{{ old('facebook') }}" autofocus>
          
          @error('facebook')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        
        </div>

        <div class="mb-3">
          <label for="instagram" class="form-label"><i class="mdi mdi-instagram menu-icon"></i> Instagram</label>
          <input type="text" class="form-control form-control-sm @error('instagram') is-invalid @enderror skill" value="{{ get_meta_value('instagram') }}" placeholder="your@instagram.com"  name="instagram" id="instagram" value="{{ old('instagram') }}" autofocus>
          
          @error('instagram')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        
        </div>

        <div class="mb-3">
          <label for="twitter" class="form-label"><i class="mdi mdi-twitter menu-icon"></i> Twitter</label>
          <input type="text" class="form-control form-control-sm @error('twitter') is-invalid @enderror skill" value="{{ get_meta_value('twitter') }}" placeholder="your@twitter.com"  name="twitter" id="twitter" value="{{ old('twitter') }}" autofocus>
          
          @error('twitter')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        
        </div>

        <div class="mb-3">
          <label for="linkedin" class="form-label"><i class="mdi mdi-linkedin-box menu-icon"></i> Linkedin</label>
          <input type="text" class="form-control form-control-sm @error('linkedin') is-invalid @enderror skill" value="{{ get_meta_value('linkedin') }}" placeholder="your@linkedin.com"  name="linkedin" id="linkedin" value="{{ old('linkedin') }}" autofocus>
          
          @error('linkedin')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        
        </div>

        <div class="mb-3">
          <label for="github" class="form-label"><i class="mdi mdi-github-circle menu-icon"></i> Github</label>
          <input type="text" class="form-control form-control-sm @error('github') is-invalid @enderror skill" value="{{ get_meta_value('github') }}" placeholder="your@github.com"  name="github" id="github" value="{{ old('github') }}" autofocus>
          
          @error('github')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        
        </div>

        


      </div>
    </div>

        

        <button type="submit" class="btn btn-success text-white">Update</button>
    </form>

   
@endsection