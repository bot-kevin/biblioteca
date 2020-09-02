<template>
<div>
    <h2>Registro de actividades</h2>   
    

    

      <form v-on:submit.prevent = "nuevaActividad()" action="" enctype="multipart/form-data">

        <div class="form-group">
            <label for="categoria">Categoría: </label> 
                    <!--<button class="dropdown-item" type="button" @click="onclickcategoria('Cultura')">Cultura</button>
                    <button class="dropdown-item" type="button" @click="onclickcategoria('Deporte')">Deporte</button>
                    <button class="dropdown-item" type="button" @click="onclickcategoria('Éxito académico')">Éxito académico</button>
                    <button class="dropdown-item" type="button" @click="onclickcategoria('Diversidad y género')">Diversidad y género</button>-->
            <select class="form-control" id="categoria" name="categoria"
             v-model="actividad.categoria" @change="llenarsubcategoria($event)">                                         
                <option  v-for="(micategoria) in veccategorias" v-bind:key="micategoria.id">
                    {{micategoria.nombre}}
                    </option>                                                                                      
            </select>                    
        </div>

        <div class="form-group" v-if="actividad.categoria" >
            <label for="subcategoria">Sub categoría: </label>                
                <select class="form-control" id="subcategoria" name="subcategoria">                                                             
                    <option value="" v-for="(missubactivit) in vecSubcategorias" v-bind:key="missubactivit.id" >
                            {{missubactivit.nombre}}
                        </option>                                                                                      
                </select>
        </div>
        
        <div class="form-group">
          <label for="title">Título de la actividad</label>
          <input type="text" class="form-control" id="title" 
                aria-describedby="emailHelp" placeholder="Escriba el título de la nueva actividad"
                >          
        </div>

        <div class="form-group">
          <label for="description">Descripción</label>          
          <textarea class="form-control" rows="3" id="description" 
                    placeholder="Escriba la descripción de la nueva actividad"></textarea>
        </div>
        
        <div class="form-group">
            <label for="image">Adjuntar imagen</label>
            <input type="file" id="image" 
                    class="btn btn-outline-primary" >         
        </div>
        <button type="submit" class="btn btn-success">Crear Actividad</button>

      </form> 
</div>
</template>

<script>
    export default {
        data(){
            return {
                actividad: {
                    categoria: '',
                    subcategoria: '',
                    titulo: '',
                    descripcion:'',
                    nombre_imagen: ''
                },
                vecActividades: [], 
                vecSubcategorias: [] , 
                veccategorias:[],
                indiceSucbategoria : 0,
                existecategoria: false
            }
        },
        mounted() {            
            axios.post('/categorias') .then ( (response) => {                
                this.veccategorias = response.data;                                
                //console.log(response.data)
            }) .catch ((e) =>{
                console.log(e);
            })  

        },
        methods:{                   
            nuevaActividad(){
                console.log(this.actividad);
            },
            llenarsubcategoria(e){
                axios.post('/subcategorias') .then ( (response) => {                
                    let vec = response.data;  
                    vec.forEach(element => {
                        console.log(element)
                    });
                }) .catch ((e) =>{
                    console.log(e);
                })  
            }
            
        },
        computed:{
            
        }
    }
</script>
