@if(session()->has('success'))

    <div x-data="{show:true}"
         x-init="setTimeout(()=> show=false, 4000)"
         x-show = "show"
         class="fixed top-3 left-3 bg-green-500 text-white py-3 px-4 rounded-xl text-sm">
        <p>{{session()->get('success')}}</p>
    </div>
@endif
