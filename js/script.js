const app = new Vue ({
  el: '#app',
  data: {

  },
  methods: {
    getAllProjects: function () {
      axios
        .get('http://localhost/php-ajax-dischi/server.php') 
        .then(function (response) {
          if (response.data.error) {
            this.errorMsg = response.data.message;
            console.log('error ->',response.data.message);
          } else {
            this.projects = response.data.projects;
          }
        });
    }}
})