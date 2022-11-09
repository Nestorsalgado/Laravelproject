@extends('layout')
@section('contenido')

<div class="container"> <!-- div de contenedor padre -->
    
    

    <div class="conteiner"> <!--contenedor de los div de las columnas-->
       
        
            <div class="col"> <!--primer columna de bienvenida --> 
                <h1>¡Bienvenido a mi negocio! </h1>

                <p>Las mas calientes y sabrosas, la pizza que imaginas la hacemos realidad...</p>

            </div> <!--primer columna de bienvenida -->
    
    <div class="conteiner" >
        <div class="row">
            <div class="col"style="background-color: green ;"> 
                <h2>DESDE ITALIA A LA MESA </h2>
    
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis dolorum incidunt ullam consectetur! Sunt repellendus porro accusantium minima omnis debitis dolor tempora magnam quia ab quibusdam expedita corporis, adipisci libero!</p>
    
            </div>
             <div class="col" > 
                 <h2>¡la parte blanca! </h2>
 
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero iusto magni quis adipisci, quod ipsum? Animi quibusdam provident iusto suscipit a incidunt doloribus odit maiores quae maxime? Alias, quis est!</p>
             </div>
             <div class="col" style="background-color: rgb(154, 5, 5);"> 
                <h2>¡la parte roja! </h2>

                <p>Las mas calientes y sabrosas, la pizza que imaginas la hacemos realidad...</p>
            </div>
         </div> 
    </div><!--contenedor de tres col-->
    
    <div class="conteiner" >
        <div class="row">
            <div class="col-md-8"> 
                <h2>LOS INGREDIENTES MÁS FRESCOS </h2>
    
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis dolorum incidunt ullam consectetur! Sunt repellendus porro accusantium minima omnis debitis dolor tempora magnam quia ab quibusdam expedita corporis, adipisci libero!</p>
    
            </div>
             <div class="col" > 
                 <h2>¡la col de 4! </h2>
 
                 <p>Las mas calientes y sabrosas, la pizza que imaginas la hacemos realidad...</p>
             </div>
             
    </div><!--contenedor de 2 col-->


            
        
    </div> <!--contenedor de los div de las columnas-->

   
    

</div> <!-- div de conten-->
    

@endsection 