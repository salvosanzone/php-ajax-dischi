const app = new Vue ({
  el: '#app',
  data: {
    discs: [],
  },
  methods: {
    getApi(){
      axios.get('http://localhost/php-ajax-dischi/server.php').
      then(response => {
        this.discs = response.data;
        //salvo in un array vuoto il dato che mi arriva dal json
        console.log('array discs ->',this.discs);
      })
    }
  },
  mounted(){
    //al caricamento della pagina richiamo la funzione 
    this.getApi();
  }
});