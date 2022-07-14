@extends('layout.conquer')

@section('content')
<h3 class="page-title">
	Welcome to Prima Photo Studio
</h3>
	<div class="page-bar">
	    <ul class="page-breadcrumb">
			<li>
				<i class="fa fa-home"></i>
				<a href="index.html">Home</a>
				<i class="fa fa-angle-right"></i>
			</li>
			<li>
				<a href="#">Welcome</a>
			</li>

<li >
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="#" onclick="showInfo()">
<i class="icon-bulb"></a></i>
</li>

		</ul>
	</div>

<div class="content">
<div id='showinfo'>
<!--isi -->
</div>
<div class="title m-b-md" id="judul">
    Prima Photo
</div>
<div class="links">

	<a class="btn btn-default" data-toggle="modal" href="#disclaimer">Disclaimer</a>

</div> 


<div class="modal fade" id="disclaimer" tabindex="-1" role="basic" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
          <h4 class="modal-title">DISCLAIMER</h4>
        </div>


        
        <div class="modal-body">
          Pictures shown are for illustration purpose only.Actual product may vary due to product enhancement. 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
   </div>
</div>
@endsection


<!--  -->






                