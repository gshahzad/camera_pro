<section class="Enroll-Services">
<div class="container">
        <h1 class="Enroll-heading" style="font-size:32px;"> {{$camera->name}}</h1>
		
        <div class="row" >
           @if (session()->has('success'))
                <div class="col-sm-12">
                    <div class="alert alert-success">
                       Congratulation :  {{ session('success') }}
                    </div>
                 </div>
           @endif
                 <div class="col-sm-12">
                 <p style="text-align:center"> <video id="vid" muted="" playsinline="" loop="" autoplay="" width="800" height="600"> <source src="https://watcher.org.uk/wp-content/uploads/2022/10/watcher-clip.mp4" type="video/mp4"> Your browser does not support the video tag. </video></p> 
                  <p></p> 
                 </div>
        </div>
        <input wire:model.defer="order_id" type="hidden" id="order_id" name="order_id" value="" > 
</section>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script type="application/javascript">
	 
	 Livewire.emit('updateDuration');
</script>