<x-layout>
<x-slot name='title'>Home</x-slot>
<x-slot name='content'>
    
<div class="mt-3">
    
<div class="text-center">
<img src="{{asset('images/a.jpg')}}" alt="" class="img-thumbnail " width="250px" height="150px">

</div>

<div class="mt-5 text-white mx-5 text-justify">
    <h1 class="fw-bold ">hello</h1>

<div class="px-4" style="line-height: 2rem;">

<p style="text-indent: 100px;">

I am <b class="text-warning">Shiva Singh</b> having 1 years of full stack development experience for global bussiness,I offer the technical expertise you are seeking for your web developer position
</p>

<p style="text-indent: 100px;">

Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the <b class="text-warning">1960</b> with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

</p>

</div>

</div>

<div class="text-center">
<a href="{{route('contact')}}" class="btn btn-outline-warning mx-5 my-3">Hire Me</a>
<a href="{{route('contact')}}" class="btn btn-outline-info ">Contact Me</a>

</div>



</div>
</x-slot>

</x-layout>