 <?php
  include './components/tableMascota.php';
  function AdoptionPage($props=[]){
     return(
      '<main class="h-screen bg-white grid gap-4 grid-cols-7">
        <div class="col-span-1">
          '.Sidebar(array("username"=>$props['username'], "active_menu"=>$props['active_menu'])).'
        </div>
    
        <div class="col-span-6 p-5">
          <h1 class="font-bold text-5xl ml-10">Adopción</h1>
          <p class="text-gray-400 py-2 ml-10">Selecciona una mascota</p>
          '.tableMascotas($props['pet_list']).'
        </div>
      </main>'
    );
  }
?>