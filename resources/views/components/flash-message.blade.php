@if(Session::has('success'))
<div x-data="{show: true}" x-init="setTimeout(() => show=false, 3000)" x-show="show" class="w-2/6 mx-auto my-5 py-2 rounded-md text-center bg-green-400 text-black">
    <p>{{ Session::get('success') }}</p>
</div>
@endif