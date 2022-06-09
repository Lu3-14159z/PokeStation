const carrusel__contenedor=document.querySelector('.carrusel__contenedor')
const punto=document.querySelectorAll('.punto')

punto.forEach( ( cadaPunto , i )=> {
    // Asignamos un CLICK a cadaPunto
    punto[i].addEventListener('click',()=>{

        let posicion=i
        //Calculando el espacio que debe DESPLAZARSE el Carrusel
        let operacion=posicion * - (100/14)

        //Movemos el carrusel en el eje x
        carrusel__contenedor.style.transform=`translateX(${operacion}%)`

        //Recorremos todos los punto
        punto.forEach(( cadaPunto , i )=>{
            // Quitar la clase ACTIVO a TODOS los punto
            punto[i].classList.remove('activo')
        })
        // Añadir la clase activo en el punto que hemos hecho CLICK
        punto[i].classList.add('activo')
    })
})