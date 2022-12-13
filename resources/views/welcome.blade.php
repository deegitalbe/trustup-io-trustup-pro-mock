
       @extends('trustup-io-projects::master')
       

       @section('content')
       <div>
       <h1 class="text-5xl mb-4">Nouveautés</h1>
        <div class=" h-screen border border-slate-200 grid grid-cols-3 p-8">
            <div class=" overflow-scroll col-span-1">
                @foreach($updates as $update_published => $group)
                    <div class="p-4 font-bold text-slate-400">{{ date('l d F Y' , strtotime($update_published)) }}</div>
                    @foreach($group as $update)
                        <div id="{{ $update->uuid }}" onclick="select( '{{ $update->uuid }}', '{{ $update->title }}', '{{ $update->excerpt }}' )" class=" update cursor-pointer p-4 m-4 flex items-center rounded-lg">
                            <i class="{{ $update->icon }} p-4 text-2xl"></i>
                            <div>
                                <div class="text-xl font-bold">{{ $update->title }}</div>
                                <div>{{ $update->project->title }}</div>
                            </div>
                        
                        </div>
                    @endforeach
                
                @endforeach
            </div>
            <div id="container" class="prose col-span-2 p-4 pl-8">
                Select a update to see what is inside
            </div>
        </div>
       </div>
       

        <script>
            function select(id, title, excerpt){
               let element = document.getElementsByClassName('update');
               for( let i =0; i < element.length; i++) {
                    element[i].classList.remove('bg-slate-100');
               }
               document.getElementById(`${id}`).classList.add('bg-slate-100');

               document.getElementById('container').innerHTML = "<h2>" + title + "</h2>" + "<p>" + excerpt + "</p>"
            }
            
        </script>

        @endsection

