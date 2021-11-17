<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="content">
          <p>Hola este es un componente solo de lista</p>

          <table>
            <thead>
              <td>Dni</td>
              <td>Ape Nombres</td>
            </thead>
            <tbody>
              <tr v-for="seleccion in pacientes" :key="seleccion.idpaciente">
                <td>{{ seleccion.dni }}</td>
                <td>{{ seleccion.ape_nom }}</td>
              </tr>
            </tbody>
          </table>


        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      pacientes: [],
    };
  },
  methods: {
    listar() {
      let me = this;
      let url = "/paciente-vue/lista";
      axios
        .get(url)
        .then(function (response) {
          //creamos un array y guardamos el contenido
          console.log(response.data);
          me.pacientes = response.data;
        })
        .catch(function (error) {
          // handle error
          console.log(error);
        });
    },
  },
  mounted() {
    this.listar();
    console.log("Component mounted." + this.pacientes);
  },
};
</script>
