<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="content">

          <div class=" input-group  col-md-8">
            
             <input type="text"  v-model="dni"  class="form-control" placeholder="Buscar por DNI ">
  
            <button class="btn btn-primary" @click="busca">Buscar</button>
          </div>


          <div class="col-md-8">
            <label for="inputEmail4" class="form-label" >Apellidos y Nombres</label
            >
            <input type="text" v-model="ape_nom" class="form-control" />
          </div>
          <div class="col-md-4">
            <label for="inputPassword4" class="form-label">Celular</label>
            <input type="text" v-model="celular" class="form-control" />
          </div>

          <div class="input-group col-md-8">
             <button class="btn btn-primary"  @click="guardar">Guardado</button>
          </div>


         
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      ape_nom: "",
      dni: "",
      celular: "",
    };
  },
  methods: {
    busca() {
      const TOKEN =
        "339e485b4dac237375a74c57bc7e8861b885c93d5f6558b2d2c9203237807bb3";
      const BASEURL = "https://vemasystem.com/api/";
      const ENDPOINT = "dni";
      const dniB = { dni: this.dni };
      axios
        .create({
          baseURL: BASEURL,
          headers: {
            "Content-Type": "application/json",
            Authorization: "Bearer " + TOKEN,
          },
        })
        .post(ENDPOINT, dniB)
        .then((res) => {
          //ira la modificacion de los datos
          this.ape_nom = res.data.nombre_completo;
          console.log(res.data);
        });
    },
    guardar() {
      let me = this;
      let url = "/paciente-vue/registra"; //Ruta que hemos creado para enviar una tarea y guardarla
      axios
        .post(url, {
          //estas variables son las que enviaremos para que crear la tarea
          ape_nom: this.ape_nom,
          dni: this.dni,
          celular: this.celular,
        })
        .then(function (response) {
          me.getTasks(); //llamamos al metodo getTask(); para que refresque nuestro array y muestro los nuevos datos
          me.clearFields(); //Limpiamos los campos e inicializamos la variable update a 0
        })
        .catch(function (error) {
          console.log(error);
        });
    },
  },
  mounted() {
    console.log("Component mounted.");
  },
};
</script>
