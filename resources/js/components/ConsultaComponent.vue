<template>
  <div class="content">
  <div class="input-group col-md-3">
    <div class="input-group-prepend">
      <span class="input-group-text" id="basic-addon1">DNI</span>
    </div>
    <input type="text" class="form-control" v-model="dni" placeholder="DNI" aria-label="Username" aria-describedby="basic-addon1">
    <div class="col-md-3">
    <button  class="btn btn-primary" @click="buscar()">Buscar</button>
    </div>

<input placeholder="Apellidos y Nombres" v-model="txtape_nom" type="text">

<input placeholder="Celular"  v-model="txtcelular" type="text">

<input placeholder="sexo"  v-model="txtsexo" type="text">

  </div>
 
</div>
</template>

<script>
export default {
  data() {
    return {
      txtape_nom:"",
      txtcelular:"",
      txtsexo:"",

      dni:"",
      notas: [],
      modoEditar: false,
      nota: {nombre: '', descripcion: ''}
    }
  },
  created(){
    axios.get('/notas').then(res=>{
      this.notas = res.data;
    })
  },
  methods:{
    buscar(){
      
      const TOKEN ='339e485b4dac237375a74c57bc7e8861b885c93d5f6558b2d2c9203237807bb3';
      const BASEURL = 'https://vemasystem.com/api/';
      const ENDPOINT = 'dni';
      const dniB = { dni: this.dni };
      axios.create({
              baseURL: BASEURL,
              headers: {
                  'Content-Type': 'application/json',
                  'Authorization': 'Bearer '+TOKEN
              }
          })
          .post(ENDPOINT,dniB)
          .then(res => {
            //ira la modificacion de los datos
            this.txtape_nom=res.data.nombre_completo;
                  console.log(res.data);
          });
      //alert("Buscar:"+this.dni);
    },
    agregar(){
      if(this.nota.nombre.trim() === '' || this.nota.descripcion.trim() === ''){
        alert('Debes completar todos los campos antes de guardar');
        return;
      }
      const notaNueva = this.nota;
      this.nota = {nombre: '', descripcion: ''};    
      axios.post('/notas', notaNueva)
        .then((res) =>{
          const notaServidor = res.data;
          this.notas.push(notaServidor);
        })
    },
    editarFormulario(item){
      this.nota.nombre = item.nombre;
      this.nota.descripcion = item.descripcion;
      this.nota.id = item.id;
      this.modoEditar = true;
    },
    editarNota(nota){
      const params = {nombre: nota.nombre, descripcion: nota.descripcion};
      axios.put(`/notas/${nota.id}`, params)
        .then(res=>{
          this.modoEditar = false;
          const index = this.notas.findIndex(item => item.id === nota.id);
          this.notas[index] = res.data;
        })
    },
    eliminarNota(nota, index){
      const confirmacion = confirm(`Eliminar nota ${nota.nombre}`);
      if(confirmacion){
        axios.delete(`/notas/${nota.id}`)
          .then(()=>{
            this.notas.splice(index, 1);
          })
      }
    },
    cancelarEdicion(){
      this.modoEditar = false;
      this.nota = {nombre: '', descripcion: ''};
    }
  }
}
</script>