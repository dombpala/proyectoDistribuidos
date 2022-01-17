<?php
    include './components/menuCard.php';

    function MenuPage($props=[]){
        return(
            '<main class="h-screen bg-white grid gap-4 grid-cols-7">
                    <div class="col-span-1">
                        '.Sidebar($props).'
                    </div>
                    <div class="col-span-6 p-5">
                        <h1 class="text-5xl font-bold ml-10">Menú</h2>
                        <p class="text-gray-400 py-2 ml-10">Selecciona un recurso</p>
                        '.menuCard().'
                    </div>
                </main>'
        );
    }
?>
