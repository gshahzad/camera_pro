 
<section class="Enroll-Services">
<div class="container">
        <h1 class="Enroll-heading">Enroll Camera</h1>
<form wire:submit.prevent="submit">
		<div class="row" >
         @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        </div>
<div class="row" >

  <div class="col-sm-6" >

    <label for="name" class="d-block">Camera Title<span style="color:rgba(255,0,0,1)">*</span></label>
    <input type="text" id="name" name="name"  required="required"  wire:model="name">
    @error('name') <span class="error">{{ $name }} </span> @enderror
    
    <label for="description" class="d-block">Description<span style="color:rgba(255,0,0,1)">*</span></label>
    <input type="text" id="description" name="description"  required="required"  wire:model="description">
    @error('description') <span class="error">{{ $description }} </span> @enderror
    
    <label for="camera_embed_code" class="d-block">Camera Embed Code<span style="color:rgba(255,0,0,1)">*</span></label>
    <textarea type="text" id="camera_embed_code" name="camera_embed_code"  required="required"  style="width: 50%;
        background: #FFFFFF;
        height: 80px;
        border: 1px solid #CCCCCC;
        border-radius: 5px;
        padding: 10px;
        display: flex;"  wire:model="camera_embed_code"></textarea>
    @error('camera_embed_code') <span class="error">{{ $camera_embed_code }} </span> @enderror
    <label for="camera_longitude" class="d-block">Camera Longitude<span style="color:rgba(255,0,0,1)">*</span></label>
    <input type="text" id="camera_longitude" name="camera_longitude"  required="required" wire:model="camera_longitude" >
    @error('camera_longitude') <span class="error">{{ $camera_longitude }} </span> @enderror
    
    <label for="camera_latitude" class="d-block">Camera Latitude<span style="color:rgba(255,0,0,1)">*</span></label>
    <input type="text" id="camera_latitude" name="camera_latitude" required="required" wire:model="camera_latitude" >
    @error('camera_latitude') <span class="error">{{ $camera_latitude }} </span> @enderror
    
    <label for="full_name" class="d-block">User Full Name<span style="color:rgba(255,0,0,1)">*</span></label>
        <input type="text" id="full_name" name="full_name"  required="required" wire:model="full_name"  >
        @error('full_name') <span class="error">{{ $full_name }} </span> @enderror
        
        <label for="email_address" class="d-block">E-mail Address<span style="color:rgba(255,0,0,1)">*</span></label>
        <input type="text" id="email_address" name="email_address"  required="required"  wire:model="email_address" >
        @error('email_address') <span class="error">{{ $email_address }} </span> @enderror
        

</div>
  <div class="col-sm-6">
        <label for="contact_no" class="d-block">Contact Number<span style="color:rgba(255,0,0,1)">*</span></label>
        <input type="text" id="contact_no" name="contact_no"   required="required" wire:model="contact_no" >
        @error('contact_no') <span class="error">{{ $contact_no }} </span> @enderror
        
        
        <label for="address" class="d-block">Address<span style="color:rgba(255,0,0,1)">*</span></label>
        <input type="text" id="address" name="address"  required="required" wire:model="address" >
        @error('address') <span class="error">{{ $address }} </span> @enderror
        
        
        <label for="city" class="d-block">City<span style="color:rgba(255,0,0,1)">*</span></label>
        <input type="text" id="city" name="city"   required="required" wire:model="city" >
        @error('city') <span class="error">{{ $city }} </span> @enderror
        
        <label for="post_code" class="d-block">Post Code<span style="color:rgba(255,0,0,1)">*</span></label>
        <input type="text" id="post_code" name="post_code"  required="required" wire:model="post_code" >
        @error('post_code') <span class="error">{{ $post_code }} </span> @enderror
        
        
        <label for="country" class="d-block">Country <span style="color:rgba(255,0,0,1)">*</span></label>
        <input type="text" id="country" name="country"  required="required" wire:model="country" >
        @error('country') <span class="error">{{ $country }} </span> @enderror
    <button type="submit"  style="margin-top:20px;">Submit</button>

        </div>
</div>
        </form>
    </section>
