<x-layout>
<x-slot name='title'>Contact</x-slot>
<x-slot name='content'>
    
<div class="text-white">
    <h2 class="mx-5 text-warning mt-3">Contact Us<i class="fa fa-user-circle" aria-hidden="true"></i></h2>
<hr>
<p class="mx-5 text-white mt-3 " style="font-size: 20px;">Do you have any questions ? Please do not hesitate to contact. </p>

<form class="mx-5">
  <div class="form-row">
    <div class="col">
        <legend>Your Name</legend>
      <input type="text" class="form-control" id="email" placeholder="Enter Your Full Name" name="email">
    </div>
    <div class="col">
        <legend>Your Email <b class="text-danger">*</b></legend>
      <input type="email" class="form-control" placeholder="Enter Your Email Id" name="pswd">
    </div>
  </div>

  <div class="form-group">
    <label for="email">Your Subject:</label>
    <input type="text" class="form-control" placeholder="Enter Subject" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Your Message</label>
    <input type="text" class="form-control" placeholder="Enter Message" id="pwd">
  </div>
 
  <button type="submit" class="btn btn-primary">Send <i class="fa fa-send" aria-hidden="true"></i></button>

</form>

</div>



</x-slot>

</x-layout>