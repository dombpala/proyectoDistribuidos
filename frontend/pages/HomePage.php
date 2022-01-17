<?php
    
    function HomePage($props=[]){
        return(
            '<main class="h-screen bg-white grid gap-4 grid-cols-7">
                <div class="col-span-1">
                    '.Sidebar($props).'
                </div>
                <div class="col-span-6 p-5">
                    <h1 class="text-5xl text-center mt-5 font-bold text-gray-600">
                        CENTRO DE MASCOTAS LP
                    </h1>
                    <div class="pt-5 px-10 flex content-center items-center justify-center">
                        <img src="./assets/cats_welcome.svg" alt="">
                    </div>
                </div>
            </main>'
        );
    };
  ?>
