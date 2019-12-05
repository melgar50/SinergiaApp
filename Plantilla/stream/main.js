var url = "bd/crud.php";

var appAlumnos = new Vue({    
el: "#appAlumnos",   
data:{     
     alumnos:[],          
     nombre:"",
     apellidos:"",
     fecha_nac:"",
     total:0,       
 },    
methods:{  
    //BOTONES        
    btnAlta:async function(){                    
        const {value: formValues} = await Swal.fire({
        title: 'NUEVO',
        html:
        '<div class="row"><label class="col-sm-3 col-form-label">Nombre</label><div class="col-sm-7"><input id="nombre" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">Apellidos</label><div class="col-sm-7"><input id="apellidos" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">Fecha_nac</label><div class="col-sm-7"><input id="fecha_nac" type="date"  class="form-control"></div></div>',              
        focusConfirm: false,
        showCancelButton: true,
        confirmButtonText: 'Guardar',          
        confirmButtonColor:'#1cc88a',          
        cancelButtonColor:'#3085d6',  
        preConfirm: () => {            
            return [
              this.nombre = document.getElementById('nombre').value,
              this.apellidos = document.getElementById('apellidos').value,
             this.fecha_nac = document.getElementById('fecha_nac').value                    
            ]
          }
        })        
        if(this.nombre == "" || this.apellidos == "" || this.fecha_nac == ""){
                Swal.fire({
                  type: 'info',
                  title: 'Datos incompletos',                                    
                }) 
        }       
        else{          
          this.altaAlumno();          
          const Toast = Swal.mixin({
              toast: true,
              position: 'top-end',
              showConfirmButton: false,
              timer: 3000
            });
            Toast.fire({
              type: 'success',
              title: '¡Producto Agregado!'
            })                
        }
    },           
    btnEditar:async function(id, nombre, apellidos, fecha_nac){                            
        await Swal.fire({
        title: 'EDITAR',
        html:
        '<div class="form-group"><div class="row"><label class="col-sm-3 col-form-label">Nombre</label><div class="col-sm-7"><input id="nombre" value="'+nombre+'" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">Apellidos</label><div class="col-sm-7"><input id="apellidos" value="'+apellidos+'" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">Fecha_nac</label><div class="col-sm-7"><input id="fecha_nac" value="'+fecha_nac+'" type="date"  class="form-control"></div></div></div>', 
        focusConfirm: false,
        showCancelButton: true,                         
        }).then((result) => {
          if (result.value) {                                             
            nombre = document.getElementById('nombre').value,    
            apellidos = document.getElementById('apellidos').value,
            fecha_nac = document.getElementById('fecha_nac').value,                    
            
            this.editarAlumno(id,nombre,apellidos,fecha_nac);
            Swal.fire(
              '¡Actualizado!',
              'El registro ha sido actualizado.',
              'success'
            )                  
          }
        });
        
    },        
    btnBorrar:function(id){        
        Swal.fire({
          title: '¿Está seguro de borrar el registro: '+id+" ?",         
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor:'#d33',
          cancelButtonColor:'#3085d6',
          confirmButtonText: 'Borrar'
        }).then((result) => {
          if (result.value) {            
            this.borrarAlumno(id);             
            //y mostramos un msj sobre la eliminación  
            Swal.fire(
              '¡Eliminado!',
              'El registro ha sido borrado.',
              'success'
            )
          }
        })                
    },       
    
    //PROCEDIMIENTOS para el CRUD     
    listarAlumnos:function(){
        axios.post(url, {opcion:4}).then(response =>{
           this.alumnos = response.data;       
        });
    },    
    //Procedimiento CREAR.
    altaAlumno:function(){
        axios.post(url, {opcion:1, nombre:this.nombre, apellidos:this.apellidos,fecha_nac:this.fecha_nac }).then(response =>{
            this.listarAlumnos();
        });        
         this.nombre = "",
         this.apellidos = "",
         this.fecha_nac = 0
    },               
    //Procedimiento EDITAR.
    editarAlumno:function(id,nombre,apellidos,fecha_nac){       
       axios.post(url, {opcion:2, id:id, nombre:nombre, apellidos: apellidos, fecha_nac:fecha_nac }).then(response =>{           
           this.listarAlumnos();           
        });                              
    },    
    //Procedimiento BORRAR.
    borrarAlumno:function(id){
        axios.post(url, {opcion:3, id:id}).then(response =>{           
            this.listarAlumnos();
            });
    }             
},      
created: function(){            
   this.listarAlumnos();            
},    
    
});