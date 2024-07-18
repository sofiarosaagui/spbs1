// $(document).ready(function () {
//     console.log("Entro al ready")
//     var tipo="";
//     var color=""; 
//     var capacidad="";
//     //LOS TIPOS DE TERMOS
//     $("#vaso").click(function(e){
//         tipo="vaso";
//         if( tipo=="vaso" && color=="blanco" && capacidad=="16oz")
//         console.log("Entro al click de vaso ")
//         $(".botella, .taza, .hielera").fadeOut("slow");
//         $(".vaso").fadeIn();
//     });
//     $("#botella").click(function(e){
//         tipo="botella";
//         console.log("Entro al click de botella ")
//         $(".vaso, .taza, .hielera").fadeOut("slow");
//         $(".botella").fadeIn();
//     });
//     $("#taza").click(function(e){
//         console.log("Entro al click de taza")
//         $(".vaso, .botella, .hielera").fadeOut("slow");
//         $(".taza").fadeIn();
//     });
//     $("#hielera").click(function(e){
//         console.log("Entro al click de hielera")
//         $(".vaso, .botella, .taza").fadeOut("slow");
//         $(".hielera").fadeIn();
//     });
//     $("#todo").click(function(e){
//         console.log("Entro al click de reset " + e.target.id)
//         $(".vaso, .botella, .taza").fadeIn("slow");
//     });


//     //LOS COLORES 
//     $("#hielera").click(function(e){
//         console.log("Entro al click de hielera")
//         $(".vaso, .botella, .taza").fadeOut("slow");
//         $(".hielera").fadeIn();
//     });
//     //CAPACIDAD


// });


$(document).ready(function () {
    console.log("Entro al ready")
    // tipo
    $("#vaso").click(function(e){
        console.log("Entro al click de vaso ")
        $(".botella, .taza, .hielera, .24oz, .48, .16oz, .105, .40oz, .32oz, .gris, .blanco, .rosa, .negro, .azul").fadeOut("slow");
        $(".vaso").fadeIn();
    });
    $("#botella").click(function(e){
        console.log("Entro al click de botella ")
        $(".vaso, .taza, .hielera, .24oz, .48, .16oz, .105, .40oz, .32oz, .gris, .blanco, .rosa, .negro, .azul").fadeOut("slow");
        $(".botella").fadeIn();
    });
    $("#taza").click(function(e){
        console.log("Entro al click de taza")
        $(".botella, .vaso, .hielera, .24oz, .48, .16oz, .105, .40oz, .32oz, .gris, .blanco, .rosa, .negro, .azul").fadeOut("slow");
        $(".taza").fadeIn();
    });
    $("#hielera").click(function(e){
        console.log("Entro al click de hielera")
        $(".botella, .taza, .vaso, .24oz, .48, .16oz, .105, .40oz, .32oz, .gris, .blanco, .rosa, .negro, .azul").fadeOut("slow");
        $(".hielera").fadeIn();
    });

    // cantidad
    $("#24oz").click(function(e){
        console.log("Entro al click de 24oz ")
        $(".botella, .taza, .hielera, .vaso, .48, .16oz, .105, .40oz, .32oz, .gris, .blanco, .rosa, .negro, .azul").fadeOut("slow");
        $(".24oz").fadeIn();
    });
    $("#48").click(function(e){
        console.log("Entro al click de 48 ")
        $(".botella, .taza, .hielera, .24oz, .vaso, .16oz, .105, .40oz, .32oz, .gris, .blanco, .rosa, .negro, .azul").fadeOut("slow");
        $(".48").fadeIn();
    });
    $("#16oz").click(function(e){
        console.log("Entro al click de 16oz")
        $(".botella, .taza, .hielera, .24oz, .48, .vaso, .105, .40oz, .32oz, .gris, .blanco, .rosa, .negro, .azul").fadeOut("slow");
        $(".16oz").fadeIn();
    });
    $("#105").click(function(e){
        console.log("Entro al click de 105")
        $(".botella, .taza, .hielera, .24oz, .48, .16oz, .vaso, .40oz, .32oz, .gris, .blanco, .rosa, .negro, .azul").fadeOut("slow");
        $(".105").fadeIn();
    });


    $("#40oz").click(function(e){
        console.log("Entro al click de 40oz ")
        $(".botella, .taza, .hielera, .24oz, .48, .16oz, .105, .vaso, .32oz, .gris, .blanco, .rosa, .negro, .azul").fadeOut("slow");
        $(".40oz").fadeIn();
    });
    $("#32oz").click(function(e){
        console.log("Entro al click de botella ")
        $(".botella, .taza, .hielera, .24oz, .48, .16oz, .105, .40oz, .vaso, .gris, .blanco, .rosa, .negro, .azul").fadeOut("slow");
        $(".32oz").fadeIn();
    });

     // color

    $("#gris").click(function(e){
        console.log("Entro al click de gris")
        $(".botella, .taza, .hielera, .24oz, .48, .16oz, .105, .40oz, .32oz, .vaso, .blanco, .rosa, .negro, .azul").fadeOut("slow");
        $(".gris").fadeIn();
    });
    $("#blanco").click(function(e){
        console.log("Entro al click de blanco")
        $(".botella, .taza, .hielera, .24oz, .48, .16oz, .105, .40oz, .32oz, .gris, .vaso, .rosa, .negro, .azul").fadeOut("slow");
        $(".blanco").fadeIn();
    });

    $("#rosa").click(function(e){
        console.log("Entro al click de rosa")
        $(".botella, .taza, .hielera, .24oz, .48, .16oz, .105, .40oz, .32oz, .gris, .blanco, .vaso, .negro, .azul").fadeOut("slow");
        $(".rosa").fadeIn();
    });
    $("#negro").click(function(e){
        console.log("Entro al click de negro")
        $(".botella, .taza, .hielera, .24oz, .48, .16oz, .105, .40oz, .32oz, .gris, .blanco, .rosa, .vaso, .azul").fadeOut("slow");
        $(".negro").fadeIn();
    });

    $("#azul").click(function(e){
        console.log("Entro al click de azul")
        $(".botella, .taza, .hielera, .24oz, .48, .16oz, .105, .40oz, .32oz, .gris, .blanco, .rosa, .negro, .vaso").fadeOut("slow");
        $(".azul").fadeIn();
    });

    $("#todo").click(function(e){
        console.log("Entro al click de reset " + e.target.id)
        $(".vaso, .botella, .taza, .hielera, .24oz, .48, .16oz, .105, .40oz, .32oz, .gris, .blanco, .rosa, .negro, .azul").fadeIn("slow");
    });

});



