<div>

  @if($state == 0)
  <div class="mb-3">
    <label for="phone" class="form-label">Phone</label>


     <div class="input-group">
      <span class="input-group-text">KE (+254)</span>
      <input type="number" wire:model="phone" id="phone-number-mask" class="form-control phone-number-mask" placeholder="7123456789" />
    </div>
    {{-- <input type="text" wire:model="phone" class="form-control" id="username" name="phone" placeholder="+254757869730" autofocus> --}}
    @error('phone')
    <div class="alert alert-danger"> {{ $message }} </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input wire:model="email" type="text" class="form-control" id="email" name="email" placeholder="Enter your email">
    @error('email')
    <div class="alert alert-danger"> {{ $message }} </div>
    @enderror
  </div>
  <button wire:click="submit" class="btn btn-primary d-grid w-100">
    next
  </button>
  @elseif($state == 1)
  <div class="mb-3">

    <div class="mb-3">
    <label class="form-label">Apartmen/Property Name </label>
    <input wire:model="property_name" type="text" class="form-control"  placeholder="Njuguna's Apartments">
    @error('property_name')
    <div class="alert alert-danger"> {{ $message }} </div>
    @enderror
  </div>
  <div class="mb-3">

    <div class="mb-3">
    <label class="form-label">Property Tenants Size</label>
    <input wire:model="property_size" type="number" min="0" max="200" class="form-control"  placeholder="20">
    @error('property_size')
    <div class="alert alert-danger"> {{ $message }} </div>
    @enderror
  </div>
  <button wire:click="step1" class="btn btn-primary d-grid w-100">
    next
  </button>
  @elseif($state == 3)
  <div class="mb-3">


    <div class="mb-3">
    <label class="form-label">subdomain</label>
    <div class="input-group">
      @if($domain_found == 0)
      <input type="text" class="form-control" wire:model="sub_domain" placeholder="kimoencourt" aria-label="subdomain" aria-describedby="basic-addon13" />
      @elseif($domain_found == 2)
      <input disabled type="disabled" class="form-control" wire:model="sub_domain" placeholder="{{  $sub_domain }}" aria-label="subdomain" aria-describedby="basic-addon13" />

      @elseif($domain_found == 1)
      <input type="text" class="form-control" wire:model="sub_domain" placeholder="{{  $sub_domain }}" aria-label="subdomain" aria-describedby="basic-addon13" />
      @endif
      <span class="input-group-text" id="basic-addon13">.smarthomes.ke</span>



    </div>
    @if($domain_found == 2)
    <a href="#" wire:click="Reenter">re enter domain name</a>
    @endif

    @error('sub_domain')
    <div class="alert alert-danger"> {{ $message }} </div>
    @enderror
  </div>


  @if($domain_found ==0)

  <button wire:click="searchDomain" class="btn btn-primary d-grid w-50">
    Search Domain
  </button>
  @elseif($domain_found == 1)

  @if($domain_found_true == 'true')
  <div class="alert alert-danger"> subdomain Already taken </div>
  @endif

  <button wire:click="searchDomain" class="btn btn-primary d-grid w-50">
    Search Domain
  </button>

  @elseif ($domain_found==2)
  <div class="alert alert-success">subdomain Available</div>
  <button wire:click="step2" class="btn btn-primary d-grid w-100">
    next
  </button>

  @endif




  @elseif($state == 4)

  <div class="mb-3 form-password-toggle">
    <label class="form-label" for="password">Password</label>
    <div class="input-group input-group-merge">
      <input type="password" wire:model="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
      <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
    </div>
    @error('password')
    <div class="alert alert-danger"> {{ $message }} </div>
    @enderror
  </div>
  <div class="mb-3 form-password-toggle">
    <label class="form-label" for="password">Repeat Password</label>
    <div class="input-group input-group-merge">
      <input type="password" wire:model="repeat_password" class="form-control"  placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
      <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
    </div>
    @error('repeat_password')
    <div class="alert alert-danger"> {{ $message }} </div>
    @enderror
  </div>



  <div class="mb-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" wire:model="terms" name="terms">
      <label class="form-check-label" for="terms-conditions">
        I agree to
        <a href="javascript:void(0);">privacy policy & terms</a>
      </label>
    </div>
  </div>


  <button wire:click="save" class="btn btn-primary d-grid w-100">
    Submit
  </button>


@endif




</div>
