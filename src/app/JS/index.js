const demo = new Vue({
    el: '#demo',
    data: {
        viewGeneral: true,
        viewPersonnel: false,
        viewSupprimes: false,
        viewConnexion: true
    },
    watch: {
    },
    filters: {
    },
    methods: {
       toggleConnexion: function()
       {
            this.viewConnexion=!this.viewConnexion;
       }
    }
})