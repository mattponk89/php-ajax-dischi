Vue.config.devtools = true

const app = new Vue({
  el: '#root',
  data: {
    disks:[],
    genreSelected: "All"
  },
  mounted: function(){
    axios.get("http://localhost/php-ajax-dischi/esercizio2/server.php")
          .then(result => {
            this.disks = result.data.response
          })
  },

  methods: {
    genreSelection: function () {
      if (this.genreSelected == "All") {
        axios.get("http://localhost/php-ajax-dischi/esercizio2/server.php")
          .then(result => {
            console.log(result.data)
            this.disks = result.data.response
          })

      } else {
        axios.get("http://localhost/php-ajax-dischi/esercizio2/server.php?genre="+this.genreSelected)
          .then(result => {
            console.log(result.data)

            this.disks = result.data.response
          })
      }
    }
  }
});
